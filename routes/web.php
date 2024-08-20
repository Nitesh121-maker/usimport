<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SearchLiveDataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ModalMailController;
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
Route::get('/us-export-data', [SearchLiveDataController::class, 'export']);
Route::get('/us-import-data', [SearchLiveDataController::class, 'import']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/tou', [PageController::class, 'tou']);
Route::get('/privacypolicy', [PageController::class, 'privacypolicy']);
// Route::get('/search-live-data', [PageController::class, 'searchlivedata']);
Route::get('/livedata/search', [PageController::class, 'livedataimport']);
Route::get('/companydetail', [PageController::class, 'companydetail']);
Route::get('/thankyou', [PageController::class, 'thankyou'])->name('thankyou');
Route::get('sitemap.xml',function() {
    return response()->view('frontend.sitemap')->header('Content-Type', 'xml');
});
Route::get('/robots.txt', function () {
    $path = public_path('robots.txt');

    if (File::exists($path)) {
        return Response::file($path);
    }

    abort(404);
});
Route::get('/error', [PageController::class, 'error']);
// Route::get('/testpage', [PageController::class, 'test']);

// livedata
// Route::get('/usa-import-data/import', [ProductController::class, 'productsearch'])->name('directory.list');
Route::get('/usa-import-data/{role}/{letter}', [ProductController::class, 'productsearch'])->name('directory.list');
Route::get('/usa-export-data/{role}/{letter}', [ProductController::class, 'productsearch'])->name('directoryexport.list');

Route::get('/search-live-data', [PageController::class, 'searchpage']);
Route::get('/search-live/{type}/{role}/{description}', [SearchLiveDataController::class, 'search'])->name('product.list1');
Route::get('/search', [SearchLiveDataController::class, 'handleForm'])->name('product.list');

// Route::get('/search/{type}/{role}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter'])->name('search-filter');
// Route::get('/search-data/{type}/{role}/{hs_code?}',[SearchLiveDataController::class, 'search'])->name('search');
// Route for type 'data'
Route::get('/search-data/{type}/{role}/{description?}/{hs_code?}', [SearchLiveDataController::class, 'search'])
     ->name('search.data');

// Route for type 'company' with 'er' appended to role
Route::get('/search-data/{type}/{role}er/{description?}/{hs_code?}', [SearchLiveDataController::class, 'search'])
     ->name('search.company');
     
Route::get('/search-1/{type}/{role}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter'])->name('hs-code');
Route::get('/search-01/{type}/{role}/{search}-{base_search}/{filterby}-{filterdata}', [SearchLiveDataController::class, 'searchFilter'])->name('search-filter');
Route::get('/search-2/{type}/{role}/{filterby}-{filterdata}/{filterby1}-{filterdata1}', [SearchLiveDataController::class, 'searchFilter1'])->name('searchfilterone');
Route::get('/search2/{type}/{role}/{filterby}-{filterdata}/{filterby1}-{filterdata1}', [SearchLiveDataController::class, 'searchFilter1'])->name('search-filterone');
Route::get('/search-02/{type}/{role}/{search}-{base_search}/{filterby}-{filterdata}/{filterby1}-{filterdata1?}', [SearchLiveDataController::class, 'searchFilter1'])->name('search-filter-one');
Route::get('/search-03/{type}/{role}/{filterby}-{filter}/{filterby1}-{filterdata}/{filterby2}-{filterdata1?}', [SearchLiveDataController::class, 'searchFilter2'])->name('searchfiltertwo');

Route::get('/search-03/{type}/{role}/{search}-{searchDetails1}/{filterby}-{filter}/{filterby1}-{filterdata}/{filterby2}-{filterdata1?}', [SearchLiveDataController::class, 'searchFilter2'])->name('search-filter-two');
Route::get('/search-04/{type}/{role}/{search}-{searchDetails1}/{filterby}-{filter}/{filterby1}-{filterdata}/{filterby2}-{filterdata1}', [SearchLiveDataController::class, 'searchFilter2'])->name('filter-two');

Route::get('/search-test/company/{base_search}/{role}/{companyname}', [CompanyController::class, 'companydata'])->name('Companydata');

// Contact Form Route
Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');
Route::post('/modal', [ModalMailController::class, 'sendModalForm'])->name('modal.send');




