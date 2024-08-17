<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>

<? 
  use Bitrix\Main\Localization\Loc;
  Loc::loadLanguageFile(__FILE__);
?>

<?
 $arFilter = ['PROPERTY_PRIORITY_VALUE' => 'Приоритетная'];
 

 $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"ads", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31 536 000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "ads",
		"DETAIL_URL" => "#SITE_DIR#/obyavleniya/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "arFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRIORITY",
			1 => "PRICE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_PRIORITY",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?><br>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<span class="icon mr-3 flaticon-house"></span>
					<div class="text">
					<h2 class="mt-0"><?=Loc::getMessage("WIDE_SELECT")?></h2>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"COMPONENT_TEMPLATE" => ".default",
								"EDIT_TEMPLATE" => "",
								"PATH" => SITE_TEMPLATE_PATH."/include/page/col1.php"
							)
						);?>
					</p>
				</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 					<span class="icon mr-3 flaticon-rent"></span>
						<div class="text">
							<h2 class="mt-0"><?=Loc::getMessage("RENT_OR_SALE")?></h2>
							<p>
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"COMPONENT_TEMPLATE" => ".default",
										"EDIT_TEMPLATE" => "",
										"PATH" => SITE_TEMPLATE_PATH."/include/page/col2.php"
									)
								);?>
							</p>
						</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          		<div class="feature d-flex align-items-start">
            		<span class="icon mr-3 flaticon-location"></span>
            		<div class="text">
              			<h2 class="mt-0"><?=Loc::getMessage("PROPERTY_LOCATION")?></h2>
              			<p>
						  <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPONENT_TEMPLATE" => ".default",
									"EDIT_TEMPLATE" => "",
									"PATH" => SITE_TEMPLATE_PATH."/include/page/col3.php"
								)
							);?>
              			</p>
            		</div>
          		</div>
        	</div>

		</div>
	</div>
</div>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new_ads", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31 536 000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#/obyavleniya/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_FLOORS",
			4 => "PROPERTY_SQUARE",
			5 => "PROPERTY_HAVE_GARAGE",
			6 => "PROPERTY_BATHROOMS",
			7 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "new_ads"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31 536 000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "PROPERTY_DESC",
			2 => "PROPERTY_LINK",
			3 => "PROPERTY_TITLE",
			4 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"news", 
	array(
		"COMPONENT_TEMPLATE" => "news",
		"IBLOCK_TYPE" => "news",
		"IBLOCKS" => array(
			0 => "1",
		),
		"NEWS_COUNT" => "3",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DATE_CREATE",
			4 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "31 536 000",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "j M Y"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>