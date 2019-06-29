<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("contacts");
?><? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
    "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
    "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
    "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
),
    false
); ?>
    <div class="container">
        <div class="row">
            <div class="main-content w-100  page-contacts">
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <h1 class="main-title">
                            Контакты
                        </h1>
                    </div>


                </div>
                <div class="col-md-7 col-xs-12">
                    <div class="row">
                        <div class="block-contact">
                            <h2 class="title">
                                Служба бронирования и размещения
                            </h2>
                            <ul class="list-info">
                                <li class="item">
                                <span class="heading">
                                    начальник службы
                                </span>
                                    <div class="main  d-flex align-items-center justify-content-between">
                                    <span class="first">
                                        Ноздрюхина Елена Владимировна
                                    </span>
                                        <span class="second">
                                        <a class="phone-class" href="tel:8 (3812) 24-28-73">
                                           8 (3812) <span>24-28-73</span>
                                        </a>
                                    </span>
                                    </div>
                                </li>
                                <li class="item">
                                <span class="heading">
                                   менеджер
                                </span>
                                    <div class="main  d-flex align-items-center justify-content-between">
                                    <span class="first">
                                       Комылина Юлия Михайловна
                                    </span>
                                        <span class="second">
                                        <a class="phone-class" href="tel:8 (3812) 24-26-08">
                                          8 (3812) <span>24-26-08</span>
                                        </a>
                                    </span>
                                    </div>
                                </li>
                                <li class="item">
                                <span class="heading">
                                 информатор
                                </span>
                                    <div class="main  d-flex align-items-center justify-content-between">
                                    <span class="first">
                                      Климова Людмила Игнатьевна
                                    </span>
                                        <span class="second">
                                        <a class="phone-class" href="tel:8 (3812) 23-15-32">
                                         8 (3812) <span>23-15-32</span>
                                        </a>
                                    </span>
                                    </div>
                                </li>


                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="block-contact">
                            <h2 class="title">
                                Реквизиты
                            </h2>
                            <ul class="list-info-two">
                                <li class="item d-flex">
                                    <span class="heading">
                                       Наименование:
                                    </span>
                                    <div class="main  ">
                                        ФБУ Центр реабилитации ФСС РФ «Омский»
                                    </div>
                                </li>
                                <li class="item d-flex" >
                                    <span class="heading">
                                      Юр. адрес:
                                    </span>
                                    <div class="main  ">
                                        644012, г.Омск, ул. Березовая, д.1 <a href="#" >Схема проезда</a>
                                    </div>
                                </li>
                                <li class="item d-flex">
                                    <span class="heading">
                                        ОГРН:
                                    </span>
                                    <div class="main  ">
                                        1025500508252
                                    </div>
                                </li>
                                <li class="item d-flex">
                                    <span class="heading">
                                        ИНН:
                                    </span>
                                    <div class="main  ">
                                        5502044963 /
                                        <span class="heading">
                                        КПП:
                                        </span>
                                        550101001
                                    </div>
                                </li>
                                <li class="item d-flex">
                                    <span class="heading">
                                       Банк:
                                    </span>
                                    <div class="main  ">
                                        УФК по Омской области (ФБУ Центр реабилитации Фонда социального страхования Российской Федерации "Омский" л/сч 20526Щ20910)
                                    </div>
                                </li>
                                <li class="item d-flex">
                                    <span class="heading">
                                       Р/c:
                                    </span>
                                    <div class="main  ">
                                        40501810552092000001  /
                                        <span class="heading">
                                        БИК:
                                        </span>
                                        045209777
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>