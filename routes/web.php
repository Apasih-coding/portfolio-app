<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Gallery;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/jajal', function () {
    return view('app.jajal');
});

Route::get('/', [ProjectController::class, 'index']);
Route::post('/contact', [ProjectController::class, 'message'])->name('contact');

Route::middleware('can:admin-user')->group(function(){
    // Dashboard
    Route::get('/admin', [ProjectController::class, 'admin'])->name('admin');
    // Skill
    Route::get('/admin-skill', [ProjectController::class, 'skill'])->name('admin.skill');
    Route::post('/admin-add_skill', [ProjectController::class, 'add_skill'])->name('admin.add_skill');
    // Project
    Route::get('/admin-projects', [ProjectController::class, 'create'])->name('admin.projects');
    Route::post('/admin-add_projects', [ProjectController::class, 'store'])->name('admin.add_projects');
    Route::get('/admin-detail_projects/{id}', [ProjectController::class, 'show'])->name('admin.detail_projects');
    // Gallery
    Route::get('/admin-gallery', [ProjectController::class, 'gallery'])->name('admin.gallery');
    Route::post('/admin-add_gallery', [ProjectController::class, 'add_gallery'])->name('admin.add_gallery');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
