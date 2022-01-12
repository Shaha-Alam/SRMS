@extends('backend.master')


  @section('content')
            <h1>Product Category List</h1>

            <a href="{{route('category.create')}}" class="btn btn-success">Add New Product Category</a>

    
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
                    <a class="btn btn-danger" href="{{route('backend.category.delete',$category->id)}}">Delete</a>
                  </td> 
                 </tr>
              @endforeach
          </tbody>
    </table>
 @endsection