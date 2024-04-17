<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    static $users = [
        [
            'name' => "Domingas Segunda",
            'username' => "domingas.segunda",
            'nivel_acesso' => "admin",
            'password' => "biblioteca2024",
        ], [
            'name' => "Finuria",
            'username' => "finuria.f",
            'nivel_acesso' => "user",
            'password' => "biblioteca2024",
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Self::$users as $user) {
            User::create($user);
        }
    }
}
