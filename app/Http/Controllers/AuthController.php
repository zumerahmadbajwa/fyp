<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
  public $layout = 'layouts.auth';
  public function showLoginForm()
  { 
    return view('auth.login');
  }
  public function showSignupForm()
  { 
    return view('auth.signup');
  }

  public function login(Request $request)
  {
    // Validate the login data
    $credentials = $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    // whether it's a admin or student side
    if ( $attemt = Auth::attempt($credentials)) {
      $request->session()->regenerate();

      // Check if the user is an admin
      return redirect()->route('admin.dashboard');
    }
    else {
      
    }
  }

  public function logout(){
      Session::flush();
      
      Auth::logout();

      return redirect('login');
  }
}
