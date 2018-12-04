@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <div class="center bg-white max-w-md w-full p-8 rounded-lg">
                <h3 class="text-center text-3xl">
                    Se connecter
                </h3>

                <div class="p-4 my-10">
                    <form action="/login" method="post">
                        @csrf

                        <div class="flex flex-col my-5">
                           <input type="text" name="email"
                                  value="{{ old('email') }}"
                                  class="form-auth {{ $errors->first('email', 'is-error') }}">
                            {!! $errors->first('email', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                       </div>

                        <div class="flex flex-col my-5">
                           <input type="password" name="password"
                                  class="form-auth {{ $errors->first('password', 'is-error') }}">
                           {!! $errors->first('password', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                       </div>

                        <div class="flex flex-col my-5">
                         <button class="py-4 px-6 w-full bg-red-dark text-white font-bold text-lg rounded-full">
                             Se connecter
                         </button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
