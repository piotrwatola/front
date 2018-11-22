@extends('layouts.app')

@section('content')
    <div class="col text-sm-right" style="margin: 10px 0 10px 0;">
        <a href="/address/add/{{ $userID }}">
            <button type="submit" class="btn btn-outline-dark">Dodaj adres</button>
        </a>
        <a href="/users/edit/{{ $userID }}">
            <button type="submit" class="btn btn-outline-dark">Edytuj dane użytkownika</button>
        </a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ulica</th>
                <th scope="col">Kod pocztowy</th>
                <th scope="col">Miasto</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <th scope="row">{{ $address->id }}</th>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->zipcode }}</td>
                    <td>{{ $address->city }}</td>
                    <td>
                        <a href="/address/edit/{{ $userID }}/{{ $address->id }}"><i class="material-icons">edit</i></a>
                        <a href="/address/remove/{{ $userID}}/{{ $address->id }}" onclick="confirm('Adres zostanie usunięty. Wykonać?');"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection