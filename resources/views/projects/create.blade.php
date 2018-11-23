@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        @include('layouts.errors')

       <div class="my-10">
           @include('projects.form', [
                'method' => $project->id ? method_field('PUT') : ''
           ])
       </div>
    </div>
@stop

@section('js')

@stop
