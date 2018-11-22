@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => 'address/add/' . $userID)) }}
    <div class="form-group">
        {{ Form::label('street', 'Ulica') }}
        {{ Form::text('street','', ['class' => 'form-control', 'placeholder'=> 'Wpisz nazwę i numer ulicy' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', 'Miasto') }}
        {{ Form::text('city','', ['class' => 'form-control', 'placeholder'=> 'Wpisz nazwę miasta' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('zipcode', 'Kod pocztowy') }}
        {{ Form::text('zipcode','', ['class' => 'form-control', 'placeholder'=> 'Wpisz kod pocztowy' ]) }}
    </div>
    {{ Form::submit('Dodaj adres', ['class' => 'btn btn-dark']) }}
    {{ Form::close() }}
@endsection