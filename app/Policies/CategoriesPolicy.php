<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriesPolicy
{
    use HandlesAuthorization;
    public function __construct()
    {

    }
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.categories.list-categories'));
    }
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.categories.add-categories'));
    }
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.categories.edit-categories'));
    }
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.categories.delete-categories'));
    }
}
