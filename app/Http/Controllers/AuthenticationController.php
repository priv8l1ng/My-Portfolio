<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function LoginView() {
        return view('components.authentication.login');
    }
}
