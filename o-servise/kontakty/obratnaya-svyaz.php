<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->AddChainItem("Обратная связь", SITE_DIR . "/o-servise/kontakty/obratnaya-svyaz.php");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"custom_feedback",
	Array(
		"COMPONENT_TEMPLATE" => "custom_feedback",
		"EMAIL_TO" => "demarchek11@mail.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
Array()
);?>
			</div>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>