<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    public function login(){
        $validate_data = Validator::make(request()->all() , [
            'username' => 'required|max:255|string',
            'password' => 'required|min:7|string'
        ])->validated();
        $res = Admin::where('username','=',$validate_data['username'])->first();
        if($res == null){
            return view('login', ['errorCode' => 'not registered']);
        }
        $result = Admin::where('password','=',$validate_data['password'])->first();
        // $result = Hash::check($validate_data['password'],$res->password);
        if($result == true){
            return redirect('admin');
        }
        else{
            return view('login', ['errorPass' => 'Invalid password']);
        }
       
    }
}
