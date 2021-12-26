<?php

namespace Mbsoft31\LaravelViews\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Mbsoft31\LaravelViews\Contracts\Viewable;
use Mbsoft31\LaravelViews\View;

class HasViews implements Viewable
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * @var View[]
     */
    protected array $views;

    /**
     * @var User[]
     */
    protected array $viewers;

    /**
     * @param Model $model
     * @param User $user
     * @return View|null
     */
    protected function createView(Model $model, User $user): ?View
    {
        $view = new View(get_class($model), $model->id);

        $this->views[] = $view;
        $this->viewers[] = $user;

        return $view;
    }

    /**
     * @param User|null $user
     * @return bool
     */
    public function viewedBy(?User $user): bool
    {
        if (is_null($user)) {
            return false;
        }
        return array_filter($this->viewers, static function ($viewer) use($user) {
                return $viewer->id === $user->id;
            }) > 0;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function view(User $user): bool
    {
        if ( $this->viewedBy($user) ) {
            return true;
        }

        return (bool) $this->createView($this->model, $user);
    }

    /**
     * @return View[]
     */
    public function views(): array
    {
        return $this->views;
    }

    /**
     * @return User[]
     */
    public function viewers(): array
    {
        return $this->viewers;
    }

}
