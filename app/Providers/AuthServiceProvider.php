<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Aeropuerto;
use App\Models\Companya;
use App\Models\Vuelo;
use App\Policies\AeropuertoPolicy;
use App\Policies\CompanyaPolicy;
use App\Policies\VueloPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Companya::class => CompanyaPolicy::class,
        Aeropuerto::class => AeropuertoPolicy::class,
        Vuelo::class => VueloPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
