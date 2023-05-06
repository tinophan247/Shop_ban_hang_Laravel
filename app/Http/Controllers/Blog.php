<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog_index(){

        return view ('front.blog.blog_index');
    }
}

