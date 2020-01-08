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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get("register_individual", "IndexController@register_individual");
// Route::get("register_organisation", "IndexController@register_organisation");
// Route::get("register_institution", "IndexController@register_institution");
// Route::get("/", "IndexController@landing_page");


// ** IDISHUM STARTS HERE **


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

// Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
// 	Route::get('/', 'IndexController@index');
	
// 	// Route::post('login', 'IndexController@postLogin');
// 	// Route::get('logout', 'IndexController@logout');
	 
// 	// Route::get('dashboard', 'DashboardController@index');

// 	Route::get("loop", 'DashboardController@index');
	
// 	Route::get('profile', 'AdminController@profile');
// 	Route::post('profile', 'AdminController@updateProfile');	
// 	Route::post('profile_pass', 'AdminController@updatePassword');

	
// 	Route::get('settings', 'SettingsController@settings');	
// 	Route::post('settings', 'SettingsController@settingsUpdates');	
// 	Route::post('homepage_settings', 'SettingsController@homepage_settings');	
// 	Route::post('aboutus_settings', 'SettingsController@aboutus_settings');
// 	Route::post('contactus_settings', 'SettingsController@contactus_settings');
// 	Route::post('terms_of_service', 'SettingsController@terms_of_service');
// 	Route::post('privacy_policy', 'SettingsController@privacy_policy');
// 	Route::post('addthisdisqus', 'SettingsController@addthisdisqus');	
// 	Route::post('headfootupdate', 'SettingsController@headfootupdate');
	  
	
// 	Route::get('users', 'UsersController@userslist');	
// 	Route::get('users/adduser', 'UsersController@addeditUser');	
// 	Route::post('users/adduser', 'UsersController@addnew');	
// 	Route::get('users/adduser/{id}', 'UsersController@editUser');	
// 	Route::get('users/delete/{id}', 'UsersController@delete');
	
	 
//  	Route::get('categories', 'CategoriesController@categories');	
// 	Route::get('categories/addcategory', 'CategoriesController@addeditCategory'); 
// 	Route::get('categories/addcategory/{id}', 'CategoriesController@editCategory');	
// 	Route::post('categories/addcategory', 'CategoriesController@addnew');	
// 	Route::get('categories/delete/{id}', 'CategoriesController@delete');

// // 	Route::get('subcategories', 'SubCategoriesController@subcategories');	
// // 	Route::get('subcategories/addsubcategory', 'SubCategoriesController@addeditSubCategory'); 
// // 	Route::get('subcategories/addsubcategory/{id}', 'SubCategoriesController@editSubCategory');	
// // 	Route::post('subcategories/addsubcategory', 'SubCategoriesController@addnew');	
// // 	Route::get('subcategories/delete/{id}', 'SubCategoriesController@delete');	
// // 	Route::get('ajax_subcategories/{id}', 'SubCategoriesController@ajax_subcategories');

// 	Route::get('locations', 'LocationController@locations');	
// 	Route::get('locations/addlocation', 'LocationController@addeditLocation'); 
// 	Route::get('locations/addlocation/{id}', 'LocationController@editLocation');	
// 	Route::post('locations/addlocation', 'LocationController@addnew');	
// 	Route::get('locations/delete/{id}', 'LocationController@delete');

// 	Route::get('listings', 'ListingsController@listings');	 
// 	Route::get('listings/featured_listing/{id}/{status}', 'ListingsController@featured_listing');
// 	Route::get('listings/status_listing/{id}/{status}', 'ListingsController@status_listing');
// 	Route::get('listings/delete_listing/{id}', 'ListingsController@delete');

	 
// });

// Password reset link request routes...
/*Route::get('admin/password/email', 'Auth\PasswordController@getEmail');
Route::post('admin/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('admin/password/reset', 'Auth\PasswordController@postReset');*/




Route::get('about', 'IndexController@about_us');

Route::get('contact', 'IndexController@contact_us');

Route::post('contact_send', 'IndexController@contact_send');

Route::get('about', 'IndexController@about_us');

Route::get('termsandconditions', 'IndexController@termsandconditions');

Route::get('privacypolicy', 'IndexController@privacypolicy');

// //Social Login
// Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
// Route::get('social/login/callback/{provider}', 'Auth\AuthController@handleProviderCallback');

// Route::get('login', 'IndexController@login');

// Route::post('login', 'IndexController@postLogin');
Route::get('registerpatients', 'IndexController@registerpatients');

Route::get('registerselect', 'IndexController@registerselect');
 
// // Password reset link request routes...
// Route::get('password/email', 'Auth\PasswordController@getEmail');
// Route::post('password/email', 'Auth\PasswordController@postEmail');

// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
// Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('profile', 'IndexController@profile');

Route::post('profile', 'IndexController@editprofile');

Route::get('change_pass', 'IndexController@change_password');

Route::post('change_pass', 'IndexController@edit_password');

// Route::get('logout', 'IndexController@logout');

// Route::get('submit_listing', 'ListingsUserController@submit_listing');

// Route::get('ajax_subcategories/{id}', 'ListingsUserController@ajax_subcategories');

