<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function detailShow($id){
        $details = Details::where('id',$id)->get();

        return view('details', ['details' => $details]);
    }
}
