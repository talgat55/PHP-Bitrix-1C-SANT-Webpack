<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "main",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
); ?>

<div id="service-page " class="w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="row">

                    <h1 class="main-title  ">
                        Услуги
                    </h1>
                    <? if ($arParams["USE_RSS"] == "Y"): ?>
                        <?
                        if (method_exists($APPLICATION, 'addheadstring'))
                            $APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="' . $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"] . '" href="' . $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"] . '" />');
                        ?>
                        <a href="<?= $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"] ?>" title="rss"
                           target="_self"><img
                                    alt="RSS" src="<?= $templateFolder ?>/images/gif-light/feed-icon-16x16.gif"
                                    border="0"
                                    align="right"/></a>
                    <? endif ?>

                    <? if ($arParams["USE_SEARCH"] == "Y"): ?>
                        <?= GetMessage("SEARCH_LABEL") ?><? $APPLICATION->IncludeComponent(
                            "bitrix:search.form",
                            "flat",
                            Array(
                                "PAGE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"]
                            ),
                            $component
                        ); ?>
                        <br/>
                    <? endif ?>
                    <? if ($arParams["USE_FILTER"] == "Y"): ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:catalog.filter",
                            "",
                            Array(
                                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "FILTER_NAME" => $arParams["FILTER_NAME"],
                                "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                                "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                "CACHE_TIME" => $arParams["CACHE_TIME"],
                                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            ),
                            $component
                        );
                        ?>
                        <br/>
                    <? endif ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "service-page",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COUNT_ELEMENTS" => "Y",
                            "FILTER_NAME" => "sectionsFilter",
                            "IBLOCK_ID" => "5",
                            "IBLOCK_TYPE" => "services",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array(0 => "", 1 => "",),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array(0 => "", 1 => "",),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "2",
                            "VIEW_MODE" => "LINE"
                        )
                    ); ?><? $APPLICATION->IncludeComponent(
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
