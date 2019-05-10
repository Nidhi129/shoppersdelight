@extends('layouts.app')
@section('content')


<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">Checkout</li>
            </ol>
          </nav>
          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
{{--               <div class="col-md-6 mb-2">
 --}}

 <div id="billing_address" class="col-md-12 order-md-1">
  <hr class="mb-4">
  <h4 class="mb-3">Billing address</h4>
  <form class="needs-validation" novalidate="" action="{{route('checkout.paypal')}}" method="post" id="payment-form">
    @csrf
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input name="billing_firstName" type="text" class="form-control" id="firstName" placeholder="" value="">
        @if($errors->has('billing_firstName'))
        <div class="alert alert-danger">
          {{$errors->first('billing_firstName')}}
        </div>
        @endif
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" name="billing_lastName" class="form-control" id="lastName" placeholder="" value="" >
        @if($errors->has('billing_lastName'))
        <div class="alert alert-danger">
          {{$errors->first('billing_lastName')}}
        </div>
        @endif
      </div>
    </div>

    <div class="mb-3">
      <label for="email">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" value="{{ @Auth::user()->email}}">
      @if($errors->has('email'))
      <div class="alert alert-danger">
        {{$errors->first('email')}}
      </div>
      @endif
    </div>


    <!--address-->
    <div class="md-form mb-5">
      <input type="text" name="billing_address1" id="address" class="form-control" placeholder="1234 Main St">
      <label for="address" class="">Address</label>
      @if($errors->has('billing_address1'))
      <div class="alert alert-danger">
        {{$errors->first('billing_address1')}}
      </div>
      @endif
    </div>

    <!--address-2-->
    <div class="md-form mb-5">
      <input type="text" name="billing_address2" id="address-2" class="form-control" placeholder="Apartment or suite">
      <label for="address-2" class="">Address Line 2 (optional)</label>
      @if($errors->has('billing_address2'))
      <div class="alert alert-danger">
        {{$errors->first('billing_address2')}}
      </div>
      @endif
    </div>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4">

        <label for="country">Country</label>
        <select name="billing_country" class="custom-select d-block w-100" id="country" required>
          <option value="">Choose...</option>
          <option>United States</option>
        </select>
        @if($errors->has('billing_country'))
        <div class="alert alert-danger">
          {{$errors->first('billing_country')}}
        </div>
        @endif

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <label for="state">State</label>
        <select name="billing_state" class="custom-select d-block w-100" id="state" required>
          <option value="">Choose...</option>
          <option>California</option>
        </select>
        @if($errors->has('billing_state'))
        <div class="alert alert-danger">
          {{$errors->first('billing_state')}}
        </div>
        @endif

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <label for="zip">Zip</label>
        <input name="billing_zip" type="text" class="form-control" id="zip" placeholder="" required>
        <div class="invalid-feedback">
          Zip code required.
          @if($errors->has('billing_zip'))
          <div class="alert alert-danger">
            {{$errors->first('billing_zip')}}
          </div>
          @endif
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    <hr>

    <div class="custom-control custom-checkbox">
      <input name="shipping_address" value="true" type="checkbox" class="custom-control-input" id="same-address">

      <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
    </div>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="save-info">
      <label name="guest" class="custom-control-label" for="save-info">Checkout as Guest</label>
    </div>



  <div id="shipping_address" class="col-md-12 order-md-1">
    <hr>
    <hr class="mb-4">
    <h4 class="mb-3">Shipping address</h4>



    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input name="shipping_firstName" type="text" class="form-control" id="firstName" placeholder="" value="">

      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" name="shipping_lastName" class="form-control" id="lastName" placeholder="" value="" >

      </div>
    </div>
    <div class="mb-3">
      <label for="address">Address</label>
      <input type="text" name="shipping_address1" class="form-control" id="address" placeholder="1234 Main St">
    
    </div>

    <div class="mb-3">
      <label for="address2">Address Line 2<span class="text-muted">(Optional)</span></label>
      <input type="text" name="shipping_address2" class="form-control" id="address2" placeholder="Apartment or suite">
    </div>

    <div class="row">
      <div class="col-md-5 mb-3">
        <label for="country">Country</label>
        <select name="shipping_country" class="custom-select d-block w-100" id="country" >
          <option value="">Choose...</option>
          <option>United States</option>
        </select>

      </div>
      <div class="col-md-4 mb-3">
        <label for="state">State</label>
        <select name="shipping_state" class="custom-select d-block w-100" id="state" >
          <option value="">Choose...</option>
          <option>California</option>
        </select>

      </div>
      <div class="col-md-3 mb-3">
        <label for="zip">Zip</label>
        <input type="text" name="shipping_zip" class="form-control" id="zip" placeholder="" >

      </div>
    </div>
  </div>
  <hr class="mb-4">

{{-- <script src="https://js.stripe.com/v3/"></script>

<form action="/charge" method="post" id="payment-form">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div> --}}




  <div class="form-group">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    <button type ="submit" class="btn btn-success">Paypal Payment</button>
  </div>
  </form>
</div>
</div>
</div>
</div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-4 mb-4">

  <!-- Heading -->
  <h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">Your cart</span>
    <span class="badge badge-secondary badge-pill">{{$cart->getTotalQty()}}</span>
  </h4>

  <!-- Cart -->
  <ul class="list-group mb-3 z-depth-1">
    @foreach($cart->getContents() as $slug => $product)
    <li class="list-group-item d-flex justify-content-between lh-condensed">
      <div>
        <h6 class="my-0">{{$product['product']->title}} <small class="text-muted">({{$product['qty']}})</small></h6>

      </div>
      <span class="text-muted">₹ {{$product['price']}}</span>
    </li>
    @endforeach

    <li class="list-group-item d-flex justify-content-between">
      <span>Total (₹)</span>
      <strong>₹ {{$cart->getTotalPrice()}}</strong>
    </li>
  </ul>
  <!-- Cart -->


</div>
<!--Grid column-->

</div>
<!--Grid row-->

</div>
</div>
</div>
</div>
<script>
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
<script>
  $(function(){
    $('#same-address').on('change', function(){
      $('#shipping_address').slideToggle(!this.checked)
    })
  })
</script>
@endsection
