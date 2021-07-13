<?php
/**
 * @var \App\Models\User $user
 */
?>

Подтверждение регистрации в личном кабинете

Для подтверждения регистрации пройдите по ссылке
{{ $user->sendEmailVerificationNotification() }}

{{ config('app.mail.footer') }}
