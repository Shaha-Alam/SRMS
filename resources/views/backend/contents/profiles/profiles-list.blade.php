@extends('admin.master')
@section('content')



<form method="post" action="">
        @csrf


        <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control"  placeholder="Enter password" name="pswd">
  </div>


  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       

 @endsection