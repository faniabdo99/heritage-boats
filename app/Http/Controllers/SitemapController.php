<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Club;
class SitemapController extends Controller{
    public function getSitemap(){
        $AllBlogs = Blog::latest()->get();
        $AllClubs = Club::latest()->get();
        return response()->view('sitemap' , compact('AllBlogs' , 'AllClubs'))->header('Content-Type', 'text/xml');
    }
}
