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

// example 01:
// Route::get('/', function () {
//     return view('welcome',[
//     	'name' => 'World'
//     ]);
// });

// example 02
// Route::get('/', function () {
// 	$name = 'Hoàng Trí';
//     return view('welcome',['name' => $name]);
// });

// example 03
// Route::get('/', function () {
// 	$name = 'Hoàng Trí';
// 	$age = 22;
//     return view('welcome',compact('name','age'));
// });

// example 04
Route::get('/', function () {
	$name = 'Hoàng Trí';
	$age = 22;
	$tasks= [
		'Go to the store',
		'Finish my screencast',
		'Clean the house'
	];
    return view('welcome',compact('name','age','tasks'));
});