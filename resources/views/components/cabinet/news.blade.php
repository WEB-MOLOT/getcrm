<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|\App\Models\NewsItem[] $news
 */
?>
<div class="news-block">
    <div class="block-name">
        Новости
    </div>
    <div class="flex">
        @foreach($news as $item)
            <div class="item news-block__item">
                <a href="{{ route('site.news.item', $item) }}" class="link"></a>
                <img src="{{ $item->getImageUrl() }}"/>
                <a href="{{ route('site.news.item', $item) }}">{{ $item->title }}</a>
                <div class="news-block__item-text">
                    {{ $item->description }}
                </div>
                <span class="news-block__item-date">
                      {{ $item->created_at->format('d.m.Y') }}
                    </span>
            </div>
        @endforeach
    </div>
    <div class="bottom-link">
        <a href="{{ route('site.news.index') }}">Все новости</a>
    </div>
</div>
