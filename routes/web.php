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

Route::get('/', 'PageController@getIndex');

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('chuot',[
	'uses'=>'PageController@getAllChuot'
]);

Route::get('tainghe',[
	'uses'=>'PageController@getAllTaiNghe'
]);

Route::get('banphim',[
	'uses'=>'PageController@getAllBanPhim'
]);

Route::get('manhinh',[
	'uses'=>'PageController@getAllManHinh'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@postSignin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);

Route::group(['middleware' => ['admin']], function(){
    Route::get('admin','PageController@dashboard');

    Route::get('add-product','PageController@addProduct');

    Route::post('add-product',[
        'as'=>'add-product',
        'uses'=>'PageController@addProduct'
    ]);

    Route::get('edit-product/{id}','PageController@editProduct');

    Route::post('edit-product/{id}',[
        'as'=>'edit-product',
        'uses'=>'PageController@editProduct'
    ]);

    Route::get('delete-product/{id}','PageController@removeProduct');

	Route::get('list-product','PageController@listProduct');
	
	Route::get('list-bill','PageController@listBill');

	Route::get('delete-bill/{id}','PageController@removeBill');
	
	Route::get('customer', 'PageController@listCustomer' );

	Route::get('add-customer', 'PageController@addCustomer' );
		
	Route::post('add-customer',[
        'as'=>'add-customer',
        'uses'=>'PageController@addCustomer'
	]);
	Route::get('edit-customer/{id}','PageController@editCustomer');

    Route::post('edit-customer/{id}',[
        'as'=>'edit-customer',
        'uses'=>'PageController@editCustomer'
    ]);
	Route::get('delete-customer/{id}','PageController@removeCustomer');

	Route::get('list-slide','PageController@listSilde');

	Route::get('add-slide', 'PageController@addSlide' );
		
	Route::post('add-slide',[
        'as'=>'add-slide',
        'uses'=>'PageController@addSlide'
	]);

	Route::get('delete-slide/{id}','PageController@removeSlide');

	Route::get('list-productsType','PageController@listProductsType');

	Route::get('delete-productsType/{id}','PageController@removeProductsType');

	Route::get('edit-product-type/{id}','PageController@editProductsType');

    Route::post('edit-product-type/{id}',[
        'as'=>'edit-product-type',
		'uses'=>'PageController@editProductsType'
		]);

    Route::get('add-product-type', 'PageController@addProductsType' );
		
	Route::post('add-product-type',[
        'as'=>'add-product-type',
        'uses'=>'PageController@addProductsType'
	]);

});




//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
