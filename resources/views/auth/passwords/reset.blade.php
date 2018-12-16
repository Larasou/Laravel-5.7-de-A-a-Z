@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <div class="center bg-white max-w-md w-full p-8 rounded-lg">
                <h3 class="text-center text-3xl">
                   Réinitiliser mon mot de passe
                </h3>

                <div class="p-4 my-10">
                    <form action="" method="post">
                        @csrf


                        @include('auth.fields', [
                            'name' => "password",
                            'placeholder' => "Nouveau mot de passe",
                            'type' => "password",
                        ])

                        @include('auth.fields', [
                            'name' => "password_confirmation",
                            'placeholder' => "RE: Mot de passe",
                            'type' => "password",
                        ])

                        <div class="flex flex-col my-5">
                            <button class="py-4 px-6 w-full bg-red-dark text-white font-bold text-lg rounded-full">
                                Mettre à jour!
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

                    <a href="{{ route('login') }}"
                       class="font-bold no-underline text-lg text-red">
                      Se connecter
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
