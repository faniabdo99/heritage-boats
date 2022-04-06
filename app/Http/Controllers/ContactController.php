<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{
    /*
        Function: getContact();
        Description: Returns the contact us view to the user
        Usage(s): web.php
    */
    public function getContact(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('contact.contact');
    }
    /*
        Function: postContact(Request);
        Description: Handles sending email logic
        Usage(s): api.php
    */
    public function postContact(Request $r){
        dd($r->all());
    }
}
