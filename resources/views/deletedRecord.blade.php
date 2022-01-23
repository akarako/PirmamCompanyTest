@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">



<a href="/dashboard"  class="btn btn-warning  mb-3"><i class="zmdi zmdi-long-arrow-left">&nbsp;&nbsp;</i>Back</a>

@if ($message = Session::get('success'))
<div class="alert alert-success" >
<p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="table-responsive">
          <table
            class="table align-items-center table-flush table-borderless"
          >
            <thead>
              <tr>
                <th>Product</th>
                <th>Photo</th>
                <th>Product ID</th>
                <th>Price</th>
                <th>Deleted Date</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($products) > 0)
              @foreach ($products as $product)
                
              <tr>
                <td>{{$product->name}}</td>
                <td>
                  <img
                    src="image/{{$product->image}}"
                    class="product-img"
                    alt="product img"
                  />
                </td>
                <td>{{$product->id}}</td>
                <td>${{$product->price}}</td>
                <td>{{$product->deleted_at}}</td>
                <td >
         
                  <a href="/restore/{{$product->id}}" class="btn btn-success">Restore</a>
                  <a href="/forceDelete/{{$product->id}}" class="btn btn-danger">Delete For Ever</a>

                
              </td>
              </tr>
              @endforeach
              @else
              <td>You Don't Have Any Deleted Products to Show.</td>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--End Row-->
   <!--End Dashboard Content-->

          <!--start overlay-->
          <div class="overlay toggle-menu"></div>
          <!--end overlay-->
        </div>
        <!-- End container-fluid-->
      </div>
@endsection