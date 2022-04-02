<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    /*
        Function: getHome();
        Description: Returns the homepage view to the user
        Usage(s): web.php
        Notes: Requires to pass the isAdmin middleware
    */
    public function getHome(){
        return view('admin.index');
    }
}
