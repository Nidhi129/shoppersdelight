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
                  <li aria-current="page" class="breadcrumb-item active">Our Partners</li>
                </ol>
              </nav>
            </div>

            <div id="basket" class="col-lg-12">
              <div class="box">
                  <h2>Here is a list of our awesome partners!</h2>
                  <p class="text-muted">Would you like to become one? <a href="{{route('contact')}}">Contact us</a></p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Shop Name</th>
                          <th>Area/Address</th>
                          <th>Pincode</th>
                          <th>Avg. Customer Rating</th>
                          <th>Member Since</th>
                          <!-- <th colspan="2">Total</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Andromeda Retail</td>
                          <td>Andromeda Retail, Mumbai</td>
                          <td>400084</td>
                          <td>
                            <div class="star-rating">
                              <i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>
                              <code style="color: #008c65">&nbsp;<small>Total 0 review(s)</small></code>
                            </div>
                          </td>
                          <td><code title="October 2018" style="color: #008c65"><h5>22 October, 2018</h5></code></td>
                          <!-- <td><a href="#"><i class="fa fa-trash-o"></i></a></td> -->
                        </tr>

                      </tbody>
<!--                       <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">$446.00</th>
                        </tr>
                      </tfoot> -->
                    </table>
                    
                  </div>
                  <!-- /.table-responsive-->



              </div>
              <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->
            <!-- /.col-md-3-->
          </div>
        </div>
      </div>
    </div>

@endsection
