<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'lays',
            'code'=>'hwhwhs',
            'price'=>9000
        ]);

        Product::create([
            'name'=>'Coca-Cola',
            'code'=>'hwhwhq',
            'price'=>6000
        ]);

        Product::create([
            'name'=>'Pepsi',
            'code'=>'hwhwhr',
            'price'=>7500
        ]);

        Product::create([
            'name'=>'Keju Kraft',
            'code'=>'hwhwht',
            'price'=>25000
        ]);

        Product::create([
            'name'=>'Kanzler',
            'code'=>'hwhwhi',
            'price'=>9000
        ]);
    }
}
