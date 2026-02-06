<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Car;
use App\Models\Client;
use App\Models\Rental;

use App\Policies\UserPolicy;
use App\Policies\CarPolicy;
use App\Policies\ClientPolicy;
use App\Policies\RentalPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        User::class => UserPolicy::class,
        Car::class => CarPolicy::class,
        Client::class => ClientPolicy::class,
        Rental::class => RentalPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
