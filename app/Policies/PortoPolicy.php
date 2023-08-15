<?php

namespace App\Policies;

use App\Models\Porto;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PortoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(['Admin', 'Agency', 'Editor']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Porto $porto)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['Admin', 'Editor']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->hasRole(['Admin', 'Editor']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->hasRole(['Admin', 'Editor']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Porto $porto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Porto $porto)
    {
        //
    }
}
