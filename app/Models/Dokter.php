<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

   //memberikan akses data apa saja yang bisa dilihat
   protected $visible=['nm_dokter','nik','gender','spesialis','no_hp'];

   //memberikan akses dat apa saja yang bisa diisi
   protected $fillable =['nm_dokter','nik','gender','spesialis','no_hp'];

   //mencatat waktu pembuatan dan update data otomatis
   public $timestamps=true;

   //membuat relasi one to many
   public function pendaftarans()
   {
       //data model "dokter" bisa memiliki banyak data
       //data model "pendaftaran" melalui fk "id_dokter"
       $this->hasMany('App\Models\Pendaftaran','id_dokter');
   }
}
