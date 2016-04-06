<?php
//Замените в строке все вхождения 'word' на 'letter'.

$str="adsdasdword";
$str_aim="word";
$srt_pattern="letter";

echo $str=str_replace($str_aim, $srt_pattern, $str);
