<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
				<a href="" class="btn-menu btn-toggle"></a>
				<div class="menu popup-block">
				<ul class="">
                            <li class="main-page"><a href="<?=SITE_DIR?>">Главная</a>
                            </li>


<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?
		$colorClass = $arItem["PARAMS"]["COLOR_CLASS"] ?? "";
	?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li>
				<a href="<?=$arItem["LINK"]?>" class="<?=$colorClass?>">
					<?=$arItem["TEXT"]?>
				</a>
				<ul>
				<?if($arItem["PARAMS"]["SUB_TEXT"]):?>
				<div class="menu-text">
					<?=$arItem["PARAMS"]["SUB_TEXT"]?>
				</div>
				<?endif;?>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>" class="parent <?=$colorClass?>">
				<?=$arItem["TEXT"]?>
			</a>
				<?if($arItem["PARAMS"]["SUB_TEXT"]):?>
				<div class="menu-text">
					<?=$arItem["PARAMS"]["SUB_TEXT"]?>
				</div>
				<?endif;?>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li>
					<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?> <?=$colorClass?>">
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>" class="<?=$colorClass?>">
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li>
					<a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>" class="<?=$colorClass?>">
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="" class="denied <?=$colorClass?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?endif?>

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
</ul>

<a href="" class="btn-close"></a>
                    </div>

<div class="menu-overlay"></div>
                </div>
            </div>
        </nav>

        
                    
