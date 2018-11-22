<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUser;
use App\Users;
use Hash;
use Illuminate\Http\Request;
use Mockery\Exception;

class AddUserController extends Controller
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

    public function index()
    {
        $user = new Users;
        return view('users.add', ['user' => $user]);
    }


    public function add(AddUser $request)
    {
        if ($request->post()) {
            $Users = new Users();
            $data = [
                'login' => $request->login,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'password' => Hash::make($request->password)
            ];
            if ($Users->addUser($data)) {
                $request->session()->flash('success', 'Pomyślnie dodano nowego użytkownika');
                return redirect('/users/index');
            }
        }
    }
}
