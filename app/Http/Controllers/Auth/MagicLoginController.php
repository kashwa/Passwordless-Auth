<?php

namespace App\Http\Controllers\Auth;

use App\UserLoginToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Auth\MagicAuthentication;

class MagicLoginController extends Controller
{

    protected $redirectedOnRequested = '/login/magic';

    /**
     * return the view for Passwordless Auth.
     *
     * @return void
     */
    public function show()
    {
        return view('auth.magic.login'); 
    }

    public function sendToken(Request $request, MagicAuthentication $auth)
    {
        $this->validateLogin($request);
    
        $auth->requestLink();

        return redirect()->to($this->redirectedOnRequested)->with('success', 'we\'ve sent you a magic link.');
    }

    public function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|exists:users,email'
        ]);
    }
}
