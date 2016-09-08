<?php

namespace App\Providers;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
//use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('admin-access', function($user) {
            return $user->role == 'admin';
        });
        $gate->define('account-manager-access', function($user) {
            return $user->role == 'account-manager';
        });
        $gate->define('account-coordinator-access', function($user) {
            return $user->role == 'account-coordinator';
        });

    }

}
