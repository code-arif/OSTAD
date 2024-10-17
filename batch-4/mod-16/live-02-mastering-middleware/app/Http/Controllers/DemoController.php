<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    //session create
    public function setSession(Request $request){
        session()->put('name','John doe');
        $request->session()->put('email', 'john@doe.com');
        session(['phone'=>'123456788']);
        Log::info('Log has been set');
        return 'Session set';
    }

    //session get
    public function  getSession(Request $request){
        $name = session()->get('name', 'Guest');
        $email = $request->session()->get('email');
        $phone = session('phone');
        $age = session('age', 25);
        return 'Name:'.$name.' Email:'.$email.' Phone:'.$phone.' Age:'.$age;
    }

    //session get or again read
    public function readAgain(Request $request){
        $name = session()->get('name', 'Guest');
        $email =  $request->session()->get('email');
        $phone = session('phone');
        $age = session('age',36);
        return 'Name:'.$name.' Email:'.$email.' Phone:'.$phone.' Age:'.$age;
    }

    //update session
    public function updateSession(Request $request){
        session()->put('name','Md. Ariful Islam');
        $request->session()->put('email', 'ariful@islam.com');
        session([
            'phone'=>'987654321',
            'age'=>30
        ]);

        Log::critical('Session has been updated');
        return response('Session has been updated!');
    }

    //read session from view
    public function about(Request $request){
        return view('about');
    }

    //delete session
    public function deleteSession(Request $request){
        session()->forget('name');
        $request->session()->forget('email');
        session()->forget([
            'phone',
            'age'
        ]);

        Log::warning('Session has been deleted');
        return  response('Session has been deleted!');
    }

    //dos-attract protection
    public function protect(Request $request){
        $data = [
            'name'=>'Md. Ariful Islam',
            'email'=>'ariful@islam.com',
            'phone'=>'987654321',
            'age'=>30
            ];
        return response()->json($data);
    }
}
