<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\User;
use Str;
class TestController extends Controller{
    public function feedDb(){
        User::create([
            'name' => 'admin',
            'email' => 'adminfsd@smail.com',
            'role' => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);
        dd("Looks good.");
    }
}
