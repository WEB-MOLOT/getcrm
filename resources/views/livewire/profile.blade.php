<div class="block">
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->isNotEmpty())
            <div class="alert alert-danger">
                Произошла ошибка при обновление данных профиля.
            </div>
        @endif
    </div>
    <form wire:submit.prevent="save">
        <div class="name">
            Контактная информация
        </div>
        <div class="field">
            <p>ФИО:</p>
            <input type="text" wire:model="name"/>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="field">
            <p>Организация:</p>
            <input type="text" wire:model="firm"/>
            @error('firm') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="field">
            <p>Должность:</p>
            <input type="text" wire:model="position"/>
            @error('position') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="field phones">
            {{--            <a class="add"></a>--}}
            <p>Телефон:</p>
            {{--            <div class="field__input-wrap">--}}
            <input type="text" wire:model="phones"/>
            {{--<span class="field__input-remove">+</span>--}}
            @error('phones') <span class="error">{{ $message }}</span> @enderror
            {{--            </div>--}}
        </div>
        <div class="field mail">
            {{--<a class="add"></a>--}}
            <p>E-mail:</p>
            <input type="text" wire:model="email"/>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="field"></div>
        <div class="field">
            <button type="submit">Изменить</button>
        </div>
    </form>
</div>
