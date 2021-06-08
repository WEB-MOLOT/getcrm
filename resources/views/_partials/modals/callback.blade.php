<div class="modal-callback modal-block">
    <form action="#" name="callback" class="modal-callback__form">
        <h3 class="modal-callback__title">Заказать звонок</h3>

        <p class="modal-callback__text">
            Для получения подробной информации о платформе введите ваш телефон и
            имя. Наш менеджер свяжится с вами в ближайшее время.
        </p>

        <input
            type="text"
            placeholder="Имя"
            name="name"
            class="modal-callback__input"
            required
        />
        <input
            type="email"
            placeholder="E-mail"
            name="email"
            class="modal-callback__input"
            required
        />
        <input
            type="tel"
            placeholder="Телефон"
            name="tel"
            class="modal-callback__input"
            required
        />
        <textarea
            name="message"
            placeholder="Сообщение"
            class="modal-callback__message"
        ></textarea>
        <label class="modal-callback__label">
            <input type="checkbox" checked class="modal-callback__checkbox"/>
            <p>
                Я согласен с условиями <a href="#">политики конфиденциальности</a>
            </p>
        </label>
        <button
            name="submit"
            type="submit"
            class="btn modal-callback__submit btn btn_orange"
        >
            Отправить
        </button>
    </form>
    <div class="modal-callback__close modal_close_btn">
        <span></span>
        <span></span>
    </div>
</div>
