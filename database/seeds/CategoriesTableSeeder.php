<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index<50; $index++){
            DB::table('categories')->insert([
                'name' => "category ".$index,
                'account_id' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
