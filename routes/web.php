<?php

use App\Http\Controllers\crimeReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('policereportcrimes')->group(function () {
    Route::resource('crime', crimeReportController::class);
    Route::get('reported/crimes', [crimeReportController::class, 'reportedCrimes'])->name('reported_crimes');
    Route::get('service/cash_solution', [crimeReportController::class, 'cash_solution'])->name('cash_solution');
    Route::get('service/crisis_management', [crimeReportController::class, 'crisis_management'])->name('crisis_management');
    Route::get('service/executive_protection', [crimeReportController::class, 'executive_protection'])->name('executive_protection');
    Route::get('service/police_servioces', [crimeReportController::class, 'police_services'])->name('police_services');
    Route::get('service/private_investigation', [crimeReportController::class, 'private_investigation'])->name('private_investigation');
    Route::get('/blog', [crimeReportController::class, 'blog'])->name('blog');
    Route::get('/shop', [crimeReportController::class, 'shop'])->name('shop');
    Route::get('/about', [crimeReportController::class, 'about'])->name('about');
});
