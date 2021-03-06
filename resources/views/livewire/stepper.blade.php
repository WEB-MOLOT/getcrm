<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Dictionaries\Filter[] $filter
 * @var \Illuminate\Support\Collection $pickedValues
 */
?>
<div class="actual_sliders_wrapper">
    <div class="actual_sliders ">
        @foreach($filters as $filter)
            <div class="actual_slider actual_slider_{{ $filter->id }}" wire:key="filter{{ $filter->id }}"
                 data-filter="{{ $filter->id }}">
                <div class="actual_slider_title">{{ $filter->name }}:</div>
                <div class="one_slider__wrapper">
                    <div class="actual_slider_inside">
                        <div
                            class="actual_slider--range"
                            data-labels=",{{ $filter->values->sortBy('order')->implode('name', ',') }},"
                        ></div>
                    </div>
                </div>
                <button class="slider__btn">
                    <div class="btn__text">
                        <div class="btntext__content">Выбрать</div>
                        <div class="bals">
                            <span class="btn__ball"></span>
                            <span class="btn__ball"></span>
                            <span class="btn__ball"></span>
                        </div>
                    </div>
                </button>
            </div>
        @endforeach
    </div>
    <div class="actual_info_cols d_flex f_wrap">
        <div class="actual_info_col">
            <div class="actual_info_item">
                <div
                    class="actual_info_head d_flex a_items_center j_content_center"
                >
                    Подобранные решения:
                </div>

                <div class="actual_info_body actual_info_body__left">
                    <div class="aib_inside_zero aib_inside_zero_left selected js-stepper-solutions-empty">
                        <div class="aib_inside_zero__content">
                            Выберите параметры фильтра, исходя из потребностей
                            вашего бизнеса, и система подберет для вас подходящее
                            решение.
                        </div>
                    </div>
                    <div class="aib_inside">
                        <div
                            class="aib_inside_content_check d_flex j_content_center"
                        >
                            <div class="aib_inside_check_list js-stepper-solutions">
                                <ul class="js_solutions_list js-stepper-solutions-list">
                                    <li class="checked checkbox__wrapper" data-search="1">
                                        <label>
                                            <input type="checkbox" value=""/>
                                            <span>Работа с сервисными обращениями</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actual_info_col">
            <div class="actual_info_item">
                <div
                    class="actual_info_head d_flex a_items_center j_content_center"
                >
                    Функционал:
                </div>
                <div class="actual_info_body">
                    <div class="aib_inside_zero selected aib_inside_zero_right js-functionalities-empty">
                        <div class="aib_inside_zero__content">
                            Наведите на название решения, чтобы увидеть
                            соответствующий ему функционал.
                        </div>
                    </div>
                    <div class="aib_inside">
                        @foreach($solutions as $solution)
                            <div
                                class="aib_inside_content_functional d_flex j_content_between f_wrap js-functionalities-block js-functionalities{{ $solution->id }}"
                                data-result="{{ $solution->id }}">
                                <ol>
                                    @foreach($solution->functionalities as $item)
                                        <li>{{ $item->name }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="actual_info_btn">
        <a
            href="#"
            class="btn btn_orange btn_with_icon "
            id="manager-modal"
        >
                <span class="d_flex a_items_center j_content_center">
                  <em class="btn_icon"
                  ><img src="/img/icon_btn_phone.png" alt=""
                      /></em>
                  <em class="btn_txt">Связаться с менеджером</em>
                </span>
        </a>
    </div>

</div>
