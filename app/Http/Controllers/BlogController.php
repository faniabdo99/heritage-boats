<?php
namespace App\Http\Controllers;
use App\Models\BlogLocal;
use App\Models\Category;
use App\Models\CategoryLocal;
use App\Models\Comment;
use App\Models\User;
use Carbon\Carbon;
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
        $AllCategories = Category::latest()->get();
        return view('admin.blogs.new', compact('AllCategories'));
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
            'category_id' => 'required',
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
        return redirect()->route('admin.blogs.all')->withSuccess('Article has been created');
    }
    /*
        Function: getLocalize();
        Description: Returns translate article page on admin
        Usage(s): web.php
    */
    public  function getLocalize($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        $TheArticle = Blog::findOrFail($id);
        if(!$TheArticle){
            abort(404);
        }
        $CurrentLocale = BlogLocal::where('blog_id' , $id)->first();
        return view('admin.blogs.localize' , compact('TheArticle' , 'CurrentLocale'));
    }
    /*
        Function: getAdminEdit();
        Description: Returns the edit article view
        Usage(s): web.php
     */
    public function getAdminEdit($id){
        $TheArticle = Blog::findOrFail($id);
        $AllCategories = Category::latest()->get();
        return view('admin.blogs.edit' , compact('TheArticle' , 'AllCategories'));
    }
    /*
        Function: postAdminEdit();
        Description: Handles editing the post logic
        Usage(s): web.php
     */
    public function postAdminEdit(Request $r, $id){
        $r->validate([
            'title' => 'required|min:5',
            'category_id' => 'required',
            'image' => 'image',
            'description' => 'required',
            'content' => 'required'
        ]);
        $TheArticle = Blog::findOrFail($id);
        //Initiate an array with the article data
        $BlogData = $r->except('token');
        $BlogData['is_promoted'] = ($r->has('is_promoted')) ? 1 : 0;
        //Handle image upload if any (currently the image is required, but if in future the client decoded to make optional we will have the case already considered)
        if($r->has('image')){
            //Resize the image
            $img = ImageLib::make($r->image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/blogs/'.$TheArticle->slug.'.'.$r->image->getClientOriginalExtension());
            //Return the filename
            $BlogData['image'] = $TheArticle->slug.'.'.$r->image->getClientOriginalExtension();
        }
        //Upload the article
        $TheArticle->update($BlogData);
        //Log this event
        FireEventLog('Blog', 'Updated', $TheArticle->id , auth()->user()->id);
        return redirect()->route('admin.blogs.all')->withSuccess('Article has been updated');
    }
    /*
        Function: postDeleteBlog();
        Description: Handles deleting article logic
        Usage(s): api.php
    */
    public function postDeleteBlog(Request $r){
        if($r->has('blog_id') && $r->has('admin_id')){
            //Validate the admin
            $Admin = User::find($r->admin_id);
            if($Admin){
                if(in_array($Admin->role , [1,2])){
                    //Looks good, search the item
                    $TheArticle = Blog::findOrFail($r->blog_id);
                    if($TheArticle){
                        FireEventLog('Blog', 'Deleted', $TheArticle->id , $r->admin_id);
                        $TheArticle->delete();
                        return response('Article has been deleted' , 200);
                    }else{
                        return response('Article is already deleted' , 404);
                    }
                }else{
                    return response('Something went wrong' , 403);
                }
            }else{
                return response('Something went wrong' , 403);
            }
        }else{
            return response('Something went wrong! Please refresh the page and try again' , 400);
        }
    }
    public function postLocalize(Request $r){
        $r->validate([
            'title_value' => 'required|min:5',
            'description_value' => 'required',
            'content_value' => 'required'
        ]);
        $CurrentLocal = BlogLocal::where('blog_id' , $r->blog_id)->first();
        if($CurrentLocal){
            $CurrentLocal->update($r->all());
        }else{
            BlogLocal::create($r->all());
        }
        FireEventLog('Blog', 'Translated', $r->blog_id , auth()->user()->id);
        return redirect()->route('admin.blogs.all')->withSuccess('Article translated!');
    }
    /*
        Function: postLocalize();
        Description: Handles the translation logic
        Usage(s): web.php
    */
    // non-admin routes
    /*
        Function: getAll();
        Description: Returns all articles page
        Usage(s): web.php
    */
    public function getAll(){
        $AllArticles = Blog::latest()->get();
        $RecentPosts = Blog::latest()->limit(4)->get();
        $Categories = Category::latest()->get();
        return view('blog.all' , compact('AllArticles' , 'RecentPosts' , 'Categories'));
    }
    /*
        Function: getSingle($slug, $id);
        Description: Returns single article page based on the id (the slug is required for SEO only)
        Usage(s): web.php
    */
    public function getSingle($slug = null, $id){
        if($slug == "filter"){
            //Filter By Category
            $TheCategory = Category::where('slug' , $id)->first();
            if(!$TheCategory){
                abort(404);
            }
            $AllArticles = Blog::where('category_id' , $TheCategory->id)->latest()->get();
            $RecentPosts = Blog::latest()->limit(4)->get();
            $Categories = Category::latest()->get();
            return view('blog.all' , compact('AllArticles' , 'RecentPosts' , 'Categories'));
        }else{
            $TheArticle = Blog::find($id);
            if(!$TheArticle){
                abort(404);
            }
            return view('blog.single', compact('TheArticle'));
        }
    }
}
