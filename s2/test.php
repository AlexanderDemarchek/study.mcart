<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:event_list",
	"",
	Array(
		"FILTER" => array("12"),
		"FORUM_MESSAGE_PATH" => "#SITE_ID#community/forum/messages/forum#FORUM_ID#/topic#TOPIC_ID#/message#MESSAGE_ID#/#message#MESSAGE_ID#",
		"FORUM_PATH" => "#SITE_ID#community/forum/forum#FORUM_ID#/",
		"FORUM_TOPIC_PATH" => "#SITE_ID#community/forum/forum#FORUM_ID#/topic#TOPIC_ID#/",
		"PAGE_NUM" => "10",
		"USER_PATH" => "#SITE_ID#company/personal/user/#user_id#/"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>