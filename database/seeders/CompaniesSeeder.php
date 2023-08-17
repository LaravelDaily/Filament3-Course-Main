<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    public function run()
    {
        $names = [
            'Google',
            'Apple',
            'Microsoft',
            'Nintendo',
            'Sony',
            'Amazon'
        ];

        foreach ($names as $name) {
            Company::create(['name' => $name]);
        }
    }
}
