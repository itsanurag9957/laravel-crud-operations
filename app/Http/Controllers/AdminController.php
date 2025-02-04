<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Hash;
use App\Models\Product;
use Session;

class AdminController extends Controller
{
    function showLogin(Request $request){
        return view('login');
        // return "login page ";

    }

    function login(Request $request){
        // $data = $request->input();
        // $request->session()->put('admin',$data['admin_name']);
        // return session('admin');
        
        $validator = Validator::make($request->all(), [
            'admin_name'=>['required'],
            'password' => ['required','min:8']
        ]);

        if($validator->passes()){
            $admin=Admin::where('admin_name',$request->admin_name)->first();
            if($admin && Hash::check($request->password, $admin->password) && $request->admin_name === $admin->admin_name){
                Session::put('admin_id',$admin->id);
                Session::put('admin_name',$admin->admin_name);
                return redirect('/products');
            }
            else{
                return "plese enter correct credentials";
            }
        }
        else{
            return "validation error";
        }        
    }

    function logout(Request $request) {
        Session::flush();
        return redirect('/login');
    }

    
}
