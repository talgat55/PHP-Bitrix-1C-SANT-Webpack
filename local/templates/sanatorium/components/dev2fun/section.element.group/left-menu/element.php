<?
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

?>
<li class="element-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
    <?

//    $image = CFile::GetPath($arResult['PROPERTIES']['IMAGE_SERVICE']['VALUE']);
//
//    $redySvg = file_get_contents(__DIR__ .'/../../../../../../../'.$image);

    ?>

    <a href="<? echo $arResult["DETAIL_PAGE_URL"] ?>" class=" d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="images-icon">
<!--                --><?//= $redySvg; ?>
            </div>
            <span><? echo $arResult["NAME"] ?></span>
        </div>


        <img class="arrow-main" src="/images/menu-arrow.png" alt="иконка"/>
        <img class="arrow-hover" src="/images/menu-arrow-hover.png" alt="иконка"/>

    </a>
</li>