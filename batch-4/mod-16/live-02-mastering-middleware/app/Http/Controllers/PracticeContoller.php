<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeContoller extends Controller
{
    //set mulitple data in put method
    public function setPutSession(Request $request){
        session()->put([
            'name' => '',
            'age' => 23,
            'city' => '',
            'phone' => '01712345678',
            'email' => 'ahsanullah@gmail.com'
        ]);

        return 'Multiple data set in session';
    }


    //get  multiple data from session
    public function getGetSession(Request $request){
        //get all data
        /*
        $data = session()->all();
        return $data;
        */

        //single data get from session
        /*
        $name  = session()->get('name');
        $age = session()->get('age');
        $city = session()->get('city');
        $phone = session()->get('phone');
        $email = session()->get('email');
        return 'Name: '.$name.', Age: '.$age.', City: '.$city.', Phone: '.$phone.', Email: '.$email;
        */

        //get specific data
        /*
        $data = session()->only(['name', 'age']);
        return $data;
        */

        //if data is null set default value
        $name  = session()->get('name');
        $name = $name ?: 'No Name found';

        $age  = session()->get('age');
        $age = $age ?: 'No Age found';

        $city = session()->get('city');
        $city = $city ?: 'No City Found';

        $phone = session()->get('phone');
        $phone = $phone ?: 'No Phone Found';

        $email = session()->get('email');
        $email = $email ?: 'No Email  Found';

        return 'Name: '.$name.', Age: '.$age.', City: '.$city.', Phone:  '.$phone.', Email: '.$email;
    }
}
