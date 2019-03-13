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


Route::group(['prefix' => 'admin'], function () {
    Route::get('/requests','Admin\HomepageController@requests')->name('adminStudentRequest');
    Route::get('/','Admin\HomepageController@home')->name('adminHome');
    Route::get('/qrscan','Admin\HomepageController@qrscan')->name('adminQrScan');

    Route::post('/student/attendance', 'Admin\AttendanceController@create');

    Route::get('/request/approve/{id}','Admin\RequestController@approve');
    Route::get('/request/delete/{id}','Admin\RequestController@delete');
});

Route::group(['prefix' => 'ajax'], function () {
    Route::post('/getStudent/email','AjaxController@getStudentByEmail');
});
Route::get('/', function () {
    return view('student.menupage');
});

Route::get('/feedback','FeedbackController@index')->name('feedbackView');
Route::post('/feedback','FeedbackController@create')->name('feedbackPost');

Route::get('/registration','RegistrationController@index')->name('registrationView');
Route::post('/registration','RegistrationController@create')->name('registrationPost');

Route::get('/menupage','TodaySpecialController@index')->name('menupageView');
Route::post('/menupage','TodaySpecialController@create')->name('menupagePost');

Route::post('/registration/upload','RegistrationController@upload')->name('uploadimage');

Route::get('/test', function () {
    return view('admin.home');
});

Auth::routes();

Route::get('/home', 'HomepageController@homepage')->name('home');
