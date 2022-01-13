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


  //task post method
    public function store(Request $request)
    {

//  dd($request->all());
$file_name='';
             //  step 1: check image exist in this request.
                 if($request->hasFile('product_image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('product_image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('product_image')->storeAs('/uploads',$file_name);
             
              }
        
       
            Task::create([
                'serial' => $request->serial,
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'product_name' => $request->product_name,
                'product_image' =>$file_name,
                'total_price' =>$request->total_price,
                'target_quantity' => $request->target_quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status
            ]);
               
             return redirect()->back()->with('success-message', 'Task Created Successfully.');
        }

        
    // DELETE METHOD
    public function delete($id)
    {
       $tasks=Task::find($id);
       $tasks->delete();
       return redirect()->back()->with('success-message','Task Created Successfully.');

    }
    // EDIT METHOS
    public function edit($id)
    {
       $tasks=task::find($id);
    return view('backend.contents.task.edit-task',compact('tasks'));  
    }
    // UPDATE METHOD
    public function update(Request $request,$id)
    {
        $tasks=task::find($id);
        if($tasks){
       $file_name=$tasks->product_image;
//              step 1: check image exist in this request.
                 if($request->hasFile('product_image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('product_image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('product_image')->storeAs('/uploads',$file_name);
             
              }
        
    
            $tasks->update([
                'serial' => $request->serial,
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'product_name' => $request->product_name,
                'employee_image' =>$file_name,
                'total_price' =>$request->total_price,
                'target_quantity' => $request->target_quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
         ]);
            return redirect()->route('backend.show')->with('success-message', 'task Created Successfully.');
    }

}  
}



    
    


