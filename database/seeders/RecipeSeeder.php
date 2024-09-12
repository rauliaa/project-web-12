<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Recipe::create([
            'title' => 'Chocolate Cake',
            'description' => 'A delicious chocolate cake recipe.',
            'user_id' => 1,
            'prep_time' => 20,
            'cook_time' => 40,
            'servings' => 8
        ]);

        Recipe::create([
            'title' => 'Spaghetti Bolognese',
            'description' => 'A classic Italian pasta dish.',
            'user_id' => 2,
            'prep_time' => 15,
            'cook_time' => 30,
            'servings' => 4
        ]);
    }
}
