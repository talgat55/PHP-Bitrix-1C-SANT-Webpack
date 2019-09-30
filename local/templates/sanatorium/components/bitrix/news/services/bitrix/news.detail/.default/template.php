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

$this->addExternalCss("/local/templates/sanatorium/assets/build/css/slick.css");
$this->addExternalCss("/local/templates/sanatorium/assets/build/css/slick-theme.css");
$this->addExternalJS("/local/templates/sanatorium/assets/build/js/slick.min.js");

?>

<div class="service-detail  section-id-<?=$arResult['IBLOCK_SECTION_ID']; ?>">
    <div class="img-wrapper">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
            <img
                    class="detail_picture"
                    border="0"
                    src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                    width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
            />
        <? endif ?>
    </div>
    <div class="first-block">
        <div class="container">
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "main-plain",
                    Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                ); ?>
                <h1 class="title"><?= $arResult["NAME"] ?></h1>
                <div class="short-text-block">
                    <? if (!empty($arResult['PROPERTIES']['EXCEPT']['VALUE']['TEXT'])) { ?>
                    <h2 class="sub-title-detail">
                        Кратко об услуге
                    </h2>
                    <div class="content">
                        <?= $arResult['PROPERTIES']['EXCEPT']['VALUE']['TEXT']; ?>
                    </div>
                    <div class="icon">
                        <?
                        $image = CFile::GetPath($arResult['PROPERTIES']['IMAGE_SERVICE']['VALUE']);
                        $redySvg = file_get_contents(__DIR__ . '/../../../../../../../../../../' . $image);

                        echo $redySvg;
                        ?>
                        <? } ?>
                    </div>
                </div>
                <div class="main-content">
                    <?= $arResult['DETAIL_TEXT']; ?>
                </div>
                <? if($arResult['PROPERTIES']['WORKTIME']['VALUE']['TEXT']) : ?>
                <div class="work-time w-100">
                    Время работы : <i class="far fa-clock"></i>
                    <span><?= $arResult['PROPERTIES']['WORKTIME']['VALUE']['TEXT']; ?></span>
                </div>
                <? endif; ?>
                <? if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])) { ?>
                    <div class="wrapper-slider position-relative w-100">
                        <div class="row">
                            <div class="col-lg-9 col-xs-12 position-relative">
                                <ul id="slider" class="main-slider w-100">

                                    <? foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $value_img) { ?>
                                        <? $image = CFile::GetPath($value_img); ?>

                                        <li>
                                            <img src="<?= $image; ?>" alt="Изображение"/>
                                        </li>

                                    <? } ?>

                                </ul>
                                <ul class="service-slider-arrow">
                                    <li>
                                        <a href="#" class="prev arrow">
                                            <i class="fas fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="next arrow">
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <ul id="carousel" class="half-slider w-100">

                                    <? foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $value_img) { ?>
                                        <? $image = CFile::GetPath($value_img); ?>

                                        <li>
                                            <div class="wrapper">
                                                <img src="<?= $image; ?>" alt="Изображение"/>
                                            </div>

                                        </li>

                                    <? } ?>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div id="phone-block-data" data-phone="<?= $arResult['PROPERTIES']['WORK_PHONE']['VALUE']; ?>" ></div>
                <? } ?>
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "/include/contact-info-alt.php",
                    Array(),
                    Array("MODE" => "html")
                );
                ?>

            </div>
        </div>
    </div>


</div>