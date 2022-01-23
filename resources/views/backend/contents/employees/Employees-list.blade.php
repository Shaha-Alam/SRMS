@extends('backend.master')

@section('content')
<h1>Employees List</h1>

<a href="{{route('employee.create')}}" class="btn btn-success">Create New Employee</a>

@extends('backend.master')

@section('content')
<h1>Employees List</h1>

<a href="{{route('employee.create')}}" class="btn btn-success">Create New Employee</a>

<!-- <----search---->
<!-- <form class="row g-3">
  <div class="col-auto">
    <label for="inputsearch2" class="visually-hidden"></label>
    <input type="search" class="form-control" id="inputsearch2" placeholder="search">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">search</button>
  </div>
</form> -->

<!-- <------Search-----> 
<form  action="">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>

  <br>
      <button type="submit" class="btn btn-primary mb-3">search</button>
      <i class="fas fa-search"></i>
  
</div>
</form>
<!-- <------End Search----->
<!-- <---- end search---->
    
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
            <th scope="col">Action</th>
          

          </tr>
        </thead>
        <tbody>

        @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->serial}}</td>
                    <td><img src ="{{url('/uploads/'.$employee->employee_image)}}" alt="employee image" width="80px"></td>
                    <td>{{$employee->employee_name}}</td>
                    <td>{{$employee->email_address}}</td>
                    <td>{{$employee->contact_number}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->birth_date}}</td>
                    <td>{{$employee->join_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('backend.employee.view',$employee->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('backend.employee.edit',$employee->id)}}">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('backend.employee.delete',$employee->id)}}">Delete</a>
                   </td> 
                </tr>
            @endforeach
        
        </tbody>      
  </table>
@endsection
<!-- <------Search-----> 
<form  action="">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
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
            <th scope="col">Upload Image</th> 
            <th scope="col">Employee Name</th>
            <th scope="col">Email address</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Gender</th>
            <th scope="col">Salary</th>
            <th scope="col">Birthday Date</th>
            <th scope="col">Join Date</th>
            <th scope="col">Action</th>
          

          </tr>
        </thead>
        <tbody>

        @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->serial}}</td>
                    <td><img src ="{{url('/uploads/'.$employee->employee_image)}}" alt="employee image" width="80px"></td>
                    <td>{{$employee->employee_name}}</td>
                    <td>{{$employee->email_address}}</td>
                    <td>{{$employee->contact_number}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->birth_date}}</td>
                    <td>{{$employee->join_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('backend.employee.view',$employee->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('backend.employee.edit',$employee->id)}}">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('backend.employee.delete',$employee->id)}}">Delete</a>
                   </td> 
                </tr>
            @endforeach
        
        </tbody>      
  </table>
@endsection