// Route::get('mylisting', 'ListingsUserController@user_listings');

// Route::post('submit_listing', 'ListingsUserController@addnew');

// Route::post('test', 'ListingsUserController@test');

// // Route::get('submit_listing/{id}', 'ListingsUserController@editlisting');

// Route::get('submit_listing/{id}', 'ListingsUserController@editlisting');

// Route::get('delete_listing/{id}', 'ListingsUserController@delete');

// Route::get('listing/galleryimage_delete/{id}', 'ListingsUserController@gallery_image_delete');

// Route::get('listings', 'ListingsUserController@listings');

// Route::get('listings/{listing_slug}/{id}', 'ListingsUserController@single_listing');

// Route::post('submit_review', 'ListingsUserController@submit_review');

// // Route::post('inquiry_send', 'ListingsUserController@inquiry_send');

// Route::post('inquiry_send', 'ListingsUserController@inquiry_send');

// Route::get('{category_slug}/{sub_category_slug}/{sub_cat_id}', 'SubCategoriesController@subcategories');

// Route::get('{category_slug}/{cat_id}', 'CategoriesController@categories');

// Route::post('listings/search', 'ListingsUserController@search_listings');

// Route::post('/loctest', "ListingsUserController@locationtest");

// Route::post('listings/search/filter', 'ListingsUserController@search_filter_listings');

// Route::get('/testuri', 'ListingsUserController@keyterm');

Route::get('membership', 'IndexController@membership');

Route::get('buymembership', 'IndexController@buymembership');

Route::get('buyprime', 'IndexController@buyprime');

Route::get('buybasic', 'IndexController@buybasic');

Route::get('buyelite', 'IndexController@buyelite');

Route::get('buyexclusive', 'IndexController@buyexclusive');

Route::get('patient_num', 'IndexController@patient_data');

Route::get('call', 'IndexController@showCall');

Route::post('process_payment', 'IndexController@process_payment');

Route::get('sms', 'IndexController@sendSMS');

Route::get('sms', 'IndexController@sendSMS');

Route::get('dentalchecker', 'IndexController@dentalchecker');

Route::get('membership_landing', 'IndexController@showmembership_landing');

// Route::put("key/{term}", "ListingsUserController@keyterm");

Route::get("places", "IndexController@places");

Route::get('blog', 'IndexController@blog');

Route::get('frontend', "IndexController@viewStatic");

// Route::get('membership', function(){

// 	// $data = DB::table('listings')->get();
// 	// print_r($data);

// 	return view('pages.membership');
// });

 

/*Route::get('home', ['as' => 'home', 'uses' => function() {
	return view('home');
}]);*/




























// Fittstop View Routes

// Route::get("gympage","IndexController@gympage");
// Route::get("listingpage", "IndexController@listingpage");
// Route::get("/gymtrainer", "IndexController@gymtrainer");
// Route::get("/dashboard", "IndexController@dashboard");

// Route::get("/signup", "IndexController@signup");
// Route::post("/signup", "IndexController@postSignup");
// Route::get("/signin", "IndexController@signin");
// Route::post("/signin", "IndexController@postSignin");

// Route::get('/dashboard', "IndexController@dashboard");
// Route::get("/dashboardlisting", "IndexController@dashlisting");
// Route::get("/admin-dashboard", "IndexController@admindashboard");

/**
 * Fiitstop Admin Routes
 */

// Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	// 	Route::get("/dashboard", "DashboardController@index");
	
	// });
	
	
	// Route::auth();
	
	// Route::get('/signin', 'HomeController@index');






	/**========================================================================== */


	// IDISHUM ROUTE
	Route::get("/", "IndexController@index");
	Route::get("/article", "IndexController@idishum_article");
	Route::get("/idishum-admin", "IndexController@idishum_admin");
	Route::get("/idishum-author-dashboard", "IndexController@idishum_author");
	Route::get("/idishum-review", "IndexController@idishum_post_review");
	Route::get("/idishum-profile", "IndexController@idishum_profile");
	Route::get("/idishum-create-article", "IndexController@idishum_create_article");
	Route::post('/push-created-article', "IndexController@push_created_article");


	Route::get("/idishum-signup", "IndexController@idishum_signup");
	Route::post("/idishum-signup", "IndexController@postidishum_signup");
	
	Route::get("/idishum-admin-category", "IndexController@idishum_category");

	Route::get("/idishum-editor", "IndexController@idishum_editor");
	Route::get("/idishum-editor-profile", "IndexController@idishum_editor_profile");
	
	Route::get("/idishum-post", "IndexController@idishumpost");

	Route::auth();
	Route::get("/test12","IndexController@idishum_author");
	Route::get("/signout", "Auth\LoginController@logout");
	// Route::get('/idishum-author', 'HomeController@index'); //REDIRECTS to sign in if needed
	// Route::get("/idishum-signin", "HomeController@index");



	// Cipher Adventura Routes 
	Route::get("/package", "IndexController@package");
	Route::get("/signup", "IndexController@signup");
	Route::get("/test", "IndexController@test");