
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
	<?
$APPLICATION->SetTitle("Тест");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"COMPONENT_TEMPLATE" => "nav",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>