@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="container mx-auto">
        <div class="my-10">
            @auth
                <div class="my-5">
                    <a href="{{ route('projects.create') }}"
                       class="py-3 px-4 text-white bg-blue-dark no-underline">
                        Ajouter un projet
                    </a>
                </div>
            @endauth


            @foreach($projects as $project)
                <div class="py-5">
                    <h3 class="text-2xl mb-3">
                        <a href="{{ route('projects.show', $project) }}" class="no-underline text-indigo-dark">
                            {{ $project->name  }}
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
