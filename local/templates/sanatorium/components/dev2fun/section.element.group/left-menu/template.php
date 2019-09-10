<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
* 
* @author dev2fun (darkfriend)
* @copyright darkfriend <hi@darkfriend.ru>
* @version 0.2.12
* 
*/
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
$GLOBALS['arParams'] = $arParams;
?>
<nav id="header-service-menu">

    <? if($arResult['ITEMS']) {
        echo '<ul class="parent-list">';
        foreach ($arResult['ITEMS'] as $resItems) {
            $component->recRender(
                array(
                    'arResult' => $resItems,
                    'arParams' => $arParams,
                    'path' => $_SERVER['DOCUMENT_ROOT'].dirname($templateFile),
                ),
                'TEMP_OUTPUT_ELEMETS',
                'resItems'
            );
        }
        echo '</ul>';
    } ?>
    <?
    echo $component->render($arResult,$arParams,$templateFile);
    ?>

</nav>


<div >
    <a href="#" class="link-feedback d-flex justify-content-between align-items-center">
        <span>Обратная связь</span>
        <i class="fas fa-phone-alt"></i>
    </a>
</div>
