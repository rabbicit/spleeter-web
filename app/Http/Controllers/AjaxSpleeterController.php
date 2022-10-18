<?php

namespace App\Http\Controllers;

use App\Models\spleete_songs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Validator;

class AjaxSpleeterController extends Controller
{
    public function __construct(){ 
        set_time_limit(300); 
    }
    
    public function performSeparation($filePath, $destination, $stems_option ){ 
        // convert all args to string dtype  
        // $stems_option = $stems_option."stems";  
        // $destination = strval($destination); 
        // $filePath = strval($filePath); 

        // // Prepare args  
        // $args = "$stems_option .$filePath .$destination"; 

        // // Call python script 
        // $command = "conda activate audio && python C:/Users/razor/Documents/github/mss_web_app/music_source_app/st.py ";  
        // $args = $command.$args; // merge command & args together  
        // $args = 'ls';
        $args = 'spleeter separate -p spleeter:'.$stems_option.'stems -o '.$destination.' '.$filePath;
        // var_dump($args);
        $output = shell_exec($args); 
        // var_dump($output);
        // exit;
    }


    public function sore_files(Request $req){

        $validatedData = Validator::make($req->all(), [
            'file' => 'required|mimes:mp3,wav,flac,aac,3gp|max:51200'
          ]);



        $spleete = new spleete_songs();

        if($validatedData->passes()){
            $fileName = 'ud'.Carbon::now()->timestamp.'rand.'.$req->file->extension();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $spleete->name = $req->file->getClientOriginalName();;
            $spleete->filepath = storage_path('app/public/') . $filePath;
            $spleete->filename = $fileName;
            $spleete->exportname = $fileName;
            $spleete->stems = '5';
            $spleete->uid = $req->user()->id; 
            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
            $downloadfiles = asset("output/".$spleete->uid."/".$withoutExt."/");
            $spleete->downloadfiles = $downloadfiles;
            $spleete->empty = $req->type;
            $spleete->userip = $req->getClientIp();


            $spleete->save();



            $path = public_path('output').'/'.$spleete->uid;
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }


            $destination = public_path('output').'/'.$spleete->uid;



            $output = $this->performSeparation($spleete->filepath, $destination, $spleete->stems);

            

            if(!empty($output)){
                return response()->json(['success'=>'done']);
            }else{
                return response()->json(['success'=>'uploading failed']);
            }

            

        }else{
            return response()->json(['error'=>$validatedData->errors()->all()]);
        }
    }
}
