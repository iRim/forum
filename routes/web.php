<?php
use Illuminate\Support\Facades\Route;

request()->setDefaultLocale(config('app.locale'));

Route::pattern('id','\d+');
Route::pattern('category_id','\d+');
Route::pattern('topic_id','\d+');
Route::pattern('page','\d+');
Route::pattern('lang','[a-z]{2}');

Route::get('/',function(){
    return redirect()->route('frontend.categories.list',['lang'=>request()->getLocale()]);
});

Route::prefix('{lang}')->middleware(['CheckLang'])->group(function(){

    Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware(['auth','admin'])->group(function(){

        Route::get('/',function(){
            return redirect()->route('backend.categories.list');
        });

        Route::prefix('categories')->name('categories.')->group(function(){
            Route::get('/','CategoriesController@index')->name('list');
            Route::get('/create','CategoriesController@create')->name('create');
            Route::post('/create','CategoriesController@postCreate');
            Route::get('/edit/{category_id}','CategoriesController@edit')->name('edit');
            Route::post('/edit/{category_id}','CategoriesController@postEdit');
            Route::delete('/delete/{category_id}','CategoriesController@delete')->name('delete');
        });

        Route::prefix('users')->name('users.')->group(function(){
            Route::get('/','UsersController@index')->name('list');
            Route::get('/create','UsersController@create')->name('create');
            Route::post('/create','UsersController@postCreate');
            Route::get('/edit/{id}','UsersController@edit')->name('edit');
            Route::post('/edit/{id}','UsersController@postEdit');
            Route::delete('/delete/{id}','UsersController@delete')->name('delete');
        });

    });

    Route::namespace('Frontend')->name('frontend.')->group(function(){

        Route::post('/search','SearchController@index')->name('search');

        Route::name('categories.')->group(function(){
            Route::get('/', 'CategoriesController@index')->name('list');
            Route::get('/category/{category_id}','CategoriesController@view')->name('view');
        });

        Route::name('topics.')->group(function(){
            Route::get('/category/{category_id}/topic/create','TopicsController@create')->name('create');
            Route::post('/category/{category_id}/topic/create','TopicsController@postCreate');
            Route::get('/category/{category_id}/topic/{topic_id}','TopicsController@view')->name('view');
            Route::get('/category/{category_id}/topic/{topic_id}/page/{page}','TopicsController@view')->name('page');
        });

        Route::name('comments.')->group(function(){
            Route::get('/category/{category_id}/topic/{topic_id}/create','CommentsController@create')->name('create');
            Route::post('/category/{category_id}/topic/{topic_id}/create','CommentsController@postCreate');
        });
    });

    Auth::routes();
});
