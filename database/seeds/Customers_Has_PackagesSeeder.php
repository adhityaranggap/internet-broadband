<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Customers_Has_PackagesSeeder extends Seeder
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
        DB::table('customers_has_packages')->insert([
            'customer_id' => $faker->numberBetween(1,30),
            'packages_id' => $faker->numberBetween(1,4)
        ]);
        }
            
    }

}
