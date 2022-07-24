<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->truncate();

        $companies = [];
        $faker = Factory::create();
        foreach (range(1,10)as $index) {
            $companies [] = [
                'name' => $faker->company(),
                'address' => $faker->address(),
                'website' => $faker->domainName(),
                'email' => $faker->email(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('companies')->insert($companies);

    }
}
