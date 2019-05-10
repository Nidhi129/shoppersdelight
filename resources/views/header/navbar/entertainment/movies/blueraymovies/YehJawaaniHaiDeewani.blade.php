@extends('layouts.main')
@section('header.navbar.entertainment.movies.blueraymovies.YehJawaaniHaiDeewani');

              
<div id="all">
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://www.bargainbasement.in">Home</a></li>
 
  <li class="breadcrumb-item active">Entertainment</li>
   
     <li aria-current="page" class="breadcrumb-item active">
              <a href="https://www.bargainbasement.in/shop/entertainment/movies">Movies</a>
        </li>
      <li aria-current="page" class="breadcrumb-item active">
                  Blue Ray Movies
          </li>
     </ol>              </nav>
              </div>
  
              <div class="col-lg-12">
                <div id="productMain" class="row">
                  <div class="col-md-6">
                    <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                      <div class="item"> 
                      <img src="{{asset('/img/YehJawaaniHaiDeewani.jpeg')}}" alt="" class="img-fluid" style="padding: 6px;">
                      </div>
                    </div>
                          <small>
  <div class="ribbon gift" style="top: 10px">
    <div class="theribbon" style="background-color: #26d45b"><strong style="color: white">NEW</strong></div>
    <div class="ribbon-background"></div>
  </div>
  </small>                            <!-- /.ribbon-->
                  </div>
                  <div class="col-md-6">
                    <div class="box" style="border-radius: 4px">
                      <h3 style="padding: 4px" class="text-left">Ye Jawaani Hai Deewani</h3>
                      <p class="goToDescription text-left" style="margin-top: 0px;padding: 4px">
                        <a href="#details" class="scroll-to">more details</a>
                      </p>
                      <div class="product-price" style="padding: 4px">
                        <span class="offered-price">
                          <strong style="font-size: 22px">₹350</strong>
                        </span>&nbsp;
                        <span class="original-price">
                          <strong>
                            <del  style="color: #c7254e;font-size: 15px">
                              ₹600</del>
                            </strong>
                        </span>&nbsp;
                        <span class="discount-percentage">
                          <strong style="color: #3f9643;font-size: 15px">41% OFF</strong>
                        </span>
                      </div>
                      <div class="stock-availability" style="padding: 4px">
                                  <strong><span style="color: #c7254e">Hurry! Only 1 left</span></strong>
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
                        <a href="https://www.bargainbasement.in/shopping/buy?product=2y106ow446bWSa8qatkiNsl7Yudd0cWoN3AbgQW2uMlVzofqXsxxqy" 
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
                  <table class="col-lg-9 col-md-9 col-xs-9">
                    <tbody>
                      <tr><th style='width:44%;padding: 12px'>GENERAL</th></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>A</span></td><td style='padding:12px'>B</td></tr>
                    </tbody>                  
                  </table>
  <br>
  
  <!-- Other Details Section -->
                  <h3 style="background-color: #f0f0f0;border-radius: 4px;padding:8px;">
                    <span style="padding:4px">Seller's Product Information</span>
                  </h3>
  
                  <table class="col-lg-9 col-md-9 col-xs-9">
                    <tbody><tr><th style='width:44%;padding: 12px'>GENERAL</th></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Warranty</span></td><td style='padding:12px'>No warranty</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Shipping Fee</span></td><td style='padding:12px'>Free</td></tr><tr><td style='width:44%;padding: 12px'><span style='color:#808080'>Other Description</span></td><td style='padding:12px'>N/A</td></tr></tbody>
                  </table>
  
                  
                </div>


@endsection