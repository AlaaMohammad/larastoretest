<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'category_id' =>1,
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ],  [
                'name' =>'product seeder',
                'price' => 10,
                'quantity' =>10,
                'status' =>'in stock',
                'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '
            ]
        ]);
    }
}
