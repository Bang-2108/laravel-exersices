<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_products')->insert([
            ['name' => 'Bánh mặn', 'description' => 'Bánh có nhân mặn', 'image' => 'image1.jpg'],
            ['name' => 'Bánh ngọt', 'description' => 'Bánh có nhân ngọt', 'image' => 'image2.jpg'],
            ['name' => 'Bánh trái cây', 'description' => 'Bánh có nhân trái cây', 'image' => 'image3.jpg'],
        ]);
    }
}
