<?php

namespace Database\Factories;

use App\Models\Rental;
use App\Models\Car;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    protected $model = Rental::class;

    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('-90 days', '-2 days');
        $return = $this->faker->dateTimeBetween($start, (clone $start)->modify('+20 days'));

        return [
            'client_id'   => Client::inRandomOrder()->value('id'),
            'car_id'      => Car::inRandomOrder()->value('id'),
            'start_date'  => $start->format('Y-m-d'),
            'return_date' => $return->format('Y-m-d'),
        ];
    }
}
