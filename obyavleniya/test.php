<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("not_show_nav_chain", "N");
$APPLICATION->SetTitle("Тест");
?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

$nav = new \Bitrix\Main\UI\PageNavigation("nav-agents");
?>

<?
        $APPLICATION->IncludeComponent(
	"bitrix:main.pagenavigation", 
	"nav", 
	array(
		"NAV_OBJECT" => $nav,
		"SEF_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);
        ?>


<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>