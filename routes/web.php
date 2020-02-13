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

//Relasi
Route::get('penulis',function(){
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data) {
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug";
        echo "<hr>";
    }
});
//Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1',function()
    {
        //Mencari mahasiswa dengan NIM 101010
        $mahasiswa = Mahasiswa::where('nim','=','101010')->first();

    });

Route::get('relasi-2',function()
    {
        //Mencari mahasiswa dengan NIM 101010
        $mahasiswa = Mahasiswa::where('nim','=','101010')->first();

    });

Route::get('relasi-3',function()
    {
        //Mencari dosen yang bernama yusup
        $dosen = Dosen::where('nama','=','Yusups')->first();

        //Menampilkan seluruh dara mahasiswa dari dosen YUsups
        foreach ($dosen->mahasiswa as $temp) {
            echo '<li>Nama : '.$temp;
        }

    });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('siswa','SiswaController');
Route::get('tabungan/report','TabunganController@jumlah_tabungan');
Route::resource('tabungan','TabunganController');
