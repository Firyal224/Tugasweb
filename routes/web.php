<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
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


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/cek-role', function () {
    
    if(auth()->user()->hasRole('admin')){
     
        return redirect('/admin');
    } else if(auth()->user()->hasRole('pegawai')){

        return view('pegawai/dashboardPegawai');
    }else{
        
        return redirect('/');
    }

    
});

Route::group(['middleware' => ['verified', 'role:pegawai']], function () {

    Route::resource('pegawai',SuratController::class)->except(['show','update']);
    Route::get('/pegawai',[SuratController::class, 'index']);
    Route::get('/pegawai/table', [SuratController::class, 'data_table']);
});

Route::group(['middleware' => ['verified', 'role:admin']], function () {

    Route::resource('admin',PegawaiController::class)->except(['show','update']);
    Route::get('/admin', [PegawaiController::class, 'index']);
    Route::get('/admin/table', [PegawaiController::class, 'data_table']);
    Route::get('/admin/table_users', [PegawaiController::class, 'data_table_user']);
    Route::get('/admin/{id}/edit_users', [PegawaiController::class, 'get_edit_user']);
    Route::post('/admin/update_users', [PegawaiController::class, 'update_user']);
    Route::delete('/admin/delete_users/{id}', [PegawaiController::class, 'delete_user']);
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('pembaca',SettingController::class)->except(['show','update']);
    Route::post('/pembaca/update_users', [SettingController::class, 'update_user']);
});

Route::get('/', [ArtikelController::class, 'index']);



