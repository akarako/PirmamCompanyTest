@extends('layouts.layout')
@section('content')



    <div class="content-wrapper">
        <div class="container-fluid">
          <!--Start Dashboard Content-->
@if ($message = Session::get('usersuccess'))
<div class="alert alert-success" >
<p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success" >
<p>{{ $message }}</p>
</div>
@endif
          <div class="card mt-3">
            <div class="card-content">
              <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">
                      {{$count}}
                      <span class="float-right"
                        ><i class="fa fa-shopping-cart"></i
                      ></span>
                    </h5>
                    <div class="progress my-3" style="height: 3px">
                      <div class="progress-bar" style="width: 55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">
                      Total Products in Your Database
                      <span class="float-right"
                        ><i class="zmdi zmdi-long-arrow-down"></i
                      ></span>
                    </p>
                  </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">
                      {{$sum}}
                      <span class="float-right"><i class="fa fa-usd"></i></span>
                    </h5>
                    <div class="progress my-3" style="height: 3px">
                      <div class="progress-bar" style="width: 55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">
                      Total Price in Your Database
                      <span class="float-right"
                        ><i class="zmdi zmdi-long-arrow-down"></i
                      ></span>
                    </p>
                  </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">
                      {{$users}}
                      <span class="float-right"><a href="/users"><i class="fa fa-user"></i></a></span>
                    </h5>
                    <div class="progress my-3" style="height: 3px">
                      <div class="progress-bar" style="width: 55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">
                      Total Users
                      <span class="float-right"
                        ><i class="zmdi zmdi-long-arrow-up"></i
                      ></span>
                    </p>
                  </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">
                      {{$deleted}}
                      <span class="float-right"
                        > <a href="/viewDeleted"><i class="fa fa-trash"></i
                      ></a></span>
                    </h5>
                    <div class="progress my-3" style="height: 3px">
                      <div class="progress-bar" style="width: 55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">
                      Deleted Products
                      <span class="float-right"
                        ><i class="zmdi zmdi-long-arrow-up"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-10"></div>
          <a href="/viewDeleted" class="btn btn-info float-right align-items-end mb-2 ">View All Deletes</a>
          {{-- <a href="/viewDeleted"><button type="button" class="btn btn-info d-flex align-self-end bd-highlight">Delete</button></a> --}}
   </div></div>
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
                        <th>Date</th>
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
                        <td>{{$product->created_at}}</td>
                        <td >
                 
                          <a href="/show/{{$product->id}}" class="btn btn-primary">Show</a>
                          <a href="/edit/{{$product->id}}" class="btn btn-warning">Edit</a>
                          <a href="/destroy/{{$product->id}}" class="btn btn-danger">Delete</a>
      
                        
                      </td>
                      </tr>
                      @endforeach
                      @else
                      <td>You Don't Have Any Products to Show.</td>
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
