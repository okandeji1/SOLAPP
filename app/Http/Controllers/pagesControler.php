<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;
use DB;

class pagesControler extends Controller
{
    //
    public function index()
    {
        $title = 'Welcome To My Page';
        // return view('pages.index', compact('title')); --For single value

        // function to pass multiple values
        $posts = post:: orderBy('created_at', 'desc')->paginate(10);
        return view('posts.home')->with('posts', $posts);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']);
        return view('pages.services')->with($data);
    }
}
