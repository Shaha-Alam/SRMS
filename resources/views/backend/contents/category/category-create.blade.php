@extends('backend.master')


  @section('content')

      <form class="needs-validation" action="{{route('category.store')}}" method="post">
             @csrf
            <div class="form-colom">
     
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Create New Product Category</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="mb-3 form-group">
                <label for="validationCustom01">Category Name</label>
                <input type="text" name="category_name" class="form-control" id="validationCustom01" placeholder="name" required>
            </div>

           <div class="mb-3 form-group">
              <label for="validationCustom01">Description</label>
              <input type="text" name="description" class="form-control" id="validationCustom01" placeholder="description" required>
           </div>
           <button type="submit">submit</button>


      </form>
  @endsection