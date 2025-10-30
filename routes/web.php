<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;

// Halaman utama (dashboard)
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Halaman laporan
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

// Halaman pengaturan
Route::get('/settings', [SettingController::class, 'index'])->name('settings');

// Halaman profil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Halaman dosen
Route::get('/dosens', [DosenController::class, 'index'])->name('dosen');