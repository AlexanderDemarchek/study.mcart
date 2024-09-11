<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<div class="bx-system-auth-form"><div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">

<?if($arResult["FORM_TYPE"] == "login"):?>

<form class="p-5 bg-white border" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />

	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Имя</label>
            <input type="text" id="fullname" name="USER_LOGIN" class="form-control" placeholder="Full Name" maxlength="50" value="" size="17">
			<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
        </div>
    </div>

	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="passw">Пароль</label>
            <input type="password" id="passw" name="USER_PASSWORD" 
			class="form-control" maxlength="255" size="17" autocomplete="off" />
        </div>
		<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
		<script>
			document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
		</script>
		<?endif?>
    </div>
	<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
		<div class="row form-group">
			<div class="col-md-12 mb-3 mb-md-0">
				<input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
				<label for="USER_REMEMBER_frm" title="Запомнить пароль">Запомнить пароль</label>
			</div>
		</div>
	<?endif?>
	<?if ($arResult["CAPTCHA_CODE"]):?>
			<tr>
				<td colspan="2">
				<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
				<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
				<input type="text" name="captcha_word" maxlength="50" value="" /></td>
			</tr>
	<?endif?>
	
	<div class="row form-group">
        <div class="col-md-12">
            <input type="submit" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
        </div>
    </div>

	<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
		<noindex>
			<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow">Регистрация</a>
		</noindex><br /></td>
	<?endif?> 
	<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?>

</form>

<?
else:
?>
<form action="<?=$arResult["AUTH_URL"]?>">
	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
            <p>Вы успешно авторизовались как пользователь: 
				<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=$arResult["USER_NAME"]?></a>
			</p>
        </div>
    </div>

	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
			<?foreach ($arResult["GET"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>
			<?=bitrix_sessid_post()?>
			<input type="hidden" name="logout" value="yes" />
        </div>
    </div>
		<?php
// ссылка для выхода из личного кабинета
$logout = $APPLICATION->GetCurPageParam(
    "logout=yes&".bitrix_sessid_get(),
    array(
        "login",
        "logout",
        "register",
        "forgot_password",
        "change_password"
    )
);
?>
	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
		<a class="btn btn-primary  py-2 px-4 rounded-0" href="<?=$logout?>"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
        </div>
    </div>
</form>
<?endif?>


			</div>
        </div>
      </div>
    </div>
