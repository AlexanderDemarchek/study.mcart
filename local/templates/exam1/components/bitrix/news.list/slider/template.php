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
?>

<div class="item-wrap">
	<div class="rew-footer-carousel">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
							<? 
								$src = "";
								if($arItem["DETAIL_PICTURE"]){
									$pict = CFile::ResizeImageGet(
										$arItem["DETAIL_PICTURE"],
										["width" => 39, "height" => 39],
										BX_RESIZE_IMAGE_EXACT,
										false
									);
									$src = $pict["src"];
								}else{
									$src = SITE_TEMPLATE_PATH . "/img/rew/no_photo_left_block.jpg";
								}
							?>
							<img src="<?=$src?>" alt="">
						</div>
						<div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
						<div class="pos-block"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>,"<?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?>"</div>
					</div>
					<div class="text-block"><?=$arItem["PREVIEW_TEXT"]?></div>
					</div>
				</div>
							</div>
		<?endforeach;?>
	</div>	
</div>
							
		

		
	

