<?php

$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");

$file = file_get_contents("F:\RTU GSM\S220 GSM GPRS Remote Controller PC Configurator V2.1\profile\severtxt.txt");


$re = "/^#STA:(\\d+);TM:([\\d\\/:,]+);C:(\\d+);V:(\\d+\\.\\d+);AD01:(\\d+);AD02:(\\d+);AD03:(\\d+);AD04:(\\d+);AD05:(\\d+);AD06:(\\d+);AD11:(\\d+\\.\\d+);AD12:(-\\d\\.\\d+);AD15:(\\d+);AD16:(\\d+);AD17:(\\d+);AD18:(\\d+);PU01:(\\d+);PU02:(\\d+);PU03:(\\d+);PU04:(\\d+);PU05:(\\d+);PU06:(\\d+);DI:(\\d+);DO:(\\d+);/"; 

preg_match_all($re, $file, $matches,PREG_PATTERN_ORDER);


echo "<b>Station ID </b>\n"."<b>TIME </b>\n"."<b>Counter </b>"."<b>Voltage</b>\n".
"<b>AD01 </b>\n"."<b>AD02 </b>\n "."<b>AD03 </b>\n"." <b>AD04 </b>\n"."<b>AD05 </b>\n";
echo "<br>";
echo $matches[1][0]."\n".$matches[2][0]."\n".$matches[3][0]."\n".$matches[4][0]."\n".$matches[5][0]."\n".$matches[6][0]."\n".$matches[7][0]."\n".$matches[8][0]."\n".$matches[9][0]."\n".$matches[10][0]."\n".$matches[11][0];

?>
Rahul • Now
