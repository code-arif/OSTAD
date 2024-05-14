<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userInputController extends Controller
{
    function userInput(){
        return view("user");
    }

    //get input
function getUserInput(Request $request){
    $name = $request->input("name");
    $email = $request->input("email");
    $photo = $request->file("photo");

    if ($photo != null) {
        $PhotoName = $photo->getClientOriginalName();
        $photo->move(public_path("upload/photo"), $PhotoName); // Fixed: Added closing parenthesis
    } else {
        $PhotoName = null;
    }

    return view('newPerson', ['name' => $name, 'email' => $email, 'photo' => $PhotoName]);
}

}
