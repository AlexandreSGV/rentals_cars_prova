<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Car;
use App\Models\Client;
use App\Models\Rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(50)->cliente()->create();
        User::factory()->count(5)->vendedor()->create();
        Car::factory()->count(200)->create();
        Client::factory()->count(50)->create();
        Rental::factory()->count(300)->create();


        // Gerente fixo (opcional, mas recomendado)
        User::create([
            'name' => 'Gerente Teste',
            'email' => 'gerente@sistema.com',
            'password' => Hash::make('12345678'),
            'role' => 'gerente',
        ]);

        // Cliente padrão
        User::create([
            'name' => 'Cliente Teste',
            'email' => 'cliente@sistema.com',
            'password' => Hash::make('12345678'),
            'role' => 'cliente',
        ]);

        // Vendedor padrão
        User::create([
            'name' => 'Vendedor Teste',
            'email' => 'vendedor@sistema.com',
            'password' => Hash::make('12345678'),
            'role' => 'vendedor',
        ]);

    }

}
