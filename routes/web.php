<?php
        Route::group(['middleware' => 'Maintenance'], function () {

        Route::get('/','IndexStudentStyle@show');
        Route::get('lang_front_ar','IndexStudentStyle@lang_front_ar');
        Route::get('lang_front_en','IndexStudentStyle@lang_front_en');
        Route::get('login/student','IndexStudentStyle@login_student');
        Route::get('login/teacher','IndexStudentStyle@login_teacher');
        Route::get('Allcourses','IndexStudentStyle@all_courses');
        Route::get('Allstatistics','IndexStudentStyle@all_statistics');
        Route::get('AllPrices','IndexStudentStyle@all_prices');
        Route::get('Allwhyus','IndexStudentStyle@all_whyus');
        Route::get('show/course/{id}','IndexStudentStyle@show_course');

        //---------user_quick register
        Route::post('user/register','IndexStudentStyle@insert_contact'); //fore  register from modal
        Route::post('user_quick/register','IndexStudentStyle@insert_quick');//fore  register from quick register

        //---------student register
        Route::get('student','StudentStyle@show');
        Route::post('student/register','StudentStyle@store');

        //---------teacher register
        Route::get('teacher','TeacherSignupStyle@show');
        Route::post('teacher/register','TeacherSignupStyle@store');

//        --------------------------------start test uplode img

//        --------------------------------end    test uplode img


        });

        Route::get('maintenance', function () {
        if (setting()->status == 'open') {
        return redirect('/');
        }
        return view('style.maintenance');
        });



//        my tools ------------------

// Route::get('pagination', function () {
// //    return php artisan storage:link;
//     Artisan::call(' ');
    
//     return back();
// });
Route::get('storageLink', function () {
//    return php artisan storage:link;
    Artisan::call('storage:link');
    return back();
});
Route::get('config', function () {
//    return  php artisan config:clear ;
    Artisan::call('config:clear');
    return back();
});
Route::get('view', function () {
//    return php artisan view:clear ;
    Artisan::call('view:clear');
    return back();
});
Route::get('cache', function () {
//    return php artisan cache:clear ;
    Artisan::call('cache:clear');
    return back();
});





Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});



Route::get('relodpage', function () {
    return Redirect::back()->with('message',' success');

});
//        my tools ------------------
