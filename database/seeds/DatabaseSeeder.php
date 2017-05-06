<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

        $faker = Faker\Factory::create();
        for ($x = 0; $x <= 50; $x++) {
        $f = $faker->firstName;
        $l = $faker->lastName;
        DB::table('users')->insert([

            'name' => $f.','. $l,
            'email' => $f.'.'. $l.'.'. $faker->biasedNumberBetween($min = 100, $max = 999).'@my.csun.edu',
            'password' => bcrypt('secret'),
        ]);
        }
        /**
        for ($x = 0; $x <= 10; $x++) {
             DB::table('nrs')->insert([
            'title' => str_random(10),
            'invite' => str_random(10).'@my.csun.edu',
            'notes' => str_random(20),
        ]);
        } 
       */
    }
}