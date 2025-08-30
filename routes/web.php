<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/tentang-kami', function () {
    return Inertia::render('TentangKami');
})->name('tentang-kami');

Route::get('/berita', function () {
    return Inertia::render('Berita');
})->name('berita');

Route::get('/tender', function () {
    return Inertia::render('Tender');
})->name('tender');

Route::get('/release', function () {
    return Inertia::render('Release');
})->name('release');

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

// Visi & Misi page
Route::get('/visi-misi', function () {
    return Inertia::render('VisiMisi');
})->name('visi-misi');

// Tata Nilai page
Route::get('/tata-nilai', function () {
    return Inertia::render('TataNilai');
})->name('tata-nilai');

// Struktur Organisasi page
Route::get('/struktur-organisasi', function () {
    return Inertia::render('StrukturOrganisasi');
})->name('struktur-organisasi');

// Penghargaan page
Route::get('/penghargaan', function () {
    return Inertia::render('Penghargaan');
})->name('penghargaan');

// Kebijakan Mutu & K3 page
Route::get('/kebijakan-mutuk3', function () {
    return Inertia::render('KebijakanMutuK3');
})->name('kebijakan-mutuk3');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
