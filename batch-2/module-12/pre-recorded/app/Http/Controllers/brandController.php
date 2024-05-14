<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
        //create
        public function create_data(Request $request){
            return Brand::create($request->input());
        }

        //update
        public function updateBrand(Request $request){
            return Brand::where('id',$request->id)->update($request->input());
        }

        //upsert = update + insert
        public function upsert_brand(Request $request){
            return Brand::updateOrCreate(
                ['brandName' => $request->brandName],
                $request->input()
            );
        }
        //delete
        public function delete(Request $request){
            return Brand::where('id', $request->id)->delete();
        }
}
