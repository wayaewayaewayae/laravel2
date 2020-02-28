<?php

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
//import model
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

//route one to one
    Route::get('relasi-1',function()
    {
    //mahasiswa
    $mhs = Mahasiswa::where('nim','=','2710')->first();

    //Menampilkan data wali dari mahasiswa yang dipilih
    return $mhs->Wali->nama;
});

    Route::get('relasi-2',function()
    {
    //mahasiswa
    $mhs = Mahasiswa::where('nim','=','0876')->first();

    //Menampilkan data Dosen dari mahasiswa yang dipilih
    return $mhs->Dosen->nama;
    });

    //Route One To Many
    Route::get('relasi-3',function()
    {
    //mahasiswa
    $dosen = Dosen::where('nama','=','Asep')->first();

    //Menampilkan data Dosen dari mahasiswa yang dipilih
    foreach ($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
         '<strong> ' . $temp->nim . '</strong></li>';
    });


    Route::get('relasi-4',function()
    {
    //mencari mahasiswa yang bernama dadang
    $dadang = Mahasiswa::where('nama','=','Dadang Peloy')->first();

    //Menampilkan seluruh hobi dari dadang
    foreach ($dadang->hobi as $temp)
    echo '<li><strong>' . $temp->hobi . '</strong></li>';
    });


    Route::get('relasi-5',function()
    {
    //
    $mengaji = Hobi::where('hobi','=','Mengaji al-quran')->first();

    //Menampilkan data Hobi dari mahasiswa yang dipilih
    foreach ($mengaji->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama . ' <strong>' .
            $temp->nim . ' </strong></li>';
    });

    Route::get('relasi-join',function(){
        $sql = DB::table('mahasiswas')
        ->select('mahasiswas.nama','mahasiswas.nim','walis.nama as nama_wali')
        ->join('walis','walis.id_mahasiswa','=','mahasiswas.id')->get();
        dd($sql);
    });


    Route::get('eloquent',function()
    {
        $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
        return view('eloquent',compact('mahasiswa'));
    });

    //Tugas
    Route::get('eloquent-tgs',function()
    {
        $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get()->take(1);
        return view('eloquent-tgs',compact('mahasiswa'));
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Blade template
Route::get('beranda',function()
{
    return view('beranda');
});

Route::get('Tentang',function()
{
    return view('Tentang');
});

Route::get('Contact',function()
{
    return view('Contact');
});

//crud dosen
Route::resource('dosen','DosenController');

//crud hobi
Route::resource('hobi','HobiController');

//crud mahasiswa
Route::resource('mahasiswa','MahasiswaController');

//crud wali
Route::resource('wali','WaliController');

