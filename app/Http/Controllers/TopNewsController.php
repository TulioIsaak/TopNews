<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopNewsController extends Controller
{
    public function loginController()
    {
        return view('login');
    }
    
    public function newsController()
    {
        return view('news');
    }
}
