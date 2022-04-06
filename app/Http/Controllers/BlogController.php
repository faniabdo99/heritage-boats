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
    public function getAdminAll(){
        //Get all articles
        $Articles = Blog::latest()->get();
        return view('admin.blogs.all' , compact('Articles'));
    }

    /*
        Function: getAdminNew();
        Description: Returns new article page on admin
        Usage(s): web.php
    */
    public  function getAdminNew(){
        return view('admin.blogs.new');
    }
    /*
        Function: postAdminNew();
        Description: Handles the upload article logic
        Usage(s): web.php
    */
    public function postAdminNew(Request $r){
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
        Blog::create($BlogData);
        return redirect()->route('admin.blogs.all');
    }
}
