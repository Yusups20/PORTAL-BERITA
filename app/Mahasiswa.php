<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $timestamps = true;

    public function dosen ()
    {
        return $this->belongsTo('App\Dosen','id_dosen');
    }

    public function wali ()
    {
        return $this->hasOne('App\Wali','id_mahasiswa');
    }

    public function hobi ()
    {
        return $this->belongsToMany(
            'App\Dosen',
            'mahasiswa_hobi',
            'id_mahasiswa',
            'id_hobi');
    }
}
