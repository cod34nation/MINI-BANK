<?php

use Illuminate\Database\Seeder;

class CreateNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nasabahs')->insert(array(

        		array('nama_lengkap'=>'Deni Setya','alamat'=>'Malang','no_rekening'=>'123345'),

        		array('nama_lengkap'=>'Budi Santoso','alamat'=>'Malang','no_rekening'=>'345678'),

        		array('nama_lengkap'=>'Wibowo Aris','alamat'=>'Malang','no_rekening'=>'49303920'),

        	));
    }
}
