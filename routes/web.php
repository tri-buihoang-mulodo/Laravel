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
// Route::get('/', function () {
// 	$name = 'Hoàng Trí';
// 	$age = 22;
// 	$tasks= [
// 		'Go to the store',
// 		'Finish my screencast',
// 		'Clean the house'
// 	];
//     return view('welcome',compact('name','age','tasks'));
// });

// example 05
// Route::get('/tasks', function () {
// 	$tasks = DB::table('tasks')->get();
// 	// return $tasks;
//     return view('tasks.index',compact('tasks'));
// });

// example 06
// Route::get('/tasks/{task}', function ($id) {
// 	// dd($id);
// 	$task = DB::table('tasks')->find($id);	
// 	// return $tasks;
//     return view('tasks.show',compact('task'));
// });

use App\Task;

// example 07
// Route::get('/tasks', function () {
// 	$tasks = Task::all();
//     return view('tasks.index',compact('tasks'));
// });
Route::get('/tasks','TasksController@index');


// example 08
// Route::get('/tasks/{task}', function ($id) {
	
// 	$task = Task::find($id);	
	
//     return view('tasks.show',compact('task'));
// });
Route::get('/tasks/{task}','TasksController@show');

// lesson 10: Layouts and Structure
// Route::get('/','PostsController@index');
// Route::get('/posts/{id}','PostsController@show');

// lesson 11: Form Request Data and CSRF
Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{id}','PostsController@show');

// lesson 16: Add Comments
Route::post('/posts/{post}/comments','CommentsController@store');

// lesson 19: Associating With Users
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');
