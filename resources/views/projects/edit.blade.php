@extends('layouts.default')

@section('css')

@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        @include('layouts.errors')

       <div class="my-10">
           <form class="w-4/5" action="{{ route('projects.update', $project) }}" method="POST">
               @csrf
               @method('PUT')

               <div class="py-3">
                   <input type="text" name="name"
                          class="bg-form">
                   {!! $errors->first('name', '<p class="text-red-darker text-lg font-bold">:message</p>') !!}
               </div>

               <div class="py-3">
                   <textarea class="bg-form" name="description" id="description" cols="30" rows="10"></textarea>
                   {!! $errors->first('description', '<p class="text-red-darker text-lg font-bold">:message</p>') !!}
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
