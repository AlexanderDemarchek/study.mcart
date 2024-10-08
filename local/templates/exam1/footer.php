<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>       

    
	
    </div>
        </div>
                <!-- side -->
                <div class="side">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "left", 
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "left",
                        "USE_EXT" => "Y"
                    ),
	false
);?>



                    <!-- side anonse -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include", 
                            "usefull_info.php", 
                            array(
                                "COMPONENT_TEMPLATE" => "usefull_info.php",
                                "AREA_FILE_SHOW" => "sect",
                                "PATH" => SITE_DIR."useful_info_inc",
                                "EDIT_TEMPLATE" => "",
                                "AREA_FILE_SUFFIX" => "_inc1",
                                "AREA_FILE_RECURSIVE" => "Y"
                            ),
                            false
                        ); 
                    ?>
                    
                    <!-- /side anonse -->
                    <!-- side wrap -->
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>
                                              
                       <!-- footer rew slider box -->

        
                       <?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
                        "COMPONENT_TEMPLATE" => "slider",
                            "IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
                            "IBLOCK_ID" => "12",	// Код информационного блока
                            "NEWS_COUNT" => "2",	// Количество новостей на странице
                            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "FILTER_NAME" => "",	// Фильтр
                            "FIELD_CODE" => array(	// Поля
                                0 => "DETAIL_PICTURE",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(	// Свойства
                                0 => "POSITION",
                                1 => "COMPANY",
                                2 => "",
                            ),
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "#SITE_DIR#/rew/#ELEMENT_CODE#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "PREVIEW_TRUNCATE_LEN" => "150",	// Максимальная длина анонса для вывода (только для типа текст)
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "PARENT_SECTION" => "",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                            "DISPLAY_NAME" => "Y",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                            "PAGER_TITLE" => "Новости",	// Название категорий
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        ),
                        false
                    );?>
       

						<!-- / footer rew slider box --> 
                    </div>
                    <!-- /side wrap -->
                </div>
                <!-- /side -->
            </div>
            <!-- /content box -->
        </div>
        <!-- /page -->
        <div class="empty"></div>
    </div>
    <!-- /wrap -->
    <!-- footer -->
    <footer class="footer">
        <div class="inner-wrap">
            <nav class="main-menu">
                <?
                    $APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                        "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    ),
                    false
                );
                                ?>
                <div class="item">
                    <div class="title-block">Каталог товаров</div>
                    <ul>
                        <li><a href="">Кухни</a>
                        </li>
                        <li><a href="">Гарнитуры</a>
                        </li>
                        <li><a href="">Спальни и матрасы</a>
                        </li>
                        <li><a href="">Столы и стулья</a>
                        </li>
                        <li><a href="">Раскладные диваны</a>
                        </li>
                        <li><a href="">Кресла</a>
                        </li>
                        <li><a href="">Кровати и кушетки</a>
                        </li>
                        <li><a href="">Тумобчки и прихожие</a>
                        </li>
                        <li><a href="">Аксессуары</a>
                        </li>
                        <li><a href="">Каталоги мебели</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="contacts-block">
                <div class="title-block"><?=GetMessage("CONTACT_INFO")?></div>
                <div class="loc-block">
                    <div class="address">ул. Летняя, стр.12, офис 512</div>
                    <div class="phone">
                        
                            <?
                                $APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );
                            ?>
                        
                    </div>
                </div>
                <div class="main-soc-block">
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc01.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc02.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc03.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc04.png" alt="">
                    </a>
                </div>
                <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>

<?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

?>

</html>