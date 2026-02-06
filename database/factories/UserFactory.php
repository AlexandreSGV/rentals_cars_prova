<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
            // role será definido nos states
        ];
    }

    /**
     * State: cliente
     */
    public function cliente()
    {
        return $this->state(function () {
            return [
                'role' => 'cliente',
            ];
        });
    }

    /**
     * State: vendedor
     */
    public function vendedor()
    {
        return $this->state(function () {
            return [
                'role' => 'vendedor',
            ];
        });
    }
}
