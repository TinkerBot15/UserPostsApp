<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserPostController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $userPosts = $response->json();

        return view('user-posts', compact('userPosts'));
    }

    public function create()
    {
        return view('create-post'); // Assuming 'create-post.blade.php' is the name of your create form view
    }


    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');
        $userId = $request->input('userId');

        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => $title,
            'body' => $body,
            'userId' => $userId,
        ]);

        return redirect('/user-posts');
    }
}
