<?php

namespace App\Policies;

use App\Models\User;

class ProductsPolicy
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
        return $user->checkPermissionAccess(config('permissions.access.products.list-products'));
    }
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.products.add-products'));
    }
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.products.edit-products'));
    }
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.products.delete-products'));
    }
}
