<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\QbiController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\EidController;
use App\Http\Controllers\EmController;
use App\Http\Controllers\LsceController;
use App\Http\Controllers\MansysController;
use App\Http\Controllers\SeController;

// Halaman utama (dashboard)
Route::get('/', [AboutController::class, 'index'])->name('about');

// Halaman course
Route::get('/course', [CourseController::class, 'index'])->name('course');

// Halaman about
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Halaman profil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Halaman dosen
Route::get('/dosens', [DosenController::class, 'index'])->name('dosen');

// Halaman laboratorium
Route::get('/laboratory', [LaboratoryController::class, 'index'])->name('laboratory');

// Halaman laboratorium Qbi
Route::get('/qbi', [QbiController::class, 'index'])->name('qbi');

// Halaman laboratorium Mansys
Route::get('/mansys', [MansysController::class, 'index'])->name('mansys');

// Halaman laboratorium Lsce
Route::get('/lsce', [LsceController::class, 'index'])->name('lsce');

// Halaman laboratorium Eid
Route::get('/eid', [EidController::class, 'index'])->name('eid');

// Halaman laboratorium Se
Route::get('/se', [SeController::class, 'index'])->name('se');

// Halaman laboratorium Em
Route::get('/em', [EmController::class, 'index'])->name('em');

// Halaman laboratorium Digital
Route::get('/digital', [DigitalController::class, 'index'])->name('digital');