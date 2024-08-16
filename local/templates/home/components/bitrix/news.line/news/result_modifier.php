<?
    foreach($arResult["ITEMS"] as &$arItem){
        $arItem["FORMAT_DATE_CREATE"] = $DB->FormatDate($arItem["DATE_CREATE"], "DD.MM.YYYY", "DD.MM.YYYY");
        //CSite::GetDateFormat($arItem["DATE_CREATE"]);
    }
?>