<div id="block-contacts">
    <div class="container">
        <div class="row">
            <div class="first-block col-lg-4 col-xs-12">
                <h2 class="sub-title">
                    Контакты </h2>
                <ul class="list-info">
                    <li>
                        <h4 class="title">
                            Позвоните нам
                        </h4>
                        <a href="tel:+7 (3812) 23-15-32" class="phone-field">
                            +7 (3812) 23-15-32 </a>
                    </li>
                    <li>
                        <h4 class="title">
                            Адрес клиники
                        </h4>
                        <a href="#" class="map-field">
                            Ул. Березовая, д. 1 </a>
                    </li>

                </ul>
            </div>
            <div class="second-block col-lg-8 col-xs-12">
                <h3 class="title">
                    Запись на услугу
                </h3>
                <form id="feedback-form" method="post" action="/ajax/feedback">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>
                                    Как вас зовут?
                                </label>
                                <input type="text" name="name" placeholder="Ваше имя"
                                       class="text-input" required>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label>
                                    Телефон
                                </label>
                                <input type="text" name="phone" placeholder="Телефон"
                                                class="text-input phone-input" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-5 col-xs-12">
                                <button type="submit" form="feedback-form" class="main-link">
                                    Отправить письмо <i class="fas fa-chevron-circle-right"></i>
                                </button>
                                <input type="hidden" name="event" value="ORDER_SERVICE">
                                <?
                                $title = $APPLICATION->GetTitle();
                                ?>
                                <input type="hidden" name="service_name" value="<?=$title; ?>">
                            </div>
                            <div class="policy-block col-md-7 col-xs-12">
                                Нажимая кнопку «Отправить письмо» вы даете свое согласие на <a href="/policy">
                                    обработку персональных данных.</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>