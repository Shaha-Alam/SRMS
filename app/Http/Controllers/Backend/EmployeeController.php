<?php

namespace App\Http\Controllers\Backend;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function show(Request $request)
    {
        $employees=Employee::all();
        return view('backend.contents.employees.employees-list',compact('employees'));
    }


    public function create()
    {
        return view('backend.contents.employees.employee-create');
    }



    public function store(Request $request)
    {


//  dd($request->all());
$file_name='';
                //step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('image')->storeAs('/uploads',$file_name);
             
              }
          
    
            Employee::create([
                'serial' => $request->serial,
                'employee_image' => $file->employee_image,
                'employee_name' => $user->employee_name,
                'email_addres' => $request->email_addres,
                'gender' => $request->gender,
                'salary' => $request->salary,
                'birth_date' => $request->birth_date,
                'join_date' => $request->join_date
            ]);
                return redirect()->back()->with('success-message', 'Employee Created Successfully.');
        }
        
    // DELETE METHOD
    public function delete($id)
    {
       $employees=Employee::find($id);
       $employees->delete();
       return redirect()->back()->with('success-message','Product Created Successfully.');

    }

    // EDIT METHOD
    public function edit($id)
    {
       $employees=Employee::find($id);
    //    return redirect()->back()->with('success-message',Employee Created Successfully.');
    return view('backend.contents.employees.edit-product',compact('employees'));  
    }

    // UPDATE METHOD
    public function update(Request $request,$id)
    {
        $employees=Employee::find($id);
        if($employees){
       $file_name=$employees->image;
                //step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('image')->storeAs('/uploads',$file_name);
             
              }
    
             $employees->update([
                 'serial' => $request->serial,
                 'employee_image' => $request->employee_image,
                 'employee_name' => $request->employee_name,
                 'email_addres' => $request->email_addres,
                 'contact_number' => $request->contact_number,
                 'gender' => $request->gender,
                 'salary' => $request->salary,
                 'birthday_date' => $request->birthday_date,
                 'join_date' => $request->join_date,
                //  '' => $request->,
         ]);
            return redirect()->route('backend.show')->with('success-message', 'Product Created Successfully.');
     }
    

}
}