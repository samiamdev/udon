<?

// - - - - - - - - - - �������õԴ��Ͱҹ������ - - - - - - - - - - //

// ��˹�������������� , ���Ͱҹ������ , ���ͼ����ҹ  ��� ���ʼ�ҹ ����Ѻ�Դ��͡Ѻ�ҹ������
$ServerName = "".DB_HOST."";
$DatabaseName = "".DB_NAME."";
$User = "".DB_USERNAME."";
$Password = "".DB_PASSWORD."";

$startdate = "".WEB_TIMESTART.""; // �ѹ���������鹹Ѻ�ӹǹ��Ҫԡ
$time_delay = 600; // �Ѻ�ӹǹ��Ҫ���й�� 㹪�ǧ���� 10 �ҷ� ( 600 �Թҷ� )
		
// �Դ��͡Ѻ�ҹ�����ż�ҹ�ѧ��ѹ�ͧ MySQL
$Conn = mysql_connect($ServerName,$User,$Password) or die ("�������ö�Դ��͡Ѻ�����������");
mysql_select_db($DatabaseName,$Conn) or die ("�������ö�Դ��͡Ѻ�ҹ��������");

?>
