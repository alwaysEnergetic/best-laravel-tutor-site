 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//PAGES and FORMS

//payment form paypal and stripe route
Route::get('/paypal', 'PaymentController@index');

// route for processing payment
Route::post('/paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('/status', 'PaymentController@getPaymentStatus');

Route::get('/payment_select', 'PaymentController@payment_select');

Route::post('/payment_select1', 'PaymentController@payment_select_1');


Route::get('/stripe', 'StripeController@index');
Route::post('/stripe', 'StripeController@stripePost');


//end of payment

 
Route::get('/', 'ProcessController@indexlogin');

//show view homepage form
Route::get('/home', 'ProcessController@homepage');

Route::get('/register_tutor', 'ProcessController@register_tutor');

Route::get('/store', 'ProcessController@store');
//PROCESS CONTROLLER
//insert data
Route::post('/home', 'ProcessController@store');

//delete data
Route::post('/view', 'ProcessController@destroy');

//List all data 
Route::get('/view', 'ProcessController@index');

//search data
Route::get('/search', 'ProcessController@show');
Route::get('/dynamic_search', 'ProcessController@dynamic_search');
Route::get('/general_search', 'ProcessController@general_search');
// Route::get('/dynamic_search', [ProcessController::class, 'dynamic_search']);

// edit and update data
Route::get('/edit/{id}', 'ProcessController@edit');

Route::post('/update', 'ProcessController@update');

// Auth routes, login, register, forgot pass
Auth::routes();
