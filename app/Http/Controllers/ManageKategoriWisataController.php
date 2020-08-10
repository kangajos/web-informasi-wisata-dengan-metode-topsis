<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageKategoriWisata_model as kategori;
use Illuminate\Support\Facades\Session;

class ManageKategoriWisataController extends Controller
{
    public function index()
    {
        $data = kategori::getAll();
        return view("pages.manage-kategori-wisata.index", compact("data"));
    }

    public function add()
    {
        return view("pages.manage-kategori-wisata.add");
    }

    public function save(Request $request)
    {
        $params = array("nama_kategori_wisata" => strtoupper($request->nama_kategori_wisata), "created_at" => date('Y-m-d H:i:s'));
        $insert = kategori::saved($params);
        if ($insert)
        {
            Session::flash("msg", "data berhasil disimpan");
        }
        else{
            Session::flash("msg", "data gaga disimpan");
        }

        return redirect("manage-kategori-wisata");
    }

    public function edit($id = null)
    {
        $where = array("manage_kategori_wisata_id" => $id);
        $edit = kategori::edit($where);

        return view("pages.manage-kategori-wisata.edit", compact("edit"));
    }

    public function updated(Request $request)
    {
        $params = array("nama_kategori_wisata" => strtoupper($request->nama_kategori_wisata));
        $where = array("manage_kategori_wisata_id" => $request->id);
        $update = kategori::updated($params, $where);
        if ($update > 0)
        {
            Session::flash("msg", "data berhasil update");
        }
        else{
            Session::flash("msg", "data tidak ada perubahan");
        }

        return redirect("manage-kategori-wisata");
    }

    public function deleted($id = null)
    {
        $where = array("manage_kategori_wisata_id" => $id);
        $deleted = kategori::deleted($where);
        if ($deleted > 0)
        {
            Session::flash("msg", "data berhasil dihapus");
        }
        else{
            Session::flash("msg", "data gaga di hapus");
        }

        return redirect("manage-kategori-wisata");
    }
}
