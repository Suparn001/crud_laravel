<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
          return view('product.list')
    }

    public function create(){
        
    }

    public function store(){
     




        /// for image
     if($request->image!=""){
        // here we will store image
        $image= $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; // unique image name
  
  // save image to product directory
       $image->move(public_path('uploads/products'),$imageName);
  
        // save image in databse
            $product->image =  $imageName;
            $product->save();
      }
     }


    // public function index(){
        
    // }

    // public function index(){
        
    // }

    // public function index(){
        
    // }
}
