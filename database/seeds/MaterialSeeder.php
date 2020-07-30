<?php

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'じゃがいも',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => 'にんじん',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => 'たまねぎ',
            ]
        ]);
    }
}
