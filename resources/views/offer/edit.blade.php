@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 40px">
    {!! Form::open(['method' => 'put', 'url' => route('offers.update', $offer)]) !!}
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
                {!! Form::text('zone', $offer->zone) !!}
                {!! Form::label('zone', 'Zone') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                {!! Form::text('loyer', $offer->loyer, ['class' => 'validate'])!!}
                {!! Form::label('loyer', 'Loyer') !!}
            </div>
            <div class="input-field col s4">
                {!! Form::number('piece', $offer->piece, ['class' => 'validate', 'min' => "0" ,'step' => "any"])!!}
                {!! Form::label('piece', 'Nombre de pièce') !!}
            </div>
            <div class="input-field col s4">
                {!! Form::number('caution', $offer->caution, ['class' => 'validate', 'min' => "0" ,'step' => "any"])!!}
                {!! Form::label('caution', 'Caution') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('description', $offer->description) !!}
                {!! Form::label('description', 'Description') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('contact', $offer->contact) !!}
                {!! Form::label('contact', 'Contact') !!}
            </div>
        </div>
        <button class="btn btn-primary">envoyer</button>
    {!! Form::close() !!}
    </div>
@endsection