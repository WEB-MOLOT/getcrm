<?php
/**
 * @var \Illuminate\Support\Collection $topMenu
 * @var \Illuminate\Support\Collection $burgerMenu
 * @var \Illuminate\Support\Collection|\App\Models\Solution[] $solutionMenu
 * @var \Illuminate\Support\Collection|\App\Models\Service[] $serviceMenu
 */
?>
<header id="header" class="header">
    <div class="header_dropdown">
        <div class="header_dropdown_menu">
            <div class="mobile__login-search">
                <div class="mobile__login">
                    <a href="#" id="mobile-login"
                    >
                        <svg
                            width="27"
                            height="35"
                            viewBox="0 0 27 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M15.2575 20.7729V18.3589C15.2575 17.4071 14.4831 16.6328 13.5313 16.6328C12.5795 16.6328 11.8052 17.4071 11.8052 18.3589V20.5384C11.8052 23.1649 10.8376 25.6865 9.08055 27.6387L6.65801 30.3304C6.45448 30.5566 6.47284 30.9049 6.699 31.1085C6.92509 31.3121 7.2734 31.2937 7.47701 31.0675L9.89954 28.3758C11.8389 26.2209 12.907 23.4375 12.907 20.5384V18.3589C12.907 18.0147 13.1871 17.7346 13.5313 17.7346C13.8756 17.7346 14.1557 18.0147 14.1557 18.3589V20.7729C14.1557 24.005 12.9583 27.1021 10.7841 29.4937L8.42271 32.0912C8.21807 32.3163 8.23467 32.6648 8.4598 32.8695C8.56535 32.9655 8.69794 33.0127 8.83015 33.0127C8.97999 33.0127 9.12925 32.952 9.23796 32.8324L11.5993 30.2348C13.9583 27.64 15.2575 24.2797 15.2575 20.7729Z"
                                fill="white"
                            ></path>
                            <path
                                d="M17.6069 18.3593C17.6069 16.1115 15.7781 14.2827 13.5302 14.2827C11.2824 14.2827 9.45364 16.1115 9.45364 18.3593V20.5388C9.45364 22.5836 8.70031 24.5468 7.3324 26.0667L5.61016 27.9803C5.40662 28.2065 5.42499 28.5548 5.65115 28.7584C5.87731 28.962 6.22555 28.9435 6.42916 28.7174L8.1514 26.8038C9.70168 25.0813 10.5555 22.8563 10.5555 20.5388V18.3593C10.5555 16.719 11.89 15.3845 13.5303 15.3845C15.1707 15.3845 16.5051 16.719 16.5051 18.3593V20.7733C16.5051 24.5913 15.0907 28.2499 12.5223 31.0751L10.5299 33.2669C10.3252 33.4919 10.3418 33.8405 10.567 34.0451C10.6725 34.1411 10.8051 34.1883 10.9373 34.1883C11.0871 34.1883 11.2364 34.1276 11.3451 34.008L13.3376 31.8163C16.0907 28.7878 17.6069 24.866 17.6069 20.7733V18.3593Z"
                                fill="white"
                            ></path>
                            <path
                                d="M19.9578 18.3592C19.9578 14.8153 17.0746 11.9321 13.5307 11.9321C9.98675 11.9321 7.10359 14.8153 7.10359 18.3592V20.5387C7.10359 22.0019 6.56452 23.4066 5.58569 24.4942L4.03497 26.2172C3.83143 26.4434 3.84979 26.7917 4.07595 26.9953C4.30204 27.1989 4.65042 27.1803 4.85396 26.9543L6.40469 25.2313C7.5659 23.9411 8.20538 22.2745 8.20538 20.5387V18.3592C8.20538 15.4228 10.5943 13.0339 13.5307 13.0339C16.4671 13.0339 18.856 15.4228 18.856 18.3592V20.7732C18.856 25.1772 17.2245 29.3974 14.2619 32.6561L13.7105 33.2626C13.5059 33.4878 13.5225 33.8362 13.7476 34.0409C13.8531 34.1368 13.9858 34.1841 14.1179 34.1841C14.2678 34.1841 14.417 34.1234 14.5257 34.0038L15.0771 33.3972C18.2244 29.9352 19.9577 25.4519 19.9577 20.7732V18.3592H19.9578Z"
                                fill="white"
                            ></path>
                            <path
                                d="M4.75293 18.3593C4.75293 18.6636 4.99958 18.9102 5.30382 18.9102C5.60806 18.9102 5.85472 18.6636 5.85472 18.3593C5.85472 16.5043 6.5282 14.7123 7.75118 13.3135C8.96278 11.9277 10.6257 11.0214 12.4335 10.7617C12.7346 10.7184 12.9437 10.4392 12.9004 10.1381C12.8572 9.83691 12.5777 9.62816 12.2768 9.67113C10.2084 9.96832 8.30656 11.0043 6.92169 12.5884C5.52315 14.1879 4.75293 16.2375 4.75293 18.3593Z"
                                fill="white"
                            ></path>
                            <path
                                d="M5.85436 20.5387C5.85436 20.2344 5.6077 19.9878 5.30346 19.9878C4.99922 19.9878 4.75257 20.2344 4.75257 20.5387C4.75257 21.4203 4.42784 22.2665 3.83816 22.9217L2.45879 24.4544C2.25526 24.6805 2.27362 25.0288 2.49978 25.2324C2.60511 25.3272 2.73681 25.3738 2.86814 25.3738C3.01887 25.3738 3.16908 25.3123 3.27779 25.1915L4.65715 23.6588C5.42914 22.8009 5.85436 21.6929 5.85436 20.5387Z"
                                fill="white"
                            ></path>
                            <path
                                d="M21.2272 25.4564C20.9327 25.3798 20.6318 25.5557 20.5547 25.8499C20.3513 26.627 20.0984 27.3995 19.8026 28.1459C19.6905 28.4288 19.8289 28.7489 20.1118 28.861C20.1784 28.8873 20.247 28.8998 20.3146 28.8998C20.5339 28.8998 20.7412 28.768 20.8269 28.5517C21.139 27.7639 21.406 26.9488 21.6207 26.1288C21.6976 25.8346 21.5214 25.5335 21.2272 25.4564Z"
                                fill="white"
                            ></path>
                            <path
                                d="M19.3929 11.8317C19.1665 11.6282 18.8182 11.6468 18.6148 11.8731C18.4115 12.0993 18.43 12.4476 18.6562 12.651C20.2766 14.1077 21.206 16.1882 21.206 18.3593V20.7732C21.206 21.6894 21.1428 22.6126 21.0181 23.5173C20.9766 23.8188 21.1873 24.0967 21.4887 24.1382C21.5142 24.1417 21.5395 24.1434 21.5646 24.1434C21.8354 24.1434 22.0716 23.9435 22.1096 23.6676C22.2411 22.7132 22.3077 21.7394 22.3077 20.7731V18.3593C22.3078 15.8762 21.2453 13.497 19.3929 11.8317Z"
                                fill="white"
                            ></path>
                            <path
                                d="M16.8172 11.4237C16.8937 11.4601 16.9743 11.4773 17.0537 11.4773C17.2596 11.4773 17.4571 11.3613 17.5515 11.1631C17.6823 10.8885 17.5656 10.5597 17.2909 10.4289C16.4972 10.051 15.6536 9.79607 14.7836 9.67113C14.482 9.62816 14.2032 9.83699 14.16 10.1381C14.1167 10.4391 14.3257 10.7184 14.6269 10.7617C15.387 10.8709 16.1239 11.0936 16.8172 11.4237Z"
                                fill="white"
                            ></path>
                            <path
                                d="M13.5309 7.23096C13.3248 7.23096 13.1164 7.23669 12.9112 7.248C12.6074 7.26475 12.3747 7.52462 12.3915 7.82835C12.4083 8.13215 12.6679 8.36609 12.9719 8.34802C13.1569 8.33781 13.345 8.33267 13.5309 8.33267C19.0593 8.33267 23.5571 12.8304 23.5571 18.3589V20.7729C23.5571 21.0772 23.8038 21.3238 24.108 21.3238C24.4123 21.3238 24.6589 21.0772 24.6589 20.7729V18.359C24.659 12.223 19.6669 7.23096 13.5309 7.23096Z"
                                fill="white"
                            ></path>
                            <path
                                d="M7.50747 10.2199C7.61596 10.2199 7.72563 10.1879 7.82148 10.1212C8.73802 9.4839 9.74462 9.00807 10.8134 8.7067C11.1063 8.62413 11.2768 8.31975 11.1942 8.02697C11.1116 7.73418 10.8072 7.56392 10.5145 7.64619C9.32748 7.98084 8.20983 8.50918 7.19251 9.21653C6.9427 9.39024 6.881 9.73356 7.05471 9.9833C7.16173 10.1374 7.33317 10.2199 7.50747 10.2199Z"
                                fill="white"
                            ></path>
                            <path
                                d="M3.50399 20.5385V18.359C3.50399 15.7962 4.47452 13.3556 6.23678 11.4864C6.44546 11.265 6.43525 10.9164 6.21387 10.7077C5.99248 10.4989 5.6438 10.5093 5.43512 10.7306C3.47931 12.805 2.4022 15.5142 2.4022 18.359V20.5385C2.4022 20.8384 2.29173 21.1263 2.09121 21.349L1.41192 22.1038C1.20838 22.3299 1.22675 22.6782 1.45291 22.8818C1.55816 22.9766 1.68994 23.0232 1.82127 23.0232C1.97199 23.0232 2.12213 22.9618 2.23091 22.8409L2.9102 22.0862C3.29311 21.6606 3.50399 21.111 3.50399 20.5385Z"
                                fill="white"
                            ></path>
                            <path
                                d="M26.3096 14.0696C25.7054 12.274 24.7452 10.6518 23.4556 9.24803C23.2497 9.024 22.9012 9.00916 22.6772 9.21505C22.4532 9.42094 22.4384 9.7694 22.6442 9.9935C23.8288 11.2829 24.7107 12.7725 25.2654 14.4209C25.3429 14.651 25.5575 14.7963 25.7875 14.7963C25.8457 14.7963 25.905 14.7869 25.9632 14.7673C26.2515 14.6703 26.4067 14.3579 26.3096 14.0696Z"
                                fill="white"
                            ></path>
                            <path
                                d="M17.8837 5.60209C17.596 5.50359 17.2826 5.65703 17.1841 5.94497C17.0856 6.23283 17.2391 6.54603 17.527 6.64446C18.7418 7.06012 19.8823 7.66229 20.9168 8.43442C21.0158 8.50824 21.1313 8.54379 21.2459 8.54379C21.4138 8.54379 21.5797 8.46733 21.6879 8.32233C21.8699 8.07854 21.8196 7.73332 21.5758 7.55137C20.4493 6.71078 19.2071 6.05485 17.8837 5.60209Z"
                                fill="white"
                            ></path>
                            <path
                                d="M4.971 9.42815C7.28835 7.20629 10.3282 5.98265 13.5307 5.98265C14.1254 5.98265 14.7233 6.02547 15.308 6.10979C15.6093 6.15372 15.8884 5.94438 15.9319 5.64322C15.9754 5.34207 15.7666 5.0628 15.4654 5.01932C14.8288 4.9275 14.1778 4.88086 13.5307 4.88086C10.0427 4.88086 6.73195 6.21336 4.20849 8.63288C1.69289 11.0449 0.221715 14.2817 0.0659957 17.7471C0.0523335 18.0511 0.287675 18.3086 0.591547 18.3222C0.599994 18.3226 0.608368 18.3228 0.616742 18.3228C0.909596 18.3228 1.15338 18.0922 1.16668 17.7967C1.30954 14.6153 2.66063 11.6433 4.971 9.42815Z"
                                fill="white"
                            ></path>
                            <path
                                d="M13.5308 2.53027C12.2988 2.53027 11.0712 2.67306 9.88208 2.95468C9.58599 3.02476 9.40287 3.32165 9.47295 3.61766C9.54309 3.91368 9.83999 4.09687 10.136 4.02672C11.2421 3.76494 12.3842 3.63206 13.5308 3.63206C17.5704 3.63206 21.3411 5.24148 24.1483 8.16371C24.2565 8.27631 24.4009 8.33302 24.5457 8.33302C24.683 8.33302 24.8205 8.28204 24.9273 8.17943C25.1467 7.96862 25.1537 7.61987 24.9429 7.40054C23.4803 5.87794 21.7621 4.68015 19.8364 3.84066C17.8417 2.97113 15.7202 2.53027 13.5308 2.53027Z"
                                fill="white"
                            ></path>
                            <path
                                d="M1.15659 9.39113C1.25737 9.47002 1.37702 9.50829 1.49587 9.50829C1.65945 9.50829 1.82134 9.43579 1.92997 9.29704C3.50002 7.29164 5.56697 5.71865 7.90731 4.74798C8.18834 4.63141 8.32173 4.3091 8.20517 4.02807C8.0886 3.74704 7.76614 3.61351 7.48526 3.73022C4.97017 4.77332 2.74919 6.46339 1.0625 8.61767C0.874899 8.85735 0.917061 9.2036 1.15659 9.39113Z"
                                fill="white"
                            ></path>
                            <path
                                d="M5.89221 3.02413C5.97257 3.02413 6.05417 3.00651 6.1313 2.96919C8.45078 1.84926 10.9403 1.28147 13.5307 1.28147C14.8807 1.28147 16.2251 1.44028 17.5266 1.75348C17.8223 1.82443 18.1199 1.64257 18.1911 1.34677C18.2623 1.05098 18.0802 0.753425 17.7843 0.682249C16.3986 0.348775 14.9674 0.179688 13.5307 0.179688C10.773 0.179688 8.12237 0.784348 5.65231 1.977C5.37834 2.10928 5.26346 2.43864 5.39574 2.71262C5.49072 2.9094 5.68742 3.02413 5.89221 3.02413Z"
                                fill="white"
                            ></path>
                            <path
                                d="M19.8287 2.48469C20.3966 2.71085 20.9588 2.97087 21.4995 3.25741C21.5816 3.30104 21.6699 3.32168 21.7569 3.32168C21.9543 3.32168 22.1452 3.21524 22.2441 3.0286C22.3865 2.75977 22.2841 2.42637 22.0153 2.28387C21.4397 1.97882 20.8411 1.70198 20.2363 1.46113C19.9536 1.34852 19.6333 1.48647 19.5207 1.76904C19.4081 2.05168 19.5461 2.37216 19.8287 2.48469Z"
                                fill="white"
                            ></path>
                        </svg>
                    </a>
                    <div class="content">
                        <form action="{{ route('login') }}" method="POST" class="mobile_ligin_form">
                            {{ csrf_field() }}
                            <h3 class="mobile_ligin_form__title">Личный кабинет</h3>
                            <input
                                type="text"
                                name="email"
                                placeholder="Логин"
                                autocomplete="username"
                                class="mobile_ligin_form__input"
                                required=""
                            />
                            <input
                                type="password"
                                name="password"
                                placeholder="Пароль"
                                class="mobile_ligin_form__input"
                                autocomplete="current-password"
                                required=""
                            />
                            <a href="{{ route('password.request') }}" class="mobile_ligin_form__fogot"
                            >Забыли пароль?</a
                            >
                            <button type="submit">Войти</button>
                        </form>
                    </div>
                </div>
                <div class="mobile__search" style="display: none;">
                    <a href="#" id="mobile-search"
                    >
                        <svg
                            width="39"
                            height="39"
                            viewBox="0 0 39 39"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M24.8001 21.7297C27.6342 17.4522 27.1669 11.6322 23.3981 7.8634C19.0958 3.56114 12.1205 3.56114 7.81824 7.8634C3.51599 12.1657 3.51599 19.141 7.81824 23.4432C11.5869 27.2119 17.4067 27.6793 21.6841 24.8455L27.344 30.5054C28.2045 31.3659 29.5995 31.3659 30.4599 30.5054C31.3203 29.645 31.3203 28.25 30.4599 27.3896L24.8001 21.7297ZM21.2735 9.98779C24.4024 13.1167 24.4024 18.1898 21.2735 21.3188C18.1445 24.4477 13.0715 24.4477 9.9425 21.3188C6.81354 18.1898 6.81354 13.1167 9.9425 9.98779C13.0715 6.85883 18.1445 6.85883 21.2735 9.98779Z"
                                fill="white"
                            ></path>
                        </svg>
                    </a>
                    <div class="content">
                        <div class="search__wrapper" style="display:none;">
                            <h3 class="mobile_ligin_form__title">Поиск по сайту</h3>
                            <form action="#" class="search_form">
                                <input
                                    type="search"
                                    name="search"
                                    placeholder="Ключевое слово, название"
                                    class="mobile_ligin_form__input mobile_search__input"
                                />
                                <button type="search" class="search_form__btn"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if($burgerMenu->isNotEmpty())
                <ul>
                    @foreach($burgerMenu as $item)
                        <li><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="header_inside d_flex a_items_center j_content_between">
        <div class="header_left d_flex">
            <div class="hl_logo">
                <a href="{{ route('site.index') }}" class="logo">
                    <img src="/img/logo.png" alt=""/>
                </a>
            </div>
            <div class="hl_menu_wrapper">
                <div class="hl_menu_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="header_center">
            <div class="hc_menu">
                <ul>
                    <li class="solutions">
                        <a href="#" class="with_dropdown">Решения</a>
                        <div class="hc_dropdown">
                            <div class="hc_dropdown_inside">
                                <div class="hc_dropdown_close">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.22168"
                                            y="1.63599"
                                            width="2"
                                            height="20"
                                            transform="rotate(-45 0.22168 1.63599)"
                                            fill="white"
                                        ></rect>
                                        <rect
                                            x="14.3643"
                                            y="0.221802"
                                            width="2"
                                            height="20"
                                            transform="rotate(45 14.3643 0.221802)"
                                            fill="white"
                                        ></rect>
                                    </svg>
                                </div>
                                <div class="hc_dropdown_bk">
                                    <div class="row row_hd_dropdown d_flex">
                                        <div class="col col-3">
                                            <div class="item">
                                                <div class="item_menu">
                                                    <ul>
                                                        @foreach($solutionMenu as $item)
                                                            <li class="{{ $loop->first ? ' active' : '' }} first_level"
                                                                data-item="{{ $item->id }}">
                                                                <a href="{{ route('site.solutions.show', $item) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                                <div
                                                                    class="item_menu_variant item_menu_variant__wide {{ $loop->first ? ' active' : '' }}"
                                                                    data-item="{{ $item->id }}"
                                                                >
                                                                    <div
                                                                        class="row row_hd_dropdown_inside d_flex"
                                                                    >
                                                                        <div class="col col-2">
                                                                            <div class="item">
                                                                                <div class="item_variables">
                                                                                    <div class="item_variable">
                                                                                        <ul>
                                                                                            @foreach($item->solution->platforms as $platform)
                                                                                                <li
                                                                                                    class="second_level"
                                                                                                    data-item="{{ $platform->id }}"
                                                                                                >
                                                                                                    <a href="{{ route('site.solutions.show', $item) }}#{{ $platform->id }}">
                                                                                                        {{ $platform->name }}
                                                                                                    </a>
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="services">
                        <a href="#" class="with_dropdown">Услуги</a>
                        <div class="hc_dropdown">
                            <div class="hc_dropdown_inside">
                                <div class="hc_dropdown_close">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.22168"
                                            y="1.63599"
                                            width="2"
                                            height="20"
                                            transform="rotate(-45 0.22168 1.63599)"
                                            fill="white"
                                        ></rect>
                                        <rect
                                            x="14.3643"
                                            y="0.221802"
                                            width="2"
                                            height="20"
                                            transform="rotate(45 14.3643 0.221802)"
                                            fill="white"
                                        ></rect>
                                    </svg>
                                </div>
                                <div class="hc_dropdown_bk">
                                    <div class="row row_hd_dropdown d_flex">
                                        <div class="col col-3">
                                            <div class="item">
                                                <div class="item_menu">
                                                    <ul>
                                                        @foreach($serviceMenu as $item)
                                                            <li
                                                                class="{{ $loop->first ? ' active' : '' }} first_level"
                                                                data-item="{{ $item->id }}"
                                                            >
                                                                <a href="{{ route('site.services.show', $item) }}"
                                                                >{{ $item->title }}
                                                                </a>
                                                                <div
                                                                    class="item_menu_variant {{ $loop->first ? ' active' : '' }}"
                                                                    data-item="{{ $item->id }}"
                                                                >
                                                                    <div
                                                                        class="row row_hd_dropdown_inside d_flex"
                                                                    >
                                                                        <div class="col col-1">
                                                                            <div class="item">
                                                                                <div class="item_variables_info">
                                                                                    <div
                                                                                        class="item_variable_info active"
                                                                                        data-item="1"
                                                                                    >
                                                                                        <div
                                                                                            class="item_variable_info--content"
                                                                                        >
                                                                                            <div
                                                                                                class="item_variable_info--image"
                                                                                            >
                                                                                                <img width="334"
                                                                                                     src="{{ $item->getImageUrl() }}"
                                                                                                     alt=""
                                                                                                />
                                                                                            </div>
                                                                                            <div
                                                                                                class="item_variable_info--desc"
                                                                                            >
                                                                                                <p>
                                                                                                    {{ $item->description }}
                                                                                                </p>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if($topMenu->isNotEmpty())
                        @foreach($topMenu as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="header_right d_flex a_items_center">
            <div class="menutogle  d_flex a_items_center">
                <div class="hr_lk">
                    <a href="{{ route('cabinet.index') }}" class="hr_lk--link @guest js-cabinet @endif"
                    ><span>Личный кабинет</span></a
                    >
                </div>
                <div class="hr_search" style="display: none;">
                    <div class="hr_search_btn">
                        <svg
                            width="18"
                            height="17"
                            viewBox="0 0 18 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <defs>
                                <linearGradient id="MyGradient">
                                    <stop offset="0%" stop-color="#FF3861"></stop>
                                    <stop offset="100%" stop-color="#E09309"></stop>
                                </linearGradient>
                            </defs>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M11.339 9.67327C12.5665 7.82054 12.3641 5.29971 10.7317 3.66734C8.86823 1.80387 5.84695 1.80387 3.98348 3.66734C2.12001 5.5308 2.12001 8.55208 3.98348 10.4155C5.61585 12.0479 8.13666 12.2504 9.98939 11.0229L12.441 13.4744C12.8136 13.8471 13.4179 13.8471 13.7906 13.4744C14.1632 13.1018 14.1632 12.4975 13.7906 12.1248L11.339 9.67327ZM9.81157 4.58749C11.1668 5.94276 11.1668 8.14009 9.81157 9.49536C8.45631 10.8506 6.25898 10.8506 4.90371 9.49535C3.54844 8.14009 3.54844 5.94276 4.90371 4.58749C6.25898 3.23223 8.45631 3.23223 9.81157 4.58749Z"
                                fill="white"
                            ></path>
                        </svg>
                    </div>
                    <div class="hr_search_form">
                        <form>
                            <div class="hr_search_form--field">
                                <input
                                    type="text"
                                    class="hr_search_form--input"
                                    placeholder="Ключевое слово, название"
                                />
                                <input type="submit" class="hr_search_form--submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="hr_search_form__delete">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="hr_number">
                <a href="tel:{{ preg_replace('/[^0-9\+]/', '', config('site.phone')) }}"
                   class="hr_number_link">{!! config('site.phone') !!}</a>
            </div>
        </div>
    </div>
</header>
