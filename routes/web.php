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
// password ftp
//ERi+?w9XUWLU

Route::get('/', function () {
    return view('ui.welcome');
});
//Route::get('/Page/{page}', 'PageController@aboutteam');
Route::get('/page/{page}', 'PageController@uipages');

 /*Sign Up routes start*/   
		
// Route::resource('Sign_Up', 'UsersignController');
Route::post('/checkEmail', 'HomeController@checkEmail');
Route::post('/verifyOtp', 'HomeController@verifyOtp');
Route::post('/sendOtp', 'HomeController@sendOtp');
Route::post('/userRegister', 'UserController@create');
		
		
		Route::get('updateUser/{id}/{key}', 'UserController@updateUser');
		Route::get('change_password/{id}', 'UserController@change_password');
		Route::post('update_password', 'UserController@update_password');
	/*Sign Up routes end */   

// pages controller
Route::get('/post', 'BlogController@index')->name('blog');
Route::get('/Posts/{post}', 'BlogController@post');
Route::get('/class2-invidual-signing', 'PageController@invidual_signing')->name('Individual Signing');
Route::get('/class2-invidual-combo', 'PageController@invidual_combo')->name('Individual Combo');
Route::get('/class2-organization-combo', 'PageController@organization_combo')->name('Organization Combo');
Route::get('/class2-organization-signing', 'PageController@organization_signing')->name('Organization Signing');
Route::get('/class2-document-signer', 'PageController@document_signer')->name('Document Signer');
Route::get('/class2-foreign-signing', 'PageController@foreign_signing')->name('Foreign Signing');

Route::get('/class3-invidual-signing', 'PageController@service9')->name('Individual Signing');
Route::get('/class3-invidual-combo', 'PageController@service7')->name('Individual Combo');
Route::get('/class3-organization-combo', 'PageController@service10')->name('Organization Combo');
Route::get('/class3-organization-signing', 'PageController@service11')->name('Organization Signing');
Route::get('/class3-document-signer', 'PageController@service12')->name('Document Signer');
Route::get('/class3-foreign-signing', 'PageController@service13')->name('Foreign Signing');
Route::get('/service7', 'PageController@service7')->name('service7');

Route::get('/dgft', 'PageController@dgft')->name('DGFT');
Route::get('/gst', 'PageController@gst')->name('GST');
Route::get('/e-tender', 'PageController@etender')->name('E-tender');
Route::get('/blog/search', 'PageController@search')->name('search');
Route::get('/demo', 'PageController@demo')->name('demo');
// contact route
Route::get('contact','ContactController@insertform');
Route::post('welcome','ContactController@insert');



Auth::routes();

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
Route::get('my',function(){
	echo date('y-m-d H:i:s a');
	// $exitCode = Artisan::call('cache:clear');
 	// return "Cache is cleared";
});
Route::get('/showForgotForm/{id}','Auth\ForgotPasswordController@showForgotForm');

Route::get('/clear1', function() {
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/clear2', function() {
    Artisan::call('config:clear');
    return "Cache is cleared";
});


