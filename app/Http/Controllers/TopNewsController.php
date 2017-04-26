<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopNewsController extends Controller
{
    public function loginController($nome)
    {
        return view('login', ['nome'=>$nome]);
    }
    
    public function newsController()
    {
        return view('news');
    }
}
