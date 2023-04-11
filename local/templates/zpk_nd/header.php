<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="/favicon.svg" type="image/x-icon">

  <?/*Шрифты*/ ?>
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubik.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubik.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikblack.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikblack.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikblackitalic.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikblackitalic.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikbold.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikbold.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikbolditalic.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikbolditalic.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikitalic.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikitalic.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubiklight.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubiklight.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubiklightitalic.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubiklightitalic.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikmedium.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikmedium.woff2" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikmediumitalic.woff" as="fonts">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Rubikmediumitalic.woff2" as="fonts">


    <?/* Стилизация */ ?>
  <link type="text/css" rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/style.css" />
  <link type="text/css" rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/css/normalize.css" />

   <?/* Подключение Font Awesome */ ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <? $APPLICATION->ShowHead(); ?>
  <title>
    <? $APPLICATION->ShowTitle() ?>
  </title>
</head>

<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
var fired = false;
window.addEventListener('scroll', () => {
    if (fired === false) {
        fired = true;
        
        setTimeout(() => {
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
             m[i].l=1*new Date();
             for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
             k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
             (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

             ym(79619314, "init", {
                  clickmap:true,
                  trackLinks:true,
                  accurateTrackBounce:true,
                  webvisor:true
             });
        }, 1000)
    }
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/79619314" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<? $APPLICATION->ShowPanel() ?>

<?/* Header */ ?>
<header class="header">
    <div class="preheader">
        <div class="container">
            <div class="preheader__city">Москва</div>
            <div class="preheader__menu">
                <ul class="preheader__menu_list">
                    <li class="preheader__menu_item"><a href="">Каталог</a></li>
                    <li class="preheader__menu_item"><a href="">О сервисе</a></li>
                    <li class="preheader__menu_item"><a href="">Для заказчика</a></li>
                    <li class="preheader__menu_item"><a href="">Для исполнителя</a></li>
                </ul>
            </div>
            <div class="preheader__contacts">
                <a href="" class="preheader__contacts_social"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_telegramm.png"></a>
                <a href="" class="preheader__contacts_social"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_whatsapp.png"></a>
                <div class="preheader__contacts_phone"><a href="tel:+79955776175">+7 (995) 577-61-75</a></div>
                <div class="preheader__contacts_timework">пн. - пт. с 8:00 до 22:00</div>
            </div>
        </div>
    </div>
    <div class="container main_header">
        <div class="main_header__logo">
            <img class="main_header__logo_img" src="<?=SITE_TEMPLATE_PATH?>/img/logo_header.png">
            <div class="main_header__logo_text">
                <div class="main_header__logo_text_title">Заборы под ключ</div>
                <div class="main_header__logo_text_description">Тендер площадка строительных компаний</div>
            </div>
        </div>
        <div class="main_header__search">Что Вы ищите?</div>
        <div class="main_header__button">
            <a href="" class="main_header__button_link button_tender">Добавить тендер</a>
        </div>
    </div>
</header>
<? /* $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/inc_areas/menu.php"
    )
); */ ?>

<?/* Главная секция */ ?>
<main class="main">
