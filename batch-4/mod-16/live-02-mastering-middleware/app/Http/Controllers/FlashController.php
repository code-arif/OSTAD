<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    //set flash message
    public function setFlashMessage(Request $request){
        $request->session()->flash('message', 'Hello, this is a flash message!');
        $request->session()->flash('error', 'Hello, this is a flash error message!');
        return response('Flash message set successfully!');
    }

    //get  flash message
    public function getFlashMessage(Request $request){
        $message = $request->session()->get('message');
        $error = session()->get('error');
        return response()->json(['message' => $message, 'error' => $error]);
    }

    //read flash message from blade
    public function readFlash(){
        return  view('flash');
    }

    //set flash and redirect
    public function setFlashAndRedirect(Request $request){
        /*
        $request->session()->flash('message', 'Hello, this is a flash message 134646');
        return redirect()->route('flash');
        */

        return redirect()->route('flash')->with('message', 'Hello, this is a flash message with redirect!');
    }
}
