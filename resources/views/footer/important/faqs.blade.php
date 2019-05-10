@extends('layouts.main')
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
                  <li aria-current="page" class="breadcrumb-item active">FAQs</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** PAGES MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">OTHER LINKS</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="{{route('termsandconditions')}}" class="nav-link ">Terms & Conditions</a></li>
                    <li><a href="{{route('privacypolicy')}}" class="nav-link ">Privacy Policy</a></li>
                    <li><a href="{{route('loyaltyprogram')}}" class="nav-link ">Loyalty Program</a></li>
                    <li><a href="javascript::void(0)" class="nav-link active">FAQ</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link ">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->
              
            </div>

        

<div class="col-lg-9">
  <div id="contact" class="box">
    <h1>Commonly asked questions</h1>
    <div id="accordion">
      <div class="card border-primary mb-3">
        <div id="heading1" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" class="btn btn-primary d-block text-left rounded-0">1.&nbsp;What is Bargain Basement?</a></h4>
        </div>
        <div id="collapse1" aria-labelledby="heading1" data-parent="#accordion" class="collapse show">
          <div class="card-body">
            <p>Please note that we are NOT an Online Shopping Website/Company, but rather we match you with people, shop owners(sellers) who are willing to sell brand new products, products which were bought but never used, etc at lower price in Mumbai. We constantly look for offers/discounts on products at every possible place, shop, ecommerce website and grab it. And then, we display it on our website ( https://www.bargainbasement.in ). So, the bottom line is that  you dont't need to worry about having a Credit Card, Debit Card having 5-10% cashback. All you need to do is use our search and grab the product. 
Please note that we are available only in <a href=javascript:void(0)>Mumbai</a></p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading2" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" class="btn btn-primary d-block text-left rounded-0">2.&nbsp;Why only one Payment Method (COD)?</a></h4>
        </div>
        <div id="collapse2" aria-labelledby="heading2" data-parent="#accordion" class="collapse show">
          <div class="card-body">
            <p>Since we are not the owner of any product, nor are we reselling any of the item displayed on our website ( https://www.bargainbasement.in ), we do not provide any other payment methods except Cash On Delivery as of now. Also, as a User/Customer you should be aware that, placing any fake orders is not tolerable at Bargain Basement. It might result in a permanent closure/ban of your Account.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading3" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" class="btn btn-primary d-block text-left rounded-0">3.&nbsp;How do I use this webiste?</a></h4>
        </div>
        <div id="collapse3" aria-labelledby="heading3" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>You can search for products through categories. But if you want to make the best out of our website,  we have a special search feature for our Customers. Simply type product keywords and your area zipcode/pincode, eg: "nokia 6.1 plus" in "400001" and we will display the best results matching your query. As we are trying to get more and more awesome products for you, the search may return very few results initially. But do hold on and come back!</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading4" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" class="btn btn-primary d-block text-left rounded-0">4.&nbsp;How do I get the product listed on the website?</a></h4>
        </div>
        <div id="collapse4" aria-labelledby="heading4" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>You can place an order by clicking on the Buy button and leave the rest on us. But do not forget to mention your delivery address.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading5" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5" class="btn btn-primary d-block text-left rounded-0">5.&nbsp;Do you list used products?</a></h4>
        </div>
        <div id="collapse5" aria-labelledby="heading5" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>We do list used products but not under Electronics, Mobile Phones, Accessories etc. All the products listed under the above categories are seal packed with original bill. Though, sometimes you might not get the bill on your name as we are not reselling the item but matching you with people/partners who wants to sell products that they have already bought. PLEASE NOTE THAT WE DO NOT SELL ANYTHING ON OUR WEBSITE.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading6" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6" class="btn btn-primary d-block text-left rounded-0">6.&nbsp;Are the products genuine and brand new?</a></h4>
        </div>
        <div id="collapse6" aria-labelledby="heading6" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>All the products listed on our website are thoroughly verified before displaying. We display genuine products only.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading7" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7" class="btn btn-primary d-block text-left rounded-0">7.&nbsp;Can I get the bill on my name?</a></h4>
        </div>
        <div id="collapse7" aria-labelledby="heading7" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>Usually, the product listed on our webiste are the products that our partners already own & want to sell. So, in most of the cases the bill will be on the name of one of our partners.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading8" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8" class="btn btn-primary d-block text-left rounded-0">8.&nbsp;How to partner with Bargain Basment</a></h4>
        </div>
        <div id="collapse8" aria-labelledby="heading8" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>To become our partner, you only have to fill a simple form <a href=https://www.bargainbasement.in/contact?q=becomeOurPartner>here</a> and we shall get back to you at the earliest and guide you accordingly.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading9" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9" class="btn btn-primary d-block text-left rounded-0">9.&nbsp;Do you deliver products outside Mumbai?</a></h4>
        </div>
        <div id="collapse9" aria-labelledby="heading9" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>No, as of now we don't deliver outside Mumbai.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="card border-primary mb-3">
        <div id="heading10" class="card-header p-0 border-0">
          <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10" class="btn btn-primary d-block text-left rounded-0">10.&nbsp;How is Shipping Fees calculated?</a></h4>
        </div>
        <div id="collapse10" aria-labelledby="heading10" data-parent="#accordion" class="collapse ">
          <div class="card-body">
            <p>Shipping fees may vary for different products as it is decided by the seller.</p>
            <!-- <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul> -->
          </div>
        </div>
      </div>

    </div>
    <hr>
    <p class="lead">Can’t find a solution? Get in touch with us. Our team is on standby to help.</p>
    <a href="{{route('contact')}}" style="text-decoration: none;">Contact Us</a>
    <!-- /.accordion-->
  </div>
</div>

            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>
@endsection