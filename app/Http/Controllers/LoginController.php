<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;


class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }
}
