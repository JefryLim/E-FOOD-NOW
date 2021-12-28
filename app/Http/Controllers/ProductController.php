<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $datas = Product::all();

        return view('welcome', ['datas' => $datas]);
    }

    public function insert(Request $request){
        $product = new Product;
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back();
        }

        // dd($request->file('image'));

        $product->name = $request->name;
        $product->desc = $request->desc;

        $path = $request->file('image')->store('public');
        $product->paths = $path;

        $product->save();

        return redirect()->back();
    }

    public function update(Request $request){
        $product = Product::where('name', $request->name)->first();

        if(!$product){
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), [
            'n_name' => 'required',
            'n_desc' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back();
        }

        $product->name = $request->n_name;
        $product->desc = $request->n_desc;

        $product->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $product = Product::where('name', $request->name)->first();

        if(!$product){
            return redirect()->back();
        }

        $product->delete();

        return redirect()->back();
    }
}
