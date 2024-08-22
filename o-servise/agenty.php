<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
$APPLICATION->AddChainItem("Агенты", SITE_DIR . "/o-servise/agenty.php");
?>

<?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"NEWS_COUNT" => "20",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"HLBLOCK_TNAME" => "agents"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>