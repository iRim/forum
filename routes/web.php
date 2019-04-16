<?php

Route::pattern('lang','[a-z]{2}');

Route::prefix('/{lang?}')->middleware('CheckLang')->group(function(){

    Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware(['auth','admin'])->group(function(){

        Route::get('/',function(){
            return redirect()->route('backend.categories.list');
        });

        Route::prefix('categories')->name('categories.')->group(function(){
            Route::get('/','CategoriesController@index')->name('list');
            Route::get('/create','CategoriesController@create')->name('create');
            Route::post('/create','CategoriesController@postCreate');
            Route::get('/edit/{id}','CategoriesController@edit')->name('edit');
            Route::post('/edit/{id}','CategoriesController@postEdit');
            Route::delete('/delete/{id}','CategoriesController@delete')->name('delete');
        });

    });

    Auth::routes();

    Route::name('frontend.')->group(function(){
        Route::get('/', 'CategoriesController@index')->name('main');
    });
});
