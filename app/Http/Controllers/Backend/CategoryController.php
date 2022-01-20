<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
      public function show(Request $request){

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

    
            $categorys->update([
                'category_name' => $request->category_name,
                'description' => $request->description,
                
            ]);
                 return redirect()->back()->with('success-message', 'Category Created Successfully.');
        }
        
        public function details($id)
        {
            $categorys=Category::find($id);
            return view('backend.contents.category.view-category',compact('categorys'));
        }
}

