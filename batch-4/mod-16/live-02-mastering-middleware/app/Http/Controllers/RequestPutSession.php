<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestPutSession extends Controller
{
    //data store in session with $request variable
    public function requestVariable(Request $request){
        //single data store in session
        /*
        $request->session()->put('name', 'John Doe');
        $request->session()->put('age', 30);
        return 'Data stored in session';
        */

        //multiple data store in session with put method
        $request->session()->put([
            'name' => 'Ariful',
            'age' => '24',
            'city' => 'New York'
        ]);
        return 'Data stored in session';
    }

    //retrieve data from session with $request variable
    public function retrieveData(Request $request){
        //single data retrieve from session
        /*
        $name = $request->session()->get('name');
        $age = $request->session()->get('age');
        return 'Name: '.$name.' Age: '.$age;
        */


        //retrieve multiple data  from session with all method
        /*
        $data = $request->session()->all();
        return 'Name: '.$data['name'].' Age: '.$data['age'].' City:' .$data['city'];
        */

        //retrieve  multiple data from session with one by one variable
        /*
        $name = $request->session()->get('name');
        $age = $request->session()->get('age');
        $city = $request->session()->get('city');
        return 'Name: '.$name.' Age: '.$age.' City:' .$city;
        */

        //if data is null set default value
        $name = $request->session()->get('name');
        $name = $name ?: 'Ahsnaullah';

        $age = $request->session()->get('age');
        $age = $age ?: '25';

        $city = $request->session()->get('city');
        $city = $city ?: 'Dhaka';

        return 'Name: '.$name.' | Age: '.$age.' | City:' .$city;
    }
}
