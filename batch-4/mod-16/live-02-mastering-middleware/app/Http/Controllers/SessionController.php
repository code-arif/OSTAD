<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //storing data with session method
    public function store(Request $request){
        //single data in session
        /*
        session([
            'title' => 'Reach Dad Poor Dad',
        ]);
        return 'session data stored';
        */

        //multiple data in session
        session([
            'title' => '',
            'author' => 'Robert Kiyosaki',
            'price' => 1000,
        ]);
        return 'session data stored';
    }


    public function show(){
        //retrieve single data
        /*
        return session('title');
        */

        //retrieve multiple data with all method
        // return session()->all();

        //retrieve all data one by one
        /*
        $title = session('title');
        $author = session('author');
        $price = session('price');
        return 'title: '.$title.' | author: '.$author.' | price: '.$price;
        */

        //if  data not found in session then it will return default value
        $title = session()->get('title');
        $title = $title ?: 'No title  found';

        $author  = session()->get('author');
        $author = $author ?: 'No author found';

        $price = session()->get('price');
        $price = $price ?: 'No price found';

        return  'title: '.$title .' | author: '.$author.' | price: '.$price;
    }
}
