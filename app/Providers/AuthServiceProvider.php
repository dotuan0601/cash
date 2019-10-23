<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

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
        $this->registerPolicies();

        //
        parent::registerPolicies($gate);

        $roles = [
            'category_read',
            'category_write',
            'user_read',
            'user_write',
            'post_read',
            'post_write',
            'banner_read',
            'banner_write',
            'salon_read',
            'salon_write',
            'service_read',
            'service_write'


        ];

        foreach($roles as $role) {
            $gate->define($role, function ($user) use ($role) {
                return strpos($user->role, $role) !== false;
            });
        }
    }
}
