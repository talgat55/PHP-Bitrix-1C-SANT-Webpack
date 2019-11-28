<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проживание");
?>
    <div class="main-content w-100  page-about page-live">
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
                    ФБУ Центр реабилитации ФСС РФ «Омский» рад видеть Вас в любое время!
        <br>
                    Сотрудники службы бронирования и размещения помогут Вам зарегистрироваться, доставить багаж в номер, а так же ответят на все интересующие Вас вопросы. Восьмиэтажный жилой корпус рассчитан на 475 мест.
                    <br>
                    К Вашим услугам уютные, комфортабельные, современные номера: <br>
                    2-местные номера первой категории; <br>
                    1-местные номера первой категории; <br>
                    номера повышенной комфортности, класса «Люкс». <br>
                    Каждый номер снабжен балконом, телевизором, холодильником, с/у, душем.
                    <br>
                    В номерах люкс для Вас также отдельная комната для переговоров, двуспальная кровать, система кондиционирования воздуха. В наших номерах созданы все условия для приятного и высококлассного отдыха клиентов Центра реабилитации.
                    <br>
                    Все корпуса Центра соединены между собой теплыми переходами, оснащены лифтами, пандусами, поручнями, что очень облегчает передвижение отдыхающих к месту процедур
                    <br>
                    Существует возможность бронирования гостиничных номеров по телефону и на сайте.
                    <br>
                    Номер повышенной комфортности, класса «Люкс»

                </div>
                <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"gallery-prozhivanie", 
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
			2 => "",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
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
			1 => "GALLERY",
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
		"COMPONENT_TEMPLATE" => "gallery-prozhivanie"
	),
	false
); ?>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>