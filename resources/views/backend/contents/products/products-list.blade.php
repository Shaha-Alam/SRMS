@extends('backend.master')


@section('content')
           

    <h1>Product List</h1>

    <a href="{{route('backend.create')}}" class="btn btn-success">Create an Product</a>
            <!-- <------Search-----> 
            <form  action="">
                <div class="input-group rounded mt-3 mb-2">
                    <div class="form-outline">
                       <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon"/>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary mb-3">search</button>
                    <i class="fas fa-search"></i>
  
                 </div>
            </form>
            <!-- <------End Search----->

    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Product Name</th>
            <th scope="col">Generic Name</th>
            <th scope="col">Product category</th>
            <th scope="col">Product Image</th>
            <th scope="col"> Quantity</th>
            <th scope="col">Unti Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

        @foreach ($products as $product)
                <tr>
                    <td>{{$product->serial}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->generic}}</td>
                    <td>{{$product->category}}</td>
                    <td><img src = "{{url('/uploads/'.$product->image)}}" alt="image" width="80px"></td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->unit_price}}</td>
                    <td>{{$product->status}}</td>


                    <td>
                        <a class="btn btn-primary" href="{{route('backend.product.views',$product->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('backend.product.edit',$product->id)}}">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('backend.product.delete',$product->id)}}">Delete</a>
                    </td>
                   
                </tr>
            @endforeach
        
</tbody>



        </tbody>
    </table>
@endsection