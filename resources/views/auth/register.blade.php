@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <div class="center bg-white max-w-md w-full p-8 rounded-lg">
                <h3 class="text-center text-3xl">
                   S'enregistrer
                </h3>

                <div class="p-4 my-10">
                    <form action="/register" method="post">
                        @csrf

                        <div class="flex flex-col my-5">
                            <input type="text" name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Nom d'utilisateur"
                                   class="form-auth {{ $errors->first('email', 'is-error') }}">
                            {!! $errors->first('name', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>


                        <div class="flex flex-col my-5">
                            <input type="text" name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Adresse email"
                                   class="form-auth {{ $errors->first('email', 'is-error') }}">
                            {!! $errors->first('email', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-5">
                            <input type="password" name="password"
                                   placeholder="Mot de passe"
                                   class="form-auth {{ $errors->first('password', 'is-error') }}">
                            {!! $errors->first('password', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-5">
                            <input type="password" name="password_confirmation"
                                   placeholder="Re: Mot de passe"
                                   class="form-auth {{ $errors->first('password', 'is-error') }}">
                            {!! $errors->first('password', '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-5">
                            <button class="py-4 px-6 w-full bg-red-dark text-white font-bold text-lg rounded-full">
                                Créer mon compte!
                            </button>
                        </div>
                    </form>

                    @component('layouts.flash')
                        {!! session('message') !!}
                    @endcomponent
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('login') }}"
                       class="font-bold no-underline text-lg text-red">
                        Se connecter
                    </a>

                    <a href=""
                       class="font-bold no-underline text-lg text-red">
                        Mot de passe perdu?
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
