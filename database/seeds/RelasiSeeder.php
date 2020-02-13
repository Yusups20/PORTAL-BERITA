<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        //Membuat data Dosen
        $dosen = Dosen::create(array(
            'nipd' => '10293847576',
            'nama' => 'Yusups'
        ));
        $this->command->info('data dosen telah di isi');

        //Membuat Data Mahasiswa
        $aku = Mahasiswa::create(array(
            'nama' => 'Refana',
            'nim' => '101010',
            'id_dosen' => $dosen->id
        ));

        $kau = Mahasiswa::create(array(
            'nama' => 'Bagas',
            'nim' => '101011',
            'id_dosen' => $dosen->id
        ));

        $kua = Mahasiswa::create(array(
            'nama' => 'Agustian',
            'nim' => '101012',
            'id_dosen' => $dosen->id
        ));

        $this->command->info('Data Mahasiswa Berhasil Di isi');

        //membuat data wali
        $walii = Wali::create(array(
            'nama' => 'Agus',
            'id_mahasiswa' => $aku->id
        ));

        $waliii = Wali::create(array(
            'nama' => 'Gunawan',
            'id_mahasiswa' => $kau->id
        ));

        $waliiii = Wali::create(array(
            'nama' => 'mawang',
            'id_mahasiswa' => $kua->id
        ));

        $this->command->info('Data Wali Berhasil Di isi');

        //membuat data hobi
        $melukis_langit = Hobi::create(array('hobi'=>'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi'=>'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi'=>'Menggambar'));

        $aku->hobi()->attach($melukis_langit->id);
        $aku->hobi()->attach($ambyar->id);
        $kau->hobi()->attach($mandi_hujan->id);
        $kua->hobi()->attach($ambyar->id);

        $this->command->info('Mahasiswa Beserta Hobi telah di isi');
    }
}
