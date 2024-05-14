<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileBinaryAndDownloadController extends Controller
{
    //file binary
    public function FileBinary(){
        $file_path = "upload/image/1200px-C_Programming_Language.svg.png";
        return response()->file( $file_path );
    }

    public function FileDownload(){
        $file_path = "upload/image/1200px-C_Programming_Language.svg.png";
        return response()->download( $file_path );
    }
}
