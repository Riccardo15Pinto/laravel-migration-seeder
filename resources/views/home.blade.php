@extends('layouts.main')

@section('title', 'HOME')

@section('content')
    <div class="list-group-item list-group-item-secondary rounded">
        <h3 class="list-group-item list-group-item-action active p-3" aria-current="true">
            Cose vuoi fare ?
        </h3>
        <a href="{{ route('table') }}" class="list-group-item list-group-item-action p-2">Vedi Tabella Treni -> </a>
        <a href="{{ route('ticket') }}" class="list-group-item list-group-item-action p-2">Aquista un Biglietto -></a>
    </div>
@endsection
