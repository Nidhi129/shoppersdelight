@extends('layouts.app')
@section('content')


<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

              <li class="breadcrumb-item">Electronics</li>

              <li aria-current="page" class="breadcrumb-item active">Mobile Phones</li>
              
            </ol>              </nav>
          </div>

          <div class="col-lg-12">
            <div id="productMain" class="row">

              <div class="col-md-5">
                <div class="item"> 
                  <img src="{{ asset('storage/'. $product->thumbnail )}}" alt="" class="img-fluid" style="padding: 6px;">
                </div>
                <small>
                  <div class="ribbon gift" style="top: 10px">
                    <div class="theribbon" style="background-color: #26d45b"><strong style="color: white">NEW</strong></div>
                    <div class="ribbon-background"></div>
                  </div>
                </small>                            <!-- /.ribbon-->
              </div>
              <div class="col-md-7">
                <div class="box" style="border-radius: 4px">
                  <h3 style="padding: 4px" class="text-left">{!! $product->title!!}</h3>
                  
                  <div class="product-price" style="padding: 4px">
                    <span class="offered-price">
                      <strong style="font-size: 22px"₹{{$product->discount_price}}></strong>
                    </span>&nbsp;
                    <span class="original-price">
                      <strong>
                        <del  style="color: #c7254e;font-size: 15px">
                        ₹{{$product->price}}</del>
                      </strong>
                    </span>&nbsp;
                    <span class="discount-percentage">
                      <strong style="color: #3f9643;font-size: 15px">{{$discountpercent=round((($product->price - $product->discount_price)*100 /$product->price))}}%OFF</strong>
                    </span>
                  </div>
                  <div class="stock-availability" style="padding: 4px">
                    <strong><span style="color: #c7254e">Hurry! Only few left</span></strong>
                  </div>

                  <div class="seller-detail" style="padding: 4px">
                    <strong>Sold by&nbsp;</strong>
                    <a target="_blank" href="" style="text-decoration: none;">Andromeda Retail</a>
                    &nbsp;
                    <small>(4&nbsp;out of 5 rating)</small>
                  </div>


                  <div class="payment-options" style="padding: 4px">
                    <strong>Payment Options:&nbsp;</strong>
                    Cash On Delivery/Paypal
                  </div>

                  <p class=" button" style="margin-top: 0px;padding: 8px">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw loading" style="display: none;"></i>
                    <a href="{{route('products.addToCart',$product)}}" 
                    class="btn btn-primary submit" 
                    onclick="transacting(this);">
                    <i class="fa fa-shopping-cart"></i>&nbsp;
                    <small>BUY NOW</small>
                  </a>
                </p>
              </div>
              <div class="">

              </div>
            </div>
          </div>
          <div id="details" class="box" style="border-radius: 4px">

            <!-- Product Specification Section -->
            <h3 style="background-color: #f0f0f0;border-radius: 4px;padding:8px;">
              <span style="padding:4px">Product Specification</span>
            </h3>
            <div class= "container">
            <table class="col-lg-12 col-md-12 col-xs-12">
              <tbody>
                <tr></th></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>{!! $product->description!!}</span></td></tr>
              </tbody>                  
            </table>
            </div>
            <br>

            
          </div>


          @endsection