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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','EcommerceController@home');
Route::get('/category-product/{id}','EcommerceController@categoryProduct');
Route::get('/product-details/{id}', 'EcommerceController@productDetails');
Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateShoppingCart');



Route::get('/about','EcommerceController@About');
Route::get('/product','EcommerceController@Deals');
Route::get('/service','EcommerceController@Service');
Route::get('/event','EcommerceController@Event');
Route::get('/login','EcommerceController@Login');
Route::get('/payment','EcommerceController@Payment');

Route::get('/brand-product/{id}', 'EcommerceController@Brand');



Route::get('/slider/add', 'SliderController@addSlider');
Route::post('/slider/new', 'SliderController@saveSliderInfo');
Route::get('/slider/manage-slider', 'SliderController@manageSlider');
Route::get('/slider/edit/{id}', 'SliderController@editSliderInfo');
Route::post('/slider/update', 'SliderController@updateSliderInfo');
Route::get('/slider/delete/{id}', 'SliderController@deleteSliderInfo');


Route::get('/slider/unpublished/{id}', 'SliderController@unpublishedSliderInfo');
Route::get('/slider/published/{id}', 'SliderController@publishedSliderInfo');

Route::get('/user/add', 'UserAdminController@addUser');
Route::post('/user/new', 'UserAdminController@saveUserInfo');
Route::get('/user/manage-user', 'UserAdminController@manageUser');
Route::get('/user/delete/{id}', 'UserAdminController@deleteUserInfo');
Route::get('/user/unpublished/{id}', 'UserAdminController@unpublishedUserInfo');
Route::get('/user/published/{id}', 'UserAdminController@publishedUserInfo');



Route::get('/category/add', 'CategoryController@addCategory');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/category-manage', 'CategoryController@manageCategory');

Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryinfo');


Route::get('/category/unpublished/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishedCategoryInfo');



Route::get('/brand/add', 'BrandController@addBrand');
Route::post('/brand/new', 'BrandController@saveBrandInfo');
Route::get('/brand/manage-brand', 'BrandController@manageBrand');

Route::get('/brand/edit/{id}', 'BrandController@editBrandInfo');
Route::post('/brand/update', 'BrandController@updateBrandInfo');
Route::get('/brand/delete/{id}', 'BrandController@deleteBrandInfo');


Route::get('/brand/unpublished/{id}', 'BrandController@unpublishedBrandInfo');
Route::get('/brand/published/{id}', 'BrandController@publishedBrandInfo');



Route::get('/product/add', 'ProductController@addProduct');
Route::post('/product/new', 'ProductController@saveProductInfo');
Route::get('/product/manage-product', 'ProductController@manageProduct');
Route::get('/product/details/{id}', 'ProductController@viewProductDetailsInfo');


Route::get('/product/edit/{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductInfo');
Route::get('/product/delete/{id}', 'ProductController@deleteProductInfo');


Route::get('/product/unpublished/{id}', 'ProductController@unpublishedProductInfo');
Route::get('/product/published/{id}', 'ProductController@publishedProductInfo');



Route::get('/about/add', 'AboutController@addAbout');
Route::post('/about/new', 'AboutController@saveAboutInfo');
Route::get('/about/manage-about', 'AboutController@manageAbout');


Route::get('/about/unpublished/{id}', 'AboutController@unpublishedAboutInfo');
Route::get('/about/published/{id}', 'AboutController@publishedAboutInfo');


Route::get('/team/add', 'TeamController@addTeamMember');
Route::post('/team/new', 'TeamController@saveTeamMemberInfo');
Route::get('/team/manage-team', 'TeamController@manageTeamMember');

Route::get('/team/details/{id}', 'TeamController@viewTeamMemberDetailsInfo');
Route::get('/team/edit/{id}', 'TeamController@editMemberInfo');
Route::post('/team/update', 'TeamController@updateMemberInfo');
Route::get('/team/delete/{id}', 'TeamController@deleteTeamMemberInfo');



Route::get('/team/unpublished/{id}', 'TeamController@unpublishedTeamMemberInfo');
Route::get('/team/published/{id}', 'TeamController@publishedTeamMemberInfo');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
