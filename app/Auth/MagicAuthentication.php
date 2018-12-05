<?php

namespace App\Auth;

use Illuminate\Http\Request;

class MagicAuthentication
{
  protected $request;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }
  
  public function requestLink()
  {
    dd($this->request);
  }
}