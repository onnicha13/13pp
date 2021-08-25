<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// --------------------------------------------------------------------------------------

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home2');
    });
    route::get('home2', [UserController::class, 'home2'])->name('home2');

    route::get('table', [UserController::class, 'table'])->name('table');
    route::post('table/insert', [UserController::class, 'table_insert'])->name('table_insert');
    route::get('table/edit/{id}', [UserController::class, 'table_edit'])->name('table_edit');
    route::post('table/update', [UserController::class, 'table_update'])->name('table_update');
    route::get('table/delete/{id}', [UserController::class, 'table_delete'])->name('table_delete');

    route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    route::get('form/upload', [UserController::class, 'form_upload'])->name('form.upload');
    route::post('form/upload/insert', [UserController::class, 'form_upload_insert'])->name('form.upload_insert');

    route::get('form/image', [UserController::class, 'form_image'])->name('form.image');
    route::post('form/image/insert', [UserController::class, 'form_image_insert'])->name('form.image_insert');

    route::get('form/relate', [UserController::class, 'form_relate'])->name('form.relate');
    route::post('form/relate/insert', [UserController::class, 'form_relate_insert'])->name('form.relate_insert');
});
