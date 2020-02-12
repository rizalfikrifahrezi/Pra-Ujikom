<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $fillable = ['foto','namafasilitas','penjelasan'];
    public $timestamps = true;

    public function fasilitas()
    {
        return $this->belongsTo('App\Fasilitas');
    }
}
