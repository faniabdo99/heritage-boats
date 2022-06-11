<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Club;
use Illuminate\Http\Request;
class AdminController extends Controller{
    /*
        Function: getHome();
        Description: Returns the homepage view to the user
        Usage(s): web.php
        Notes: Requires to pass the isAdmin middleware
    */
    public function getHome(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        $TotalArticles = Blog::count();
        $TotalCategories = Category::count();
        $TotalClubs = Club::count();
        return view('admin.index' , compact('TotalArticles' , 'TotalCategories' , 'TotalClubs'));
    }
}
