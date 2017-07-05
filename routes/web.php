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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/article', 'ArticleController');
Route::resource('admin/jadwal_ibadah', 'Jadwal_ibadahController');
Route::resource('admin/new', 'NewsController');
Route::resource('admin/sbu', 'SbuController');

//upload dan download data
Route::get('/uploadfile', 'UpdownController@getView');
Route::Post('/insertfile',array('as' =>'insertfile','uses'=>'UpdownController@insertfile'));
Route::get('viewAll', 'UpdownController@downfun');

//Route::resource('admin/pelkats', 'Tabel_pelkatController');

Route::resource('admin/warta_ibadah', 'Warta_ibadahController');
Route::resource('admin/comment', 'CommentController');
Route::resource('admin/album_image', 'Album_imageController');
