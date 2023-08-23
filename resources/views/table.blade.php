@extends('layouts.main')


@section('title', 'Table')

@section('content')
    <table class="table table-dark table-striped">

        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Compagnia</th>
                <th scope="col">Partenza</th>
                <th scope="col">Destinazione</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">PNR</th>
                <th scope="col">Carrozza</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($trains as $train)
                <tr>
                    <th scope="row">-</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure }}</td>
                    <td>{{ $train->destination }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->pnr }}</td>
                    <td>{{ $train->train_carriage }}</td>
                    <td class="@if ($train->in_time) text-success @else text-warning @endif">
                        {{ $train->isinTime() }}</td>
                    <td class="text-danger">{{ $train->isDeleted() }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
