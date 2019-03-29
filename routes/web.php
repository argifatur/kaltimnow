<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|

Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();
Route::get('/adminpanel',  'HomeController@index')->name('index');
Route::get('/',      'MainController@index')->name('/');
Route::get('/berita/{path}',  'MainController@showBerita')->name('berita');
Route::post('/cari',		  'MainController@cari')->name('cari');
Route::post('/categori',		  'MainController@categori')->name('categori');
Route::get('/post',		  'MainController@post')->name('post');
Route::get('/about',		  'MainController@about')->name('about');
Route::get('/daftarpost',		  'MainController@daftarpost')->name('daftarpost');

/* -------------- Admin -----------*/

Route::get('/tambah',         'AdminController@tambah')->name('tambah');
Route::get('/logout',         'AdminController@logout')->name('logout');
Route::get('/tambah_artik',         'AdminController@tambah_artik')->name('tambah_artik');
Route::get('/tambah_kat',         'AdminController@tambah_kat')->name('tambah_kat');
Route::get('/tambah_tag',         'AdminController@tambah_tag')->name('tambah_tag');
Route::post('/addPost',       'AdminController@addPost')->name('addpost');
Route::post('/addKat',       'AdminController@addKat')->name('addkat');
Route::post('/addTag',       'AdminController@addTag')->name('addtag');
Route::post('/editPost/{id}', 'AdminController@editPost')->name('editpost');
Route::post('/editKat/{id}', 'AdminController@editKat')->name('editkat');
Route::post('/editTag/{id_tag}', 'AdminController@editTag')->name('edittag');
Route::get('/daftar',         'AdminController@daftar')->name('daftar');
Route::get('/daftar_kat',         'AdminController@daftar_kat')->name('daftar_kat');
Route::get('/daftar_tag',         'AdminController@daftar_tag')->name('daftar_tag');
Route::get('/dasbor',         'AdminController@dasbor')->name('dasbor');
Route::get('/edit/{id}',      'AdminController@edit')->name('edit');
Route::get('/edit_kat/{id}',      'AdminController@edit_kat')->name('edit_kat');
Route::get('/edit_tag/{id_tag}',      'AdminController@edit_tag')->name('edit_tag');
Route::get('/hapus/{id}',	  'AdminController@hapus')->name('hapus');
Route::get('/hapus_kat/{id}',	  'AdminController@hapus_kat')->name('hapus_kat');
Route::get('/hapus_tag/{id_tag}',	  'AdminController@hapus_tag')->name('hapus_tag');
Route::get('/user',           'AdminController@user')->name('user');
Route::get('/komentar',		  'AdminController@komentar')->name('komentar');
Route::get('/hapusUser/{id}',	  'AdminController@hapusUser')->name('hapususer');

/* -------------- User-----------*/

Route::post('/userInfo', 	'UserController@userInfo')->name('userinfo');
Route::post('/addComment',  'UserController@addComment')->name('addcomment');
Route::get('/comment', 		'UserController@comment')->name('comment');
Route::get('/editComment/{id}',    'UserController@editComment')->name('editcomment');
Route::post('/updateComment/{id}', 'UserController@updateComment')->name('updatecomment');
Route::get('/deleteComment/{id}',  'UserController@deleteComment')->name('deletecomment');
Route::post('/editBiodata', 	   'UserController@editBiodata')->name('editcomment');
Route::post('/reply',			   'UserController@reply')->name('reply');
Route::post('/like',			   'UserController@like')->name('like');
Route::post('/unlike',			   'UserController@unlike')->name('unlike');
Route::get('/notification', 	   'UserController@notification')->name('notification');


Route::get('summernoteeditor',array('as'=>'summernoteeditor.get','uses'=>'SummernotefileController@getSummernoteeditor'));
Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernotefileController@postSummernoteeditor'));
