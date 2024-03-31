<?php

namespace App\Policies;

use App\Models\SeminarTesis_1;
use App\Models\User;

class SeminarTesis1Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SeminarTesis_1 $seminarTesis1): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SeminarTesis_1 $seminarTesis1): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SeminarTesis_1 $seminarTesis1): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SeminarTesis_1 $seminarTesis1): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SeminarTesis_1 $seminarTesis1): bool
    {
        //
    }
}
