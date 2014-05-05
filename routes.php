<?php
	Route::group(array('prefix' => 'manage'), function(){

  		Route::get('/', 'Miao\Person\Routing\VideosController@index');

  		Route::resource('videos', 'Miao\Person\Routing\VideosController');

  		Route::resource('tags', 'Miao\Person\Routing\TagsController');

  		Route::resource('topics', 'Miao\Person\Routing\TopicsController');

  		//Route::resource('videos.comments', 'Miao\Person\Routing\CommentsController');

  		Route::get('data/index', array('as' => 'data.index', 'uses' => 'HomeController@data'));
	});
?>
