<?php
#### ʤ��껹����㹡���� �����͡�Թ�����ѧ ����ʤ��껹��������˹�ҷ��س��ͧ�������� ####

if(!$login_true) {
exit() ;
echo " bgcolor=E8E8E8";
}
### ������� ###
//�к���Ҫԡ����� maxsite 1.10 �Ѳ���� www.narongrit.net

?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body bgcolor="E8E8E8">
<strong><font color="#FF6633" size="1" face="MS Sans Serif, Tahoma, sans-serif"> 
<?php
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$result = mysql_query("select * from member where user='$login_true'") or die ("Err Can not to result") ;
$dbarr = mysql_fetch_array($result) ;


?>&nbsp;
Wellcome <?php echo $dbarr['user'] ; ?> </font> </strong> 
</body>
</html>
