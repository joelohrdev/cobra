<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return auth()->user()->admin;
    }

    public function view(User $user, User $model): bool
    {
    }

    public function create(User $user): bool
    {
        return auth()->user()->admin;
    }

    public function update(User $user, User $model): bool
    {
        return auth()->user()->admin;
    }

    public function delete(User $user, User $model): bool
    {
    }

    public function restore(User $user, User $model): bool
    {
    }

    public function forceDelete(User $user, User $model): bool
    {
    }
}
