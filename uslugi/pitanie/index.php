<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Питание");
?>
    <div class="main-content w-100  page-about">
        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
            "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        ); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h1 class="main-title">
                        <? $APPLICATION->ShowTitle() ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12  mb-5">
                    Питание отдыхающих осуществляется в трех обеденных залах.
                    Заполняемость первого зала - 144 посадочных места; второго - 60; третий обеденный зал рассчитан на питание 232 человек.
                    Пациенты VIP группы, проживающие в улучшенных номерах, обслуживаются в отдельном зале на 24 посадочных места.
                    <br>
                    <br>
                    В ЦР предлагаются следующие варианты питания:<br>
                    <br>
                    в трех обеденных залах 4-х разовое питание по заказному меню (выбор холодных и горячих блюд из 4-х предлагаемых, сбалансированное по химическому составу и калорийности), учитывая сезонный характер овощей и фруктов в регионе, предлагается два варианта меню (зимнее и летнее).
                    лечебно-диетическое питание, по назначению лечащего врача, согласно выборному меню из трех предлагаемых вариантов; <br>

                    каждая из диет характеризуется определенными качественным и количественным составом пищи, особенностями ее приготовления.<br>
                    <br>
                    в VIP зале улучшенное питание, организован чайный и кофейный столы. Предлагаются порционные продукты мелкой фасовки, не менее шести наименований холодных закусок и напитков, сохранение температурного режима горячих блюд обеспечивается в настольных электрических мармитах.
                    Диет.служба представлена врачом-диетологом и тремя медицинскими диетическими сестрами.<br>
                    <br>
                    Диетсестра указывает вновь прибывшим постоянные места, информирует о порядке оформления заказов, режиме работы столовой.
                    На отдельных столиках для отдыхающих размещают «витаминный стол» (овощи, зелень, салаты, закуски из морской капусты)
                    Врачом-диетологом ежедневно проводятся беседы по питанию, а при необходимости индивидуальные консультации для отдыхающих.<br>
                    <br>
                    В Центре работает Совет по питанию, председателем которого является заместитель главного врача по медицинской части, а в работе Совета участвуют медицинские работники - заведующие отделений.
                    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"gallery-chill", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "gallery",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "gallery-chill"
	),
	false
); ?>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>