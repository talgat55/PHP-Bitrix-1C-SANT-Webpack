<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="bottom">
    <div class="row">
        <nav id="main-navigation" class="col-md-10  col-xs-12 d-flex align-items-center">
            <? if (!empty($arResult)): ?>
            <ul  class="center-menu  d-flex">

                <?
                $previousLevel = 0;
                foreach ($arResult

                as $arItem): ?>

                <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                    <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                <? endif ?>

                <? if ($arItem["IS_PARENT"]): ?>

                <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                <li><a href="<?= $arItem["LINK"] ?>"
                       class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
                    <ul>
                        <? else: ?>
                        <nav<? if ($arItem["SELECTED"]): ?> class="item-selected"<? endif ?>><a
                                    href="<?= $arItem["LINK"] ?>"
                                    class="parent"><?= $arItem["TEXT"] ?></a>
                            <ul>
                                <? endif ?>

                                <? else: ?>

                                    <? if ($arItem["PERMISSION"] > "D"): ?>

                                        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                            <li><a href="<?= $arItem["LINK"] ?>"
                                                   class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
                                            </li>
                                        <? else: ?>
                                            <li<? if ($arItem["SELECTED"]): ?> class="item-selected"<? endif ?>><a
                                                        href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                                        <? endif ?>

                                    <? else: ?>

                                        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                            <li><a href=""
                                                   class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>"
                                                   title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a>
                                            </li>
                                        <? else: ?>
                                            <li><a href="" class="denied"
                                                   title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a>
                                            </li>
                                        <? endif ?>

                                    <? endif ?>

                                <? endif ?>

                                <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                                <? endforeach ?>

                                <? if ($previousLevel > 1)://close last item tags?>
                                    <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                                <? endif ?>

                            </ul>
                            <div class="menu-clear-left"></div>
                            <? endif ?>
          </nav>

                        <div id="buy-ticket" class="col-md-2 col-xs-12">
                            <a href="/ticket/" class="d-flex align-items-center justify-content-between">
                                <p>
                                    Купить путевку
                                </p>
                                <img src="/images/ticker-icon.png" alt="иконка"/>
                            </a>
                        </div>
    </div>
</div>

