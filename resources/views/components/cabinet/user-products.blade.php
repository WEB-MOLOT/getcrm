<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|\App\Models\UserProduct[] $products
 */
?>
<div class="subscribes">
    <div class="block-name">
        Ваши продукты и подписки
    </div>
    @foreach($products as $product)
        <div class="item {{ $product->hasMark() ? 'time' : '' }}">
            <div class="name">
                {{ $product->name }}
            </div>
            Лицензия истекает
            <div class="progress">
                <span class="{{ $product->getProgressClass() }}" style="width: {{ $product->getProgress() }}%;"></span>
            </div>
            через {{ $product->getRemainingDays() }} дня
        </div>
    @endforeach

    <a href="#" class="bottom-link">Все продукты</a>
</div>
