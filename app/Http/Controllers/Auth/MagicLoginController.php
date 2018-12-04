<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MagicLoginController extends Controller
{
    /**
     * return the view for Passwordless Auth.
     *
     * @return void
     */
    public function show()
    {
       return view('auth.magic.login'); 
    }
}
