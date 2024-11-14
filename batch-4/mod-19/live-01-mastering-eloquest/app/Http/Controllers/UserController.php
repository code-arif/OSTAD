<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function userData(){
        // return DB::table('users')->get();
        // return Product::get();
        // return Category::all();

        //get data with category table
        return User::with('categories')->get();
    }
}
