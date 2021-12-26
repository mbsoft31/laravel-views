<?php

namespace Mbsoft31\LaravelViews\Contracts;

use Illuminate\Foundation\Auth\User;
use Mbsoft31\LaravelViews\View;

interface Viewable
{

    /**
     * @param User $user
     * @return bool
     */
    public function viewedBy(User $user) : bool;

    /**
     * @param User $user
     * @return bool
     */
    public function view(User $user) : bool;

    /**
     * @return View[]
     */
    public function views() : array;

    /**
     * @return array[User]
     */
    public function viewers() : array;

}
