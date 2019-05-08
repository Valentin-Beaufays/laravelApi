<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index<50; $index++){
            DB::table('recipes_categories')->insert([
                'recipe_id' => 1,
                'account_id' => 1,
            ]);
        }
    }
}
