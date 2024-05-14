<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    ////single image
    public function singleImage(){
        return view('pages.images.single-image');
    }

    ////upload single image
    public function uploadSingleImage(Request $request){
        // dd($request->all());
        //check validation
        // dd($request->image->isValid());
        $this->validate($request,[
            'image' => 'required|image|mimes:png,jpg,png|max:4096',
        ]);
        
        //image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'photo' . '_' . md5(uniqid()) . '_' . time() . '.'
            .$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
        }

        return redirect()->back();
    }


    /////show multiple image
    public function multipleImage(){
        return view('pages.images.multiple-images');
    }

    /////upload multiple image
    public function uploadMultipleImage(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'images.*' => 'image|mimes:png,jpg,png|max:20000', 
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imagesNameToStore = 'multiple_photo-' . md5(uniqid()) . '-' . time() . '.' .
                $image->getClientOriginalExtension();
                $image->move(public_path('images/multiple'), $imagesNameToStore);
                // dd($imagesNameToStore);
            }
        }

        return redirect()->back();
    }
}
