<?
// скрипт в файле /bitrix/php_interface/init.php
AddEventHandler("main", "OnBeforeUserRegister", Array("OnAuth", "BeforeRegister"));
class OnAuth
{
	public static function BeforeRegister(&$arFields)
	{
        $group = "buyer";
        if($_POST["USER_GROUP"] && !empty($_POST["USER_GROUP"]))
        {
            $group = $_POST["USER_GROUP"];
        }

        $idBuyerGroup = CGroup::GetList($by = "c_sort", 
                                        $order = "asc", 
                                        array("STRING_ID"=>'buyer'))->fetch()["ID"];

        $idSellerGroup = CGroup::GetList($by = "c_sort", 
                                        $order = "asc", 
                                        array("STRING_ID"=>'seller'))->fetch()["ID"];
        
        $id = $idBuyerGroup;
        if($group === "seller")
        {
            $id = $idSellerGroup;
        }

        $arFields["GROUP_ID"] = [$id];

	}
}
?>