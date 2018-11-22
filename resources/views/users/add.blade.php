@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => 'users/add')) }}
    <div class="form-group">
        {{ Form::label('login', 'Login') }}
        {{ Form::text('login','', ['class' => 'form-control', 'placeholder'=> 'Wpisz swój login' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('firstname', 'Imię') }}
        {{ Form::text('firstname','', ['class' => 'form-control', 'placeholder'=> 'Wpisz swóje imię' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Nazwisko') }}
        {{ Form::text('lastname','', ['class' => 'form-control', 'placeholder'=> 'Wpisz swoje nazwisko' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Hasło') }}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder'=> 'Wpisz hasło' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirm', 'Powtórz hasło') }}
        {{ Form::password('password_confirm', ['class' => 'form-control', 'placeholder'=> 'Wpisz hasło' ]) }}
    </div>
    {{ Form::submit('Dodaj użytkownika', ['class' => 'btn btn-dark']) }}
    {{ Form::close() }}
@endsection