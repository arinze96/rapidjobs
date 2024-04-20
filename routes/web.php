<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BrowseCompaniesController;
use App\Http\Controllers\BrowseJobsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsSinglePageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaredJobsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('app.home');
Route::get('/browse_jobs', [BrowseJobsController::class, 'index'])->name('browse_jobs');
Route::get('/job_details', [JobsSinglePageController::class, 'index'])->name('job_details');
Route::get('/stared_jobs', [StaredJobsController::class, 'index'])->name('stared_jobs');
Route::get('/user_profile', [ProfileController::class, 'index'])->name('user_profile');
Route::get('/edit_profile', [ProfileController::class, 'editProfile'])->name('edit_profile');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/forgot_password', [ForgotPasswordController::class, 'index'])->name('forgot_password');
Route::get('/browse_companies', [BrowseCompaniesController::class, 'index'])->name('browse_companies');
Route::get('/post_jobs', [PostJobController::class, 'index'])->name('post_jobs');


