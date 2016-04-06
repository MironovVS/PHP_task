<?php

// Пользователь вводит названия городов через пробел.
// Переставьте названия так, чтобы названия были упорядочены
// по алфавиту.

$str="bgfg asd cds fsafvd dasd";
$cityes=explode(" ", $str);
sort($cityes);

//#1
for ($i=0; $i<count($cityes); $i++){
	echo $cityes[$i]."<br>";
}

//#2
$cityes = implode(", ", $cityes);
echo $cityes;