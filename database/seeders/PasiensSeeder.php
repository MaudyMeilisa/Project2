 <!-- <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use App\Models\Pasien;
// use App\Models\Dokter;
// use App\Models\Poliklinik;
// use App\Models\Obat;
// use App\Models\Pendaftaran;


// class PasiensSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //membuat sample pasien
//         $pasien1 = Pasien::create([
//             'nama'=>'Tiara Nobita',
//             'nik'=> 3204125558080001,
//             'gender'=>'Perempuan',
//             'tgl_lahir'=>'2004-11-14',
//             'alamat'=>'Cisirung',
//             'no_hp'=> 623822329342
//         ]);
//         $pasien2 = Pasien::create([
//             'nama'=>'Purbahayu Putra',
//             'nik'=> 3204125558080002,
//             'gender'=>'Laki-laki',
//             'tgl_lahir'=>'2001-10-08',
//             'alamat'=>'Cibiru',
//             'no_hp'=>  629585646969
//         ]);
//         $pasien3 = Pasien::create([
//             'nama'=>'Annisa Wigena',
//             'nik'=> 3204125558080003,
//             'gender'=>'Perempuan',
//             'tgl_lahir'=>'1998-07-23',
//             'alamat'=>'Cibiru',
//             'no_hp'=>  627585649690
//         ]);

//         //membuat sample dokter
//         $dokter1 = Dokter::create([
//             'nm_dokter'=>'dr. Martina Yulianti, Sp PD FINASIM',
//             'nik'=> 3204125558080041,
//             'gender'=> 'Perempuan',
//             'spesialis'=> 'Penyakit Dalam',
//             'no_hp'=>  621698678009
//         ]);
//         $dokter2 = Dokter::create([
//             'nm_dokter'=>'dr. Suherman A Tambunan, Sp S',
//             'nik'=> 3204125558080042,
//             'gender'=> 'Laki-laki',
//             'spesialis'=> 'Saraf',
//             'no_hp'=>  621648095332
//         ]);
//         $dokter3 = Dokter::create([
//             'nm_dokter'=>'dr. Susanti, Sp A',
//             'nik'=> 3204125558080043,
//             'gender'=> 'Perempuan',
//             'spesialis'=> 'Anak',
//             'no_hp'=>  621867900654
//         ]);
//         $dokter4 = Dokter::create([
//             'nm_dokter'=>'dr. Efrijal Silaen, Sp M',
//             'nik'=> 3204125558080044,
//             'gender'=> 'Laki-laki',
//             'spesialis'=> 'Mata',
//             'no_hp'=>  628096455647
//         ]);

//         //membuat sample poli
//         $poliklinik1 = Poliklinik::create(['nm_poli'=>'Poli Bedah']);
//         $poliklinik2 = Poliklinik::create(['nm_poli'=>'Poli Anak']);
//         $poliklinik3 = Poliklinik::create(['nm_poli'=>'Poli Mata']);

//         //membuat sample obat
//         $obat1 = Obat::create([
//             'kd_obat'=>'OB001',
//             'nm_obat'=> 'Amoxicilin',
//             'jenis_obat'=>'Tablet'
//         ]);
//         $obat2 = Obat::create([
//             'kd_obat'=>'OB002',
//             'nm_obat'=> 'Estrogen',
//             'jenis_obat'=>'Sirup'
//         ]);
//         $obat3 = Obat::create([
//             'kd_obat'=>'OB003',
//             'nm_obat'=> 'Bisolvon',
//             'jenis_obat'=>'Tablet'
//         ]);

//         //membuat sample pendaftaran
//         $pendaftaran1 = Pendaftaran::create([
//             'tgl_daftar'=>'2021-08-31',
//             'id_pasien'=> $pendaftaran1->id,
//             'id_poli'=> $pendaftaran1->id,
//             'id_dokter'=> $pendaftaran1->id,
//             'nm_dokter'=> 'dr. Martina Yulianti, Sp PD FINASIM',
//             'kasus'=> 'Sakit Maag',
//             'id_obat'=> $pendaftaran1->id
//         ]);
//         $pendaftaran2 = Pendaftaran::create([
//             'tgl_daftar'=>'2021-11-11',
//             'id_pasien'=> $pendaftaran2->id,
//             'id_poli'=> $pendaftaran2->id,
//             'id_dokter'=> $pendaftaran2->id,
//             'nm_dokter'=> 'dr. Susanti, Sp A',
//             'kasus'=> 'Sakit Diare',
//             'id_obat'=> $pendaftaran2->id
//         ]);
//         $pendaftaran3 = Pendaftaran::create([
//             'tgl_daftar'=>'2021-11-18',
//             'id_pasien'=> $pendaftaran3->id,
//             'id_poli'=> $pendaftaran3->id,
//             'id_dokter'=> $pendaftaran3->id,
//             'nm_dokter'=> 'dr. Efrijal Silaen, Sp M',
//             'kasus'=> 'Sakit Katarak',
//             'id_obat'=> $pendaftaran3->id
//         ]);

//     }
// }
