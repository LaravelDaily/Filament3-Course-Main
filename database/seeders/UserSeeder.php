<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(20)
            ->create()
            ->each(function (User $user) {
                $companies = Company::inRandomOrder()->limit(random_int(1, 6))->pluck('id');
                $user->companies()->sync($companies);
            });
    }
}
