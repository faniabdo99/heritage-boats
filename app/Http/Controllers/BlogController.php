<?php
namespace App\Http\Controllers;
use App\Models\BlogLocal;
use App\Models\Category;
use App\Models\CategoryLocal;
use App\Models\Comment;
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
        return redirect()->route('admin.blogs.all');
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
        Function: postLocalize();
        Description: Handles the translation logic
        Usage(s): web.php
    */
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
        return redirect()->route('admin.blogs.all')->withSuccess('Article translated!');
    }
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
        //Archives
        $Archives = Blog::get()->groupBy(function($val){
            return ['name' => Carbon::parse($val->created_at)->format('M Y')];
        })->toArray();
        $ArchivesKeys = array_keys($Archives);
        //Tags
        $Tags = Blog::latest()->pluck('tags')->toArray();
        $uniqueTags = array_unique(array_merge(...array_map(function($row) {
            return explode(', ', trim($row));
        }, $Tags)));
        //Comments
        $RecentComments = Comment::latest()->limit(4)->get();
        return view('blog.all' , compact('AllArticles' , 'RecentPosts' , 'Categories', 'Archives' , 'ArchivesKeys','uniqueTags','RecentComments'));
    }
    /*
        Function: getSingle($slug, $id);
        Description: Returns single article page based on the id (the slug is required for SEO only)
        Usage(s): web.php
    */
    public  function getSingle($slug, $id){
        $TheArticle = Blog::find($id);
        if(!$TheArticle){
            abort(404);
        }
        return view('blog.single', compact('TheArticle'));
    }
}
