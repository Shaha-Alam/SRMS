@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Create New Employee</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" placeholder="Serial" required>
    </div>


    <div class="mb-3 form-group">
      <label for="validationCustom03">Upload Image</label>
      <input requied name="employee_image" type="file" multiple class="form-control-file" multiple class="form-control-file">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Employee Name</label>
      <input type="text" name="employee_name" class="form-control" id="validationCustom01" placeholder="Employee Name" required>
    </div>

    <div class="">
      <label for="validationCustom02">Email address</label>
      <input type="email" name="email_address" class="form-control" id="validationCustom02" placeholder="Email address" required>
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Contact Number</label>
      <input type="text" name="contact_number" class="form-control" id="validationCustom03" placeholder="Contact Number" required>
    </div>

    <!-- <div class="col-md-4">
      <label>Gender</label>
      </div>
      <div class="col-md-8 form-group">
      <fieldset class="form-group">
       <select class="form-select" id="basicSelect" name="gender_id">
        <option>Select Gender</option>
      
       </select>
      </fieldset>
    </div> -->

    <div class="mb-3 form-group">
      <label for="validationCustom05">Gender</label>
 
                    <select class="form-control" id="validationCustom05" name="gender" >
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>  
                    </select> 
    </div> 
    <!-- <div class="mb-3 form-group">
      <label for="validationCustom05">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationCustom05" placeholder="gender" required>
    </div> -->

    <div class="mb-3 form-group">
      <label for="validationCustom05">Salary</label>
      <input type="text" name="salary" class="form-control" id="validationCustom05" placeholder="BDT" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Birthday Date</label>
      <input type="text" name="birth_date" class="form-control" id="validationCustom04" placeholder="Birthday Date" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Join Date</label>
      <input type="text" name="join_date" class="form-control" id="validationCustom04" placeholder="Join Date" required>
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