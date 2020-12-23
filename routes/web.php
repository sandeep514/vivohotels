<?php

    use Illuminate\Support\Facades\Route;

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
    Route::group(['namespace' => 'App\Http\Controllers'], function () {
        Route::get('/', ['as' => '/', 'uses' => 'Controller@index']);
        Route::get('about', ['as' => 'about', 'uses' => 'Controller@about']);
        Route::get('blog', ['as' => 'blog', 'uses' => 'Controller@blog']);
        Route::get('contact-us', ['as' => 'contactUs', 'uses' => 'Controller@contactUs']);
        Route::get('destinations', ['as' => 'ourRooms', 'uses' => 'DestinationControler@index']);
        Route::get('room/details/{id}', ['as' => 'room.details', 'uses' => 'DestinationControler@roomDetails']);
        Route::get('restaurant', ['as' => 'restaurant', 'uses' => 'Controller@restaurant']);
        Route::get('why-us', ['as' => 'why.us', 'uses' => 'Controller@WhyUs']);
        Route::get('partner-with-us', ['as' => 'partner.with.us', 'uses' => 'Controller@partnerWithUs']);

        // contact us
        Route::post('contact/us', ['as' => 'contact.us', 'uses' => 'ContactControler@submitContactUs']);

    });

    Route::group(['prefix' => 'administrator', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\admin'],
        function () {
            /////////
            // FAQ //
            /////////
            Route::get('create/faq', ['as' => 'create.faq', 'uses' => 'FAQController@index']);
            Route::post('submit/faq', ['as' => 'submit.faq', 'uses' => 'FAQController@submitFAQ']);
            Route::get('delete/faq/question/{id}',
                ['as' => 'delete.faq.question', 'uses' => 'FAQController@deleteFAqQuestion']);

            /////////
            // amenities //
            /////////
            Route::get('create/amenities', ['as' => 'create.amenities', 'uses' => 'AmenitiesController@index']);
            Route::post('submit/amenities',
                ['as' => 'submit.amenities', 'uses' => 'AmenitiesController@submitAmenities']);


            //login super admin
            Route::get('/', ['as' => 'signin', 'uses' => 'MainController@signin']);
            Route::POST('loginuser', ['as' => 'login.user', 'uses' => 'AuthControler@loginuser']);
            // Route::group( ['middleware' => 'admin'] , function(){

            // dashboard
            Route::get('dashboard', ['as' => 'index', 'uses' => 'MainController@index']);

            // contact us
            Route::get('contact', ['as' => 'contactus', 'uses' => 'ContactControler@index']);

            // partner with us
            Route::get('add/new/partner', ['as' => 'add.new.partner', 'uses' => 'PropertyController@index']);
            Route::post('submit/new/partner', ['as' => 'submit.new.property', 'uses' => 'PropertyController@create']);
            Route::get('list/property', ['as' => 'list.property', 'uses' => 'PropertyController@listProperty']);
            Route::get('property/change/status/{id}',
                ['as' => 'property.change.status', 'uses' => 'PropertyController@changeStatus']);

            // } );
        });

    Route::group(['prefix' => 'property', 'as' => 'property.', 'namespace' => 'App\Http\Controllers\property'],
        function () {

            Route::get('login', ['as' => 'login.form', 'uses' => 'LoginController@index']);
            Route::get('logout', ['as' => 'logout.form', 'uses' => 'LoginController@logoutUser']);
            Route::post('user/login', ['as' => 'submit.login', 'uses' => 'LoginController@loginUser']);

            Route::get('/dashboard', ['as' => 'index', 'uses' => 'MainController@index']);
            Route::get('list', ['as' => 'list.property', 'uses' => 'PropertyController@listProperty']);
            Route::post('submit', ['as' => 'submit.property', 'uses' => 'PropertyController@submitProperty']);

            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PropertyController@editProperty']);
            Route::get('create', ['as' => 'create.property', 'uses' => 'PropertyController@createProperty']);
            Route::get('delete/other/images/{propertyId}/{index}',
                ['as' => 'delete.other.images', 'uses' => 'PropertyController@deleteOtherImages']);
        });
