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
                  <li aria-current="page" class="breadcrumb-item active">Loyalty Program</li>
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
                    <li><a href="{{route('loyaltyprogram')}}" class="nav-link active">Loyalty Program</a></li>
                    <li><a href="{{route('faqs')}}" class="nav-link ">FAQ</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link ">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->

            </div>



<div class="col-lg-9">
              <div id="text-page" class="box">
                <h3>&quot;You don’t earn loyalty in a day. You earn loyalty day-by-day.&quot;</h3>
                <br>
                <p class="lead">Lets get started on how to make the best out of our Loyalty program</p>
<br>
                  <h4>BB Points</h4>
                  <p>BB points stands for 'Bargain Basement Points'. Whenever you complete a purchase with us, you will be credited with certain bb points. Those points can be utilized to purchase further products from our website.

                  <br>You also have an option to Encash your points directly to your Bank Account.</p>
<br>
                  <p>The points conversion/calculation is explained below: </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Order Amount Range&nbsp;(<i class="fa fa-inr"></i>)</th>
                        <th>Points Earned</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>10,000 - 25,000</td>
                        <td>1% of order amount</td>
                      </tr>
                      <tr>
                        <td>25,001 - 1,00,000</td>
                        <td>1.2% of order amount</td>
                      </tr>
                      <tr>
                        <td>1,00,001 and above</td>
                        <td>1.5% of order amount</td>
                      </tr>
                    </tbody>
                  </table>
<br>
                  <p>Examples: </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>You order a product worth&nbsp;</th>
                        <th>You earn <small>(bb points)</small></th>
                        <th>Cash value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="fa fa-inr"></i>&nbsp;22,000</td>
                        <td>220<small>&nbsp;(&nbsp;1% of 22,000)</small></td>
                        <td><i class="fa fa-inr"></i>&nbsp;220</td>
                      </tr>
                      <tr>
                        <td><i class="fa fa-inr"></i>&nbsp;75,000</td>
                        <td>900<small>&nbsp;(&nbsp;1.2% of 75,000)</small></td>
                        <td><i class="fa fa-inr"></i>&nbsp;900</td>
                      </tr>
                      <tr>
                        <td><i class="fa fa-inr"></i>&nbsp;1,20,000</td>
                        <td>1800<small>&nbsp;(&nbsp;1.5% of 1,20,000)</small></td>
                        <td><i class="fa fa-inr"></i>&nbsp;1800</td>
                      </tr>
                    </tbody>
                  </table>
<br>
                  <h4>Encashing rules</h4>
                  
                  <p>We would hate to make you wait to encash your own hard earned points. So, we have a very low minimum threshold after which you are eligible to Encash your points. But we do not have a minimum threshold to redeem points against your purchase(s). So, even if you have 1 bb points left, you are free to redeem against your purchase. 
<br><br>The minimum threshold to encash/bank transfer is: <b>500</b> bb points.
<br>After you reach your minimum threshold, you will be able to see an <code style="color: #4fbfa8">"ENCASH POINTS"</code> link on your profile besides your points. Simply click on it and fill in the Bank details where you would like your money to be transferred.</p>
<p><code style="color: green">Please note that it may take upto 24 working(<small><code><em>Monday - Friday</em></code></small>) hours for your redemption request to be processed.</code></p>
<p></p>
                  </p>
              </div>
            </div>

            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>

@endsection
