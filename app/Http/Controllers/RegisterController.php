<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('login.register', [ // Correct path to the view
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
}
