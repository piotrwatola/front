<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUser;
use App\Users;
use Illuminate\Http\Request;

class EditUserController extends Controller
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

    public function index(Request $request)
    {
        $id = $request->route('var1');
        $Users = new Users();
        $user = $Users->getUser($id);
        return view('users.edit', ['user' => $user]);
    }

    public function edit(EditUser $request)
    {
        $id = $request->route('var1');
        $Users = new Users();
        $data = [
            'id' => $id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname
        ];
        if ($Users->editUser($data)) {
            $request->session()->flash('success', 'Pomyślnie zedytowano użytkownika');
            return redirect('/users/details/' . $id);
        }
    }
}
