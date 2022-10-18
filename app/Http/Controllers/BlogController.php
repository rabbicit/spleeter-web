<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    
    public function index(){
        $blogs = Post::orderBy('created_at', 'desc');
        if (request()->has('q')) {
            $blogs = Post::where('title', 'LIKE', '%' . request()->get('q') . '%')
                ->orWhere('description', 'LIKE', '%' . request()->get('q') . '%')
                ->orderBy('created_at', 'desc');
        }
        return view('pages/blog/blog', [
            'posts' => $blogs->simplePaginate(10),
        ]);
    }


    public function BlogDetails($slug){
        $details = Post::where('slug', $slug)->first();
        if (!$details) {
            return view('404');
        }

        return view('pages/blog/details', [
            'details' => $details,
        ]);
    }


}
