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

Route::post('login','DangNhap@Login')->name('postLogin');

/*Route::post('register',[
	'as' => 'postRegister',
	'uses' => 'DangKy@Register'
]);*/

Route::post('register','DangKy@Register')->name('postRegister');

Route::get('login','DangNhap@showForm')->name('showlogin');

Route::get('register','DangKy@showForm');

Route::get('cart','GioHang@showCart');

/*Route::get('/', function () {
    return view('welcome');	
});*/

Route::get('/','Home@getData');

Route::get('home','Home@getData')->name('index');

Route::get('logout','DangNhap@Logout');

Route::get('logoutadmin', 'DangNhap@LogoutAdmin');

Route::get('productWithCata/{id}', 'Home@getDataWithCata');

Route::get('detail/{id}', 'Product@getDetailProduct');


/*Route::group(['prefix'=>'api'], function() {

	Route::get('','Home@listApi');

	Route::get('category/read','ApiController@readAll');

	Route::get('category/read/{id}','ApiController@read');

	Route::get('category/delete/{id}','ApiController@delete');

	Route::post('category/create','ApiController@create');

	Route::post('category/update','ApiController@update');

	Route::get('category/update/{id}','ApiController@update');

	---------------------------------------------

	Route::get('product/read','ApiProductController@readAll');

	Route::get('product/read/{id}','ApiProductController@read');

	Route::get('product/delete/{id}','ApiProductController@delete');

	/*---------------------------------------------

	Route::get('user/read','ApiUserController@readAll');

	Route::get('user/read/{id}','ApiUserController@read');

	Route::get('user/delete/{id}','ApiUserController@delete');
});*/

//---------------Admin--------------------

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'users'], function() {

		Route::post('search', [
				'as' => 'search',
				'uses' => 'QuanLiUsers@searchUser'
			]);
		Route::get('logout', 'DangNhap@LogoutAdmin');

		Route::get('quanliusers', 'QuanLiUsers@show');

		Route::get('insert', 'QuanLiUsers@formInsert');

		Route::post('insert', 'QuanLiUsers@insertUser');

		Route::get('update/{id}', 'QuanLiUsers@getUpdate');

		Route::post('update/{id}', 'QuanLiUsers@postUpdate');

		Route::get('delete/{id}', 'QuanLiUsers@deleteUser');

	});
});

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'loaisanpham'], function() {

		Route::get('logout', 'DangNhap@LogoutAdmin');

		Route::get('quanliloai', 'QuanLiLoaiSP@showLoai');

		Route::get('insert', 'QuanLiLoaiSP@formInsert');

		Route::post('insert', 'QuanLiLoaiSP@insertLoai');

		Route::get('delete/{id}', 'QuanLiLoaiSP@deleteLoai');

		Route::get('update/{id}', 'QuanLiLoaiSP@getUpdate');

		Route::post('update/{id}', 'QuanLiLoaiSP@postUpdate');

		Route::get('soluong/{id}', 'QuanLiLoaiSP@count');

	});
});


Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'sanpham'], function() {

		Route::get('logout', 'DangNhap@LogoutAdmin');

		Route::get('quanlisanpham', 'QuanLiSanPham@showSanPham');

		Route::get('insert', 'QuanLiSanPham@formInsert');

		Route::post('insert', 'QuanLiSanPham@insertSanPham');

		Route::get('delete/{id}', 'QuanLiSanPham@deleteSanPham');

		Route::get('update/{id}', 'QuanLiSanPham@getUpdate');

		Route::post('update/{id}', 'QuanLiSanPham@postUpdate');

	});
});

Route::group(['prefix'=>'cart'], function() {

	Route::get('add/{id}', 'GioHang@getAddCart');

	Route::get('delete/{id}', 'GioHang@getDeleteCart');

	Route::get('update', 'GioHang@getUpdateCart');

});



/*-----------------USER-------------------------------*/
Route::group(['prefix'=>'user'], function() {

	Route::get('repass/{id}','Users@getRePass');

	Route::post('repass/{id}','Users@postRePass');
	
});

/*Email*/

Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');