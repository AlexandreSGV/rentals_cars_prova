<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition(): array
    {
        return [
            'brand' => $this->faker->randomElement([
                'Fiat', 'Chevrolet', 'Volkswagen', 'Toyota',
                'Ford', 'Hyundai', 'Honda', 'Renault'
            ]),
            'model' => $this->faker->randomElement([
                'Uno', 'Palio', 'Gol', 'Onix', 'Corolla',
                'Civic', 'HB20', 'Sandero', 'Ka'
            ]),
            'plate' => strtoupper(
                $this->faker->bothify('???-####')
            ),
            'year' => $this->faker->numberBetween(2005, 2024),
        ];
    }
}
