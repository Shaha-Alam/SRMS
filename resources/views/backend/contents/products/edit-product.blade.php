@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('backend.update',$products->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
 
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" value="{{$products->serial}}"placeholder="Serial">
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Product Name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="{{$products->name}}" placeholder="Product Name" >
    </div>

    <div class="">
      <label for="validationCustom02">Generic Name</label>
      <input type="text" name="generic" class="form-control" id="validationCustom02" value="{{$products->generic}}" placeholder="Generic Name" >
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Product Category</label>
      <input type="text" name="category" class="form-control" id="validationCustom03" value="{{$products->category}}" placeholder="Product Category" >
    </div>

 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
    </div>


    <div class="mb-3 form-group">
      <label for="validationCustom04">Product Quantity</label>
      <input type="text" name="quantity" class="form-control" id="validationCustom04"value="{{$products->quantity}}" placeholder="500Qty" >
    </div>
    
    <div class="mb-3 form-group">
      <label for="validationCustom05">Unti Price</label>
      <input type="text" name="unit_price" class="form-control" id="validationCustom05"value="{{$products->unit_price}}"placeholder="5BDT" >
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Status</label>
      <input type="text" name="status" class="form-control" id="validationCustom04" value="{{$products->status}}" placeholder="Status" >
    </div>

    

  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
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