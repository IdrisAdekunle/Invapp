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
    return view('auth.login');
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::resource('item','ItemController');
Route::resource('department','DepartmentController');
Route::resource('asset','AssetController');
Route::Put('/asset/scrap/{id}','AssetController@ScrapAsset')->name('scrap');
Route::get('/scrapped_assets', 'AssetController@scrapped')->name('scrapped');
Route::Put('/asset/unscrap/{id}','AssetController@UnScrapAsset')->name('unscrap');
Route::get('/scan/{serial}','QrcodeController@scan');
Route::get('/qrcode/index','QrcodeController@index')->name('qrcode');
Route::get('transfer/index','TransferController@index');
Route::get('transfer/assets','TransferController@assets')->name('transferAsset');
Route::get('transfer/assets/{id}','TransferController@transfer')->name('transfer');
Route::post('transfer/post','TransferController@store')->name('transferStore');
Route::get('user/create','UserController@create')->name('user.create');
Route::get('/user','UserController@index')->name('user.index');
Route::post('/user/store','UserController@store')->name('user.store');
Route::get('/user/reset/index','UserController@ResetIndex')->name('user.reset.index');
Route::post('/user/reset/','UserController@reset')->name('user.reset');




Route::get('/AssetExport', 'AssetController@ExportAsset');
Route::get('/ScrapExport', 'AssetController@ExportScrap');



