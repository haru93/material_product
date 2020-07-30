<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            [
                'id' => 1,
                'material_id' => 1,
                'quantity' => 2,
                'unit_price' => 100,
                'purchase' => '2020-07-29',
                'expiration' => '2020-08-01'
            ],
            [
                'id' => 2,
                'material_id' => 1,
                'quantity' => 4,
                'unit_price' => 200,
                'purchase' => '2020-07-30',
                'expiration' => '2020-08-05'
            ],
            [
                'id' => 3,
                'material_id' => 2,
                'quantity' => 2,
                'unit_price' => 150,
                'purchase' => '2020-08-10',
                'expiration' => '2020-09-01'
            ]
        ]);
    }
}
