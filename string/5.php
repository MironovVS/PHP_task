<?php
//Удалите в строке все буквы 'x', за которыми следует 'abc'.

$str="aaxabcdefxabcxadbc";
$letter_search="x";
$str_condition="abc";

while (stripos($str, $letter_search.$str_condition)){
  $i=stripos($str, $letter_search.$str_condition);
  $str=substr_replace($str, "", $i, strlen($letter_search));
}
echo $str;

