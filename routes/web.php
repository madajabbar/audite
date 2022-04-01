<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

Route::prefix('admin')->group(function () {
    // example
    Route::get('/dashboard', function () {
        return view('example.dashboard');
    })->name('dashboard');
    Route::get('/form', [ExampleController::class, 'index'])->name('form');
    Route::get('/formjquery', [ExampleController::class, 'viewFormJquery'])->name('form.jquery');
    Route::post('/form/store', [ExampleController::class, 'store'])->name('form.store');
    Route::post('/form/store/jquery', [ExampleController::class, 'storejquery'])->name('form.jquery.store');
    Route::get('/quill', function () {
        return view('example.quill');
    })->name('quill');
    Route::get('/datatables',[ExampleController::class, 'view'])->name('datatables');
    Route::get('/chartapexjs', function () {
        return view('example.chart');
    })->name('chartapexjs');
    // end example
    Route::get('rat/list', [App\Http\Controllers\Admin\ManajemenPerencanaan\RATController::class,'list'])->name('rat.list');
    // do coding
    Route::resource('assign-assessment',App\Http\Controllers\Admin\RiskAssessment\AssignAssessmentController::class);
    Route::resource('assessment',App\Http\Controllers\Admin\RiskAssessment\AssessmentController::class);
    Route::resource('review-pka',App\Http\Controllers\Admin\RiskAssessment\ReviewPKAController::class);
    Route::resource('rat',App\Http\Controllers\Admin\ManajemenPerencanaan\RATController::class);
    Route::resource('rap',App\Http\Controllers\Admin\ManajemenPerencanaan\RAPController::class);
    Route::resource('perencanaan-audit',App\Http\Controllers\Admin\ManajemenAudit\PerencanaanAuditController::class);
});

Route::get('/dashboard', function () {
    return view('example.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
