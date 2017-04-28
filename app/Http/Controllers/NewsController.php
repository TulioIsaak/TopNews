<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public $newsList;
    
    public function listing()
    {
        
        $html = '<h1>All products listing';
        
        $html .= '<ul>';
        
        $newsList = DB::select('select * from newsList');
        
        foreach ($newsList as $p) {
            $html .='<li> Title: ' . $p->title . ', Lead: ' . $p->lead . ', Date: ' . $p->date . 'Body: ' . $body . 'Author: ' . $author . 'Image: ' . $image . 'Id: ' . $id . '</li>';
        }
        
        $html .= '</ul>';
        
        return 'html';
        
    }
}
