<?php
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\LoginController;  
use App\Http\Controllers\Backend\ReportController;

use App\Http\controllers\Backend\DashboardController;

// use App\Http\Controllers\Backend\DashboardController;


// frontend
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// backend
    Route::get('/login',[LoginController::class,'login'])->name('backend.login');
    Route::post('/login',[LoginController::class,'doLogin'])->name('backend.do.login');


    Route::group(['prefix'=>'backend-portal','middleware'=>'auth'],function(){
        //dashboard create
        Route::get('/',[DashboardController::class,'dashboard'])->name('backend');

    // Route::get('/', function () {
    //     return view('backend.contents.home');
    // })->name('backend');

    // Route::get('/', function () {
    //     return redirect()->route('backend');
    // });
    Route::get('/logout',[LoginController::class,'logout'])->name('backend.logout');

    //Login route
    //   Route::post('/registration',[UserController::class,'registration'])->name('backend.registration');
    


    // Product route
     Route::get('/product',[ProductController::class,'show'])->name('backend.show');         
     Route::get('/product/product-list',[ProductController::class,'list'])->name('backend.list');
     Route::get('/product/Create an Product',[ProductController::class,'create'])->name('backend.create');
     Route::post('/product/Create an Product',[ProductController::class,'store'])->name('backend.store');

     Route::get('/product/product-list/delete/{id}',[ProductController::class,'delete'])->name('backend.product.delete');
     Route::get('/product/product-list/edit/{id}',[ProductController::class,'edit'])->name('backend.product.edit');
     Route::put('/product/product-list/edit/{id}',[ProductController::class,'update'])->name('backend.product.update');
     Route::get('/product/product-list/view/{id}',[ProductController::class,'details'])->name('backend.product.views');

    //Category route
     Route::get('/product category',[CategoryController::class,'show'])->name('category.show');
     Route::get('/product category/add new product category',[CategoryController::class,'create'])->name('category.create');
     Route::post('/product category/add new product category',[CategoryController::class,'store'])->name('category.store');

     Route::get('/category/category-list/delete/{id}',[CategoryController::class,'delete'])->name('backend.category.delete');
     Route::get('/category/category-list/edit/{id}',[CategoryController::class,'edit'])->name('backend.category.edit');
     Route::put('/category/category-list/edit/{id}',[CategoryController::class,'update'])->name('backend.category.update');
     Route::get('/category/category-list/view/{id}',[CategoryController::class,'details'])->name('backend.category.views');


    //Employees route
     Route::get('/employee',[EmployeeController::class,'show'])->name('employee.show');    
     Route::get('/employee/employee-list',[EmployeeController::class,'list'])->name('employee.list');
     Route::get('/employee/Create an Employee',[EmployeeController::class,'create'])->name('employee.create');
     Route::post('/employee/Create an Employee',[EmployeeController::class,'store'])->name('employee.store');

     Route::get('/employee/employee-list/delete/{id}',[EmployeeController::class,'delete'])->name('backend.employee.delete');
     Route::get('/employee/employee-list/edit/{id}',[EmployeeController::class,'edit'])->name('backend.employee.edit');
     Route::put('/employee/employee-list/edit/{id}',[EmployeeController::class,'update'])->name('backend.employee.update');
     Route::get('/employee/employee-list/view/{id}',[EmployeeController::class,'view'])->name('backend.employee.view');
    //task route
     Route::get('/task',[TaskController::class,'show'])->name('task.show');
     Route::get('/task/task-list',[TaskController::class,'list'])->name('task.list');
     Route::get('/task/Create an task',[TaskController::class,'create'])->name('task.create');
     Route::post('/task/Create an task',[TaskController::class,'store'])->name('task.store');

     Route::get('/task/task-list/delete/{id}',[TaskController::class,'delete'])->name('backend.task.delete');
     Route::get('/task/task-list/edit/{id}',[TaskController::class,'edit'])->name('backend.task.edit');
    //  Route::put('/task/task-list/edit/{id}',[TaskController::class,'update'])->name('backend.task.update');


     //sale route
     Route::get('/sale',[SaleController::class,'show'])->name('sale.show');
    // Route::get('/sale/sale-list',[SaleController::class,'list'])->name('sale.list');
    //  Route::get('/sale/Create an sale',[SaleController::class,'create'])->name('sale.create');
    //  Route::post('/sale',[SaleController::class,'store'])->name('sale.store');

     //customer route
     Route::get('/customer',[CustomerController::class,'show'])->name('customer.show');
    // Route::get('/customer/customer-list',[CustomerController::class,'list'])->name('customer.list');
    //  Route::get('/customer/Create an task',[CustomerController::class,'create'])->name('customer.create');
    // Route::post('/customer/Create an task',[CustomerController::class,'store'])->name('customer.store');


    //report days
    Route::get('/reports', [ReportController::class, 'report'])->name('sales.report');


});


// frontend
Route::get('/user', function () 
{
    return redirect()->route('user');
});


Route::group(['prefix'=>'user-portal'],function(){
    Route::get('/user', function () 
    {
        return view('frontend.index');
    })->name('user');
});

//both  user
//sales
// Route::get('/sales-details/view/{id}', [SaleController::class, 'salesDetailsView'])->name('salesDetailsView.list')->middleware('auth');

// //customers
// Route::get('/customers', [CustomerController::class, 'customers'])->name('customers.list')->middleware('auth');