@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="my-10">
            <a href="{{ route('projects.create') }}"
            class="py-3 px-4 bg-blue-dark no-underline">
                Ajouter un projet
            </a>


            @foreach($projects as $project)
                <div class="p-3">
                    <h3 class="text-2xl mb-3">
                        <a href="{{ route('projects.show', $project) }}" class="no-underline text-indigo-dark">
                            {{ $project->name }}
                        </a>
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
