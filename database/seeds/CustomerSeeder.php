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
       // insert data ke table customers
       DB::table('customers')->insert([
           'username' => $faker->username,
           'nama' => $faker->name,
            'contact_person' => $faker->phoneNumber,
            'alamat' => $faker->address,
             'router_id' => 1
            ]);
       }

    }
}