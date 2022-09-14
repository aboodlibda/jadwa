<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::query()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '0592171803',
            'password' => Hash::make('123456789'),
            'type' => 'admin',
            'email_verified_at' => Date::now(),
        ]);
    }
}
