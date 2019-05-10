@extends('layouts.main')
@section('header.topbar.register')    

<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://www.bargainbasement.in">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">Register or Sign in</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6">
          <div class="box">
            <h2>New Customer Account</h2>
            <p class="lead">Not our registered customer yet?</p>
            <p>By registering with us, new world of fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
            <p>Please read our <a target="_blank" href="https://www.bargainbasement.in/terms-conditions">Terms & Conditions</a> and <a target="_blank" href="https://www.bargainbasement.in/privacy-policy">Privacy Policy</a> before registering</p>
            <p class="text-muted">If you have any questions, please feel free to <a href="https://www.bargainbasement.in/contact">contact us</a>
            </p>





            <hr>
      <form action="{{route('register')}}" method="post">
      @csrf
      
      <input type="hidden" name="_token" value="r7kDJdQSar0PRJFI1D2nq0u37OtR5amZFK7EZ689">              <div class="form-group">
                {{-- <label for="registrationName">Name<span style="color: red">&nbsp;*</span></label>
                <input id="registrationName" type="text" class="form-control" name="registerFullName" placeholder="Full Name" value="">
              </div> --}}
              <div class="form-group">
                <label for="registrationEmail">Email<span style="color: red">&nbsp;*</span></label>
                <input id="registrationEmail" type="text" class="form-control" name="registerEmail" placeholder="Email ID" value="">
              </div>
              {{-- <div class="form-group">
                <label for="registerMobileNo">Mobile no.<span style="color: red">&nbsp;*</span></label>
                <input id="registerMobileNo" type="text" class="form-control" name="registerMobileNo" placeholder="Mobile Phone Number" value="">
              </div> --}}
              {{-- <div class="form-group">
                <label for="registerFullAddress">Residential Address</label>
                <textarea id="registerFullAddress" type="text" class="form-control" name="registerFullAddress" placeholder="Enter your Residential Address"></textarea>
              </div> --}}
              <div class="form-group">
                <label for="registrationPassword">Password<span style="color: red">&nbsp;*</span></label>
                <input id="registrationPassword" type="password" class="form-control" name="registerPassword" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="registrationConfPassword">Confirm<span style="color: red">&nbsp;*</span></label>
                <input id="registrationConfPassword" type="password" class="form-control" name="registerConfPassword" placeholder="Confirm Password">
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="agreeTerms" id="agreeTerms">
                <label class="custom-control-label" for="agreeTerms">I agree that I have read the <a href="https://www.bargainbasement.in/terms-conditions" target="_blank">Terms & Conditions</a> and <a href="https://www.bargainbasement.in/privacy-policy" target="_blank">Privacy Policy</a></label>
              </div>
              <div class="text-center">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw loading" style="display: none;"></i>
                <button type="submit" onclick="transacting(this);" class="btn btn-primary submit"><i class="fa fa-user-md"></i> Register</button>
              </div>
      </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box">
            <h2>Login</h2>
            <p class="lead">Already our customer?</p>
            <code>Invalid credentials. Please try again</code>

            <hr>
      <form action="https://www.bargainbasement.in/account/login?" method="post">
          <input type="hidden" name="_token" value="r7kDJdQSar0PRJFI1D2nq0u37OtR5amZFK7EZ689">
              <div class="form-group">
                <label for="loginEmail">Email</label>
                <input id="loginEmail" type="text" class="form-control" name="loginEmail" value="" placeholder="Email ID">
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input id="loginPassword" type="password" class="form-control" name="loginPassword" placeholder="Password">
              </div>
              <div class="text-center">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw loading" style="display: none;"></i>
                <button type="submit" class="btn btn-primary submit" onclick="transacting(this);"><i class="fa fa-sign-in"></i> Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.bargainbasement.in/account/password-reset-request">Forgot Password?</a>
              </div>
      </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection