@extends('layouts.layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">

            @foreach ($products as $product)
                  
            <div class="card-title">Edit Products</div>
            <p class="card-title">Edit Product Number : {{$product->id}}</p>
            <hr />
            <form method="POST" action="{{route('update',$product->id)}}" enctype="multipart/form-data">
              @csrf
             
              <div class="form-group">
                <label for="input-1">Name</label>
                <input
                value="{{$product->name}}"
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
                value="{{$product->quantity}}"
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
                value="{{$product->price}}"
                name="price"
                  class="form-control"
                  id="input-3"
                  placeholder="Enter The Price Of Product"
                />
              </div>
          
              <div class="form-group">
                <label for="input-5">Detail</label>
                <input
                value="{{$product->detail}}"
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
               
                <button type="submit" name="add" class="btn  btn-danger  px-5 mt-3">
                    <i class=""></i><a href="/dashboard">Cancel</a> 
                  </button> 
                  <button type="submit" name="add" class="btn  btn-success  px-5 mt-3">
                  <i class=""></i>Save
                </button>
              </div>
            </form>
            @endforeach
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