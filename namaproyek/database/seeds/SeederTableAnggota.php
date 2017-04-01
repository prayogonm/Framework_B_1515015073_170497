<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder {
    public function run()
    {
        // mengosongkan tabel anggota
        DB::table('anggota')->delete();

        // buat data berupa array untuk di input ke database
        $anggota = array(
        	array('id'=>1, 'nama'=> 'yogo', 'alamat'=>'jalan pln No.11'),
        	array('id'=>2, 'nama'=> 'mollet', 'alamat'=>'jalan sengatan listrik No.2'),
        	array('id'=>3, 'nama'=> 'nugroho', 'alamat'=>'jalan pangglima batur No.100'),
        	array('id'=>4, 'nama'=> 'pnm', 'alamat'=>'jalan juanda  No.71')
        	);

        //masukkan data ke database
        DB::table('anggota')->insert($anggota);

    }
}
