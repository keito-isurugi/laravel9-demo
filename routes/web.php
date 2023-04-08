<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Codezine\HelloController;
use App\Http\Controllers\Codezine\Demo6Controller;
use App\Http\Controllers\Codezine\Demo8Controller;
use App\Http\Controllers\Codezine\Demo9Controller;
use App\Http\Controllers\Codezine\ClassaController;
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
Route::get('/phpinfo', function() {phpinfo();});

Route::get('/hello', [HelloController::class, "foo"]);

Route::get("/middlewareTest/{name}", function($name) {
	return "<p>ミドルウェアのテスト。こちらはリクエスト処理。</p>";
})->middleware("recordipaddress:hogehoge");

Route::get("/demo6/newNote", [Demo6Controller::class, 'newNote']);

Route::get("/demo8/showInput", [Demo8Controller::class, 'showInput']);
Route::post("/demo8/addData", [Demo8Controller::class, 'addData']);

Route::get("/demo9/user", [Demo9Controller::class, 'user']);
Route::get("/demo9/users", [Demo9Controller::class, 'users']);
Route::get("/demo9/ormusers", [Demo9Controller::class, 'ormUsers']);

Route::get("/normal_class_a", [ClassaController::class, 'classA']);
Route::get("/static_class_a", [ClassaController::class, 'staticClassA']);
Route::get("/facade_class_a", [ClassaController::class, 'facadeClassA']);

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
