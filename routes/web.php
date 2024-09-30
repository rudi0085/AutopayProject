<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;


// Route::middleware('auth:admin')->group(function () {
//     Route::get('/admin', function () {
//         // Hanya admin yang bisa akses
//     })->name('admin.dashboard');
// });

// Route::middleware('auth:author')->group(function () {
//     Route::get('/author', function () {
//         // Hanya author yang bisa akses
//     })->name('author.dashboard');
// });

// Route::middleware('auth:web')->group(function () {
//     Route::get('/home', function () {
//         // Hanya user biasa yang bisa akses
//     })->name('home');
// });


Route::get('/', [\App\Http\Controllers\LandingpageController::class, 'index'])->name('landingpage.index');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');

Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/keluar', [\App\Http\Controllers\AuthController::class, 'keluar'])->name('auth.keluar');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/setupmaster', [\App\Http\Controllers\SetupMasterController::class, 'index'])->name('setupmaster.index');
Route::get('/efin', [\App\Http\Controllers\EfinController::class, 'index'])->name('efin.index');
Route::get('/uploadpremi', [\App\Http\Controllers\UploadPremiController::class, 'index'])->name('uploadpremi.index');
Route::get('/uploadpotongan', [\App\Http\Controllers\UploadPotonganController::class, 'index'])->name('uploadpotongan.index');
Route::get('/hakakses', [\App\Http\Controllers\HakaksesController::class, 'index'])->name('hakakses.index');
Route::get('/hcmmaster', [\App\Http\Controllers\HcmMasterController::class, 'index'])->name('hcmmaster.index');
Route::get('/hcmwagetype', [\App\Http\Controllers\HcmWagetypeController::class, 'index'])->name('hcmwagetype.index');
Route::get('/managementsub', [\App\Http\Controllers\ManagementSubController::class, 'index'])->name('managementsub.index');
Route::get('/datagajisap', [\App\Http\Controllers\DataGajiSAPController::class, 'index'])->name('datagajisap.index');
Route::get('/kompilasigaji', [\App\Http\Controllers\KompilasiGajiSAPController::class, 'index'])->name('kompilasigaji.index');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

// Route::get('/', function () {
//     return view('landingpage', ['title'=>'Auto Pay']);
// });
// Route::get('/login', function () {
//     return view('login', ['title'=>'Login']);
// });
// Route::get('/dashboard', function () {
//     return view('dashboard', ['title'=>'Dashboard']);
// });
// Route::get('/setupmaster', function () {
//     return view('setupmaster', ['title'=>'Setup Master', 'wilayah'=>[]]);
// });
// Route::get('/hakakses', function () {
//     return view('hakakses', ['title'=>'Hak Akses']);
// });
// Route::get('/efin', function () {
//     return view('efin', ['title'=>'Efin']);
// });
// Route::get('/uploadpremi', function () {
//     return view('uploadpremi', ['title'=>'Upload Premi']);
// });
// Route::get('/uploadpotongan', function () {
//     return view('uploadpotongan', ['title'=>'Upload Potongan']);
// });
// Route::get('/hcmmaster', function () {
//     return view('hcmmaster', ['title'=>'HCM Master', 'dataTabel' => [
//         [
//         'id' => 9006261,
//         'nama' => 'Sri Budiningsih',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'Krani 1 Tata Usaha',
//         'posisi' => 'Guru TK Kantor',
//         ],
//         [
//         'id' => 9006262,
//         'nama' => 'Wardoyo',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'Keamanan',
//         'posisi' => 'Kepala Satuan Pengaman',
//         ],
//         [
//         'id' => 9006263,
//         'nama' => 'Suko Raharjo',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'Mandor Kendaraan PNP',
//         'posisi' => 'Sopir Truk',
//         ],
//         [
//         'id' => 9006264,
//         'nama' => 'TURKHAMUN',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'KRANI 1 TATA USAHA',
//         'posisi' => 'Masa Bebas Tugas',
//         ],
//         [
//         'id' => 9006265,
//         'nama' => 'TUMIN',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'MANDOR SADAP',
//         'posisi' => 'Mandor Sadap Klepu',
//         ],
//         [
//         'id' => 9006266,
//         'nama' => 'AGUS MULYONO',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'KEAMANAN',
//         'posisi' => 'Keamanan Klepu',
//         ],
//         [
//         'id' => 9006267,
//         'nama' => 'SUPRIYADI',
//         'status' => 'Active',
//         'grup' => 'Karpel - Tetap',
//         'sub-area' => 'Ngobo',
//         'unit' => 'KEAMANAN',
//         'posisi' => 'Satuan Pengamanan',
//         ],
//         [
//             'id' => 9006261,
//             'nama' => 'Sri Budiningsih',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'Krani 1 Tata Usaha',
//             'posisi' => 'Guru TK Kantor',
//             ],
//             [
//             'id' => 9006262,
//             'nama' => 'Wardoyo',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'Keamanan',
//             'posisi' => 'Kepala Satuan Pengaman',
//             ],
//             [
//             'id' => 9006263,
//             'nama' => 'Suko Raharjo',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'Mandor Kendaraan PNP',
//             'posisi' => 'Sopir Truk',
//             ],
//             [
//             'id' => 9006264,
//             'nama' => 'TURKHAMUN',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'KRANI 1 TATA USAHA',
//             'posisi' => 'Masa Bebas Tugas',
//             ],
//             [
//             'id' => 9006265,
//             'nama' => 'TUMIN',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'MANDOR SADAP',
//             'posisi' => 'Mandor Sadap Klepu',
//             ],
//             [
//             'id' => 9006266,
//             'nama' => 'AGUS MULYONO',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'KEAMANAN',
//             'posisi' => 'Keamanan Klepu',
//             ],
//             [
//             'id' => 9006267,
//             'nama' => 'SUPRIYADI',
//             'status' => 'Active',
//             'grup' => 'Karpel - Tetap',
//             'sub-area' => 'Ngobo',
//             'unit' => 'KEAMANAN',
//             'posisi' => 'Satuan Pengamanan',
//             ],                                   
            
//     ] ]);
// });
// Route::get('/hcmwagetype', function () {
//     return view('hcmwagetype', ['title'=>'HCM Wagetype']);
// });
// Route::get('/managementsub', function () {
//     return view('managementsub', ['title'=>'Maagement Sub']);
// });
// Route::get('/datagajisap', function () {
//     return view('datagajisap', ['title'=>'Data Gaji SAP']);
// });
// Route::get('/kompilasigaji', function () {
//     return view('kompilasigaji', ['title'=>'Kompilasi Gaji']);
// });

// Route::get('/profile', function () {
//     return view('profile', ['title'=>'Profile']);
// });