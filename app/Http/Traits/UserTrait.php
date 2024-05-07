<?php

namespace App\Http\Traits;

use App\Models\User;
use Spatie\Permission\Models\Role;

trait UserTrait
{
    public static function assignRole($user, $role)
    {
        $user->assignRole($role);
        $user = User::find($user->id);
        $role = Role::findByName($role, $role);
        $user->assignRole($role);
    }
}
