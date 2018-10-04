<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function index(){
      $posts = Post::all();
      return view('pages.main')->with('posts',$posts);


    }
    public function create(){
      return view ('pages.create');
    }
    public function article(){
      $posts = Post::all();
      return view('pages.article')->with('posts',$posts);
    }
    public function about(){
      return view('pages.about');
    }
    public function recipes(){
      return view('pages.recipes');
    }
    public function categories(){
      return view('pages.categories');
    }
}
