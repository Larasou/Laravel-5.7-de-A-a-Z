@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        @include('layouts.errors')

       <div class="my-10">
           @include('projects.form')
       </div>
    </div>
@stop

@section('js')

@stop
