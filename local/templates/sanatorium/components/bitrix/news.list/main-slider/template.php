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
<div id="main-slider">


    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?

        if ($GLOBALS['theme'] == $arItem["DISPLAY_PROPERTIES"]['KINDS']['VALUE_XML_ID']) :

            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <img
                    class="banner-img"
                    border="0"
                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                    width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                    style="float:left"
            />
            <div class="container position-relative h-100">
                <div class="row">
                        <h1 class="main-title">
                            <?= $arItem["NAME"] ?>
                        </h1>
                    </div>
            </div>
            <!--        $arItem["DISPLAY_PROPERTIES"]-->
        <?php endif; ?>
    <? endforeach; ?>

</div>
