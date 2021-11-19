<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['kd_obat','nm_obat','jenis_obat'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable =['kd_obat','nm_obat','jenis_obat'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    //membuat relasi one to many
    public function pendaftarans()
    {
        //data model "obat" bisa memiliki banyak data
        //data model "pendaftaran" melalui fk "id_obat"
        $this->hasMany('App\Models\Pendaftaran','id_obat');
    }
}
