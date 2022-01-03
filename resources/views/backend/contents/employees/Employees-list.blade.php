@extends('backend.master')

@section('content')
<h1>Employees List</h1>

<a href="{{route('employee.create')}}" class="btn btn-success">Create New Employee</a>

    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Upload Image</th> 
            <th scope="col">Employee Name</th>
            <th scope="col">Email address</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Gender</th>
            <th scope="col">Salary</th>
            <th scope="col">Birthday Date</th>
            <th scope="col">Join Date</th>
          

        </tr>
        </thead>
        <tbody>

        @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->serial}}</td>
                    <td>{{$employee->employee_image}}</td>
                    <td>{{$employee->employee_name}}</td>
                    <td>{{$employee->email_addres}}</td>
                    <td>{{$employee->contact_number}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->birthday_date}}</td>
                    <td>{{$employee->join_date}}</td>
                    <td>
                  <a class="btn btn-primary" href="">View</a>
                  <a class="btn btn-info" href="">Edit</a>
                  <a class="btn btn-danger" href="{{route('backend.employee.delete',$employee->id)}}">Delete</a>
            </td> 
                </tr>
            @endforeach
        
</tbody>



        </tbody>
    </table>
@endsection