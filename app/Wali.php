<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
class Wali extends Model
{
    //Wali
    protected $fillable = ['nama','id_mahasiswa'];
    public $timestamp = true;
    public function Mahasiswa(){
        return $this->belongsTo('App\Mahasiswa','id_mahasiswa');
}
}
