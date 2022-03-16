 @extends('admin.layouts.master')

 @section('content')
   <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-header">
              Add Product
            </div>
            <div class="card-body">
              <form action="{{route('admin.product.store')}}" method="post">
                {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea name="description" rows="8"cols="80" class="form-control"></textarea>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity</label>
    <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
            </div>
          </div>     

        </div>
      </div>
        <!-- main panel ends -->
 @endsection

 