<?php

namespace App\Policies;

use App\Models\User;

class EmployeesPolicy
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
        return $user->checkPermissionAccess(config('permissions.access.employees.list-employees'));
    }
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.employees.add-employees'));
    }
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.employees.edit-employees'));
    }
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.employees.delete-employees'));
    }
}
