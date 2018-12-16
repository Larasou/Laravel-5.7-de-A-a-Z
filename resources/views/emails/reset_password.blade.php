@component('mail::message')
# Mot de passe perdu

Clique sur le bouton pour réinitiliser ton mot de passe.

@component('mail::button', ['url' => route('reset', [$user, $user->token])])
Réinitiliser mon mot de passe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
