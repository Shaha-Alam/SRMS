<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(Request $request)
    {
   $products=Product::all();
   
        return view('backend.contents.products.products-list',compact('products'));
    }


    public function create()
    {
        return view('backend.contents.products.product-create');
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
    
            Product::create([
                'serial' => $request->serial,
                'name' => $request->name,
                'generic' => $request->generic,
                'category' => $request->category,
                'image' => $file_name,
                'quantity' => $request->quantity,
                'unit_price' => $request->unit_price,
                'status' => $request->status
    
         ]);
            return redirect()->back()->with('success-message', 'Product Created Successfully.');
    }
    
    // DELETE METHOD
    public function delete($id)
    {
       $products=Product::find($id);
       $products->delete();
       return redirect()->back()->with('success-message','Product Created Successfully.');

    }

    // EDIT METHOD
    public function edit($id)
    {
       $products=Product::find($id);
       return view('backend.contents.products.edit-product',compact('products'));  
    }

    // UPDATE METHOD
    public function update(Request $request,$id)
    {
        $products=Product::find($id);
        if($products){
       $file_name=$products->image;
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
    
    
            $products->update([
                'serial' => $request->serial,
                'name' => $request->name,
                'generic' => $request->generic,
                'category' => $request->category,
                'image' => $file_name,
                'quantity' => $request->quantity,
                'unit_price' => $request->unit_price,
                'status' => $request->status,
         ]);
            return redirect()->route('backend.show')->with('success-message', 'Product Created Successfully.');
    }

}  

}
