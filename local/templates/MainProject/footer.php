<footer class="footer">
    <div class="footer__inner">
        <div class="footer__logo logo">
            <img src="<?= SITE_TEMPLATE_PATH . '/assets/icons/logo.svg'?>" alt="" class="logo__img">
            <span class="logo__title">MEGAFILM </span>
        </div>
        <div class="footer__soc1als">
            <h1 class="footer__soc1als-title">Мы в соц.сетях</h1>
            <div class="footer__soc1als-links">
                <a href="" class="footer_soc1als-link"><img src="<?= SITE_TEMPLATE_PATH . '/assets/icons/Telegram.svg'?>"
                                                            alt="" class="footer__soc1als-img"></a>
                <a href="" class="footer_soc1als-link"><img src="<?=SITE_TEMPLATE_PATH . '/assets/icons/Instagram.svg'?>"
                                                            alt="" class="footer__soc1als-img"></a>
                <a href="" class="footer_soc1als-link"><img src="<?=SITE_TEMPLATE_PATH . '/assets/icons/VK com.svg'?>"
                                                            alt="" class="footer__soc1als-img"></a>
                <a href="" class="footer_soc1als-link"><img src="<?=SITE_TEMPLATE_PATH . '/assets/icons/Gmail.svg'?>"
                                                            alt="" class="footer__soc1als-img"></a>
            </div>
            <?  $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . '/include/footer-number.php',
                )
            );?>
        </div>
        <div class="footer__main">
          <?  $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH . '/include/footer-text.php',
            )
            );?>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "TOPMENU", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => ".default",
                "TYPE_MENU" => "F",
            ),
                false
            );?>
        </div>
    </div>
</footer>

<div class="register">
    <form action="controllers/UserController.php" name="register" class="register__body" method="post">
        <div class="register__body-header">
            <h1 class="register__title"><b>РЕГИСТРАЦИЯ</b></h1>
            <label class="register__close-label" for="closeRegister">Закрыть окно
                регистрации</label>
            <button class="register__close" type="button" id="closeRegister">
                <img src="/assets/icons/Close.svg" alt="" class="register__close-img">
            </button>
        </div>
        <ul class="register__body-list">
            <li class="register__body-item">
                <label class="register__label">
                    ФИО
                    <input type="text" class="register__input" name="name" required
                           id="rName" placeholder="Введите свое Фио">
                </label>
            </li>
            <li class="register__body-item">
                <label class="register__label">
                    НИКНЕЙМ
                    <input type="text" class="register__input" name="userName" required
                           id="rUserName" placeholder="Введите свое имя пользователя">
                </label>
            </li>
            <li class="register__body-item">
                <label class="register__label">
                    ЭЛЕКТРОННАЯ ПОЧТА
                    <input type="email" class="register__input" name="email" required
                           id="rEmail" placeholder="Введите свою электоную почту">
                </label>
            </li>
            <li class="register__body-item">
                <label class="register__label">
                    НОМЕР ТЕЛЕФОНА
                    <input type="tel" class="register__input" name="tel" required id="rTel"
                           placeholder="Введите свой номер телефона">
                </label>
            </li>
            <li class="register__body-item">
                <label class="register__label">
                    ПАРОЛЬ
                    <input type="password" class="register__input" name="password" required
                           id="rPassword" placeholder="Введите свой пароль">
                </label>
            </li>
            <li class="register__body-item">
                <label class="register__label">
                    ПОВТОРИТЕ ПАРОЛЬ
                    <input type="password" class="register__input" name="repeatPassword" required
                           id="rPasswordTwo" placeholder="Проверте свой пароль">
                </label>
            </li>
        </ul>
        <label class="register__checkbox checkbox">
            <input type="checkbox" name="privacyPolicy" class="checkbox__btn" required
                   id="rCheckbox">
            <span class="checkbox__label">Я согласен с полицикой конфидициальности</span>
        </label>
        <label class="register__checkbox checkbox">
            <input type="checkbox" name="consentToMailing" value="1" id="rCheckboxTwo" class="checkbox__btn">
            <span class="checkbox__label"> Согласен на почтовую рассылку</span>
        </label>
        <button type="submit" class="register__submit button">Зарегестрироватся</button>
    </form>
</div>

<div class="login">
    <form action="controllers/UserController.php" name="login" class="login__body" method="post">
        <div class="login__body-header">
            <h1 class="login__title"><b>ВХОД</b></h1>
            <label class="login__close-label" for="closeRegister">Закрыть окно
                регистрации</label>
            <button class="login__close" type="button" id="closeLogin">
                <img src="/assets/icons/Close.svg" alt="" class="login__close-img">
            </button>
        </div>
        <ul class="login__body-list">
            <li class="login__body-item">
                <label class="login__label">
                    ЭЛЕКТРОННАЯ ПОЧТА
                    <input type="email" class="login__input" name="lEmail" required
                           id="rEmail" placeholder="Введите свою электоную почту">
                </label>
            </li>
            <li class="login__body-item">
                <label class="login__label">
                    ПАРОЛЬ
                    <input type="password" class="login__input" name="lPassword" required
                           id="rPassword" placeholder="Введите свой пароль">
                </label>
            </li>
        </ul>
        <p class="login__register-link">Еще нет акаунта!? Зарегистрируйтесь!!!</p>
        <button type="submit" class="login__submit button">Войти</button>
    </form>
</div>

</body>

</html>
