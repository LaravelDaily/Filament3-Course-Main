<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Computers', 'company_id' => Company::inRandomOrder()->value('id')]);
        Category::create(['name' => 'Books', 'company_id' => Company::inRandomOrder()->value('id')]);
        Category::create(['name' => 'Video Games', 'company_id' => Company::inRandomOrder()->value('id')]);
        Category::create(['name' => 'Food', 'company_id' => Company::inRandomOrder()->value('id')]);
    }
}
