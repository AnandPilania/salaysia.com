<?php

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
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	Route::get('/', 'IndexController@index');
	
	Route::post('login', 'IndexController@postLogin');
	Route::get('logout', 'IndexController@logout');
	 
	Route::get('dashboard', 'DashboardController@index');
	
	Route::get('profile', 'AdminController@profile');	
	Route::post('profile', 'AdminController@updateProfile');	
	Route::post('profile_pass', 'AdminController@updatePassword');

	
	Route::get('settings', 'SettingsController@settings');	
	Route::post('settings', 'SettingsController@settingsUpdates');	
	Route::post('homepage_settings', 'SettingsController@homepage_settings');	
	Route::post('aboutus_settings', 'SettingsController@aboutus_settings');
	Route::post('contactus_settings', 'SettingsController@contactus_settings');
	Route::post('terms_of_service', 'SettingsController@terms_of_service');
	Route::post('privacy_policy', 'SettingsController@privacy_policy');
        Route::post('servicesetting', 'SettingsController@service_setting');
	Route::post('addthisdisqus', 'SettingsController@addthisdisqus');	
	Route::post('headfootupdate', 'SettingsController@headfootupdate');
	  
	
	Route::get('users', 'UsersController@userslist');	
	Route::get('users/adduser', 'UsersController@addeditUser');	
	Route::post('users/adduser', 'UsersController@addnew');	
	Route::get('users/adduser/{id}', 'UsersController@editUser');	
	Route::get('users/delete/{id}', 'UsersController@delete');	
        Route::get('users/permissions/{id}', 'UsersController@permissions');	
        Route::post('users/givepermission', 'UsersController@give_permissions');	
	Route::post('users/export', 'UsersController@exportusers');	
	
	 
 	Route::get('categories', 'CategoriesController@categories');	
	Route::post('categories/addcategory', 'CategoriesController@addnew');	
	Route::get('categories/addcategory', 'CategoriesController@addeditCategory'); 
	Route::get('categories/addcategory/{id}', 'CategoriesController@editCategory');	
	Route::get('categories/delete/{id}', 'CategoriesController@delete');

	Route::get('subcategories', 'SubCategoriesController@subcategories');	
	Route::get('subcategories/addsubcategory', 'SubCategoriesController@addeditSubCategory'); 
	Route::get('subcategories/addsubcategory/{id}', 'SubCategoriesController@editSubCategory');	
	Route::post('subcategories/addsubcategory', 'SubCategoriesController@addnew');	
	Route::get('subcategories/delete/{id}', 'SubCategoriesController@delete');	
	Route::get('ajax_subcategories/{id}', 'SubCategoriesController@ajax_subcategories');

        Route::get('durations', 'DurationsController@subcategories');	
	Route::get('durations/addduration', 'DurationsController@addeditSubCategory'); 
	Route::get('durations/addduration/{id}', 'DurationsController@editSubCategory');	
	Route::post('durations/addduration', 'DurationsController@addnew');	
	Route::get('durations/delete/{id}', 'DurationsController@delete');	
	

	Route::get('locations', 'LocationController@locations');	
	Route::get('locations/addlocation', 'LocationController@addeditLocation'); 
	Route::get('locations/addlocation/{id}', 'LocationController@editLocation');	
	Route::post('locations/addlocation', 'LocationController@addnew');	
	Route::get('locations/delete/{id}', 'LocationController@delete');

	Route::get('universities', 'ListingsController@universities');
	Route::get('universities/featured_listing/{id}/{status}', 'ListingsController@featured_listing');
	Route::get('universities/status_listing/{id}/{status}', 'ListingsController@status_listing');
	Route::get('universities/delete_listing/{id}', 'ListingsController@delete');
        
        Route::get('testimonials', 'TestimonialsController@testimonials');
        Route::get('testimonials/status_testimonials/{id}/{status}', 'TestimonialsController@status_listing');
	Route::get('testimonials/delete_testimonial/{id}', 'TestimonialsController@delete');
        
	Route::get('countries', 'CountryController@countries');
	Route::get('countries/status_countries/{id}/{status}', 'CountryController@status_listing');
	Route::get('countries/delete_country/{id}', 'CountryController@delete');
	
	Route::get('cities', 'CityController@index');	
	Route::get('cities/add', 'CityController@add'); 
	Route::get('cities/edit/{id}', 'CityController@edit');	
	Route::post('cities/add', 'CityController@addnew');	
	Route::get('cities/delete/{id}', 'CityController@delete');	
	Route::get('ajax_cities/{id}', 'CityController@ajax_cities');

	Route::post('specialization', 'SpecializationController@addnew');
	Route::get('specialization', 'SpecializationController@index');
	Route::get('specialization/add/', 'SpecializationController@add');
	Route::get('specialization/edit/{id}', 'SpecializationController@edit');
	Route::get('specialization/delete/{id}', 'SpecializationController@delete');

	Route::post('ranking', 'RankingController@addnew');
	Route::get('ranking', 'RankingController@index');
	Route::get('ranking/add', 'RankingController@add');
	Route::get('ranking/edit/{id}', 'RankingController@edit');
	Route::get('ranking/delete/{id}', 'RankingController@delete');
	Route::get('ajax_ranking/{id}', 'RankingController@ajax_ranking');

	Route::post('ranktype', 'RanktypeController@addnew');
	Route::get('ranktype', 'RanktypeController@index');
	Route::get('ranktype/add', 'RanktypeController@add');
	Route::get('ranktype/edit/{id}', 'RanktypeController@edit');
	Route::get('ranktype/delete/{id}', 'RanktypeController@delete');

	
	Route::post('fees', 'FeesController@addnew');
	Route::get('fees', 'FeesController@index');
	Route::get('fees/add', 'FeesController@add');
	Route::get('fees/edit/{id}', 'FeesController@edit');
	Route::get('fees/delete/{id}', 'FeesController@delete');
	
	Route::post('intake', 'IntakeController@addnew');
	Route::get('intake', 'IntakeController@index');
	Route::get('intake/add', 'IntakeController@add');
	Route::get('intake/edit/{id}', 'IntakeController@edit');
	Route::get('intake/delete/{id}', 'IntakeController@delete');
	
	Route::post('feescycle', 'FeescycleController@addnew');
	Route::get('feescycle', 'FeescycleController@index');
	Route::get('feescycle/add', 'FeescycleController@add');
	Route::get('feescycle/edit/{id}', 'FeescycleController@edit');
	Route::get('feescycle/delete/{id}', 'FeescycleController@delete');
	
	/*Route::post('subject', 'SubjectController@addnew');
	Route::get('subject', 'SubjectController@index');
	Route::get('subject/add', 'SubjectController@add');
	Route::get('subject/edit/{id}', 'SubjectController@edit');
	Route::get('subject/delete/{id}', 'SubjectController@delete');*/
	
	Route::post('menu', 'MenuBarController@addnew');
	Route::get('menu', 'MenuBarController@index');
	Route::get('menu/add', 'MenuBarController@add');
	Route::get('menu/edit/{id}', 'MenuBarController@edit');
	Route::get('menu/delete/{id}', 'MenuBarController@delete');
	
	
        Route::get('brands','BrandsController@brands');
        Route::get('brands/status_brands/{id}/{status}', 'BrandsController@status_listing');
	Route::get('brands/delete_brand/{id}', 'BrandsController@delete');
      
        Route::get('courses', 'CoursesController@courses');
        Route::get('courses/status_courses/{id}/{status}', 'CoursesController@status_listing');
	Route::get('courses/delete_course/{id}', 'CoursesController@delete');
        Route::get('courses/featured_listing/{id}/{status}', 'CoursesController@featured_listing');
       // show new post form
	Route::get('new-service','PostController@create');
	// save new post
	Route::post('new-post','PostController@store');
       // show posts 
        Route::get('our_services','PostController@blog');
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	// update post
	Route::post('update','PostController@update');
        // delete post
	Route::get('delete/{id}','PostController@destroy');
	
	Route::get('inquiries','InquiriesController@index');
	Route::get('inquiries/view/{id}','InquiriesController@ViewDetail');
	Route::get('inquiries/export','InquiriesController@exportdata');

	 
});

