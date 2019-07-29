<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
    <div class="main-content w-100  page-main  search-page ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">

                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main-plain", Array(
                        "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                    ),
                        false
                    ); ?>
                    <h1 class="main-title">
                        Поиск
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12  main-text">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search-page", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"RESTART" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
			0 => "no",
		),
		"arrWHERE" => array(
			0 => "iblock_news",
			1 => "iblock_staff",
			2 => "iblock_actions",
			3 => "iblock_reviews",
			4 => "iblock_services",
			5 => "iblock_banners_sliders",
			6 => "iblock_rest_entity",
		),
		"COMPONENT_TEMPLATE" => "search-page"
	),
	false
);?>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>