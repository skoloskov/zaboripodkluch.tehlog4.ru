<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/inc_areas/top_block.php"
	)
);?> 
<?/* открытый квиз  <section class="quiz-section">
<div class="container quiz-section__container" id="open_quiz">
	<div class="quiz-section__header">
 <span class="quiz-section__title">Расчет стоимости забора</span>
 <span class="quiz-section__desc">(заполните опросник и отправьте компаниям для расчета стоимости ограждения под ключ)</span>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/inc_areas/quiz.php"
	)
);?>
</div>
 </section>*/ ?>
<?/* Секция Виды заборов */ ?>
<?$APPLICATION->IncludeComponent(
	"seologica:catalog.section.list",
	"slider_showcase",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "objects",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"USE_DOMENS_FOR_CACHE" => $_SERVER["HTTP_HOST"],
		"VIEW_MODE" => "LINE"
	)
);?>

<?/* Секция Инфографика преимуществ */ ?>
<section class="advantages">
    <div class="container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/inc_areas/advantages.php"
        )
    );?>
    </div>
</section>

<?/* Секция Подбора подрядчиков */ ?>
    <section class="parameter">
    <div class="container parameter__container">
        <h2 class="parameter__title section__title">
            Строительство заборов и ограждений в <?=$APPLICATION->GetPageProperty('regionSettings')['UF_INCITY']?> </h2>
        <p class="parameter__title_size-s">
            (список лучших подрядчиков)
        </p>
        <?/*<div class="parameter__block">
		<h3 class="parameter__subtitle">
		Подбор исполнителя по параметрам </h3>
		<form>
			<ul class="parameter__list">

		      <li class="parameter__item">
                <select class="parameter__select">
                  <option value="">По отзывам</option>
                  <option value="">По отзывам</option>
                  <option value="">По отзывам</option>
                </select>
              </li>
              <li class="parameter__item">
                <select class="parameter__select">
                  <option value="">Количество работ</option>
                  <option value="">Количество работ</option>
                  <option value="">Количество работ</option>
                </select>
              </li>

              <hr />

              <li class="parameter__item">
                <select class="parameter__select">
                  <option value="">По рейтингу</option>
                  <option value="">По рейтингу</option>
                  <option value="">По рейтингу</option>
                </select>
              </li>
              <li class="parameter__item">
                <select class="parameter__select">
                  <option value="">По отзывам</option>
                  <option value="">По отзывам</option>
                  <option value="">По отзывам</option>
                </select>
              </li>
				<li class="parameter__item"> <button type="submit" class="parameter__select-btn">Подобрать</button>
				<button class="parameter__reset-btn">Сбросить</button> </li>
			</ul>
		</form>
	</div>*/?>
    </div>
</section>
<?/* Секция компании */ ?>
    <section class="company">
    <div class="container company__container">
        <?
        /*$CompanyList = [];
    $arSelect = Array("ID", "NAME");
    $arFilter = Array("IBLOCK_ID"=>1, "ACTIVE"=>"Y",'PROPERTY_CITY'=>$APPLICATION->GetPageProperty('regionSettings')['UF_XML_ID']);
    $res = CIBlockElement::GetList(Array('ID'=>'DESC'), $arFilter, false, Array("nPageSize"=>500), $arSelect);

    while($ob = $res->GetNextElement())
    {
        $CompanyList [] = $ob->GetFields()['ID'];
    }*/
        $CompanyList = $APPLICATION->GetPageProperty('CompanyList');
        //echo '<pre>'.print_r($APPLICATION->GetPageProperty('CompanyList'), true).'</pre>';die();
        $GLOBALS['arrFilter'] = ['ID' => $CompanyList];
        $sort = "SHOW_COUNTER";
        $order = "desc";

        if (isset($_REQUEST['company_sort'])) {
            switch ($_REQUEST['company_sort']) {
                case 'free':
                    $sort = "PROPERTY_COMMANDS";
                    $order = "desc";
                    break;
                case 'works':
                    $sort = "PROPERTY_COMPLETED";
                    $order = "desc";
                    break;
                case 'years':
                    $sort = "PROPERTY_YEARS";
                    $order = "asc";
                    break;
                default:
                    break;
            }
        }
        ?> <?$APPLICATION->IncludeComponent(
            "seologica:catalog.section",
            "company_list",
            Array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/personal/basket.php",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPATIBLE_MODE" => "Y",
                "COMPONENT_TEMPLATE" => ".default",
                "DETAIL_URL" => "",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => $sort,
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER" => $order,
                "ELEMENT_SORT_ORDER2" => "desc",
                "ENLARGE_PRODUCT" => "STRICT",
                "FILTER_NAME" => "arrFilter",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "catalog",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => "",
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "OFFERS_LIMIT" => "5",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "18",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => "",
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "PROPERTY_CODE_MOBILE" => "",
                "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                "RCM_TYPE" => "personal",
                "SECTION_CODE" => "",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                "SEF_MODE" => "N",
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "N",
                "SHOW_FROM_SECTION" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_SLIDER" => "Y",
                "SLIDER_INTERVAL" => "3000",
                "SLIDER_PROGRESS" => "N",
                "TEMPLATE_THEME" => "blue",
                "USE_DOMENS_FOR_CACHE" => $_SERVER["HTTP_HOST"],
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_FILTER" => "Y",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "N"
            )
        );?>

<?/*Секция с товарами*/ ?> <?
$CompanyList = $APPLICATION->GetPageProperty('CompanyList');
$GLOBALS['arrFilter'] = ['ACTIVE' => 'Y'];//, 'PROPERTY_COMPANY' => $CompanyList];
?> <?$APPLICATION->IncludeComponent(
	"seologica:catalog.section",
	"zabor_list",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "SHOW_COUNTER",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "objects",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "show_more",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "6",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PROPERTY_CODE_MOBILE" => array(),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => isset($_REQUEST['section'])?html_entity_decode($_REQUEST['section']):'',
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_DOMENS_FOR_CACHE" => $_SERVER["HTTP_HOST"],
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
</div>
 </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>