<?php

namespace App\Policies;

use App\Models\User;

class OrdersPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.orders.list-orders'));
    }
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.orders.edit-orders'));
    }
}
