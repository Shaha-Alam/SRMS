<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use App\Models\Employee;
// use App\Models\Employee

class DashboardController extends Controller
{
    public function dashboard(){
        $product = Product::count();
        // $employee = Employee::count();
        // dd($user);
        //return view('backend.contents.home',compact('user'));
        return view('backend.contents.home',compact('product'));
    }


}
