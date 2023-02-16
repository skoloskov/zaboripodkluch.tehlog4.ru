<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
//$title = 'Завод дверей: Входные металлические двери в '.$APPLICATION->GetPageProperty('regionSettings')['UF_INCITY'].' с любым типом отделки от производителя';
//echo '<pre>'.print_r($APPLICATION->GetPageProperty('PageSettings'), true).'</pre>';die();
if ($APPLICATION->GetPageProperty('PageSettings')['UF_TITLE']) {
	$title = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_TITLE']);
}

//$keywords = 'Строительство заборов в '.$APPLICATION->GetPageProperty('regionSettings')['UF_INCITY'].' с установкой. Цены на работы с материалом.';
if ($APPLICATION->GetPageProperty('PageSettings')['UF_KEYWORDS']) {
	$keywords = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_KEYWORDS']);
}

//$description = 'Нужен забор в городе '.$APPLICATION->GetPageProperty('regionSettings')['UF_NAME'].'? Бесплатная консультация специалиста и выезд на объект. Доставка. Соблюдение сроков. Фото работ и отзывы клиентов.';

if ($APPLICATION->GetPageProperty('PageSettings')['UF_DESCRIPTION']) {
	$description = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_DESCRIPTION']);
}

$APPLICATION->SetPageProperty('title', $title);
$APPLICATION->SetPageProperty('keywords', $keywords);
$APPLICATION->SetPageProperty('description', $description);

?>
</main>
<!-- Footer -->
<footer class="footer">
	<div class="container footer__container">
		<ul class="footer__list">
			<li class="footer__item">
				<a class="footer__logo-link" href="#">
					<img class="footer__logo" src="<?= SITE_TEMPLATE_PATH; ?>/img/logo.png" alt="Логотип" />
				</a>
			</li>
			<li class="footer__item">
				<div class="footer__subtitle">Заборы</div>
				<ul class="footer__nav">
					<li class="nav__item">
						<a class="nav__link" href="/zabory-dlya-dachi/">Заборы для дачи</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/zabory-iz-profnastila/">Заборы из профнастила</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/zabory-iz-metallicheskogo-shtaketnika/">Заборы из еврошаткетника</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/zabory-iz-setki-rabitsy/">Заборы из сетки – рабицы</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/3d-zabory/">3D заборы</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/vorota/">Ворота</a>
					</li>
				</ul>
			</li>
			<li class="footer__item">
				<div class="footer__subtitle">О сервисе</div>
				<ul class="footer__nav">
					<li class="nav__item">
						<a class="nav__link" href="/privacy/">Политика конфиденциальности</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/feedback/">Жалобы и предложения </a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/moderation/">Модерация</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/smeta/">Осмечивание</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="/podbor-podryadchika/">Подбор подрядчика</a>
					</li>
				</ul>
			</li>
			<li class="footer__item">
				<div class="footer__subtitle">Горячая линия</div>
				<a class="footer__phone" href="tel:88003018735">8 (800) 301-87-35</a>
				<div class="footer__block-contacts">
					<a class="footer__mail" href="mailto:zakaz@zaboripodkluch.ru">zakaz@zaboripodkluch.ru</a>
					<span class="footer__time">9:00 - 18:00</span>
					<div class="footer__block-social">
						<span class="footer__whatsapp"></span>
						<span class="footer__viber"></span>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="container footer-bottom__container">
		<div class="author">
			Все материалы сайта являются объектами авторского права и защищаются законом РФ.<br />
			Запрещается любое копирование или иное использование информации без согласия правообладателя.
		</div>
	</div>
</footer>

