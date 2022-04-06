<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
//Models
use App\Models\User;
class UserController extends Controller{
    /*
        Function: getAll();
        Description: Show a view of all the users (admins) in the system
        Usage(s): web.php
        Notes: Requires to pass the admin middleware
    */
    public function getAll(){
        //Grab the users
        $Users = User::latest()->get();
        return view('admin.admins.all' , compact('Users'));
    }
   /*
        Function: postDeleteUser();
        Description: Handles delete user login
        Usage(s): api.php
    */
    public function postDeleteUser(Request $r){
        if($r->user_id && $r->admin_id){
            //Get the user to be deleted
            $TheUser = User::findOrFail($r->user_id);
            if($TheUser){
                if($TheUser->role == 1){
                    return response('Super admin users can\'t be deleted', 403);
                }else{
                    //Delete the user
                    FireEventLog('User', 'Delete', $TheUser->id , $r->admin_id);
                    $TheUser->delete();
                    return response('User has been deleted!' , 200);
                }
            }else{
                return response('Thos user doesn\'t exists' , 404);
            }
        }
    }
   /*
        Function: getNew();
        Description: Returns a view to add new admin
        Usage(s): web.php
    */
    public function getNew(){
        return view('admin.admins.new');
    }
    /*
        Function: postNew();
        Description: Handles adding a new user login
        Usage(s): web.php
    */
    public function postNew(Request $r){
        //Validate the request using the validator method on the request class
        $Validator = $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
        //All good, generate the user data and prepare to publish a new user
        $UserData = $r->except('password');
        //Mutate the UserData to add an encrypted password
        $UserData['password'] = Hash::make($r->password);
        //Publish the user
        $NewUser = User::create($UserData);
        FireEventLog('User', 'Create', $NewUser->id);
        return redirect()->route('admin.admins.all')->withSuccess('New admin has been created');
    }
    /*
        Function: getEdit();
        Description: Returns a view to edit the user (Edit user form)
        Usage(s): web.php
    */
    public function getEdit($id){
        $TheUser = User::findOrFail($id);
        if($TheUser){
            return view('admin.admins.edit' , compact('TheUser'));
        }else{
            abort(404);
        }
    }
    /*
        Function: postEdit();
        Description: Handles updating user logic
        Usage(s): web.php
    */
    public function postEdit(Request $r, $id){
        $TheUser = User::findOrFail($id);
        if($TheUser){
            if($r->has('email')){
                if($r->email !== $TheUser->email){
                    //Validate the request using the validator method on the request class
                    $Validator = $r->validate([
                        'name' => 'required',
                        'email' => 'required|email|unique:users'
                    ]);
                }else{
                    //Validate the request using the validator method on the request class
                    $Validator = $r->validate([
                        'name' => 'required',
                        'email' => 'required|email'
                    ]);
                }
            }
            //All good, generate the user data and prepare to publish a new user
            $UserData = $r->except('password');
            if($r->password != null){
                //Mutate the UserData to add an encrypted password
                $UserData['password'] = Hash::make($r->password);
            }
            FireEventLog('User', 'Edit', $TheUser->id);
            $TheUser->update($UserData);
            return redirect()->route('admin.admins.all')->withSuccess('Admin account has been updated');
        }else{
            abort(404);
        }
    }
}