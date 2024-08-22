<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?
$APPLICATION->SetTitle("Тест");
?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<pre>
<?=print_r(\Bitrix\Highloadblock\HighloadBlockTable::getTableName(
)
)?>
</pre>