<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function getDashboard()
  {
    $posts = Post::orderBy('created_at', 'desc')->get();
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

  public function getDeletePost($post_id)
  {
    $post = Post::where('id', $post_id)->first(); // where() returns an array, so first() just pulls the result out of the array
    if(Auth::user() != $post->user) {
      return redirect()->back();
    }
    $post->delete();
    return redirect()->route('dashboard')->with(['message' => 'Successfully deleted.']);
  }
}
