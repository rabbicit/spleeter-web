<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Http\Request;

class AdminMusicController extends Controller
{
    //
    public function viewMusic(){

        // $blogs = Post::orderBy('created_at', 'desc');
        // if (request()->has('q')) {
        //     $blogs = Post::where('title', 'LIKE', '%' . request()->get('q') . '%')
        //         ->orWhere('description', 'LIKE', '%' . request()->get('q') . '%')
        //         ->orderBy('created_at', 'desc');
        // }
        // return view('pages/blog/blog', [
        //     'posts' => $blogs->simplePaginate(10),
        // ]);
        return view('admin.view_music');
    }
    public function uploadMusicForm(){
        return view('admin.upload_music');
    }

    public function addnewMusic(Request $request){

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front/img/blog'), $imageName);
        } else {
            $imageName = 'music.jpg';
        }
        if ($request->has('trackfile')) {
            $trackfilename = time() . '.' . $request->trackfile->extension();
            $request->trackfile->move(public_path('front/img/blog'), $trackfilename);
        } else {
            $trackfilename = 'notrack.mp3';
        }
        
        $createBlog = Music::create([
            'name' => $request->title,
            'image' => $imageName,
            'filename' => $trackfilename,
            'downloadfiles' => $trackfilename,
            'downloadlimit' => '3',
            'category' => $request->track_type,
            'bpm' => $request->bpm,
            'key' => $request->key,
            'genre' => $request->genry,
            'description' => $request->description
        ]);
        return back()->with('success', 'New track added successfully.');
    }
}
