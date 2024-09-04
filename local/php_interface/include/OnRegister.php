<?
    AddEventHandler("main", "OnEpilog", Array("OnRegister", "AfterRegister"));
    class OnRegister
    {
        public static function AfterRegister()
        {
            if($_GET["register"] == "yes"){
                $path= SITE_DIR . 'user/';
                LocalRedirect($path);
            }
        }
    }
?>