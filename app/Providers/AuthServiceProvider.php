<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('user-admin', function($user){
            return $user->hasRole('Admin');
        });

        Gate::define('user-prof', function($user){
            return $user->hasRole('Professeur');
        });

        Gate::define('user-parent', function($user){
            return $user->hasRole('Parent');
        });

        Gate::define('user-student', function($user){
            return $user->hasRole('Student');
        });
    }
}
