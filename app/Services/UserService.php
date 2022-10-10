<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    protected User|null $user = null;

    public function getUser(): ?User
    {
        if (blank($this->user)) {
            $this->user = \Auth::user();
        }

        return $this->user;
    }

    public function getUserId(): int
    {
        return optional($this->getUser())->id ?? 0;
    }
}
