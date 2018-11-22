<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;

class RemoveUserController extends Controller
{

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
        $this->middleware('auth');
    }

    public function remove(Request $request)
    {
        $UserId = $request->route('var1');
        $Users = new Users();
        $data = [
            'id' => $UserId,
        ];
        if ($Users->removeUser($data)) {
            $request->session()->flash('success', 'Pomyślnie usunięto użytkownika');
            return redirect('/users/index');
        }
    }
}
