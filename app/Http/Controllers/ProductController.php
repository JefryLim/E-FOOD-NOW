<?php

namespace App\Http\Controllers;

use App\Models\Details;
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
        $details = new Details;
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'ingredients' => 'required',
            'procedure' => 'required',
            'image' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back();
        }

        // dd($request->file('image'));

        $product->name = $request->name;
        $details->name = $request->name;

        $details->product_id = 1;
        $details->ingredients = $request->ingredients;
        $details->food_procedure = $request->procedure;

        $path = $request->file('image')->store('public');
        $product->paths = $path;
        $details->paths = $path;

        $product->save();
        $details->save();

        return redirect()->back();
    }

    public function update(Request $request){
        $product = Product::where('name', $request->name)->first();
        $details = Details::where('name', $request->name)->first();

        if(!$product && !$details){
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), [
            'n_name' => 'required',
            'n_ingredients' => 'required',
            'n_procedure' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back();
        }

        $product->name = $request->n_name;

        $details->name = $request->n_name;
        $details->ingredients = $request->n_ingredients;
        $details->food_procedure = $request->n_procedure;

        $product->save();
        $details->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $product = Product::where('name', $request->name)->first();
        $details = Details::where('name', $request->name)->first();


        if(!$product && !$details){
            return redirect()->back();
        }

        $product->delete();
        $details->delete();

        return redirect()->back();
    }
}
