<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\ManageDaerahWisata_model as daerah;

class ManageDaerahWisataController extends Controller
{
    public function index()
    {
        $data = daerah::getAll();
        return view('pages.manage-daerah-wisata.index', compact("data"));
    }

    public function add()
    {
        return view('pages.manage-daerah-wisata.add');
    }

    public function save(Request $request)
    {
        $nama_daerah = strtoupper($request->nama_daerah);
        $params = array(
            'nama_daerah' => str_replace(' ','-', strtoupper($request->nama_daerah)),
            'created_at' => date('Y-m-d H:i:s'));
        $insert = daerah::saved($params);
        $msg = null;
        if ($insert):
            $msg = "Data daerah wisata <b>$nama_daerah</b> berhasil ditambahkan.";
        else:
            $msg = "Data daerah wisata <b>$nama_daerah</b> gagal ditambahkan.";
        endif;
        Session::flash('msg', $msg);
        return redirect("manage-daerah-wisata");
    }

    public function edit($daerah_id = null)
    {
        $data = daerah::edit(array('manage_daerah_id' => $daerah_id));
        return view('pages.manage-daerah-wisata.edit', compact("data"));
    }

    public function updated(Request $request)
    {
        $nama_daerah = strtoupper($request->nama_daerah);
        $params = array(
            'nama_daerah' => str_replace(' ','-', strtoupper($request->nama_daerah)));
        $where =  array('manage_daerah_id' => $request->manage_daerah_id);
//        return dd($params);
        $msg = null;
        $updated = daerah::updated($params, $where);
        if ($updated > 0):
            $msg = "Data daerah wisata <b>$nama_daerah</b> berhasil diupdate.";
        else:
            $msg = "Data daerah wisata <b>$nama_daerah</b> tidak ada perubahan.";
        endif;
        Session::flash('msg', $msg);
        return redirect("manage-daerah-wisata");
    }

    public function deleted($daerah_id = null)
    {
        $deleted = daerah::deleted(array('manage_daerah_id' => $daerah_id));
        if ($deleted > 0):
            $msg = "Data daerah wisata berhasil dihapus.";
        else:
            $msg = "Data daerah wisata gagal dihapus.";
        endif;
        Session::flash('msg', $msg);
        return redirect("manage-daerah-wisata");
    }
}
