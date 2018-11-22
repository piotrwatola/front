<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\LoginUser;
use App\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginUser $request)
    {
        $login = $request->login;
        $password = $request->password;
        $user = Users::where('login', $login)->first();
        if ($user) {
            if (Auth::attempt(['login' => $user->login, 'password' => $password])) {
                return redirect('users/index');
            }
        }
        $request->session()->flash('danger', 'Błędny login lub hasło');
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flash('success', 'Pomyślnie wylogowano z systemu');
        return view('login');
    }
}
