<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\UserPreference;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

      public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $userExists = User::where('email', $user->email)->first();
        // dd($user->avatar_original);
        if ($userExists) {
            Auth::login($userExists, true);
        }else{
            // dd('ok');
            $userExists = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => null
            ]);
            Auth::login($userExists, true);
        }

        if (!$userExists->userPreference) {
            UserPreference::create([
                'user_id' => $userExists->id,
                'picture_url' => $user->avatar_original,
                'theme' => 'light'
            ]);
        }
        return redirect()->route('dashboard');
    }
}
