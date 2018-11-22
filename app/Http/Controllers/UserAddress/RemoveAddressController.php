<?php

namespace App\Http\Controllers\UserAddress;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;

class RemoveAddressController extends Controller
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
        $UserID = $request->route('var1');
        $AddressID = $request->route('var2');
        $Users = new Users();
        $data = [
            'id' => $AddressID
        ];
        if ($Users->removeUserAddress($data)) {
            $request->session()->flash('success', 'Pomyślnie usunięto adres użytkownika');
            return redirect('/users/details/' . $UserID);
        }
    }
}
