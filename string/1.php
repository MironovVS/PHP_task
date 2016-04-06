<?php

$str="abdccabc";
$str_state="abc";
$str_state_replace="www";
$str_add="zzz";

/**
 * ƒана строка $str. ≈сли она начинаетс€ на $str_state,
 * то заменить их на $str_state_replace , иначе добавить в конец строки $str_add.
 * @$str - строка ввода
 * @$str_state - строка или набор символов в начале строки предмет поиска
 * @$str_state_replace - если @$str_state есть, то замен€ем на @$str_state_replace
 * @$str_add - если @$str_state нет, то в конец строки добавл€ем @$str_add
 */
for ($i = 0; $i < strlen($str_state); ++$i) {
  if ($str[$i] == $str_state[$i]) {
    $c += 1;
    if ($c == strlen($str_state)) {
      $str_new = substr($str, strlen($str_state),strlen($str));
      $str_new = $str_state_replace.$str_new;
      echo $str_new;
    }
  } else {
      echo $str.$str_add;
      break;
  }
}




