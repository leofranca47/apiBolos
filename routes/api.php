<?php

use App\Http\Controllers\CakeController;
use App\Http\Controllers\InterestedListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cake', [CakeController::class, 'store'])->name('cake.store');
Route::put('/cake', [CakeController::class, 'update'])->name('cake.update');
Route::get('/cakes', [CakeController::class, 'getCakes'])->name('cake.getCakes');
Route::get('/cake/{id}',[CakeController::class, 'show'])->name('cake.show');
Route::delete('/cake/{id}',[CakeController::class, 'delete'])->name('cake.delete');
Route::get('/interestedCake/{cake_id}', [CakeController::class, 'getInterestedCake'])->name('cake.getInterestedCake');
Route::post('/cake/interestedList', [CakeController::class, 'linkInterested'])->name('cake.linkInterested');

Route::post('/interestedList', [InterestedListController::class, 'store'])->name('interestedList.store');
Route::put('/interestedList', [InterestedListController::class, 'update'])->name('interestedList.update');
Route::get('/interestedLists', [InterestedListController::class, 'getInterestedeLists'])->name('interestedList.getinterestedLists');
Route::get('/interestedList/{id}',[InterestedListController::class, 'show'])->name('interestedeList.show');
Route::delete('/interestedList/{id}',[InterestedListController::class, 'delete'])->name('interestedList.delete');
Route::get('/cakeInterested/{interested_id}', [InterestedListController::class, 'getCakeInterested'])->name('interestedList.getCakeInterested');
Route::post('/interestedList/cake', [InterestedListController::class, 'linkCake'])->name('interestedList.linkCake');

