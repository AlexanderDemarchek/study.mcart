<?
    // session_start();
    // CModule::AddAutoloadClasses(
    //     'main', 
    //     array(
    //         // ключ - имя класса, значение - путь относительно корня сайта к файлу с классом
    //             'OnAuth' => '/local/php_interface/include/OnAuth.php'
    //         )
    // );

        $eventManager = \Bitrix\Main\EventManager::getInstance();

        $eventManager->addEventHandler('', 'agentsOnAfterAdd', 'clearagentsCache');
        $eventManager->addEventHandler('', 'agentsOnAfterUpdate', 'clearagentsCache');
        $eventManager->addEventHandler('', 'agentsOnAfterDelete', 'clearagentsCache');
        
        function clearagentsCache($event)
        {
                
            $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
            $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
        }

    include("include/OnAuth.php");
?>