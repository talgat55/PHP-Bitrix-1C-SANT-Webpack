<?
//global $arSectionsChild, $arParams;
global $arParams;
?>
<ul id="header-service-menu-list">
    <?   $i =0; ?>
<? foreach ($GLOBALS['arSectionsChild'] as  $arSectionChild) { ?>
	<?
	$this->AddEditAction($arSectionChild['ID'], $arSectionChild['EDIT_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSectionChild['ID'], $arSectionChild['DELETE_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li class="item  " id="<?=$this->GetEditAreaId($arSectionChild['ID']);?>">
		<?if( !empty($arItems['PICTURE']) && $arParams["DISPLAY_SECTION_PICTURE"]!="N" ){?>
			<img
				border="0"
				src="<?=$arSectionChild["PICTURE"]["SRC"]?>"
				width="<?=$arSectionChild["PICTURE"]["WIDTH"]?>"
				height="<?=$arSectionChild["PICTURE"]["HEIGHT"]?>"
				alt="<?=$arSectionChild["PICTURE"]["ALT"]?>"
				title="<?=$arSectionChild["PICTURE"]["TITLE"]?>"
				style="float:left"
			/>
		<? } ?>

		<a href="#" class="sub-section d-flex justify-content-between align-items-center ">
			 <span><?=$arSectionChild["NAME"]?></span>
            <i class="fas fa-chevron-circle-right"></i>
		</a>
		<? if($arSectionChild["ITEMS"]){



            echo '<ul class="child-list">  ';
			foreach ($arSectionChild["ITEMS"] as $kSubItems => $vSubItems) {
				$GLOBALS['resItems'] = $vSubItems;

					include(__DIR__.'/'.$arParams['TEMP_OUTPUT_ELEMETS']);

				unset($GLOBALS['resItems']);
			}
            echo '</ul>';
		} ?>
		<? if($arSectionChild["SECTION_CHILD"]){
			$GLOBALS['arSectionsChild'] = $arSectionChild["SECTION_CHILD"];
			include(__DIR__.'/'.$arParams['TEMP_OUTPUT_SECTIONS']);
		} ?>
	</li>
    <?  $i++; ?>
<? } ?>
</ul>