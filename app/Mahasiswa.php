<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
class Mahasiswa extends Model
{
    //mahasiswa
    protected $fillable = ['nama','nim','id_dosen'];
    public $timestamp = true;

    public function dosen(){
        return $this->belongsTo('App\Dosen','id_dosen');
    }
    public function Wali(){
        return $this->hasOne('App\Wali','id_mahasiswa');
    }
      public function Hobi(){
        return $this->belongstoMany('App\Hobi','mahasiswa_hobi','id_mahasiswa','id_hobi');
    }
}
