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

   <li class="breadcrumb-item">Other Services</li>
 
   <li aria-current="page" class="breadcrumb-item active">
            Bill Payments
      </li>
    </ol>              </nav>

                      <div class="box">
                <h3>Bill Payments</h3>
                <span>Make your Bill Payments through us at great instant discounts</span>
              </div>
        

        

                      <div class="box info-bar">
                <div class="row">
                            <div class="col-md-12 products-showing">Sorry, no products here yet. We are working hard to add more products..</div>
          
<!-- Sorting.. Hidden as of Now -->

                </div>
              </div>
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>
@endsection