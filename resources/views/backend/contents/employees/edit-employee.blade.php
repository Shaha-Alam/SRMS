@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('backend.employee.update',$employees->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
  
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Create New Employee</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" value="{{$employees->serial}}"placeholder="Serial" >
    </div>


    <div class="mb-3 form-group">
      <label for="validationCustom03">Upload Image</label>
      <input requied name="employee_image" type="file" multiple class="form-control-file" multiple class="form-control-file">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Employee Name</label>
      <input type="text" name="employee_name" class="form-control" id="validationCustom01" value="{{$employees->employee_name}}"placeholder="Employee Name" >
    </div>

    <div class="">
      <label for="validationCustom02">Email address</label>
      <input type="text" name="email_address" class="form-control" id="validationCustom02" value="{{$employees->email_address}}"placeholder="Email address" >
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Contact Number</label>
      <input type="text" name="contact_number" class="form-control" id="validationCustom03" value="{{$employees->contact_number}}"placeholder="Contact Number" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationCustom04" value="{{$employees->gender}}"placeholder="gender" >
    </div>
    
    <div class="mb-3 form-group">
      <label for="validationCustom05">Salary</label>
      <input type="text" name="salary" class="form-control" id="validationCustom05" value="{{$employees->salary}}"placeholder="BDT" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Birthday Date</label>
      <input type="text" name="birthday_date" class="form-control" id="validationCustom04" value="{{$employees->birth_date}}"placeholder="Birthday Date" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Join Date</label>
      <input type="text" name="join_date" class="form-control" id="validationCustom04" value="{{$employees->join_date}}"placeholder="Join Date" >
    </div>
    

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