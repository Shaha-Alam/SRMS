<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
<<<<<<< HEAD
// use App\Models\Employee;
// use App\Models\Employee
=======
use App\Models\Employee;
use App\Models\Task;

>>>>>>> aa60ab785a7864c23e48e8e71a72b3ecee4e1773

class DashboardController extends Controller
{
    public function dashboard(){
<<<<<<< HEAD
        $product = Product::count();
        // $employee = Employee::count();
        // dd($user);
        //return view('backend.contents.home',compact('user'));
        return view('backend.contents.home',compact('product'));
    }


=======
        //  $user = User::count();
         $product = Product::count();
         $employee = Employee::count();
         $task = Task::count();

        //   dd($user);
        //  return view('backend.contents.home');
        return view('backend.contents.home',compact('product','employee','task'));
    }
>>>>>>> aa60ab785a7864c23e48e8e71a72b3ecee4e1773
}
