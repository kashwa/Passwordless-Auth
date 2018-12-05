<?php

namespace App\Auth\Traits;

use App\UserLoginToken;


trait MagicallyAuthenticatable
{

  public function storeToken()
  {
    # First delete any token before start.
    $this->token()->delete();

    $this->token()->create([
      'token' => str_random(255),
    ]);

    return $this;
  }

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