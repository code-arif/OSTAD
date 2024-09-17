<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function getCountries(Request $request)
    {
        if ($request->isMethod('post')) {
            return response("Hello, this is POST request");
        }
        return response("This is GET request");
    }

    //quey string
    public function queryString(Request $request)
    {
        if ($request->isMethod('get')) {
            $page = $request->input('page', 1);
            $perPage = $request->input('perPage', 10);
            $output = "Desplaying all records page $page and  per page $perPage";
            return response($output);
        }
        return response("This is POST request");
    }
}
