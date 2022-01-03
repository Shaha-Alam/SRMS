@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('backend.employee.update',$employees->id)}}" method="post">
  @csrf
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Create New Employee</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" value="{{$employee->serial}}"placeholder="Serial" required>
    </div>


    <div class="mb-3 form-group">
      <label for="validationCustom03">Upload Image</label>
      <input requied name="employee_image" type="file" multiple class="form-control-file" multiple class="form-control-file">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Employee Name</label>
      <input type="text" name="employee_name" class="form-control" id="validationCustom01" value="{{$employee->employee_name}}"placeholder="Employee Name" required>
    </div>

    <div class="">
      <label for="validationCustom02">Email address</label>
      <input type="text" name="email_address" class="form-control" id="validationCustom02" value="{{$employee->email_address}}"placeholder="Email address" required>
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Contact Number</label>
      <input type="text" name="contact_number" class="form-control" id="validationCustom03" value="{{$employee->contact_number}}"placeholder="Contact Number" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationCustom04" value="{{$employee->gender}}"placeholder="gender" required>
    </div>
    
    <div class="mb-3 form-group">
      <label for="validationCustom05">Salary</label>
      <input type="text" name="salary" class="form-control" id="validationCustom05" value="{{$employee->salary}}"placeholder="BDT" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Birthday Date</label>
      <input type="text" name="birthday_date" class="form-control" id="validationCustom04" value="{{$employee->birthday_date}}"placeholder="Birthday Date" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Join Date</label>
      <input type="text" name="join_date" class="form-control" id="validationCustom04" value="{{$employee->join_date}}"placeholder="Join Date" required>
    </div>
    

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    </div>

    <button type="submit">submit</button>


</form>
<!-- 
<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
  
})();
</script> -->


@endsection