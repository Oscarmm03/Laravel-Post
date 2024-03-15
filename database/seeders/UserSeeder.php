<?php

namespace Database\Seeders;



use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Oscar Molina Morales',
            'email' => 'oscar@gmail.com', // Corregir el dominio de correo electrónico
            'password' => bcrypt('12345678')
        ]);

        User::factory(9)->create();
    }
}