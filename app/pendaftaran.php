<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = ['pilihangkatan','namalengkap','tempatlahir','nomortelpon','email','provinsi','kabkota','kecamatan','desakelurahan','alamatlengkap','kodepos','namalengkapayah','namalengkapibu','pekerjaanayah','pekerjaanibu','notelprumah','notelphp'];
    public $timestamps = true;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Pendaftaran');
    }
}
