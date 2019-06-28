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
$this->addExternalCss("/local/templates/sanatorium/assets/build/css/slick.css");
$this->addExternalCss("/local/templates/sanatorium/assets/build/css/slick-theme.css");

$this->addExternalJS("/local/templates/sanatorium/assets/build/js/slick.min.js");

?>
<div class="home-slider">
<div class="container  position-relative  ">
    <div class="row ">
        <div class="col-sm-12 col-xs-12">

        <ul class="home-slider-wrap">

            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?

                $textBlock = '<div class="text-block  '.$arItem["DISPLAY_PROPERTIES"]["FLOAT_TEXT"]["VALUE_XML_ID"].'  col-md-6 col-xs-12">

                        <h2 class="title">
                            ' . htmlspecialchars_decode($arItem["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"]["TEXT"]) . '
                        </h2>
                        <div class="text">
                            ' . $arItem["PREVIEW_TEXT"] . '
                        </div>
                        <a href="#" class="link-more d-flex align-items-center main-link" >
                        <span>Подробнее об услуге </span>
                        <i class="fas fa-chevron-circle-right"></i>
                        </a>

                    </div>';

                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="item <?= $arItem["DISPLAY_PROPERTIES"]["FLOAT_TEXT"]["VALUE_XML_ID"] ; ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="row d-flex align-items-center">


                        <? if ($arItem["DISPLAY_PROPERTIES"]['FLOAT_TEXT']['VALUE_XML_ID'] == 'left') { ?>

                            <?= $textBlock; ?>

                        <? } ?>
                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <div class="blog-img col-md-6 col-xs-12">


                                <img
                                        class="preview_picture"
                                        border="0"
                                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                        width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                        height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                        title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                        style="float:left"
                                />
                            </div>
                        <? endif ?>
                        <? if ($arItem["DISPLAY_PROPERTIES"]['FLOAT_TEXT']['VALUE_XML_ID'] == 'right') { ?>

                            <?= $textBlock; ?>

                        <? } ?>
                    </div>
                </li>
            <? endforeach; ?>

        </ul>
        <ul class="home-slider-arrow">
            <li>
                <a href="#"  class="prev">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="#" class="next">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
    </div>
</div>
</div>
