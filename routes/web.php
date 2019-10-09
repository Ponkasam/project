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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'role:admin,teacher,student'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('logout', 'Auth\LoginController@logout');
});

Route::middleware(['auth','role:admin'])->group(function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin','admin\AdminController@index');
    Route::get('/admin/list','admin\AdminController@listprofile');
    Route::get('/admin/create', 'admin\AdminController@create');
    Route::post('/admin', 'admin\AdminController@store');
    Route::get('/admin/{id}', 'admin\AdminController@show');
    Route::get('/admin/{id}/edit','admin\AdminController@edit');
    Route::put('/admin/{id}', 'admin\AdminController@update');
    Route::delete('/admin/{id}','admin\AdminController@destroy');

    Route::get('/subject', 'admin\SubjectController@index');
    Route::get('/subject/create', 'admin\SubjectController@create');
    Route::post('/subject', 'admin\SubjectController@store');
    Route::get('/subject/{id}', 'admin\SubjectController@show');
    Route::get('/subject/{id}/edit', 'admin\SubjectController@edit');
    Route::put('/subject/{id}', 'admin\SubjectController@update');
    Route::delete('/subject/{id}', 'admin\SubjectController@destroy');

    Route::get('/all', 'admin\AllCommentController@index');
    Route::delete('/all/{id}','admin\AllCommentController@destroy');
});

Route::middleware(['auth', 'role:teacher'])->group(function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/teacher', 'teacher\TeacherController@index');
    Route::get('/teacher/{id}/edit', 'teacher\TeacherController@edit');
    Route::put('/teacher/{id}', 'teacher\TeacherController@update');

    Route::get('/comment','teacher\CommentController@index');
    Route::post('/comment','teacher\CommentController@store');
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student', 'student\StudentController@index');
    Route::get('/student/{id}/edit', 'student\StudentController@edit');
    Route::put('/student/{id}', 'student\StudentController@update');

    Route::get('/reserve','student\ReservaController@index');
    Route::get('/reserve/{id}/create','student\ReservaController@create_reserve_subject');
    //Route::get('/reserve/create','student\ReservaController@create'); ไม่ได้ใช้
    Route::post('/reserve','student\ReservaController@store');
    Route::get('/reserve/show','student\ReservaController@show_subject_by_stud_id');
    //Route::get('/reserve/{id}','student\ReservaController@show');
    Route::get('/reserve/{id}/edit','student\ReservaController@edit');
    Route::put('/reserve/{id}','student\ReservaController@update');
    Route::delete('/reserve/{id}','student\ReservaController@destroy');

    Route::get('/suggestion', 'student\SuggestionController@index');
    Route::post('/suggestion', 'student\SuggestionController@store');
});