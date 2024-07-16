<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SearchLiveDataController;
use App\Http\Controllers\ProductController;

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
Route::get('/us-export-data', [PageController::class, 'export']);
Route::get('/us-import-data', [PageController::class, 'import']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/tou', [PageController::class, 'tou']);
Route::get('/privacypolicy', [PageController::class, 'privacypolicy']);
// Route::get('/search-live-data', [PageController::class, 'searchlivedata']);
Route::get('/livedata/search', [PageController::class, 'livedataimport']);
Route::get('/companydetail', [PageController::class, 'companydetail']);
// Route::get('/testpage', [PageController::class, 'test']);

// livedata
// Route::get('/usa-import-data/import', [ProductController::class, 'productsearch'])->name('directory.list');
Route::get('/usa-import-data/{role}/{letter}', [ProductController::class, 'productsearch'])->name('directory.list');
Route::get('/usa-export-data/{role}/{letter}', [ProductController::class, 'productsearch'])->name('directoryexport.list');

Route::get('/search-live-data', [PageController::class, 'searchpage']);
Route::get('/search-live/{type}/{role}/{description}', [SearchLiveDataController::class, 'searchlivedata'])->name('product.list1');
Route::get('/search', [SearchLiveDataController::class, 'handleForm'])->name('product.list');

// Route::get('/search/{type}/{role}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter'])->name('search-filter');
// Route::get('/search-data/{type}/{role}/{hs_code?}',[SearchLiveDataController::class, 'search'])->name('search');
Route::get('/search-datap1/{type}/{role}/{description?}/{hs_code?}',[SearchLiveDataController::class, 'search'])->name('search');

Route::get('/searchp2/{type}/{role}/{searchDetails}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter'])->name('search-filter');
Route::get('/searchp3/{type}/{role}/{searchDetails1}/{searchDetails}/{filterby}-{filterdata}/{filterdata1}', [SearchLiveDataController::class, 'searchFilter1'])->name('search-filter-one');
Route::get('/searchp4/port/{type}/{role}/{searchDetails}/{searchDetails1}/{filter1}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter2'])->name('search-filter-two');
Route::get('/usa-import', [PageController::class, 'usimportcompany']);

// Contact Form Route
Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');