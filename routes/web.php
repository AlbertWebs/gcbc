<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/','HomeController@index');
Route::get('/about-us','HomeController@about');
Route::get('/give-now','HomeController@give_now');
Route::get('/give-paybill','HomeController@give_paybill');
Route::get('/ministries','HomeController@ministries');
Route::get('/ministries/{slung}','HomeController@ministry');
Route::get('/registration/{slung}','HomeController@registration');
Route::post('/register-now','HomeController@register_now');
Route::get('/contact-us','HomeController@contact');
Route::get('/terms-and-conditions','HomeController@terms');
Route::get('/privacy-policy','HomeController@privacy');
Route::get('/copyrights','HomeController@copyrights');
Route::post('/send-message','HomeController@send_message');
Route::get('/our-programs','HomeController@programs');
Route::get('/ministry-objectives','HomeController@objectives');
Route::get('/ministry-philosophy','HomeController@philosophy');
Route::get('/our-sermons','HomeController@sermons');
Route::get('/our-sermons/{slung}','HomeController@sermon');
Route::get('/news-and-events','HomeController@blogs');
Route::get('/news-and-events/{slung}','HomeController@blog');



Auth::routes();

Route::group(['prefix'=>'admin'], function(){

  
//Login route

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminsController@index')->name('admin.index');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Terms Privacy copyright
//copyright
Route::get('/copyright','AdminsController@copyright');
Route::post('/edit_copyright', 'AdminsController@edit_copyright');
//Privacy
Route::get('/privacy','AdminsController@privacy');
Route::get('/addPrivacy', 'AdminsController@addPrivacy');
Route::get('/editPrivacy/{id}', 'AdminsController@editPrivacy');
Route::post('/add_privacy', 'AdminsController@add_privacy');
Route::get('/delete_privacy/{id}','AdminsController@delete_privacy');
Route::post('/edit_privacy/{id}', 'AdminsController@edit_privacy'); 
//Terms
Route::get('/terms','AdminsController@terms');
Route::get('/addTerms', 'AdminsController@addTerms');
Route::get('/editTerm/{id}', 'AdminsController@editTerm');
Route::post('/add_term', 'AdminsController@add_term');
Route::post('/edit_term/{id}', 'AdminsController@edit_term');
Route::get('/delete_term/{id}','AdminsController@delete_term');
//About
Route::get('/about','AdminsController@about');
Route::post('/about_save', 'AdminsController@about_save');
Route::get('/abouts','AdminsController@abouts');
Route::post('/abouts_save', 'AdminsController@abouts_save');
Route::get('/how','AdminsController@how');
Route::post('/how_save', 'AdminsController@how_save');

//Products
Route::get('/products','AdminsController@products');
Route::get('/editProduct/{id}','AdminsController@editProduct');
Route::get('/deleteProduct/{id}','AdminsController@deleteProduct');
Route::post('/edit_Product/{id}', 'AdminsController@edit_Product');
Route::get('/addProduct', 'AdminsController@addProduct');
Route::post('/add_Product', 'AdminsController@add_Product');

// SiteSettings
Route::get('/sitesettings','AdminsController@sitesettings');
Route::post('/savesitesettings','AdminsController@savesitesettings');

//Admin
Route::get('/admins','AdminsController@admins');
Route::get('/editAdmin/{id}','AdminsController@editAdmin');
Route::get('/deleteAdmin/{id}','AdminsController@deleteAdmin');
Route::post('/edit_Admin/{id}', 'AdminsController@edit_Admin');
Route::get('/addAdmin', 'AdminsController@addAdmin');
Route::post('/add_Admin', 'AdminsController@add_Admin');


//Categories Control
Route::get('/categories','AdminsController@categories');
Route::get('/editCategories/{id}','AdminsController@editCategories');
Route::get('/deleteCategory/{id}','AdminsController@deleteCategory');
Route::post('/edit_Category/{id}', 'AdminsController@edit_Category');
Route::get('/addCategory', 'AdminsController@addCategory');
Route::post('/add_Category', 'AdminsController@add_Category');

Route::get('/deleteImage/{id}/{image}/{table}', 'AdminsController@deleteImage');

//Testimonial
Route::get('/addTestimonial', 'AdminsController@addTestimonial');
Route::post('/add_Testimonial', 'AdminsController@add_Testimonial');
Route::get('/testimonials','AdminsController@testimonials');
Route::get('/editTestimonial/{id}', 'AdminsController@editTestimonial');
Route::get('/deleteTestimonial/{id}', 'AdminsController@deleteTestimonial');
Route::post('/edit_Testimonial/{id}', 'AdminsController@edit_Testimonial');

//Ministry
Route::get('/addMinistry', 'AdminsController@addMinistry');
Route::post('/add_Ministry', 'AdminsController@add_Ministry');
Route::get('/ministries','AdminsController@ministries');
Route::get('/editMinistry/{id}', 'AdminsController@editMinistry');
Route::get('/deleteMinistry/{id}', 'AdminsController@deleteMinistry');
Route::post('/edit_Ministry/{id}', 'AdminsController@edit_Ministry');


//Blogs
Route::get('/blogs','AdminsController@Blogs');
Route::get('/editBlog/{id}','AdminsController@editBlog');
Route::get('/delete_Blog/{id}','AdminsController@deleteBlog');
Route::post('/edit_Blog/{id}', 'AdminsController@edit_Blog');
Route::get('/addBlog', 'AdminsController@addBlog');
Route::post('/add_Blog', 'AdminsController@add_Blog');

Route::get('/add_product_Featured/{id}','AdminsController@add_product_Featured');
Route::get('/add_product_Slider/{id}','AdminsController@add_product_Slider');

//Blogs
Route::get('/Sermons','AdminsController@Sermons');
Route::get('/editSermon/{id}','AdminsController@editSermon');
Route::get('/deleteSermon/{id}','AdminsController@deleteSermon');
Route::post('/edit_Sermon/{id}', 'AdminsController@edit_Sermon');
Route::get('/addSermon', 'AdminsController@addSermon');
Route::post('/add_Sermon', 'AdminsController@add_Sermon');

//Banner
Route::get('/banner','AdminsController@banners');
Route::get('/editBanner/{id}','AdminsController@editBanner');
Route::post('/edit_Banner/{id}', 'AdminsController@edit_Banner');


//Notifications
Route::get('/notifications','AdminsController@notifications');
Route::get('/notification/{id}','AdminsController@notification');

//Messages
Route::get('/allMessages', 'AdminsController@allMessages');
Route::get('/unread', 'AdminsController@unread');
Route::get('/read/{id}', 'AdminsController@read');
Route::post('/reply/{id}', 'AdminsController@reply');
Route::get('/deleteMessage/{id}', 'AdminsController@deleteMessage');

//Slider
Route::get('/slider','AdminsController@slider');
Route::get('/editSlider/{id}','AdminsController@editSlider');
Route::get('/deleteSlider/{id}','AdminsController@deleteSlider');
Route::post('/edit_Slider/{id}', 'AdminsController@edit_Slider');
Route::get('/addSlider', 'AdminsController@addSlider');
Route::post('/add_Slider', 'AdminsController@add_Slider');

//Gallery
Route::get('/gallery','AdminsController@gallery');
Route::get('/editGallery/{id}','AdminsController@editGallery');
Route::get('/deleteGallery/{id}','AdminsController@deleteGallery');
Route::post('/save_gallery/{id}', 'AdminsController@save_gallery');
Route::get('/addGallery', 'AdminsController@addGallery');
Route::get('/galleryList', 'AdminsController@galleryList');
Route::post('/add_Gallery', 'AdminsController@add_Gallery');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
