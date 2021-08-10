<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\JavadocController;
use App\Http\Controllers\JaxSandwichBotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SandwichcordController;

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

Route::get('/',[MainController::class, 'index']);
Route::get('dev',[MainController::class, 'dev']);
Route::get('dev/sandwichbots', [MainController::class, 'sandwichbots']);
Route::get('dev/sandwichbots/sandwichcord', [SandwichcordController::class, 'index']);
Route::get('dev/sandwichbots/sandwichcord/latest', [SandwichcordController::class, 'latest']);
Route::get('dev/sandwichbots/sandwichcord/{version}', [SandwichcordController::class, 'api']);
//Route::get('dev/sandwichbots/sandwichcord/{version}/javadoc', [SandwichcordController::class, 'api']);
//Route::get('dev/sandwichbots/sandwichcord/{version}/javadoc/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}/{j}/{k}/{l}/{m}/{n}', [SandwichcordController::class, 'api']);
//Route::get('dev/sandwichbots/sandwichcord/{version}/javadoc/{b?}/{c?}/{d?}/{e?}/{f?}/{g?}/{h?}/{i?}/{j?}/{k?}/{l?}/{m?}/{n?}', [JavadocController::class, 'doc']);
Route::get('dev/bot', [JaxSandwichBotController::class, 'index']);
//Route::get('api/new', [ApiController::class, 'new']);
//Route::get('api/latest', [ApiController::class, 'latest']);
//Route::get('api/github', [ApiController::class, 'github']);