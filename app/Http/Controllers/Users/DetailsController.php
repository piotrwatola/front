<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address;
use App\UserAddress;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailsController extends Controller
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
        $addresses = $Users->getUserAddresses($id);
        return view('users.details', ['userID' => $id, 'addresses' => $addresses]);
    }
}
