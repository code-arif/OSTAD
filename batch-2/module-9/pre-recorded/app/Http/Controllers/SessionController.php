<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //session Put
    function sessionPut(Request $request):bool{
        $email = $request->email;
        $request->session()->put("userEmail", $email);
        return true;
    }

    //session Pull
    function sessionPull(Request $request):string{
       return $request->session()->pull("userEmail","default data");
    }

    //In generally session data is one time accessible. but if we re use session data then we should use get() method. get method is alternate of pull() method but more help-full
    
    //session Get
    function sessionGet(Request $request):string{
        return $request->session()->get("userEmail","default data");
    }

    //session Forget
    function sessionForget(Request $request):bool{
        $request->session()->forget("userEmail");
        return true;
    }

    //session Flush
    function sessionFlush(Request $request):bool{
        $request->session()->flush();//flush method do not want parameter. because flush method delete all data
        return true;
    }
}