<?/* Модальное окно Оформить тендер */ ?>
<div class="order_fence popup" id="order_fence">
	<form class="order_fence__form js-form">
		<div class="close">
			<span class="close_icn"></span>
		</div>
		<div class="order_fence__title">Оформить тендер на забор</div>
        <div class="order_fence__order_block">
            <div class="order_fence__title order_fence__second_title">Параметры забора</div>
            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Вид забора:</span>
                <select name="type_fence">
                    <option selected>Профнастил</option>
                    <option>Сетка-рабица</option>
                    <option>Металоштакетник</option>
                    <option>Поликарбонат</option>
                    <option>Сварные</option>
                    <option>Шумозащитные</option>
                    <option>3D</option>
                </select>
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Основание забора:</span>
                <select name="pillars">
                    <option selected>Забивные столбы</option>
                    <option>Утрамбовка щебнем</option>
                    <option>Бетонирование столбов</option>
                    <option>Ленточный фундамент</option>
                    <option>Кирпичные столбы</option>
                </select>
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Ворота:</span>
                <select name="gate">
                    <option selected>Не нужны</option>
                    <option>Откатные</option>
                    <option>Откатные с автоматикой</option>
                    <option>Распашные</option>
                    <option>Распашные с автоматикой</option>
                </select>
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Высота забора:</span>
                <input type="text" name="height_fence" required placeholder="2 метра" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Длина забора:</span>
                <input type="text" name="lenght_fence" required placeholder="200 метров" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Описание заказа:</span>
                <textarea placeholder="Описание заказа" name="descript"></textarea>
            </label>
        </div>

        <div class="order_fence__user_block">
            <div class="order_fence__title callback__second_title">Данные клиента</div>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Место установки:</span>
                <input type="text" name="place_fence" required placeholder="Населенный пункт" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Дата установки:</span>
                <input type="date" name="date_fence" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Введите ваше имя:</span>
                <input type="text" name="name" placeholder="Иван" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">Номер телефона:</span>
                <input type="tel" name="phone" required placeholder="+7 (___) ___-__-__" required data-validate-field="tel" data-validate-rules="phone" />
            </label>

            <label class="order_fence__lbl">
                <span class="order_fence__lbl_text">E-mail:</span>
                <input type="text" name="email" placeholder="info@site.ru" />
            </label>

            <label class="checkbox checkbox__lbl">
                <input type="checkbox" checked="" name="Согласие" />
                <span class="order_fence__lbl_text checkbox__lbl_text">Я согласен с
				<a class="checkbox__link" href="/privacy/" target="_blank">политикой конфиденциальности</a>
			</span>
            </label>
        </div>
		<button class="button primary js-order-fence">Отправить</button>
	</form>
	<div class="black"></div>
</div>

<?/* Модальное окно квиз */ ?>
<div class="quiz__popup popup" id="quiz">
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => "",
			"PATH" => "/inc_areas/quiz.php",
			"BLOCK" => 'modal'
		)
	);
	?>
	<div class="black"></div>
</div>

<?/*Модальное окно Спасибо*/ ?>
<div class="thanks popup" id="thanks">
	<div class="thanks__block">
		<div class="thanks__name"></div>
		<div class="thanks__text">
			Благодарим Вас за заполнение опросника по расчету стоимости ограждения!<br />
			Вашу заявку уже обрабатывают выбранные компании и отправят вам расчетную смету!<br /><br />
			Из них Вы сможете выбрать лучшего исполнителя!
		</div>
		<button type="button" class="thanks__btn btn">Спасибо</button>
	</div>
	<div class="black"></div>
</div>
<!-- Возврат вверх -->
<a id="button__up"></a>
<!-- Модальное окно для фотографий -->
<!-- <div class="photoView">
      <div class="photo__slider"></div>
      <div class="black"></div>
    </div> -->

<?/* JQuery */ ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?/* Slider click */ ?>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/slick.min.js"></script>

<?/* lazyload */ ?>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/lazyload.min.js"></script>

<!-- Modal Win -->
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/modal_win.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/modal_photo.js"></script>
<!-- JS -->
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/new_scripts.min.js"></script>



<!-- Mask and validation form -->
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/inputmask.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/just-validate.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/script.js"></script>
<?
if (strpos($APPLICATION->getCurPage(), 'domens-admin') != 0) {
?>
	<script type="text/javascript" src="/domens-admin/domens-admin.js"></script>
<?
}
?>

</body>

</html>