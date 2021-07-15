<?php
/**
 * @var string|null $subscribeEmail
 * @var bool $hasSubscription
 */
?>
<div class="block">
    <div class="name">
        Рассылка
    </div>
    <div class="top-text">
        Рассылка с последними новостями, продуктами, и т.д
    </div>
    <div class="field mail2">
        {{--        <a class="add"></a>--}}
        <p>
            <input type="checkbox" class="chkbx" wire:model="hasSubscription" id="c"/><label
                for="c"
            ><span></span
                ></label>
        </p>
        <div class="field__input-wrap">
            <input type="text" wire:model="subscribeEmail"/>
            @error('subscribeEmail') <span class="error">{{ $message }}</span> @enderror
            {{--            <span class="field__input-remove">+</span>--}}
        </div>
    </div>
    <div class="field">
        <input type="checkbox" class="checkbox" id="ccc2"/><label
            for="ccc2"
            class="small"
        >Использовать E-mail, который введен прирегистрации
            (info@investhold.ru)</label
        >
    </div>
</div>
