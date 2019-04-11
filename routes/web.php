<?php

Route::middleware(['auth'])->namespace('Backend')->prefix('backend')->name('backend.')->group(function(){

    Route::get('/',function(){
        return redirect()->route('backend.categories.list');
    });

    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/','CategoriesController@index')->name('list');
        Route::get('/create','CategoriesController@create')->name('create');
        Route::get('/edit/{id}','CategoriesController@edit')->name('edit');
    });

});

Auth::routes();

Route::name('frontend.')->group(function(){
    Route::get('/', 'CategoriesController@index')->name('main');
});
