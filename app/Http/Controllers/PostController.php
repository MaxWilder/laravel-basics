<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function postCreatePost(Request $request)
  {
    //Validation
    $post = new Post();
    $post->body = $request['body'];
    $request->user()->posts()->save($post); //Saves the post as a related post to the currently authenticated user
    return redirect()->route('dashboard');
  }
}
