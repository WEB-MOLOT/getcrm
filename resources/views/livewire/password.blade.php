<div class="block">
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
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
            <a class="shaw-pass">Показать пароль</a>
        </div>
        <div class="field">
            <p>Новый пароль:</p>
            <input type="password" wire:model="password" class="small"/>
        </div>
        <div class="field">
            <p>Подтверждение:</p>
            <input type="password" wire:model="passwordConfirmation" class="small"/>
        </div>
        <div class="field">
            <button type="submit">Изменить</button>
        </div>
    </form>
</div>
