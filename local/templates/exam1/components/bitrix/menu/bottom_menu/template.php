<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	
<div class="item">
	<div class="title-block">О магазине</div>
		<ul>
<?
foreach($arResult as $arItem):
?>
		<li>
			<a href="<?=$arItem["LINK"]?>" >
				<?=$arItem["TEXT"]?>
			</a>
		</li>
<?endforeach;?>

	</ul>
</div>
<?endif?>

