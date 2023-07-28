<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalgController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KerawanangController;
use App\Http\Controllers\KerawananwController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('landingpage.landing');
});




// CRUD BUAT AKUN SISWA 

Route::get('/tablesiswa',[SiswaController::class,'index']);

Route::get('/add_siswa',[SiswaController::class,'create']);

Route::post('/adds',[SiswaController::class,'store']);

Route::get('/siswa/detail/{id}',[SiswaController::class,'show']); 

Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);

Route::put('/siswa/up/{id}',[SiswaController::class,'update']);

Route::delete('/siswa/destroy/{id}',[SiswaController::class,'destroy'])->name('delete-siswa'); 




// BUAT TABLE WALAS
Route::get('/tablewalas',[WalasController::class,'index']);

Route::get('/add_walas',[WalasController::class,'create']);

Route::post('/addw',[WalasController::class,'store']);

Route::get('/walas/detail/{id}',[WalasController::class,'show']); 

Route::get('/walas/edit/{id}',[WalasController::class,'edit']);

Route::put('/walas/up/{id}',[WalasController::class,'update']);

Route::delete('/walas/destroy/{id}',[WalasController::class,'destroy']); 


// BUAT TABLE KELAS 

Route::get('/tablekelas',[KelasController::class,'index']);

Route::get('/add_kelas',[KelasController::class,'create']);

Route::post('/add',[KelasController::class,'store']);

Route::delete('/kelas/destroy/{id}',[KelasController::class,'destroy']); 

//CRUD BUAT  AKUN GURU 

Route::get('/tableguru',[GuruController::class,'index']);

Route::get('/add_guru',[GuruController::class,'create']);

Route::post('/addg',[GuruController::class,'store']);

Route::get('/guru/detail/{id}',[GuruController::class,'show']); 

Route::delete('/guru/destroy/{id}',[GuruController::class,'destroy']); 



// CRUD JADWAL SISWA

Route::get('/jadwalsiswa',[JadwalController::class,'index']);
Route::get('/addj',[JadwalController::class,'create']);
Route::post('/add_jadwal',[JadwalController::class,'store']);


// CRUD JADWAL Guru

Route::get('/jadwalguru',[JadwalgController::class,'index']);
Route::get('/jadwalguru/edit/{id}',[JadwalgController::class,'edit']);
Route::put('/jadwalguru/up/{id}', [JadwalgController::class,'update']);
Route::put('/jadwalguruu/{id}', [JadwalgController::class,'updates']);

//CRUD KERAWANAN GURU
Route::get('/kerawanan-guru',[KerawanangController::class,'index']);
Route::get('/addg',[KerawanangController::class,'create']);
Route::post('/add_kerawanang',[KerawanangController::class,'store']);
Route::get('/kerawanang/edit/{id}',[KerawanangController::class,'edit']);
Route::put('/kerawanang/up/{id}', [KerawanangController::class,'update']);

//CRUD KERAWANAN WALAS
Route::get('/kerawanan-walas',[KerawananwController::class,'index']);
Route::get('/addw',[KerawananwController::class,'create']);
Route::post('/add_kerawananw',[KerawananwController::class,'store']);
Route::get('/kerawanan-walas/edit/{id}',[KerawananwController::class,'edit']);
Route::put('/kerawanan-walas/up/{id}', [KerawananwController::class,'update']);

// LOGIN
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
});

// EDIT PROFILE
Route::get('/editguru', [ProfileController::class,'showProfile'])->name('dbguru.edit');
Route::get('/edituser', [ProfileController::class,'showProfilesiswa'])->name('dbuser.edit');
Route::get('/editkor', [ProfileController::class,'showProfilekoor'])->name('dbkor.edit');

//ROUTE KE PROFILE
Route::get('/profilesiswa', function () {
    return view('dbuser.dashboard-profile');
});

Route::get('/profileguru', function () {
    return view('dbguru.dashboard-profile-gr');
});

Route::get('/profilekor', function () {
    return view('dbkor.dashboard-profile-kordinat');
});

// pdf
Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/siswa/cetak_pdf', [SiswaController::class,'cetak_pdf'])->name('cetak_pdf');




//  USER
// Route::get('/tablesiswa', function () {
//     return view('dbuser.dashboard-table');
// });

// Route::get('/tableguru', function () {
    //     return view('dbguru.dashboard-table-gr');
// });


// Route::get('/tablekoor-siswa', function () {
    //     return view('dbkor.tbsiswa.dashboard-table-kordinat-siswa');
    // });

//KOORDINAT
    

// Route::get('/tablekoor-guru', function () {
//     return view('dbkor.tbguru.dashboard-table-kordinat-guru');
// });

// Route::get('/tablekoor-walas', function () {
//     return view('dbkor.tbwalas.dashboard-table-kordinat-walas');
// });

// Route::get('/kelas', [KelasController::class, 'index']);

//Kelas
// Route::get('/tablekelas', function () {
//     return view('tbkelas.dashboard-table-kelas');        
// });



// Route::get('/tablekelas', function () {
//     return view('dbkor.tbkelas.dashboard-table-kordinat-kelas');        
// });

// // PROFILE WALAS
// Route::get('/profileguru', function () {
//     return view('dbguru.dashboard-profile-gr');    
// });

// routemiddleware

