@extends('backend.master')


  @section('content')
            <h1>Product Category List</h1>

            <a href="{{route('category.create')}}" class="btn btn-success">Add New Product Category</a>
            
<!-- <------Search-----> 
<form  action="">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>

  <table class="table">
          <thead>
                <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
          </thead>

          <tbody>
              @foreach($categorys as $category)
                 <tr>
            
                    <th>{{$category->category_name}}</th>
                    <th>{{$category->description}}</th>
                  <td>
                    <a class="btn btn-primary" href="{{route('backend.category.views',$category->id)}}">View</a>
                    <a class="btn btn-info" href="{{route('backend.category.edit',$category->id)}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('backend.category.delete',$category->id)}}">Delete</a>
                  </td> 
                 </tr>
              @endforeach
          </tbody>
    </table>
 @endsection