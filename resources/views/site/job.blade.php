<?php
/**
 * @var Collection|Vacancy[] $vacancies
 */

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

?>
@extends('layouts.site')

@section('title')
    Работа у нас
@endsection

@section('footer')
    @include('_partials.modals.subscription')
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
    <div class="job-page">
        <div class="container">
            <h1>Вакансии</h1>
            @foreach($vacancies as $vacancy)
                <div class="item">
                    <h2>{{ $vacancy->title }}</h2>
                    {!! $vacancy->content !!}
                    <div class="info">
                        @if($vacancy->experience)
                            <div class="info-item">
                                <div><img src="/img/job1.svg" alt="Требуемый опыт работы"/></div>
                                <div>Требуемый опыт работы: {{ $vacancy->experience }}</div>
                            </div>
                        @endif
                        @if($vacancy->employment)
                            <div class="info-item">
                                <div><img src="/img/job2.svg" alt="Тип занятости"/></div>
                                <div>{{ $vacancy->employment }}</div>
                            </div>
                        @endif
                        @if($vacancy->salary)
                            <div class="info-item">
                                <div><img src="/img/job3.svg" alt="Зарплата"/></div>
                                <div>{{ $vacancy->salary }}</div>
                            </div>
                        @endif
                    </div>
                    <div class="link">
                        <a href="{{ $vacancy->hh }}">Откликнуться на HH</a>
                    </div>
                </div>
            @endforeach
            <div class="bottom-link">
                <img src="/img/hh.png" alt="Профиль нашей компании на hh.ru"/>
                <a href="{{ config('site.hh_profile') }}">Профиль нашей компании</a> на
                hh.ru
            </div>
        </div>
    </div>
@endsection
