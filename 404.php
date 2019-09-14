<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
 ?>
    <div class="main-content w-100  page-about">
        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
            "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        ); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h1 class="main-title">
                        404
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 mt-5 mb-5">
                Страница не найдена
                </div>
            </div>
        </div>
    </div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>