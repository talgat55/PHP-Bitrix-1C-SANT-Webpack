<div id="home-contacts">
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
                            +7 (3812) 23-15-32 </a></li>
                    <li>
                        <h4 class="title">
                            Адрес клиники
                        </h4>
                        <a href="#" class="map-field">
                            Ул. Березовая, д. 1 </a></li>
                    <li>
                        <h4 class="title">
                            Почта
                        </h4>
                        <a href="mailto:sanom@mail.ru" class="email-field">
                            sanom@mail.ru </a></li>
                </ul>
            </div>
            <div class="second-block col-lg-8 col-xs-12">
                <h3 class="title">
                    Связь с нами
                </h3>
                <form id="feedback-form" method="post" action="/ajax/send.php">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>
                                    Как вас зовут?
                                </label>
                                <input type="text" name="name" placeholder="Ваше имя"
                                       class="text-input"  required>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label>
                                    Электронный адрес
                                </label>
                                <input type="email" name="email" placeholder="E-mail"
                                       class="text-input" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <label>
                                    Сообщение
                                </label>
                                <textarea rows="1" name="comment"
                                          placeholder="Введите ваше сообщение"
                                          class="textarea-input"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-5 col-xs-12">
                                <button type="submit" form="feedback-form" class="main-link">
                                    Отправить письмо <i class="fas fa-chevron-circle-right"></i>
                                </button>
                                <input type="hidden" name="event" value="FEEDBACK_EVENT" />
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