<footer id="footer" class="footer">
    <div class="footer_inside d_flex a_items_center j_content_between">
        <div class="footer_inside_item footer_inside_item__logo">
            <div class="footer_logo">
                <a href="{{ route('site.index') }}"><img src="/img/logo_footer.png" alt=""/></a>
            </div>
        </div>
        <div class="footer_inside_item footer_inside_item__copyright">
            <div class="footer_copyright">
                All rights reseved 2019
                <a href="{{ route('site.privacy.index')  }}">Политика конфиденциальности</a>
            </div>
        </div>
        <div class="footer_inside_item footer_inside_item__menu">
            <div class="footer_menu">
                <ul class="d_flex f_wrap">
                    <li><a href="{{ route('site.price.index') }}">Расчет цены</a></li>
                    <li><a href="{{ route('site.form.index') }}">Отдел продаж</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_inside_item footer_inside_item__form">
            <div class="footer_subscribe">
                <form action="{{ route('site.subscribe.store') }}" class="footer_subscribe_inside">
                    <input
                        type="email"
                        name="email"
                        placeholder="Введите свой e-mail: и будьте в курсе всех новостей:"
                        required
                    />
                    <button type="submit" class="btn btn_orange">
                        <span>Подписаться</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="footer_inside_item">
            <div class="footer_info">
                <div class="footer_number">
                    <a href="tel:{{ preg_replace('/[^0-9\+]/', '', config('site.phone')) }}">{!! config('site.phone') !!}</a>
                </div>
                <div class="footer_email">
                    Напишите нам: <a href="mailto:{{ config('site.email.sale') }}">{{ config('site.email.sale') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
