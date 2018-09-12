<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Card::truncate();

        $faker = \Faker\Factory::create();

       
        for ($i = 0; $i < 50; $i++) {
            Card::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'comments' => $faker->paragraph,
            ]);
        }
    }
}
