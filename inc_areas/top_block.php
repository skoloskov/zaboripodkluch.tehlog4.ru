<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
  <section class="hero">
    <div class="container hero__container">
      <h1 class="main__title hero__title">
        <?=city_replace($APPLICATION->GetPageProperty('pageSettings')['UF_H1'])?><br />
		Найдено <span class="hero__number"><?= ($APPLICATION->GetPageProperty('CompanyList')!== null ? count($APPLICATION->GetPageProperty('CompanyList')) : count($APPLICATION->GetPageProperty('CompanyList'))) ?></span> проверенных подрядчиков!
      </h1>
      <div class="hero__desc">
        Разместите заявку по Вашим параметрам на расчет стоимости для сравнения предложений и цены на строительство забора
      </div>
      <button class="hero__btn btn modal-quiz">
        Отправить заявку<br />
        <small class="hero__small">и получить лучшее предложение</small>
      </button>
    </div>
  </section>
