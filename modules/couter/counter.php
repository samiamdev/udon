<?php
$globals_test = @ini_get('register_globals');
if ( isset($globals_test) && empty($globals_test) ) {
$types_to_register = array('GET', 'POST', 'COOKIE', 'SESSION', 'SERVER');
foreach ($types_to_register as $type) {
$arr = @${'_' . $type};
if (@count($arr) > 0)
extract($arr, EXTR_SKIP);
}
}
//����ѧ�������� counter.txt ������ҧ����� ���纵���Ţ 0 ���
if (file_exists("modules/couter/counter.txt") == false) {
  $fp = fopen("modules/couter/counter.txt", "w");
  fputs($fp, 0);
  fclose($fp);
}

//�Դ��� counter.txt ������ҹ����ѡ�� 6 ����á������������� $pgcount
$fp = fopen("modules/couter/counter.txt", "r");
$pgcount = fgets($fp, 6);
fclose($fp);

++$pgcount;                      //������ҵ���� $pgcount ��� 1
$pgcount = "00000" . $pgcount;   //��� 00000 ��˹��

//�Ѵʵ�ԧ�������� 6 ����ѡ�� ����ҷҧ��Ңͧʵ�ԧ����ѡ
$pgcount = substr($pgcount, -6);

//�Ԩ�ó�ʵ�ԧ $pgcount ���е���ѡ�� (��觡��͵���Ţ������ѡ)
for ($i=0; $i<=strlen($pgcount)-1; $i++) {
  /* ���͵��Ժ�ǵ� src �ͧ�� <img> ���¡��ѧ��� counter_image.php 
     ���觼�ҹ query string ������� */
  echo "<img src=\"modules/couter/counter_image.php?num=$pgcount[$i]\">";
}

//��¹��Ңͧ����� $pgcount ��Ѻŧ������ counter.txt
$fp = fopen("modules/couter/counter.txt", "w");
fputs($fp, (int) $pgcount);
fclose($fp);
?>
