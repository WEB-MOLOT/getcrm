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
                <a href="#">Политика конфиденциальности</a>
            </div>
        </div>
        <div class="footer_inside_item footer_inside_item__menu">
            <div class="footer_menu">
                <ul class="d_flex f_wrap">
                    <li><a href="#">Решения</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="{{ route('site.price.index') }}">Расчет цены</a></li>
                    <li><a href="{{ route('site.form.index') }}">Отдел продаж</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_inside_item footer_inside_item__form">
            <div class="footer_subscribe">
                <form action="#" class="footer_subscribe_inside">
                    <input
                        type="email"
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
                    <a href="tel:+74957254376">+ 7 (495) <span>725-43-76</span></a>
                </div>
                <div class="footer_email">
                    Напишите нам: <a href="mailto:hello@getcrm.ru">hello@getcrm.ru</a>
                </div>
            </div>
        </div>
    </div>
</footer>
