<?php

use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SocailMediaController;
use App\Http\Controllers\backend\SubscriberController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:admin|manager']], function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
    });
    Route::controller(UserProfileController::class)->group(function () {
        Route::get('/admin/profile', 'adminProfile')->name('admin.profile');
        Route::post('/admin/profile/data/update/{id}', 'updateData')->name('update.user.data');
        Route::get('/admin/profile/password/', 'passwordView')->name('user.password.view');
        Route::post('/admin/profile/password/update/{id}', 'updatePassword')->name('update.user.password');
    });
    Route::group(['middleware' => ['auth','role:admin']], function () {
        Route::controller(SocailMediaController::class)->group(function () {
            Route::get('/all/social', 'viewSocial')->name('view.social');
            Route::post('/update/social/media/link', 'updateSocial')->name('update.social');
        });
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/all/category', 'allCategory')->name('category.view');
            Route::get('/create/category', 'createCategory')->name('create.category');
            Route::post('/store/category', 'storeCategory')->name('store.category');
            Route::get('/edit/category/{id}', 'editCategory')->name('edit.category');
            Route::post('/update/category/{id}', 'updateCategory')->name('update.category');
            Route::post('/delete/category/{id}', 'deleteCategory')->name('delete.category');
        });
    });
    Route::controller(BlogsController::class)->group(function () {
        Route::get('/all/blogs', 'index')->name('all.blogs');
        Route::get('/create/blogs', 'create')->name('create.blogs');
        Route::post('/store/blogs', 'store')->name('store.blogs');
        Route::get('/edit/blogs/{id}', 'edit')->name('edit.blogs');
        Route::post('/update/blogs/{id}', 'update')->name('update.blogs');
        Route::post('/update/multiImage/{id}', 'updateMultiImage')->name('update.multiImage');
        Route::post('/delete/all/{id}', 'deleteData')->name('delete.data');
        Route::get('/delete/multiImage/{id}', 'deleteMulti')->name('delete.multi');
    });
    Route::controller(SubscriberController::class)->group(function () {
        Route::get('/all/subscriber', 'index')->name('all.subscriber');
        Route::post('/delete/subscriber/{id}', 'deleteData')->name('delete.subscriber');
    });
});

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/category/{id}', 'category')->name('category.page');
    Route::get('/blog/details/{id}', 'blogDetails')->name('blog.page');
    Route::post('/subscribe', 'subscribe')->name('subscribe');
    Route::post('/search', 'search')->name('search');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/admin', 'login')->name('admin.login');
    Route::get('/admin/register', 'register')->name('admin.register');
    Route::get('/admin/forget/password', 'forgertPassword')->name('admin.forget.password');
});
require __DIR__ . '/auth.php';
