<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult ['SHOW_ERRORS'] == 'Y' && $arResult ['ERROR'])
	ShowMessage ( $arResult ['ERROR_MESSAGE'] );

//vardump($arParams);
//dump($arResult);
CJSCore::Init();
?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
	$cpt = new CCaptcha();
	$captchaPass = COption::GetOptionString("main", "captcha_password", "");	if(strlen($captchaPass) <= 0)	{	    $captchaPass = randString(10);	    COption::SetOptionString("main", "captcha_password", $captchaPass);
}
	$cpt->SetCodeCrypt($captchaPass);
	?>


<?
if($arResult["FORM_TYPE"] == "login"){?>
<div class="actions-block" style="padding-top:15px">
    <nav class="menu-block">
	<ul>
		<li class="att popup-wrap">
			<a id="hd_singin_but_open" class="btn-toggle" href=""><?=GetMessage("AUTH_LOGIN_LINK_TEXT")?></a>
			<form class="frm-login popup-block" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
				<div class="frm-title"><?=GetMessage("AUTH_LOGIN_LINK_TEXT")?></div>
				<a href="" class="btn-close"><?=GetMessage("AUTH_LOGIN_LINK_CLOSE_TEXT")?></a>
				<?if($arResult["BACKURL"] <> ''):?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?endif?>
				<?foreach ($arResult["POST"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>
					<input type="hidden" name="AUTH_FORM" value="Y" />
					<input type="hidden" name="TYPE" value="AUTH" />
				<div class="frm-row">
					<input type="text" placeholder="<?=GetMessage("AUTH_LOGIN")?>" name="USER_LOGIN" maxlength="50" value="" size="17" />
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
				<div class="frm-row">
					<input type="password" placeholder="<?=GetMessage("AUTH_PASSWORD")?>" name="USER_PASSWORD" maxlength="50" size="17" autocomplete="off" />			
				</div>
				<div class="frm-row">
					<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="btn-forgot"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
				</div>
				<div class="frm-row">
					<div class="frm-chk">
						<input type="checkbox" id="login" name="USER_REMEMBER" value="Y"> <label for="login"><?=GetMessage("AUTH_REMEMBER_ME_SHORT")?></label>
					</div>
				</div>
				<div class="frm-row">
					<input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>">
				</div>	
				<div class="frm-row">
					<p>Войти через:</p>
				<?

					$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
						array(
							"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
							"SUFFIX"=>"form",
						),
						$component,
						array("HIDE_ICONS"=>"Y")
					);
					?>
				</div>
				<?if($arResult["CAPTCHA_CODE"]):?>
					<div class="frm-row" style="margin-bottom:10px">
						<p>Введите слово на картинке:</p>
						<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" style="margin-bottom:10px"/>
						<span class="starrequired"></span><?=GetMessage("CAPTCHA_REGF_PROMT")?></td>
						<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
					</div>
				<?endif;?>
			</form></li>
		<li><a href="<?=SITE_DIR . "login/registration.php"?>"><?=GetMessage("AUTH_REGISTER")?></a></li>
	</ul>
</nav>
					</div>				
<?
}
else
{
	$logout = $APPLICATION->GetCurPageParam("logout=yes&login_form=yes&".bitrix_sessid_get(),
											[
												"login",
												"logout",
												"register",
												"forgot_password",
												"change_password"
											]);
?>



<div class="actions-block">
                    <form action="<?=$arResult["AUTH_URL"]?>" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li>
                                <a href="<?=SITE_DIR?>login/user.php" ><?=$arResult["USER_NAME"]?> [user]</a>
                            </li>
                            <li><a href="<?=$logout?>">Выйти</a>
                            </li>
                        </ul>
						
                    </nav>
                </div>
<?
}
?>

<?
$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
	array(
		"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
		"AUTH_URL"=>$arResult["AUTH_URL"],
		"POST"=>$arResult["POST"],
		"POPUP"=>"Y",
		"SUFFIX"=>"form",
	),
	$component,
	array("HIDE_ICONS"=>"Y")
);
?>

