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
            <div class="row">
                <ul class="staff-list d-flex">
                    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                        <?= $arResult["NAV_STRING"] ?><br/>
                    <? endif; ?>
                    <? $i= 1; ?>
                    <? foreach ($arResult["ITEMS"] as  $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>

                    <li class="staff-item  col-md-2 col-xs-12" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
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
                            <? else: ?>
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
                            <? endif; ?>
                        <? endif ?>

                        <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                            <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                               <h3 class="title"><? echo $arItem["NAME"] ?></h3>

                            <? else: ?>
                                <? echo $arItem["NAME"] ?>
                            <? endif; ?>
                        <? endif; ?>
                        <div class="position">
                            <?
                                foreach ($arItem["DISPLAY_PROPERTIES"]['POSITION']['VALUE']  as $key => $item_position){
                                    if($key !='0'){
                                        echo ', ';
                                    }
                                    echo $item_position;


                                }
                            ?>
                        </div>


                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <div style="clear:both"></div>
                        <? endif ?>

                        <?
                            if($i =='5'){
                                $i=1;

                            }else{
                                $i++;
                            }
                        ?>
                        </li>
                    <? endforeach; ?>

                </ul>
                <div class="pagination-wrapper w-100">
                    <a href="#" class="load-more d-flex align-items-center main-link">
                        <span>Показать ещё </span>
                        <i class="fas fa-sync-alt"></i>
                    </a>
                </div>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                    <?= $arResult["NAV_STRING"] ?>
                <? endif; ?>
            </div>
        </div>
    </div>
</div>
