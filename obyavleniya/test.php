<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new_ads", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31 536 000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#/obyavleniya/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_FLOORS",
			4 => "PROPERTY_SQUARE",
			5 => "PROPERTY_HAVE_GARAGE",
			6 => "PROPERTY_BATHROOMS",
			7 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "new_ads"
	),
	false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>