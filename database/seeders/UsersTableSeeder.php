<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'name' => 'John',
               'email' => 'abir' . $i . '@gmail.com',
              // 'email' => 'abir' . Str::random() . '@gmail.com',  //ai line use korle ai class k import kore nite hbe->  use Illuminate\Support\Str;
              //'email' => 'abir' . time() . $i . '@gmail.com',
                'description1' => 'this is seeder',
            ]);
        }
    }
}
