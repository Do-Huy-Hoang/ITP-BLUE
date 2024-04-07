<?php

namespace App\Policies;

use App\Models\User;

class RolesPolicy
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
        return $user->checkPermissionAccess(config('permissions.access.roles.list-roles'));
    }
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.roles.add-roles'));
    }
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.roles.edit-roles'));
    }
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.roles.delete-roles'));
    }
}
