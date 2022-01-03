<?php

namespace App\Http\Controllers\Backend;
 use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
     public function show(Request $request)
   {
       $tasks=Task::all();
        return view('backend.contents.task.task-list',compact('tasks'));
    }


    public function create()
    {
        return view('backend.contents.task.task-create');
    }



    public function store(Request $request)
    {

//  dd($request->all());
$file_name='';
//              step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('image')->storeAs('/uploads',$file_name);
             
              }
        
       
            Task::create([
                'serial' => $request->serial,
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'product_name' => $request->product_name,
                'product_image' => $request->product_image,
                'total_price' =>$request->total_price,
                'target_quantity' => $request->target_quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status
            ]);
               
             return redirect()->back()->with('success-message', 'task Created Successfully.');
        }

        
    // DELETE METHOD
    public function delete($id)
    {
       $tasks=Task::find($id);
       $tasks->delete();
       return redirect()->back()->with('success-message','task Created Successfully.');

    }
    public function edit($id)
    {
       $tasks=task::find($id);
    //    return redirect()->back()->with('success-message','task Created Successfully.');
    return view('backend.contents.tasks.edit-task',compact('tasks'));  
    }
    public function update(Request $request,$id)
    {
        $tasks=task::find($id);
        if($tasks){
       $file_name=$tasks->image;
//              step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('image')->storeAs('/uploads',$file_name);
             
              }
          
    


            // $request->validate([
            //     'name' => 'required|unique:products',
            //     'generic' => 'required',
            //     'category_id' => 'required',
            //     'quantity' => 'required|gt:0',
            //     'unit_price' => 'required|gt:0'
            // ]);
    
            $tasks->update([
                'serial' => $request->serial,
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'product_name' => $request->product_name,
                'product_image' => $request->product_image,
                'total_price' =>$request->total_price,
                'target_quantity' => $request->target_quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status
            // $products->update([
            //     'serial' => $request->serial,
            //     'name' => $request->name,
            //     'generic' => $request->generic,
            //     'category' => $request->category,
            //     'image' => $file_name,
            //     'quantity' => $request->quantity,
            //     'unit_price' => $request->unit_price,
            //     'status' => $request->status,
         ]);
            return redirect()->route('backend.show')->with('success-message', 'task Created Successfully.');
    }

}  



    }
    

