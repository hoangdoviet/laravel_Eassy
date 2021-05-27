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
<<<<<<< HEAD
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
        'App\Models' => 'App\Policies\ModelPolicy',
>>>>>>> 6d99061 (Authentication and Mail)
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
        //
=======
        Gate::define('admin', function ($user) {
            if ($user->admin == "1") {
                return true;
            }
            return false;
        });

        Gate::define('guest', function ($user) {
            if ($user->admin == "1" || $user->admin == "0") {
                return true;
            }
            return false;
        });
>>>>>>> 6d99061 (Authentication and Mail)
    }
}
