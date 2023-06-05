<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Auth;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('/logout',[App\Http\Controllers\HomeController::class,'logout']);

route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

Route::get('/admin/users/rooms', [AdminController::class,'listRooms']);


route::get('/users',[App\Http\Controllers\AdminController::class,'showUsers']);
route::get('/create',[\App\Actions\Fortify\CreateNewUser::class,'create']);
route::get('/delete',[App\Http\Controllers\AdminController::class,'delete']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/users', [AdminController::class,'listUsers']);
    Route::get('/admin/users/edit/{id}',[AdminController::class,'editUser']);
    Route::post('/admin/users/update/{id}', 'AdminController@updateUser');
    Route::get('/admin/users/create', [AdminController::class,'createUser']);
    Route::post('/admin/users/store', 'AdminController@storeUser');
    Route::delete('/admin/users/delete/{id}', [AdminController::class,'deleteUser']);
});
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/data/create', 'AdminController@createData');
    Route::post('/admin/data/store', 'AdminController@storeData');
});
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/announcements/create', 'AdminController@createAnnouncement');
    Route::post('/admin/announcements/store', 'AdminController@storeAnnouncement');
});
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/messages/create', 'AdminController@createMessage');
    Route::post('/admin/messages/store', 'AdminController@storeMessage');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/password/change', 'UserController@showChangePasswordForm');
    Route::post('/user/password/update', 'UserController@updatePassword');
});
Route::get('/search', 'SearchController@search');

Route::get('/announcements', 'AnnouncementController@index');
Route::get('/announcements/{id}', 'AnnouncementController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/messages', 'MessageController@index');
    Route::get('/messages/{id}', 'MessageController@show');
    Route::get('/messages/create', 'MessageController@create');
    Route::post('/messages/store', 'MessageController@store');
});

require __DIR__.'/auth.php';
