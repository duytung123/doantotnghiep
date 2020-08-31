<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('complete','CartController@getcomple');
// GioHang
Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getaddcart');
	Route::get('update','CartController@getupdatecart');
	Route::get('show','CartController@getshowcart');
	Route::post('show','CartController@postcomplete');
	Route::get('delete/{id}','CartController@getdeletecart');

});



// route chi tiết của all sản phẩm
Route::get('detail/{id}/{slug}.html','DetailController@getDetailphone');
Route::get('detail2/{id}/{slug}.html','DetailController@getDetaillaptop');
Route::get('detail3/{id}/{slug}.html','DetailController@getDetailtablet');
Route::get('detail4/{id}/{slug}.html','DetailController@getDetailpkien');
//các thao tác trên web

Route::post('detail/{id}/{slug}.html','DetailController@postComment');
Route::post('detail2/{id}/{slug}.html','DetailController@postComment');

Route::post('detail3/{id}/{slug}.html','DetailController@postComment');

Route::post('detail4/{id}/{slug}.html','DetailController@postComment');


//ajax load more

Route::post('laptop/load_data', 'LaptopController@load_data')->name('laptop.load_data');
Route::post('phone/load_data', 'PhoneController@load_data')->name('phone.load_data');
Route::post('tablet/load_data', 'TabletController@load_data')->name('tablet.load_data');

Route::get('trangchu','frontendController@getHome');

// route view menu
Route::get('phone','PhoneController@getPhone');
Route::get('phukien','PhukienController@getPhukien');
Route::get('tablet','TabletController@getHome');
Route::get('laptop','LaptopController@getHome');
Route::group(['prefix' =>'admin/login'],function(){
	Route::get('/','LoginController@getLogin');

	Route::post('/','LoginController@postLogin');
});

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
	Route::get('logout','LoginController@getLogout');

	Route::get('home','LoginController@gethome');
	Route::group(['prefix'=>'category'],function(){
		Route::get('/','CategoryController@getcate');
		Route::get('add','CategoryController@getaddcate');
		Route::post('add','CategoryController@postaddcate');
		Route::get('update/{id}','CategoryController@getupdatecate');
		Route::post('update/{id}','CategoryController@postupdatecate');
		Route::get('delete/{id}','CategoryController@getdeletecate');
	});

		Route::group(['prefix'=>'product'],function(){
		Route::get('/','ProductController@getproduct');
		Route::get('add','ProductController@getaddproduct');
		Route::post('add','ProductController@postaddproduct');
		Route::get('update/{id}','ProductController@getupdateproduct');
		Route::post('update/{id}','ProductController@postupdateproduct');
		Route::get('delete/{id}','ProductController@getdeleteproduct');
	});
			Route::group(['prefix'=>'laptop'],function(){
		Route::get('/','LaptopController@getlaptop');
		Route::get('add','LaptopController@getaddlaptop');
		Route::post('add','LaptopController@postaddlaptop');
		Route::get('update/{id}','LaptopController@getupdatelaptop');
		Route::post('update/{id}','LaptopController@postupdatelaptop');
		Route::get('delete/{id}','LaptopController@getdeletelaptop');
	});

			
		Route::group(['prefix'=>'user'],function(){

		Route::get('/','UserController@getList_user');
		Route::get('add','UserController@getadduser');
		Route::post('add','UserController@postadduser');

		Route::get('edit/{id}','UserController@getediteuser');
		Route::post('edit/{id}','UserController@postedituser');
		Route::get('delete/{id}','UserController@getdeleteuser');
	});


	Route::group(['prefix'=>'order'],function(){
		Route::get('/','OrderController@getorder');
		Route::get('vieworder/{id}','OrderController@getvieworder');

	});

});


