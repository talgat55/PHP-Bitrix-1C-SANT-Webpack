<?
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<li class="service-item" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
    <?

    $image = CFile::GetPath($arResult['PROPERTIES']['IMAGE_SERVICE']['VALUE']);
    $redySvg = file_get_contents(__DIR__ .'/../../../../../../../'.$image);
    //  var_dump($image);

    ?>

	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arResult["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<a   class="link" href="<?echo $arResult["DETAIL_PAGE_URL"]?>">
                <div class="images-icon">
                   <?=$redySvg; ?>
                </div>


                <h4 class="title"><?echo $arResult["NAME"]?></h4>
            </a>


		<?endif;?>
	<?endif;?>

</li>