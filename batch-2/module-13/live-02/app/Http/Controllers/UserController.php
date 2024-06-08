<?php

namespace App\Http\Controllers;

use App\Helper\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function register(Request $request)
    {
        //user registration
        try {
            User::create($request->input());
            return response()->json([
                'status' => 'success',
                'message' => 'User registered successfully',
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    //user login
    public function login(Request $request)
    {
        try {
            $user = User::where($request->input())->select('id')->first();
            $userId = $user->id;
            if ($userId > 0) {
                $token = JWTHelper::createToken($request->input('email'),$userId);
                return response()->json([
                    'status' => 'success',
                    'message' => 'Login success',
                ])->cookie('token' , $token, time()+60*60);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'User not found',
                ]);
            }
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    //user profile
    public function profile(Request $request){
        $userId = $request->header('id');
        return User::where('id', $userId)->first();
    }

    //user logout
    public function logout(){
        return redirect('/login')->cookie('token',time()-60*60);
    }

}
