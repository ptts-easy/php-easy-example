<?php

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

Route::get('/hello', function() { return \File::get(public_path() . '/hello.html'); });

Route::get('/', [App\Http\Controllers\HomeController::class, 'IndexGetHandler']);
Route::get('/template', [App\Http\Controllers\HomeController::class, 'TemplateGetHandler']);
Route::get('/route', [App\Http\Controllers\HomeController::class, 'RouteDefaultGetHandler']);
Route::get('/route/{name}/{action?}', [App\Http\Controllers\HomeController::class, 'RouteGetHandler']);

Route::get('/fileupload', [App\Http\Controllers\FileuploadController::class, 'FileuploadGetHandler']);

Route::get('/http', [App\Http\Controllers\HttpController::class, 'HTTPHandler']);
Route::prefix('/http/info')->group(function () {
    Route::get('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
    Route::post('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
    Route::put('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
    Route::delete('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
    Route::patch('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
    Route::options('/', [App\Http\Controllers\HttpController::class, 'HTTPInfoHandler']);
});

Route::get('/restapi', [App\Http\Controllers\RestapiController::class, 'RestApiGetHandler']);
Route::prefix('/rest')->group(function () {
    Route::any('/{name?}', [App\Http\Controllers\HttpController::class, 'RestApiMsgHandler']);
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'LoginGetHandler']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'LoginPostHandler']);

Route::get('/websocket', [App\Http\Controllers\WebsocketControlller::class, 'WebsocketGetHandler']);

//================ private ========================

//Auth::routes();

Route::any('/logout', [App\Http\Controllers\AuthController::class, 'LogoutGetHandler'])->middleware('myauth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'DashboardGetHandler'])->middleware('myauth');
