<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{


  public function homePage(){
    $main_posts = Post::orderBy('id', 'desc')->take(3)->get();
    $posts = Post::orderBy('id', 'desc')->take(10)->get();
    return view('site.home', compact(['main_posts', 'posts']));
  }

  public function postShow($id){
    $post = Post::find($id);
    $posts = Post::orderBy('id', 'desc')->take(10)->get();
    return view('site.post', compact('post', 'posts'));
  }
}
