<?php
/**
 * @var Collection|NewsItem[]|LengthAwarePaginator $newsItems
 * @var \App\Models\SeoData $seo
 * @var int $year
 */

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

?>
@extends('layouts.site')

@section('title', $seo->title ?? 'Новости')

@section('footer')

@endsection

@section('before_content')
    <div class="first_bk inner">
        @include('_partials.header')
    </div>
@endsection

@section('after_content')
    @include('_partials.creating-project')
    @include('_partials.footer')
@endsection

@section('content')
    <div class="news-page">
        <div class="container">
            <h1>Новости</h1>
            <div class="flex">
                @foreach($newsItems as $item)
                    <div class="item">
                        <a href="{{ route('site.news.item', $item) }}" class="link"></a>
                        <div class="date">
                            {{ $item->published_at->format('d.m.Y') }}
                        </div>
                        <a href="{{ route('site.news.item', $item) }}" class="name"
                        >{{ $item->title }}</a
                        >
                        <a href="{{ route('site.news.item', $item) }}">
                            <img src="{{ $item->getImageUrl() }}" alt=""/>
                        </a>
                        <p>
                            {{ $item->description }}
                        </p>
                        <svg
                            width="35"
                            height="19"
                            viewBox="0 0 35 19"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M33.7557 8.4669C33.6871 8.37996 32.0397 6.31337 29.2154 4.23843C25.4413 1.46563 21.3348 0 17.3397 0C13.3448 0 9.23829 1.46563 5.46409 4.23843C2.63986 6.31329 0.99246 8.37996 0.92376 8.4669L0.339844 9.20541L0.923834 9.94399C0.992535 10.0309 2.63993 12.0976 5.46416 14.1725C9.23837 16.9453 13.3449 18.4109 17.3398 18.4109C21.3348 18.4109 25.4413 16.9453 29.2154 14.1725C32.0397 12.0976 33.6871 10.0309 33.7557 9.94399L34.3398 9.20541L33.7557 8.4669ZM17.3397 15.6543C13.7838 15.6543 10.8908 12.7614 10.8908 9.20541C10.8908 8.64829 10.9618 8.10747 11.0953 7.59143L9.62296 7.34365C9.47871 7.94096 9.40219 8.5644 9.40219 9.20541C9.40219 11.5024 10.3834 13.5742 11.9481 15.025C9.93386 14.281 8.22111 13.2369 6.92846 12.2927C5.32699 11.123 4.12678 9.93997 3.44253 9.20541C4.12707 8.47062 5.32714 7.28775 6.92846 6.11813C8.22111 5.17389 9.93393 4.12984 11.9481 3.38575L12.9358 4.49909C14.0893 3.41894 15.6385 2.7565 17.3397 2.7565C20.8956 2.7565 23.7886 5.64944 23.7886 9.20541C23.7886 12.7614 20.8956 15.6543 17.3397 15.6543ZM27.751 12.2927C26.4582 13.2369 24.7455 14.281 22.7314 15.025C24.296 13.5743 25.2772 11.5024 25.2772 9.20533C25.2772 6.90822 24.296 4.83642 22.7314 3.38567C24.7456 4.12976 26.4582 5.17382 27.751 6.11806C29.3525 7.28775 30.5527 8.47077 31.2369 9.20526C30.5524 9.9402 29.3523 11.1231 27.751 12.2927Z"
                                fill="#A5A5A5"
                            />
                            <path
                                d="M13.2356 7.95178C13.1145 8.34842 13.049 8.76918 13.049 9.20543C13.049 11.5749 14.9698 13.4958 17.3393 13.4958C19.7088 13.4958 21.6297 11.575 21.6297 9.20543C21.6297 6.8359 19.7088 4.91504 17.3393 4.91504C16.1852 4.91504 15.1383 5.3716 14.3671 6.11294L16.4834 8.49833L13.2356 7.95178Z"
                                fill="#A5A5A5"
                            />
                        </svg>
                    </div>
                @endforeach

            </div>
            <div class="flex">
                <div class="pages">
                    {{ $newsItems->onEachSide(1)->links() }}
                </div>
                <div class="years">
                    <span>Новости за:</span>
                    @for($i = (int)now()->format('Y'); $i >= 2018; $i--)
                        <a href="{{ route('site.news.index', ['year' => $i]) }}" {{ $i === $year ? ' class=active' : '' }}>{{ $i }}</a>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
