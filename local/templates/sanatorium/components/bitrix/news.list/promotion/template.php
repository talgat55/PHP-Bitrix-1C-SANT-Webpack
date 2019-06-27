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
<div id="promotion-block">
    <div class="container">
        <div class="first-row row     d-flex justify-content-between align-items-center">
                <div class="col-md-6 col-xs-12">
                    <h2 class="sub-title text-white">
                        Последние акции
                    </h2>
                </div>
                <div class="col-md-6 col-xs-12">
                    <a href="#" class=" d-flex align-items-center main-link   alt">
                        <span>Смотреть все акции</span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
        </div>
    </div>

    <div class="container">
        <div class="second-row row">


            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="item col-lg-4 col-md-6 col-xs-12">
                    <div class="img-block">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
                                    class="preview_picture  lazy"
                                    border="0"
                                    src="/images/transpaernt.png" data-src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                    width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                    height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                    style="float:left"
                            /></a>
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"> <? echo $arItem["NAME"] ?> </a>
                        </h3>
                        <div class="date">
                            <? echo $arItem["DISPLAY_ACTIVE_FROM"] ?>
                        </div>
                        <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="link-promotion">
                            Подробнее
                        </a>
                    </div>

                </div>

            <? endforeach; ?>
        </div>
    </div>

</div>
