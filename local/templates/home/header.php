<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<? 
  use Bitrix\Main\Localization\Loc;
  Loc::loadLanguageFile(__FILE__);
?>
<html lang="<?=LANGUAGE_ID?>">
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
<?

 use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

?>
</head>

<body>

<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>
  <?endif?>

<div class="site-loader"></div>

<div class="site-wrap">
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> 
  <!-- .site-mobile-menu -->

  <div class="border-bottom bg-white top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-6">
          <p class="mb-0">
            <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> 
              <span class="d-none d-md-inline-block ml-2">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include", 
                  ".default", 
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/header/phone.php",
                    "COMPONENT_TEMPLATE" => ".default"
                  ),
                  false
                );?>
              </span>
            </a>
            <a href="#"><span class="text-black fl-bigmug-line-email64"></span> 
              <span class="d-none d-md-inline-block ml-2">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/include/header/email.php",
                      "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                  );?>
              </span>
            </a>
          </p>
        </div>
        <div class="col-4 col-md-4 text-right">
          <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH .  "/include/header/icons.php",
                      "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
            );?>
        </div>
        <div class="col-1 col-md-1 text-right">
          <a href="/login" class="text-black"><?=GetMessage("LOGIN")?></a>
        </div>
        
        <div class="col-1 col-md-1 text-right">
          <a href="/user/register.php" class="text-black"><?=GetMessage("REGISTER")?></a>
        </div>  
      </div>
    </div>

  </div>
  <div class="site-navbar">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-4">
          <h1 class=""><a href="index.html" class="h5 text-uppercase text-black">
            <strong>
              <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH .  "/include/header/title.php",
                      "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
              );?>
              <span class="text-danger">.</span>
            </strong></a></h1>
        </div>
            <?
            $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "31 536 000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
		"MENU_THEME" => "site"
	),
	false
);
            ?>
      </div>
    </div>
    <?
    $this_page = $APPLICATION->GetCurPage();
    if($this_page <> SITE_DIR){
      $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"COMPONENT_TEMPLATE" => "nav",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);
    }
?>
  </div>
</div>  



