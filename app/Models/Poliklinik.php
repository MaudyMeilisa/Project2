<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    use HasFactory;

    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['nm_poli'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable =['nm_poli'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    //membuat relasi one to many
    public function pendaftarans()
    {
        //data model "poliklinik" bisa memiliki banyak data
        //data model "pendaftaran" melalui fk "id_poli"
        $this->hasMany('App\Models\Pendaftaran','id_poli');
    }
}
