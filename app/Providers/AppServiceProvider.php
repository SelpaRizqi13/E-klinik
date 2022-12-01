<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Gate::define('roles', function(User $user){
            return $user->role == 'super admin';
        });

        Gate::define('apoteker', function(User $user)
        {
            return $user->role == 'apoteker' ||  $user->role == 'super admin';
        });

        Gate::define('admin', function(User $user)
        {
            return $user->role == 'admin' || $user->role == 'super admin';
        });
        Gate::define('dokter', function(User $user)
        {
            return $user->role == 'dokter' || $user->role == 'super admin';
        });
    }
}
