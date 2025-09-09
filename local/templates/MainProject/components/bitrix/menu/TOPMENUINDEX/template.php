<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
/** @var array $arResult*/
/** @var array $arParams*/

?>
<? if (!empty($arResult)) {
 ?>

<nav class="menu">
        <?
        foreach ($arResult as $arItem) {

            if ($arItem["SELECTED"]) {
                ?>
                <a class="menu__item" href="views/films/index.php">
                    <img src="assets/icons/film.svg" alt="Фильмы" class="menu__item-img">
                    <h2 class="menu__item-title h1"><? $arItem["TEXT"]?></h2>
                </a>
            <? } else { ?>
                <a href="<?= $arItem["LINK"] ?>" class="header__nav-link"><?= $arItem["TEXT"] ?></a>
            <? } ?>

        <? } ?>
</nav>
<?php
} ?>

