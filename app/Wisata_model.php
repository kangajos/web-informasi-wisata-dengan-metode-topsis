<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use phpDocumentor\Reflection\Types\Self_;

class Wisata_model extends Model
{
    public $timestamps = false;
    protected $table = "tbl_wisata";

    static function getAll()
    {
        return self::orderBy("wisata_id","DESC")->get();
    }

    static function save_wisata($params = array())
    {
        DB::beginTransaction();
        try {
            self::insert($params);
            DB::commit();
            return TRUE;
        } catch (\Exception $e) {
            DB::rollback();
            return FALSE;
        }
    }

    static function edit($where = array())
    {
        return self::where($where)->first();
    }

    static function updated($params = array(), $where = array())
    {
        return self::where($where)->update($params);
    }

    static function deleted($where = array())
    {
        return self::where($where)->delete();
    }

    static function getKategori()
    {
        return DB::table("tbl_manage_kategori_wisata")->get();
    }

    static function getDerah()
    {
        return DB::table("tbl_manage_daerah_wisata")->get();
    }
}
