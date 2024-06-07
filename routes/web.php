<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SearchLiveDataController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/clients', [PageController::class, 'clients']);
Route::get('/disclaimer', [PageController::class, 'disclaimer']);
Route::get('/exportdata', [PageController::class, 'export']);
Route::get('/importdata', [PageController::class, 'import']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/tou', [PageController::class, 'tou']);
Route::get('/privacypolicy', [PageController::class, 'privacypolicy']);
// Route::get('/search-live-data', [PageController::class, 'searchlivedata']);
Route::get('/livedata/search', [PageController::class, 'livedataimport']);
Route::get('/import-data/product', [PageController::class, 'productimport']);

// livedata
Route::get('/search-live', [SearchLiveDataController::class, 'searchlivedata']);
Route::get('/search-live-data', [PageController::class, 'searchpage']);
Route::get('/us-importer-of-rubber', [PageController::class, 'usimportcompany']);

// Contact Form Route
Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');