<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $value) {
            DB::table('division')->insert([
                'id' => $value,
                'name' =>  $faker->randomElement(['Bangla', 'English', 'History', 'Mathematics', 'Science', 'Psychology']),
            ]);
        }
    }
}
