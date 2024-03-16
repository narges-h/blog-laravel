<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function mainPage(){
        return view('main');
    }
    public function adminPage(){
        return view('admin');
    }
    public function postsPage(){
        return view('addPost');
    }
}