// Password reset link request routes...
/*Route::get('admin/password/email', 'Auth\PasswordController@getEmail');
Route::post('admin/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('admin/password/reset', 'Auth\PasswordController@postReset');*/


Route::get('/', 'IndexController@index');

Route::get('about', 'IndexController@about_us');

Route::get('contact', 'IndexController@contact_us');

Route::post('contact_send', 'IndexController@contact_send');

Route::get('about', 'IndexController@about_us');

Route::get('termsandconditions', 'IndexController@termsandconditions');



Route::get('privacypolicy', 'IndexController@privacypolicy');
Route::get('blog','PostController@blog');
Route::get('blog/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
// add comment on post
Route::post('comment/add','CommentController@store');
//Social Login
Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/login/callback/{provider}', 'Auth\AuthController@handleProviderCallback');

Route::get('login', 'IndexController@login');

Route::post('login', 'IndexController@postLogin');

Route::get('register', 'IndexController@register');

Route::post('register', 'IndexController@postRegister');
 
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('dashboard', 'IndexController@dashboard');

Route::get('profile', 'IndexController@profile');

Route::post('profile', 'IndexController@editprofile');

Route::get('change_pass', 'IndexController@change_password');

Route::post('change_pass', 'IndexController@edit_password');

Route::get('logout', 'IndexController@logout');

Route::get('add_product', 'ListingsUserController@add_product');
Route::get('add_my_university', 'ListingsUserController@add_university');
Route::get('submit_university', 'ListingsUserController@submit_listing');
Route::get('submit_front_university', 'ListingsUserController@submit_listingfront');
Route::get('ajax_universities/{id}', 'ListingsUserController@ajax_universities');
Route::get('ajax_featureuniversities/{id}', 'ListingsUserController@ajax_featureuniversities');
Route::get('ajax_sortfeatureuniversities/{id}', 'ListingsUserController@ajax_sortfeatureuniversities');
Route::get('ajax_sortuniversities/{id}', 'ListingsUserController@ajax_sortuniversities');
Route::get('ajax_featurecourses/{id}', 'CoursesController@ajax_featurecourses');
Route::get('ajax_sortfeaturecourses/{id}', 'CoursesController@ajax_sortfeaturecourses');

Route::get('ajax_favouriteuniversities/{id}', 'IndexController@ajax_favouriteuniversities');
Route::get('ajax_favouritecourses/{id}', 'IndexController@ajax_favouritecourses');

Route::get('my_university', 'ListingsUserController@user_listings');

Route::post('submit_university', 'ListingsUserController@addnew');
Route::post('submit_front_university', 'ListingsUserController@addnewfront');
Route::get('submit_university/{id}', 'ListingsUserController@editlisting');
Route::get('submit_front_university/{id}', 'ListingsUserController@editlistingfront');
Route::get('/add_myusers/{id}', 'IndexController@edit_myuser');
Route::get('delete_user/{id}', 'IndexController@delete_user');
Route::get('add_university/{id}', 'ListingsUserController@editproduct');
Route::get('delete_listing/{id}', 'ListingsUserController@delete');
Route::get('/edit_front_course/{id}','CoursesController@edit_front_course');
Route::get('/delete_front_course/{id}','CoursesController@delete_front_course');

Route::post('submit_testimonial', 'TestimonialsController@addnew');
Route::get('submit_testimonial/{id}', 'TestimonialsController@edittestimonial');
Route::get('add_testimonial/{id}', 'TestimonialsController@edittestimonial');
Route::get('add_testimonial', 'TestimonialsController@add_testimonial');

Route::post('submit_country', 'CountryController@addnew');
Route::get('submit_country/{id}', 'CountryController@editcountry');
Route::get('add_country/{id}', 'CountryController@editcountry');
Route::get('add_country', 'CountryController@add_country');
Route::get('countries/{listing_slug}/{id}', 'CountryController@single_country');

Route::post('submit_brand', 'BrandsController@addnew');
Route::get('submit_brand/{id}', 'BrandsController@editbrand');
Route::get('add_brand/{id}', 'BrandsController@editbrand');
Route::get('add_brand', 'BrandsController@add_brand');

Route::post('submit_course', 'CoursesController@addnew');
Route::get('submit_course/{id}', 'CoursesController@editcourse');
Route::get('add_course/{id}', 'CoursesController@editcourse');
Route::get('add_course', 'CoursesController@add_course');
Route::get('courses/{listing_slug}/{id}', 'CoursesController@single_course');
Route::get('listing/galleryimage_delete/{id}', 'ListingsUserController@gallery_image_delete');


Route::get('universities', 'ListingsUserController@listings');
Route::get('universities/{listing_slug}/{id}', 'ListingsUserController@single_listing');
Route::post('submit_review', 'ListingsUserController@submit_review');
Route::post('inquiry_send', 'ListingsUserController@inquiry_send');
Route::get('{category_slug}/{sub_category_slug}/{sub_cat_id}', 'SubCategoriesController@subcategories');
Route::get('{category_slug}/{cat_id}', 'CategoriesController@categories');
Route::post('listings/search', 'ListingsUserController@search_listings');

Route::get('searchbysubject', 'ListingsUserController@search_by_subject');
Route::get('searchbydestination', 'ListingsUserController@search_by_destination');
Route::get('searchbyuniversity', 'ListingsUserController@search_by_university');


Route::get('livesearch', 'ListingsUserController@live_search');
Route::get('university/{id}', 'ListingsUserController@university');

Route::post('listings/search/filter', 'ListingsUserController@search_filter_listings');
Route::get('/services',function(){return view('pages.service'); });
Route::get('/downloads',function(){return view('pages.download'); });
Route::get('/feature_universities','ListingsUserController@showfeature_university');


Route::get('/my_favourite_universities','ListingsUserController@showffavourite_university');
Route::get('/my_favourite_courses','ListingsUserController@showffavourite_courses');

Route::post('/delete_favourite_university','IndexController@delete_favourite_uni');
Route::post('/delete_favourite_course','IndexController@delete_favorite_course');

Route::get('/feature_courses','CoursesController@showfeature_course');

Route::get('/add_course_front','CoursesController@add_front_course');
Route::post('/submit_front_Course','CoursesController@addnewcourse_front');
Route::get('/my_courses','CoursesController@mycourse_front');


Route::get('/inquiries',function(){return view('admin.pages.inquries'); });
Route::get('/add_myusers','IndexController@addeditUser');
Route::post('/myuser_register', 'IndexController@myuser_postRegister');
Route::get('/myuser_listing', 'IndexController@show_myuser_listing');

Route::get('/myinquiries', 'IndexController@show_myuser_inquiries_listing');
Route::get('/exportmysite/{id}', 'IndexController@exportmysite');
/*Route::get('home', ['as' => 'home', 'uses' => function() {
	return view('home');
}]);*/


 
