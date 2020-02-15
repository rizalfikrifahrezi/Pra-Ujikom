<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekstrakurikuler extends Model
{
    protected $fillable = ['foto','namaekskul'];
    public $timestamps = true;

    public function ekstrakurikuler()
    {
        return $this->belongsTo('App\Ekstrakurikuler');
    }
}
