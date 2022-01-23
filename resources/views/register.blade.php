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

    <!-- Start wrapper-->
    <div id="wrapper ">
          <div class="row mt-5">
      <div class="col-lg-12">
      <div class="card card-authentication1 mx-auto my-4 mt-5">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="text-center">
              <img
                src="/img/pirmam.png"
                {{-- class="logo-icon" --}}
                alt="logo icon"
              />
            </div>
            <div class="card-title text-uppercase text-center py-3">
              Add New User
            </div>
            <form action="/user-register" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputName" class="sr-only">Name</label>
                <div class="position-relative has-icon-right">
                  <input
                  name="name"
                    type="text"
                    id="exampleInputName"
                    class="form-control input-shadow"
                    placeholder="Enter Name"
                  />
                  <div class="form-control-position">
                    <i class="icon-user"></i>
                  </div>
                </div>
              </div>
            
              <div class="form-group">
                <label for="exampleInputEmailId" class="sr-only"
                  >Email ID</label
                >
                <div class="position-relative has-icon-right">
                  <input
                  name="email"
                    type="text"
                    id="exampleInputEmailId"
                    class="form-control input-shadow"
                    placeholder="Enter Email ID"
                  />
                  <div class="form-control-position">
                    <i class="icon-envelope-open"></i>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword" class="sr-only"
                  >Password</label
                >
                <div class="position-relative has-icon-right">
                  <input
                  name="password"
                    type="password"
                    id="exampleInputPassword"
                    class="form-control input-shadow"
                    placeholder="Choose Password"
                  />
                  <div class="form-control-position">
                    <i class="icon-lock"></i>
                  </div>
                </div>
              </div>
    
              <button
                type="submit" name="submit"
                class="btn btn-light btn-block waves-effect waves-light"
              >
                Sign Up
              </button>
            </form>
          </div>
        </div>
      </div></div>
      </div>
      @endsection
     