<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div id="footer-navigation" >
<h2 class="sub-title">
    Навигация
</h2>
<h3 class="title">
    Организация
</h3>
        <? if (!empty($arResult)): ?>
                <ul class="footer-menu">

                    <?
                    foreach ($arResult as $arItem):
                        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                            continue;
                        ?>
                        <? if ($arItem["SELECTED"]): ?>
                        <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
                    <? else: ?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                    <? endif ?>

                    <? endforeach ?>

                </ul>
        <? endif ?>
</div>

