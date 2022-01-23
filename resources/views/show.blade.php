{{-- @extends('layouts.layout')
@section('content')
    
  
      @foreach ($products as $product)
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="single-top-main">
            <div class="col-md-5 single-top">
              <div class="single-w3agile">
                <div id="picture-frame">
                  <img
                    src="/image/{{$product->image}}"
                    data-src=""
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <script src="assets/js/jquery.zoomtoo.js"></script>
                
                <script>
                  $(function () {
                    $("#picture-frame").zoomToo({
                      magnify: 1,
                    });
                  });
      
                </script>
              </div>
            </div>
            
                
            
            <div class="col-md-7 single-top-left">
              <div class="single-right">
                <h3>{{$product->name}}</h3>
  
                <div class="pr-single">
                  <p class="reduced"><del>${{$product->price}}</del>${{$product->discount_price}}</p>
                </div>
                <div class="block block-w3">
                  <div class="starbox small ghosting"></div>
                </div>
                <p class="in-pa">
                  {{$product->detail}}
                </p>
  
                <ul class="social-top">
                  <li>
                    <a href="#" class="icon facebook"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                      ><span></span
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="icon twitter"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                      ><span></span
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="icon pinterest"
                      ><i class="fa fa-pinterest-p" aria-hidden="true"></i
                      ><span></span
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="icon dribbble"
                      ><i class="fa fa-dribbble" aria-hidden="true"></i
                      ><span></span
                    ></a>
                  </li>
                </ul>
                <div class="add add-3">
                  <button
                    class="btn btn-danger my-cart-btn my-cart-b"
                    data-id="1"
                    data-name="Wheat"
                    data-summary="summary 1"
                    data-price="6.00"
                    data-quantity="1"
                    data-image="/images/si.jpg"
                  >
                    Add to Cart
                  </button>
                </div>
  
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      @endforeach
      <!---->
  
      <div class="content-top offer-w3agile">
        <div class="container">
          <div class="spec">
            <h3>Special Offers</h3>
            <div class="ser-t">
              <b></b>
              <span><i></i></span>
              <b class="line"></b>
            </div>
          </div>
        
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <!-- end of content -->
  
      <!-- smooth scrolling -->
      <script type="text/javascript">
        $(document).ready(function () {
  
          $().UItoTop({ easingType: "easeOutQuart" });
        });
      </script>
      <a href="#" id="toTop" style="display: block">
        <span id="toTopHover" style="opacity: 1"> </span
      ></a>
      <!-- //smooth scrolling -->
      <!-- for bootstrap working -->
      <script src="/js/bootstrap.js"></script>
      <!-- //for bootstrap working -->
    
@endsection --}}
@extends('layouts.layout')
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            @foreach ($products as $product)
            <h5 class="card-title">Product Number : {{$product->id}} </h5>
            
                
            
            <div class="table-responsive">
              
                  
              
                <div class="single">
                    <div class="container">
                      <div class="single-top-main">
                        <div class="col-md-5 single-top">
                          <div class="single-w3agile">
                            <div id="picture-frame">
                              <img
                              style="height: 200px; width: 220px;"
                                src="/image/{{$product->image}}"
                                data-src=""
                                alt=""
                                class="img-responsive"
                              />
                            </div>
                            <script src="/js/jquery.zoomtoo.js"></script>
                            
                            <script>
                              $(function () {
                                $("#picture-frame").zoomToo({
                                  magnify: 1,
                                });
                              });
                  
                            </script>
                          </div>
                        </div>
                        
                            
                        
                        <div class="col-md-7 single-top-left">
                          <div class="single-right">
                            <h3>{{$product->name}}</h3>
              
                            <div class="pr-single">
                              <p class="reduced">${{$product->price}}</p>
                            </div>
                            <div class="block block-w3">
                              <div class="starbox small ghosting"></div>
                            </div>
                            <p class="in-pa">
                              {{$product->detail}}
                            </p>
            
                            <div class="add add-3">
                              <button
                                class="btn btn-danger my-cart-btn my-cart-b"
                                data-id="1"
                                data-name="Wheat"
                                data-summary="summary 1"
                                data-price="6.00"
                                data-quantity="1"
                                data-image="/images/si.jpg"
                              >
                               <a href="/dashboard">Back</a> 
                              </button>
                            </div>
              
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  @endforeach
            </div>
            
          </div>
        </div>
      </div>

    </div>
    <!--End Row-->


    <!--End Row-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->
  </div>
  <!-- End container-fluid-->
</div>
<!--End content-wrapper-->

@endsection