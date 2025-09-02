<?php

namespace Bitrix\Main;

use Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;

$asset = Asset::getInstance();

/* @var $APPLICATION */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">
    <?php
    $APPLICATION->ShowHead();
    $asset->addCss(SITE_TEMPLATE_PATH . '/styles/style.css');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/register-login.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/filter.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/header.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/more.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/scroll.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/telMask.js');
//    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/video.js');
    ?>
</head>
<? $APPLICATION->ShowPanel() ?>
<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo logo" href="/">
            <img src=" <?=SITE_TEMPLATE_PATH . '/assets/icons/logo.svg'?>" alt="" class="logo__img">
            <span class="logo__title">MEGAFILM </span>
        </a>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "TOPMENU", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => ".default",
            "TYPE_MENU" => "H",
        ),
            false
        );?>
        <div class="header__menu">

                <form action="<?=SITE_TEMPLATE_PATH . '/views/accaunt/index.php'?>">
                    <button class="header__accaunt-btn">
                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/icons/Profile.svg'?>" alt="" class="header__accaunt-img " id="accauntBtn">
                    </button>
                </form>

        </div>
    </div>
</header>






