<?php

namespace App\Http\Controllers\UserAddress;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address;
use App\Users;
use Illuminate\Http\Request;

class AddAddressController extends Controller
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
        $userID = $request->route('var1');
        return view('useraddress.add', ['userID' => $userID]);
    }


    public function add(Address $request)
    {
        if ($request->post()) {
            $userID = $request->route('var1');
            $Users = new Users();
            $data = [
                'id' => $userID,
                'street' => $request->street,
                'city' => $request->city,
                'zipcode' => $request->zipcode
            ];
            if ($Users->addUserAddress($data)) {
                $request->session()->flash('success', 'Pomyślnie dodano adres użytkownika');
                return redirect('/users/details/' . $userID);
            }
        }
    }
}