Route::get('/clear3', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('/clear4', function() {
    Artisan::call('route:clear');
    return "Cache is cleared";
});

Route::get('/key', function() {
    Artisan::call('key:generate');
    return "Key Generate";
});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::post('/changeForgotPassword', [
  'as' => 'password.forgot',
  'uses' => 'Auth\ForgotPasswordController@changeForgotPassword'
]);
Route::get('404',['as'=>'404','uses'=>'HomeController@errorCode404']);
//Route::get('405',['as'=>'405','uses'=>'HomeController@errorCode405']);


Route::group(['middleware' => ['auth','clearance']], function () { 
	Route::group(['prefix' => 'admin'], function () {
	


	/*contract  routes start*/  
		Route::resource('contractor', 'ContractorController');
		Route::get('updateContractor/{id}/{key}', 'ContractorController@updateContractor');
		Route::get('contractor/{id}/delete', 'ContractorController@destroy');
		Route::get('contractor/viewDetail/{id}/', 'ContractorController@viewDetail');
		Route::post('getContractor', 'ContractorController@getContractor');
		Route::post('checkMobile', 'ContractorController@checkMobile');
		Route::post('checklogin', 'ContractorController@checklogin');


		// Route::get('/service', 'PageController@service7')->name('service7');
		// Services routes
		 
		Route::resource('service', 'Service1Controller');
		Route::resource('service2', 'Service2Controller');
		Route::resource('service3', 'Service3Controller');
		Route::resource('service4', 'Service4Controller');
		Route::resource('service5', 'Service5Controller');
		Route::resource('service6', 'Service6Controller');
		Route::resource('service7', 'Service7Controller');
		Route::resource('service8', 'Service8Controller');
		Route::resource('service9', 'Service9Controller');
		Route::resource('service10', 'Service10Controller');
		Route::resource('service11', 'Service11Controller');
		Route::resource('service12', 'Service12Controller');
		Route::resource('service13', 'Service13Controller');
		
		

// tender routes
		/*Product routes start*/  
		Route::resource('tenders', 'TendersController');
		Route::get('tenders/{id}/delete', 'TendersController@destroy');
		Route::get('updateTender/{id}/{key}', 'TendersController@updateTender');
		Route::get('tenders/viewDetail/{id}/', 'TendersController@viewDetail');
		Route::post('getTender', 'TendersController@getTender');
		

		// Posts routes
    Route::resource('/posts', 'PostController');
    Route::get('posts/{id}/delete','PostController@destroy');

    Route::put('/posts/{post}/publish', 'PostController@publish')->middleware('admin');


    Route::get('notifications', 'NewUserNotificationController@show')->middleware('auth');


// pages routes

    Route::resource('/pages', 'PagesController');
    Route::get('updatepages/{id}/{key}',"PagesController@updatepages");
    Route::get('pages/{id}/delete','PagesController@destroy');

// pagecontent routes
Route::resource('/page_content_manager', 'PageManagerController');

//address routes
Route::get('/address', 'AddressController@edit');
Route::get('updateaddress/{id}/{key}',"AddressController@updateaddress");


    /*contacts request routes*/  
    Route::get('view_contact','viewcontactcontroller@index');

	/*User routes start*/   
		Route::get('users/create/{key}', 'UserController@create');
		Route::get('users/{key}', 'UserController@index');
		Route::resource('users', 'UserController');
		
		Route::get('updateUser/{id}/{key}', 'UserController@updateUser');
		Route::get('change_password/{id}', 'UserController@change_password');
		Route::post('update_password', 'UserController@update_password');
	/*user routes end */            
  
	Route::get('dashboard', 'HomeController@dashboard');
	Route::get('dashboard1', 'HomeController@dashboard1');
	Route::get('security', 'HomeController@security');
	Route::post('profileupdate', 'HomeController@profileupdate');
	Route::get('websitesetting', 'WebsiteController@index');
	Route::post('websettingupd', 'WebsiteController@websettingupd');
	Route::get('screenlock/{currtime}/{id}/{randnum}', 'HomeController@screenlock');




	Route::get('export', 'ImportExportController@export')->name('export');
Route::get('importExportTenders', 'ImportExportController@importExportView');
Route::post('import', 'ImportExportController@import')->name('import');
	
	Route::resource('roles', 'RoleController');
	Route::resource('permissions', 'PermissionController');
	Route::resource('posts', 'PostController');

	//Route::get('deactiveClient', 'ClientController@deactiveClient');
	Route::get('deactiveClient', 'ClientController@deactiveClient');
	Route::resource('client', 'ClientController');




Route::get('/logged-in-devices', 'LoggedInDeviceManagerController@index')
		->name('admin.device_list')
		->middleware('auth');

Route::get('/logout/all', 'LoggedInDeviceManagerController@logoutAllDevices')
		->name('logged-in-devices.logoutAll')
		->middleware('auth');

Route::get('/logout/{device_id}', 'LoggedInDeviceManagerController@logoutDevice')
		->name('logged-in-devices.logoutSpecific')
		->middleware('auth');

});
//--------------------Forntend Root-------------------------/////
	
	

});



Route::get('error/pageNotFound',['as'=>'error/pageNotFound','uses'=>'StudentController@errorCode404']);



