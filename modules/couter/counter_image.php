<?php
header("Content-type: image/png");
$img = ImageCreate(18, 25);
ImageColorAllocate($img, 0, 0, 0);  //��˹�����ٻ���մ�

$orange = ImageColorAllocate($img, 255, 128, 0);

/* ����� $num ��͵����Ẻ�ź�ŷ��١�ŧ�Ҩҡ query string ������ 
   counter.php ������� */
ImageChar($img, 5, 5, 5, $num, $orange);

ImagePNG($img);
ImageDestroy($img);
?>
