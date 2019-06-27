<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}


?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID;?>" lang="<?= LANGUAGE_ID;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><? $APPLICATION->ShowTitle(); ?></title>


    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>
    <?$APPLICATION->ShowHeadStrings()?>
    <?$APPLICATION->ShowCSS();?>

    <?php
//    $APPLICATION->AddHeadScript('/bitrix/templates/.default/additional.js');
//    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/build/css/bootstrap.min.css");

//    $this->getTemplate()->addExternalJs("/local/addcss.css");
    ?>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/app.css">

    <script src="<?= SITE_TEMPLATE_PATH; ?>/assets/build/global.js"></script>
    <?$APPLICATION->ShowHeadScripts()?>

    <?php

    $APPLICATION->AddHeadScript("/local/templates/sanatorium/assets/build/js/jquery.lazy.min.js");
    if($APPLICATION->GetCurPage(false) === '/'){

        $APPLICATION->AddHeadScript("//api-maps.yandex.ru/2.1/?lang=ru_RU");

    }


    $APPLICATION->AddHeadScript("/local/templates/sanatorium/assets/build/app.js");

    $GLOBALS['theme'] = 'summer';
    ?>
</head>

<body class="<?$APPLICATION->ShowProperty('BodyClass');?>   summer-theme" <?$APPLICATION->ShowProperty('BodyTag');?>  >
<?
$APPLICATION->ShowPanel();
?>
<main class="<?$APPLICATION->ShowProperty('MainClass');?>">
    <header>
        <div id="logo">
            <a href="/"  title="Перейти на главную страницу">
                <img src="/images/logo.jpg" alt="логотип" />
            </a>
        </div>
        <ul id="nav-list-services">
            <li>
                <a href="#">
                    Test
                </a>
            </li>
        </ul>

    </header>
    <div id="primary">
        <div id="top-bar">
            <div class="top">
                <div class="row">
                    <div class="first col-lg-6 col-xs-12">
                        <ul class="list-info d-flex">
                            <li>
                                <a  class="d-flex align-items-center" href="tel:+7 (3812) 23-15-32" >
                                    <i class="fas fa-phone-alt"></i>
                                    <p>
                                        +7 (3812) 23-15-32
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a  class="d-flex align-items-center" href="#" >
                                    <i class="fas fa-location-arrow"></i>
                                    <p>
                                        г. Омск-12, ул. Березовая, д. 1
                                    </p>
                                </a>
                            </li>
                             <li>
                                <a  class="d-flex align-items-center" href="mailto:sanom@mail.ru" >
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                        sanom@mail.ru
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="second col-lg-6 col-xs-12">

                        <ul class="list-actions d-flex justify-content-end">
                            <li>
                                <a  class="d-flex align-items-center" href="/search" >
                                    <img src="/images/search.png"  alt="Иконка" />
                                    <p>
                                        Поиск по сайту
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a  class="d-flex align-items-center" href="#" >
                                    <img class="eng-img" src="/images/eng.png"  alt="Иконка" />
                                    <img class="ru-img"  src="/images/eng.png"  alt="Иконка" />
                                    <p>
                                        english version
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a  class="d-flex align-items-center  bvi" href="mailto:sanom@mail.ru" >
                                    <img src="/images/eye.png"  alt="Иконка" />
                                    <p>
                                        версия для слабовидящих
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>
        </div>

