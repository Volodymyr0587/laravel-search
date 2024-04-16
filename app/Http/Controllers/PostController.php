<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('index', compact('posts'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $query = Post::query();

        if ($request->filled(['title', 'description'])) {
            $query->whereAll(['title', 'description'], 'LIKE', "%$search%");
        } else {
            $query->whereAny(['title', 'description'], 'LIKE', "%$search%");
        }

        $query->orWhereHas('category', function ($query) use ($search) {
            $query->whereAny(['name'], 'LIKE', "%$search%");
        })
        ->orWhereHas('user', function ($query) use ($search) {
            $query->whereAny(['name', 'last_name', 'email'], 'LIKE', "%$search%");
        });

        $posts = $query->get();

        return view('index', compact('posts', 'search'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
