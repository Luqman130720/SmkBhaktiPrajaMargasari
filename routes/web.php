<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\UnitUsahaController;
use App\Http\Controllers\EventProdiController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\KepalaProdiController;
use App\Http\Controllers\ProspekKerjaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\EventUnitUsahaController;
use App\Http\Controllers\EventOrganisasiController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\SuperAdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth', 'administrator'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);

    // Admin - Kelola Program Studi
    Route::get('/admin/program-studi', [ProgramStudiController::class, 'index']);
    Route::get('/admin/program-studi/create', [ProgramStudiController::class, 'create']);
    Route::post('/admin/program-studi/create', [ProgramStudiController::class, 'store']);
    Route::get('/admin/program-studi/edit/{kaprodi}', [ProgramStudiController::class, 'edit']);
    Route::put('/admin/program-studi/{kaprodi}', [ProgramStudiController::class, 'update']);
    Route::delete('/admin/program-studi/delete/{kaprodi}', [ProgramStudiController::class, 'destroy']);

    // Admin - Kelola Event Program Studi
    Route::get('/admin/event-prodi', [EventProdiController::class, 'index']);
    Route::get('/admin/event-prodi/create', [EventProdiController::class, 'create']);
    Route::post('/admin/event-prodi/create', [EventProdiController::class, 'store']);
    Route::get('/admin/event-prodi/show-prodi', [EventProdiController::class, 'Show_Prodi']);
    Route::get('/admin/event-prodi/list-event/{id}', [EventProdiController::class, 'Show_Event']);
    Route::delete('/admin/event-prodi/list-event/delete/{eventProdi}', [EventProdiController::class, 'destroy']);

    // Admin - Kelola Organisasi
    Route::get('/admin/organisasi', [OrganisasiController::class, 'index']);
    Route::get('/admin/organisasi/create', [OrganisasiController::class, 'create']);
    Route::post('/admin/organisasi/create', [OrganisasiController::class, 'store']);
    Route::get('/admin/organisasi/edit/{organisasi}', [OrganisasiController::class, 'edit']);
    Route::put('/admin/organisasi/{organisasi}', [OrganisasiController::class, 'update']);
    Route::delete('/admin/organisasi/delete/{organisasi}', [OrganisasiController::class, 'destroy']);

    // Admin - Kelola Event Organisasi
    Route::get('/admin/event-organisasi', [EventOrganisasiController::class, 'index']);
    Route::get('/admin/event-organisasi/create', [EventOrganisasiController::class, 'create']);
    Route::post('/admin/event-organisasi/create', [EventOrganisasiController::class, 'store']);
    Route::get('/admin/event-organisasi/show-organisasi', [EventOrganisasiController::class, 'show_organisasi']);
    Route::get('/admin/event-organisasi/list-event/{id}', [EventOrganisasiController::class, 'Show_Event']);
    Route::delete('/admin/event-organisasi/list-organisasi/delete/{eventOrganisasi}', [EventOrganisasiController::class, 'destroy']);

    // Admin - Kelola Unit Usaha
    Route::get('/admin/unit-usaha', [UnitUsahaController::class, 'index']);
    Route::get('/admin/unit-usaha/create', [UnitUsahaController::class, 'create']);
    Route::post('/admin/unit-usaha/create', [UnitUsahaController::class, 'store']);
    Route::get('/admin/unit-usaha/edit/{unit_usaha}', [UnitUsahaController::class, 'edit']);
    Route::put('/admin/unit-usaha/edit/{unit_usaha}', [UnitUsahaController::class, 'update']);
    Route::delete('/admin/unit-usaha/delete/{unit_usaha}', [UnitUsahaController::class, 'destroy']);

    // Admin - Kelola Event Unit Usaha
    Route::get('/admin/event-unit-usaha/create', [EventUnitUsahaController::class, 'create']);
    Route::post('/admin/event-unit-usaha/create', [EventUnitUsahaController::class, 'store']);
    Route::get('/admin/event-unit-usaha/show-unit-usaha', [EventUnitUsahaController::class, 'Show_Unit_Usaha']);
    Route::get('/admin/event-unit-usaha/list-event/{id}', [EventUnitUsahaController::class, 'Show_Event']);
    Route::delete('/admin/event-unit-usaha/list-event/delete/{eventUnitUsaha}', [EventUnitUsahaController::class, 'destroy']);

    // Admin - Kelola Informasi
    Route::get('/admin/informasi', [InformasiController::class, 'index']);
    Route::get('/admin/informasi/create', [InformasiController::class, 'create']);
    Route::post('/admin/informasi/create', [InformasiController::class, 'store']);
    Route::delete('/admin/informasi/delete/{informasi}', [InformasiController::class, 'destroy']);
    Route::get('/admin/informasi/update', [InformasiController::class, 'update']);

    // Admin - Kelola Fasilitas Sekolah
    Route::get('/admin/fasilitas', [FasilitasController::class, 'index']);
    Route::get('/admin/fasilitas/create', [FasilitasController::class, 'create']);
    Route::post('/admin/fasilitas/create', [FasilitasController::class, 'store']);
    Route::delete('/admin/fasilitas/delete/{fasilitas}', [FasilitasController::class, 'destroy']);

    // Admin - Kelola Prestasi Sekolah
    Route::get('/admin/prestasi', [PrestasiController::class, 'index']);
    Route::get('/admin/prestasi/create', [PrestasiController::class, 'create']);
    Route::post('/admin/prestasi/create', [PrestasiController::class, 'store']);
    Route::delete('/admin/prestasi/delete/{prestasi}', [PrestasiController::class, 'destroy']);

    // Admin - Kelola Prospek Kerja
    Route::get('/admin/prospek-kerja', [ProspekKerjaController::class, 'index']);
    Route::get('/admin/prospek-kerja/create', [ProspekKerjaController::class, 'create']);
    Route::post('/admin/prospek-kerja/create', [ProspekKerjaController::class, 'store']);
    Route::delete('/admin/prospek-kerja/delete/{prospekKerja}', [ProspekKerjaController::class, 'destroy']);

    // Admin-Aspirasi
    Route::get('/admin/aspirasi', [AspirasiController::class, 'index']);
    Route::delete('/aspirasi/delete/{aspirasi}', [AspirasiController::class, 'destroy']);

    // Admin - Kepala Prodi / Jurusan
    Route::get('/admin/ketua-program-studi', [KepalaProdiController::class, 'index']);
    Route::get('/admin/ketua-program-studi/create', [KepalaProdiController::class, 'create']);
    Route::post('/admin/ketua-program-studi/create', [KepalaProdiController::class, 'store']);
    Route::delete('/admin/ketua-program-studi/delete/{kepalaProdi}', [KepalaProdiController::class, 'destroy']);
});

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminDashboardController::class, 'index']);
    
    // Super Admin Management Account
    Route::get('/register', [RegistrationController::class, 'index']);
    Route::post('/register', [RegistrationController::class, 'register']);
    Route::get('/show', [RegistrationController::class, 'show']);
    Route::delete('/users/{id}', [RegistrationController::class, 'destroy']);
});

    // login System
    Route::get('/login-admin', [SignInController::class, 'index'])->name('login');
    Route::post('/login-admin', [SignInController::class, 'login']);
    Route::post('/logout-admin', [SignInController::class, 'logout']);


    // User - Dashboard
    Route::get('/user/dashboard', [DashboardController::class, 'index']);
    Route::get('/user/event-prodi/{prodi}', [DashboardController::class, 'event_prodi']);
    Route::get('/user/event-organisasi/{organisasi}', [DashboardController::class, 'event_organisasi']);
    Route::get('/user/unit-usaha/{unit_usaha}', [DashboardController::class, 'event_unit_usaha']);
    Route::get('/user/prestasi', [DashboardController::class, 'prestasi']);
    Route::get('/user/fasilitas-sekolah', [DashboardController::class, 'fasilitas_sekolah']);
    Route::get('/user/tentang-kami', [DashboardController::class, 'tentang_kami']);
    Route::post('/aspirasi/create', [AspirasiController::class, 'store']);