<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->AddChainItem("Обратная связь", SITE_DIR . "/o-servise/kontakty/obratnaya-svyaz.php");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "demarchek11@mail.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>