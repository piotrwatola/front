@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => 'auth/login')) }}
    <div class="form-group">
        {{ Form::label('login', 'Login') }}
        {{ Form::text('login','', ['class' => 'form-control', 'placeholder'=> 'Wpisz swój login' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Hasło') }}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder'=> 'Wpisz hasło' ]) }}
    </div>
    {{ Form::submit('Zaloguj', ['class' => 'btn btn-dark']) }}
    {{ Form::close() }}
@endsection
