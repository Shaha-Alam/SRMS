@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('backend.update',$tasks->id)}}" method="post"> enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tasks</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" value="{{$tasks->serial}}"placeholder="Serial">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Employees Name</label>
      <input type="text" name="employee_name" class="form-control" id="validationCustom01" value="{{$tasks->employee_name}}"placeholder="employee Name">
    </div>

    <div class="">
      <label for="validationCustom02">Employee Email</label>
      <input type="text" name="employee_email" class="form-control" id="validationCustom02" value="{{$tasks->employee_email}}"placeholder="Employee Email">
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Product Name</label>
      <input type="text" name="product_name" class="form-control" id="validationCustom03" value="{{$tasks->product_name}}"placeholder="Product Name">
    </div>

 
    <div class="mb-3 form-group">
      <label for="validationCustom03">Product Image</label>
      <input requied name="product_image" type="file" multiple class="form-control-file" multiple class="form-control-file">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Total Price</label>
      <input type="text" name="total_price" class="form-control" id="validationCustom04"value="{{$tasks->total_price}}" placeholder="500Qty" >
    </div>
    
    <div class="mb-3 form-group">
      <label for="validationCustom05">Target Quantity</label>
      <input type="text" name="target_quantity" class="form-control" id="validationCustom05" value="{{$tasks->ttarget_quantity}}" placeholder="5BDT">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom05">Start Date</label>
      <input type="text" name="start_date" class="form-control" id="validationCustom05" value="{{$tasks->start_date}}" placeholder="Start Date" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom05">End Date</label>
      <input type="text" name="end_date" class="form-control" id="validationCustom05" value="{{$tasks->end_date}}" placeholder="End Date" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Status</label>
      <input type="text" name="status" class="form-control" id="validationCustom04"value="{{$tasks->status}} placeholder="Status" >
    </div>

    
<!-- 
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    </div> -->

    <button type="submit">submit</button>


</form>

<!-- <script>

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