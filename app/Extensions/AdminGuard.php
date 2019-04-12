<?php

namespace App\Extensions;

class AdminGuard
{

    protected $__user;

    public function __construct($user = null)
    {
        $this->__user = !empty($user)?$user:\Auth::user();
    }

    public function check(){
        return $this->__user->isAdmin();
    }
}
