<?php

namespace App\Http\Controllers\UserAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address;
use App\Users;
use Illuminate\Http\Request;

class EditAddressController extends Controller
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
        $UserID = $request->route('var1');
        $AddressID = $request->route('var2');
        $Users = new Users();
        $address = $Users->getUserAddress($AddressID);
        return view('useraddress.edit', ['userID' => $UserID, 'address' => $address]);

    }

    public function edit(Address $request)
    {
        $UserID = $request->route('var1');
        $AddressID = $request->route('var2');
        $Users = new Users();
        $data = [
            'id' => $AddressID,
            'street' => $request->street,
            'city' => $request->city,
            'zipcode' => $request->zipcode
        ];
        if ($Users->editUserAddress($data)) {
            $request->session()->flash('success', 'Pomyślnie zedytowano adres użytkownika');
            return redirect('/users/details/' . $UserID);
        }
    }
}
