<?php

namespace Bitrix\Main;

use Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;

$asset = Asset::getInstance();


?>
<!DOCTYPE html>
<html lang="ru">
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
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
    ?>
</head>
<? $APPLICATION->ShowPanel() ?>
<body>
  <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                   <?php
                 $date = date('H');
                 if($date >= 9 && $date <= 18){ ?>
                  <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                 <? } else {?>
                  <a href="mailto:store@store" class="phone">store@store</a>
                  <? } ?>
                  <?php   ?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
         <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"mainMenu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "mainMenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);?>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
        <!-- /breadcrumbs -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                     <?php
                    if( !\CSite::InDir('/index.php')){
                    ?>
                    <header>
                        <h1> <? $APPLICATION->ShowTitle(false) ?> </h1>
                    </header>
                    <?php } ?>