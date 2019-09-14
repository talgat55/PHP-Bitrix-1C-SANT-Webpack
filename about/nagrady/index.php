<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Награды");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/build/css/lightbox.min.css");
$APPLICATION->AddHeadScript("/local/templates/sanatorium/assets/build/js/lightbox.min.js");

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
                        <? $APPLICATION->ShowTitle() ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12  mb-5">
                    <ul class="list-awards row">
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4 ">
                            <a href="/images/awards/diplom1 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom1.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom2 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom2.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom3 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom3.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom4 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom4.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom5 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom5.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom6 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom6.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom7 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom7.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/diplom8 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/diplom8.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/dscn6789 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/dscn6789.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/img057.jpg" data-lightbox="image">
                                <img src="/images/awards/img057 (1).jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/img058 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/img058.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/img059.jpg" data-lightbox="image">
                                <img src="/images/awards/img059 (1).jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/img355 (1).jpg" data-lightbox="image">
                                <img src="/images/awards/img355.jpg" alt="Награда"/>
                            </a>
                        </li>
                        <li class="col-lg-2  col-md-6 col-sm-12 mb-4  ">
                            <a href="/images/awards/uwcrhtncigtzpn xxzhtfpykibw.jpg" data-lightbox="image">
                                <img src="/images/awards/rvupsqqjuyhlkv gifescmqbrlf.jpg" alt="Награда"/>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>