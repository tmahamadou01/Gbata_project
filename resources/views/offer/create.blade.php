@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container" style="padding-top: 40px">
        {!! Form::open(['url' => route('offers.store')]) !!}
        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('type_maison',
                [
                'Maison Basse' => 'Maison Basse',
                'Appartement' => 'Appartement',
                'Duplex' => 'Duplex',
                'Triplex' => 'Triplex'
                ], null, ['placeholder' => 'Selectionner votre type de maison'])!!}
                {!! Form::label('type_maison', 'Type de maison') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('commune',
                [
                'Abobo' => 'Abobo',
                'Anyama' => 'Anyama',
                'Cocody' => 'Cocody',
                'Yopougon' => 'Yopougon',
                'Koumassi' => 'Koumassi'
                ], null, ['placeholder' => 'Selectionner la commune'])!!}
                {!! Form::label('commune', 'Commune') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('zone',null, ['placeholder' =>'saisissez la zone']) !!}
                {!! Form::label('zone', 'Zone') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                {!! Form::text('loyer', null, ['class' => 'validate', 'placeholder' =>'saisissez le loyer'])!!}
                {!! Form::label('loyer', 'Loyer') !!}
            </div>
            <div class="input-field col s4">
                {!! Form::number('piece', null, ['class' => 'validate', 'min' => "0" ,'step' => "any", 'placeholder' =>'saisissez le nombre de pièce'])!!}
                {!! Form::label('piece', 'Nombre de pièce') !!}
                @if ($errors->has('piece'))
                    {!! Form::label('piece', 'Nombre de pièce',['data-error'  => "wrong", 'data-success' => "right"]) !!}
                @endif
            </div>
            <div class="input-field col s4">
                {!! Form::number('caution', null, ['class' => 'validate', 'min' => "0" ,'step' => "any", 'placeholder' =>'saisissez la caution'])!!}
                {!! Form::label('caution', 'Caution') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('description', null, ['placeholder' =>'saisissez la description']) !!}
                {!! Form::label('description', 'Description') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('contact', null, ['placeholder' =>'saisissez le contact']) !!}
                {!! Form::label('contact', 'Contact') !!}
            </div>
        </div>
        <button class="btn btn-primary">envoyer</button>
        {!! Form::close() !!}
    </div>
@endsection