<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
use Illuminate\Support\Str;
use Faker\Factory as Faker;






class AddbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $faker = Faker::create();
        foreach (range(1,100) as $value)
         {
            DB::table('addressbook')->insert([
                'name'  => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'fname' => $faker->name(),
                'mobile'=> $faker->imei(),
                'add'   => $faker->streetAddress(),
                'city'  => $faker->city(),
                'state' => $faker->country(),
                'country'=> $faker->country(),
                'pincode'=> $faker->imei(),
                ]);
         }
     }
}
