<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use DB;
use Session;

class ProductController extends Controller
{




    function show(){

        if(Session::has('admin_id')){
            $fetchedProducts = DB::table("products")->orderBy('id','ASC')->get();
            return view('list', compact('fetchedProducts'));

        }
        else{
            return redirect('login');
        }
    }

    function addProduct(){
        return view('add');
    }

    function saveProductInfo(Request $request){
        $validator = Validator::make($request->all(),[
            'Productname' => 'required',
            'Description' => 'required',
            'Quantity' => 'required',
            'Price' => 'required'
        ]);
        if($validator->passes()){
            $product = new Product();
            $product-> productName = $request->Productname;
            $product-> productDescription = $request->Description;
            $product-> quantity = $request->Quantity;
            $product-> price = $request->Price;
            $product-> save();

            $request->session()->flash('msg','Product has been added successfully');
            return redirect('products');
        }
        else if($validator->fails()){
            return redirect('products/add')->withErrors($validator)->withInput();
        }
        else{
            return "error in validator";
        }
    }

    function editProduct($id, Request $request){
        $product = Product::where('id',$id)->first();
        if(!$product){
            $request->session()->flash('error-msg','Record not Available ');
            return redirect('products');
        }
        else{
            return view('edit')->with(compact('product'));
        }
    }

    function updateProductInfo($id, Request $request){
        $validator = Validator::make($request->all(),[
            'Productname' => 'required',
            'Description' => 'required',
            'Quantity' => 'required',
            'Price' => 'required'
        ]);
        if($validator->passes()){
            $product = Product::find($id);
            $product-> productName = $request->Productname;
            $product-> productDescription = $request->Description;
            $product-> quantity = $request->Quantity;
            $product-> price = $request->Price;
            $product-> save();

            $request->session()->flash('msg','Product has been updated successfully');
            return redirect('products');
        }
        else if($validator->fails()){
            return redirect('products/edit/')->withErrors($validator)->withInput();
        }
        else{
            return "error in validator";
        }
    }
    
    function deleteProduct($id, Request $request){
        $product = Product::where('id',$id)->first();
        if(!$product){
            $request->session()->flash('error-msg','Record not found ');
            return redirect('products');
        }
        else{
            Product::where('id',$id)->delete();
            $request->session()->flash('delete-success','Record deleted successfully! ');
            return redirect('products');
        }
    }


}
