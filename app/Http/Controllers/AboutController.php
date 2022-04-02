<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller{
    /*
        Function: getAbout();
        Description: Returns the homepage view to the user
        Usage(s): web.php
    */
    public function getAbout(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('static.about');
    }
}
