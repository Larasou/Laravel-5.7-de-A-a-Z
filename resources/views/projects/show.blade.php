@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="    https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
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

                <div class="my-5 text-lg  border-2 rounded-lg p-3">
                    @foreach($project->tasks as $task)
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="my-2">
                                <div class="pretty p-switch p-slim">
                                    <input
                                        onchange="this.form.submit()"
                                        name="completed"
                                        id="completed"
                                        {{ $task->completed ? 'checked' : '' }} type="checkbox" />
                                    <div class="state">
                                        <label
                                            class="{{ $task->completed ? 'font-bold text-blue-dark' : '' }}"
                                            for="completed">
                                            {{ $task->description }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>

                <div>
                    <form action="{{ route('tasks.store', $project) }}" method="POST">
                        @csrf
                        <div>
                            <input
                                type="text"
                                name="description"
                                class="bg-form"
                                placeholder="Description de la tâche"
                            >
                        </div>
                        <div class="mt-2">
                            <button class="py-3 px-6 bg-orange-dark text-white rounded-l">
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop
