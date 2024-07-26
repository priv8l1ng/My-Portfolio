<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function IndexView() {
        return view('components.index');
        // return view('components.index_encrypted');
    }

    public function NotFoundView() {
        return redirect('/');
    }
}
