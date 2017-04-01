<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder {
	public function run() 
 	{ 
 		// kosongkan table hobi 
 		DB::table('hobi')->delete(); 
 		// buat data berupa array untuk diinput ke database 
 			
 			$hobi = array(
        	array('hobi'=> 'Race', 'anggota_id'=> '1'),
        	array('hobi'=> 'Futsal', 'anggota_id'=> '2'),
        	array('hobi'=> 'Berenang', 'anggota_id'=> '1'),
        	array('hobi'=> 'Traveling', 'anggota_id'=> '2'),
        	);
        // masukkan data ke database 
        DB::table('hobi')->insert($hobi); 
    } 

 }