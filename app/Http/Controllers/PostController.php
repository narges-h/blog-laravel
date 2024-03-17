<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;



class PostController extends Controller
{
    public function mainPage(){
        return view('main');
    }
    public function adminPage(){
        $post = Post::get();       
        return view('admin',[
            'post'=>$post]);
    }
    public function postsPage(){
        return view('addPost');
    }
    public function addPost(){
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|string|max:255',
            'text' => 'required|string|max:1000',
        ])->validated();
       
        Post::create([
            'title' => $validate_data['title'],
            'text' => $validate_data['text']
        ]);
        return redirect('admin');
    }
    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return back();
    }
    public function update($id){
        $post = Post::findOrFail($id);
        return view('update' ,[
            'post' => $post
        ]);
    }

    public function updating($id) {
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|string|max:255',
            'text' => 'required|string|max:1000',
        ])->validated();
    
        $post = Post::findOrFail($id);
      
        $post->update([
            'title' => $validate_data['title'],
            'text' => $validate_data['text']
    
        ]);
        return redirect('main/'.$id)->with('success', 'به روزرسانی با موفقیت انجام شد.');
        // return back();
    }
    
}

