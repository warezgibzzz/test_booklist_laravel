<?php
Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {
        Route::resource('books', 'BooksController');
        Route::resource('authors', 'AuthorsController');
    });
});
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
    Route::auth();

    Route::group(['namespace' => 'Admin'], function () {
        Route::resource('books', 'BooksController');
        Route::resource('authors', 'AuthorsController');
    });
});
