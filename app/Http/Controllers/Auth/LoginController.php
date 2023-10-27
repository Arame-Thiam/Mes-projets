<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        $a=Auth::user();
        if ($a->statut==1) {
            if(Auth::check() && Auth::user()->profil === 'administrateur'){
                return '/admin/home';
            }
            elseif(Auth::check() && Auth::user()->profil === 'client'){
                return '/';
            }
            elseif(Auth::check() && Auth::user()->profil === 'chauffeur'){
                return '/chauffeur/index';
            }
        else{
            return 'login';
        }
    }else{
        Auth::logout();
        session()->flash('message','Votre compte a ete bloquer');
        return 'login';
    }
}
}
