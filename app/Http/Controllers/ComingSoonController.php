<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller {
    /*
        Function: getComingSoon();
        Description: Returns the coming soon view to the user
        Usage(s): web.php
    */
    public function getComingSoon(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('static.coming-soon');
    }
}
