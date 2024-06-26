<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Services\GateAndPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {  
        $this->registerPolicies();
        Gate::define('admin', function ($user){
            $checkRole = true;
            foreach ($user->roles as $item) {
                if($item['rol_name'] === 'Customer'){
                    $checkRole = false;
                }
            }
            return  $checkRole;
        });
        $GateAndPolicy = new GateAndPolicy();
        $GateAndPolicy->setGateAndPolicyAccess();
    }
}
