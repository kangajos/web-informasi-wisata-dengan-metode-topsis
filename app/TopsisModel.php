<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TopsisModel extends Model
{
    protected $table = "tbl_wisata";
    public $timestamps = false;

    static function topsis($params = array())
    {
        $query = DB::table("tbl_wisata");
        $kategori = !empty($params['kategori']) ? $params['kategori'] : "";
        $daerah = !empty($params['daerah']) ? $params['daerah'] : "";
        $harga = !empty($params['harga']) ? $params['harga'] : "";
        $pelayanan = !empty($params['pelayanan']) ? $params['pelayanan'] : "";
        $fasilitas = !empty($params['fasilitas']) ? $params['fasilitas'] : "";
        $jarak = !empty($params['jarak']) ? $params['jarak'] : "";
        $pengunjung = !empty($params['pengunjung']) ? $params['pengunjung'] : "";

        if ($kategori) {
            $query->where(array("kategori_wisata" => $kategori));
        }

        if ($daerah) {
            $query->where(array("daerah_wisata" => $daerah));
        }

        if ($harga) {
            if ($harga == 'murah') {
                $query->where("harga_tiket_wisata", "<=", 9999);
            } elseif ($harga == 'sedang') {
                $query->where("harga_tiket_wisata", ">=", 10000);
                $query->where("harga_tiket_wisata", "<=", 15999);
            } elseif ($harga == 'mahal') {
                $query->where("harga_tiket_wisata", ">=", 16000);
            }
        }

        if ($pelayanan) {
            if ($pelayanan == 'baik') {
                $query->where("pelayanan_wisata", ">=", 81);
            } elseif ($pelayanan == 'cukup') {
                $query->where("pelayanan_wisata", ">=", 61);
                $query->where("pelayanan_wisata", "<=", 80);
            } elseif ($pelayanan == 'kurang') {
                $query->where("pelayanan_wisata", "<=", 60);
            }
        }

        if ($fasilitas) {
            if ($fasilitas == 'baik') {
                $query->where("fasilitas_wisata", ">=", 81);
            } elseif ($fasilitas == 'cukup') {
                $query->where("fasilitas_wisata", ">=", 61);
                $query->where("fasilitas_wisata", "<=", 80);
            } elseif ($fasilitas == 'kurang') {
                $query->where("fasilitas_wisata", "<=", 60);
            }
        }

        if ($jarak) {
            if ($jarak == 'dekat') {
                $query->where("jarak_wisata", "<=", 5999);
            } elseif ($jarak == 'sedang') {
                $query->where("jarak_wisata", ">=", 6000);
                $query->where("jarak_wisata", "<=", 25999);
            } elseif ($jarak == 'jauh') {
                $query->where("jarak_wisata", ">=", 26000);
            }
        }

        if ($pengunjung) {
            if ($pengunjung == 'sepi') {
                $query->where("jarak_wisata", "<=", 9999);
            } elseif ($pengunjung == 'sedang') {
                $query->where("jarak_wisata", ">=", 10000);
                $query->where("jarak_wisata", "<=", 39999);
            } elseif ($pengunjung == 'ramai') {
                $query->where("jarak_wisata", ">=", 40000);
            }
        }

        return $query->get();
    }


    static function get_data_kriteria()
    {
        $stmt = DB::table("kriteria_topsis")->orderBy("id_kriteria")->get();
//        $stmt = $this->db->prepare("SELECT*FROM kriteria_topsis ORDER BY id_kriteria");
//        $stmt->execute();
        return $stmt;
    }

    static function get_data_produk($whereIn = array())
    {
        $stmt = DB::table("tbl_wisata")->whereIn("wisata_id", $whereIn)->orderBy("wisata_id")->get();
//        $stmt = $this->db->prepare("SELECT*FROM tbl_wisata ORDER BY wisata_id");
//        $stmt->execute();
        return $stmt;
    }

    static function get_data_kriteria_id($id)
    {
        $stmt = DB::table("kriteria_topsis")->where("id_kriteria", $id)->orderBy("id_kriteria")->get();
//        $stmt = $this->db->prepare("SELECT*FROM kriteria_topsis WHERE id_kriteria='$id' ORDER BY id_kriteria");
//        $stmt->execute();
        return $stmt;
    }

    static function get_data_nilai_id($id)
    {
        $stmt = DB::table("nilai_topsis")->where("id_produk", $id)->orderBy("id_kriteria")->get();
//        $stmt = $this->db->prepare("SELECT*FROM nilai_topsis WHERE wisata_id='$id' ORDER BY id_kriteria");
//        $stmt->execute();
        return $stmt;
    }

    static function pembagi($id)
    {
        $data = DB::table("nilai_topsis")->selectRaw("nilai")->where(array("id_kriteria" => $id))->get();
//        $stmt = $this->db->prepare("SELECT nilai FROM nilai_topsis WHERE id_kriteria='$id'");
//        $stmt->execute();
        $pembagi = 0;
        foreach ($data as $value) {
            $pangkat = pow($value->nilai, 2);
            $pembagi = $pembagi + $pangkat;
        }
        $hasil = sqrt($pembagi);
        return $hasil;
    }

    static function insert_data_max_min($id_kriteria, $nilai)
    {
        DB::table("max_min_topsis")->insert(array("id_kriteria" => $id_kriteria, "nilai_max_min" => $nilai));
    }

    static function delete_min_max()
    {
        return DB::table("max_min_topsis")->where("id_max_min", ">", 0)->delete();
    }

    static function min_max()
    {
        return DB::table("max_min_topsis")->select(DB::raw("id_kriteria, SUM(nilai_max_min) as max, MIN(nilai_max_min) as min"))->groupBy("id_kriteria")->get();
//        $stmt = $this->db->prepare("SELECT id_kriteria, max(nilai_max_min) AS max, min(nilai_max_min) AS min FROM max_min_topsis GROUP BY id_kriteria ");
//        $stmt->execute();
//        return $stmt;
    }

    static function getKategori()
    {
        return DB::table("tbl_manage_kategori_wisata")->get();
    }

    static function getDaerah()
    {
        return DB::table("tbl_manage_daerah_wisata")->get();
    }

    static function regenerateNilaiTopsis()
    {
        DB::table("nilai_topsis")->truncate();

        //pengunjung..
        $pengunjung = DB::table("tbl_wisata")->select("wisata_id", "pengunjung_wisata")->get(); // id kriteria 1//
        $insert_pengunjung = array();
        foreach ($pengunjung as $item) {
            $insert_pengunjung[] = array("id_kriteria" => 1, "id_produk" => $item->wisata_id, "nilai" => $item->pengunjung_wisata);
        }
        DB::table("nilai_topsis")->insert($insert_pengunjung);

        //fasilitas..
        $fasilitas = DB::table("tbl_wisata")->select("wisata_id", "fasilitas_wisata")->get(); // id kriteria 1//
        $insert_fasilitas = array();
        foreach ($fasilitas as $item) {
            $insert_fasilitas[] = array("id_kriteria" => 2, "id_produk" => $item->wisata_id, "nilai" => $item->fasilitas_wisata);
        }
        DB::table("nilai_topsis")->insert($insert_fasilitas);

        //pelayanan..
        $pelayanan = DB::table("tbl_wisata")->select("wisata_id", "pelayanan_wisata")->get(); // id kriteria 1//
        $insert_pelayanan = array();
        foreach ($pelayanan as $item) {
            $insert_pelayanan[] = array("id_kriteria" => 3, "id_produk" => $item->wisata_id, "nilai" => $item->pelayanan_wisata);
        }
        DB::table("nilai_topsis")->insert($insert_pelayanan);

        //harga..
        $harga_tiket = DB::table("tbl_wisata")->select("wisata_id", "harga_tiket_wisata")->get(); // id kriteria 1//
        $insert_harga_tiket = array();
        foreach ($harga_tiket as $item) {
            $insert_harga_tiket[] = array("id_kriteria" => 4, "id_produk" => $item->wisata_id, "nilai" => $item->harga_tiket_wisata);
        }
        DB::table("nilai_topsis")->insert($insert_harga_tiket);

        //jarak..
        $jarak_wisata = DB::table("tbl_wisata")->select("wisata_id", "jarak_wisata")->get(); // id kriteria 1//
        $insert_jarak_wisata = array();
        foreach ($jarak_wisata as $item) {
            $insert_jarak_wisata[] = array("id_kriteria" => 4, "id_produk" => $item->wisata_id, "nilai" => $item->jarak_wisata);
        }
        DB::table("nilai_topsis")->insert($insert_jarak_wisata);

//        return $insert_jarak_tiket;
    }

    static function updateScore($params = array(), $where = array())
    {
        DB::table("tbl_wisata")->where($where)->update($params);
    }

    static function updateScoreDefault()
    {
        DB::table("tbl_wisata")->update(array("score" => 0));
    }

    static function getWisataByScore()
    {
        return DB::table("tbl_wisata")->where("score", ">", 0)->orderBy("score", "DESC")->limit(5)->get();
    }

    static function getWisataDetail($where = array())
    {
        return DB::table("tbl_wisata")->where($where)->first();
    }

    static function saveKomen($params = array())
    {
        DB::beginTransaction();
        try {
            DB::table("tbl_komentar")->insert($params);
            DB::commit();
            return TRUE;
        } catch (\Exception $e) {
            DB::rollBack();
            return FALSE;
        }
    }

    static function getKomen($where = array())
    {
        return DB::table("tbl_komentar")->where($where)->get();
    }

    static function CountKomen($where = array())
    {
        return DB::table("tbl_komentar")->where($where)->get()->count();
    }
}
