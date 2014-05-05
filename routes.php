<?php
	Route::group(array('prefix' => 'manage'), function(){

  		Route::get('/', 'Controller@index');

  		Route::resource('videos', 'Controller');

  		Route::resource('tags', 'TagsController');

  		Route::resource('topics', 'TopicsController');

  		Route::get('data/index', array('as' => 'data.index', 'uses' => 'HomeController@data'));
	});
?>
