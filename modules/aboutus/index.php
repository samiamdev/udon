<?
//�ҡ�ա�����¡������µç
if (preg_match("/index.php/i",$PHP_SELF)) {
    Header("Location: ../index.php");
    die();
}
?>