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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::middleware(['auth'])->group(function () {
*/
    Route::get('/dashboard', [App\Http\Controllers\EofficeController::class, 'dashboard'])->name('dashboard');

    //departemen
    Route::get('/departemen', [App\Http\Controllers\EofficeController::class, 'departemen'])->name('departemen');
    Route::get('/form-departemen', [App\Http\Controllers\EofficeController::class, 'form_departemen'])->name('form_departemen');
    Route::post('/insert-departemen', [App\Http\Controllers\EofficeController::class, 'insert_depar'])->name('insert_departemen');
    Route::get('/departemen/delete-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'deletedepartemen']);
    Route::get('/departemen/edit-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'editdepartemen']);
    Route::post('/departemen/update-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'updatedepartemen']);


    //devisi
    Route::get('/devisi', [App\Http\Controllers\EofficeController::class, 'devisi'])->name('devisi');
    Route::get('/form-devisi', [App\Http\Controllers\EofficeController::class, 'form_devisi'])->name('form_devisi');
    Route::post('/insert-devisi', [App\Http\Controllers\EofficeController::class, 'insert_devisi'])->name('insert_devisi');
    Route::get('/devisi/delete-devisi/{id}', [App\Http\Controllers\EofficeController::class, 'deletedevisi']);
    Route::get('/devisi/edit-devisi/{id}', [App\Http\Controllers\EofficeController::class, 'editdevisi']);
    Route::post('/devisi/update-devisi/{id}', [App\Http\Controllers\EofficeController::class, 'updatedevisi']);


    //direktorat
    Route::get('/direktorat', [App\Http\Controllers\EofficeController::class, 'direktorat'])->name('direktorat');
    Route::get('/direktorat/form-direktorat', [App\Http\Controllers\EofficeController::class, 'form_direktorat'])->name('form_direktorat');
    Route::post('/direktorat/insert-direktorat', [App\Http\Controllers\EofficeController::class, 'insert_direktorat'])->name('insert_direktorat');
    Route::get('/direktorat/delete-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'deletedirektorat']);
    Route::get('/direktorat/edit-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'editdirektorat']);
    Route::post('/direktorat/update-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'updatedirektorat']);


    //seksi
    Route::get('/seksi', [App\Http\Controllers\EofficeController::class, 'seksi'])->name('seksi');
    Route::get('/form-seksi', [App\Http\Controllers\EofficeController::class, 'form_seksi'])->name('form_seksi');
    Route::post('/insert-seksi', [App\Http\Controllers\EofficeController::class, 'insert_seksi'])->name('insert_seksi');
    Route::get('/seksi/delete-seksi/{id}', [App\Http\Controllers\EofficeController::class, 'deleteseksi']);
    Route::get('/seksi/edit-seksi/{id}', [App\Http\Controllers\EofficeController::class, 'editseksi']);
    Route::post('/seksi/update-seksi/{id}', [App\Http\Controllers\EofficeController::class, 'updateseksi']);


    //kategori
    Route::get('/kategori-surat', [App\Http\Controllers\EofficeController::class, 'kategori'])->name('kategori');


    //jenis surat
    Route::get('/jenis-surat', [App\Http\Controllers\EofficeController::class, 'jenis_surat'])->name('jenis');
    Route::get('/form-jenissurat', [App\Http\Controllers\EofficeController::class, 'form_jenissurat'])->name('form_jenissurat');
    Route::post('/insert-jenissurat', [App\Http\Controllers\EofficeController::class, 'insert_jenissurat'])->name('insert_jenissurat');
    Route::get('/jenis-surat/delete-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'deletejenis']);
    Route::get('/jenis-surat/edit-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'editjenis']);
    Route::post('/jenis-surat/update-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'updatejenis']);

    Route::get('/form-kategori', [App\Http\Controllers\EofficeController::class, 'form_kategori'])->name('form_kategori');
    Route::post('/insert-kategori', [App\Http\Controllers\EofficeController::class, 'insert_kategori'])->name('insert_kategori');


    //level jabatan
    Route::get('/level-jabatan', [App\Http\Controllers\EofficeController::class, 'level_jabatan'])->name('level');


    //pegawai
    Route::get('/pegawai', [App\Http\Controllers\EofficeController::class, 'pegawai'])->name('pegawai');
    Route::get('/form-pegawai', [App\Http\Controllers\EofficeController::class, 'form_pegawai'])->name('form_pegawai');
    Route::post('/insert-pegawai', [App\Http\Controllers\EofficeController::class, 'insert_pegawai'])->name('insert_pegawai');
    Route::get('/pegawai/edit-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'editpegawai']);
    Route::get('/pegawai/delete-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'deletepegawai']);
    Route::post('/pegawai/update-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'updatepegawai']);
    Route::get('/pegawai/getdevisi/{id}', [App\Http\Controllers\EofficeController::class, 'getdevisi'])->name('getdevisi');
    Route::get('/pegawai/getdepartemen/{id}', [App\Http\Controllers\EofficeController::class, 'getdepartemen'])->name('getdepartemen');
    Route::get('/pegawai/getseksi/{id}', [App\Http\Controllers\EofficeController::class, 'getseksi'])->name('getseksi');



    //Surat

    //surat masuk
    Route::get('/surat-masuk', [App\Http\Controllers\EofficeController::class, 'surat_masuk'])->name('surat_masuk');
    Route::get('/surat-masuk/form-surat-masuk', [App\Http\Controllers\EofficeController::class, 'form_masuk'])->name('form_masuk');


    //surat keluar
    Route::get('/surat-keluar', [App\Http\Controllers\EofficeController::class, 'surat_keluar'])->name('surat_keluar');
    Route::get('/surat-keluar/form-surat-keluar', [App\Http\Controllers\EofficeController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi', [App\Http\Controllers\EofficeController::class, 'disposisi'])->name('disposisi');
    Route::get('/disposisi/form-disposisi', [App\Http\Controllers\EofficeController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo', [App\Http\Controllers\EofficeController::class, 'memo'])->name('memo');
    Route::get('/memo/form-memo', [App\Http\Controllers\EofficeController::class, 'form_memo'])->name('form_memo');
/*
}); 
*/


//Direktur

//Dashboard
Route::get('/dashboard-direktur', [App\Http\Controllers\DirekturController::class, 'dashboard'])->name('HomeDirektur');

//Kategori
Route::get('/kategori-surat-direktur', [App\Http\Controllers\DirekturController::class, 'kategori'])->name('KategoriDirektur');

//Jenis Surat
Route::get('/jenis-surat-direktur', [App\Http\Controllers\DirekturController::class, 'jenis_surat'])->name('JenisDirektur');

//Direktorat
Route::get('/direktorat-direktur', [App\Http\Controllers\DirekturController::class, 'direktorat'])->name('DirektoratDirektur');

//Devisi
Route::get('/devisi-direktur', [App\Http\Controllers\DirekturController::class, 'devisi'])->name('DevisiDirektur');

//Departemen
Route::get('/departemen-direktur', [App\Http\Controllers\DirekturController::class, 'departemen'])->name('DepartemenDirektur');

//Seksi
Route::get('/seksi-direktur', [App\Http\Controllers\DirekturController::class, 'seksi'])->name('SeksiDirektur');

//Level Jabatan
Route::get('/level-jabatan-direktur', [App\Http\Controllers\DirekturController::class, 'level_jabatan'])->name('LevelDirektur');

//Pegawai
Route::get('/pegawai-direktur', [App\Http\Controllers\DirekturController::class, 'pegawai'])->name('PegawaiDirektur');

//Surat Direktur

    //surat masuk
    Route::get('/surat-masuk-direktur', [App\Http\Controllers\DirekturController::class, 'surat_masuk'])->name('MasukDirektur');
    Route::get('/surat-masuk-direktur-direktur/form-surat-masuk-direktur-direktur', [App\Http\Controllers\DirekturController::class, 'form_masuk'])->name('form_masuk_direktur');


    //surat keluar
    Route::get('/surat-keluar-direktur', [App\Http\Controllers\DirekturController::class, 'surat_keluar'])->name('KeluarDirektur');
    Route::get('/surat-keluar-direktur/form-surat-keluar-direktur', [App\Http\Controllers\DirekturController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi-direktur', [App\Http\Controllers\DirekturController::class, 'disposisi'])->name('DisposisiDirektur');
    Route::get('/disposisi-direktur/form-disposisi-direktur', [App\Http\Controllers\DirekturController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo-direktur', [App\Http\Controllers\DirekturController::class, 'memo'])->name('MemoDirektur');
    Route::get('/memo/form-memo-direktur', [App\Http\Controllers\DirekturController::class, 'form_memo'])->name('form_memo');




//Devisi
//Dashboard
Route::get('/dashboard-devisi', [App\Http\Controllers\DevisiController::class, 'dashboard'])->name('HomeDevisi');

//Kategori
Route::get('/kategori-surat-devisi', [App\Http\Controllers\DevisiController::class, 'kategori'])->name('KategoriDevisi');

//Jenis Surat
Route::get('/jenis-surat-devisi', [App\Http\Controllers\DevisiController::class, 'jenis_surat'])->name('JenisDevisi');

//Direktorat
Route::get('/direktorat-devisi', [App\Http\Controllers\DevisiController::class, 'direktorat'])->name('DirektoratDevisi');

//Devisi
Route::get('/devisi-devisi', [App\Http\Controllers\DevisiController::class, 'devisi'])->name('DevisiDevisi');

//Departemen
Route::get('/departemen-devisi', [App\Http\Controllers\DevisiController::class, 'departemen'])->name('DepartemenDevisi');

//Seksi
Route::get('/seksi-devisi', [App\Http\Controllers\DevisiController::class, 'seksi'])->name('SeksiDevisi');

//Level Jabatan
Route::get('/level-jabatan-devisi', [App\Http\Controllers\DevisiController::class, 'level_jabatan'])->name('LevelDevisi');

//Pegawai
Route::get('/pegawai-devisi', [App\Http\Controllers\DevisiController::class, 'pegawai'])->name('PegawaiDevisi');

//Surat Devisi

    //surat masuk
    Route::get('/surat-masuk-devisi', [App\Http\Controllers\DevisiController::class, 'surat_masuk'])->name('MasukDevisi');
    Route::get('/surat-masuk-devisi/form-surat-masuk-devisi', [App\Http\Controllers\DevisiController::class, 'form_masuk'])->name('form_masuk_Devisi');


    //surat keluar
    Route::get('/surat-keluar-devisi', [App\Http\Controllers\DevisiController::class, 'surat_keluar'])->name('KeluarDevisi');
    Route::get('/surat-keluar-devisi/form-surat-keluar-devisi', [App\Http\Controllers\DevisiController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi-devisi', [App\Http\Controllers\DevisiController::class, 'disposisi'])->name('DisposisiDevisi');
    Route::get('/disposisi-devisi/form-disposisi-devisi', [App\Http\Controllers\DevisiController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo-devisi', [App\Http\Controllers\DevisiController::class, 'memo'])->name('MemoDevisi');
    Route::get('/memo/form-memo-devisi', [App\Http\Controllers\DevisiController::class, 'form_memo'])->name('form_memo');



//Departemen

//Dashboard
Route::get('/dashboard-departemen', [App\Http\Controllers\DepartemenController::class, 'dashboard'])->name('HomeDep');

//Kategori
Route::get('/kategori-surat-departemen', [App\Http\Controllers\DepartemenController::class, 'kategori'])->name('KategoriDep');

//Jenis Surat
Route::get('/jenis-surat-departemen', [App\Http\Controllers\DepartemenController::class, 'jenis_surat'])->name('JenisDep');

//Direktorat
Route::get('/direktorat-departemen', [App\Http\Controllers\DepartemenController::class, 'direktorat'])->name('DirektoratDep');

//Devisi
Route::get('/devisi-departemen', [App\Http\Controllers\DepartemenController::class, 'devisi'])->name('DevisiDep');

//Departemen
Route::get('/departemen-departemen', [App\Http\Controllers\DepartemenController::class, 'departemen'])->name('DepartemenDep');

//Seksi
Route::get('/seksi-departemen', [App\Http\Controllers\DepartemenController::class, 'seksi'])->name('SeksiDep');

//Level Jabatan
Route::get('/level-jabatan-departemen', [App\Http\Controllers\DepartemenController::class, 'level_jabatan'])->name('LevelDep');

//Pegawai
Route::get('/pegawai-departemen', [App\Http\Controllers\DepartemenController::class, 'pegawai'])->name('PegawaiDep');

//Surat Departemen

    //surat masuk
    Route::get('/surat-masuk-departemen', [App\Http\Controllers\DepartemenController::class, 'surat_masuk'])->name('MasukDep');
    Route::get('/surat-masuk-departemen/form-surat-masuk-departemen', [App\Http\Controllers\DepartemenController::class, 'form_masuk'])->name('form_masuk_Dep');


    //surat keluar
    Route::get('/surat-keluar-departemen', [App\Http\Controllers\DepartemenController::class, 'surat_keluar'])->name('KeluarDep');
    Route::get('/surat-keluar-departemen/form-surat-keluar-departemen', [App\Http\Controllers\DepartemenController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi-departemen', [App\Http\Controllers\DepartemenController::class, 'disposisi'])->name('DisposisiDep');
    Route::get('/disposisi-departemen/form-disposisi-departemen', [App\Http\Controllers\DepartemenController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo-departemen', [App\Http\Controllers\DepartemenController::class, 'memo'])->name('MemoDep');
    Route::get('/memo/form-memo-departemen', [App\Http\Controllers\DepartemenController::class, 'form_memo'])->name('form_memo');



//Seksi

//Dashboard
Route::get('/dashboard-seksi', [App\Http\Controllers\SeksiController::class, 'dashboard'])->name('HomeSeksi');

//Kategori
Route::get('/kategori-surat-seksi', [App\Http\Controllers\SeksiController::class, 'kategori'])->name('KategoriSeksi');

//Jenis Surat
Route::get('/jenis-surat-seksi', [App\Http\Controllers\SeksiController::class, 'jenis_surat'])->name('JenisSeksi');

//Direktorat
Route::get('/direktorat-seksi', [App\Http\Controllers\SeksiController::class, 'direktorat'])->name('DirektoratSeksi');

//Devisi
Route::get('/devisi-seksi', [App\Http\Controllers\SeksiController::class, 'devisi'])->name('DevisiSeksi');

//Departemen
Route::get('/departemen-seksi', [App\Http\Controllers\SeksiController::class, 'departemen'])->name('DepartemenSeksi');

//Seksi
Route::get('/seksi-seksi', [App\Http\Controllers\SeksiController::class, 'seksi'])->name('SeksiSek');

//Level Jabatan
Route::get('/level-jabatan-seksi', [App\Http\Controllers\SeksiController::class, 'level_jabatan'])->name('LevelSeksi');

//Pegawai
Route::get('/pegawai-seksi', [App\Http\Controllers\SeksiController::class, 'pegawai'])->name('PegawaiSeksi');

//Surat Direktur

    //surat masuk
    Route::get('/surat-masuk-seksi', [App\Http\Controllers\SeksiController::class, 'surat_masuk'])->name('MasukSeksi');
    Route::get('/surat-masuk-direktur-seksi/form-surat-masuk-direktur-v', [App\Http\Controllers\SeksiController::class, 'form_masuk'])->name('form_masuk_seksi');


    //surat keluar
    Route::get('/surat-keluar-seksi', [App\Http\Controllers\SeksiController::class, 'surat_keluar'])->name('KeluarSeksi');
    Route::get('/surat-keluar-seksi/form-surat-keluar-seksi', [App\Http\Controllers\SeksiController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi-seksi', [App\Http\Controllers\SeksiController::class, 'disposisi'])->name('DisposisiSeksi');
    Route::get('/disposisi-direktur/form-disposisi-seksi', [App\Http\Controllers\SeksiController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo-seksi', [App\Http\Controllers\SeksiController::class, 'memo'])->name('MemoSeksi');
    Route::get('/memo/form-memo-seksi', [App\Http\Controllers\SeksiController::class, 'form_memo'])->name('form_memo');
