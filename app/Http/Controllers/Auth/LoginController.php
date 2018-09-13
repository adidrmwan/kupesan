<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use App\UserRole;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser ($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $user = User::create([
            'first_name'    => $user->first_name,
            'email'         => $user->email,
            'provider'      => strtoupper($provider),
            'provider_id'   => $user->id,
        ]);

        $userRole = UserRole::create([
            'role_id'       => '2',
            'user_id'       => $user->id,
        ]);
        return $user;

    }

    public function credentials (Request $request) 
    {
        $request['is_activated'] = 1;
        return $request->only('email','password','is_activated');
    }
}
