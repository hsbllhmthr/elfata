<?php

use App\Http\Livewire\Santri\Index as SantriIndex;
use App\Http\Livewire\Santri\Tambah as SantriTambah;
use App\Http\Livewire\Santri\Ubah as SantriUbah;
use App\Http\Livewire\Santri\Lihat as SantriLihat;

use App\Http\Livewire\Guru\Index as GuruIndex;
use App\Http\Livewire\Guru\Tambah as GuruTambah;
use App\Http\Livewire\Guru\Ubah as GuruUbah;
use App\Http\Livewire\Guru\Lihat as GuruLihat;

use App\Http\Livewire\Presensi\Index as PresensiIndex;
use App\Http\Livewire\Presensi\Tambah as PresensiTambah;
use App\Http\Livewire\Presensi\TambahGowa as PresensiTambahGowa;
use App\Http\Livewire\Presensi\TambahMakassar as PresensiTambahMakassar;
use App\Http\Livewire\Presensi\TambahTakalar as PresensiTambahTakalar;
use App\Http\Livewire\Presensi\TambahSoppeng as PresensiTambahSoppeng;
use App\Http\Livewire\Presensi\Ubah as PresensiUbah;
use App\Http\Livewire\Presensi\Datas as PresensiDatas;

use App\Http\Livewire\Hafalan\Index as HafalanIndex;
use App\Http\Livewire\Hafalan\Tambah as HafalanTambah;
use App\Http\Livewire\Hafalan\Ubah as HafalanUbah;

use App\Http\Livewire\Pembayaran\Index as PembayaranIndex;
use App\Http\Livewire\Pembayaran\Tambah as PembayaranTambah;
use App\Http\Livewire\Pembayaran\Ubah as PembayaranUbah;
use App\Http\Livewire\Pembayaran\Lihat as PembayaranLihat;

use App\Http\Livewire\Rapor\Index as RaporIndex;
use App\Http\Livewire\Rapor\Tambah as RaporTambah;
use App\Http\Livewire\Rapor\Ubah as RaporUbah;
use App\Http\Livewire\Rapor\Lihat as RaporLihat;

use App\Http\Livewire\Presensi\Data as PresensiData;
use App\Http\Livewire\Hafalan\Data as HafalanData;
use App\Http\Livewire\Rapor\Data as RaporData;

use App\Http\Livewire\Galeri\Index as GaleriIndex;
use App\Http\Livewire\Galeri\Tambah as GaleriTambah;
use App\Http\Livewire\Galeri\Ubah as GaleriUbah;

use App\Http\Livewire\Akun\Index as AkunIndex;


use App\Http\Livewire\Auth\ForgetPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Dashboard\Index;

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomepageController;


// Route::get('/', function () {
//     return redirect('login');
// });

Route::get('/', [HomepageController::class, 'index']);


Route::get('sign-up', Register::class)->middleware('guest')->name('register');

Route::get('login', Login::class)->middleware('guest')->name('login');

Route::get('forget-password', ForgetPassword::class)->middleware('guest')->name('forget-password');

Route::get('reset-password/{id}', ResetPassword::class)->middleware('guest')->name('reset-password');

Route::get('dasbor', Index::class)->middleware('auth')->name('dasbor');

Route::group(['middleware' => 'auth'], function () {

    Route::get('santri/santri', SantriIndex::class)->name('santri');
    Route::get('santri/tambah', SantriTambah::class)->name('tambah-santri');
    Route::get('santri/ubah/{id}', SantriUbah::class)->name('ubah-santri');
    Route::get('santri/lihat/{id}', SantriLihat::class)->name('lihat-santri');

    Route::get('guru/guru', GuruIndex::class)->name('guru');
    Route::get('guru/tambah', GuruTambah::class)->name('tambah-guru');
    Route::get('guru/ubah/{id}', GuruUbah::class)->name('ubah-guru');
    Route::get('guru/lihat/{id}', GuruLihat::class)->name('lihat-guru');

    Route::get('presensi/presensi', PresensiIndex::class)->name('presensi');
    Route::get('presensi/tambah', PresensiTambah::class)->name('tambah-presensi');
    Route::get('presensi/tambah-cabang1', PresensiTambahGowa::class)->name('tambah-gowa');
    Route::get('presensi/tambah-makassar', PresensiTambahMakassar::class)->name('tambah-makassar');
    Route::get('presensi/tambah-takalar', PresensiTambahTakalar::class)->name('tambah-takalar');
    Route::get('presensi/tambah-soppeng', PresensiTambahSoppeng::class)->name('tambah-soppeng');
    Route::get('presensi/ubah/{id}', PresensiUbah::class)->name('ubah-presensi');
    Route::get('presensi/data', PresensiData::class)->name('data-presensi');
    Route::get('presensi/datas/{cabang}', PresensiDatas::class)->name('datas-presensi');

    Route::get('hafalan/hafalan', HafalanIndex::class)->name('hafalan');
    Route::get('hafalan/tambah', HafalanTambah::class)->name('tambah-hafalan');
    Route::get('hafalan/ubah/{id}', HafalanUbah::class)->name('ubah-hafalan');
    Route::get('hafalan/data', HafalanData::class)->name('data-hafalan');

    Route::get('pembayaran/pembayaran', PembayaranIndex::class)->name('pembayaran');
    Route::get('pembayaran/tambah', PembayaranTambah::class)->name('tambah-pembayaran');
    Route::get('pembayaran/ubah/{id}', PembayaranUbah::class)->name('ubah-pembayaran');

    Route::get('rapor/rapor', RaporIndex::class)->name('rapor');
    Route::get('rapor/tambah', RaporTambah::class)->name('tambah-rapor');
    Route::get('rapor/ubah/{id}', RaporUbah::class)->name('ubah-rapor');
    Route::get('rapor/lihat/{id}', RaporLihat::class)->name('lihat-rapor');
    Route::get('rapor/data', RaporData::class)->name('data-rapor');

    Route::get('galeri/galeri', GaleriIndex::class)->name('galeri');
    Route::get('galeri/tambah', GaleriTambah::class)->name('tambah-galeri');
    Route::get('galeri/ubah/{id}', GaleriUbah::class)->name('ubah-galeri');

    Route::get('akun/ubah-password', AkunIndex::class)->name('ubah-password');
});
