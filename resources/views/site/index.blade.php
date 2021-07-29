<?php
/**
 * @var \App\Models\Pages\HomePage $page
 * @var \App\Models\SeoData $seo
 */
?>
@extends('layouts.site')

@section('title', $page->getSeoTitle())
@section('keywords', $page->getSeoKeywords())
@section('description', $page->getSeoDescription())

@push('js_bottom')
    <script>

        var s = []; // массив для хранения объектов степпера
        var block_change_event = false; // блокировка передачи событий изменения значения степпера при изменение из кода

        // Функция инициализации степпера
        function initStepper() {
            const sliderCheck = document.querySelector(".actual_slider");
            if (sliderCheck != null) {
                $(".actual_slider").each(function () {
                    const filter_id = $(this).data('filter');
                    const items = $(this)
                        .find(".actual_slider--range")
                        .attr("data-labels")
                        .split(",");
                    s[filter_id] = $(this).find(".actual_slider--range");
                    s[filter_id].slider({
                        range: "min",
                        min: 0,
                        max: items.length - 1,
                        value: 0,
                        change: function (event, ui) {
                            if (block_change_event) {
                                return;
                            }
                            if (ui.value === ui.max) {
                                ui.value = 0;
                            }
                            Livewire.emit('sliderChanged', filter_id, items[ui.value], ui.value);
                        }
                    }).slider("pips", {
                        rest: "label",
                        labels: items,
                    });
                });
            }
        }

        let functionalitiesEmpty = document.querySelector('.js-functionalities-empty');
        let functionalities = document.querySelectorAll('.js-functionalities-block');

        // показ списка функциональности при наведение на решение
        let showFunctionalities = function (event) {
            let id = event.target.getAttribute('data-id');

            if (id === null) {
                return;
            }

            functionalitiesEmpty.classList.remove('selected');
            functionalities.forEach(ell => ell.classList.remove('selected'));

            let functionality = document.querySelector('.js-functionalities' + id);
            functionality.classList.add('selected')
        };

        window.addEventListener('test', event => {
            console.log(event.detail);

            // Переключение между инф. текстом и списком решений
            let has_solutions = event.detail.has_solutions;
            let solutionsEmpty = document.querySelector('.js-stepper-solutions-empty');
            let solutions = document.querySelector('.js-stepper-solutions');
            solutions.classList.toggle('selected', has_solutions);
            solutionsEmpty.classList.toggle('selected', !has_solutions);

            // Вывод решений
            if (has_solutions) {
                let solutions = event.detail.picked_solutions;
                let solution_list_container = document.querySelector('.js-stepper-solutions-list');

                // сброс старых слушателей
                const divs = document.querySelectorAll('.js-xxx-mouseover');
                divs.forEach(el => el.removeEventListener('mouseover', showFunctionalities));

                // очистка старого списка
                solution_list_container.innerHTML = '';

                // генерация нового списка
                for (let key in solutions) {
                    if (Object.prototype.hasOwnProperty.call(solutions, key)) {
                        let obj = solutions[key];

                        let li = document.createElement('li');
                        li.className = 'checked checkbox__wrapper js-xxx-mouseover';
                        li.dataset.id = obj.solution_id;
                        li.innerHTML = '<label><input type="checkbox" class="js-xxx" data-id="' + obj.solution_id + '" value=""/><span>' + obj.title + '</span></label>';
                        solution_list_container.appendChild(li);
                    }
                }
            }

            // вешаем новые слушатели для отображения списка функциональности
            const divs = document.querySelectorAll('.js-xxx-mouseover');
            divs.forEach(el => el.addEventListener('mouseover', showFunctionalities));
        })

        Livewire.on('reinit', (filter_id, value_name, value_index) => {
            console.log('reinit', filter_id, value_name, value_index);

            block_change_event = true;
            s.forEach(function (item, i) {
                let index = filter_id === i
                    ? value_index
                    : s[i].slider('value');
                s[i].slider('value', index);
            });

            block_change_event = false;
        })

        initStepper();

    </script>
@endpush

@section('footer')
    @include('_partials.footer')
    @include('_partials.modals')
@endsection

