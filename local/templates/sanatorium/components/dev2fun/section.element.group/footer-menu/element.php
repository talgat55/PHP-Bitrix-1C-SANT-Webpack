<?
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

?>
<li class="element-item" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["PREVIEW_PICTURE"])):?>
		<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arResult["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<a href="<?=$arResult["DETAIL_PAGE_URL"]?>"><img
					class="preview_picture"
					border="0"
					src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/></a>
		<?else:?>
			<img
				class="preview_picture"
				border="0"
				src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
				width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
				style="float:left"
				/>
		<?endif;?>
	<?endif?>
    <a href="<?echo $arResult["DETAIL_PAGE_URL"]?>"> <?echo $arResult["NAME"]?> </a>
</li>