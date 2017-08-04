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

use App\Article;
use App\News;


Route::get('/', function () {
	$new = News::orderBY('created_at','desc')->paginate(10);
    $article = Article::orderBY('created_at','desc')->paginate(3);
    return view('frontend.apphome',compact('article','new'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/article', 'ArticleController');
Route::get('/article', 'ArticleController@multiblog');
Route::get('/single/{id}', 'tes\ArticleSingleController@single');

Route::resource('admin/new', 'NewsController');

Route::resource('admin/jadwal_ibadah', 'Jadwal_ibadahController');
Route::resource('admin/sbu', 'SbuController');


Route::resource('admin/tabel_pelkat', 'Tabel_pelkatController');

Route::resource('admin/warta_ibadah', 'Warta_ibadahController');
Route::resource('admin/comment', 'CommentController');
Route::resource('admin/album_image', 'Album_imageController');

//route upload dan download data
Route::get('/uploadfile', 'UpdownController@getView');
Route::Post('/insertfile',array('as' =>'insertfile','uses'=>'UpdownController@insertfile'));
Route::get('viewAll', 'UpdownController@downfun');


//route download link nya
Route::get('/masterupload', 'UpdownController@master');
Route::get('/hapusdownload/{id}','UpdownController@hapus');
Route::get('/editdownload/{id}','UpdownController@edit');
Route::post('/updatedownload','UpdownController@update');

