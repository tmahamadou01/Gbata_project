@extends('layouts.app')

@section('content')
    <div class="cont">
        <!-- Page Content goes here
        liste des offres-->
        @if($offers != [])
        <table id="table_id" class="display bordered responsive-table" >
            <thead>
            <tr>
                <th data-field="id">TYPE DE MAISON</th>
                <th data-field="name">COMMUNE</th>
                <th data-field="price">ZONE</th>
                <th data-field="price">LOYER</th>
                <th data-field="price">CAUTION</th>
                <th data-field="price">DESCRIPTION</th>
                <th data-field="price">DATE CREATION</th>
                <th data-field="price">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <td>{{ $offer->type_maison }}</td>
                    <td>{{ $offer->commune }}</td>
                    <td>{{ $offer->zone }}</td>
                    <td>{{ $offer->loyer }}</td>
                    <td>{{ $offer->caution }}</td>
                    <td>{{ $offer->description }}</td>
                    <td>{{ $offer->created_at }}</td>
                    <td>
                        <a class="btn waves-effect waves-teal" href="{{ route('offers.edit', $offer) }}">Modifier</a>
                        <a class="btn waves-effect waves-teal red">Supprimer</a>
                        <a class="btn waves-effect waves-teal grey">Archiver</a>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
            @else
            <?= ' vide '?>

        @endif
    </div>
@endsection