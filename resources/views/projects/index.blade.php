@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="my-10">
            @foreach($projects as $project)
                <div class="p-3">
                    <h3 class="text-2xl mb-3">
                        {{ $project->name }}
                    </h3>

                    <p class="text-lg">
                        {{ $project->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('js')

@stop
