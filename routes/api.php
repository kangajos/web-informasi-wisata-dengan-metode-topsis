<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

use App\TopsisModel as topsis;

Route::get('/get_wisata', function () {

    $kategori = topsis::getKategori();
    $daerah = topsis::getDaerah();
    if ($hasil = topsis::getWisataByScore()->count() > 0) {
        $data_hasil = topsis::getWisataByScore();

    } else {
        $data_hasil = topsis::topsis();
    }
    topsis::updateScoreDefault();
    return $data_hasil;
});
