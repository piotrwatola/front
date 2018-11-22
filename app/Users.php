<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Providers\ApiServiceProvider as Api;


class Users extends Authenticatable
{

    protected $fillable = [
        'login', 'firstname', 'lastname', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password, remember_token'
    ];

    public function getUsers()
    {
        $api = new Api();
        $input = [
            'url' => '/api/users',
            'method' => 'GET',
            'data' => []
        ];
        return $api->run($input);
    }

    public function getUser($id)
    {
        $api = new Api();
        $input = [
            'url' => '/api/user',
            'method' => 'GET',
            'data' => ['id' => $id]
        ];
        return $api->run($input);
    }

    public function addUser($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/add/users',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }

    public function editUser($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/edit/users',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }

    public function removeUser($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/remove/users',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }

    public function getUserAddresses($id)
    {
        $api = new Api();
        $input = [
            'url' => '/api/user/addresses',
            'method' => 'GET',
            'data' => ['id' => $id]
        ];
        return $api->run($input);
    }

    public function getUserAddress($id)
    {
        $api = new Api();
        $input = [
            'url' => '/api/user/address',
            'method' => 'GET',
            'data' => ['id' => $id]
        ];
        return $api->run($input);
    }

    public function addUserAddress($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/add/address',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }

    public function editUserAddress($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/edit/address',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }

    public function removeUserAddress($input)
    {
        $api = new Api();
        $input = [
            'url' => '/api/remove/address',
            'method' => 'POST',
            'data' => $input
        ];
        return $api->run($input);
    }
}
