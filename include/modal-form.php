<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 27.07.19
 * Time: 18:33
 */

?>
<div class="modal-custom d-flex   justify-content-center align-items-center">

    <div class="content position-relative">
        <a href="#"  class="close-modal">
            <i class="fas fa-times"></i>
        </a>
        <h2 class="sub-title">
            Обратная связь
        </h2>
        <form id="feedback-form2" method="post" action="/ajax/send.php">
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
                        <button type="submit" form="feedback-form2" class="main-link">
                            Отправить письмо <i class="fas fa-chevron-circle-right"></i>
                        </button>
                        <input type="hidden" name="event" value="FEEDBACK_EVENT"/>
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