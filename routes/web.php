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
//     // return view('welcome');
//
//     // 第一種
//     // return view('welcome', [
//     //   'name' => 'Laracasts',
//     //   'age' => 3
//     // ]);
//
//     // 第二種
//     // return view('welcome')->with('name', 'World');
//
//     // 第三種
//     // $name = 'Jeffrey';
//     // return view('welcome', ['name' => $name]);
//
//     // 第四種
//     $name = 'Jeffrey';
//     $age = 31;
//     // return view('welcome', compact('name', 'age'));
//
//     $tasks = [
//       'Go to the store',
//       'Finish my screencast',
//       'Cleen the house'
//     ];
//
//     return view('welcome', compact('name', 'age', 'tasks'));
// });

Route::get('/tasks', function () {
    // $tasks = DB::table('tasks')->get();
    // $tasks = DB::table('tasks')->where('created_at', '>=', '2017-3-3 08:00')->get();
    $tasks = DB::table('tasks')->latest()->get();

    // return $tasks; // JSON
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    // dd($id); // The dd function dumps the given variables and ends execution of the script.

    $task = DB::table('tasks')->find($id);
    // dd($task);

    // return view('tasks/show', compact('tasks'));
    return view('tasks.show', compact('task'));
});
