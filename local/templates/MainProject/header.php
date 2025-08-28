<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowHead();
    $asset->addCss(SITE_TEMPLATE_PATH . 'css/style.css');

    ?>

</head>
<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo logo" href="/">
            <img src="/assets/icons/logo.svg" alt="" class="logo__img">
            <span class="logo__title">MEGAFILM </span>
        </a>
        <nav class="header__nav">
            <a href="/views/films/index.php" class="header__nav-link">Фильмы</a>
            <a href="/views/series/index.php" class="header__nav-link">Сериалы</a>
            <a href="/views/music/index.php" class="header__nav-link">Клипы</a>
            <a href="/views/sport/index.php" class="header__nav-link">Спорт</a>
        </nav>
        <div class="header__menu">
            <?php
            if (isset($_SESSION['userId'])) {
                if ($user['avatar'] != null && $user['avatar'] != '') {
                    $avatar = $user['avatar'];
                } else {
                    $avatar = '/assets/icons/Profile.svg';
                } ?>
                <form action="/views/accaunt/index.php">
                    <button type="submit" class="header__accaunt-btn"><img alt=" " src="<?='/'. $avatar ?>"
                                                                           class="header__accaunt-img "
                                                                           id="accauntBtn"></button>
                </form>
            <?php } else { ?>
                <button class="header__accaunt-btn"><img src="/assets/icons/Profile.svg" alt=""
                                                         class="header__accaunt-img " id="accauntBtn"></button>
            <?php } ?>
        </div>
    </div>
</header>

<?php

if (isset($_SESSION['userId'])) {
if ($user['role'] == 'admin') { ?>
    <br><br><br>
    <h1>Добро пожаловать в админ панель!!! </h1>
    <a href="/controllers/AdminController.php" class="button"> Перейти в редактор </a>
    <br><br><br>
<?php }
}
?>




