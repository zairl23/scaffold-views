<?php
	Route::group(array('prefix' => 'manage'), function(){

  		Route::get('/', 'Controller@index');

  		Route::resource('list', 'Controller');

        Route::get('data/index', array('as' => 'data.index', 'uses' => 'HomeController@data'));
	});
?>
