<?php

$str="abdccabc";
$str_state="abc";
$str_state_replace="www";
$str_add="zzz";

/**
 * ���� ������ $str. ���� ��� ���������� �� $str_state,
 * �� �������� �� �� $str_state_replace , ����� �������� � ����� ������ $str_add.
 * @$str - ������ �����
 * @$str_state - ������ ��� ����� �������� � ������ ������ ������� ������
 * @$str_state_replace - ���� @$str_state ����, �� �������� �� @$str_state_replace
 * @$str_add - ���� @$str_state ���, �� � ����� ������ ��������� @$str_add
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




