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


                        @include('auth.fields', [
                            'name' => "name",
                            'placeholder' => "Nom d'utilisateur",
                            'type' => "text",
                        ])

                        @include('auth.fields', [
                            'name' => "password",
                            'placeholder' => "Mot de passe",
                            'type' => "password",
                        ])

                        <div class="flex flex-col my-5">
                         <button class="py-4 px-6 w-full bg-red-dark text-white font-bold text-lg rounded-full">
                             Se connecter
                         </button>
                       </div>
                    </form>

                    @component('layouts.flash')
                        {!! session('message') !!}
                    @endcomponent
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('register') }}"
                    class="font-bold no-underline text-lg text-red">
                        S'enregistrer
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
