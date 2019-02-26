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
Route::get('qr-code', function () 
{
  return QRCode::text('QR Code Generator for Laravel!')->png();    
});

Route::get('/', function () {
    return view('student.menupage');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/feedback','FeedbackController@index')->name('feedbackView');
Route::post('/feedback','FeedbackController@create')->name('feedbackPost');

Route::get('/registration','RegistrationController@index')->name('registrationView');
Route::post('/registration','RegistrationController@create')->name('registrationPost');

Route::get('/menupage','TodaySpecialController@index')->name('menupageView');
Route::post('/menupage','TodaySpecialController@create')->name('menupagePost');

Route::post('/registration/upload','RegistrationController@upload')->name('uploadimage');

