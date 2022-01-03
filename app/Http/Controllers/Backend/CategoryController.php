<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
    $categorys=Category::all();
        
        return view('backend.contents.category.category-list',compact('categorys'));
    }


    public function create()
    {
        return view('backend.contents.category.category-create');
    }


// product category post method
   
public function store(Request $request)
{

//dd($request->all());
    //  $file_name = '';
    // // step1: check request has file?
    // if ($request->hasFile('employee_image')) {
    //     //file is valid or not
    //     $file = $request->file('employee_image');
    //     if ($file->isValid()) {
    //         //generate unique file name
    //         $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

    //         //store image into local directory
    //         $file->storeAs('employee', $file_name);
    //     }
    

        Category::create([
            'category_name'=>$request->category_name,
            'description'=> $request->description
        ]);

         return redirect()->back()->with('success-message', 'Category Created Successfully.');
    }

    // DELETE METHOD
    public function delete($id)
    {
       $categorys=Category::find($id);
       $categorys->delete();
       return redirect()->back()->with('success-message','Category Created Successfully.');
    }

    //EDIT METHOD
    public function edit($id)
    {
       $categorys=Category::find($id);
    //    return redirect()->back()->with('success-message','Product Created Successfully.');
    return view('backend.contents.category.edit-category',compact('categorys'));  
    }

    //UPDATE METHOD
    public function update(Request $request,$id)
     {
      $categorys=Category::find($id);
//        $file_name=$categorys->image;
// //              step 1: check image exist in this request.
//                  if($request->hasFile('image'))
//                  {
//                      // step 2: generate file name
//                      $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

//                      //step 3 : store into project directory
                 
//                      $request->file('image')->storeAs('/uploads',$file_name);
             
//               }
    

    
            $categorys->update([
                'category_name' => $request->category_name,
                'descripation' => $request->description,
                
    
         ]);
            return redirect()->back()->with('success-message', 'Category Created Successfully.');
    }
    

}

