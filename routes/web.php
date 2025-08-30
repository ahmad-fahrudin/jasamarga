<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/tentang-kami', function () {
    return Inertia::render('TentangKami');
})->name('tentang-kami');

Route::get('/berita-informasi', function () {
    return Inertia::render('BeritaInformasi');
})->name('berita-informasi');

Route::get('/info-rest-area', function () {
    return Inertia::render('InfoRestArea');
})->name('info-rest-area');

Route::get('/layanan-transaksi', function () {
    return Inertia::render('LayananTransaksi');
})->name('layanan-transaksi');

Route::get('/layanan-lalu-lintas', function () {
    return Inertia::render('LayananLaluLintas');
})->name('layanan-lalu-lintas');

Route::get('/kontak', function () {
    return Inertia::render('Kontak');
})->name('kontak');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
