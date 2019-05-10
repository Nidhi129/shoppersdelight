<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Get the best discounts on Smartphones, Movie Tickets, Bluray/DVD movies and more</title>
    <meta name="og_title" property="og:title" content="Get the best discounts on Smartphones, Movie Tickets, Bluray/DVD movies and more"/>
    <meta name="Keywords" content="Best deals on Mobile Phones, Best deals on Apple iPhones, discounts on iPhones, discounts on Mobile Phones, discounts on movie tickets, Buy Online"/>
    <meta name="Description" property="og:description" content="Get the latest Smartphones at great discounts. Know about mobile price, discounts at mobile shops near you using our smart search, Earn points while shopping through us and redeem for instant cash in your bank account"/>
    
    <meta name="csrf-token" content="MJHpRkQWVmAkMlfcfrBTlZL8JhJtoiF6aTOPv5kS">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="google-site-verification" content="Bz8xQtOYpbYkZ2r7yM7fbJUXSZWTvgP_3m-Eq1sPZLg" />

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->

    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->


<link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('site.webmanifest')}}">
{{-- <script src="https://js.stripe.com/v3/"></script>

<style>
  
  .StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>
 --}}
</head>

  <body>
    <header class="header mb-5">
       <nav class="navbar navbar-default navbar-expand-md navbar-laravel">
            <div class="container">
          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a href="http://localhost/myecommerce/public/home" class="navbar-brand home">
        
        <span class="sr-only">Go to Homepage</span></a>
      <div class="navbar-buttons">
        <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button>
        <a href="http://localhost/ecommerce/public/cart" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
      </div>

      <div id="navigation" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="http://localhost/ecommerce/public/home" class="nav-link active">Home</a></li>

          <li class="nav-item dropdown menu-large">
            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link ">Electronics<b class="caret"></b>
            </a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                          <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('products.all')}}" style="text-decoration: none;">Mobile Phones</a></h5>
                    
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('mobileaccessories')}}" style="text-decoration: none;">Mobile Acessories</a></h5>
                    <ul class="list-unstyled mb-3">
                                    </ul>
                  </div>

                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown menu-large">
            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link ">Entertainment<b class="caret"></b>
            </a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                          <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('movies')}}" style="text-decoration: none;">Movies</a></h5>
                    <ul class="list-unstyled mb-3">
                                      <li class="nav-item">
                        <a href="{{route('blueraymovies')}}" class="nav-link">Blue Ray Movies</a>
                      </li>
                                     
                                    </ul>
                  </div>

                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown menu-large">
            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link ">Other Services<b class="caret"></b>
            </a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                          <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('tickets')}}" style="text-decoration: none;">Tickets</a></h5>
                    <ul class="list-unstyled mb-3">
                                    </ul>
                  </div>
                          <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('egiftvouchers')}}" style="text-decoration: none;">E-Gift Vouchers</a></h5>
                    <ul class="list-unstyled mb-3">
                                    </ul>
                  </div>
                          <div class="col-md-6 col-lg-3">
                    <h5><a href="{{route('billpayments')}}" style="text-decoration: none;">Bill Payments</a></h5>
                    <ul class="list-unstyled mb-3">
                                    </ul>
                  </div>
 
                </div>
              </li>
            </ul>
          </li>

        </ul>
        <div class="navbar-buttons d-flex justify-content-end">
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block">
          <a href="http://localhost/ecommerce/public/cart" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i>
              <span>CART</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </nav>
  
