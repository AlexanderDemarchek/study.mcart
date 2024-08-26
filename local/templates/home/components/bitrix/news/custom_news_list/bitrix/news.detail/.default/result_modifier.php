<?
$arResult["test"] = $arResult["IBLOCK_ID"];

if(CModule::IncludeModule("iblock")){
    $materialsProperty = CIBlockElement::GetProperty(
        $arResult["IBLOCK_ID"],
        $arResult["ID"],
        ["sort"=>"asc"],
        ["CODE" => "MATERIALS"]
    );
    while($propertyData = $materialsProperty->fetch()){
        $materialID = $propertyData["VALUE"];
        $arResult["DISPLAY_PROPERTIES"]["MATERIALS"][] = CFile::GetByID($materialID);
    }
}