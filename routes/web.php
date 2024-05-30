<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;

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
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('projects', ProjectController::class);
    });

    // routes/web.php

// routes/web.php

    Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';