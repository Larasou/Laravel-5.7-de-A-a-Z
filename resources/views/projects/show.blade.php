@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="my-10 w-4/5">
          <h3 class="text-center text-2xl">
              {{ $project->name }}
          </h3>

            <div class="my-3 flex justify-end">
                <a href="{{ route('projects.edit', $project) }}" class="p-3 text-green-darker no-underline font-bold">
                    Editer
                </a>

                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="p-3 text-red-darker no-underline font-bold">
                        Supprimer
                    </button>
                </form>
            </div>

            <div class="mt-5 text-lg">
                {!! $project->description !!}
            </div>
        </div>
    </div>
@stop

@section('js')

@stop
