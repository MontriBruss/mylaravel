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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'homeController@index');

Route::get('about', function(){

	$bitfumes = ['This ', ' is', ' an', ' key'];

	return view('about')->with(['bitfumes'=>$bitfumes]);//about.blade.php
	

	/* four ways to pass data to the view.

		1.compact
			view('page',compact('bitfumes'));

		2.['']
			view('page',['bitfumes' => $bitfumes]);

		3.withbitfumes
			view('page')->withbitfumes($bitfumes);

		4.with
			view('about')->with(['bitfumes'=>$bitfumes]);	

	*/
});