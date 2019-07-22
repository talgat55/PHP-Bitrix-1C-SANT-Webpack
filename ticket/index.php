<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Купить путевку");
?>
    <div class="main-content w-100  page-ticket">
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
                        <h1 class="main-title ">
                            Купить путевку
                        </h1>

                        <div id="ticket-block" class="w-100">
                            <form id="booking-form" method="post" action="/ajax/feedback">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <label>
                                                Как вас зовут?
                                            </label>
                                            <input type="text" name="name"
                                                   placeholder="Ваше имя"
                                                   class="text-input">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <label>
                                                Ваш телефон
                                            </label>

                                            <input type="text" name="phone"
                                                   placeholder="7 (___) ___ - __ - __"
                                                   class="text-input  phone-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-12 position-relative">
                                            <label>
                                                Количество дней
                                            </label>
                                            <span class="icon-select"><i class="fas fa-chevron-down"></i> </span>
                                            <select name="period" class="select-input">
                                                <option value="1 день">1 день</option>
                                                <option value="2 дня">2 дня</option>
                                                <option value="3 дня">3 дня</option>
                                                <option value="4 дня">4 дня</option>
                                                <option value="5 дней">5 дней</option>
                                                <option value="6 дней">6 дней</option>
                                                <option value="7 дней">7 дней</option>
                                                <option value="8 дней">8 дней</option>
                                                <option value="9 дней">9 дней</option>
                                                <option value="10 дней">10 дней</option>
                                                <option value="11 дней">11 дней</option>
                                                <option value="12 дней">12 дней</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-xs-12 position-relative">
                                            <label>
                                                Номер для проживания
                                            </label>
                                            <span class="icon-select"><i class="fas fa-chevron-down"></i> </span>
                                            <select name="count-stay" class="select-input">
                                                <option value="1  местный">1 местный</option>
                                                <option value="2-х местный">2-х местный</option>
                                                <option value="3-х местный">3-х местный</option>
                                                <option value="4-х местный">4-х местный</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-xs-12">
                                            <label>
                                                Дата заезда
                                            </label>
                                            <input type="text" name="date_placement"
                                                   placeholder="ДД.ММ.ГГГГ"
                                                   class="text-input date-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row d-flex align-items-center  text-center">
                                        <div class="col-md-12 col-xs-12">
                                            <button type="submit" form="booking-form" class="main-link">
                                                Забронировать <i class="fas fa-chevron-circle-right"></i></button>
                                        </div>
                                        <div class="describe-ticket-block d-flex justify-content-center w-100">
                                            <p class="col-lg-6 col-xs-12">
                                                Ваша заявка на бронирование является предварительной и не может
                                                считаться утвержденной!
                                                Наши специалисты свяжутся с Вами в течении трех рабочих дней!
                                            </p>
                                        </div>
                                        <div class="policy-block col-md-12 col-xs-12 justify-content-center ">
                                            Нажимая кнопку «Забронировать» вы даете свое согласие на <a
                                                    href="/policy">
                                                обработку персональных данных.</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>