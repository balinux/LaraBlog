<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Session;
use Illuminate\Http\Request;

class blogController extends Controller
{

    // public function recentpost()
    // {
    //   return Post::all();
    // }

    public function banner()
    {
      return Post::first();
    }
    public function index()
    {
      $blog   = Post::all();
      $banner  = $this->banner();

      $side   = Post::orderBy('created_at','desc')
                  ->take(5)
                  ->get();
      // return $blog->author->name;
      return view('blog.blogindex',compact('blog','side','banner'));
      }

    public function show($slug)
    {
      $side     = Post::orderBy('created_at','desc')
                  ->take(5)
                  ->get();

      $banner   = $this->banner();
      $show     = Post::where(compact('slug'))->first();
      return view('blog.show',compact('show','banner','side'));
    }

    // public function getrecent()
    // {
    //   $data =  $this->recentpost();
    //   return view('component.sideright', compact('data'));
    // }

}
