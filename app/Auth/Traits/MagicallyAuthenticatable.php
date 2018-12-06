<?php

namespace App\Auth\Traits;

use Mail;
use App\UserLoginToken;
use App\Mail\MagicLoginRequested;


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

  /**
   * Recieve array of options
   * send the magic link to email afterwards.
   *
   * @param array $options
   * @return void
   */
  public function sendMagicLink(array $options)
  {
    Mail::to($this)->send(new MagicLoginRequested($this, $options));
  }

}
