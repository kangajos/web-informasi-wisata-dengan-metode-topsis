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

use App\TopsisModel as topsis;

// defaul route //
Route::get('/', function () {

    $kategori = topsis::getKategori();
    $daerah = topsis::getDaerah();
//    if ()
    if ($hasil = topsis::getWisataByScore()->count() > 0){
        $data_hasil = topsis::getWisataByScore();

    }else{
        $data_hasil = topsis::topsis();
    }
    topsis::updateScoreDefault();
//    return dd($data_hasil);
    return $data_hasil;
    return view("layouts.front-end", compact("kategori", "daerah", "data_hasil"));
});
// end defualt route
// auth //
Route::get('/auth', "AuthController@index");
Route::post('/auth/cek', "AuthController@check")->name("auth_check");
Route::get('/auth/out', "AuthController@out")->name("auth_out");

Route::get("/home", "HomeController@index")->name("home");

//rout topsis//
Route::post("/result", "TopsisController@index")->name("topsis");
Route::get("/result/detail/{id}", "TopsisController@detail")->name("detail_wisata");
Route::post("/result/save_komen", "TopsisController@saveKomen")->name("save_komen");

// wisata route //
Route::get('/wisata', 'WisataController@index')->name("wisata");
Route::get('/wisata/add', 'WisataController@add')->name("wisata_add");
Route::post('/wisata/save', 'WisataController@save')->name("wisata_save");
Route::get('/wisata/edit/{wisata_id}', 'WisataController@edit')->name("wisata_edit");
Route::post('/wisata/update', 'WisataController@updated')->name("wisata_update");
Route::get('/wisata/delete/{wisata_id}', 'WisataController@deleted')->name("wisata_deleted");
// end wisata route //

// manage kategori wisata route //
Route::get('manage-kategori-wisata', 'ManageKategoriWisataController@index')->name("manage_kategori_wisata");
Route::get('manage-kategori-wisata/add', 'ManageKategoriWisataController@add')->name("kategori_wisata_add");
Route::post('manage-kategori-wisata/save', 'ManageKategoriWisataController@save')->name("kategori_wisata_save");
Route::get('manage-kategori-wisata/edit/{id}', 'ManageKategoriWisataController@edit')->name("kategori_wisata_edit");
Route::post('manage-kategori-wisata/updated', 'ManageKategoriWisataController@updated')->name("kategori_wisata_updated");
Route::get('manage-kategori-wisata/deleted/{id}', 'ManageKategoriWisataController@deleted')->name("kategori_wisata_deletet");
// end manage kategori wisata route //

// manage daerah wisata route //
Route::get('manage-daerah-wisata', 'ManageDaerahWisataController@index')->name("manage_daerah_wisata");
Route::get('manage-daerah-wisata/add', 'ManageDaerahWisataController@add')->name("daerah_wisata_add");
Route::post('manage-daerah-wisata/save', 'ManageDaerahWisataController@save')->name("daerah_wisata_save");
Route::get('manage-daerah-wisata/edit/{id}', 'ManageDaerahWisataController@edit')->name("daerah_wisata_edit");
Route::post('manage-daerah-wisata/updated', 'ManageDaerahWisataController@updated')->name("daerah_wisata_updated");
Route::get('manage-daerah-wisata/deleted/{id}', 'ManageDaerahWisataController@deleted')->name("daerah_wisata_deleted");
// end manage daerah wisata route //

// route kriteri //