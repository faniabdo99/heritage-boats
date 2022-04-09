<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller{
    /*
        Function: getLogin();
        Description: Returns the login page from admin template
        Usage(s): web.php
        Notes: Requires to pass the guest middleware
    */
    public function getLogin(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('auth.login');
    }
    /*
        Function: postLogin();
        Description: Handles the login logic
        Usage(s): web.php
        Notes: Requires to pass the guest middleware
    */
    public function postLogin(Request $r): \Illuminate\Http\RedirectResponse {
        //Validate the request using the validator method on the request class
        $Validator = $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        //All clear, Keep going
        $SaveLogin = ($r->has('remember')) ? true : false;
        if(Auth::attempt(['email' => $r->email,'password' => $r->password] , $SaveLogin)){
            //Login success
            return redirect()->route('admin.home');
        }else{
            return back()->withErrors('Please check your access information.');
        }
    }
    /*
        Function: logout();
        Description: Handles the logout logic
        Usage(s): web.php
        Notes: Requires to pass the admin middleware
    */
    public function logout(): \Illuminate\Http\RedirectResponse {
        Auth::logout();
        return redirect()->route('home');
    }
}
