<?php
/**
 * Created by PhpStorm.
 * User: �����������
 * Date: 30.03.2016
 * Time: 16:57
 */
//���� ������. ���� �� ����� ������ 10,
//�� �������� � ������ ������ ������ 6 ��������,
//����� ��������� ������ ��������� 'o' �� ����� 12.
//

$str="12345";

if (strlen($str)>=10){
  echo $str_new=substr($str, 0, 6);
}
else
  echo $str_new=str_pad($str, 12, "o");
