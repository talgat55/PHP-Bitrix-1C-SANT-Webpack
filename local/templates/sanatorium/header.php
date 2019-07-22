<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID; ?>" lang="<?= LANGUAGE_ID; ?>" class="<? $APPLICATION->ShowProperty('HtmlClass'); ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <title><? $APPLICATION->ShowTitle(); ?></title>


    <? $APPLICATION->ShowMeta("keywords") ?>
    <? $APPLICATION->ShowMeta("description") ?>
    <? $APPLICATION->ShowHeadStrings() ?>
    <? $APPLICATION->ShowCSS(); ?>

    <?php
    //    $APPLICATION->AddHeadScript('/bitrix/templates/.default/additional.js');
    //    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/build/css/bootstrap.min.css");

    //    $this->getTemplate()->addExternalJs("/local/addcss.css");
    ?>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/app.css">

    <script src="<?= SITE_TEMPLATE_PATH; ?>/assets/build/global.js"></script>
    <? $APPLICATION->ShowHeadScripts() ?>

    <?php

    $APPLICATION->AddHeadScript("/local/templates/sanatorium/assets/build/js/jquery.lazy.min.js");

    if ($APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/about/') {

        $APPLICATION->AddHeadScript("//api-maps.yandex.ru/2.1/?lang=ru_RU");

    }


    $APPLICATION->AddHeadScript("/local/templates/sanatorium/assets/build/app.js");

    $GLOBALS['theme'] = 'summer';
    ?>
</head>

<body class="<? $APPLICATION->ShowProperty('BodyClass'); ?>   summer-theme" <? $APPLICATION->ShowProperty('BodyTag'); ?> >
<?
$APPLICATION->ShowPanel();
?>
<main class="<? $APPLICATION->ShowProperty('MainClass'); ?>   position-relative">
    <header>
        <div id="logo">
            <a href="/" title="Перейти на главную страницу">
                <div class="img-block d-flex justify-content-between ">
                    <img style="max-width: 100%;" src="/images/logo-left.png" alt="Логотип">
                    <img style="max-width: 100%;" src="/images/logo-right.png" alt="Логотип">
                </div>
                <div class="text-block">
                    <div class="first">«Омский»</div>
                    <div class="second">центр реабилитации</div>
                </div>
            </a>
        </div>
        <? $APPLICATION->IncludeComponent(
            "dev2fun:section.element.group",
            "left-menu",
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
                "DETAIL_URL" => "#SITE_DIR#/services/detail.php?ID=#ELEMENT_ID#",
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
                "COMPONENT_TEMPLATE" => "left-menu"
            ),
            false
        ); ?>

    </header>
    <a id="mobile-toggle" href="#menu" class="mobile-toggle hamburger hamburger--collapse hamburger--3dx  ">
                                 <span class="hamburger-box">
                                     <span class="hamburger-inner"></span>
                                 </span>
    </a>
    <div id="primary">
        <div id="top-bar">
            <div class="top">
                <div class="row">
                    <div class="first col-lg-6 col-xs-12 d-flex align-items-center">

                        <ul class="list-info d-flex">
                            <li>
                                <a class="d-flex align-items-center" href="tel:+7 (3812) 23-15-32">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>
                                        +7 (3812) 23-15-32
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="#">
                                    <i class="fas fa-location-arrow"></i>
                                    <p>
                                        г. Омск-12, ул. Березовая, д. 1
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="mailto:sanom@mail.ru">
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                        sanom@mail.ru
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="second col-lg-6 col-xs-12">

                        <ul class="list-actions d-flex justify-content-end">
                            <li>
                                <a class="d-flex align-items-center" href="/search">
                                    <img src="/images/search.png" alt="Иконка"/>
                                    <p>
                                        Поиск по сайту
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="#">
                                    <img class="eng-img" src="/images/eng.png" alt="Иконка"/>
                                    <img class="ru-img" src="/images/eng.png" alt="Иконка"/>
                                    <p>
                                        english version
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center  bvi" href="mailto:sanom@mail.ru">
                                    <img src="/images/eye.png" alt="Иконка"/>
                                    <p>
                                        версия для слабовидящих
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            ); ?>
        </div>

