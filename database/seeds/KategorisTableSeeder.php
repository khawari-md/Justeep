<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		['kategori_id' => '1', 'nama' => 'Makanan', 'jumlah_item' => '0'],
    		['kategori_id' => '2', 'nama' => 'Tas dan Aksesoris', 'jumlah_item' => '0'],
    		['kategori_id' => '3', 'nama' => 'Ibu dan Anak', 'jumlah_item' => '0'],
    		['kategori_id' => '4', 'nama' => 'Games', 'jumlah_item' => '0'],
    	];
    	
        DB::table('kategoris')->insert($data);
    }
}
