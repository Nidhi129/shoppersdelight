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

            <div class="box">
              <h3>Blue Ray Movies</h3>
              <span></span>
            </div>

            <div class="box info-bar">
              <div class="row">
                <div class="col-md-12 col-lg-4 products-showing">Showing <strong>
                  {{$products->count()}}{{-- {{$blueraydiscs->count()}} --}}</strong> product(s)</div>
              </div>
            </div>

            
            <div class="row products productlist" id="row-products">
             @foreach($products as $product)
             <div class="col-lg-3 col-md-4">

              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">{{-- <a href="{{route('blueraydisc.show', $blueraydisc->slug)}}"> --}}<img src="{{ asset('storage/'. $product->thumbnail )}}"  alt="" class="img-fluid img-responsive" style="padding: 6px;">
                      </a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3>{!! $product->title!!}
                      {{-- <a href="{{route('blueraydisc.show', $blueraydisc->slug)}}">{{$blueraydisc->disc_name}}</a> --}}
                    </h3>
                    <div class="product-price" style="padding-left:12px;padding-right:8px">
                      <span class="offered-price">
                        <strong style="font-size: 20px">₹{{$product->discount_price}}</strong>&nbsp;
                      </span>&nbsp;
                      <span class="original-price">
                        <strong>
                          <del style="color: #c7254e;font-size: 13px">₹{{$product->price}}{{-- {{$blueraydisc->original_price}} --}}</del>
                        </strong>
                      </span>&nbsp;
                      <span class="discount-percentage">
                        <strong style="color: #3f9643;font-size: 15px">{{$discountpercent=round((($product->price - $product->discount_price)*100 /$product->price))}}%OFF</strong>
                      </span>
                    </div>
                    <div class="stock-availability" style="padding-left:12px;padding-right:8px">
                      <strong><span style="color: #c7254e"> {{-- @if($blueraydisc->quantity < 5) --}} Hurry! Only few{{-- {{$blueraydisc->quantity}} --}} left {{-- @endif --}} </span></strong>
                    </div>
                    <div class="seller-detail" style="padding-left:12px;padding-bottom:12px;padding-right:8px">
                      <small><strong>Sold by</strong></small>&nbsp;
                      <a href="https://www.bargainbasement.in/our-partners/seller/e5vH8sD4wJ0qJ0qg7tJ0q" target="blank" style="text-decoration: none;">Andromeda Retail</a>
                      <br>
                      <small><strong>Seller rating:</strong> (0&nbsp;out of 5 rating)</small>
                    </div>
                    <div class="">
                      <p class="buttons">
                        <a href="{{route('products.single',$product)}}" class="btn btn-outline-secondary submit"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;<small>DETAILS</small></a>
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw loading" style="display: none;"></i>
                        <a href="{{route('products.addToCart',$product)}}" class="btn btn-primary submit" onclick="transacting(this);"><i class="fa fa-shopping-cart"></i>&nbsp;<small>BUY NOW</small>
                        </a>
                      </p>
                    </div>
                  </div>
                  <small>
                    <div class="ribbon new" style="top: 10px">
                      <div class="theribbon" style="background-color: #696cd5">NEW{{-- {{$blueraydisc->condition}} --}}</div>
                      <div class="ribbon-background"></div>
                    </div>
                  </small>                                         <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
            </div>

            @endforeach
            {{-- <div class="container">
              <div class ="text-center button">
                <button type="button" id="loadmore" class="btn btn-outline-success">
                  <i class btn="fa fa-chevron-down"></i><small>LOAD MORE</small></button>
                </div>
              </div> --}}

            </div>
          </div>
          <!-- /.col-lg-9-->
        </div>
      </div>
    </div>
  </div>