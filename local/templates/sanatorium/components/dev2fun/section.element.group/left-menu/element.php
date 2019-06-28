<?
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

?>
<li class="element-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
    <?

    $image = CFile::GetPath($arResult['PROPERTIES']['IMAGE_SERVICE']['VALUE']);
    $image_hover = CFile::GetPath($arResult['PROPERTIES']['IMAGE_HOVER_SERVICE']['VALUE']);
    //  var_dump($image);
    $image = $image ? $image : '/images/transpaernt.png';
    $image_hover = $image_hover ? $image_hover : '/images/transpaernt.png';
    ?>

    <a href="<? echo $arResult["DETAIL_PAGE_URL"] ?>" class=" d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="images-icon">
                <img class="main-icon" src="<?= $image; ?>" alt="иконка"/>
                <img class="hover-icon" src="<?= $image_hover; ?>" alt="иконка"/>
            </div>
            <span><? echo $arResult["NAME"] ?></span>
        </div>


        <img class="arrow-main" src="/images/menu-arrow.png" alt="иконка"/>
        <img class="arrow-hover" src="/images/menu-arrow-hover.png" alt="иконка"/>

    </a>
</li>