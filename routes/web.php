<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_auth;
use App\Http\Controllers\admin\post;
use App\Http\Controllers\admin\page;
use App\Http\Controllers\admin\contact;
use App\Http\Controllers\front\front_post;

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

Route::get('/', [front_post::class, 'home']);
Route::view('/contact/', 'front.contact');

Route::get('/post/{slug}', [front_post::class, 'Posted']);
Route::get('/page/{slug}', [front_post::class, 'paged']);
Route::post('/contact/submit_query', [front_post::class, 'add_msg']);

//Route::view('/front/home', 'front.home');
//Route::view('/post/{id}', 'front.post');
//Route::view('/admin/login', 'admin.login');

Route::get('/admin/login', [admin_auth::class, 'login']);
Route::post('/admin/login_submit', [admin_auth::class, 'login_submit']);

//Route::view('/admin/Home', 'admin.post.list');
//Route::view('/admin/post/add', 'admin.post.add');
//Route::view('/admin/post/edit', 'admin.post.edit');


//Route::view('/admin/logout', 'admin.post.list');
Route::get('/admin/logout', function () {
    session()->forget('BLOG_User_ID');
     return redirect('/admin/login');
});

/*
Route::group(['middleware'=>['admin_auth']],function(){
    Route::view('/admin/home', 'admin.post.list');
    Route::view('/admin/post/add', 'admin.post.add');
    Route::view('/admin/post/edit', 'admin.post.edit');
});
*/
Route::middleware(['disable_back_btn'])->group(function () {
    Route::middleware(['admin_auth'])->group(function () {

        Route::view('/admin/post/add', '/admin/post/add');
        Route::get('/admin/post/list', [post::class, 'listing']);
        Route::post('/admin/post/submit', [post::class, 'add_post']);
        Route::get('/admin/post/delete/{id}', [post::class, 'delete']);
        Route::get('/admin/post/edit/{id}', [post::class, 'edit']);
        Route::post('/admin/post/update/{id}', [post::class, 'update']);

        
        Route::get('/admin/post/active/{id}', [post::class, 'active']);
        Route::get('/admin/post/deactive/{id}', [post::class, 'deactive']);


        Route::view('/admin/page/add', '/admin/page/add');
        Route::get('/admin/page/list', [page::class, 'listing']);
        Route::post('/admin/page/submit', [page::class, 'add_page']);
        Route::get('/admin/page/delete/{id}', [page::class, 'delete']);
        Route::get('/admin/page/edit/{id}', [page::class, 'edit']);
        Route::post('/admin/page/update/{id}', [page::class, 'update']);

        
        Route::get('/admin/page/active/{id}', [page::class, 'active']);
        Route::get('/admin/page/deactive/{id}', [page::class, 'deactive']);

        Route::get('/admin/contact/list', [contact::class, 'listing']);
        //Route::view('/admin/home', 'admin.post.list');
        //Route::view('/admin/post/add', 'admin.post.add');
        //Route::view('/admin/post/edit', 'admin.post.edit');
    });
});



