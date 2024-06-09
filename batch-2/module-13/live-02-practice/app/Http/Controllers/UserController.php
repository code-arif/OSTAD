<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //registration blade show
    public function showRegister()
    {
        return view('pages.auth.register');
    }

    //register
    // public function register(Request $request)
    // {
    //     try {
    //         $validatedData = $request->validate([
    //             'first_name' => 'required|alpha|max:50',
    //             'last_name' => 'required|alpha|max:50',
    //             'email' => 'required|email|unique:users,email',
    //             'phone' => 'nullable|digits_between:0,15',
    //             'password' => 'required|string|min:8|max:255',
    //             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
    //         ]);

    //         // Image customization
    //         if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             $imageNameToStore = 'profile' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('images/profile'), $imageNameToStore);
    //             $validatedData['image'] = $imageNameToStore;
    //         }

    //         //user create

    //         User::create($validatedData);
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Registred successfully',
    //         ]);
    //     } catch (Exception $exception) {
    //         Log::error('Registration failed: ' . $exception->getMessage());
    //         return response()->json([
    //             'status' => 'failed',
    //             'message' => 'Registration failed. Please try again later.', // Generic message for user
    //         ]);
    //     }
    // }



    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|alpha|max:50',
                'last_name' => 'required|alpha|max:50',
                'email' => 'required|email|unique:users,email',
                'phone' => 'nullable|digits_between:0,15',
                'password' => 'required|string|min:8|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
            ]);

            // Image customization
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageNameToStore = 'profile' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/profile'), $imageNameToStore);
                $validatedData['image'] = $imageNameToStore;
            }

            // Hash the password
            $validatedData['password'] = Hash::make($validatedData['password']);

            // Create user
            User::create($validatedData);

            return response()->json([
                'status' => 'success',
                'message' => 'Registered successfully',
            ]);
        } catch (ValidationException $validationException) {
            // Validation error handling
            return response()->json([
                'status' => 'failed',
                'errors' => $validationException->errors(),
                'message' => 'Validation failed. Please check the input data.',
            ], 422); // HTTP status code for Unprocessable Entity
        } catch (\Exception $exception) {
            Log::error('Registration failed: ' . $exception->getMessage());
            return response()->json([
                'status' => 'failed',
                'message' => 'Registration failed. Please try again later.',
            ], 500); // HTTP status code for Internal Server Error
        }
    }


    public function showLogin()
    {
        return view('pages.auth.login');
    }
}
