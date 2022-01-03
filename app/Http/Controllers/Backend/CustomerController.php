<?php

namespace App\Http\Controllers\Backend;
 use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
     public function show()

   {
        return view('backend.contents.customers.customer-list');
    }


    public function create()
    {
        return view('backend.contents.customers.customer-create');
    }
    



    public function store(Request $request)
    {

        //dd($request->all());
        
        $request->validate([
            'employee_id' => 'required',
            'product_id' => 'required',
            'target_quantity' => 'required|gt:0',
            'start_date'  =>  'required|after:yesterday',
        ]);
        
        
        // dd(Carbon::create($request->start_date)->addMonth());
        if ($product_quantity < $request->target_quantity) {
            return redirect()->back()->with('error-message', 'Not enough product in store');
        } elseif ($products && $data->start_date > $request->start_date && $data->start_date < $request->start_date) {
            return redirect()->back()->with('error-message', 'This employee has task starting date, check it or wait for the next month');
        } elseif ($products  && $data->employee_id == $request->employee_id && $data->start_date != $request->start_date && $request->start_date < Carbon::create($data->start_date)->addMonth()) {
            return redirect()->back()->with('error-message', 'This employee has task starting date, check it or wait for the next month');
        }
        // dd($data);
        else {
            Task::create([
                'employee_id' => $request->employee_id,
                'product_id' => $request->product_id,
                'target_quantity' => $request->target_quantity,
                'total_price' => $total_price,
                'start_date' => $request->start_date,
                'end_date' => Carbon::create($request->start_date)->addMonth(),
            ]);
        
            $left_quantity = $product_quantity - $request->target_quantity;
            // dd($left_quantity);
        
            Product::where('id', $request->product_id)->update([
                'quantity' => $left_quantity
            ]);        
        
               
            return redirect()->back()->with('success-message', 'task Created Successfully.');
        }
    }
    
}


