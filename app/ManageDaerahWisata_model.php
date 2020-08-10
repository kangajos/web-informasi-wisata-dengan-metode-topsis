<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ManageDaerahWisata_model extends Model
{
    protected $table = "tbl_manage_daerah_wisata";

    static function getAll()
    {
        return self::get();
    }
    static function saved($params = array())
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
}
