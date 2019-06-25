<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная");

$APPLICATION->SetTitle("Главная");
?><? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main-slider",
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
        "COMPONENT_TEMPLATE" => "main-slider",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "NAME",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "banners_sliders",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
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
            0 => "KINDS",
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
        "STRICT_SECTION_CHECK" => "Y"
    ),
    false
); ?><br>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "home-slider",
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
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "banners_sliders",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
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
            0 => "TITLE",
            1 => "FLOAT_TEXT",
            2 => "",
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
        "STRICT_SECTION_CHECK" => "Y",
        "COMPONENT_TEMPLATE" => "home-slider"
    ),
    false
); ?><br>
    <div id="home-sescription">
        <div class="container">
            <div class="row">
                <h2 class="sub-title">
                    Центр реабилитации ФСС РФ "Омский".<br> Официальный сайт.
                </h2>
                <p>
                    <b>Центр реабилитации «Омский»</b> расположен <b>в центре г. Омска,</b> здесь ежедневно <b>получает
                        лечение около 700
                        человек.</b> На прошедшем в мае 2013 года форуме «Здравница-2013» ФБУ. Центр реабилитации
                    «Омский» был <b>награжден
                        золотой медалью в номинации «Лучшая специализированная Здравница-2013».</b> Форум проходил 20-23
                    мая в г.Сочи.
                </p>

                <a href="#" class=" d-flex align-items-center main-link">
                    <span>Подробнее о центре</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="key-advantages">
        <div class="container">
            <div class="row">
                <h2 class="sub-title">
                    Ключевые преимущества
                </h2>
                <div class="w-100  row">
                    <div class="item col-lg-3  col-xs-12 ">
                        <div class="image-block">
                            <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-1.png"
                                 alt="изображение"/>
                        </div>
                        <div class="text">
                            Индивидуальный подход<br>
                            к каждому пациенту
                        </div>
                    </div>

                    <div class="item col-lg-3  col-xs-12 ">
                        <div class="image-block">
                            <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-2.png"
                                 alt="изображение"/>
                        </div>
                        <div class="text">
                            Наличие уникальных<br>
                            природных факторов
                        </div>
                    </div>
                    <div class="item col-lg-3  col-xs-12 ">
                        <div class="image-block">
                            <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-3.png"
                                 alt="изображение"/>
                        </div>
                        <div class="text">
                            Широкий спектр мед.<br> деятельности
                        </div>
                    </div>

                    <div class="item col-lg-3  col-xs-12 ">
                        <div class="image-block">
                            <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-4.png"
                                 alt="изображение"/>
                        </div>
                        <div class="text">
                            Соответствие услуг международным<br> стандартам качества
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>