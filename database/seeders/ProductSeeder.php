<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Product 1', 'slug' => 'product-1', 'price' => 2999, 'company_id' => Company::inRandomOrder()->value('id')]);
        Product::create(['name' => 'Product 2', 'slug' => 'product-2', 'price' => 3999, 'company_id' => Company::inRandomOrder()->value('id')]);
        Product::create(['name' => 'Product 3', 'slug' => 'product-3', 'price' => 4999, 'company_id' => Company::inRandomOrder()->value('id')]);
    }
}