</header>
    @section('content')
      @show

    @section('home')
      @show

    
    @section('admin.dashboard');
      @show


   
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3" style="color: #00a192">CUSTOMERS</h4>
            <ul class="list-unstyled">
              <li><a href="{{route('login')}}">Login/ </a><a href="{{route('register')}}">Register</a></li>
            </ul>
            <hr>
            <h4 class="mb-3" style="color: #00a192">SELLERS</h4>
            <ul class="list-unstyled">
              <li><a  href="http://localhost/ecommerce/public/becomeourpartner">Become our partner</a></li>
              <li><a  href="http://localhost/ecommerce/public/ourpartners">Our Partners</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3" style="color: #00a192">TOP CATEGORIES</h4>
            <h6 style="color: #00a192">Electronics</h6>
            <ul class="list-unstyled">
              <li><a href="{{route('products.all')}}">Mobile Phones</a></li>
            </ul>
            <hr>
            <h4 class="mb-3" style="color: #00a192">IMPORTANT</h4>
            <ul class="list-unstyled">
              <li><a href="{{route('termsandconditions')}}">Terms & Conditions</a></li>
              <li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
              <li><a href="{{route('loyaltyprogram')}}">Loyalty Program</a></li>
              <li><a href="{{route('faqs')}}">FAQs</a></li>
              <li><a href="{{route('reportabug')}}">Report a bug&nbsp;<i class="fa fa-bug" aria-hidden="true"></i></a></li>
            </ul>
          </div>


          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3"><strong style="color: #00a192">Bargain Basement</strong></h4>
            <p>
              <code style="color: #00a192"><strong>WhatsApp: +91-9930914207</strong></code><br />
              <code style="color: #00a192"><strong>Email: info@bargainbasement.in</strong></code><br />
            </p>
            <a href="http://localhost/ecommerce/public/contact">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3" style="color: #00a192">Stay updated!</h4>
            <p class="text-muted">Get the best deals right in your inbox</p>
            <form>
              <div class="input-group">
                <input id="subscribeMe" type="text" class="form-control" placeholder="Email Address">
                <span class="input-group-append">
                  <button id="subscribe-me-button" onclick="transacting(this);SubscribeMe();" type="button" class="btn btn-outline-secondary">
                    <i class="fa fa-paper-plane-o submit" aria-hidden="true"></i>
                    <i class="fa fa fa-check" id="done" aria-hidden="true" style="display: none;"></i>
                    <i class="fa fa-spinner fa-pulse fa-1x fa-fw loading" style="display: none;"></i>
                  <span id="button-text">Subscribe</span></button>
                </span>
              </div>
                  <code id="statusmessage" style="color: green;display: none;"></code>
                  <code id="errmessage" style="color: red;display: none;"></code>
              <!-- /input-group-->
            </form>
            <hr>
<!--             <h4 class="mb-3">Stay in touch</h4>
            <p class="social">
              <a href="#" class="facebook external"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter external"><i class="fa fa-twitter"></i></a>
              <a href="#" class="instagram external"><i class="fa fa-instagram"></i></a>
              <a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="email external"><i class="fa fa-envelope"></i></a>
            </p> -->
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left"><i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;2019&nbsp;&nbsp;Bargain Basement.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious: E-commerce</a>
              <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :)-->
            </p>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset ( 'vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script defer src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script defer src="{{asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{ asset('js/front.js') }}"></script>

{{-- <script>
    (function(){
        // Create a Stripe client.
var stripe = Stripe('pk_test_sFP37iMJ9amTo3ilbWA3GKEA000nBMNMG4');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
  
}
    })();

</script>
 --}}
<script>
  $(function(){
    $('#same-address').on('change', function(){
      $('#shipping_address').slideToggle(!this.checked)
    })
  })
</script>



{{-- script>function SubscribeMe(){$("#statusmessage").hide(),$("#errmessage").hide();$('#button-text').text('Subscribing...');$('#done').hide();var e=$("#subscribeMe").val();$.ajax({url:"https://www.bargainbasement.in/api/v1/subscribeme",type:"GET",data:{email:e},success:function(e,s,a){200==e.status_code?($("#statusmessage").show(),$("#statusmessage").html(e.messages.other),$('#subscribe-me-button').attr('onclick',''),$("#subscribeMe").val(""),$('#button-text').text('').css('color','green'),$('.loading').hide(),$('#done').show().css('color','green')):400==e.status_code&&($("#errmessage").show(),$("#errmessage").html(e.messages.other),$('#button-text').text('Subscribe'),$('.loading').hide(),$('.submit').show())},error:function(e,s,a){console.log("Error occured. Please refresh the page and try again.")}})}</script>
 --}}
{{-- <script>
 --}}
 

        </body>
</html>
