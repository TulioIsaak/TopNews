<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopNewsController extends Controller
{
    public function loginCtroller()
    {
        return view('login');
    }
    
    public function newsCtroller()
    {
        return view('news');
    }
}
