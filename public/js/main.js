function init() {
    var lat = jQuery("#map").data("map-center-lat");
    var lng = jQuery("#map").data("map-center-lng");
    var myMap = new ymaps.Map(
        "map",
        {
            center: [lat, lng],
            zoom: 16,
        },
        {
            searchControlProvider: "yandex#search",
        }
    );

    // Создаем геообъект с типом геометрии "Точка".

    jQuery(".map_marker").each(function () {
        var last_id = $(this).data("last-id");
        var placemark = null;
        placemark = new ymaps.Placemark(
            [$(this).data("lat"), $(this).data("long")],
            {},
            {
                // Запретим замену обычного балуна на балун-панель.
                balloonPanelMaxMapArea: 0,
                draggable: "true",
                preset: "islands#blueStretchyIcon",
                // Заставляем балун открываться даже если в нем нет содержимого.
                openEmptyBalloon: true,
            }
        );

        placemark.events.add("balloonopen", function (e) {
            //placemark.properties.set('balloonContent', "Идет загрузка данных...");
            $(".map_marker").hide();
            $(".marker_" + last_id).show();
            //var html = '<div class="contacts">' + $(".marker_" + last_id).html() + "</div>";
            placemark.balloon.close();
            //placemark.properties.set('balloonContentBody', html);
            // Имитация задержки при загрузке данных (для демонстрации примера).
        });
        myMap.geoObjects.add(placemark);
    });
}

jQuery(function ($) {
    if ($("#map").length > 0) {
        ymaps.ready(init);
    }
    $(".solution_li > a").on("click", function (event) {
        event.preventDefault();
        var current = $(this).data("current");
        var platform_id = $(this).data("platform-id");
        var href = $(this).data("href");
        if (current != platform_id) {
            document.location.href = href;
        }
    });
    $(document).mouseup(function (e) {
        var div = $(".reviews-form .window");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            $(".reviews-form").fadeOut();
        }
    });
    if ($(".form_contact").length > 0) {
        $(".form_contact").on("submit", function (e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: $(this).data("url"), // url where to submit the request
                type: "POST", // type of action POST || GET
                dataType: "json", // data type
                data: $(this).serialize(), // post data || get data
                success: function (result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                    if (result.type == "success") {
                        $(form).trigger("reset");
                    }
                    if (result.message) {
                        $(".form_result").text(result.message);
                    }
                },
                error: function (xhr, resp, text) {
                    console.log(xhr, resp, text);
                },
            });
        });
        return false;
    }
});

$(function () {
    var tabContainers = $("div.tabs > div");
    tabContainers.hide().filter(":first").show();
    $("div.tabs ul.tabNavigation a")
        .click(function () {
            tabContainers.hide();
            tabContainers.filter(this.hash).show();
            $("div.tabs ul.tabNavigation a").removeClass("selected");
            $(this).addClass("selected");
            return false;
        })
        .filter(":first")
        .click();
});
$(function () {
    var tabContainers = $("div.tabs2 > div");
    tabContainers.hide().filter(":first").show();
    // $("div.tabs2 ul.tabNavigation a")
    // 	.click(function (event) {
    // 		event.preventDefault();
    // 		tabContainers.hide();
    // 		tabContainers.filter(this.hash).show();
    // 		$("div.tabs2 ul.tabNavigation a").removeClass("selected");
    // 		$(this).addClass("selected");
    // 		// return false;
    // 	})
    // 	.filter(":first")
    // 	.click();
});

//Слушаем изменение размера экрана
window.addEventListener("resize", move);

//Функция
function move() {
    const parent_original = document.querySelector(".header_inside ");
    const parent = document.querySelector(".header_dropdown_menu");
    const item = document.querySelector(".header_center");
    const viewport_width = Math.max(
        document.documentElement.clientWidth,
        window.innerWidth || 0
    );
    if (viewport_width <= 1200) {
        if (!item.classList.contains("done")) {
            parent.insertBefore(item, parent.children[1]);
            item.classList.add("done");
        }
    } else {
        if (item.classList.contains("done")) {
            parent_original.insertBefore(item, parent_original.children[1]);
            item.classList.remove("done");
        }
    }
}

//Вызываем функцию
move();

