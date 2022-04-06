<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller{
    /*
        Function: getHome();
        Description: Returns the homepage view to the user
        Usage(s): web.php
    */
    public function getHomepage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('home');
    }
}
