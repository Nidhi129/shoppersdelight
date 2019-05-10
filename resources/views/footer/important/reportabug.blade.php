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
                  <li class="breadcrumb-item"><a href="https://www.bargainbasement.in">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Contact Us</li>
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
                    <li><a href=" {{route('privacypolicy')}}" class="nav-link ">Privacy Policy</a></li>
                    <li><a href="{{route('loyaltyprogram')}}" class="nav-link ">Loyalty Program</a></li>
                    <li><a href="{{route('faqs')}}" class="nav-link ">FAQ</a></li>
                    <li><a href="javascript::void(0)" class="nav-link active">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->
       
            </div>

        
<div class="col-lg-9">
  <div id="contact" class="box">
    <h1>Contact us</h1>
    <p class="lead">Are you curious about something? Do you have some kind of feedback for us?</p>
    <p>Please feel free to contact us.</p>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h3><i class="fa fa-map-signs"></i>&nbsp;Visit us</h3>
        <p>Bargain Basement,<br>Mumbai,<br>India</p>
      </div>
      <!-- /.col-sm-4-->
      <div class="col-md-4">
        <h3><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;WhatsApp</h3>
        <p class="text-muted">Monday - Friday,  12pm - 6pm</p>
        <p><strong style="color: #4fbfa8">+91-9930914207</strong></p>
      </div>
      <!-- /.col-sm-4-->
      <div class="col-md-4">
        <h3><i class="fa fa-envelope"></i>&nbsp;Electronic support</h3>
        <p class="text-muted">Write an email to us.</p>
        <!-- <ul> -->
          <strong>info@bargainbasement.in</strong>
        <!-- </ul> -->
      </div>
      <!-- /.col-sm-4-->
    </div>
    <!-- /.row-->
    <hr>



  </div>
</div>

            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>

@endsection