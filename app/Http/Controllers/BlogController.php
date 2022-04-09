<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageLib;
use App\Models\Blog;
class BlogController extends Controller{
    /*
        Function: getAdminAll();
        Description: Returns all articles page in admin panel
        Usage(s): web.php
    */
    public function getAdminAll(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        //Get all articles
        $Articles = Blog::latest()->get();
        return view('admin.blogs.all' , compact('Articles'));
    }

    /*
        Function: getAdminNew();
        Description: Returns new article page on admin
        Usage(s): web.php
    */
    public  function getAdminNew(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('admin.blogs.new');
    }
    /*
        Function: postAdminNew();
        Description: Handles the upload article logic
        Usage(s): web.php
    */
    public function postAdminNew(Request $r): \Illuminate\Http\RedirectResponse {
        //Validate the request
        $r->validate([
            'title' => 'required|min:5',
            'slug' => 'required|min:5|unique:blogs',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
        //Initiate an array with the article data
        $BlogData = $r->except('token');
        $BlogData['slug'] = strtolower(str_replace(' ' , '-' , $r->slug));
        $BlogData['user_id'] = auth()->user()->id;
        $BlogData['is_promoted'] = ($r->has('is_promoted')) ? 1 : 0;
        //Handle image upload if any (currently the image is required, but if in future the client decoded to make optional we will have the case already considered)
        if($r->has('image')){
            //Resize the image
            $img = ImageLib::make($r->image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/blogs/'.$BlogData['slug'].'.'.$r->image->getClientOriginalExtension());
            //Return the filename
            $BlogData['image'] = $BlogData['slug'].'.'.$r->image->getClientOriginalExtension();
        }
        //Upload the article
        $TheArticle = Blog::create($BlogData);
        //Log this event
        FireEventLog('Blog', 'Created', $TheArticle->id , auth()->user()->id);
        return redirect()->route('admin.blogs.all');
    }

    // non-admin routes
    /*
        Function: getAll();
        Description: Returns all articles page
        Usage(s): web.php
    */
    public function getAll(){
        return view('blog.all');
    }
    /*
        Function: getSingle($slug, $id);
        Description: Returns single article page based on the id (the slug is required for SEO only)
        Usage(s): web.php
    */
    public  function getSingle($slug, $id){
        return view('blog.single');
    }
}
