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

  <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Montserrat-Regular.woff" as="fonts">
  <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Montserrat-Regular.woff2" as="fonts">
  <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Montserrat-Bold.woff" as="fonts">
  <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/Montserrat-Bold.woff2" as="fonts">
  <link rel="preload" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/HelveticaNeueCyr.woff" as="fonts">

  <?/* Стилизация */ ?>
  <link type="text/css" rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/css/style.css" />
  <link type="text/css" rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/css/normalize.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/css/jquery-ui.css">

  <? $APPLICATION->ShowHead(); ?>
  <title>
    <? $APPLICATION->ShowTitle() ?>
  </title>
</head>

<body>
  <? $APPLICATION->ShowPanel() ?>
  <?/* Header */ ?>
  <header class="header">
      <div class="preheader">
          <div class="container">
              <div class="preheader_city"><i class="fas fa-map-marker-alt"></i>Москва<i class="fas fa-chevron-down"></i></div>
              <div class="preheader_phone"><a href="tel:88003018735">8 (800) 301-87-35</a></div>
          </div>
      </div>
    <div class="container header__container">
        <div class="main_menu">
            <nav class="burger">
                <button type="button" class="burger_toggle">
                    <span class="burger_top"></span>
                    <span class="burger_middle"></span>
                    <span class="burger_bottom"></span>
                </button>
                <a href="/" class="header__catalog">Каталог</a>
            </nav>
        </div>
        <div class="header__el header__desc">
            <a class="header__link" href="/">
                <img class="header__img" src="<?= SITE_TEMPLATE_PATH; ?>/img/logo.png" alt="<?= city_replace($APPLICATION->GetPageProperty('pageSettings')['UF_ALTLOGO']) ?>" title="<?= city_replace($APPLICATION->GetPageProperty('pageSettings')['UF_ALTLOGO']) ?>" />
            </a>
        </div>
      <div class="header__el header__phone-block">
        <div class="header__phone-block_position">
            <button type="button" class="header__btn btn">+ Оформить тендер</button>
        </div>
      </div>
    </div>
  </header>
  <?/* Главная секция */ ?>
  <!-- Main -->
  <main class="main">