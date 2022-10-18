<?php

namespace App\Http\Controllers;

use App\Models\spleete_songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //

    public function indexPage(){
        if(Auth::user()){
            $userid = Auth::user()->id;
            $audios = spleete_songs::where('uid', $userid)->orderBy('id', 'desc')->take(1)->get();
            if($audios->count() > 0){
                $audios = $audios;
            }else{
                $audios = '';
            }
        }else{
            $audios = '';
        }
        
        return view('pages.home', ['musics' => $audios]);
    }

    public function contactPage(){
        return view('pages.contact');
    }

    public function freeStems(){
        return view('pages.stems');
    }
}
