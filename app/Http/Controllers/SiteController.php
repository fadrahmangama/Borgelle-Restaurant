<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function signin()
    {
        return view('register', [ 
        'title' => 'Register', 
        'method' => 'POST', 
        'action' => 'register'
        ]);
    }

    public function register(Request $req)
    {
        // Validate the request

        $user = new User();
        $user->id = User::max('id');
        $user->id++;
        $user->name = $req->nm;
        $user->email = $req->em;
        $user->password = bcrypt($req->pwd);
        $user->save();

        // Other registration logic, like sending a confirmation email, etc.

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
    
    public function login()
    {
        return view('auth', [ 
        'title' => 'Login', 
        'method' => 'POST', 
        'action' => 'auth'
        ]);
    }

    public function auth(Request $req) {

        //middleware
        if (Auth::attempt(['email'=>$req->em, 'password'=>$req->pwd])) {
            $email=$req->em;

            if ($email=='admin@admin'){
                return redirect('/welcome');
            } else {
            return redirect('/home');
            }
        }
        return redirect('/login')->with('msg', 'Email / password salah');        
    }
    public function admin()
    {
    $prods = Menu::get();
        return view('admin', ['list' => $prods]);
    }
            
}
