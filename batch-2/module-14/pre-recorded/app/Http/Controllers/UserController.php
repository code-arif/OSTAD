<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //login page show
    public function loginShow()
    {
        return view('pages.auth.login-page');
    }

    //registraion page show
    public function registrationShow()
    {
        return view('pages.auth.registration-page');
    }

    //send otp page show
    public function showSendOTP()
    {
        return view('pages.auth.send-otp-page');
    }

    //show verify otp
    public function showVerifyOTP()
    {
        return view('pages.auth.verify-otp-page');
    }

    //rest password
    public function showResetPassword()
    {
        return view('pages.auth.reset-pass-page');
    }

    //user registration
    public function UserRegistraion(Request $request)
    {
        try {
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password'),
            ]);

            return response()->json(
                [
                    'status' => 'Success',
                    'message' => 'User Registraion Successfull',
                ],
                200,
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'status' => 'Fail',
                    'message' => 'Registraion failed',
                ],
                401,
            );
        }
    }

    //user login
    public function UserLogin(Request $request)
    {
        $userFind = User::where('email', $request->input('email'))->where('password', $request->input('password'))->select('id')->first();

        if ($userFind) {
            // Check if $userFind is not null
            // Login
            $token = JWTToken::CreateToken($request->input('email'));
            return response()
                ->json(
                    [
                        'status' => 'Success',
                        'message' => 'User Login Successful',
                    ],
                    200,
                )
                ->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json(
                [
                    'status' => 'fail',
                    'message' => 'Email or password does not match',
                ],
                401,
            );
        }
    }

    //opt code sending
    public function SendOTP(Request $request)
    {
        $email = $request->input('email');
        $otp = rand(10000, 99999);
        $userFind = User::where('email', '=', $email)->count();
        if ($userFind === 1) {
            //send otp email address
            Mail::to($email)->send(new OTPMail($otp));
            //update otp in database
            User::where('email', '=', $email)->update(['otp' => $otp]);
            return response(
                [
                    'status' => 'success',
                    'message' => 'Otp send successfully',
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'message' => 'Email does not exist',
                ],
                401,
            );
        }
    }

    //verify otp
    public function VerifyOTP(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');
        $count = User::where('email', '=', $email)->where('otp', '=', $otp)->count();

        if ($count === 1) {
            //database otp update
            User::where('email', '=', $email)->update(['otp' => '0']);
            //password reset token issue
            $token = JWTToken::PassResetToken($request->input('email'));
            return response()
                ->json(
                    [
                        'status' => 'success',
                        'message' => 'OTP varification Successfull',
                    ],
                    200,
                )
                ->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json(
                [
                    'message' => 'OTP does not exist',
                ],
                401,
            );
        }
    }

    //password reset
    public function ResetPassword(Request $request)
    {
        try {
            $email = $request->header('email');
            $password = $request->input('password');
            User::where('email', '=', $email)->update(['password' => $password]);
            return response()->json(
                [
                    'status' => 'success',
                    'message' => 'Request Succesfull',
                ],
                200
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'status' => 'Fail',
                    'message' => 'Something went wrong',
                ],
                401
            );
        }
    }

}
