<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for($index = 0; $index<50; $index++){
            DB::table('accounts')->insert([
                'first_name' => 'john-'.$index,
                'surname' => 'user-'.$index,
                'email' => 'user-'.$index.'@gmail.com',
                'password' => bcrypt('myskillcamp'),
                'activation_token' => Str::random(60),

            ]);
        }

    }
}
