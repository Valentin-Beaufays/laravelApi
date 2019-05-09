<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for($index = 0; $index<50; $index++){
            DB::table('recipes')->insert([
                'title' => 'recipe-'.$index,
                'account_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                ]);
        }

    }
}
