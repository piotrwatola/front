@extends('layouts.app')

@section('content')
    <div class="col text-sm-right" style="margin: 10px 0 10px 0;">
        <a href="/users/add">
            <button type="submit" class="btn btn-outline-dark">Dodaj użytkownika</button>
        </a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Login</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->login }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>
                            <a href="/users/details/{{ $user->id }}"><i class="material-icons">edit</i></a>
                            &nbsp;
                            <a href="/users/remove/{{ $user->id }}" onclick="confirm('Użytkownik zostanie usunięty. Wykonać?');"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection