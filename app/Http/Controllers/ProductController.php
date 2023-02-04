<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $products=Product::latest()->paginate(5);
        return view('products',compact('products'));
    }

    // Add a new product
    public function addProduct(Request $request){
        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required',
        ],
        [
            "name.required" =>"Name Is Required",
            "name.unique" =>"Name Is Already Exists",
            "price.required" =>"Price Is Required",
        ]
    );
    Product::create([
        "name" => $request->name,
        "price" => $request->price,
    ]);
    return response()->json([
        'status' =>'Success',
    ]);
    }

    public function updateProduct(Request $request){
        $request->validate([
            'up_name' => 'required|unique:products,name,'.$request->up_id,
            'up_price' => 'required',
        ],
        [
            "uP_name.required" =>"Name Is Required",
            "up_name.unique" =>"Name Is Already Exists",
            "up_price.required" =>"Price Is Required",
        ]
    );
    Product::where('id',$request->up_id)->update([
        "name" => $request->up_name,
        "price" => $request->up_price,
    ]);
    return response()->json([
        'status' =>'Success',
    ]);

    }
}
