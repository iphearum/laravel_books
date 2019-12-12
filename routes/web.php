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

use App\Author;
use App\Book;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    // return view('welcome');
    $book = new Book([
        'title'=>"Book1",
         'author_id'=>'1',
         'description'=>'hello world'
    ]);
    // $book->save();
    // $auth = new App\Author([
    //     'name'=>"web dev",
    //     'place'=>'Phnom Penh'
    // ]);
    // // $auth->save();
    // $author = Author::first();
    // $book = new Book([
    //     'title'=>"Book1",
    //      'description'=>'hello world'
    // ]);

});
