<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Factory as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 12; $i++) {
            Comic::create([
                'title' => $faker->randomElement(['Batman', 'Superman', 'Teen Titans', 'BeastBoy', 'Raven', 'Shazam', 'BlackAdam']),
                'description' => $faker->paragraph(),
                'thumb' => $faker->imageUrl(20, 60),
                'price' => $faker->randomFloat(2, 1, 100),
                'series' => $faker->word(),
                'sale_date' => $faker->date(),
                'type' => $faker->word(),
            ]);
        }
    }
}
