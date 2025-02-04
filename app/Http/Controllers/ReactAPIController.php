<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;

use Illuminate\Http\Request;

class ReactAPIController extends Controller
{
    public function send(){
        return DB::table("products")->orderBy('id','ASC')->get();
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->password = $request->password;
        $product->save();

        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }

}
