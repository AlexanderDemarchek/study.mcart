<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main\Web\Json;

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}

//one css for all system.auth.* forms
$APPLICATION->SetAdditionalCSS("/bitrix/css/main/system.auth/flat/style.css");
?>

<noindex>

<div class="site-section">
      <div class="container">
        <div class="row">  
          <div class="col-md-12 col-lg-8 mb-5">
			<?
			if(!empty($arParams["~AUTH_RESULT"]["MESSAGE"])):
				$text = str_replace(array("<br>", "<br />"), "\n", $arParams["~AUTH_RESULT"]["MESSAGE"]);
			?>
				<div class="alert <?=($arParams["~AUTH_RESULT"]["TYPE"] == "OK"? "alert-success":"alert-danger")?>"><?=nl2br(htmlspecialcharsbx($text))?></div>
			<?endif?>

			<?if($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
				<div class="alert alert-success"><?echo GetMessage("AUTH_EMAIL_SENT")?></div>
			<?endif?>

			<?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
				<div class="alert alert-warning"><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></div>
			<?endif?>

            <form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data" class="p-5 bg-white border">
				<input type="hidden" name="AUTH_FORM" value="Y" />
				<input type="hidden" name="TYPE" value="REGISTRATION" />

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="firstname"><?=GetMessage("AUTH_NAME")?></label>
                  <input id="firstname" type="text" name="USER_NAME" maxlength="255" value="<?=$arResult["USER_NAME"]?>" class="form-control" placeholder="<?=GetMessage("AUTH_NAME")?>">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="surname"><?=GetMessage("AUTH_LAST_NAME")?></label>
                  <input id="surname" type="text" name="USER_LAST_NAME" maxlength="255" value="<?=$arResult["USER_LAST_NAME"]?>" class="form-control" placeholder="<?=GetMessage("AUTH_LAST_NAME")?>">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="login">
					<span style="color:orange;">*</span>
				  <?=GetMessage("AUTH_LOGIN_MIN")?>
				  </label>
                  <input id="login" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" placeholder="<?=GetMessage("AUTH_LOGIN")?>">
                </div>
              </div>


			  <div class="row form-group">
                <div class="col-md-12">
				<?if($arResult["SECURE_AUTH"]):?>
					<div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none"><div class="bx-authform-psw-protected-desc"><span></span><?echo GetMessage("AUTH_SECURE_NOTE")?></div></div>

					<script>
					document.getElementById('bx_auth_secure').style.display = '';
					</script>
				<?endif?>
                  <label class="font-weight-bold" for="email"><span style="color:orange;">*</span> <?=GetMessage("AUTH_PASSWORD_REQ")?></label>
                  <input type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" autocomplete="off" class="form-control" placeholder=<?=GetMessage("AUTH_PASSWORD_REQ")?>>
                </div>
              </div>

			  <div class="row form-group">
                <div class="col-md-12">
				<?if($arResult["SECURE_AUTH"]):?>
					<div class="bx-authform-psw-protected" id="bx_auth_secure_conf" style="display:none"><div class="bx-authform-psw-protected-desc"><span></span><?echo GetMessage("AUTH_SECURE_NOTE")?></div></div>

					<script>
						document.getElementById('bx_auth_secure_conf').style.display = '';
					</script>
				<?endif?>
                  <label class="font-weight-bold" for="authconf"><span style="color:orange;">*</span> <?=GetMessage("AUTH_CONFIRM")?></label>
                  <input type="password" id="authconf" class="form-control" placeholder="<?=GetMessage("AUTH_CONFIRM")?>"
				  name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" autocomplete="off">
                </div>
              </div>

			<?if($arResult["EMAIL_REGISTRATION"]):?>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email"><?if($arResult["EMAIL_REQUIRED"]):?><span style="color:orange;">*</span><?endif?> <?=GetMessage("AUTH_EMAIL")?></label>
                  <input type="email" id="email" name="USER_EMAIL" class="form-control" 
				  placeholder="<?=GetMessage("AUTH_EMAIL")?>" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>">
                </div>
              </div>
			<?endif?>

			
			<div class="row form-group">
			<div class="col-md-12">
			   <label class="font-weight-bold"><?=GetMessage("REGISTER_HOW")?>:</label>
			    </div>
				</div>
				<div class="row form-group">
                <div class="col-md-3">
				<input type="radio" name="USER_GROUP" checked value="buyer"/>
				<label for="buyer"><?=GetMessage("BUYER")?></label>
				</div>

				<div class="col-md-3">
				<input type="radio" name="USER_GROUP" value="seller"/>
				<label for="seller"><?=GetMessage("SELLER")?></label>
				</div>					  
            </div>


			<?if ($arResult["USE_CAPTCHA"] == "Y"):?>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />

				<div class="row form-group">
				
                <div class="col-md-12">
					<label class="font-weight-bold" for="captcha">
						<span style="color:orange;">*</span> <?=GetMessage("CAPTCHA_REGF_PROMT")?>
					</label>
					<div class="bx-captcha" style="margin-bottom:10px;"><img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /></div>
						<input class="form-control" type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" id="captha"/>
					</div>
                </div>
			<?endif?>
              

              <div class="row form-group">
                <div class="col-md-12">
					<input type="submit" class="btn btn-primary" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" />
				</div>
              </div>

			  <hr class="bxe-light">

			<div class="bx-authform-description-container">
				<?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
			</div>

			<div class="bx-authform-description-container">
				<span style="color:orange;">*</span> <?=GetMessage("AUTH_REQ")?>
			</div>

			<div class="bx-authform-link-container">
				<a href="<?=SITE_DIR . "user/"?>" rel="nofollow"><b><?=GetMessage("AUTH_AUTH")?></b></a>
			</div>

            </form>

			<script>
				document.bform.USER_NAME.focus();
			</script>
</noindex>
			</div>   
          </div>
        </div>
      </div>
    </div>
