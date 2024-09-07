<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
            
        return view('products.index',['Products'=> Products::latest()->get()]);
    }

    public function create(){
            
        return view('products.create');
    }

    public function store(Request $request) {
        
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:1000'
        ]);


        // this line to get image extension 
        $imageName =  time() .'.'. $request->image->extension();
        // after that line to save image in public_path repositry
        $request->image->move(public_path('Products'), $imageName);
        

       $product =  new Products();
       $product->name = $request->name;
       $product->description  = $request->description;
       $product->image = $imageName;

       $product->save();

       return back()->withSuccess('Product Created !!!');



    }

    public function edit($id){

            $products = Products::where('id', $id)->first();
            return view('products.edit',['product'=> $products]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:1000'
        ]);

        $product = Products::where('id', $id)->first();

        if(isset($request->image)){
            $imageName = time(). '.'. $request->image->extension();
            $request->image->move(public_path('Products'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return back()->withSuccess('Updated Successfully !!!!!');


        

    }

    public function destroy($id){
        $product  = Products::where('id', $id)->first();
        $product->delete();

        return back()->withSuccess('Product Deleted successully !!!!!');
    }

    public function show($id){

        $product =  Products::where('id', $id)->first();
        return view('Products.show', ['Products'=> $product]);

    }
}   
