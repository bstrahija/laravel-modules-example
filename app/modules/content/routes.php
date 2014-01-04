<?php

// Content routes
Route::get('/',            array('as' =>'home',     'uses' => 'App\Modules\Content\Controllers\ContentController@getHome'));
Route::get('page/{slug}',  array('as' =>'page',     'uses' => 'App\Modules\Content\Controllers\ContentController@getPage'));
Route::get('blog',         array('as' =>'blog',     'uses' => 'App\Modules\Content\Controllers\ContentController@getArticleList'));
Route::get('blog/{slug}',  array('as' =>'article',  'uses' => 'App\Modules\Content\Controllers\ContentController@getArticle'));
Route::get('products',     array('as' =>'products', 'uses' => 'App\Modules\Content\Controllers\ContentController@getProductList'));
Route::get('product/{id}', array('as' =>'product',  'uses' => 'App\Modules\Content\Controllers\ContentController@getProduct'));

// Custom 404 page
App::missing(function($exception)
{
    return Response::view('content::404', array(), 404);
});
