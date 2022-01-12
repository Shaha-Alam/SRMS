@extends('backend.master')


@section('content')
    <h1>Task List</h1>

    <a href="{{route('task.create')}}" class="btn btn-success">Add New Task</a>

    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Employee Email</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Image</th>
            <th scope="col">Total Price</th>
            <th scope="col">Total Quantity</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

           <!-- <th scope="col">Action</th> -->

        </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                    <th>{{$task->serial}}</th>
                    <th>{{$task->employee_name}}</th>
                    <th>{{$task->employee_email}}</th>
                    <th>{{$task->product_name}}</th>
                    <th>{{$task->product_image}}</th>
                    <th>{{$task->total_price}}</th>
                    <th>{{$task->total_quantity}}</th>
                    <th>{{$task->start_date}}</th>
                    <th>{{$task->end_date}}</th>
                    <th>{{$task->status}}</th>
                    <!-- <th>{{$task->action}}</th> -->
                   <td>
                       
                        <!-- <a class="btn btn-primary" href="">View</a>
                        <a class="btn btn-info" href="{{route('backend.task.edit',$task->id)}}">Edit</a>  -->
                        <a class="btn btn-danger" href="{{route('backend.task.delete',$task->id)}}">Delete</a>
                    </td> 
                   

                   
                </tr>
               @endforeach
        
       </tbody>
   </table>
@endsection