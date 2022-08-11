<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\entry;
use Faker\Factory as faker;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        
       for($i=1;$i<=20;$i++)
       {
        $customers = new entry;
        $customers->name = $faker->name;
        $customers->email =$faker->email;
        $customers->password =$faker-> md5('password');
        $customers->save();
       }
    }
}
