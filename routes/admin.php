<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

   Config::set('auth.defines', 'admin');
   Route::get('login', 'AdminAuth@login');
   Route::post('login', 'AdminAuth@dologin');
   Route::get('forgot/password', 'AdminAuth@forgot_password');
   Route::post('forgot/password', 'AdminAuth@forgot_password_post');
   Route::get('reset/password/{token}', 'AdminAuth@reset_password');
   Route::post('reset/password/{token}', 'AdminAuth@reset_password_final');
   Route::group(['middleware' => 'admin:admin'], function () {

      Route::resource('admin', 'AdminController');
      Route::delete('admin/destroy/all', 'AdminController@multi_delete');

      Route::resource('users', 'UsersController');
      Route::delete('users/destroy/all', 'UsersController@multi_delete');
  // ----------------------------
   Route::resource('whyus', 'WhyusController');
   Route::delete('whyus/destroy/all', 'WhyusController@multi_delete');

   Route::resource('courses', 'CoursesController');
   Route::delete('courses/destroy/all', 'CoursesController@multi_delete');


   Route::resource('videos', 'VideosController');
   Route::delete('videos/destroy/all', 'VideosController@multi_delete');

   Route::resource('teachers', 'TeachersController');
   Route::delete('teachers/destroy/all', 'TeachersController@multi_delete');

   Route::resource('stat', 'StatController');
   Route::delete('stat/destroy/all', 'StatController@multi_delete');

   Route::resource('testimonial', 'TestimonialController');
   Route::delete('testimonial/destroy/all', 'TestimonialController@multi_delete');


   Route::resource('beststudent', 'BestStudentController');
   Route::delete('beststudent/destroy/all', 'BestStudentController@multi_delete');

   Route::resource('halfhour', 'HalfhourController');
   Route::delete('halfhour/destroy/all', 'HalfhourController@multi_delete');

   Route::resource('hour', 'HourController');
   Route::delete('hour/destroy/all', 'HourController@multi_delete');


   Route::resource('footer', 'FooterController');
   Route::delete('footer/destroy/all', 'FooterController@multi_delete');

   Route::resource('slider', 'SliderController');
   Route::delete('slider/destroy/all', 'SliderController@multi_delete');

   Route::resource('slidertext', 'SlidertextController');
   Route::delete('slidertext/destroy/all', 'SlidertextController@multi_delete');

   Route::resource('news', 'NewsAdminController');
   Route::delete('news/destroy/all', 'NewsAdminController@multi_delete');

   Route::resource('contact', 'ContactAdminController');
   Route::delete('contact/destroy/all', 'ContactAdminController@multi_delete');

   Route::resource('quick', 'QuickAdminController');
   Route::delete('quick/destroy/all', 'QuickAdminController@multi_delete');

   Route::resource('student', 'StudentAdminController');
   Route::delete('student/destroy/all', 'StudentAdminController@multi_delete');


   Route::resource('teachersignup', 'TeacherSignupAdminController');
   Route::delete('teachersignup/destroy/all', 'TeacherSignupAdminController@multi_delete');


  


  // ----------------------------

      Route::get('/', function () {
         return view('admin.home');
      });

      Route::get('settings', 'Settings@setting');
      Route::post('settings', 'Settings@setting_save');

      Route::any('logout', 'AdminAuth@logout');
   });

   Route::get('lang/{lang}', function ($lang) {
      session()->has('lang') ? session()->forget('lang') : '';'ar' == $lang ? session()->put('lang', 'ar') : session()->put('lang', 'en');
      return back();
   });
});
