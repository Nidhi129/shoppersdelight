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
              <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
            </ol>
          </nav>
        </div>

        <div id="basket" class="col-lg-9">
          <div class="box">
            <form method="GET" action="">
              <h2>Shopping cart</h2>


              <h4>item(s) in shopping cart</h4>
              <p class="text-muted">
                <code style="color: green">&#039;

@if(isset($cart) && $cart->getContents())
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
        <th>Total&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     @foreach ($cart->getContents() as $slug => $product)
       
     
      <tr>
        <td>
          <a href=""> <img src="{{asset('storage/'.$product['product']->thumbnail)}}"></a>
          <a href="title text-truncate">{{$product['product']->title}}</a>
          <br>
          <span>
            <small style="color: #388e3c;border: 2px solid #388e3c;padding-right:6px;padding-left:6px;padding-top:2px;padding-bottom:2px;border-radius:4px">IN STOCK</small>
          </span>
        </td>
        <td>
          <form method="POST" action="{{route('cart.update', $slug)}}" >
              @csrf
              <input type="number" name ="qty" id="qty" class="form-control text-center" min="0" max="99" value="{{$product['qty']}}">
            <input type="submit" name="update" value="Update" style="color: #388e3c;font-size: 10px;padding-right:6px;padding-left:6px;padding-top:2px;padding-bottom:2px;border-radius:4px" class="btn btn-block btn-outline-success btn-round">
            </form>
         {{--  <input type="text" value="1" class="form-control" disabled> --}}
        </td>
        <td> 
        <span class="price">₹ {{$product['product']->discount_price}}</span>
              <small class="text-muted">(each)</small></td>
        
         
            <td> 
        <span class="price">₹ {{$product['price']}}</span>
            </td>
        
        <td class="text-right">
              <form action="{{route('cart.remove', $slug)}}" method="POST" accept-charset="utf-8">
              @csrf

              <input type="submit" name="remove" value="Remove" style=" width:70%;font-size: 13px;padding-right:6px;padding-left:6px;padding-top:2px;padding-bottom:2px;border-radius:4px" class="btn btn-outline-danger"/>
              </form>
            </td>
      
      </tr>
    </tbody>
    @endforeach
   
        <tr>
          <th colspan="2">Total Qty: {{$cart->getTotalQty()}}</th>
          <td></td>
        </tr>
        <tr>
          <th colspan="2">Total Price: ₹ {{$cart->getTotalPrice()}}</th>
          <td></td>
        </tr>
  </table>
</div>
<!-- /.table-responsive-->
<div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
  <div class="left">
    <a href= "{{route('products.all')}}" class="btn btn-outline-secondary submit"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
    <div class="right">
      <input type="hidden" name="_token" value="M0Cr0CA8d8npwKU6pGfoA0zsrAILpc2Ro4YVrMAa">                      <i class="fa fa-refresh fa-spin fa-2x fa-fw loading" style="display: none;"></i>
      <a href="{{route('checkout.index')}}" button type="submit" class="btn btn-primary submit" onclick="transacting(this);">Proceed to checkout <i class="fa fa-chevron-right"></i></button></a>
    </div>
  </div>
@else
<p class="alert alert-danger">No Products in the Cart <a href="{{route('products.all')}}">Buy Some Products</a></p>
  @endif
  
</form>
</div>
<!-- /.box-->

{{-- </div> --}}

<!-- /.col-lg-9-->
{{-- <div class="col-lg-3">
  <div id="order-summary" class="box">
    <div class="box-header">
      <h3 class="mb-0">Order summary</h3>
    </div>
    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
    <div class="table-responsive">
      <table class="table">
        <tbody>
          <tr>
            <td>Order subtotal</td>
            <th>350</th>
          </tr>
          <tr>
            <td>Shipping and handling</td>
            <th style="color:#388e3c">FREE</th>
          </tr>
          <tr class="total">
            <td>Total</td>
            <th>350</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div> --}}

<!-- /.col-md-3-->
</div>
</div>
</div>
</div>
@endsection