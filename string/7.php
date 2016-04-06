<?php
// Дана строка, состоящая из слов, разделенных символами,
// которые перечислены во второй строке. Показать все слова.
$str="asda+sasdAasd+asd_dfgdf/qw";
$str_pattern="|[-_+/]|";
$arr=preg_split($str_pattern, $str);
for ($i=0; $i<count($arr); $i++){
	echo $arr[$i]."<br>";
}
