
<?php

$count_page = ("hitcount.txt ");
$hits = файл ($count_page);
$hits[0] ++;

$ fp = fopen($count_page , "w");
fputs($fp, "$hits[0]");
fclose($fp);
$ попадает в echo[0];

?>
