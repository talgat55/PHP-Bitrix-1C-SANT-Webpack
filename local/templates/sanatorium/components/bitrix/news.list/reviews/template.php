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
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <ul id="review-list" class="w-100 list-insert">


                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li class="review-item item-insert" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="content">
                            <? echo $arItem["PREVIEW_TEXT"]; ?>
                        </div>
                        <div class="add-field">
                            <div class="fio text-right">
                                <? echo $arItem["NAME"] ?>,  <span><?=$arItem["DISPLAY_PROPERTIES"]['CITY']['VALUE']; ?></span>
                            </div>
                            <div class="date text-right">
                                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                                    <? echo $arItem["DISPLAY_ACTIVE_FROM"] ?> г.
                                <? endif ?>
                            </div>

                        </div>

                    </li>
                <? endforeach; ?>

            </ul>

            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <?= $arResult["NAV_STRING"] ?>
            <? endif; ?>
        </div>
    </div>
</div>
