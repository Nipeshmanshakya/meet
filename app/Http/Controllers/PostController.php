<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    function index( ) {

        $user = Auth::user();
        $posts = $user->posts;
        return view('posts.list', ['posts' => $posts ]);
    }

    function create() {

        return view('posts.create');
    }

    function postPost( PostForm $request ) {

        $user = $request->user();
        $user->posts()->create( $request->only('post'));
        return redirect('posts')->with('message', '<div class="alert alert-success">Post Successfully Created</div>');
    }
}
