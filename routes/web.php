<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TanggalController;



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


route::get('/', [AnimalController::class, 'index']);
route::get('/NewList', [AnimalController::class, 'AddAnimal']);
route::post('/StoreAnimal', [AnimalController::class, 'SaveAnimal']);
route::get('/{id}/Details', [AnimalController::class, 'AnimalDetails']);
route::get('/{id}/Edit', [AnimalController::class, 'AnimalEdit']);
route::post('/{id}/SaveEdit', [AnimalController::class, 'SaveEdit']);
route::get('/{id}/Delete', [AnimalController::class, 'AnimalDelete']);

route::get('/tanggal', [TanggalController::class, 'tanggal']);
route::POST('/store', [TanggalController::class, 'storetanggal']);
