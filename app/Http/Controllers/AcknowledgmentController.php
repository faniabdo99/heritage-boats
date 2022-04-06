<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcknowledgmentController extends Controller{
    /*
        Function: getAcknowledgments();
        Description: Returns the Acknowledgments view to the user
        Usage(s): web.php
    */
    public function getAcknowledgments(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('static.acknowledgments');
    }
}
