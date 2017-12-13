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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    // your CRUD resources and other admin routes here
    Route::get("/dashboard","Admin\DashboardController@loadViewAction");

    CRUD::resource('book_type','Admin\Book_typeCrudController');
    CRUD::resource('book','Admin\BookCrudController');
    CRUD::resource('reader','Admin\ReaderCrudController');
    CRUD::resource('blog_news','Admin\Blog_newsCrudController');
    CRUD::resource('borrow_detail','Admin\Borrow_detailCrudController');
    CRUD::resource('comment_blog','Admin\Comment_blogCrudController');
    CRUD::resource('comment_book','Admin\Comment_bookCrudController');
    CRUD::resource('repcomment_blog','Admin\Repcomment_blogCrudController');
    CRUD::resource('repcomment_book','Admin\Repcomment_bookCrudController');


    Route::group(['prefix'=>'export-excel'],function (){
        Route::get('book_types','Admin\Book_typeCrudController@ExportExcelAction');
        Route::get('books','Admin\BookCrudController@ExportExcelAction');
        Route::get('readers','Admin\ReaderCrudController@ExportExcelAction');
        Route::get('borrow_details','Admin\Borrow_detailCrudController@ExportExcelAction');
    });

    Route::group(['prefix'=>'import-excel'],function (){
        Route::post('book_types','Admin\Book_typeCrudController@ImportExcelAction');
        Route::post('books','Admin\BookCrudController@ImportExcelAction');
        Route::post('readers','Admin\ReaderCrudController@ImportExcelAction');
    });
});