@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
       <div class="my-10">
           <form class="w-4/5" action="{{ route('projects.update', $project) }}" method="POST">
               @csrf
               @method('PUT')

               <div class="py-3">
                   <input value="{{ $project->name }}" type="text" name="name"
                          class="bg-form">
               </div>

               <div class="py-3">
                   <textarea class="bg-form" name="description" id="description" cols="30" rows="10">{{ $project->description }}</textarea>
               </div>

               <div>
                   <button class="bg-green-dark text-white py-3 px-6">
                       Enregistrer
                   </button>
               </div>
           </form>
       </div>
    </div>
@stop

@section('js')

@stop
