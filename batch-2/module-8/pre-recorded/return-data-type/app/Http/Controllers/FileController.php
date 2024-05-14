<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
      public function file(Request $request):bool {
        $photoFile = $request->file("photo");

        //file reading
        /*
        $FileSize = filesize($photoFile);
        $fileType = filetype($photoFile);
        $FileOriginalName = $photoFile->getClientOriginalName();
        $fileTempName = $photoFile->getFileName();
        $fileExtension = $photoFile->extension();

        return [
            "FileSize"=> $FileSize,
            "fileType" => $fileType,
            "FileOriginalName"=> $FileOriginalName,
            "fileTempName"=> $fileTempName,
            "fileExtension"=> $fileExtension
        ];
        */

        ///file upload
        /*
        we have to method for file upload 
        01. move()-> this method is for Laravel storage folder
        02. storeAs()-> this method is for Laravel public folder
        */

        //02.
        $photoFile->storeAs("upload/image", $photoFile->getClientOriginalName());
        //01.
        $photoFile->move(public_path("upload/image"), $photoFile->getClientOriginalName());


        return true;
        


      }
}
