@extends('layouts/default')

@section('content')
    <h3>
        Saluuut à tous!
    </h3>

    <h2>{{ $nameNana }}</h2>

    <div class="my-10">
       <ul>
           @foreach ($tasks as $task)
           <li>{{ $task }}</li>
           @endforeach
       </ul>
    </div>
@stop
