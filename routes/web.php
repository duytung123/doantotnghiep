<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

// Route::group(['prefix'=>'customer'],function(){

// 		Route::get('/','UserController@getList_customer');
		

// 		Route::get('edit/{id}','UserController@geteditecustomer');
// 		Route::post('edit/{id}','UserController@posteditcustomer');
// 		Route::get('delete/{id}','UserController@getdeletecustomer');
// 	});
//THANH TOÁN ONLINE VNPAY
Route::group(['prefix'=>'thanhtoan'],function(){
	Route::get('index/{id}','VnpayController@index');
	Route::get('viewthanhtoan','VnpayController@getview');
	Route::post('vnpay','VnpayController@create');
	Route::get('getvnpay','VnpayController@return');
});
//logincart
Route::group(['prefix'=>'loginform'],function(){
	Route::post('login_customer','CustomerController@index');
	Route::get('/','CustomerController@indexloginform');
	Route::get('logout','CustomerController@getLogoutCustomer');
	Route::get('edit','CustomerController@geteditcustomer');
	Route::post('edit','CustomerController@editcustomer')->name('editcustomer');
	Route::post('add','CustomerController@postaddcustomer')->name('customeradd');
	Route::get('editpassword','CustomerController@geteditpassword');
});

//search autocomplet
Route::post('autocomplet_ajax','FrontendController@autocompletajax');
//rating product
Route::get('rating','RatingController@rating');

// route lấy sản phẩm theo danh muc
Route::get('cateallproduct/{id}/{slug}.html','FrontendController@getcateallproduct');
Route::get('catealllaptop/{id}/{slug}.html','FrontendController@getcatealllaptop');
Route::get('catealltablet/{id}/{slug}.html','FrontendController@getcatealltablet');
Route::get('cateallphukien/{id}/{slug}.html','FrontendController@getcateallphukien');

Route::get('search','ProductController@getsearch');//timkiem cho phan backend

Route::get('complete','CartController@getcomple');


// GioHang
Route::group(['prefix'=>'cart','middleware'=>'loginform'],function(){
	Route::get('add/{id}','CartController@getaddcart');
	Route::get('update','CartController@getupdatecart');
	Route::get('show','CartController@getshowcart')->name('cat');
	Route::post('show','CartController@postcomplete');
	Route::get('delete/{id}','CartController@getdeletecart');

});

// chon muc gia phone
Route::group(['prefix'=>'phone/levelprice'],function(){
	Route::get('price1','PhoneController@price1');
	Route::get('price2','PhoneController@price2');
	Route::get('price3','PhoneController@price3');
	Route::get('price4','PhoneController@price4');
	Route::get('price5','PhoneController@price5');
});
// chon muc gia laptop
Route::group(['prefix'=>'laptop/levelprice'],function(){
	Route::get('price1','LaptopController@price1');
	Route::get('price2','LaptopController@price2');
	Route::get('price3','LaptopController@price3');
	Route::get('price4','LaptopController@price4');
	Route::get('price5','LaptopController@price5');
});
// chon muc gia table
Route::group(['prefix'=>'tablet/levelprice'],function(){
	Route::get('price1','TabletController@price1');
	Route::get('price2','TabletController@price2');
	Route::get('price3','TabletController@price3');
});

// route chi tiết của all sản phẩm
Route::get('detail/{id}/{slug}.html','DetailController@getDetailphone');
Route::get('detail2/{id}/{slug}.html','DetailController@getDetaillaptop');
Route::get('detail3/{id}/{slug}.html','DetailController@getDetailtablet');
Route::get('detail4/{id}/{slug}.html','DetailController@getDetailpkien');
Route::get('detail5/{id}/{slug}.html','Tintuccontroller@getDetailtintuc');
Route::get('detail6/{id}/{slug}.html','DetailController@getDetailpkien');
Route::get('detail7/{id}/{slug}.html','DetailController@getDetailWatch');


//các thao tác trên web

Route::post('detail/{id}/{slug}.html','DetailController@postComment');
Route::post('detail2/{id}/{slug}.html','DetailController@postComment');
Route::post('detail3/{id}/{slug}.html','DetailController@postComment');
Route::post('detail4/{id}/{slug}.html','DetailController@postComment');
Route::post('detail7/{id}/{slug}.html','DetailController@postComment');


//ajax load more

Route::post('laptop/load_data','LaptopController@load_data')->name('laptop.load_data');
Route::post('phone/load_data','PhoneController@load_data')->name('phone.load_data');
Route::post('tablet/load_data','TabletController@load_data')->name('tablet.load_data');
Route::post('phukien/load_data','PhukienController@load_data')->name('phukien.load_data');
Route::post('watch/load_data','WatchController@load_data')->name('watch.load_data');


Route::get('trangchu','frontendController@getHome');

