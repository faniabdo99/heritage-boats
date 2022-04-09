<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Models\User;
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
    /*
        Function: getAdminSingle($id);
        Description: Returns a single contact request
        Usage(s): web.php
        Notes: Requires to pass the admin middleware
    */
    public function getAdminSingle($id){
        $TheContactRequest = ContactRequest::findOrFail($id);
        if($TheContactRequest){
            return view('admin.contact.single' , compact('TheContactRequest'));
        }else{
            abort(404);
        }
    }
    /*
      Function: postDeleteContact(Request);
      Description: Deletes a single contact request
      Usage(s): api.php
      Notes: Requires to pass the admin middleware
  */
    public function postDeleteContact(Request $r){
        if($r->has('contact_request_id') && $r->has('admin_id')){
            //Validate the admin
            $Admin = User::find($r->admin_id);
            if($Admin){
                if(in_array($Admin->role , [1,2])){
                    //Looks good, search the item
                    $TheContactRequest = ContactRequest::findOrFail($r->contact_request_id);
                    if($TheContactRequest){
                        FireEventLog('ContactRequest', 'Deleted', $TheContactRequest->id , $r->admin_id);
                        $TheContactRequest->delete();
                        return response('Contact request has been deleted' , 200);
                    }else{
                        return response('Contact request is already deleted' , 404);
                    }
                }else{
                    return response('Something went wrong' , 403);
                }
            }else{
                return response('Something went wrong' , 403);
            }
        }else{
            return response('Something went wrong! Please refresh the page and try again' , 400);
        }
    }
}
