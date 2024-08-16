<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"news", 
	array(
		"COMPONENT_TEMPLATE" => "news",
		"IBLOCK_TYPE" => "news",
		"IBLOCKS" => array(
			0 => "1",
		),
		"NEWS_COUNT" => "3",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DATE_CREATE",
			4 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "31 536 000",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "j M Y"
	),
	false
);?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>