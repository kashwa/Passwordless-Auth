<?php

namespace App\Auth\Traits;

use App\UserLoginToken;


trait MagicallyAuthenticatable
{
    /**
     * set relationship
     *
     * @return void
     */
    public function token()
    {
      return $this->hasOne(UserLoginToken::class);
    }
}