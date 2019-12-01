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

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth'], function(){

//Route::get('/post', 'PostController@index')->name('homepage');
//Route::get('/product', 'ProductController@index')->name('home');
//Route::get('/category', 'CategoryController@index')->name('homehome');


// Route::get('user', function (Request $request) {

//     	if(!$request-> has('keyword') || empty($request->keyword))
// 	{
// 		$users=App\User::paginate(3);
// 	}else{
// 		$kw= $request->keyword;
// 		$users=App\User::where('name', 'like', "%$kw%")->paginate(3);
// 		$users->withPath("?keyword=$kw");
// 	}

// 	//2. thực hiện câu lệnh select * form posts where title lke keyword

//     //return view('welcome');
// 	//return 'view(welcome)';
// 	return view('list-users',['people'=>$users ]);
// });

// Route::get('add', function (Request $request) {
// 	return view('post-add');
// });

// Route::get('post/add-new', 'PostController@addNew')->name('post.add');
// Route::post('post/add-new', 'PostController@saveAddNew');
// Route::get('post/edit/{id}', 'PostController@editForm')->name('post.edit');
// Route::post('post/edit/{id}', 'PostController@saveEdit');
// Route::get('post/deletePost/{id}', 'PostController@deletePost')->name('post.remove');


// Route::group(['middleware'=>'mod.check'],function(){
// Route::get('product/add-new', 'ProductController@addNew')->name('product.add');
// Route::post('product/add-new', 'ProductController@saveAddNew');
// Route::get('product/edit/{id}', 'ProductController@editForm')->name('product.edit');
// Route::post('product/edit/{id}', 'ProductController@saveEdit');
// Route::get('product/deletePost/{id}', 'ProductController@deletePost')->name('product.remove');
// });
// Route::get('category/add-new', 'CategoryController@addNew')->name('category.add');
// Route::post('category/add-new', 'CategoryController@saveAddNew');
// Route::get('category/edit/{id}', 'CategoryController@editForm')->name('category.edit');
// Route::post('category/edit/{id}', 'CategoryController@saveEdit');
// Route::get('category/deletePost/{id}', 'CategoryController@deletePost')->name('category.remove');
Route::get('/admin2', function(){
	return view('admin2');
})->name('homeadmin');


});



// Route::get('/', 'TrangchuController@index')->name('trangchu');
// Route::get('sanpham/{id}', 'TrangchuController@sanpham')->name('sanpham');
// Route::get('tintuc/{id}', 'TrangchuController@tintuc')->name('tintuc');



// Route::get('/dangki', 'DangkiController@addNew')->name('dangki.add');
// Route::post('/dangki', 'DangkiController@saveAddnew');
// Route::get('/dangnhap', 'DangkiController@Login')->name('dangnhap.add');
// Route::post('/dangnhap', 'DangkiController@postLogin');
// Route::get('/dangxuat', 'DangkiController@logoutus')->name('logoutUser');
Route::get('/dangki', 'DangkiController@addNew')->name('dangki.add');
Route::post('/dangki', 'DangkiController@saveAddnew');
Route::get('/dangnhap', 'DangkiController@Login')->name('dangnhap.add');
Route::post('/dangnhap', 'DangkiController@postLogin');
Route::get('/dangxuat', 'DangkiController@logoutus')->name('logoutUser');

Route::get('lichsu/{id}', 'TrangchuController@history')->name('lichsumuahang');
//Route::post('lichsu/{id}', 'TrangchuController@saveRate');



Route::get('cart', 'CartController@cart')->name('cart.add');
Route::post('cart', 'CartController@saveCart');

Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::patch('update-cart', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');


Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('403', function(){
	return view('auth403');
})->name('auth.403');

Route::post('coupon','CouponController@store')->name('coupon.store');
Route::post('delete-coupon','CouponController@destroy')->name('coupon.destroy');
