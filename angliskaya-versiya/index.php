<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Англиская версия");
?>
    <div class="main-content w-100  page-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">

                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main-plain", Array(
                        "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                    ),
                        false
                    ); ?>
                    <h1 class="main-title">
                       Заголовок
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12  main-text">
                    Текст
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>