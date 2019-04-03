<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     *
     *
     * @param User $user
     * @param $ability
     * @return bool|null
     */
    public function before(User $user, $ability)
    {
        return $user->is_admin ? true : null;
    }


    /**
     * 編集の認可を判断する
     *
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function edit(User $user, User $model)
    {
        return $user->id == $model->id;
    }

    /**
     * 編集の認可を判断する
     *
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function update(User $user, User $model)
    {
        return $user->id == $model->id;
    }


    /**
     * 削除の認可を判断する
     *
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function destroy(User $user, User $model)
    {
        return $user->id == $model->id;
    }
}
