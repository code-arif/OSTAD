<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pullAndGetController extends Controller
{
    public function setData(){
        //set session data
        session()->put('flash_message', 'Your profile has been updated!');
        return 'session data has been set';
    }

    //get data
    public function  getData(){
        //get session data
        $flash_message = session()->get('flash_message');
        return  $flash_message;
    }

    //pull
    public function pullData(){
        //pull session data
        $flash_message = session()->pull('flash_message');
        return $flash_message;
    }
}
