<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materipendidikan extends Model
{
    protected $fillable = ['namabidang','matapelajaran'];
    public $timestamps = true;

    public function materipendidikan()
    {
        return $this->belongsTo('App\MateriPendidikan');
    }
}
