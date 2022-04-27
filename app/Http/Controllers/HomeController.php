<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
class HomeController extends Controller{
    /*
        Function: getHome();
        Description: Returns the homepage view to the user
        Usage(s): web.php
    */
    public function getHomepage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        $TopFeaturedArticle = Blog::where('is_promoted' , 1)->latest()->limit(1)->first();
        $FeaturedArticles = Blog::where('is_promoted' , 1)->latest()->skip(1)->limit(3)->get();
        return view('home', compact('TopFeaturedArticle' , 'FeaturedArticles'));
    }
}
