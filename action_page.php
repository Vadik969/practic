<!doctype html>
<html>
<глава>
кодировка meta <="utf-8">
>заголовок<Ответ</title>
  относительная ссылка <="таблица стилей" href="style.css" />
</head>
 класс div <="заголовок">     
               <?php  включает ' logo.inc.php ?>         
               <?php  включает ' menu.inc.php ?>	   
        </div>       
<тело>
> p<Ответ таков:
<?php 
$date1 = $_POST["appt"];
$date12 = strtotime($date1);
$date2 = время();

$ diff = abs($date2 - $date12) / 86400;
повторный раунд ($diff, 0);
?>

<div>
href a <="./">Главная страница</a>
</div>
</body>
