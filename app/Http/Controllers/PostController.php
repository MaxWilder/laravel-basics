<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function getDashboard()
  {
    $posts = Post::all();
    return view('dashboard', ['posts' => $posts]);
  }

  public function postCreatePost(Request $request)
  {
    $this->validate($request, [
      'body' => 'required|max:1000'
    ]);
    $post = new Post();
    $post->body = $request['body'];
    $message = 'There was an error saving this post.';
    if ($request->user()->posts()->save($post) ) {//Saves the post as a related post to the currently authenticated user
      $message = 'Post successfully created!';
    }
    return redirect()->route('dashboard')->with(['message' => $message]);
  }
}
