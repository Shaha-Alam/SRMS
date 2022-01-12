@extends('backend.master')


@section('content')

  <form class="needs-validation" action="{{route('backend.category.update',$categorys->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Product Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>

      <div class="mb-3 form-group">
        <label for="validationCustom01">Category Name</label>
        <input type="text" name="category_name" class="form-control" id="validationCustom01" value="{{$categorys->category_name}}"placeholder="name" required>
     </div>

     <div class="mb-3 form-group">
       <label for="validationCustom01">Description</label>
       <input type="text" name="description" class="form-control" id="validationCustom01" value="{{$categorys->description}}"placeholder="description" required>
     </div>
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