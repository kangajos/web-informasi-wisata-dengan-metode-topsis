<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Wisata_model as wisata;
use App\TopsisModel as topsis;

class WisataController extends Controller
{
    public function index()
    {
        if (! Session::has("login"))
        {
            return redirect("auth");
        }
        topsis::regenerateNilaiTopsis();
        $data = wisata::getAll();
        return view('pages.wisata.index', compact('data'));
    }

    public function add()
    {
        $kategori = wisata::getKategori();
        $daerah = wisata::getDerah();
        return view('pages.wisata.add', compact("kategori", "daerah"));
    }

    public function save(Request $request)
    {
        $daerah_wisata = $request->daerah_wisata;
        $kategori_wisata = $request->kategori_wisata;
        $nama_wisata = $request->nama_wisata;
        $pengunjung_wisata = $request->pengunjung_wisata;
        $fasilitas_wisata = $request->fasilitas_wisata;
        $pelayanan_wisata = $request->pelayanan_wisata;
        $jarak_wisata = $request->jarak_wisata;
        $harga_tiket_wisata = $request->harga_tiket_wisata;
        $deskripsi_wisata = $request->deskripsi_wisata;

        $params = array(
            'daerah_wisata' => $daerah_wisata,
            'kategori_wisata' => $kategori_wisata,
            'nama_wisata' => $nama_wisata,
            'pengunjung_wisata' => $pengunjung_wisata,
            'fasilitas_wisata' => $fasilitas_wisata,
            'pelayanan_wisata' => $pelayanan_wisata,
            'jarak_wisata' => $jarak_wisata,
            'harga_tiket_wisata' => $harga_tiket_wisata,
            'deskripsi_wisata' => $deskripsi_wisata,
            'created_at' => date('Y-m-d H:i:s')
        );
        $insert = wisata::save_wisata($params);
//        return dd($insert);
        $msg = null;
        if ($insert):
            $msg = "Data wisata <b>$nama_wisata    </b> berhasil ditambahkan.";
        else:
            $msg = "Data wisata <b>$nama_wisata    </b> gagal ditambahkan.";
        endif;
        Session::flash('msg', $msg);
        return redirect("wisata");
    }

    public function edit($wisata_id = null)
    {
        $kategori = wisata::getKategori();
        $daerah = wisata::getDerah();
        $where = array('wisata_id' => $wisata_id);
        $data = wisata::edit($where);
        return view('pages.wisata.edit', compact('data','kategori','daerah'));
    }

    public function updated(Request $request)
    {
        $wisata_id = $request->wisata_id;
        $daerah_wisata = $request->daerah_wisata;
        $kategori_wisata = $request->kategori_wisata;
        $nama_wisata = $request->nama_wisata;
        $pengunjung_wisata = $request->pengunjung_wisata;
        $fasilitas_wisata = $request->fasilitas_wisata;
        $pelayanan_wisata = $request->pelayanan_wisata;
        $jarak_wisata = $request->jarak_wisata;
        $harga_tiket_wisata = $request->harga_tiket_wisata;
        $deskripsi_wisata = $request->deskripsi_wisata;

        $params = array(
            'daerah_wisata' => $daerah_wisata,
            'kategori_wisata' => $kategori_wisata,
            'nama_wisata' => $nama_wisata,
            'pengunjung_wisata' => $pengunjung_wisata,
            'fasilitas_wisata' => $fasilitas_wisata,
            'pelayanan_wisata' => $pelayanan_wisata,
            'jarak_wisata' => $jarak_wisata,
            'harga_tiket_wisata' => $harga_tiket_wisata,
            'deskripsi_wisata' => $deskripsi_wisata,
            'created_at' => date('Y-m-d H:i:s')
        );
        $where = array('wisata_id' => $wisata_id);

        $updated = wisata::updated($params, $where);
        if ($updated > 0):
            $msg = "Data wisata <b>$nama_wisata    </b> berhasil di update.";
        else:
            $msg = "Data wisata <b>$nama_wisata    </b> tidak ada perubahan.";
        endif;
        Session::flash('msg', $msg);
        return redirect("wisata");
    }

    public function deleted($wisata_id = false)
    {
        if (!$wisata_id)
            return redirect("wisata");

        $where = array('wisata_id' => $wisata_id);
        $deleted = wisata::deleted($where);

        if ($deleted > 0):
            $msg = "Data wisata berhasil dihapus.";
        else:
            $msg = "Data wisata gagal dihapus.";
        endif;
        Session::flash('msg', $msg);
        return redirect("wisata");
    }
}
