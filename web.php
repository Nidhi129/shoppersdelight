<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/app', 'MainController@indexes');
Route::get('/', 'MainController@index')->name('home.index');
Route::get('/blueraydiscs/{blueraydisc}', 'BlueraydiscController@show')->name('blueraydisc.show');
Route::get('/blueraydiscs', 'BlueraydiscController@index')->name('blueraydisc.index');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

Route::get('/carts', 'CartController@index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{blueraydisc}', 'CartController@destroy')->name('cart.destroy');
Route::get('/empty', function(){
		Cart::destroy();
});


Route::get('/login', 'UserController@index')->name('login');
Route::get('/register', 'UserController@index')->name('register');
Route::post('/register', 'UserController@register');


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');



Route::resource('checkout', 'OrderController');
Route::post('paypal', 'OrderController@paypal')->name('checkout.paypal');
Route::get('returnPaypal', 'OrderController@returnPaypal')->name('process.paypal');
Route::get('cancelPaypal', 'OrderController@cancelPaypal')->name('cancel.paypal');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'users.', 'prefix' => 'users'], function () {
	Route::get('/home', 'MainController@index')->name('home');
});

Route::get('/postes', function(){
	$posts=\App\Product::all();
	return view('posts', compact('posts'));
});

Route::group(['as' => 'products.', 'prefix' => 'products'], function () {
	Route::get('/', 'ProductController@show')->name('all');
	Route::get('/{product}', 'ProductController@single')->name('single');
	Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('addToCart');
});


Route::group(['as' => 'cart.', 'prefix' => 'cart'], function () {
	Route::get('/', 'ProductController@cart')->name('all');
	Route::post('/remove/{product}', 'ProductController@removeProduct')->name('remove');
	Route::post('/update/{product}', 'ProductController@updateProduct')->name('update');
});


Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@dashboard');
	Route::get('category/{category}/remove', 'CategoryController@remove')->name('category.remove');
	Route::get('category/trash', 'CategoryController@trash')->name('category.trash');
	Route::get('category/recover/{id}', 'CategoryController@recoverCat')->name('category.recover');
	Route::get('product/{product}/remove', 'ProductController@remove')->name('product.remove');
	Route::get('product/trash', 'ProductController@trash')->name('product.trash');
	Route::get('product/recover/{id}', 'ProductController@recoverProduct')->name('product.recover');
	Route::view('product/extras', 'admin.partials.extras')->name('product.extras');

	
	Route::get('profile/{profile}/remove', 'ProfileController@remove')->name('profile.remove');
	Route::get('profile/trash', 'ProfileController@trash')->name('profile.trash');
	Route::get('profile/recover/{id}', 'ProfileController@recoverProduct')->name('profile.recover');
	Route::view('profile/roles', 'admin.partials.extras')->name('profile.extras');
	Route::get('profile/states/{id?}', 'ProfileController@getStates')->name('profile.states');
	Route::get('profile/cities/{id?}', 'ProfileController@getCities')->name('profile.cities');
	Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');
	Route::resource('profile', 'ProfileController');
});
Route::get('bydate', function(){
	return \App\User::where('created_at','=', '2019-03-22 12:50:23')->get();
});



Route::get('/main', function(){
	return view('layouts.main');
});


Route::get('/contact', 'MyController@contact')->name('contact');
Route::get('/billpayments', 'MyController@billpayments')->name('billpayments');
Route::get('/mobileaccessories', 'MyController@mobileaccessories')->name('mobileaccessories');
Route::get('/egiftvouchers', 'MyController@egiftvouchers')->name('egiftvouchers');
Route::get('/tickets', 'MyController@tickets')->name('tickets');
Route::get('/movies', 'MyController@movies')->name('movies');
Route::get('/blueraymovies', 'MyController@blueraymovies')->name('blueraymovies');


Route::get('/faqs', 'MyController@faqs')->name('faqs');
Route::get('/loyaltyprogram', 'MyController@loyaltyprogram')->name('loyaltyprogram');
Route::get('/privacypolicy', 'MyController@privacypolicy')->name('privacypolicy');
Route::get('/reportabug', 'MyController@reportabug')->name('reportabug');
Route::get('/termsandconditions', 'MyController@termsandconditions')->name('termsandconditions');
Route::get('/becomeourpartner', 'MyController@becomeourpartner')->name('becomeourpartner');
Route::get('/ourpartners', 'MyController@ourpartners')->name('ourpartners');




