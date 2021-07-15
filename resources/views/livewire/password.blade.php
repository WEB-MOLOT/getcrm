<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>
<div class="block">
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->isNotEmpty())
            <div class="alert alert-danger">
                Произошла ошибка при обновление пароля.
            </div>
        @endif
    </div>
    <form wire:submit.prevent="save">
        <div class="name">
            Безопасность
        </div>
        <div class="field">
            <p>Пароль:</p>
            <input type="password" wire:model="oldPassword" class="small"/>
            <div><a class="shaw-pass">Показать пароль</a></div>
            @error('oldPassword')
            <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="field">
            <p>Новый пароль:</p>
            <input type="password" wire:model="password" class="small"/>
            @error('password')
            <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="field">
            <p>Подтверждение:</p>
            <input type="password" wire:model="password_confirmation" class="small"/>
        </div>
        <div class="field">
            <button type="submit">Изменить</button>
        </div>
    </form>
</div>
