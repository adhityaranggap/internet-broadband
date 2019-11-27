<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
       // insert data ke table pegawai
       DB::table('users')->insert([
        'nama' => $faker->name,
        'username' => $faker->username,
        'contact_person' => $faker->phoneNumber,
        'password' => $faker->password,
        'alamat' => $faker->address,
        'akses_group_id' => 2
            ]);
       }

    }
}