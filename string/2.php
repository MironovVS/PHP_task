<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 30.03.2016
 * Time: 16:57
 */
//Дана строка. Если ее длина больше 10,
//то оставить в строке только первые 6 символов,
//иначе дополнить строку символами 'o' до длины 12.
//

$str="12345";

if (strlen($str)>=10){
  echo $str_new=substr($str, 0, 6);
}
else
  echo $str_new=str_pad($str, 12, "o");
