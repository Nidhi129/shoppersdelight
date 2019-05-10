@extends('layouts.main')
@section('home')


<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="main-slider" class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('/img/banner2.jpg')}}" alt="" class="img-fluid"></div>
            <div class="item"><img src="{{asset('/img/banner1.jpg')}}" alt="" class="img-fluid"></div>

          </div>
          <!-- /#main-slider-->
        </div>
      </div>
    </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
      -->
      <div id="advantages">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-heart"></i></div>
                <h3><a href="javascript:void(false);">We love our customers</a></h3>
                <p class="mb-0">We believe in customer's satisfaction</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-tags"></i></div>
                <h3><a href="javascript:void(false);">Best prices</a></h3>
                <p class="mb-0">There is <strong><code>NO</code></strong> match to the prices we offer.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h3><a href="javascript:void(false);">Original Products</a></h3>
                <p class="mb-0"><strong><code>100%</code></strong> original products.</p>
              </div>
            </div>
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
      <!-- /#advantages-->
      <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
      -->
      <div id="hot">
        <div class="box py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-0"><strong>TRENDING OFFERS</strong></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="product-slider owl-carousel owl-theme">


          @foreach($products as $product)

            <div class="item">

              <div class="product">


                <div class="flip-container">

                  <div class="flipper">
 <div class="front"><a href="detail.html" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="{{route('products.single',$product)}}"><img src="{{ asset('storage/'.$product->thumbnail )}}" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible" alt="" class="img-fluid"></a>

                <a href="{{route('products.single',$product)}}" class="invisible"><img src="{{ asset('storage/'. $product->thumbnail )}}"  alt="" class="img-fluid"> </a>
                <div class="text">
                  <h3>{{$product->title}}<a href="{{route('products.single',$product)}}"></a></h3>

                  <div class="product-price" style="padding: 4px;padding-left: 12px">
                    <span class="offered-price">
                      <strong style="font-size: 18px">₹{{$product->discount_price}}</strong>
                    </span>&nbsp;
                    <span class="original-price">
                      <strong>
                        <del  style="color: #c7254e;font-size: 12px">
                        ₹{{$product->price}}</del>
                      </strong>
                    </span>&nbsp;
                    <span class="discount-percentage">
                      <strong style="color: #3f9643;font-size: 12px">{{$discountpercent=round((($product->price - $product->discount_price)*100 /$product->price))}}%OFF</strong>
                    </span>
                  </div>
                  <div class="product-type" style="padding:4px;padding-bottom:10px;padding-left:12px">
                    <small></small>
                  </div>
                </div>  
                <small>
                  <div class="ribbon new" style="top: 10px">
                    <div class="theribbon" style="background-color: #696cd5">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                </small>        
              </div>
             
              <!-- /.product-->
            </div>
             @endforeach
          </div>

          <!-- /.product-slider-->
        </div>

         


          <!-- /.container-->
          <div class ="container">
            <div class ="text-center button">
              <a href="{{route('products.all')}}" button type="button" class="btn btn-outline-success">Load More</button></a>
            </div>
          </div>
        </div>
        <!-- *** HOT END ***-->

        
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
      -->
      <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
      -->
      <!-- /.container-->
      <!-- *** BLOG HOMEPAGE END ***-->
    </div>
  </div>

@endsection