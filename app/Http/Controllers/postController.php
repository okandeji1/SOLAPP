<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;

class postController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'home', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = post:: orderBy('title', 'desc' )->get();
        // $posts = post:: orderBy('title', 'desc' )->take(1)->get();
        $posts = post:: orderBy('created_at', 'desc')->paginate(10);
        return view('posts.home')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'header' => 'required',
            'paragraph' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        // Handle file upload

        if ($request->hasFile('cover_image')) {
            // Get file name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just file name
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // File nameto store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            // $path = $request->file('cover_image')->save('/public/cover_images', $fileNameToStore);
            \Image::make($request->file('cover_image'))->save(public_path('img/posts/').$fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $post = new post;
        $post->title = $request->input('title');
        $post->header = $request->input('header');
        $post->paragraph = $request->input('paragraph');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        // Check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unathorized Users');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Handle file upload

        if ($request->hasFile('cover_image')) {
            // Get file name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just file name
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // File nameto store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            \Image::make($request->file('cover_image'))->save(public_path('img/posts/').$fileNameToStore);
        }
        // Update Post
        $post = post:: find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        // Check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unathorized Users');
        }
        if ($post->cover_image !=='noimage.jpg') {
            // Delete Image
            Storage::delete('/public/cover_images'. $post->cover_image);
        }
        $post ->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
