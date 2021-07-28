<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
  

    public function boot()
    {
        $this->registerPolicies();
        // Gate checks if the user is an admin
        Gate::define('accessAdmin', function(User $user) {
        return $user->role(['admin']);
    });
        // Gate checks if the user is registered
        Gate::define('accessClientProfile', function(User $user) {
        return $user->role('user');
    });
    }
}
