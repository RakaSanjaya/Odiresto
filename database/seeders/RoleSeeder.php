<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'role_description' => 'Administrator with full access',
            ],
            [
                'role_name' => 'cashier',
                'role_description' => 'Can manage sales and transactions',
            ],
            [
                'role_name' => 'chef',
                'role_description' => 'Can manage kitchen orders',
            ],
            [
                'role_name' => 'customer',
                'role_description' => 'Can place orders and view menu',
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
