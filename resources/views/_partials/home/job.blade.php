<?php
/**
 * @var \App\Models\Pages\HomePage $page
 */
?>
<div class="vacancies_bk">
    <div class="container">
        <div class="title_bk">{{ $page->block7_title }}</div>
        <div class="vacancies_wrapper_inside">
            <div class="vacancies_inside d_flex a_items_center">
                <div class="vacancies_image">
                    <img src="{{ $page->getBlock7ImageUrl() }}" alt=""/>
                </div>
                <div class="vacancies_info d_flex a_items_center">
                    <div class="vacancies_info_inside">
                        <div class="vacancies_info_title">
                            {{ $page->block7_subtitle }}
                        </div>
                        <div class="vacancies_info_desc">
                            {!! $page->block7_content !!}
                        </div>
                        <div class="vacancies_info_btn">
                            <a href="{{ route('site.job.index') }}" class="btn btn_orange btn_orange_with_border">
                                <span>{{ $page->block7_btn }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vacancies_btn">
                <div class="vacancies_btn--wrapper">
                    <a
                        href="{{ config('site.hh_profile') }}"
                        class="vacancies_btn_link d_flex a_items_center j_content_center"
                    >
                  <span class="vacancies_btn_link--icon">
                    <img src="/img/vacancies_hh_icon.png" alt=""/>
                  </span>
                        <span class="vacancies_btn_link--txt">
                    <span class="vacancies_btn_link--txt_one"
                    >{{ $page->block7_link }}
                    </span>
                  </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
