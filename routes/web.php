<?php

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

//Role : Masyarakat
Route::get('/', function () {
    return view('index');
});

// Pengajuan Proposal
Route::get('/pengajuan', 'BerandaController@pengajuan');
Route::post('/pengajuanPost','BerandaController@pengajuanPost');

// Lowongan Kerja
Route::get('/lowongan_kerja', 'BerandaController@loker');
Route::post('/lokerPost','BerandaController@lokerPost');

// Penggajuan Proposal
Route::get('/pengajuan_proposal', function () {
    return view('pengajuan_proposal');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

//Detail Pengumuman
Route::get('/detail_pengumuman/{id_pengumuman}', 'PengumumanController@detail');


Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Role Admin
// Route::get('/HomeAdmin', function () {
//     return view('Admin/BerandaAdmin');
// });

// Route::get('/HomeAdmin', 'BerandaController@dashboard_admin');


//Daftar Akun Pegawai
Route::get('/daftar_akun_pegawai', function () {
    return view('Admin/DaftarAkunPegawai');
});

//Galeri Admin
Route::get('/GaleriAdmin', function () {
    return view('Admin/GaleriAdmin');
});

Route::get('/tambah_galeri_admin', function () {
    return view('Admin/TambahGaleriAdmin');
});

Route::get('/edit_galeri_admin/{id_galeri}', 'GaleriController@edit');
Route::post('/edit_galeri_admin/proses/{id_galeri}', 'GaleriController@update');
Route::get('/galeri/hapus/{id_galeri}', 'GaleriController@delete');

//Logo Admin
Route::get('/LogoAdmin', function () {
    return view('Admin/LogoAdmin');
}); 

// Pegawai Admin
Route::get('/tambah_pegawai_admin', function () {
    return view('Admin/TambahPegawaiAdmin');
});

Route::get('/edit_pegawai_admin', function () {
    return view('Admin/EditPegawaiAdmin');
});

Route::get('/hapus_pegawai_admin', function () {
    return view('Admin/HapusPegawaiAdmin');
});

// Nasabah Admin
Route::get('/Nasabah_Admin', function () {
    return view('Admin/NasabahAdmin');
});

Route::get('/tambah_nasabah_admin', function () {
    return view('Admin/TambahNasabahAdmin');
});

Route::get('/edit_nasabah_admin', function () {
    return view('Admin/EditNasabahAdmin');
});

Route::get('/hapus_nasabah_admin', function () {
    return view('Admin/HapusNasabahAdmin');
});






//Role Pegawai
Route::get('/Beranda', function () {
    return view('Pegawai/Pegawai');
});


// Manage Pegawai (Admin)
Route::get('/Pegawai_Admin', 'PegawaiController@index');
// Route::get('/tambah_pegawai', 'PegawaiController@tambahPegawai');
// Route::post('/tambahPegawaiPost','PegawaiController@tambahPegawaiPost');
// Route::get('/edit_pegawai/{id}','PegawaiController@editPegawai');
// Route::post('/editPegawaiPost','PegawaiController@editPegawaiPost');

Route::get('/Pegawai/cari', 'PegawaiController@cariPegawai');
Route::get('/Nasabah/cari', 'NasabahController@cariNasabah');
Route::get('/Laporan/cari', 'LaporanController@cariLaporan');

//PendaftaranPegawai
Route::get('/Pendaftaran_Pegawai_Admin', 'PendaftaranPegawaiController@index');
Route::get('/Pendaftaran_Pegawai_Admin/delete/{id}', 'PendaftaranPegawaiController@destroy');

//Pengumuman
Route::get('/Pengumuman_Admin', 'PengumumanController@index');
Route::get('/tambah_pengumuman_admin', 'PengumumanController@create');
Route::post('/tambah_pengumuman_adminPost/tambah/proses', 'PengumumanController@store');
Route::get('/hapus_pengumuman_admin/{id}', 'PengumumanController@destroy');
Route::get('/edit_pengumuman_admin/{id}', 'PengumumanController@show');
Route::post('/edit_pengumuman_admin/proses/{id}', 'PengumumanController@update');




//Manage Pegawai (Pegawai)
Route::get('/Pegawai', 'PegawaiController@index');
Route::get('/Pegawai/delete/{id}', 'PegawaiController@delete');
Route::get('/tambah_pegawai', 'PegawaiController@tambahPegawai');
Route::post('/tambahPegawaiPost','PegawaiController@tambahPegawaiPost');
Route::get('/edit_pegawai/{id}','PegawaiController@editPegawai');
Route::post('/editPegawaiPost','PegawaiController@editPegawaiPost');
Route::post('/tambahAkunPegawaiPost','PegawaiController@tambahAkunPegawaiPost');




//Manage Nasabah (Pegawai)
Route::get('/Nasabah', 'NasabahController@index');
Route::get('/tambah_nasabah', 'NasabahController@tambahNasabah');
Route::post('/tambahNasabahPost','NasabahController@tambahNasabahPost');
Route::get('/edit_nasabah/{id}','NasabahController@editNasabah');
Route::post('/editNasabahPost','NasabahController@editNasabahPost');
Route::get('/hapus_nasabah/{id}','NasabahController@hapusNasabah');



//Manage Bukti Pembayaran (Pegawai)
Route::get('/bukti_pembayaran', function () {
    return view('pegawai/Bukti_Pembayaran');
});

Route::get('/bukti_kredit', function () {
    return view('pegawai/bukti_kredit');
});

Route::get('/bukti_kwitansi', function () {
    return view('pegawai/bukti_kwitansi');
});

//Manage Laporan Akhir (Pegawai)
Route::get('/laporan_akhir', 'LaporanController@index');
Route::get('/tambah_laporan_akhir', 'LaporanController@tambahLaporan');
Route::post('/tambahLaporanPost','LaporanController@tambahLaporanPost');
Route::get('/edit_laporan_akhir/{id}','LaporanController@editLaporan');
Route::post('/editLaporanPost','LaporanController@editLaporanPost');
Route::get('/hapus_laporan_akhir/{id}','LaporanController@hapusLaporan');

//Manage Pengajuan (Pegawai)
Route::get('/Pengajuan', 'PengajuanController@index');
Route::get('/hapus_pengajuan/{id}','PengajuanController@hapusPengajuan');
Route::get('/pengajuan/mail/{id}','PengajuanController@mailPengajuan');
Route::post('/pengajuan/mail/{id}', 'PengajuanController@sendmail');

Route::get('/masuk','loginController@masuk');
Route::post('/loginPost','loginController@loginPost');
Route::get('/logout','loginController@logout');
Route::get('/dashboard_admin', 'BerandaController@dashboard_admin');
Route::post('/changeLogo', 'adminController@changeLogo');
Route::post('/registerPost','loginController@registerPost');



Route::get('/GaleriAdmin', 'GaleriController@showgaleri');
Route::get('/pengumuman', 'PengumumanController@showPengumumanUser');
Route::post('/LogoPost','GaleriController@LogoPost');
// Route::get('/HomeAdmin', 'BerandaController@showBeranda');
Route::get('/masuk', 'BerandaController@showlogin');
Route::get('/', 'BerandaController@showberandauser');
Route::get('/dashboard_pegawai', 'BerandaController@showberandapegawai');
Route::post('/GaleriPost','GaleriController@GaleriPost');