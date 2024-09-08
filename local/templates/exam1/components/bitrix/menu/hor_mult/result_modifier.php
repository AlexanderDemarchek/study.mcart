<?php
foreach($arResult as &$arItem){
        if($arItem["IS_PARENT"]){
        $path = $arItem["LINK"];
        $name = explode("/",$path);
        $arItem["NAME"] = $name[count($name) - 2];
    }
}

?>