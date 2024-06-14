<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\OutstationController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;

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
// Auth
Route::get('/login',[AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'authenticate']);
Route::get('/reload-captcha',[AuthController::class, 'reloadCaptcha']);
Route::post('/logout',[AuthController::class,'logout']);
// Dashboard
Route::get('/', [DashboardController::class,'index'])->middleware('auth');
Route::get('/search',[DashboardController::class,'search'])->name('search')->middleware('auth');
Route::get('/biodata/{id}/show', [DashboardController::class, 'show'])->name('biodata.show')->middleware('auth');
// ListUser
Route::get('/list-user',[ListUserController::class, 'index'])->middleware('admin');
Route::post('register',[ListUserController::class, 'store'])->name('register')->middleware('admin');
Route::get('/list-user/{id}/delete',[ListUserController::class,'destroy'])->middleware('admin');
// Meeting
Route::get('/meeting', [MeetingController::class, 'index'])->middleware('auth');
Route::get('/meeting/create', [MeetingController::class, 'create'])->middleware('auth');
Route::post('/meeting/store',[MeetingController::class,'store'])->middleware('auth');
Route::get('/meeting/{id}/edit',[MeetingController::class,'edit'])->name('meeting.edit')->middleware('auth');
Route::post('/meeting/{id}/update',[MeetingController::class,'update'])->middleware('auth');
Route::get('/meeting/{id}/delete',[MeetingController::class,'destroy'])->middleware('auth');
Route::get('/meeting/status/{id}',[MeetingController::class,'status'])->middleware('auth');
// Route::get('view-pdf/{pdfFileName}', [MeetingController::class, 'viewPdf'])->name('view-pdf');
// Outstation
Route::get('/outstation', [OutstationController::class, 'index'])->middleware('auth');
Route::get('/outstation/create', [OutstationController::class, 'create'])->middleware('auth');
Route::post('/outstation/store',[OutstationController::class,'store'])->middleware('auth');
Route::get('/outstation/{id}/edit',[OutstationController::class,'edit'])->name('outstation.edit')->middleware('auth');
Route::post('/outstation/{id}/update',[OutstationController::class,'update'])->middleware('auth');
Route::get('/outstation/{id}/delete',[OutstationController::class,'destroy'])->middleware('auth');
Route::get('/outstation/status/{id}',[OutstationController::class,'status'])->middleware('auth');
// Profil
Route::get('/profile',[ProfilController::class,'edit'])->middleware('auth');
Route::post('/profile/update',[ProfilController::class,'update'])->middleware('auth');
Route::post('/profile/change-password',[ProfilController::class,'changepassword'])->middleware('auth');
// Project
// Route::get('/project',[ProjectController::class,'index'])->middleware('auth');
// Route::get('/project/status/{id}',[ProjectController::class,'status'])->middleware('auth');
// Route::get('/project/create',[ProjectController::class,'create'])->middleware('auth');
// Route::post('/project/store',[ProjectController::class,'store'])->middleware('auth');
// Route::get('/project/{id}/edit',[ProjectController::class,'edit'])->name('project.edit')->middleware('auth');
// Route::post('/project/{id}/update',[ProjectController::class,'update'])->middleware('auth');
// Route::get('/project/{id}/delete',[ProjectController::class,'destroy'])->middleware('auth');
// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/dataset', [DashboardController::class, 'index']);
Route::get('/bps', [DashboardController::class, 'bps']);
Route::get('/staticTable', [DashboardController::class, 'staticTable']);
Route::get('/getBps', [DashboardController::class, 'getBps']);
Route::get('/rpjmd', [DashboardController::class, 'rpjmd']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/sdg', [DashboardController::class, 'sdg']);
Route::get('/lakip', [DashboardController::class, 'lakip']);
Route::get('/lppd', [DashboardController::class, 'lppd']);
Route::get('/spm', [DashboardController::class, 'spm']);
Route::get('/statistik_sektoral', [DashboardController::class, 'statistik_sektoral'])->name('statistik_sektoral_search');
Route::get('/metadata', [DashboardController::class, 'metadata']);
Route::get('/infografis', [DashboardController::class, 'infografis']);
Route::get('/geospasial', [DashboardController::class, 'geospasial']);
Route::get('/dinas', [DashboardController::class, 'dinas']);

Route::get('/oretan', [DashboardController::class, 'oretan']);
Route::get('/get-metadata-detail', [DashboardController::class, 'getMetadataDetail']);
Route::get('/oretans/grafik/{id}', [DashboardController::class, 'getGrafikData']);


