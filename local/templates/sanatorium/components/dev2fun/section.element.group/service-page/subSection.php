<?
//global $arSectionsChild, $arParams;
global $arParams;
?>
<ul class="list-service-cats ">
<?  $k =0;
    foreach ($GLOBALS['arSectionsChild'] as $key => $arSectionChild) { ?>
	<?

	$this->AddEditAction($arSectionChild['ID'], $arSectionChild['EDIT_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSectionChild['ID'], $arSectionChild['DELETE_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));

	$activeClass = $k == 0 ? 'active' : '';
	?>
	<li class="item  <?=$activeClass; ?>  <?=$arSectionChild['ID'];?>" id="<?=$arSectionChild['ID'];?>">
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

		<? if($arSectionChild["ITEMS"]){
            echo '<ul class="m-l-30  row ">';
//            $i =1;
			foreach ($arSectionChild["ITEMS"] as $kSubItems => $vSubItems) {
//                if($i == 1){
//                    echo '<div class="d-flex w-100">';
//                }
				$GLOBALS['resItems'] = $vSubItems;

					include(__DIR__.'/'.$arParams['TEMP_OUTPUT_ELEMETS']);

				unset($GLOBALS['resItems']);
//                if($i == 6){
//                    echo '</div>';
//                    $i =1;
//                }else{
//                    $i++;
//                }
			}

            echo '</ul>';
		} ?>
		<? if($arSectionChild["SECTION_CHILD"]){
			$GLOBALS['arSectionsChild'] = $arSectionChild["SECTION_CHILD"];
			include(__DIR__.'/'.$arParams['TEMP_OUTPUT_SECTIONS']);
		} ?>
	</li>
<?

        $k ++;
    } ?>
</ul>