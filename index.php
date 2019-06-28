<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная");

$APPLICATION->SetTitle("Главная");
?><? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main-slider",
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
        "COMPONENT_TEMPLATE" => "main-slider",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "ID", 1 => "NAME", 2 => "PREVIEW_PICTURE", 3 => "",),
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
        "PROPERTY_CODE" => array(0 => "KINDS", 1 => "",),
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
    )
); ?><br>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "home-slider",
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
        "COMPONENT_TEMPLATE" => "home-slider",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "",),
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
        "PROPERTY_CODE" => array(0 => "TITLE", 1 => "FLOAT_TEXT", 2 => "",),
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
    )
); ?><br>
    <div id="home-sescription">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="sub-title">
                        Центр реабилитации ФСС РФ "Омский".<br>
                        Официальный сайт. </h2>
                    <p>
                        <b>Центр реабилитации «Омский»</b> расположен <b>в центре г. Омска,</b> здесь ежедневно <b>получает
                            лечение около 700 человек.</b> На прошедшем в мае 2013 года форуме «Здравница-2013» ФБУ.
                        Центр реабилитации «Омский» был <b>награжден золотой медалью в номинации «Лучшая
                            специализированная Здравница-2013».</b> Форум проходил 20-23 мая в г.Сочи.
                    </p>
                    <a href="#" class=" d-flex align-items-center main-link">
                        Подробнее о центре <i class="fas fa-chevron-circle-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <div id="key-advantages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="sub-title">
                        Ключевые преимущества </h2>
                    <div class="w-100 row">
                        <div class="item col-lg-3 col-xs-12 ">
                            <div class="image-block">
                                <img src="/images/transpaernt.png" class="lazy" data-src="/images/key-summer-1.png"
                                     alt="изображение">
                            </div>
                            <div class="text">
                                Индивидуальный подход<br>
                                к каждому пациенту
                            </div>
                        </div>
                        <div class="item col-lg-3 col-xs-12 ">
                            <div class="image-block">
                                <img src="/images/transpaernt.png" class="lazy" data-src="/images/key-summer-2.png"
                                     alt="изображение">
                            </div>
                            <div class="text">
                                Наличие уникальных<br>
                                природных факторов
                            </div>
                        </div>
                        <div class="item col-lg-3 col-xs-12 ">
                            <div class="image-block">
                                <img src="/images/transpaernt.png" class="lazy" data-src="/images/key-summer-3.png"
                                     alt="изображение">
                            </div>
                            <div class="text">
                                Широкий спектр мед.<br>
                                деятельности
                            </div>
                        </div>
                        <div class="item col-lg-3 col-xs-12 ">
                            <div class="image-block">
                                <img src="/images/transpaernt.png" class="lazy" data-src="/images/key-summer-4.png"
                                     alt="изображение">
                            </div>
                            <div class="text">
                                Соответствие услуг международным<br>
                                стандартам качества
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
); ?><? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "related-news",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_PICTURE", 2 => "DATE_CREATE", 3 => "",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
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
		"PROPERTY_CODE" => array(0 => "", 1 => "",),
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
    <div id="home-contacts">
        <div class="container">
            <div class="row">
                <div class="first-block col-lg-4 col-xs-12">
                    <h2 class="sub-title">
                        Контакты </h2>
                    <ul class="list-info">
                        <li>
                            <h4 class="title">
                                Позвоните нам </h4>
                            <a href="tel:+7 (3812) 23-15-32" class="phone-field">
                                +7 (3812) 23-15-32 </a></li>
                        <li>
                            <h4 class="title">
                                Адрес клиники </h4>
                            <a href="#" class="map-field">
                                Ул. Березовая, д. 1 </a></li>
                        <li>
                            <h4 class="title">
                                E-mail </h4>
                            <a href="mailto:sanom@mail.ru" class="email-field">
                                sanom@mail.ru </a></li>
                    </ul>
                </div>
                <div class="second-block col-lg-8 col-xs-12">
                    <h3 class="title">
                        Связь с нами </h3>
                    <form id="feedback-form" method="post" action="/ajax/feedback">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Как вас зовут? </label> <input type="text" name="name" placeholder="Ваше имя"
                                                                       class="text-input">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Электронный адрес </label> <input type="email" name="email" placeholder="E-mail"
                                                                          class="text-input">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <label>
                                        Сообщение </label> <textarea rows="1" name="comment"
                                                                     placeholder="Введите ваше сообщение"
                                                                     class="textarea-input"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-5 col-xs-12">
                                    <button type="submit" form="feedback-form" class="main-link">
                                        Отправить письмо <i class="fas fa-chevron-circle-right"></i></button>
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
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>