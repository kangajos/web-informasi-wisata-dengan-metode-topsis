<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopsisModel as topsis;

class TopsisController extends Controller
{
    public function index(Request $req)
    {
        $input = $req->all();
        $params = array(
            "daerah" => $input['daerah'],
            "kategori" => $input['kategori'],
            "harga" => $input['harga'],
            "pelayanan" => $input['pelayanan'],
            "fasilitas" => $input['fasilitas'],
            "jarak" => $input['jarak'],
        );
        $topsis = topsis::topsis($params);
        $whereIn = array();
        foreach ($topsis as $value) {
            $whereIn[] = $value->wisata_id;

        }
        $produk = topsis::get_data_produk($whereIn);
//        foreach ($produk as $data_produk) {
//            $nilai = topsis::get_data_nilai_id($data_produk->wisata_id);
//            foreach ($nilai as $data_nilai){
//                $pembagi = topsis::pembagi($data_nilai->id_kriteria);
//                $hasil = $data_nilai->nilai / $pembagi;
//            }
//        }


        $max_min = array();
        $produk = topsis::get_data_produk($whereIn);
        foreach ($produk as $data_produk) {

            $nilai = topsis::get_data_nilai_id($data_produk->wisata_id);
            foreach ($nilai as $key => $data_nilai) {
                $pembagi = topsis::pembagi($data_nilai->id_kriteria);
                $hasil = $data_nilai->nilai / $pembagi;
                // pembobotan
                $bobot = topsis::get_data_kriteria_id($data_nilai->id_kriteria);
                foreach ($bobot as $data_bobot) {

                    $pembobotan = $hasil * $data_bobot->bobot;
                    $pembobotan;
                    // $max_mins['nilai']= $data_nilai['nilai'];
                    $max_mins['pembobotan'] = $pembobotan;
                    $max_mins['id_kriteria'] = $data_nilai->id_kriteria;
                    $max_mins['wisata_id'] = $data_produk->wisata_id;
                    array_push($max_min, $max_mins);


                }
                // end pembobotan
                // print_r($max_min);
            }
        }
//        echo "<pre>";
//        print_r($max_min);
//        die();


        topsis::delete_min_max();

        foreach ($max_min as $insert_data) {
//            echo $insert_data['id_kriteria']."-".$insert_data['pembobotan']."<br>";
            topsis::insert_data_max_min($insert_data['id_kriteria'], $insert_data['pembobotan']);
        }

        $data_hasil_min_max = array();
        $data = topsis::min_max();
        foreach ($data as $data_min_max) {
            // print_r($data_min_max);
            $data_hasil_min_maxs['id_kriteria'] = $data_min_max->id_kriteria;
            $data_hasil_min_maxs['min'] = $data_min_max->min;
            $data_hasil_min_maxs['max'] = $data_min_max->max;
            array_push($data_hasil_min_max, $data_hasil_min_maxs);

        }

        foreach ($max_min as $row) {
            foreach ($data_hasil_min_max as $data) {
                if ($row['id_kriteria'] == $data['id_kriteria']) {
                    $hasil = $data['max'] - $row['pembobotan'];
                    $pangkat = pow($hasil, 2);

                }
            }
            number_format($pangkat, 2);
        }
        $ranking_array = array();
//        $produk = topsis::get_data_produk($whereIn);
        foreach ($produk as $data_produk) {
            $nilai_d_plus = 0;
            $nilai_d_min = 0;
            foreach ($max_min as $row) {
                foreach ($data_hasil_min_max as $data) {
                    if ($row['id_kriteria'] == $data['id_kriteria']) {
                        $hasil_plus = $data['max'] - $row['pembobotan'];
                        $hasil_min = $data['min'] - $row['pembobotan'];
                        $pangkat_plus = pow($hasil_plus, 2);
                        $pangkat_min = pow($hasil_min, 2);
                    }
                }
//                echo $data_produk->wisata_id ." ".$row['wisata_id'];
                if ($data_produk->wisata_id == $row['wisata_id']) {
                    $nilai_d_plus = $nilai_d_plus + $pangkat_plus;
                    $nilai_d_min = $nilai_d_min + $pangkat_min;
                }
            }

            $bagi = $nilai_d_min + $nilai_d_plus;
            $nilai_v = number_format($nilai_d_min / $bagi, 2);
//            echo $nilai_d_min;
//            die();
            $ranking_arrays['nilai_v'] = $nilai_v;
            $ranking_arrays['nama_wisata'] = $data_produk->nama_wisata;
            $ranking_arrays['wisata_id'] = $data_produk->wisata_id;
            array_push($ranking_array, $ranking_arrays);
        }


        $no = 1;
        asort($ranking_array);
        topsis::updateScoreDefault();
        foreach ($ranking_array as $ranking) {

//            echo $ranking['wisata_id'];
//            echo $ranking['nilai_v'];
            topsis::updateScore(array("score" => $ranking['nilai_v']), array("wisata_id" => $ranking['wisata_id']));
//            echo "<br>";
        }

//        $kategori = topsis::getKategori();
//        $daerah = topsis::getDaerah();
//        $data_hasil = topsis::getWisataByScore();
//        return dd($data_hasil);
//        return view("layouts.front-end", compact("data_hasil", "kategori", "daerah"));
        return redirect("/#courses-section");
    }

    public function detail($id = null)
    {
        $detail = topsis::getWisataDetail(array("wisata_id" => $id));
        $kategori = topsis::getKategori();
        $daerah = topsis::getDaerah();
//        return dd($detail);
        return view("layouts.front-end-detail", compact("detail", "kategori", "daerah"));
    }

    public function saveKomen(Request $request)
    {
        $params = array("wisata_id" => $request->wisata_id,"nama" => !empty($request->nama) ? $request->nama : "Anonymous","komentar" => $request->komentar);
        $insert = topsis::saveKomen($params);
        if ($insert){
            echo json_encode(array("status" => true));
        }else{
            echo json_encode(array("status" => false));
        }
    }
}