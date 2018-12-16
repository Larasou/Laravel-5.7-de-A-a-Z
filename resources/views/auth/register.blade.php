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

                        @include('auth.fields', [
                            'name' => "name",
                            'placeholder' => "Nom d'utilisateur",
                            'type' => "text",
                        ])


                          @include('auth.fields', [
                            'name' => "email",
                            'placeholder' => "Adresse email",
                            'type' => "email",
                        ])

                        @include('auth.fields', [
                            'name' => "password",
                            'placeholder' => "Mot de passe",
                            'type' => "password",
                        ])

                        @include('auth.fields', [
                            'name' => "password_confirmation",
                            'placeholder' => "RE: Mot de passe",
                            'type' => "password",
                        ])

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

                    <a href="{{ route('forget') }}"
                       class="font-bold no-underline text-lg text-red">
                        Mot de passe perdu?
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
