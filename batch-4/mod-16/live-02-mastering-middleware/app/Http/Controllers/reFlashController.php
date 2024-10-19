<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reFlashController extends Controller
{
    //set flash
    public function setReFlash(Request $request){
        session()->flash('message', 'This is flash data!');
        // return to_route('show.flash');
        return 're flash set';
    }

    //get flash
    public function showReFlash(Request $request){
        $message = session()->get('message', 'No flash data found!');
        session()->reflash();
        return "Message: " . $message . " (Flash data retained for the next request)";
    }

    //check flash data
    public function  checkReFlash(Request $request){
        $message = session()->get('message', 'No flash data found!');
        return 'Message after reflash:  ' . $message;
    }
}
