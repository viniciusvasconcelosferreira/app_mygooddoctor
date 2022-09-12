<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Flasher\Toastr\Laravel\Facade\Toastr;

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

    protected function authenticated(Request $request, $user)
    {
        Toastr::addFlash('success', 'Seja bem-vindo(a) ' . auth()->user()->name . '!', ' ');
        return redirect()->route('dashboards.home');
    }

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

    /**
     * > This function returns the view `auth.login-basic`
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login-basic');
    }

    /**
     * It logs the user out and redirects them to the login page
     *
     * @return \Illuminate\Http\RedirectResponse user is being logged out and redirected to the login page.
     */
    public function logout(ToastrFactory $flasher)
    {
        Auth::logout();
        $flasher->addFlash('success', 'Logout realizado com sucesso!', ' ');
        return redirect()->to('/login');
    }
}
