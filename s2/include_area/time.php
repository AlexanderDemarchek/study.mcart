
<?
    $timeNow = new DateTime();
    $timeNow = $timeNow->format("H:i");
    $beginWorkDay = "09:00";
    $endWorkDay = "18:00";
    $isWorkTime = false;
    if($timeNow > $beginWorkDay && $timeNow < $endWorkDay){
        $isWorkTime = true;
    }
?>

<div class="main-phone-block">
<a href="mailto:store@store.ru" class="phone"><?=$isWorkTime ? "8(495) 212-85-06" : "store@store.ru"?></a>
<div class="shedule">время работы с 9-00 до 18-00</div>
</div>