$(document).ready(function () {
    if ($(".show_youtube_video").length > 0) {
        $(".show_youtube_video").on("click", function () {
            var youtube_url = $(this).data("youtubecode");
            $(".youtube_iframe").attr("src", youtube_url);
            $(".youtube_modal").addClass("opened");
            $(".youtube_modal").addClass("active-modal");
        });
    }
    if ($(".youtube_modal__close").length > 0) {
        $(".youtube_modal__close").on("click", function () {
            $(".youtube_modal").removeClass("opened");
            $(".youtube_modal").removeClass("active-modal");
        });
    }
    if ($(".click_history").length > 0) {
        $(".click_history").on("click", function () {
            var url = $(this).data("url");
            document.location.href = url;
        });
    }
    let pricesPageTopTextElement = $(".prices-page .top-text");

    if (pricesPageTopTextElement.length) {
        let pricesPageTopText;
        let pricesPageTopTextDefault;
        pricesPageTopTextDefault = pricesPageTopTextElement
            .find(".top-text__text")
            .text();
        $(
            ".prices-page .top-block .content .list .tags .tag, .prices-page .top-block .content .list ul li a"
        ).hover(function () {
            pricesPageTopText = $(this).data("text");
            $(".prices-page .top-text__text").text(pricesPageTopText);
        });
        $(".prices-page .list").on("mouseleave", function () {
            $(".prices-page .top-text__text").text(pricesPageTopTextDefault);
        });
    }

    // табы таблиц на странице цен

    let pricesPageTableId;

    $(document).on(
        "click",
        ".prices-page .table .menu a:not(.menu__add)",
        function (event) {
            event.preventDefault();
            if (!$(this).is("active")) {
                pricesPageTableId = $(this).data("table");
                $(".prices-page .table table")
                    .removeClass("active")
                    .filter("[data-table=" + pricesPageTableId + "]")
                    .addClass("active");
                $(".prices-page .table .menu a").removeClass("active");
                $(this).addClass("active");
                $("html,body").animate({
                    scrollTop: $(".prices-page .table").offset().top - 150,
                });
            }
        }
    );
    $(document).on(
        "click",
        ".prices-page .table .menu a.menu__add",
        function (event) {
            event.preventDefault();
            pricesPageTableId = $(".prices-page .table table").length;
            let pricesPageEmptyTable = $(
                '<table class="active" data-table="' +
                pricesPageTableId +
                '">' +
                '<thead id="thead2">' +
                "<tr>" +
                " <td>Наименование</td>" +
                "<td>Стоимость, $</td>" +
                "<td>Метрика</td>" +
                "<td>Срок метрики (мес)</td>" +
                "<td>Цена (US$) в год</td>" +
                "<td>Кол-во</td>" +
                "<td>Срок (год)</td>" +
                "<td>Прайслист, $</td>" +
                " <td>Скидка</td>" +
                "<td>Discounted Price, $</td>" +
                "   <td>Тех.поддержка</td>" +
                "   <td></td>" +
                "  </tr>" +
                " </thead>"
            );
            let pricesPageNewBtn = $(
                '<a class="active" data-table="' +
                pricesPageTableId +
                '">Базовый вариант <span></span></a>'
            );
            $(".prices-page .table table").removeClass("active");
            pricesPageEmptyTable.appendTo(".prices-page .table .table__tabs");
            $(".prices-page .table .menu a").removeClass("active");
            pricesPageNewBtn.insertBefore(
                ".prices-page .table .table__wrap .menu__add"
            );
        }
    );

    $(".cabinet-page .docs table tbody tr td .link").on("click", function () {
        $(this).toggleClass("active");
        $(this)
            .parent()
            .parent()
            .find("td:nth-child(2), td:nth-child(3), td:nth-child(4)")
            .toggleClass("opened");
    });

    $(".cabinet-page .requests .item .form .chat form .link").on(
        "click",
        function () {
            $(".cabinet-page .requests .item .form .chat form ul").toggleClass(
                "opened"
            );
        }
    );

    $(".cabinet-page .requests .item > .flex").on("click", function () {
        $(".cabinet-page .requests .item > .flex")
            .not(this)
            .next(".form")
            .slideUp()
            .delay(400)
            .prev()
            .removeClass("active");
        $(this).next(".form").slideToggle();
        let that = $(this);
        // setTimeout(function() {
        that.toggleClass("active");
        // }, 400);
    });

    $(".reviews-form .window .close, .reviews-form .window button.small").on(
        "click",
        function () {
            $(".reviews-form").fadeOut();
        }
    );

    $(".mobile-app-page .reviews .content .bottom-link").on("click", function () {
        $(".reviews-form").fadeIn();
    });

    $(".reviews-form .window button").on("click", function () {
        $(".reviews-form .window .form").hide();
        $(".reviews-form .window .thanks").show();
    });

    $(".reviews-form .window .r-item p").on("click", function () {
        $(this).parent().next(".r-items").slideToggle();
    });

    $(".mobile-app-page .reviews .content .list .text a").on(
        "click",
        function () {
            $(this).hide();
            $(this).parent().find("span").addClass("opened");
        }
    );

    $(".mobile-app-page .reviews .content .r-item").on("click", function () {
        $(this).next(".r-items").slideToggle();
    });

    $(".creating-project-open").on("click", function () {
        $(".creating-project").toggleClass("active");
        $(this).toggleClass("active");
    });
    $(".creating-project-second-open").on("click", function () {
        $(".creating-project-second").toggleClass("active");
        $(this).toggleClass("active");
    });

    $(".hr_search_btn").on("click", function () {
        $(".hr_search_form ").addClass("active");
        $(".hr_search").addClass("active");
    });

    $(".hr_search_form__delete ").on("click", function () {
        $(".hr_search_form ").removeClass("active");
        $(".hr_search").removeClass("active");
    });

    $(".hl_menu_btn").on("click", function () {
        $(".header").toggleClass("header_dropdown_active");
        $(".header_left").toggleClass("fixed");
        // $('.header_dropdown').slideToggle();
        $(".header_dropdown").toggle("slide");

        $(".header_center")
            .find("first_level.active")
            .each(function () {
                $(this).removeClass("active");
            });
    });

    const CreatingProjectScroll = document.querySelector(
        ".creating-project__list"
    );
    if (CreatingProjectScroll != null) {
        $(".creating-project__list").overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }
    const CreatingProjectSecondScroll = document.querySelector(
        ".creating-project-second__list"
    );
    if (CreatingProjectSecondScroll != null) {
        $(".creating-project-second__list").overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    $(".hi_menu_btn, .mobile_menu_close, #overlay_mobile").on(
        "click",
        function () {
            $("#overlay_mobile").toggleClass("active");
            $(".mobile_menu_wrapper").slideToggle();
        }
    );

    $(document).on("click", "#agree", function () {
        var isChecked = $(this).is(":checked");
        $(
            ".contacts-page .form-block form .button, .form-page form .button"
        ).toggleClass("disabled");
    });

    $(".cabinet-page .profile .block .field .shaw-pass").hover(
        function () {
            $(this).prev("input").attr("type", "text");
        },
        function () {
            $(this).prev("input").attr("type", "password");
        }
    );

    $(".field.phones input[type='text'").mask("+7(999) 999-9999");

    $(".cabinet-page .profile .block .field.mail2 .add").click(function () {
        $(".cabinet-page .profile .block .field.mail2 .field__input-wrap:first")
            .clone()
            .appendTo(".cabinet-page .profile .block .field.mail2")
            .find("input")
            .val("");
    });

    $(".cabinet-page .profile .block .field.mail .add").click(function () {
        $(".cabinet-page .profile .block .field.mail .field__input-wrap:first")
            .clone()
            .appendTo(".cabinet-page .profile .block .field.mail")
            .find("input")
            .val("");
    });

    $(".cabinet-page .profile .block .field.phones .add").click(function () {
        $(".cabinet-page .profile .block .field.phones .field__input-wrap:first")
            .clone()
            .appendTo(".cabinet-page .profile .block .field.phones")
            .find("input")
            .val("")
            .mask("+7(999) 999-9999");
    });

    $(document).on(
        "click",
        ".cabinet-page .profile .field__input-remove",
        function () {
            $(this).parent().remove();
        }
    );

    $(".cabinet-page .menu-button").on("click", function () {
        $(this).toggleClass("active");
        $(".cabinet-page .mobile-menu").toggleClass("opened");
    });

    $(".prices-page .top-block .content form span").on("click", function () {
        $(this).parent().toggleClass("active");
        $(this).parent().next(".list").slideToggle();
    });

    $(".mobile-app-page .mob-tabs .item .name").on("click", function () {
        $(this).toggleClass("active");
        $(this).next(".text").slideToggle();
    });

    $(".mobile-app-page .faq .content .list .item .name").on(
        "click",
        function () {
            $(this).next(".text").slideToggle();
        }
    );

    $(".mobile-app-page .faq .block-name").on("click", function () {
        $(this).toggleClass("active");
        $(".mobile-app-page .faq .content").slideToggle();
    });

    $(".mobile-app-page .reviews .block-name").on("click", function () {
        $(this).toggleClass("active");
        $(".mobile-app-page .reviews .content").slideToggle();
    });

    $(".effects .list").slick({
        // adaptiveHeight: true,
    });

    $(".mobile-app-page .reviews .content .list").slick({
        dots: true,
    });

    $(".customer-page .block .slider").slick({
        arrows: false,
        speed: 300,
        slidesToShow: 8,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 7,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 6,
                },
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });

    // Слайдер с видео
    $(".mb_now_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: "linear",
        speed: 500,
        fade: true,
        arrows: false,
        dots: false,
        asNavFor: $(".mb_now_slider_thumbnails"),
    });

    $(".mb_now_slider_thumbnails").slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        cssEase: "linear",
        speed: 500,
        arrows: true,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".mb_now_slider"),
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerMode: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    centerMode: true,
                    centerPadding: "20px",
                },
            },
            {
                breakpoint: 577,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerMode: true,
                    centerPadding: "0px",
                },
            },
        ],
    });

    // Эксперты верят в нас!
    $(".certificates_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    asNavFor: $(".certificates_slider_thumbnails"),
                },
            },
        ],
    });

    $(".certificates_slider_thumbnails").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".certificates_slider"),
        infinite: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: true,
                    centerPadding: "0px",
                },
            },
        ],
    });

    // Все наши проекты референциальны!
    $(".projects_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".projects_slider_thumbnails"),
        infinite: true,
        centerMode: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                },
            },
        ],
    });

    $(".projects_slider_thumbnails").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".projects_slider"),
        infinite: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                },
            },
        ],
    });

    // Новости
    $(".news_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        slidesPerRow: 1,
        rows: 2,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".news_slider_thumbnails"),
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    slidesPerRow: 1,
                    rows: 1,
                    arrows: false,
                },
            },
        ],
    });

    $(".news_slider_thumbnails").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow:
            '<span class="arr_left"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8923 1.11963L2.20312 11.8088L12.8923 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        nextArrow:
            '<span class="arr_right"><em class="d_flex a_items_center j_content_center"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.970947 1.11963L11.6602 11.8088L0.970947 22.498" stroke="black" stroke-width="2"/></svg></em></span>',
        asNavFor: $(".news_slider"),
        infinite: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: "0px",
    });

    // Фукция остановки видео при выборе следующего
    $(".mb_now_slider").on(
        "beforeChange",
        function (event, slick, currentSlide, nextSlide) {
            var current = $(slick.$slides[currentSlide]);
            current.html(current.html());
        }
    );

    const xzoomCheck = document.querySelector(".xzoomImage");
    if (xzoomCheck != null) {
        $(".xzoomImage").each(function () {
            $(this).xzoom({
                position: "right",
                lensShape: "circle",
            });
        });
    }

    const dropdownMegaMenu = document.querySelector(".hc_dropdown");
    if (dropdownMegaMenu != null) {
        $(".with_dropdown").on("click", function (e) {
            const viewport_width = Math.max(
                document.documentElement.clientWidth,
                window.innerWidth || 0
            );
            e.preventDefault();
            if ($(this).parent().hasClass("active")) {
                $(this).parent().removeClass("active");
                $(this)
                    .parent()
                    .find(".hc_dropdown.active")
                    // .slideToggle()
                    .fadeToggle()
                    .removeClass("active");
                $(this).removeClass("active");

                if (viewport_width <= 1200) {
                    $(this)
                        .parent()
                        .find("li.active")
                        .find(".item_menu_variant.active")
                        .removeClass("active");
                    $(".first_level.active").find(".item_menu_variant").slideToggle(600);
                    $(".first_level.active").removeClass("active");
                }

                $("#overlay_megamenu").removeClass("active");
                return;
            }

            if (!$(this).parent().hasClass("active")) {
                $(".with_dropdown")
                    .parent()
                    .find(".hc_dropdown.active")
                    // .slideToggle()
                    .toggle()
                    .removeClass("active");
                $(".with_dropdown").parent().removeClass("active");
                // $(".with_dropdown").removeClass("active");
                if (!$(this).parent().hasClass("active")) {
                    $(this)
                        .parent()
                        .find(".hc_dropdown")
                        // .slideToggle()
                        .fadeToggle()
                        .addClass("active");
                    $(this).parent().addClass("active");
                    $(this).addClass("active");
                }
            }

            if ($(".with_dropdown").hasClass("active") && viewport_width >= 1200) {
                $("#overlay_megamenu").addClass("active");
            }
            return;
        });

        $("#overlay_megamenu").on("click", function () {
            $(".with_dropdown.active").each(function () {
                $(this).removeClass("active");
                $(this).parent().removeClass("active");
                $(this)
                    .parent()
                    .find(".hc_dropdown.active")
                    .slideToggle()
                    .removeClass("active");
            });
            $("#overlay_megamenu").removeClass("active");
        });

        $(".hc_dropdown_close").on("click", function () {
            $(this)
                .parents("li.active")
                .find(".hc_dropdown.active")
                .slideToggle()
                .removeClass("active");
            $(this).parents("li.active").removeClass("active");
            $("#overlay_megamenu").removeClass("active");
        });

        //ПЕРЕПИСАНЫЕ ФУКНКЦИИ
        const viewport_width = Math.max(
            document.documentElement.clientWidth,
            window.innerWidth || 0
        );
        if (viewport_width <= 1200) {
            $(".first_level.active").removeClass("active");
            $(".hc_dropdown.active").removeClass("active");
            $(".second_level.active").removeClass("active");
            $(".item_menu_variant.active").removeClass("active");

            $(".services .first_level>a").on("click", function (e) {
                let iNeedBtn = document.querySelector(".services .first_level.active");
                if (iNeedBtn && !$(this).parent("li").hasClass("active")) {
                    console.log(iNeedBtn);
                    iNeedBtn.classList.remove("active");
                    $(iNeedBtn).find(".item_menu_variant").slideToggle(600);
                }
                $(this).parent("li").toggleClass("active");
                $(this).parent("li").find(".item_menu_variant").slideToggle(600);
            });

            $(".solutions .first_level>a").on("click", function (e) {
                let iNeedBtn = document.querySelector(".solutions .first_level.active");
                $(this).parent("li").find(".item_variable_info").slideUp(600);
                $(this).parent("li").find(".second_level.active").removeClass("active");
                if (iNeedBtn && !$(this).parent("li").hasClass("active")) {
                    console.log(iNeedBtn);
                    iNeedBtn.classList.remove("active");
                    $(iNeedBtn).find(".item_menu_variant").slideToggle(600);
                }
                $(this).parent("li").toggleClass("active");
                $(this).parent("li").find(".item_menu_variant").slideToggle(600);
            });

            $(".solutions .second_level>a").on("click", function (e) {
                let iNeedBtn = document.querySelector(
                    ".solutions .second_level.active"
                );
                if (iNeedBtn && !$(this).parent("li").hasClass("active")) {
                    console.log(iNeedBtn);
                    iNeedBtn.classList.remove("active");
                    $(iNeedBtn).find(".item_variable_info").slideToggle(600);
                }
                $(this).parent("li").toggleClass("active");
                $(this).parent("li").find(".item_variable_info").slideToggle(600);
            });
        }

        $(window).resize(function (e) {
            let viewport_width = Math.max(
                document.documentElement.clientWidth,
                window.innerWidth || 0
            );
            if (viewport_width <= 576) {
                $(".footer_subscribe_inside input").attr("placeholder", "Рассылка");
            }
        });
        if (viewport_width <= 576) {
            $(".footer_subscribe_inside input").attr("placeholder", "Рассылка");
        }

        $("#mobile-login").on("click", function (e) {
            $(this).parents().find("#mobile-search.active").toggleClass("active");
            $(this)
                .parents()
                .find(".mobile__search .content.active")
                .slideToggle(600);
            $(this)
                .parents()
                .find(".mobile__search .content.active")
                .toggleClass("active");
            setTimeout(() => {
                $(this).parent().find(".content").toggleClass("active");
                $(this).parent().find(".content").slideToggle(600);
                $(this).toggleClass("active");
            }, 400);
        });

        $("#mobile-search").on("click", function (e) {
            $(this).parents().find("#mobile-login.active").toggleClass("active");
            $(this).parents().find(".mobile__login .content.active").slideToggle(600);
            $(this)
                .parents()
                .find(".mobile__login .content.active")
                .toggleClass("active");
            setTimeout(() => {
                $(this).parent().find(".content").toggleClass("active");
                $(this).parent().find(".content").slideToggle(600);
                $(this).toggleClass("active");
            }, 400);
        });

        const zerotextBtn = "Выбрать";
        $(".slider__btn").on("click", function (e) {
            $(this).parent().find(".one_slider__wrapper").slideToggle(600);
            $(this).parent(".actual_slider ").toggleClass("active");
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).find(".btntext__content").html(zerotextBtn);
            }
            if (!$(this).parent(".actual_slider ").hasClass("active")) {
                let selictedSpan = $(this)
                    .parent()
                    .find(".ui-slider-pip-selected .ui-slider-label")[0].innerHTML;
                let thisBtnContent = $(this).find(".btntext__content");
                if (selictedSpan == "") {
                    selictedSpan = zerotextBtn;
                }
                if (selictedSpan == zerotextBtn) {
                    $(this).removeClass("active");
                } else {
                    $(this).addClass("active");
                }
                thisBtnContent.html(selictedSpan);
            }
        });

        //Вычисляем ширину эерана и вешаем ховер только если больше 1200px
        if (viewport_width > 1200) {
            $(".hc_dropdown .item_menu ul li.first_level > a").hover(
                function (e) {
                    var curWrapItemID = $(this).parent().attr("data-item");
                    $(this).parent().parent().find("li").removeClass("active");

                    if ($(this).parent().find(".second_level")) {
                        // console.log("asdkpolk");
                        $(this)
                            .parent()
                            .find(".second_level")
                            .each(function () {
                                $(this).removeClass("active");
                                $(this)
                                    .find(".item_variable_info.active")
                                    .removeClass("active");
                            });
                    }
                    $(this).parent().addClass("active");
                    $(this)
                        .parents(".hc_dropdown")
                        .find(".item_menu_variant")
                        .removeClass("active");
                    $(this)
                        .parents(".hc_dropdown")
                        .find(".item_menu_variant")
                        .each(function () {
                            if ($(this).attr("data-item") == curWrapItemID) {
                                $(this).addClass("active");
                            }
                        });
                },
                function () {
                }
            );
            $(".hc_dropdown .item_variable ul li.second_level > a").hover(
                function () {
                    if (!$(this).parent().is(".active")) {
                        console.log("test");
                        var curVariableItemID = $(this).parent().attr("data-item");
                        $(this).parent().parent().find("li").removeClass("active");
                        $(this).parent().addClass("active");
                        $(this)
                            .parents(".item_menu_variant")
                            .find(".item_variable_info")
                            .removeClass("active");
                        $(this)
                            .parents(".item_menu_variant")
                            .find(
                                ".item_variable_info[data-item='" + curVariableItemID + "']"
                            )
                            .addClass("active");
                    }
                },
                function () {
                }
            );
        }
    }

    var overlay = $("#overlay");
    var open_modal = $(".open_modal");
    var close_modal = $(".modal_close, #overlay");
    var modal = $(".modal_window");

    open_modal.on("click", function (event) {
        event.preventDefault();
        $(".modal_window.active").animate(
            {
                opacity: 0,
                top: 45 + "%",
            },
            300,
            function () {
                $(this).css("display", "none");
            }
        );
        var div = $(this).attr("href");
        $(div).addClass("active");
        overlay.fadeIn(400, function () {
            $(div)
                .css("display", "block")
                .animate(
                    {
                        opacity: 1,
                        top: "50%",
                        marginTop: "-" + $(div).outerHeight() / 2,
                    },
                    200
                );
        });
    });
    close_modal.on("click", function () {
        modal.animate(
            {
                opacity: 0,
                top: 45 + "%",
            },
            200,
            function () {
                $(this).css("display", "none");
                overlay.fadeOut(400);
            }
        );
        $(modal).removeClass("active");
    });

    //Подмена контенка в блоке "Почему GETCRM?"
    $(".why_getcrm_item--left .why_getcrm_item--variant").hover(function () {
        var id = $(this).attr("data-item"),
            content = $(
                '.why_getcrm_item--left  .why_getcrm_item--results_item[data-item="' +
                id +
                '"]'
            );

        $(".why_getcrm_item--left .why_getcrm_item--variant.active").removeClass(
            "active"
        );
        $(this).addClass("active");

        $(
            ".why_getcrm_item--left .why_getcrm_item--results_item.active"
        ).removeClass("active");
        content.addClass("active");
    });

    $(".why_getcrm_item--right .why_getcrm_item--variant").hover(function () {
        var id = $(this).attr("data-item"),
            content = $(
                '.why_getcrm_item--right .why_getcrm_item--results_item[data-item="' +
                id +
                '"]'
            );

        $(".why_getcrm_item--right .why_getcrm_item--variant.active").removeClass(
            "active"
        );
        $(this).addClass("active");

        $(
            ".why_getcrm_item--right .why_getcrm_item--results_item.active"
        ).removeClass("active");
        content.addClass("active");
    });

    $(".why_getcrm_item--left .why_getcrm_item--variant").click(function () {
        var id = $(this).attr("data-item"),
            content = $(
                '.why_getcrm_item--left  .why_getcrm_item--results_item[data-item="' +
                id +
                '"]'
            );

        $(".why_getcrm_item--left .why_getcrm_item--variant.active").removeClass(
            "active"
        );
        $(this).addClass("active");

        $(
            ".why_getcrm_item--left .why_getcrm_item--results_item.active"
        ).removeClass("active");
        content.addClass("active");
    });

    $(".why_getcrm_item--right .why_getcrm_item--variant").click(function () {
        var id = $(this).attr("data-item"),
            content = $(
                '.why_getcrm_item--right .why_getcrm_item--results_item[data-item="' +
                id +
                '"]'
            );

        $(".why_getcrm_item--right .why_getcrm_item--variant.active").removeClass(
            "active"
        );
        $(this).addClass("active");

        $(
            ".why_getcrm_item--right .why_getcrm_item--results_item.active"
        ).removeClass("active");
        content.addClass("active");
    });

    //Скролл формы связь с менеджером
    const managerModalScroll = document.querySelector(".form__right_list");
    if (managerModalScroll != null) {
        $(".form__right_list").overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
            textarea: {
                inheritedAttrs: ["style", "class"],
            },
        });
    }

    // скролл форма отдел продаж
    const formPageTextarea = $(".form-page form textarea");
    if (formPageTextarea.length) {
        formPageTextarea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    // скролл форма оставить отзыв
    const reviewFormTextarea = $(".reviews-form .window textarea");
    if (reviewFormTextarea.length) {
        reviewFormTextarea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    // скролл форма оставить отзыв
    const pricesPageListTags = $(".prices-page .list .tags");
    if (pricesPageListTags.length) {
        pricesPageListTags.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }
    // скролл форма оставить отзыв
    const pricesPageListOther = $(".prices-page .list .other");
    if (pricesPageListOther.length) {
        pricesPageListOther.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }
    // скролл форма оставить отзыв
    const pricesPageListUl = $(".prices-page .list ul");
    if (pricesPageListUl.length) {
        pricesPageListUl.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    // скролл будущий проект

    const futureProjectList = $(".cabinet-page .future-projects .list");
    if (futureProjectList.length) {
        futureProjectList.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }
    // скролл форме обращения в личном кабинете

    const requestFormTextarea = $(".cabinet-page .requests .item textarea");
    if (requestFormTextarea.length) {
        requestFormTextarea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    const contactsTextarea = $(".contacts-page .form-block textarea");
    if (contactsTextarea.length) {
        contactsTextarea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    // селекты на странице цен
    const pricePageSelect = $(".prices-page .pre-table select");
    if (pricePageSelect.length) {
        pricePageSelect.select2({
            minimumResultsForSearch: Infinity,
            dropdownParent: $(".prices-page .pre-table"),
        });
    }

    // селекты форме обращения в личном кабинете
    const requestFormSelect = $(
        ".cabinet-page .requests .item .form .field select"
    );
    if (requestFormSelect.length) {
        requestFormSelect.select2({
            minimumResultsForSearch: Infinity,
            width: "45%",
            dropdownParent: $(".cabinet-page .requests"),
        });
    }

    // табы личного кабинета
    let cabinetPageTabId;
    $(
        ".cabinet-page .menu a, .cabinet-page .menu2 a, .cabinet-page .mobile-menu a, .cabinet-page a.separate"
    ).on("click", function (event) {
        event.preventDefault();
        cabinetPageTabId = $(this).data("tab");
        $(
            ".cabinet-page .menu a, .cabinet-page .menu2 a, .cabinet-page .mobile-menu a"
        ).removeClass("js-active");
        $(this).addClass("js-active");
        $(".account__tab").removeClass("active");
        $('.account__tab[data-tab="' + cabinetPageTabId + '"]').addClass("active");
        $(".cabinet-page .mobile-menu ").removeClass("opened");
        $(".cabinet-page .menu-button ").removeClass("active");
    });

    //Модальные окна
    let contactManagerBtn = document.querySelector("#manager-modal"),
        contactManagerModalWindow = document.querySelector(".modal_connection"),
        windowOverlay = document.querySelector("#overlay_megamenu"),
        contactManagerModalWindowClose = document.querySelector(
            ".modal_connection .modal_connection__close"
        ),
        personalAccountBtn = document.querySelector(".hr_lk--link"),
        loginModalWindow = document.querySelector(".modal_personal_account"),
        loginModalWindowClose = document.querySelector(
            ".modal_personal_account .modal_personal_account__close"
        ),
        registrationLink = document.querySelector(
            " .modal_personal_account .login__link"
        ),
        registrationLinkMobile = document.querySelector(
            ".mobile_registration_link"
        ),
        forgotPassword = document.querySelector(
            " .modal_personal_account .forgot_pass"
        ),
        modalRestoringAccess = document.querySelector(".modal_restoring_access"),
        modalRestoringAccessClose = document.querySelector(
            " .modal_restoring_access .modal_restoring_access__close"
        ),
        modalRegistrationForm = document.querySelector(".modal_registration"),
        modalRegistrationClose = document.querySelector(
            ".modal_registration .modal_registration__close"
        ),
        registrationLiginBtn = document.querySelector(
            ".modal_registration .modal_registration__link"
        ),
        subscriptionModal = document.querySelector(".subscription_modal"),
        subscriptionModalOkBtn = document.querySelector(
            ".subscription_modal .subscription_modal__btn"
        ),
        footerSubscription = document.querySelector(".footer_subscribe_inside"),
        subscriptionModalCloseBtn = document.querySelector(
            ".subscription_modal .subscription_modal__close"
        ),
        successfulRegistrationModal = document.querySelector(
            ".successful_registration"
        ),
        successfulLicenseModal = document.querySelector(".successful_license"),
        mobileLiginFormFogot = document.querySelector(".mobile_ligin_form__fogot"),
        modalCallbackBtn = document.querySelector(".landing-main__callback"),
        modalCallbackMobileBtn = document.querySelector(".landing-mobile__link"),
        modalCallback = document.querySelector(".modal-callback"),
        modalCallbackClose = document.querySelector(".modal-callback__close"),
        modalConnectionPricesBtn = document.querySelector(
            ".modal-connection-prices__btn"
        ),
        modalConnectionPrices = document.querySelector(".modal_connection-prices"),
        modalConnectionPricesClose = document.querySelector(
            ".modal_connection-prices-close"
        ),
        modalConnectionProjectBtn = document.querySelector(
            ".modal-connection-project__btn"
        ),
        modalConnectionProject = document.querySelector(
            ".modal_connection-project"
        ),
        modalConnectionProjectClose = document.querySelector(
            ".modal_connection-project-close"
        ),
        modalDownloadPricesBtn = document.querySelector(
            ".modal-download-prices__btn"
        ),
        modalDownloadPrices = document.querySelector(".modal_download-prices"),
        modalDownloadPricesClose = document.querySelector(
            ".modal_download-prices-close"
        );

    //Кнопка открытия модалки связи с менеджером
    if (contactManagerBtn) {
        contactManagerBtn.addEventListener("click", (e) => {
            e.preventDefault();
            contactManagerModalWindow.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }
    //Кнопка открытия модалки личного кабинета
    if (personalAccountBtn) {
        personalAccountBtn.addEventListener("click", (e) => {
            e.preventDefault();
            loginModalWindow.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }

    //Кнопка открытия модально окна востановления пароля
    if (forgotPassword) {
        forgotPassword.addEventListener("click", (e) => {
            e.preventDefault();
            loginModalWindow.classList.remove("opened");
            modalRestoringAccess.classList.add("opened");
        });
    }
    if (mobileLiginFormFogot) {
        mobileLiginFormFogot.addEventListener("click", (e) => {
            e.preventDefault();
            loginModalWindow.classList.remove("opened");
            modalRestoringAccess.classList.add("opened");
        });
    }
    //Кнопка открытие модалки с формой регистрации
    if (registrationLink) {
        registrationLink.addEventListener("click", (e) => {
            e.preventDefault();
            loginModalWindow.classList.remove("opened");
            modalRegistrationForm.classList.add("opened");
        });
    }
    //Кнопка открытие модалки с формой регистрации
    if (registrationLinkMobile) {
        registrationLinkMobile.addEventListener("click", (e) => {
            e.preventDefault();
            loginModalWindow.classList.remove("opened");
            modalRegistrationForm.classList.add("opened");
        });
    }
    //Кнопка открытие модалки с формой авторизации
    if (registrationLiginBtn) {
        registrationLiginBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalRegistrationForm.classList.remove("opened");
            loginModalWindow.classList.add("opened");
        });
    }

    //Кнопка открытия модалки обратного звонка
    if (modalCallbackBtn) {
        modalCallbackBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalCallback.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }
    //Кнопка открытия модалки обратного звонка
    if (modalCallbackMobileBtn) {
        modalCallbackMobileBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalCallback.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }

    //Кнопка открытия модалки связаться с менеджером
    if (modalConnectionPricesBtn) {
        modalConnectionPricesBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalConnectionPrices.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }
    //Кнопка открытия модалки связаться с менеджером
    if (modalConnectionProjectBtn) {
        modalConnectionProjectBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalConnectionProject.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }

    //Кнопка открытия модалки связаться с менеджером
    if (modalDownloadPricesBtn) {
        modalDownloadPricesBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modalDownloadPrices.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }

    //Отбработчик нажатия на оверлэй для закрытия модалок
    windowOverlay.addEventListener("click", (e) => {
        if (
            contactManagerModalWindow &&
            contactManagerModalWindow.classList.contains("opened")
        ) {
            contactManagerModalWindow.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (loginModalWindow && loginModalWindow.classList.contains("opened")) {
            loginModalWindow.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            modalRestoringAccess &&
            modalRestoringAccess.classList.contains("opened")
        ) {
            modalRestoringAccess.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            modalRegistrationForm &&
            modalRegistrationForm.classList.contains("opened")
        ) {
            modalRegistrationForm.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (subscriptionModal && subscriptionModal.classList.contains("opened")) {
            subscriptionModal.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            successfulRegistrationModal &&
            successfulRegistrationModal.classList.contains("opened")
        ) {
            successfulRegistrationModal.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            successfulLicenseModal &&
            successfulLicenseModal.classList.contains("opened")
        ) {
            successfulLicenseModal.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            modalConnectionPrices &&
            modalConnectionPrices.classList.contains("opened")
        ) {
            modalConnectionPrices.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            modalConnectionProject &&
            modalConnectionProject.classList.contains("opened")
        ) {
            modalConnectionProject.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (
            modalDownloadPrices &&
            modalDownloadPrices.classList.contains("opened")
        ) {
            modalDownloadPrices.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        }
        if (modalCallback && modalCallback.classList.contains("opened")) {
            modalCallback.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        } else {
            return;
        }
    });
    //кнопка закрытия модально окна авторизации
    if (loginModalWindowClose) {
        loginModalWindowClose.addEventListener("click", (e) => {
            loginModalWindow.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    //кнопка закрытия модально окна окна востановления пароля
    if (modalRestoringAccessClose) {
        modalRestoringAccessClose.addEventListener("click", (e) => {
            modalRestoringAccess.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }

    //Обработчик нажатия кнопки закрытия модалки слязи с менеджером
    if (contactManagerModalWindowClose) {
        contactManagerModalWindowClose.addEventListener("click", (e) => {
            contactManagerModalWindow.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    //Обработчик нажатия кнопки закрытия модалки регистрации
    if (modalRegistrationClose) {
        modalRegistrationClose.addEventListener("click", (e) => {
            modalRegistrationForm.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    //Обработчик нажатия кнопки закрытия модалки регистрации
    if (modalCallbackClose) {
        modalCallbackClose.addEventListener("click", (e) => {
            modalCallback.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    if (successfulRegistrationModal) {
        successfulRegistrationModal.addEventListener("click", (e) => {
            if (
                e.target.closest(".successful_registration__close") ||
                e.target.closest(".successful_registration__btn")
            ) {
                successfulRegistrationModal.classList.remove("opened");
                windowOverlay.classList.remove("active-modal");
            }
        });
    }
    if (successfulLicenseModal) {
        successfulLicenseModal.addEventListener("click", (e) => {
            if (
                e.target.closest(".successful_license__close") ||
                e.target.closest(".successful_license__btn")
            ) {
                successfulLicenseModal.classList.remove("opened");
                windowOverlay.classList.remove("active-modal");
            }
        });
    }

    //Зкнопки закрытия модалки с оповещением о подписке
    if (subscriptionModalOkBtn) {
        subscriptionModalOkBtn.addEventListener("click", (e) => {
            e.preventDefault();
            subscriptionModal.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    if (subscriptionModalCloseBtn) {
        subscriptionModalCloseBtn.addEventListener("click", (e) => {
            e.preventDefault();
            subscriptionModal.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }

    if (modalConnectionPricesClose) {
        modalConnectionPricesClose.addEventListener("click", (e) => {
            e.preventDefault();
            modalConnectionPrices.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }
    if (modalConnectionProjectClose) {
        modalConnectionProjectClose.addEventListener("click", (e) => {
            e.preventDefault();
            modalConnectionProject.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }

    if (modalDownloadPricesClose) {
        modalDownloadPricesClose.addEventListener("click", (e) => {
            e.preventDefault();
            modalDownloadPrices.classList.remove("opened");
            windowOverlay.classList.remove("active-modal");
        });
    }

    //Обработчик закрытия бокового меню(справа) при нажатии вне его области

    let body = document.querySelector("body"),
        rightDroppedMenu = document.querySelector(".creating-project"),
        rightDroppedMenuSecond = document.querySelector(".creating-project-second");
    if (rightDroppedMenu) {
        body.addEventListener("click", (e) => {
            if (
                !e.target.closest(".creating-project.active") &&
                rightDroppedMenu.classList.contains("active")
            ) {
                rightDroppedMenu.classList.remove("active");
                rightDroppedMenu
                    .querySelector(".creating-project-open")
                    .classList.remove("active");
            }

            if (
                !e.target.closest(".header_dropdown") &&
                !e.target.closest(".header_dropdown_active") &&
                document
                    .querySelector("#header")
                    .classList.contains("header_dropdown_active")
            ) {
                $(".header_left").toggleClass("fixed");
                document
                    .querySelector("#header")
                    .classList.remove("header_dropdown_active");
                $(".header_dropdown").toggle("slide");
            }

            if (
                document
                    .querySelector(".hr_search_form")
                    .classList.contains("active") &&
                !e.target.closest(".hr_search_form") &&
                !e.target.closest(".hr_search_btn")
            ) {
                $(".hr_search_form ").removeClass("active");
                $(".hr_search").removeClass("active");
            }
        });
    }
    if (rightDroppedMenuSecond) {
        body.addEventListener("click", (e) => {
            if (
                !e.target.closest(".creating-project-second.active") &&
                rightDroppedMenuSecond.classList.contains("active")
            ) {
                rightDroppedMenuSecond.classList.remove("active");
                rightDroppedMenuSecond
                    .querySelector(".creating-project-second-open")
                    .classList.remove("active");
            }

            if (
                !e.target.closest(".header_dropdown") &&
                !e.target.closest(".header_dropdown_active") &&
                document
                    .querySelector("#header")
                    .classList.contains("header_dropdown_active")
            ) {
                $(".header_left").toggleClass("fixed");
                document
                    .querySelector("#header")
                    .classList.remove("header_dropdown_active");
                $(".header_dropdown").toggle("slide");
            }

            if (
                document
                    .querySelector(".hr_search_form")
                    .classList.contains("active") &&
                !e.target.closest(".hr_search_form") &&
                !e.target.closest(".hr_search_btn")
            ) {
                $(".hr_search_form ").removeClass("active");
                $(".hr_search").removeClass("active");
            }
        });
    }

    //Проверка формы с почтой для подписки на рассылку
    if (footerSubscription) {
        footerSubscription.addEventListener("submit", (e) => {
            e.preventDefault();

            $.ajax({
                type: 'GET',
                url: '/subscribe',
                data: {
                    'email': $(footerSubscription).find('input[name=email]').val(),
                },
            });

            subscriptionModal.classList.add("opened");
            windowOverlay.classList.add("active-modal");
            setTimeout(() => footerSubscription.reset(), 400);
        });
    }
    //Проверка формы с регистрацией
    $('.js-clear-error').focus(function () {
        let obj = $(this);
        let name = obj.attr('name');
        $('#error_' + name).addClass('display__none');
    });

    if (modalRegistrationForm) {
        modalRegistrationForm
            .querySelector("form")
            .addEventListener("submit", (e) => {
                e.preventDefault();
                $.ajax({
                    headers: {
                        Accept: "application/json; charset=utf-8",
                    },
                    type: 'POST',
                    url: '/register',
                    dataType: 'json',
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'name': $(modalRegistrationForm).find('input[name=name]').val(),
                        'firm': $(modalRegistrationForm).find('input[name=firm]').val(),
                        'email': $(modalRegistrationForm).find('input[name=email]').val(),
                        'password': $(modalRegistrationForm).find('input[name=password]').val(),
                        'password_confirmation': $(modalRegistrationForm).find('input[name=password_confirmation]').val(),
                    },
                    statusCode: {
                        422: function (response) {
                            let data = response.responseJSON;
                            let errors = data.errors;
                            console.log('422', errors);
                            Object.keys(errors).forEach(function (name, key) {
                                let fieldErrors = errors[name];
                                let errorBlock = $('#error_' + name);
                                errorBlock.html('<div class="error text-left">' + fieldErrors[0] + '</div>').removeClass('display__none');
                                console.log(name, errors[name])
                            });
                        }
                    },
                    success: function (data) {
                        modalRegistrationForm.classList.remove("opened");
                        successfulRegistrationModal.classList.add("opened");
                        setTimeout(
                            () => modalRegistrationForm.querySelector("form").reset(),
                            100
                        );
                        location.href = '/cabinet';
                    },
                });
            });
    }
    //Проверка формы подписки на лицензию
    const landingGetForm = document.querySelector(".landing-get__form");
    if (landingGetForm) {
        landingGetForm.addEventListener("submit", (e) => {
            e.preventDefault();
            successfulLicenseModal.classList.add("opened");
            windowOverlay.classList.add("active-modal");
        });
    }
    //Проверка формы связи с менеджером
    if (contactManagerModalWindow) {
        contactManagerModalWindow
            .querySelector("form")
            .addEventListener("submit", (e) => {
                e.preventDefault();
                contactManagerModalWindow.classList.remove("opened");
                windowOverlay.classList.remove("active-modal");
                setTimeout(
                    () => contactManagerModalWindow.querySelector("form").reset(),
                    400
                );
            });
    }
    //Маска для номера телефона
    $("input[type=tel]").mask("+9(999) 999-99-99", {
        translation: {
            9: {
                pattern: /[0-9]/,
            },
        },
    });

    // let leftList = document.querySelector(".aib_inside_check_list"),
    //     rightFunctional = document.querySelector(".aib_inside_content_functional"),
    //     leftZero = document.querySelector(".aib_inside_zero_left"),
    //     rightZero = document.querySelector(".aib_inside_zero_right");
    //
    // let firstData = 0,
    //     secondData = 0,
    //     thirdData = 0;
    //
    // const sliretDataResult = () => {
    //     if ((firstData == 0) & (secondData == 0) & (thirdData == 0)) {
    //         leftZero.classList.add("selected");
    //         leftList.classList.remove("selected");
    //         rightFunctional.classList.remove("selected");
    //         rightZero.classList.add("selected");
    //         if (chechboxElements.find((item) => item.checked == true)) {
    //             chechboxElements.forEach((item) => (item.checked = false));
    //             rightFunctional.classList.remove("selected");
    //             rightZero.classList.add("selected");
    //         }
    //     } else {
    //         leftZero.classList.remove("selected");
    //         leftList.classList.add("selected");
    //     }
    // };

    // инпуты из секции Подобранные решения
    // let chechboxElements = Array.from(
    //     document.querySelectorAll(".checkbox__wrapper")
    // );
    // chechboxElements.forEach((listItem) => {
    //     listItem.addEventListener("mouseenter", (e) => {
    //         if (e.target.classList.contains("checkbox__wrapper")) {
    //             let listItemData = listItem.dataset.search;
    //             let resultContent = [
    //                 ...document.querySelectorAll(".aib_inside_content_functional"),
    //             ];
    //             let activeResultBlock = resultContent.find((item) =>
    //                 item.classList.contains("selected")
    //             );
    //             if (activeResultBlock) {
    //                 activeResultBlock.classList.remove("selected");
    //             }
    //
    //             let resultContentBlock = resultContent.find(
    //                 (item) => item.dataset.result === listItemData
    //             );
    //             rightZero.classList.remove("selected");
    //             resultContentBlock.classList.add("selected");
    //             resultContentBlock.scrollTo(0, 0);
    //         }
    //     });
    // });

    // скрипты лэндинга

    // видео
    const landingVideoPlay = $(".landing-main__video-play");
    if (landingVideoPlay.length) {
        landingVideoPlay.on("click", function () {
            $(this).siblings(".landing-main__video")[0].play();
            $(this).siblings(".landing-main__video").prop("controls", true);
            $(this).remove();
        });
    }

    // проблема - решение

    const landingSolutionItem = $(".landing-solution__item");
    const landingSolutionAllTabs = $(".landing-solution__tab-wrap");
    const landingSolutionTab = $(".landing-solution__tab");
    let solutionTabId;

    if (landingSolutionItem.length) {
        landingSolutionItem.on("click", function () {
            tabId = $(this).data("tab");
            landingSolutionTab.removeClass("js-open");
            landingSolutionAllTabs
                .find(".landing-solution__tab[data-tab=" + tabId + "]")
                .addClass("js-open");
            if ($(window).width() < 768) {
                $(".landing-solution__item-solution-wrap").slideUp();
                if (!$(this).is(".js-current")) {
                    $(this).find(".landing-solution__item-solution-wrap").slideDown();
                }
            }
            if (!$(this).is(".js-current")) {
                landingSolutionItem.removeClass("js-current");

                $(this).addClass("js-current");
            } else {
                if ($(window).width() < 768) {
                    landingSolutionItem.removeClass("js-current");
                }
            }
        });
    }

    const landingGetInput = $(".landing-get__input");
    if (landingGetInput.length) {
        landingGetInput.on("input", function () {
            if ($(this).val()) {
                $(this).siblings(".landing-get__placeholder").addClass("js-invisible");
            } else {
                $(this)
                    .siblings(".landing-get__placeholder")
                    .removeClass("js-invisible");
            }
        });
    }

    const landingFunctionList = $(".landing-function__list");
    if (landingFunctionList.length) {
        landingFunctionList.slick({
            mobileFirst: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            prevArrow:
                '<span class="landing-function__list-left"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.6892 1L2 11.6892L12.6892 22.3784" stroke="black" stroke-width="2"/></svg><span>',
            nextArrow:
                '<span class="landing-function__list-right"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="M1.40649 1L12.0957 11.6892L1.40649 22.3784" stroke="black" stroke-width="2"/></svg><span>',
            responsive: [
                {
                    breakpoint: 992,
                    settings: "unslick",
                },
                {
                    breakpoint: 599,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
            ],
        });
        $(window).on("resize", function () {
            if (
                $(window).width() < 992 &&
                !landingFunctionList.is(".slick-initialized")
            ) {
                landingFunctionList.slick("setOption", {}, true);
            }
        });
    }

    // скролл в модальном окне лэндинга textarea
    const modalCallbackMessage = $(".modal-callback__message");
    if (modalCallbackMessage.length) {
        modalCallbackMessage.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: true,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    const modalConnectionPricesArea = $(".modal_connection-prices .form__area");
    if (modalConnectionPricesArea.length) {
        modalConnectionPricesArea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: false,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    const modalConnectionProjectArea = $(".modal_connection-project .form__area");
    if (modalConnectionProjectArea.length) {
        modalConnectionProjectArea.overlayScrollbars({
            className: "os-theme-round-light",
            sizeAutoCapable: true,
            paddingAbsolute: false,
            scrollbars: {
                clickScrolling: true,
            },
        });
    }

    let historyPageContentFlex2 = $(".history-page .content .flex2");
    if (historyPageContentFlex2.length) {
        historyPageContentFlex2.on("init", function (slick) {
            if ($(this).find(".slick-slide").not(".slick-cloned").length > 2) {
                $(this).find(".slick-slide").css({
                    transform: "none",
                    "z-index": "1",
                    opacity: 0,
                });
                $(this).find(".slick-slide[data-slick-index=2]").css({
                    transform: "translateX(calc(-200% + 40px))",
                    "z-index": "30",
                    opacity: 1,
                });
                $(this).find(".slick-slide[data-slick-index=1]").css({
                    transform: "translateX(-100%)",
                    "z-index": "29",
                    opacity: 1,
                });
                $(this).find(".slick-slide[data-slick-index=0]").css({
                    transform: "translateX(-40px)",
                    "z-index": "28",
                    opacity: 1,
                });
            } else if (
                $(this).find(".slick-slide").not(".slick-cloned").length === 2
            ) {
                $(this).find(".slick-slide").css({
                    transform: "none",
                    "z-index": "1",
                    opacity: 0,
                });
                $(this).find(".slick-slide[data-slick-index=1]").css({
                    transform: "translateX(calc(-100% + 20px))",
                    "z-index": "29",
                    opacity: 1,
                });
                $(this).find(".slick-slide[data-slick-index=0]").css({
                    transform: "translateX(-20px)",
                    "z-index": "28",
                    opacity: 1,
                });
            }
        });

        historyPageContentFlex2.slick({
            mobileFirst: true,
            arrows: false,
            useTransform: false,
            speed: 100,
            dots: true,
            responsive: [
                {
                    breakpoint: 769,
                    settings: "unslick",
                },
            ],
        });

        historyPageContentFlex2.on(
            "beforeChange",
            function (event, slick, currentSlide, nextSlide) {
                if ($(this).find(".slick-slide").not(".slick-cloned").length > 2) {
                    $(this).find(".slick-slide").css({
                        transform: "none",
                        "z-index": "1",
                        opacity: 0,
                    });
                    $(this)
                        .find(".slick-slide[data-slick-index=" + (nextSlide + 2) + "]")
                        .css({
                            transform: "translateX(calc(-200% + 40px))",
                            "z-index": "30",
                            opacity: 1,
                        });
                    $(this)
                        .find(".slick-slide[data-slick-index=" + (nextSlide + 1) + "]")
                        .css({
                            transform: "translateX(-100%)",
                            "z-index": "29",
                            opacity: 1,
                        });
                    $(this)
                        .find(".slick-slide[data-slick-index=" + nextSlide + "]")
                        .css({
                            transform: "translateX(-40px)",
                            "z-index": "28",
                            opacity: 1,
                        });
                } else if (
                    $(this).find(".slick-slide").not(".slick-cloned").length === 2
                ) {
                    $(this).find(".slick-slide").css({
                        transform: "none",
                        "z-index": "1",
                        opacity: 0,
                    });
                    // $(this)
                    //   .find(".slick-slide[data-slick-index=" + (nextSlide + 2) + "]")
                    //   .css({
                    //     transform: "translateX(calc(-200% + 40px))",
                    //     "z-index": "30",
                    //     opacity: 1,
                    //   });
                    $(this)
                        .find(".slick-slide[data-slick-index=" + (nextSlide + 1) + "]")
                        .css({
                            transform: "translateX(calc(-100% + 20px))",
                            "z-index": "29",
                            opacity: 1,
                        });
                    $(this)
                        .find(".slick-slide[data-slick-index=" + nextSlide + "]")
                        .css({
                            transform: "translateX(-20px)",
                            "z-index": "28",
                            opacity: 1,
                        });
                }
            }
        );
        $(window).on("resize", function () {
            if (
                $(window).width() <= 768 &&
                !historyPageContentFlex2.is(".slick-initialized")
            ) {
                historyPageContentFlex2.slick("setOption", {}, true);
            }
        });
    }

    $(document).on(
        "click",
        ".mobile-app-page .tabNavigation a.selected",
        function () {
            if ($(window).width() <= 768) {
                $(this).parents(".tabNavigation").addClass("js-open");
            }
        }
    );
    $(document).on(
        "click",
        ".mobile-app-page .tabNavigation.js-open a",
        function () {
            if ($(window).width() <= 768) {
                console.log("test2");
                $(this).parents(".tabNavigation").removeClass("js-open");
                $(this)
                    .parent()
                    .insertBefore(".mobile-app-page .tabNavigation li:eq(0)");
            }
        }
    );

    let MobileAppPageDemoVideo = $(".mobile-app-page__demo-video");
    if (MobileAppPageDemoVideo.length) {
        let url = MobileAppPageDemoVideo.parent().attr("href");
        $(".demo-video__modal").find(".demo-video__iframe").attr("src", url);
        MobileAppPageDemoVideo.on("click", function (evt) {
            evt.preventDefault();
            evt.stopPropagation();
            $(".demo-video__modal").addClass("opened");
            $("#overlay_megamenu").addClass("active-modal");
        });

        $(".demo-video__modal")
            .find(".modal_close_btn")
            .on("click", function () {
                $(".demo-video__modal").removeClass("opened");
                $("#overlay_megamenu").removeClass("active-modal");
            });
    }
    // if ($(".show_youtube_video").length > 0) {
    // 	$(".show_youtube_video").on("click", function () {
    // 		var youtube_url = $(this).data("youtubecode");
    // 		$(".youtube_iframe").attr("src", youtube_url);
    // 		$(".youtube_modal").addClass("opened");
    // 		$(".youtube_modal").addClass("active-modal")

    // 	});

    // }
    // if ($(".youtube_modal__close").length > 0) {
    // 	$(".youtube_modal__close").on("click", function () {
    // 		$(".youtube_modal").removeClass("opened");
    // 		$(".youtube_modal").removeClass("active-modal")
    // 	});
    // }

    // инициализация слайдеров на главной

    // const actualCheck = document.querySelector(".aib_inside");
    // if (actualCheck != null) {
    //     $(".aib_inside").overlayScrollbars({
    //         className: "os-theme-round-light",
    //         sizeAutoCapable: true,
    //         paddingAbsolute: true,
    //         scrollbars: {
    //             clickScrolling: true,
    //         },
    //     });
    // }

    // chechboxElements.forEach((listItem) => {
    //     listItem.addEventListener("mouseenter", (e) => {
    //         if (e.target.classList.contains("checkbox__wrapper")) {
    //             let listItemData = listItem.dataset.search;
    //             let resultContent = [
    //                 ...document.querySelectorAll(".aib_inside_content_functional"),
    //             ];
    //             let activeResultBlock = resultContent.find((item) =>
    //                 item.classList.contains("selected")
    //             );
    //             if (activeResultBlock) {
    //                 activeResultBlock.classList.remove("selected");
    //             }
    //
    //             let resultContentBlock = resultContent.find(
    //                 (item) => item.dataset.result === listItemData
    //             );
    //             rightZero.classList.remove("selected");
    //             resultContentBlock.classList.add("selected");
    //             resultContentBlock.scrollTo(0, 0);
    //         }
    //     });
    // });
    //
    // $(".actual_slider_first").on("slidechange", function (event, ui) {
    //     if (+ui.value == 8) {
    //         firstData = 0;
    //     } else {
    //         firstData = +ui.value;
    //     }
    //     sliretDataResult();
    // });
    //
    // $(".actual_slider__second").on("slidechange", function (event, ui) {
    //     if (+ui.value == 13) {
    //         secondData = 0;
    //     } else {
    //         secondData = +ui.value;
    //     }
    //     sliretDataResult();
    // });
    //
    // $(".actual_slider__third").on("slidechange", function (event, ui) {
    //     if (+ui.value == 10) {
    //         thirdData = 0;
    //     } else {
    //         thirdData = +ui.value;
    //     }
    //     sliretDataResult();
    // });
});
