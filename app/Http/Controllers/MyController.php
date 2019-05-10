<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function mobileaccessories(){
    	return view('header.navbar.electronics.mobileaccessories');
    }
    public function movies(){
    	return view('header.navbar.entertainment.movies.movies');
    }
    public function blueraymovies(){
    	return view('header.navbar.entertainment.movies.blueraydiscs');
    }
    public function tickets(){
    	return view('header.navbar.otherservices.tickets');
    }
    public function egiftvouchers(){
    	return view('header.navbar.otherservices.egiftvouchers');
    }
    public function billpayments(){
    	return view('header.navbar.otherservices.billpayments');
    }
    public function contact(){
    	return view('header.topbar.contact');
    }
    public function termsandconditions(){
    	return view('footer.important.terms&conditions');
    }
    public function privacypolicy(){
    	return view('footer.important.privacypolicy');
    }
    public function loyaltyprogram(){
    	return view('footer.important.loyaltyprogram');
    }
	public function faqs(){
    	return view('footer.important.faqs');
    }
    public function becomeourpartner(){
    	return view('footer.sellers.becomeourpartner');
    }
    public function ourpartners(){
    	return view('footer.sellers.ourpartners');
    }
	public function reportabug(){
    	return view('footer.important.reportabug');
    }
	

}
