<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($arParams["TEMPLATE_THEME"]) && isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>

<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
			<?if ($arResult["CURRENT_PAGE"] > 1):?>
					<a href="<?=htmlspecialcharsbx($arResult["URL"])?>">1</a>
			<?else:?>
					<a class="active">1</a>
			<?endif?>
			
			<?if ($arResult["CURRENT_PAGE"] > 4):?>
				<span>...</span>
			<?endif;?>

			<?
			$page = $arResult["START_PAGE"] + 1;
			while($page <= $arResult["END_PAGE"]-1):
			?>
				<?if ($page == $arResult["CURRENT_PAGE"]):?>
					<a class="active"><?=$page?></a>
				<?else:?>
					<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><?=$page?></a>
				<?endif?>
				<?$page++?>
			<?endwhile?>

			<?if ($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]-3):?>
				<span>...</span>
			<?endif;?>

			<?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
				<?if($arResult["PAGE_COUNT"] > 1):?>
					<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a>
				<?endif?>
			<?else:?>
				<?if($arResult["PAGE_COUNT"] > 1):?>
					<a class="active"><?=$arResult["PAGE_COUNT"]?></a>
				<?endif?>
			<?endif?>
		</div>
    </div>  
</div>


