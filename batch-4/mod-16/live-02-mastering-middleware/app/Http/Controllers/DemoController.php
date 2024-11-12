<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;

class DemoController extends Controller
{
    //session create
    public function setSession(Request $request){
        // session()->put('name','');
        if (!session()->has('name') || session()->get('name') === '') {
            session()->put('name', 'Guest');
        }else{
            session()->put('name', '');
        }

        $request->session()->put('email', 'john@doe.com');
        session(['phone'=>'123456788']);
        Log::info('Log has been set');
        return 'Session  has been set';
    }

    //session get
    public function  getSession(Request $request){
        $name = session()->get('name', 'Guest');
        $email = $request->session()->get('email');
        $phone = session('phone');
        $age = session('age', 25);
        return 'Name:'.$name.' | Email:'.$email.'  | Phone:'.$phone.' | Age:'.$age;
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


    //session getnerate with session Facades
    public function sessionGenerateWithFacade(Request $request){
        Session::put('name', 'Session facade');
        Session::put('email', 'session@facade.com');
        Session::put([
            'phone'=>'987654321',
            'age'=>30
        ]);
        return response()->json('Session data set with facade');
    }

    public function getSessionWithFacade(){
        //get all data
        // $data = Session::all();

        //get dat one  by one
        $name = Session::get('name');
        $email = Session::get('email');
        $phone = Session::get('phone');
        $age = Session::get('age');
        return response()->json(['Name:'=>$name,'Email:'=>$email,'Phone:'=>$phone,'Age:'=>$age]);
    }

    //delete all data
    public function deleteAllSessionWithFacade(){
        Session::flush();
        return response()->json('All session data has been deleted');
    }

}