@section('before_content')
    @include('_partials.creating-project')
    <div class="first_bk">
        @include('_partials.header')
        <div class="container">
            <div class="ftbk_title">
            <span class="ftbk_title--large"
            >{{ $page->block1_line1 }}</span
            >
                <span class="ftbk_title--small"
                >{{ $page->block1_line2 }}</span
                >
            </div>
            <div class="ftbk_big">{{ $page->block1_line3 }} <span>{{ $page->block1_line4 }}E</span></div>
            <div class="ftbk_btn">
                <a href="{{ route('site.customer.index') }}" class="btn btn_orange btn_orange_with_border">
                    <span>{{ $page->block1_btn }}о</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('after_content')

@endsection

@section('content')
    <div class="actual_bk">
        <div class="container">
            <div class="title_bk">
                {{ $page->block2_title }}
            </div>
            <livewire:stepper/>
        </div>
    </div>
    <div class="mb_now_bk">
        <div class="container">
            <div class="title_bk">
                {{ $page->block3_title }}
                <span>{{ $page->block3_subtitle }}</span>
            </div>
            <div class="mb_now_slider_wrapper">
                <div class="mb_now_slider">
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/5qap5aO4i9A"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/5qap5aO4i9A"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_video">
                            <iframe
                                width="1018"
                                height="498"
                                src="https://www.youtube.com/embed/BbA9NIUk7IU"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
										html,body{height:100%}
										img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
										span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
										</style>
										<a href=https://www.youtube.com/embed/BbA9NIUk7IU?autoplay=1>
										<img src=https://img.youtube.com/vi/BbA9NIUk7IU/hqdefault.jpg>
										<span>▶</span>
										</a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="mb_now_slider_thumbnails">
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">CRM <br/>Loyalty</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Responsys</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Maxymizer</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">DMP</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">
                                Content <br/>Management
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">CRM <br/>Loyalty</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Responsys</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">Maxymizer</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">DMP</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mb_now_thumbnail">
                            <div
                                class="mb_now_thumbnail--point d_flex a_items_center j_content_center"
                            >
                                <span><em></em></span>
                            </div>
                            <div class="mb_now_thumbnail--txt">
                                Content <br/>Management
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why_getcrm_bk">
        <div class="container">
            <div class="title_bk">
                {{ $page->block4_title }} <span>{{ $page->block4_subtitle }}</span>
            </div>
            <div class="why_getcrm_items">
                <div
                    class="why_getcrm_item why_getcrm_item--left d_flex a_items_start"
                >
                    <div
                        class="why_getcrm_item--variants_bk d_flex j_content_end"
                        style="background-image: url(img/temp/bg_getcrm_1.jpg);"
                    >
                        <div class="why_getcrm_item--variants_bk_inside">
                            <div class="why_getcrm_item--variants_title">
                                Гарантия возврата инвестиций
                            </div>
                            <div class="why_getcrm_item--variants d_flex f_wrap">
                                <div
                                    class="why_getcrm_item--variant active d_flex"
                                    data-item="1"
                                >
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_1.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Контроль бизнес- результатов
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_2.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Customer Journey Mapping (CJM):
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_3.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Применение лучших практик (BPI, Best Practice
                                        Implementation)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why_getcrm_item--results">
                        <div class="why_getcrm_item--results_inside">
                            <div class="why_getcrm_item--results_items">
                                <div
                                    class="why_getcrm_item--results_item active"
                                    data-item="1"
                                >
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Написание Истории Успеха</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="2">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Написание Истории Успеха</li>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="3">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Формулирование целевых проектных KPI</li>
                                            <li>Еженедельный контроль проектных KPI</li>
                                            <li>Построение бизнес-кейса на присейле</li>
                                            <li>Назначение на проект бизнес-консультанта</li>
                                            <li>
                                                Бесплатное сопровождение проекта до полной
                                                окупаемости
                                            </li>
                                            <li>Написание Истории Успеха</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="why_getcrm_item why_getcrm_item--right d_flex a_items_start"
                >
                    <div
                        class="why_getcrm_item--variants_bk"
                        style="background-image: url(img/temp/bg_getcrm_2.jpg);"
                    >
                        <div class="why_getcrm_item--variants_bk_inside">
                            <div class="why_getcrm_item--variants_title">
                                Мультиплатформенность
                            </div>
                            <div class="why_getcrm_item--variants d_flex f_wrap">
                                <div
                                    class="why_getcrm_item--variant active d_flex"
                                    data-item="1"
                                >
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_4.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        С нами выбор платформы станет проще
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="2">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_5.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Выбери выгодного и ответственного партнера
                                    </div>
                                </div>
                                <div class="why_getcrm_item--variant d_flex" data-item="3">
                                    <div
                                        class="why_getcrm_item--variant_icon d_flex a_items_center j_content_center"
                                    >
                                        <img src="/img/svg/icon_why_crm_6.svg" alt=""/>
                                    </div>
                                    <div class="why_getcrm_item--variant_txt">
                                        Подключитесь к непрерывному источнику знаний
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why_getcrm_item--results d_flex j_content_end">
                        <div class="why_getcrm_item--results_inside">
                            <div class="why_getcrm_item--results_items">
                                <div
                                    class="why_getcrm_item--results_item active"
                                    data-item="1"
                                >
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>Мы поможем подготовить Технические Требования</li>
                                            <li>
                                                Воспользуйтесь нашим калькулятором для сравнения
                                                разных вариантов расчетов
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="2">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>Мы поможем подготовить Технические Требования</li>
                                            <li>
                                                Воспользуйтесь нашим калькулятором для сравнения
                                                разных вариантов расчетов
                                            </li>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="why_getcrm_item--results_item" data-item="3">
                                    <div class="why_getcrm_item--results_content">
                                        <ol>
                                            <li>Мы не привязаны к конкретной платформе</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                            <li>Мы поможем с организацией референс-визита</li>
                                            <li>
                                                Мы знаем возможности и ограничения разных платформ
                                            </li>
                                            <li>
                                                Мы поможем подготовить сравнения разных платформ
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects_bk">
        <div class="container">
            <div class="title_bk">{{ $page->block5_title }}</div>
            <div class="projects_slider_wrapper">
                <div class="projects_slider">
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="item_inside d_flex a_items_center j_content_between"
                        >
                            <div class="project_logo">
                                <img src="/img/temp/project_logo.png" alt=""/>
                            </div>
                            <div class="project_percentage">
                                <div class="project_percentage--value">+16%</div>
                                <div class="project_percentage--txt">УДОВЛЕТВОРЕННОСТИ</div>
                            </div>
                            <div class="project_review">
                                <div class="project_review--desc">
                                    «Мы смогли лучше понять наших посетителей, <br/>и при
                                    этом мы определили действенные шаги, которые мы могли бы
                                    предпринять, чтобы улучшить наш бизнес в Интернете.
                                    Постоянно прислушиваясь к нашим клиентам, мы видим
                                    огромное улучшение».
                                </div>
                                <div class="project_review--company">
                                    НАЦИОНАЛЬНЫЙ РЕКЛАМНЫЙ МЕНЕДЖЕР <br/>URALAIRLINES
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects_slider_del"></div>
                <div class="projects_slider_thumbnails">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_1.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_2.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_3.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <img src="/img/temp/project_thumb_4.png" alt=""/>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="certificates_bk">
        <div class="container">
            <div class="title_bk">{{ $page->block6_title }}</div>
            <div class="certificates_slider_wrapper">
                <div class="certificates_slider">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_3.png"
                                xoriginal="img/temp/original/certificate_3.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_1.png"
                                xoriginal="img/temp/original/certificate_1.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_2.png"
                                xoriginal="img/temp/original/certificate_2.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end">
                            <img
                                src="/img/temp/certificate_3.png"
                                xoriginal="img/temp/original/certificate_3.png"
                                class="xzoomImage"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="certificates_slider_thumbnails">
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_inside d_flex a_items_end j_content_center">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="certificates_desc">
                    <div class="certificates_desc--title">
                        {{ $page->block6_line1 }} <span>{{ $page->block6_line2 }}</span>
                    </div>
                    <div class="certificates_desc--content">
                        {{ $page->block6_content }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('_partials.home.job', ['page' => $page])
    @include('_partials.home.news', ['page' => $page])
@endsection
