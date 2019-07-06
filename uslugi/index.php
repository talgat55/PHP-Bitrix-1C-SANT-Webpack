<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
    <div class="main-content w-100  page-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main-plain", Array(
                            "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                            "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                        ),
                            false
                        ); ?>
                        <h1 class="main-title ">
                            Услуги
                        </h1>
                        <div id="service-page " class="w-100">
                            <? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "service-page", Array(
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
                                "FILTER_NAME" => "sectionsFilter",    // Имя массива со значениями фильтра разделов
                                "IBLOCK_ID" => "5",    // Инфоблок
                                "IBLOCK_TYPE" => "services",    // Тип инфоблока
                                "SECTION_CODE" => "",    // Код раздела
                                "SECTION_FIELDS" => array(    // Поля разделов
                                    0 => "",
                                    1 => "",
                                ),
                                "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
                                "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
                                "SECTION_USER_FIELDS" => array(    // Свойства разделов
                                    0 => "",
                                    1 => "",
                                ),
                                "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
                                "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
                                "VIEW_MODE" => "LINE",    // Вид списка подразделов
                            ),
                                false
                            ); ?>


                            <? $APPLICATION->IncludeComponent(
                                "dev2fun:section.element.group",
                                "service-page",
                                Array(
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
                                    "DISPLAY_SECTION_PICTURE" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("", ""),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "5",
                                    "IBLOCK_TYPE" => "services",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "NEWS_COUNT" => "40",
                                    "NEWS_SHOW_SECTION" => "Y",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION_ID" => array(""),
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array("", ""),
                                    "SECTION_CHECK_EMPTY" => "Y",
                                    "SECTION_CHILD" => "Y",
                                    "SECTION_CNT_ELEMENTS" => "N",
                                    "SECTION_CODE" => "",
                                    "SECTION_COUNT" => "30",
                                    "SECTION_DEPTH" => "",
                                    "SECTION_DETAIL_URL" => "",
                                    "SECTION_FILTER_NAME" => "",
                                    "SECTION_ID" => array(""),
                                    "SECTION_PREVIEW_TRUNCATE_LEN" => "",
                                    "SECTION_PROPERTY_CODE" => array("SORT", "NAME", ""),
                                    "SECTION_SORT_BY1" => "ID",
                                    "SECTION_SORT_BY2" => "SORT",
                                    "SECTION_SORT_ORDER1" => "DESC",
                                    "SECTION_SORT_ORDER2" => "ASC",
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SORT_BY1" => "ID",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "TEMP_OUTPUT_ELEMETS" => "element.php",
                                    "TEMP_OUTPUT_SECTIONS" => "subSection.php"
                                )
                            ); ?>


                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>