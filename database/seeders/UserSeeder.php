<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::updateOrCreate(
            [
                'email' => 'superadmin@pos.com'
            ],
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@pos.com',
                'email_verified_at' => now(),
                'password' => Hash::make('rahasia123')
            ]
        );
    }
}
