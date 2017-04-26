<?php

namespace App\Http\Controllers;
use File;
use Auth;
use Storage;
use App\Post;
Use App\User;
Use App\Role;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $post = Post::all();
      // return $post;
      return view('post.postindex',compact('post'));
    }

    public function create()
    {
      return view('post.postcreate');
    }

    public function store(Request $request)
    {
      // Post::create($request->all());
      // dd($request->all());
      $gambar       = $request->file('file');
      $imagename    = $gambar->getClientOriginalName();
      $dir          = 'upload';
      $gambar->move($dir, $imagename);


      Post::create([
      'title'        => $request->input('title'),
      'slug'         => str_replace(' ', '-', $request->input('title')),
      'image'        => $imagename,
      'author_id'    => Auth::user()->id,
      'excerpt'      => $request->input('excerpt'),
      'body'         => $request->input('body')
      ]);

      return redirect()->back();
    }

    public function show($id)
    {
      $author = Post::find($id);
      return $author;
      // return $author->user->name;
    }

    public function destroy($id)
    {
      $post = Post::find($id);
      File::delete('upload/'.$post->image);
      $post->delete();
      return redirect()->back();
    }

    public function edit($id)
    {
      $edit = Post::find($id);
      return view('post.postedit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
      $update =   Post::find($id);
    // $update->update($request->all());
    if ($request->hasFile('file')) {
    File::delete('upload/'.$update->image);
    $gambar       = $request->file('file');
    $imagename    = $gambar->getClientOriginalName();
    $dir          = 'upload';
    $gambar->move($dir, $imagename);
  }else {
    $imagename = $update->image;
    // return $imagename;
  }


    $update->update([
    'title'        => $request->input('title'),
    'slug'         => str_replace(' ', '-', $request->input('title')),
    'image'        => $imagename,
    'author_id'    => Auth::user()->id,
    'excerpt'      => $request->input('excerpt'),
    'body'         => $request->input('body')
    ]);
    return redirect('post');

    }

    public function listuser()
        {
          $user = User::all();
          // return $user;
          return view('post.postuserlist',compact('user'));
        }

    public function adminAssignRole(Request $request)
    {

      // return $user;
      $user = User::where('id', $request['id'])->first();
      $user->roles()->detach();
      if ($request['role_user']) {
        $user->roles()->attach(Role::where('name','user')->first());
      }
      if ($request['role_author']) {
        $user->roles()->attach(Role::where('name','author')->first());
      }
      if ($request['role_admin']) {
        $user->roles()->attach(Role::where('name','admin')->first());
      }
      return redirect()->back();
    }
}
