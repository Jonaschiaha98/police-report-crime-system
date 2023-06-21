<?php

use App\Http\Controllers\crimeReportController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/policereportcrimes/reported/crimes', [crimeReportController::class, 'reportedCrimes'])->name('reported_crimes');

});

require __DIR__.'/auth.php';
Route::resource('crime', crimeReportController::class);
Route::prefix('policereportcrimes')->group(function () {
    
    Route::get('service/cash_solution', [crimeReportController::class, 'cash_solution'])->name('cash_solution');
    Route::get('service/crisis_management', [crimeReportController::class, 'crisis_management'])->name('crisis_management');
    Route::get('service/executive_protection', [crimeReportController::class, 'executive_protection'])->name('executive_protection');
    Route::get('service/police_servioces', [crimeReportController::class, 'police_services'])->name('police_services');
    Route::get('service/private_investigation', [crimeReportController::class, 'private_investigation'])->name('private_investigation');
    Route::get('/blog', [crimeReportController::class, 'blog'])->name('blog');
    Route::get('/shop', [crimeReportController::class, 'shop'])->name('shop');
    Route::get('/about', [crimeReportController::class, 'about'])->name('about');
});