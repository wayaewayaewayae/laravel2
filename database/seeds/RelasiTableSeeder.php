<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

class RelasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengahpus semua semple data
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        //membuat data dosen
        $dosen = Dosen::create([
            'nama'=> 'Asep',
            'nipd'=> '102737'
        ]);
        $this->command->info('Data Dosen Berhasil Dibuat');
            //membuat data mahasiswa
        $Dadang = Mahasiswa::create([
            'nama'=> 'Dadang Peloy',
            'nim'=> '2710',
            'id_dosen'=> $dosen->id
        ]);
        $Nurul = Mahasiswa::create([
            'nama'=> 'Nurul',
            'nim'=> '0876',
            'id_dosen'=> $dosen->id
        ]);
         $azizah = Mahasiswa::create([
            'nama'=> 'Azizah',
            'nim'=> '0192',
            'id_dosen'=> $dosen->id
        ]);
        $this->command->info('Data Mahasiswa Berhasil Dibuat');

        //membuat data wali
        $ahmad = Wali::create([
            'nama'=> 'Ahmad',
            'id_Mahasiswa'=> $Dadang->id
        ]);
         $dudung = Wali::create([
            'nama'=> 'Dudung',
            'id_Mahasiswa'=> $Nurul->id
         ]);
           $basil = Wali::create([
            'nama'=> 'Basil',
            'id_Mahasiswa'=> $azizah->id
         ]);
        $this->command->info('Data Wali Berhasil Dibuat');

        //membuat data hobi
        $mancing = Hobi::create([
            'hobi' => 'Mancing Keributan'
        ]);
                $nyanyi = Hobi::create([
            'hobi' => 'Dangdutan'
        ]);
                $mengaji = Hobi::create([
            'hobi' => 'Mengaji al-quran'
        ]);

        //membuat hobi mahasiswa
        $Dadang->hobi()->attach($mancing->id);
        $Dadang->hobi()->attach($mengaji->id);
        $Nurul->hobi()->attach($nyanyi->id);
        $azizah->hobi()->attach($mengaji->id);
        $this->command->info('Data Hobi Berhasil Dibuat');

    }
}
