<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
        //create user
        public function create(Request $request){
            return User::create($request->input());
        }

        public function update(Request $request, $id){
        return User::where('id', $id)->update($request->all());
        }

        //profile and user model relationship
        public function user_profile(){
            return User::with('profile')->first();
        }

        //user and post modle relationship
        public function user_post(){
            return User::with('post')->get();
        }



}
