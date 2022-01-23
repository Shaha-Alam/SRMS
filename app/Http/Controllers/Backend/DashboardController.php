<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

// use App\Models\Employee;
// use App\Models\Employee

use App\Models\Employee;
use App\Models\Task;



class DashboardController extends Controller
{
    public function dashboard(){
        //  $user = User::count();
         $product = Product::count();
         $employee = Employee::count();
         $task = Task::count();

        //   dd($user);
        //  return view('backend.contents.home');
        return view('backend.contents.home',compact('product','employee','task'));
    }
}
