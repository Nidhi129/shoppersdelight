@extends('layouts.main')
@section('header.navbar.entertainment.movies.blueraymovies.DilTohPagalHai');
            
<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Entertainment</li>

              <li aria-current="page" class="breadcrumb-item active">
                <a href="{{route('blueraydisc.index')}}">Movies</a>
              </li>
              <li aria-current="page" class="breadcrumb-item active">
                Blue Ray Movies
              </li>
            </ol>              </nav>
          </div>

 <!-- Product Detail -->
          <div class="col-lg-12">
            <div id="productMain" class="row">
              <div class="col-md-6">
                <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <div class="item"> 
                    <img src="{{asset('/img/blueraydiscs/'.$blueraydisc->slug.'.jpeg')}}" alt="" class="img-fluid" style="padding: 6px;">
                  </div>
                </div>
                <small>
                  <div class="ribbon new" style="top: 10px">
                    <div class="theribbon" style="background-color: #696cd5">{{$blueraydisc->condition}}</div>
                    <div class="ribbon-background"></div>
                  </div>
                </small>                            <!-- /.ribbon-->
              </div>
              <div class="col-md-6">
                <div class="box" style="border-radius: 4px">
                  <h3 a href="{{route('blueraydisc.show', $blueraydisc->slug)}}" style="padding: 4px" class="text-left">{{$blueraydisc->disc_name}}</h3>
                  <p class="goToDescription text-left" style="margin-top: 0px;padding: 4px">
                    <a href="#details" class="scroll-to">more details</a>
                  </p>
                  <div class="product-price" style="padding: 4px">
                    <span class="offered-price">
                      <strong style="font-size: 22px">₹{{$blueraydisc->discount_price}}</strong>
                    </span>&nbsp;
                    <span class="original-price">
                      <strong>
                        <del  style="color: #c7254e;font-size: 15px">
                        ₹{{$blueraydisc->original_price}}</del>
                      </strong>
                    </span>&nbsp;
                    <span class="discount-percentage">
                      <strong style="color: #3f9643;font-size: 15px">{{$discountpercent=round((($blueraydisc->original_price - $blueraydisc->discount_price)*100 /$blueraydisc->original_price))}}%OFF</strong>
                    </span>
                  </div>
                  <div class="stock-availability" style="padding: 4px">
                    <strong><span style="color: #c7254e">@if($blueraydisc->quantity < 5) Hurry! Only  {{$blueraydisc->quantity}} left
                    @endif</span></strong>
                  </div>

                  <div class="seller-detail" style="padding: 4px">
                    <strong>Sold by&nbsp;</strong>
                    <a target="_blank" href="https://www.bargainbasement.in/our-partners/seller/e5vH8sD4wJ0qJ0qg7tJ0q" style="text-decoration: none;">Andromeda Retail</a>
                    &nbsp;
                    <small>(0&nbsp;out of 5 rating)</small>
                  </div>


                  <div class="payment-options" style="padding: 4px">
                    <strong>Payment Options:&nbsp;</strong>
                    Cash On Delivery
                  </div>

                  <p class="text-center buttons" style="margin-top: 0px;padding: 8px">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw loading" style="display: none;"></i>
                   <form action ="{{route('cart.store')}}" method="POST"> {{csrf_field() }}
                    <input type="hidden" name="disc_id" value="{{ $blueraydisc->disc_id}}">
                    <input type="hidden" name="disc_name" value="{{ $blueraydisc->disc_name}}">
                    <input type="hidden" name="discount_price" value="{{ $blueraydisc->discount_price}}">
                    <button type="submit" class="btn btn-primary submit"> <i class="fa fa-shopping-cart"></i>&nbsp;Add to Cart </button>
                    

                   {{--  <a class="btn btn-primary submit"> 
                    <i class="fa fa-shopping-cart"></i>&nbsp;
                    <small>Add to Cart</small> --}}
                  </form>
                 {{--  </a>
                </p> --}}
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
            <table class="col-lg-9 col-md-9 col-xs-9">
              <tbody>
                <tr><th style='width:44%;padding: 12px'>GENERAL</th></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Language</span></td><td style='padding:12px'>Hindi</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Country</span></td><td style='padding:12px'>India</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Directed By</span></td><td style='padding:12px'>Yash Chopra</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Produced By</span></td><td style='padding:12px'>Yash Chopra, Aditya Chopra</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Story By</span></td><td style='padding:12px'>Aditya Chopra</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Starring</span></td><td style='padding:12px'>Shah Rukh Khan, Madhuri Dixit, Karisma Kapoor, Akshay Kumar</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Music By</span></td><td style='padding:12px'>Uttam Singh</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Cinematography</span></td><td style='padding:12px'>Manmohan Singh</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Release Date</span></td><td style='padding:12px'>31st October 1997</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Edited By</span></td><td style='padding:12px'>V. Karnik</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Running Time</span></td><td style='padding:12px'>180 minutes</td></tr>
              </tbody>                  
            </table>
            <br>

            <!-- Other Details Section -->
            <h3 style="background-color: #f0f0f0;border-radius: 4px;padding:8px;">
              <span style="padding:4px">Seller's Product Information</span>
            </h3>

            <table class="col-lg-9 col-md-9 col-xs-9">
              <tbody><tr><th style='width:44%;padding: 12px'>GENERAL</th></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Warranty</span></td><td style='padding:12px'>Not applicable</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Shipping Fee</span></td><td style='padding:12px'>Free</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Other Description</span></td><td style='padding:12px'>Product is in brand new condition with zero scratch</td></tr></tbody>
            </table>

            <!-- More Offers & Discount Section -->
                  <!-- <h3 style="background-color: #f0f0f0;border-radius: 4px;padding:8px;">
                    <span style="padding:4px">More Offers & Discounts</span>
                  </h3>
                  <table class="col-lg-9 col-md-9 col-xs-9">
                    <tbody>
                    </tbody>
                  </table> -->

                  <hr>
                  <blockquote>
                    <p><em>.</em></p>
                  </blockquote>
                  <div class="social">
                    <!-- <h4>Share the deal with your friends!</h4> -->
                    <p>
                      <!-- <a href="#" class="external facebook"><i class="fa fa-facebook"></i></a> -->
                      <!-- <a href="#" class="external twitter"><i class="fa fa-twitter"></i></a> -->
                      <!-- <a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a> -->
                      <!-- <a href="#" class="email"><i class="fa fa-envelope"></i></a> -->
                    </p>
                  </div>
                </div>



@endsection