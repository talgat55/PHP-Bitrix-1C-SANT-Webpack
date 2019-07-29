<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?>

<footer class="w-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xs-12">
                <? $APPLICATION->IncludeComponent(
                    "dev2fun:section.element.group",
                    "footer-menu",
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
                        "DETAIL_URL" => "#SITE_DIR#/uslugi/?ELEMENT_ID=#ELEMENT_ID#",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_SECTION_PICTURE" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "CODE",
                            2 => "XML_ID",
                            3 => "NAME",
                            4 => "TAGS",
                            5 => "SORT",
                            6 => "PREVIEW_TEXT",
                            7 => "PREVIEW_PICTURE",
                            8 => "DETAIL_TEXT",
                            9 => "DETAIL_PICTURE",
                            10 => "DATE_ACTIVE_FROM",
                            11 => "ACTIVE_FROM",
                            12 => "DATE_ACTIVE_TO",
                            13 => "ACTIVE_TO",
                            14 => "SHOW_COUNTER",
                            15 => "SHOW_COUNTER_START",
                            16 => "IBLOCK_TYPE_ID",
                            17 => "IBLOCK_ID",
                            18 => "IBLOCK_CODE",
                            19 => "IBLOCK_NAME",
                            20 => "IBLOCK_EXTERNAL_ID",
                            21 => "DATE_CREATE",
                            22 => "CREATED_BY",
                            23 => "CREATED_USER_NAME",
                            24 => "TIMESTAMP_X",
                            25 => "MODIFIED_BY",
                            26 => "USER_NAME",
                            27 => "",
                        ),
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
                        "PARENT_SECTION_ID" => array(),
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "ALL",
                            1 => "",
                        ),
                        "SECTION_CHECK_EMPTY" => "Y",
                        "SECTION_CHILD" => "Y",
                        "SECTION_CNT_ELEMENTS" => "N",
                        "SECTION_CODE" => "",
                        "SECTION_COUNT" => "30",
                        "SECTION_DEPTH" => "",
                        "SECTION_DETAIL_URL" => "",
                        "SECTION_FILTER_NAME" => "",
                        "SECTION_ID" => array(),
                        "SECTION_PREVIEW_TRUNCATE_LEN" => "",
                        "SECTION_PROPERTY_CODE" => array(
                            0 => "NAME",
                            1 => "",
                        ),
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
                        "TEMP_OUTPUT_SECTIONS" => "subSection.php",
                        "COMPONENT_TEMPLATE" => "footer-menu"
                    ),
                    false
                ); ?>
            </div>
            <div class="col-lg-3 col-xs-12">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer-menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "footer",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "footer",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "footer-menu"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
    <div class="container bottom-footer">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <p class="copyright">
                    © 2019 ФГУ Центр реабилитации ФСС РФ «Омский»
                </p>
            </div>
            <div class="col-md-5 col-xs-12 text-right">
                <a href="#" class="link-scroll-up">
                    Подняться наверх
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 text-center">
                <a target="_blank" class="bottom-copyright" title="Перейти на сайт разработчика"
                   href="http://asmart-group.ru/">Сайт разработан IT-company <span>ASMART</span></a>
            </div>
        </div>
    </div>
</footer>
</div>

</main>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/success_send_mail.php",
    Array(),
    Array("MODE" => "html")
);
?>


<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/fontawesome-all.min.css">


<? $APPLICATION->ShowProperty('FooterJS'); ?>
<? $APPLICATION->ShowProperty('BeforeBodyClose'); ?>
</body>
</html>