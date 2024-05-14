<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CreateCustomizeJsonController extends Controller
{
    public function create_json(Request $request): JsonResponse{
        $code = 401;
        $content = ['name' => 'ariful', 'age'=> '25','aim'=> 'full-stuck web developer'];
        return response()->json($content,$code);
    }
}
