@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="my-10">
          <h3 class="text-center text-2xl">
              {{ $project->name }}
          </h3>

            <div class="mt-5 text-lg">
                {!! $project->description !!}
            </div>
        </div>
    </div>
@stop

@section('js')

@stop
