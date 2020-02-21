<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosen;
class Dosen extends Model
{
    //Dosen
    protected $fillable = ['nama','nipd'];
    public $timestamp = true;
    public function Mahasiswa(){
        return $this->hasmany('App\Mahasiswa','id_dosen');
    }
}
