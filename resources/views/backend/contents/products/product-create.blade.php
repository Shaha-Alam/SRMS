@extends('backend.master')


@section('content')



<form class="needs-validation" action="{{route('backend.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-colom">
     
     <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="mb-3 form-group">
      <label for="validationCustom01">Serial</label>
      <input type="text" name="serial" class="form-control" id="validationCustom01" placeholder="Serial" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom01">Product Name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Product Name" required>
    </div>

    <div class="">
      <label for="validationCustom02">Generic Name</label>
      <input type="text" name="generic" class="form-control" id="validationCustom02" placeholder="Generic Name" required>
    </div>
  
    <div class="mb-3 form-group">
      <label for="validationCustom03">Product Category</label>
      <input type="text" name="category" class="form-control" id="validationCustom03" placeholder="Product Category" required>
    </div>

 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>


    <div class="mb-3 form-group">
      <label for="validationCustom04">Product Quantity</label>
      <input type="text" name="quantity" class="form-control" id="validationCustom04" placeholder="500Qty" required>
    </div>
    
    <div class="mb-3 form-group">
      <label for="validationCustom05">Unti Price</label>
      <input type="text" name="unit_price" class="form-control" id="validationCustom05" placeholder="5BDT" required>
    </div>

    <div class="mb-3 form-group">
      <label for="validationCustom04">Status</label>
      <input type="text" name="status" class="form-control" id="validationCustom04" placeholder="Status" required>
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
@endsection