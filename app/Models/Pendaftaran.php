<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $visible =['tgl_daftar','id_pasien','id_poli','id_dokter','nm_dokter','kasus','id_obat'];
    protected $fillable=['tgl_daftar','id_pasien','id_poli','id_dokter','nm_dokter','kasus','id_obat'];

   public $timestamps=true;

   public function pasien()
   {
       //Model pasien
       //melalui fk "id_pasien"
       return $this->belongsTo('App\Models\Pasien', 'id_pasien');
   }

   public function poliklinik()
   {
       //Model poliklinik
       //melalui fk "id_poli"
       return $this->belongsTo('App\Models\Poliklinik', 'id_poli');
   }

   public function dokter()
   {
       //Model dokter
       //melalui fk "id_dokter"
       return $this->belongsTo('App\Models\Dokter', 'id_dokter');
   }

   public function obat()
   {
       //Model obat
       //melalui fk "id_obat"
       return $this->belongsTo('App\Models\Obat', 'id_obat');
   }
}
