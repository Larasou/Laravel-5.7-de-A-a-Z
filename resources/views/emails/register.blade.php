@component('mail::message')
# Valider ton compte!

Salut {{ $user->name }},

Clique sur le bouton ci-dessous pour valider ton compte!

@component('mail::button', ['url' => route('confirmation', [$user, $user->token])])
Valider mon compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
