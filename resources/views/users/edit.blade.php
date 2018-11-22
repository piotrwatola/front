@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => 'users/edit/' . $user->id)) }}
    <div class="form-group">
        <p class="font-weight-bold">Login: {{ $user->login }}</p>
    </div>
    <div class="form-group">
        {{ Form::label('firstname', 'Imię') }}
        {{ Form::text('firstname', $user->firstname, ['class' => 'form-control', 'placeholder'=> 'Wpisz swóje imię' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Nazwisko') }}
        {{ Form::text('lastname', $user->lastname, ['class' => 'form-control', 'placeholder'=> 'Wpisz swoje nazwisko' ]) }}
    </div>
    {{ Form::submit('Edytuj użytkownika', ['class' => 'btn btn-dark']) }}
    {{ Form::close() }}
@endsection