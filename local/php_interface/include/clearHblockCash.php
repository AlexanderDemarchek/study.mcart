<?
$eventManager = \Bitrix\Main\EventManager::getInstance();

        $eventManager->addEventHandler('', 'agentsOnAfterAdd', 'clearagentsCache');
        $eventManager->addEventHandler('', 'agentsOnAfterUpdate', 'clearagentsCache');
        $eventManager->addEventHandler('', 'agentsOnAfterDelete', 'clearagentsCache');
        
        function clearagentsCache($event)
        {
            $tableName = "agents";

            $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
            $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
        }

        ?>