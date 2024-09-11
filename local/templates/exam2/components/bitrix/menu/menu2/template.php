<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav class="nav">
	<div class="inner-wrap">
		<div class="menu-block popup-wrap">
			<a href="" class="btn-menu btn-toggle"></a>
			<div class="menu popup-block">
			<ul>
				<li class="main-page"><a href="<?=SITE_DIR?>">Главная</a>
					</li>
					<?
					$previousLevel = 0;
					foreach($arResult as $arItem):?>
						<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
							<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
						<?endif?>

						<?if ($arItem["IS_PARENT"]):?>
							<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
								<ul>
								
								<div class="menu-text">
									<?=$arItem["PARAMS"]["SUB_TEXT"]?>
								</div>
								
						<?else:?>

							<?if ($arItem["PERMISSION"] > "D"):?>
								<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
							<?else:?>
								<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
							<?endif?>

						<?endif?>
						<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
					<?endforeach?>

					<?if ($previousLevel > 1)://close last item tags?>
						<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
					<?endif?>

					</ul>
					<div class="menu-clear-left"></div>
					<?endif?>

			</div>
			<div class="menu-overlay"></div>
		</div>
	</div>
</nav>





