<form class="tender_fence__form js-form">
    <div class="close">
        <span class="close_icn"></span>
    </div>
    <div class="tender_fence__title">Оформить тендер на забор</div>
    <div class="tender_fence__order_block">
        <div class="tender_fence__title tender_fence__second_title">Параметры забора</div>
        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Вид забора:</span>
            <select name="type_fence">
                <option value="114" selected>Профнастил</option>
                <option value="115">Сетка-рабица</option>
                <option value="116">Металоштакетник</option>
                <option value="117">Поликарбонат</option>
                <option value="118">Сварные</option>
                <option value="119">Шумозащитные</option>
                <option value="120">3D</option>
            </select>
        </label>

        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Основание забора:</span>
            <select name="pillars">
                <option value="121" selected>Забивные столбы</option>
                <option value="122">Утрамбовка щебнем</option>
                <option value="123">Бетонирование столбов</option>
                <option value="124">Ленточный фундамент</option>
                <option value="125">Кирпичные столбы</option>
            </select>
        </label>

        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Ворота:</span>
            <select name="gate">
                <option value="126" selected>Не нужны</option>
                <option value="127">Откатные</option>
                <option value="128">Откатные с автоматикой</option>
                <option value="129">Распашные</option>
                <option value="130">Распашные с автоматикой</option>
            </select>
        </label>

        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Высота забора:</span>
            <input type="text" name="height_fence" required placeholder="2 метра" />
        </label>

        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Длина забора:</span>
            <input type="text" name="length_fence" required placeholder="200 метров" />
        </label>

        <label class="tender_fence__lbl">
            <span class="tender_fence__lbl_text">Описание заказа:</span>
            <textarea placeholder="Пример: Забор из профнастила с односторонним  зеленым окрасом толщиной 0.5мм, одна калитка, ворота распашные 4 метра без автоматики и т.п." name="descript"></textarea>
        </label>
    </div>

    <div class="tender_fence__user_block">
        <div class="tender_fence__title callback__second_title">Данные клиента</div>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">Введите ваше имя:</span>
            <input type="text" name="name" placeholder="Иван" />
        </label>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">Номер телефона:</span>
            <input type="tel" name="phone" required placeholder="+7 (___) ___-__-__" required data-validate-field="tel" data-validate-rules="phone" />
        </label>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">E-mail:</span>
            <input type="text" name="email" placeholder="info@site.ru" />
        </label>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">Статус заказчика:</span>
            <span class="order_fence__radio"><input type="radio" name="customer_type" checked value="112">Физ. лицо</span>
            <span class="order_fence__radio"><input type="radio" name="customer_type" value="113">Юр. лицо</span>
        </label>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">Место установки:</span>
            <input type="text" name="place_fence" required placeholder="Укажите город или район с населенным пунктом" />
        </label>

        <label class="order_fence__lbl">
            <span class="tender_fence__lbl_text">Дата установки:</span>
            <input type="date" name="date_fence" />
        </label>

        <label class="checkbox checkbox__lbl">
            <input type="checkbox" checked="" name="Согласие" />
            <span class="tender_fence__lbl_text checkbox__lbl_text">Я согласен с
				<a class="checkbox__link" href="/privacy/" target="_blank">политикой конфиденциальности</a>
			</span>
        </label>
    </div>
    <button class="button primary js-tender-fence">Отправить</button>
</form>