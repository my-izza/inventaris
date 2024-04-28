<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route Index
Route::get('/', [HomeController::class, 'index'])->name('index');
//<!--*** RoomController Start ***-->
//Route viewRooms
Route::get('/view-rooms', [RoomController::class, 'viewRooms'])->name('view-rooms');
//Route createRoom
Route::get('/create-room', [RoomController::class, 'createRoom'])->name('create-room');
//Route storeRoom
Route::post('/store-room', [RoomController::class, 'storeRoom'])->name('store-room');
//Route editRoom
Route::get('/edit-room/{id}', [RoomController::class, 'editRoom'])->name('edit-room');
//Route updateRoom
Route::put('/update-room/{id}', [RoomController::class, 'updateRoom'])->name('update-room');
//Route destroyRoom
Route::delete('/destroy-room/{id}', [RoomController::class, 'destroyRoom'])->name('destroy-room');
//Route viewByCategori
Route::get('/view-category/{category}', [RoomController::class, 'viewByCategoryRoom'])->name('view-category');
//<!--*** RoomController End ***-->