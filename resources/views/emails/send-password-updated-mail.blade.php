@component('mail::message')
# Mot de passe mis à jour

Hello {{$name}}, votre mot de passe vient d'étre mis à jour.

Si vous n\'avez pas fait cette modification, veuillez nous envoyez contactez rapdidement.

Thanks,<br>
{{ config('app.name') }}
@endcomponent