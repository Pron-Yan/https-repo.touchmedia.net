<?php

use App\Events\WebsocketDemoEvent;

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
    broadcast(new WebsocketDemoEvent('some data'));

    return view('welcome');
});
Route::get('/lesson/create', 'LessonController@newLesson');
Route::get('/chats', 'ChatsController@index')->name('chats');

Route::get('/messages', 'ChatsController@fetchMessages')->name('messages');
Route::post('/messages', 'ChatsController@sendMessage')->name('chats');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
