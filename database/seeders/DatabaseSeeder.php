<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@admin.es',
                'password' => bcrypt('joss123'),
                'role' => 'admin',
            ],
            [
                'name' => 'User',
                'email' => 'user@user.es',
                'password' => bcrypt('alo123'),
                'role' => 'user',
            ]
        ]);
}}
