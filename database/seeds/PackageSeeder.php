<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // insert data ke table package
       DB::table('packages')->insert([
        'nama_paket' => '100K 2M/2M',
        'kec_internet' => '2 Mbps',
        'harga_paket' => '100000'
    ]);
    DB::table('packages')->insert([
        'nama_paket' => '150K 4M/4M',
        'kec_internet' => '4 Mbps',
        'harga_paket' => '150000'
    ]);       
    DB::table('packages')->insert([
        'nama_paket' => '200K 8M/8M',
        'kec_internet' => '8 Mbps',
        'harga_paket' => '200000'
    ]);
    DB::table('packages')->insert([
        'nama_paket' => '300K 10M/10M',
        'kec_internet' => '10 Mbps',
        'harga_paket' => '300000'
    ]);
    }
}
