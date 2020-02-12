<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['foto'];
    public $timestamps = true;

    public function galeri()
    {
        return $this->belongsTo('App\galeri');
    }
}
