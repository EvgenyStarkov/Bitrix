<?php
/** @var  $arResult */
foreach ($arResult["ITEMS"] as &$arItem){
    $arItem['PREVIEW_PICTURE']['SRC'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['width' => 100, 'height' => 100])['src'];
}
