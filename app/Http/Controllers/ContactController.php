<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
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
        Usage(s): web.php
    */
    public function postContact(Request $r){
        //Validate the request
        $r->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required|min:5'
        ]);
        //Store the data in database
        $ContactData = $r->except('_token'); //We are creating an array for any future requests
        ContactRequest::create($ContactData);
        return back()->withSuccess('We received your message, Thank you.');
    }
    /*
        Function: getAdminAll();
        Description: Returns a list of all contact requests
        Usage(s): web.php
        Notes: Requires to pass the admin middleware
    */
    public function getAdminAll(){
        $AllContactRequests = ContactRequest::latest()->get();
        return view('admin.contact.all' , compact('AllContactRequests'));
    }
}
