<?php
/**
 * @var Collection|NewsItem[] $newsItems
 */

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Collection;

?>
<div class="news_bk">
    <div class="container">
        <div class="title_bk">Новости</div>
        <div class="news_slider_wrapper">
            <div class="news_slider">
                @foreach($newsItems as $item)
                    <div class="item">
                        <a href="{{ route('site.news.item', $item) }}" class="item_inside d_flex a_items_center">
                            <span class="item_info__date">{{ $item->created_at->format('d.m.Y') }}</span>
                            <div class="item_image">
                                <img src="{{ $item->getImageUrl() }}" width="150" height="169" alt=""/>
                            </div>
                            <div class="item_info">
                                <div class="item_title">
                                    {{ $item->title }}
                                </div>
                                <div class="item_desc">
                                    {{ $item->description }}
                                </div>
                                <div class="item_more">
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
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="news_slider_thumbnails">
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
            <div class="news_more">
                <div class="news_more_link--wrapper">
                    <a
                        href="{{ route('site.news.index') }}"
                        class="news_more_link d_flex a_items_center j_content_center"
                    >
                  <span class="news_more_link--icon">
                    <svg
                        width="41"
                        height="34"
                        viewBox="0 0 41 34"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          d="M10 13H31V17H33V13C33 11.8954 32.1046 11 31 11H10C8.89543 11 8 11.8954 8 13V17H10V13Z"
                          fill="black"
                      />
                      <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M15.8939 24C13.3711 24 11.2435 22.1207 10.9321 19.6172L10.8553 19L12.84 18.7531L12.9168 19.3703C13.1036 20.8724 14.3802 22 15.8939 22H25.1061C26.6198 22 27.8964 20.8724 28.0832 19.3703L28.16 18.7531C28.2845 17.7517 29.1356 17 30.1447 17H39C40.1046 17 41 17.8954 41 19V32C41 33.1046 40.1046 34 39 34H2C0.895431 34 0 33.1046 0 32V19C0 17.8954 0.89543 17 2 17H10.8553C11.8644 17 12.7155 17.7517 12.84 18.7531L10.8553 19H2L2 32H39V19H30.1447L30.0679 19.6172C29.7565 22.1207 27.6289 24 25.1061 24H15.8939Z"
                          fill="black"
                      />
                      <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M25 29H16V27H25V29ZM16 31C14.8954 31 14 30.1046 14 29V27C14 25.8954 14.8954 25 16 25H25C26.1046 25 27 25.8954 27 27V29C27 30.1046 26.1046 31 25 31H16Z"
                          fill="black"
                      />
                      <path
                          d="M12 11V7H29V11H31V6C31 5.44772 30.5523 5 30 5H11C10.4477 5 10 5.44771 10 6V11H12Z"
                          fill="black"
                      />
                      <path
                          d="M14 5V2H27V5H29V1C29 0.447715 28.5523 0 28 0H13C12.4477 0 12 0.447715 12 1V5H14Z"
                          fill="black"
                      />
                      <path
                          d="M14 2H5.51694C4.06122 2 2.81558 3.04507 2.56259 4.47864L0 19H41L38.4374 4.47864C38.1844 3.04507 36.9388 2 35.4831 2H27V4H35.4831C35.9683 4 36.3835 4.34836 36.4678 4.82621L38.6162 17H2.38384L4.53216 4.82621C4.61649 4.34836 5.0317 4 5.51694 4H14V2Z"
                          fill="black"
                      />
                    </svg>
                  </span>
                        <span class="news_more_link--txt">
                            Все новости
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
