<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);



if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">

				<?if ($arResult["NavPageNomer"] >= 4):?>
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a>
					<?if ($arResult["NavPageNomer"] > 4):?>
					<span>...</span>
					<?endif?>
				<?endif?>

				<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
					<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
						<a class="active"><?=$arResult["nStartPage"]?></a>
					<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
						<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
					<?else:?>
						<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
					<?endif?>
					<?$arResult["nStartPage"]++?>
				<?endwhile?>
				
				<?if ($arResult["NavPageNomer"] <= $arResult["NavPageCount"] - 3):?>
					<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"] - 3):?>
					<span>...</span>
					<?endif?>
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["NavPageCount"]?></a>
				<?endif?>

            </div>
          </div>  
        </div>
