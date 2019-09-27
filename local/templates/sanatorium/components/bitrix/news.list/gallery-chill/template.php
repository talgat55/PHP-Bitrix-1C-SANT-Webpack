<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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


$this->addExternalCss("/local/templates/sanatorium/assets/build/css/lightbox.min.css");
$this->addExternalJS("/local/templates/sanatorium/assets/build/js/lightbox.min.js");
?>
<div id="gallery-block">
    <div class="container">
        <div class="row">
            <ul class="lists row w-100  col-md-12">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                <li class="img-item col-lg-3 col-md-6  col-sm-12"  style="background: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>);"><a  href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" data-lightbox="image"></a></li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>

</div>