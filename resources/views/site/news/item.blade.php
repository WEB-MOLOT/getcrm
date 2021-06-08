@extends('layouts.site')

@section('title')
    Новость
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
    <div class="news-page">
        <div class="container">
            <h1>Новости</h1>
            <div class="news-post">
                <div class="post">
                    <a href="#" class="back-link">
                        <svg
                            width="10"
                            height="16"
                            viewBox="0 0 10 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M8.49974 1.53711L1.77637 8.26073L8.49974 14.9841"
                                stroke="#040404"
                                stroke-width="2"
                            />
                        </svg>
                    </a>
                    <div class="date">
                        24.09.2019
                    </div>
                    <h2>На этом месте заголовок данной новости, можно в 2 строки</h2>
                    <div class="text">
                        <div class="image">
                            <img src="/img/news2.jpg"/>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum
                            vestibulum nulla sit eros sed. Quis facilisis id natoque
                            adipiscing urna vitae leo, nulla nulla. Ipsum vulputate
                            malesuada proin metus aliquet. Et pretium neque quam tortor
                            dignissim imperdiet. Amet, suspendisse nec, vitae, sodales ut
                            ipsum. Vitae dolor, risus eget morbi.
                        </p>
                        <p>
                            Lectus amet, proin magna quis. Molestie dolor, potenti quam
                            accumsan justo, eget cursus sit. Aliquam quis dignissim
                            scelerisque euismod viverra metus, elementum sed enim. In
                            fermentum, in aliquet eu odio malesuada vitae. Nulla quam non
                            platea pharetra volutpat justo, id. Diam eget dui egestas erat
                            mattis sodales. Proin orci massa nunc ultrices porttitor.
                            Orci, viverra gravida egestas eget. Vivamus maecenas mattis
                            imperdiet nunc amet aenean.
                        </p>
                        <p>
                            Habitasse suspendisse rhoncus vel velit. Facilisi nisl pretium
                            ornare sed quis iaculis. Quam congue in volutpat egestas ac
                            bibendum. Condimentum nulla velit, et nulla pretium diam
                            faucibus volutpat urna. Sed semper justo malesuada eu molestie
                            mauris. Sagittis, massa est fringilla sodales aliquam ultrices
                            ipsum. Tempus in ut purus nisi cursus ullamcorper mi cras
                            nisl. Arcu vitae donec nunc pellentesque quis. Ut eu rhoncus
                            volutpat posuere ut commodo. Nec aenean lorem ultrices odio.
                            Lorem eu sagittis, in amet in mattis id. Augue quis risus
                            gravida phasellus mattis eu aliquam amet, sed. Ut pulvinar
                            scelerisque feugiat amet scelerisque. Sem pellentesque purus
                            tempus nulla risus, risus, metus feugiat. Eu elementum id ut
                            sed.
                        </p>
                    </div>
                </div>
                <div class="flex no_pad">
                    <div class="other-post prev">
                        <a href="#" class="link"></a>
                        <a href="#">предыдущая <br/>новость</a>
                        <p>На этом месте заголовок данной новости, можно в 2 строки</p>
                    </div>
                    <div class="other-post next">
                        <a href="#" class="link"></a>
                        <a href="#">следующая <br/>новость</a>
                        <p>На этом месте заголовок данной новости, можно в 2 строки</p>
                    </div>
                </div>
                <div class="all-news-link">
                    <a href="#">
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
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M15.8939 24C13.3711 24 11.2435 22.1207 10.9321 19.6172L10.8553 19L12.84 18.7531L12.9168 19.3703C13.1036 20.8724 14.3802 22 15.8939 22H25.1061C26.6198 22 27.8964 20.8724 28.0832 19.3703L28.16 18.7531C28.2845 17.7517 29.1356 17 30.1447 17H39C40.1046 17 41 17.8954 41 19V32C41 33.1046 40.1046 34 39 34H2C0.895431 34 0 33.1046 0 32V19C0 17.8954 0.89543 17 2 17H10.8553C11.8644 17 12.7155 17.7517 12.84 18.7531L10.8553 19H2L2 32H39V19H30.1447L30.0679 19.6172C29.7565 22.1207 27.6289 24 25.1061 24H15.8939Z"
                                fill="black"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M25 29H16V27H25V29ZM16 31C14.8954 31 14 30.1046 14 29V27C14 25.8954 14.8954 25 16 25H25C26.1046 25 27 25.8954 27 27V29C27 30.1046 26.1046 31 25 31H16Z"
                                fill="black"
                            ></path>
                            <path
                                d="M12 11V7H29V11H31V6C31 5.44772 30.5523 5 30 5H11C10.4477 5 10 5.44771 10 6V11H12Z"
                                fill="black"
                            ></path>
                            <path
                                d="M14 5V2H27V5H29V1C29 0.447715 28.5523 0 28 0H13C12.4477 0 12 0.447715 12 1V5H14Z"
                                fill="black"
                            ></path>
                            <path
                                d="M14 2H5.51694C4.06122 2 2.81558 3.04507 2.56259 4.47864L0 19H41L38.4374 4.47864C38.1844 3.04507 36.9388 2 35.4831 2H27V4H35.4831C35.9683 4 36.3835 4.34836 36.4678 4.82621L38.6162 17H2.38384L4.53216 4.82621C4.61649 4.34836 5.0317 4 5.51694 4H14V2Z"
                                fill="black"
                            ></path>
                        </svg>
                        Все новости
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
