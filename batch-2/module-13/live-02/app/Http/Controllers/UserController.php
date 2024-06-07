<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function register(Request $request){
            try{
                User::create($request->input());
                return response()->json([
                    'status' => 'success',
                    'message' => 'User registered successfully'
                ]);
            }catch(Exception $exception){
                return response()->json([
                    'status' => 'failed',
                    'message' => $exception->getMessage(),
                ]);
            }
    }
}
