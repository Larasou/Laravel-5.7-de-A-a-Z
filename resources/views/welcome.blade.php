@extends('layouts/default')

@section('content')
    <h3>
        Saluuut à tous!
    </h3>

    <h2>{{ $nameNana }}</h2>

    <div class="my-10">
        <a href="/members">Liste des membres</a>

        <a href="/contact">Contact</a>
    </div>
@stop
