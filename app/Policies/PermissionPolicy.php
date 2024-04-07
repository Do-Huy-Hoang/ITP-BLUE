<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;
    public function __construct()
    {

    }
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.permission.add-permission'));
    }
}
