<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear-all', function() {
    Artisan::call('cache:clear');
    //Artisan::call('route:cache');
    Artisan::call('view:clear');
    return redirect()->back()->with('success','Successfully Clear Cache facade value.');
});

//Clear Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return redirect()->back()->with('success','Successfully Clear Route cache.');
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return redirect()->back()->with('success','Successfully Clear View cache.');
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return redirect()->back()->with('success','Successfully Clear Config cache.');
});

Auth::routes();



Route::group(['namespace'=>'App\Http\Controllers\frontend'],function(){
    Route::get('/', 'WelcomeController@welcomePage')->name('/');
    Route::get('contact-us', 'WelcomeController@contactUs')->name('contact-us');
    Route::get('about-us', 'WelcomeController@aboutUs')->name('about-us');
    Route::get('teacher-list', 'WelcomeController@allTeacherShow')->name('teacher-list');
    Route::get('notice-list','WelcomeController@allNoticeList')->name('notice-list');
    Route::get('notice-show/{id}','WelcomeController@singleNoticeShow');
    Route::get('gallery-photo','WelcomeController@photoGallery');
    Route::get('gallery-video', 'WelcomeController@videoGallery');
    Route::get('gallery-video-play/{id}', 'WelcomeController@videoPlay')->name('gallery-video-play');
    // Online Class section
    Route::get('online-class', 'WelcomeController@onlineClass')->name('online-class');
    Route::get('class-wise-subject/{id}', 'WelcomeController@classSubject')->name('class-wise-subject');
    Route::get('class-video', 'WelcomeController@videoClass')->name('video-class');
});



Route::group(['namespace'=>'App\Http\Controllers\backend','middleware'=>['auth:sanctum', 'verified']],function(){
    Route::get('/home', 'DashboardController@Dashboard')->name('home');
    Route::get('/dashboard', 'DashboardController@Dashboard')->name('dashboard');
    Route::resource('primary-info','PrimaryInfoController');
    Route::resource('manage-slider','SliderController');
    Route::get('/show-all-slider','SliderController@showAllSlider');
    Route::resource('manage-message','MessageController');
    Route::resource('manage-links', 'ImportantLinksController');
    Route::resource('manage-panel-box', 'PanelBoxController');
    Route::resource('sub-panel-box', 'SubPanelBoxController');
    Route::resource('photo-category', 'PhotoCategoryController');
    Route::resource('photo-gallery', 'PhotoGalleryController');
    Route::resource('video-gallery', 'VideoController');
});