// route view menu
Route::get('phone','PhoneController@getPhone');
Route::get('phukien','PhukienController@getPhukien');
Route::get('tablet','TabletController@getHome');
Route::get('laptop','LaptopController@getHome');
Route::get('tintuc','Tintuccontroller@getindex');
Route::get('watch','WatchController@index');
Route::group(['prefix' =>'admin/login'],function(){
	Route::get('/','LoginController@getLogin');

	Route::post('/','LoginController@postLogin');
});

Route::group(['prefix'=>'admin','middleware'=>'loginmiddile'],function(){

	Route::get('home','LoginController@gethome');

	Route::get('logout','LoginController@getLogout');

	Route::group(['prefix'=>'category'],function(){
		Route::get('/','CategoryController@getcate');
		Route::get('add','CategoryController@getaddcate');
		Route::post('add','CategoryController@postaddcate');
		Route::get('update/{id}','CategoryController@getupdatecate');
		Route::post('update/{id}','CategoryController@postupdatecate');
		Route::get('delete/{id}','CategoryController@getdeletecate');
	});  // cate cho trang chu
	Route::group(['prefix'=>'cateallproduct'],function(){
		Route::get('/','CategoryController@getcateall');
		Route::get('add','CategoryController@getaddcateall');
		Route::post('add','CategoryController@postaddcateall');
		Route::get('update/{id}','CategoryController@getupdatecateall');
		Route::post('update/{id}','CategoryController@postupdatecateall');
		Route::get('delete/{id}','CategoryController@getdeletecateall');
	}); // cate cho từng loại sp

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
	Route::group(['prefix'=>'tablet'],function(){
		Route::get('/','TabletController@gettablet');
		Route::get('add','TabletController@getaddtablet');
		Route::post('add','TabletController@postaddtablet');
		Route::get('update/{id}','TabletController@getupdatetablet');
		Route::post('update/{id}','TabletController@postupdatetablet');
		Route::get('delete/{id}','TabletController@getdeletetablet');
	});
	Route::group(['prefix'=>'laptop'],function(){
		Route::get('/','LaptopController@getlaptop');
		Route::get('add','LaptopController@getaddlaptop');
		Route::post('add','LaptopController@postaddlaptop');
		Route::get('update/{id}','LaptopController@getupdatelaptop');
		Route::post('update/{id}','LaptopController@postupdatelaptop');
		Route::get('delete/{id}','LaptopController@getdeletelaptop');
	});
	Route::group(['prefix'=>'phukien'],function(){
		Route::get('/','PhukienController@getindex');
		Route::get('add','PhukienController@getaddphukien');
		Route::post('add','PhukienController@postaddphukien');
		Route::get('update/{id}','PhukienController@getupdatephukien');
		Route::post('update/{id}','PhukienController@postupdatephukien');
		Route::get('delete/{id}','PhukienController@getdeletephukien');
	});
	Route::group(['prefix'=>'watch'],function(){
		Route::get('/','WatchController@getindex');
		Route::get('add','WatchController@getaddwatch');
		Route::post('add','WatchController@postaddwatch');
		Route::get('update/{id}','WatchController@getupdatewatch');
		Route::post('update/{id}','WatchController@postupdatewatch');
		Route::get('delete/{id}','WatchController@getdeletewatch');
	});


	Route::group(['prefix'=>'user'],function(){

		Route::get('/','UserController@getList_user');
		Route::get('add','UserController@getadduser');
		Route::post('add','UserController@postadduser');

		Route::get('edit/{id}','UserController@getediteuser');
		Route::post('edit/{id}','UserController@postedituser');
		Route::get('delete/{id}','UserController@getdeleteuser');
	});

		Route::group(['prefix'=>'customer'],function(){

		Route::get('/','CustomerController@getList_customer');
		Route::get('add','CustomerController@getaddcustomer');
		Route::post('add','CustomerController@postaddcustomer');

		Route::get('edit/{id}','CustomerController@geteditecustomer');
		Route::post('edit/{id}','CustomerController@posteditcustomer');
		Route::get('delete/{id}','CustomerController@getdeletecustomer');
	});

	Route::group(['prefix'=>'news'],function(){

		Route::get('/','Tintuccontroller@getList_news');
		Route::get('add','Tintuccontroller@getaddnews');
		Route::post('add','Tintuccontroller@postaddnews');

		Route::get('edit/{id}','Tintuccontroller@geteditnews');
		Route::post('edit/{id}','Tintuccontroller@posteditnews');
		Route::get('delete/{id}','Tintuccontroller@getdeletenews');
	});


	Route::group(['prefix'=>'order'],function(){
		Route::get('/','OrderController@getorder');
		Route::get('vieworder/{id}','OrderController@getvieworder');
		Route::get('delete/{id}','OrderController@delete');
		Route::get('active/{id}','OrderController@active');
	});

	Route::group(['prefix'=>'khohang'],function(){
		Route::get('/','ProductController@khohang');
		Route::get('tonkho','ProductController@tonkho');
		Route::get('delete/{id}','OrderController@delete');
		Route::get('active/{id}','OrderController@active');
	});
});




