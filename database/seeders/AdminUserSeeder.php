<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->firstOrCreate(
            ['email' => 'admin@skelbiu.lt'],
            [
                'name' => 'Administratorius',
                'password' => 'password',
                'role' => UserRole::Admin,
            ]
        );

        User::query()->firstOrCreate(
            ['email' => 'vartotojas@skelbiu.lt'],
            [
                'name' => 'Testas Vartotojas',
                'password' => 'password',
                'role' => UserRole::User,
            ]
        );
    }
}
