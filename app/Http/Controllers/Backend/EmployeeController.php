<?php

namespace App\Http\Controllers\Backend;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function show(Request $request)
    {
        $search = $request->query('search');
        if($search)
        {
         $employees = Employee::where('designation', 'LIKE', '%' .$search. '%')
         ->orWhere('phone_number', 'LIKE', '%' .$search. '%')->get();
         return view('backend.contents.employees.employees-list',compact('employees'));
        }

        $employees=Employee::all();
        return view('backend.contents.employees.employees-list',compact('employees'));
    }


    public function create()
    {
        return view('backend.contents.employees.employee-create');
    }


    // product category post method
    public function store(Request $request)
    {


// //  dd($request->all());
$file_name='';
                //step 1: check image exist in this request.
                 if($request->hasFile('employee_image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('employee_image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('employee_image')->storeAs('/uploads',$file_name);
             
              }
          
    
            Employee::create([
                'serial' => $request->serial,
                'employee_image' => $file_name,
                'employee_name' => $request->employee_name,
                'email_address' => $request->email_address,
                'contact_number' => $request->contact_number,
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
    return view('backend.contents.employees.edit-employee',compact('employees'));  
    }

    // UPDATE METHOD
    public function update(Request $request,$id)
    {
        $employees=Employee::find($id);
        
        if($employees){
       $file_name=$employees->employee_image;
                //step 1: check image exist in this request.
                 if($request->hasFile('employee_image'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('employee_image')->getClientOriginalExtension();

                     //step 3 : store into project directory
                 
                     $request->file('employee_image')->storeAs('/uploads',$file_name);
             
              }
    
             $employees->update([
                 'serial' => $request->serial,
                 'employee_image' =>$file_name,
                 'employee_name' => $request->employee_name,
                 'email_address' => $request->email_address,
                 'contact_number' => $request->contact_number,
                 'gender' => $request->gender,
                 'salary' => $request->salary,
                 'birth_date' => $request->birth_date,
                 'join_date' => $request->join_date,
         ]);
            return redirect()->route('backend.show')->with('success-message', 'Employee Created Successfully.');
     }
    

}



       public function view($id)
       {
         $employees=Employee::find($id);
         return view('backend.contents.employees.view-employee',compact('employees'));  
        }
}