<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index<50; $index++){
            DB::table('recipes')->insert([
                'title' => "lorem ipsum ".$index,
                'account_id' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
