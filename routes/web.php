<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\ModelController;




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

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('makers', MakerController::class);
Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');
Route::post('/makers', [MakerController::class, 'store'])->name('makers.store');
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::patch('/makers/{body}', [MakerController::class, 'update'])->name('makers.update');
Route::get('/makers/{body}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::delete('/makers/{body}', [MakerController::class, 'destroy'])->name('makers.destroy');
Route::get('/makers/{body}', [MakerController::class, 'show'])->name('makers.show');

Route::get('/bodies', [BodyController::class, 'index'])->name('bodies.index');
Route::post('/bodies', [BodyController::class, 'store'])->name('bodies.store');
Route::get('/bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::patch('/bodies/{body}', [BodyController::class, 'update'])->name('bodies.update');
Route::get('/bodies/{body}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::delete('/bodies/{body}', [BodyController::class, 'destroy'])->name('bodies.destroy');
Route::get('/bodies/{body}', [BodyController::class, 'show'])->name('bodies.show');

Route::get('/fuels', [FuelController::class, 'index'])->name('fuels.index');
Route::post('/fuels', [FuelController::class, 'store'])->name('fuels.store');
Route::get('/fuels/create', [FuelController::class, 'create'])->name('fuels.create');
Route::patch('/fuels/{body}', [FuelController::class, 'update'])->name('fuels.update');
Route::get('/fuels/{body}/edit', [FuelController::class, 'edit'])->name('fuels.edit');
Route::delete('/fuels/{body}', [FuelController::class, 'destroy'])->name('fuels.destroy');
Route::get('/fuels/{body}', [FuelController::class, 'show'])->name('fuels.show');


Route::get('/models', [ModelController::class, 'index'])->name('models.index');
Route::post('/models', [ModelController::class, 'store'])->name('models.store');
Route::get('/models/create', [ModelController::class, 'create'])->name('models.create');
Route::patch('/models/{body}', [ModelController::class, 'update'])->name('models.update');
Route::get('/models/{body}/edit', [ModelController::class, 'edit'])->name('models.edit');
Route::delete('/models/{body}', [ModelController::class, 'destroy'])->name('models.destroy');
Route::get('/models/{body}', [ModelController::class, 'show'])->name('models.show');
Route::get('/models/maker/{maker_id}', [ModelController::class, 'showByMaker'])->name('models.showByMaker');

