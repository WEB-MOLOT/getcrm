<?php
/**
 * @var \App\Models\Review[]|\Illuminate\Database\Eloquent\Collection $reviews
 * @var float $reviewsAvgScore
 * @var float $reviewsDevelopmentAvgScore
 * @var float $reviewsUsabilityAvgScore
 * @var float $reviewsTeamAvgScore
 * @var float $reviewsBudgetAvgScore
 * @var float $reviewsDeadlinesAvgScore
 */
?>
<div class="reviews">
    <div class="block-name flex">
        <div>Что думают наши клиенты о предлагаемых решениях</div>
        <div class="rating">
            <span class="star"></span> {{ round($reviewsAvgScore, 1) }} <span class="arrow"></span>
        </div>
    </div>
    <div class="content">
        <div class="rating">
            <div class="r-item flex">
                <p>Качество разработки</p>
                @include('_partials.products.score', ['score' => $reviewsDevelopmentAvgScore])
            </div>

            <div class="r-item flex">
                <p>Юзабилити</p>
                @include('_partials.products.score', ['score' => $reviewsUsabilityAvgScore])
            </div>

            <div class="r-item flex">
                <p>Квалификация команды</p>
                @include('_partials.products.score', ['score' => $reviewsTeamAvgScore])
            </div>

            <div class="r-item flex">
                <p>Бюджет</p>
                @include('_partials.products.score', ['score' => $reviewsBudgetAvgScore])
            </div>

            <div class="r-item flex">
                <p>Сроки</p>
                @include('_partials.products.score', ['score' => $reviewsDeadlinesAvgScore])
            </div>

        </div>
        <div class="list">
            @foreach($reviews as $review)
                <div class="item">
                    <div class="flex">
                        <div class="company">
                            @if($review->customer->company_id)
                                <div>
                                                        <span><img
                                                                src="{{ $review->customer->company->getLogoUrl() }}"/></span>
                                </div>
                            @endif
                            <div>
                                {{ $review->customer->position }}
                                <strong>{{ $review->customer->name }}</strong>
                            </div>
                        </div>
                        <div class="company-rating">
                            <span>{{ round($review->score, 1) }}</span>
                            оценки
                        </div>
                    </div>
                    <div class="text">
                        {{ $review->text }}
                    </div>
                </div>
            @endforeach
        </div>
        <a class="bottom-link">Оставить отзыв</a>
    </div>
</div>
