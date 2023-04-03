<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HelloController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/hello/{name}', function($name) {
//     print("<p>hello world!".$name."</p>");
//     return;
// });
// Route::get('/hello', function() {
//     $data["name"] = 'hgoe';
//     return view('hello', $data);
// });
// Route::get('/hello', HelloController::class);
Route::get('/hello', [HelloController::class, "foo"]);

Route::get("/middlewareTest", function() {
	return "<p>ミドルウェアのテスト。こちらはリクエスト処理。</p>";
})->middleware("recordipaddress");

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
