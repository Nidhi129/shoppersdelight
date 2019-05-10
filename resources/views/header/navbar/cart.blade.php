 @extends('layouts.main')
 @section('header.navbar.cart')      


 <div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
            </ol>
          </nav>
        </div>

        <div id="basket" class="col-lg-9">
          <div class="box">
            <form method="GET" action="">
              <h2>Shopping cart</h2>


             {{--  @if(session()->has('success_message'))
              <div class ="alert alert-success">
                {{session()->get('success_message')}} 
              </div>
              @endif --}}
{{-- 
              @if(count($errors)>0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
 --}}
{{-- 
              @if(Cart::count()>0) --}}
              <h4>{{-- {{ Cart::count() }} --}} item(s) in shopping cart</h4>
              <p class="text-muted">
                <code style="color: green">&#039;




{{--                   <p class="text-muted"><code style="color: green">&#039;English Vinglish&#039; added to your Shopping Cart.</code></p>
--}}
<div class="table-responsive">
  <table class="table">
   
    {{-- expr --}}

    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
        <th>Discount&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
        <th>Total&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
       {{-- @foreach (Cart::content() as $item) --}}
      <tr>
        <td>
          <a href=""> <img src="{{asset('/img/blueraydiscs/')}}"></a>
          <a href=""></a>
          {{--  <a target="_blank" href="https://www.bargainbasement.in/product/english-vinglish/2y10akVUBqqLaFRiJpa2MVDOZ106qRqGQqL6vx9nhbXV8MS8MtH5tRC">English Vinglish</a> --}}
          <br>
          <span>
            <small style="color: #388e3c;border: 2px solid #388e3c;padding-right:6px;padding-left:6px;padding-top:2px;padding-bottom:2px;border-radius:4px">IN STOCK</small>
          </span>
        </td>
        <td>
          <input type="text" value="1" class="form-control" disabled>
        </td>
        <td>{{-- {{$item->model->original_price}} --}}</td>
        <td>{{-- {{$item->model->original_price-$item->model->discount_price}} --}}</td>
        <td>{{-- {{$item->model->discount_price}} --}}</td>
        <td>
         <div class="cart-table-actions">
          <form action="{{-- {{ route('cart.destroy', $item->rowId)}} --}}" method= "POST">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}

          <i class="fa fa-trash " aria-hidden="true"></i>

          </form>
          </div>
            
          
      </td>
      </tr>
    </tbody>
    
   {{--  @endforeach --}}
    <tr>
        <th colspan="4">Total</th>
        <th colspan="2">{{-- {{$item->model->discount_price}} --}}</th>
      </tr>
  </table>
</div>
<!-- /.table-responsive-->
<div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
  <div class="left">
    <a href="{{route('blueraydisc.index')}}" class="btn btn-outline-secondary submit"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
    <div class="right">
      <input type="hidden" name="_token" value="M0Cr0CA8d8npwKU6pGfoA0zsrAILpc2Ro4YVrMAa">                      <i class="fa fa-refresh fa-spin fa-2x fa-fw loading" style="display: none;"></i>
      <a href="{{route('checkout.index')}}" button type="submit" class="btn btn-primary submit" onclick="transacting(this);">Proceed to checkout <i class="fa fa-chevron-right"></i></button></a>
    </div>
  </div>
 {{--  @else --}}
  <h4>No items in Cart!</h4>
 {{--  @endif --}}
</form>
</div>
<!-- /.box-->

</div>
<!-- /.col-lg-9-->
<div class="col-lg-3">
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

</div>

<!-- /.col-md-3-->
</div>
</div>
</div>
</div>


 {{-- <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
                </ol>
              </nav>
            </div>


      
            <div id="basket" class="col-lg-9">
              <div class="box">
                <form method="GET" action="https://www.bargainbasement.in/shopping/checkout-address">
                  <h2>Shopping cart</h2>

                 

                    @if(count($errors)>0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </code></p>

                   @if(Cart::count()>0)
                  <h4>{{ Cart::count() }} item(s) in shopping cart</h4>
                   <p class="text-muted">
                    <code style="color: green">&#039;
                      
                    @if(session()->has('success_message'))
                    <div class ="alert alert-success">
                    {{session()->get('success_message')}} 
                    </div>
                    @endif

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
                          <th>Discount&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
                          <th>Total&nbsp;(<i class="fa fa-inr" aria-hidden="true"></i>)</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                          <td>
                            <a target="_blank" href="https://www.bargainbasement.in/product/catch-me-if-you-can/2y10JPdvZHYcNWP8seWHWv9g2O3oA4SZRi9igwhIIuCCSY8tHXNhIvQhC">Catch Me If You Can</a>
                            <br>
                                                <span>
                              <small style="color: #388e3c;border: 2px solid #388e3c;padding-right:6px;padding-left:6px;padding-top:2px;padding-bottom:2px;border-radius:4px">IN STOCK</small>
                            </span>
                                              </td>
                          <td>
                            <input type="text" value="1" class="form-control" disabled>
                          </td>
                                              <td>400</td>
                          <td>150</td>
                          <td>250</td>
                                              <td>
                            <a href="javascript:void(0)" pid="2y10JPdvZHYcNWP8seWHWv9g2O3oA4SZRi9igwhIIuCCSY8tHXNhIvQhC" class="removeItemFromCart">
                              <i class="fa fa-trash-o"></i>
                            </a>
                          </td>
                        </tr>
                          </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4">Total</th>
                          <th colspan="2">250</th>
                        </tr>
                        <tr>
                          <!-- <td colspan="7"><small style="color: #348e7b"><a target="_blank" href="https://www.bargainbasement.in/faqs?q=one-item-limit">Why can't I buy more than one item?</a></small></td> -->
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left">
                      <a href="{{route('blueraydisc.index')}}" class="btn btn-outline-secondary submit"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right">
                      <a href="{{route('checkout.index')}}" class="btn btn-primary submit">
                        <i class="fa fa-chevron-right"></i> Proceed to checkout </a></div>
                    
                  </div>
                  @else
                  <h4>No items in cart!</h4>
                  @endif
                </form>
              </div>
              <!-- /.box-->
              
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
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
                        <th>250</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th style="color:#388e3c">FREE</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>250</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>

            <!-- /.col-md-3-->
          </div>
        </div>
      </div>
    </div>
    --}}
    @endsection