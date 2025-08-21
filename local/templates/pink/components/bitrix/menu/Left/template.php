<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <div class="side-block side-menu">
        <div class="title-block">Навигация</div>
        <div class="menu-block">
            <ul>
            <?
//            echo '<pre>'.print_r($arResult,true).'</pre>';
            foreach ($arResult as $arItem):
            if ($arResult["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>

                <li <?= $arItem['SELECTED'] ? 'class="selected"' : '' ?>>
                    <a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?> </a>
                </li>

                <? endforeach ?>
            </ul>
        </div>
    </div>
<? endif ?>





