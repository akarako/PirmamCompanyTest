@extends('layouts.layout')
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Add Products</div>
            <hr />
            <form method="POST" action="/store" enctype="multipart/form-data">
              @csrf
             
              <div class="form-group">
                <label for="input-1">Name</label>
                <input
                name="name"
                  type="text"
                  class="form-control"
                  id="input-1"
                  placeholder="Enter Product Name"
                />
              </div>
              <div class="form-group">
                <label for="input-2">Quantity</label>
                <input
                name="quantity"
                  type="number"
                  class="form-control"
                  id="input-2"
                  placeholder="Enter Quantity Of Product"
                />
              </div>
              <div class="form-group">
                <label for="input-3">Price</label>
                <input
                name="price"
                  
                  class="form-control"
                  id="input-3"
                  placeholder="Enter The Price Of Product"
                />
              </div>
          
              <div class="form-group">
                <label for="input-5">Detail</label>
                <input
                name="detail"
                  type="text"
                  class="form-control"
                  id="input-5"
                  placeholder="Enter Detail about Product"
                />
              </div>
          
              <div class="form-group">
                <label for="input-5">Image</label>
                <input
                name="image"
                  type="file"
                  class="form-control"
                  id="input-5"
                  placeholder="Enter Image Of Product"
                />
      
              <div class="form-group">
                <button type="submit" name="add" class="btn  btn-success  px-5 mt-3">
                  <i class=""></i>Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!--End Row-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->
  </div>
  <!-- End container-fluid-->
</div>
@endsection