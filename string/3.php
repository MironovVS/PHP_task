<?php
//�  ������ ������ ����� ���������� ����

$str="qwertt1uits4d5ghn";
$c=0;
for ($i=0; $i<strlen($str); $i++){
  if (preg_match("/^[0-9]/",$str[$i])){
    $c += 1;
  }
}
echo "�  ������ ������ $c ����";
