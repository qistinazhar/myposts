<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required|min:10',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
    
        $imageName = time() . '.' . $request->file->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->file->storeAs('public/images', $imageName);
    
        $post = new Post();
    
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->save();
    
        return redirect('/posts')->with(['message' => 'Post added successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {
        $imageName = '';
        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/images', $imageName);
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }
        } else {
            $imageName = $post->image;
        }
    
      $post->title = $request->title;
      $post->category = $request->category;
      $post->content = $request->content;
      $post->image = $imageName;
      $post->save();
    
      // Mass Assignment Way; Can do if add fields in to fillable.
        // $postData = ['title' => $request->title, 'category' => $request->category, 'content' => $request->content, 'image' => $imageName];
        // $post->update($postData);
    
        return redirect('/posts')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {
        Storage::delete('public/images/' . $post->image);
        $post->delete();
        return redirect('/posts')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
      }
}
