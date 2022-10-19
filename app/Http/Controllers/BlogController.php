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
    
    public function adminBloglist(){
        $blogs = Post::orderBy('created_at', 'desc');
        if (request()->has('q')) {
            $blogs = Post::where('title', 'LIKE', '%' . request()->get('q') . '%')
                ->orWhere('description', 'LIKE', '%' . request()->get('q') . '%')
                ->orderBy('created_at', 'desc');
        }
        return view('admin/blog', [
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


    public function addBlogForm(){
        return view('admin.add_new');
    }


    public function addNewBlog(Request $request)
    {
        if ($request->has('thumbnail')) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('front/img/blog'), $imageName);
        } else {
            $imageName = 'coaches.jpg';
        }
        $slug = Str::slug($request->title, '-');
        $createBlog = Post::create([
            'title' => $request->title,
            'photo' => $imageName,
            'slug' => $slug,
            'description' => $request->description,
            'long_description' => $request->lndescription,
        ]);
        return back()->with('success', 'New blog post added successfully.');
    }

    public function editBlog($blogId){
        $blog = Post::where('id', $blogId)->first();

        return view('admin/edit_new', [
            'blog' => $blog,
        ]);
    }


    public function updateBlog(Request $request, $blogId)
    {
        $blog = Post::findOrFail($blogId);
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->lndescription,
        ]);
        if ($request->has('thumbnail')) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('front/img/blog'), $imageName);
            $blog->photo = $imageName;
            $blog->save();
        }
        return back()->with('success', 'Blog post updated successfully.');
    }


    public function deletePost($postId){
        $delete = Post::where('id', $postId)->delete();
        return back()->with('success', 'Your blog post deleted successfully.');
    }

}
