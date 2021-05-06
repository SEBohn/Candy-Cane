<?php

namespace App\Http\Controllers;

use App\Models\RedCandy;
use Illuminate\Http\Request;

class RedCandyController extends Controller
{
    public function index()
    {
        $posts = RedCandy::all(); //fetch all blog posts from DB
	return view('blog.index', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    public function create()
    {
        //show form to create a blog post
        return view('blog.create');
    }


    public function store(Request $request)
    {
        //store a new post
        $newPost = RedCandy::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect('blog/' . $newPost->id);
    }

    public function show(RedCandy $redCandy)
    {
        return view('Candies.show', [
            'post' => $redCandy,
        ]); //returns the view with the post
    }


    public function edit(RedCandy $redCandy)
    {
        return view('Candies.edit', [
            'post' => $redCandy,
            ]); //returns the edit view with the post
    }


    public function update(Request $request, RedCandy $redCandy)
    {
        $redCandy->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/' . $redCandy->id); //update the post
    }


    public function destroy(RedCandy $redCandy)
    {
        //delete a post
        $redCandy->delete();

        return redirect('/blog');
    }
}
