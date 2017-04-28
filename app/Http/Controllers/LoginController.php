<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function lista()
    {
        $logins = DB::select(’select * from logins’);   
    }
}
