@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => 'address/edit/' . $userID . '/' . $address->id)) }}
    <div class="form-group">
        {{ Form::label('street', 'Ulica') }}
        {{ Form::text('street', $address->street, ['class' => 'form-control', 'placeholder'=> 'Wpisz nazwę i numer ulicy' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', 'Miasto') }}
        {{ Form::text('city', $address->city, ['class' => 'form-control', 'placeholder'=> 'Wpisz nazwę miasta' ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('zipcode', 'Kod pocztowy') }}
        {{ Form::text('zipcode', $address->zipcode, ['class' => 'form-control', 'placeholder'=> 'Wpisz kod pocztowy' ]) }}
    </div>
    {{ Form::submit('Zedytuj adres', ['class' => 'btn btn-dark']) }}
    {{ Form::close() }}
@endsection