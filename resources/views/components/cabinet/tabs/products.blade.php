<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|\App\Models\UserProduct[] $products
 */
?>
<div class="products">
    <div class="block-name">
        Ваши продукты
    </div>
    <div class="flex">
        @foreach($products as $product)
            <div class="item {{ $product->hasMark() ? 'time' : '' }} {{ $product->isActive() ? '' : 'no' }}">
                <div class="name">
                    {{ $product->name }}
                </div>
                <div class="id">
                    {{ $product->code }}
                </div>
                @if($product->isActive())
                    <span class="end">Лицензия истекает</span>
                    <div class="progress">
                        <span class="{{ $product->getProgressClass() }}"
                              style="width: {{ $product->getProgress() }}%;"></span>
                    </div>
                    через {{ $product->getRemainingDays() }} дня
                @else
                    <span class="end">Лицензия истекла</span>
                    <div class="progress">
                        <span class="green" style="width: 100%;"></span>
                    </div>
                    {{ $product->finished_at->format('d.m.Y') }}
                @endif
            </div>
        @endforeach
    </div>
</div>
