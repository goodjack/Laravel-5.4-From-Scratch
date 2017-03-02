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

Route::get('/', function () {
    // return view('welcome');

    // 第一種
    // return view('welcome', [
    //   'name' => 'Laracasts',
    //   'age' => 3
    // ]);

    // 第二種
    // return view('welcome')->with('name', 'World');

    // 第三種
    // $name = 'Jeffrey';
    // return view('welcome', ['name' => $name]);

    // 第四種
    $name = 'Jeffrey';
    $age = 31;
    // return view('welcome', compact('name', 'age'));

    $tasks = [
      'Go to the store',
      'Finish my screencast',
      'Cleen the house'
    ];

    return view('welcome', compact('name', 'age', 'tasks'));
});
