<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная");

$APPLICATION->SetTitle("Главная");
?><? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main-slider",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "main-slider",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "NAME",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "banners_sliders",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "KINDS",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y"
    ),
    false
); ?><br>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "home-slider",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "banners_sliders",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "TITLE",
            1 => "FLOAT_TEXT",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y",
        "COMPONENT_TEMPLATE" => "home-slider"
    ),
    false
); ?><br>
    <div id="home-sescription">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="sub-title">
                        Центр реабилитации ФСС РФ "Омский".<br> Официальный сайт.
                    </h2>
                    <p>
                        <b>Центр реабилитации «Омский»</b> расположен <b>в центре г. Омска,</b> здесь ежедневно <b>получает
                            лечение около 700
                            человек.</b> На прошедшем в мае 2013 года форуме «Здравница-2013» ФБУ. Центр реабилитации
                        «Омский» был <b>награжден
                            золотой медалью в номинации «Лучшая специализированная Здравница-2013».</b> Форум проходил
                        20-23
                        мая в г.Сочи.
                    </p>

                    <a href="#" class=" d-flex align-items-center main-link">
                        <span>Подробнее о центре</span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="key-advantages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="sub-title">
                        Ключевые преимущества
                    </h2>
                    <div class="w-100  row">
                        <div class="item col-lg-3  col-xs-12 ">
                            <div class="image-block">
                                <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-1.png"
                                     alt="изображение"/>
                            </div>
                            <div class="text">
                                Индивидуальный подход<br>
                                к каждому пациенту
                            </div>
                        </div>

                        <div class="item col-lg-3  col-xs-12 ">
                            <div class="image-block">
                                <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-2.png"
                                     alt="изображение"/>
                            </div>
                            <div class="text">
                                Наличие уникальных<br>
                                природных факторов
                            </div>
                        </div>
                        <div class="item col-lg-3  col-xs-12 ">
                            <div class="image-block">
                                <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-3.png"
                                     alt="изображение"/>
                            </div>
                            <div class="text">
                                Широкий спектр мед.<br> деятельности
                            </div>
                        </div>

                        <div class="item col-lg-3  col-xs-12 ">
                            <div class="image-block">
                                <img class="lazy" src="/images/transpaernt.png" data-src="/images/key-summer-4.png"
                                     alt="изображение"/>
                            </div>
                            <div class="text">
                                Соответствие услуг международным<br> стандартам качества
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "promotion",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM", "DATE_CREATE", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "3",
        "IBLOCK_TYPE" => "actions",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "related-news", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",    // Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
    "DISPLAY_NAME" => "Y",    // Выводить название элемента
    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
    "FIELD_CODE" => array(    // Поля
        0 => "NAME",
        1 => "PREVIEW_PICTURE",
        2 => "DATE_CREATE",
        3 => "",
    ),
    "FILTER_NAME" => "",    // Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "4",    // Код информационного блока
    "IBLOCK_TYPE" => "news",    // Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "3",    // Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",    // Название категорий
    "PARENT_SECTION" => "",    // ID раздела
    "PARENT_SECTION_CODE" => "",    // Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(    // Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",    // Устанавливать статус 404
    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
    "SHOW_404" => "N",    // Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
    false
); ?>
    <div id="home-contacts">

        <div class="container">
            <div class="row">
                <div class="first-block  col-lg-4 col-xs-12">
                    <h2 class="sub-title">
                        Контакты
                    </h2>
                    <ul class="list-info">
                        <li>
                            <h4 class="title">
                                Позвоните нам
                            </h4>
                            <a href="tel:+7 (3812) 23-15-32" class="phone-field">
                                +7 (3812) 23-15-32
                            </a>
                        </li>
                        <li>
                            <h4 class="title">
                                Адрес клиники
                            </h4>
                            <a href="#" class="map-field">
                                Ул. Березовая, д. 1
                            </a>
                        </li>
                        <li>
                            <h4 class="title">
                                E-mail
                            </h4>
                            <a href="mailto:sanom@mail.ru" class="email-field">
                                sanom@mail.ru
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="second-block col-lg-8 col-xs-12">
                    <h3 class="title">
                        Связь с нами
                    </h3>
                    <form id="feedback-form" method="post" action="/ajax/feedback">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Как вас зовут?
                                    </label>
                                    <input type="text" name="name" placeholder="Ваше имя" class="text-input">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Электронный адрес
                                    </label>
                                    <input type="email" name="email" placeholder="E-mail" class="text-input">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <label>
                                        Сообщение
                                    </label>
                                    <textarea rows="1" name="comment" placeholder="Введите ваше сообщение"
                                              class="textarea-input"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-5 col-xs-12">
                                    <button type="submit" form="feedback-form" class="main-link">
                                        <span>Отправить письмо</span>
                                        <i class="fas fa-chevron-circle-right"></i>
                                    </button>
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
    <div id="home-map">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">

                    <div id="map"></div>

                </div>
            </div>
        </div>
    </div>


    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>