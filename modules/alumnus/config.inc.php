<?
empty($_GET['name'])?$name="":$name=$_GET['name'];
empty($_GET['file'])?$file="":$file=$_GET['file'];
empty($_SESSION['admin_user'])?$admin_user="":$admin_user=$_SESSION['admin_user'];
empty($_SESSION['admin_pwd'])?$admin_pwd="":$admin_pwd=$_SESSION['admin_pwd'];
empty($_SESSION['login_true'])?$login_true="":$login_true=$_SESSION['login_true'];
// ( 1 ) ��駤�ҵ�ҧ� �ͧ MySQL Server
	$host = "".DB_HOST."";
	$user = "".DB_USERNAME."";	
	$passwd = "".DB_PASSWORD."";
	$dbname = "".DB_NAME."";
	$tblname = "".TB_ALUMNUS."";

// ( 2 ) Admin Password ���ź

	$admin_uid = "".$admin_user."";
	$admin_pwd = "".$admin_pwd."";

// ( 3 ) ��駤�Ҩӹǹ����ʴ���
	$list_page = 10;

// ( 4 ) ��˹���Ҵ�ͧ�Ҿ���͹حҵ��� upload �� (˹����� byte)
	$Image_size = 51200;	// 10240 = 10 kbytes
    $Image_msg = " 50 kb ";
	$imgWidth = 120; //��Ҵ�������ҧ�ͧ�ٻ �������ö��������Թ...

// ( 5 ) Path ���ٻ��Ҫԡ
	$path = "icon"; # ��駤�� directory ������ٻ��� post ŧ����

// ( 6 ) �������ͧ����������
	$webmaster_email = "".WEB_EMAIL."";

// ( 7 ) �������
	$urlweb = "".WEB_URL.""; 

// ( 8 ) �բͧ���ҧ
	$rowColor1 = "#FDEAFB"; //�յ��ҧ 1
	$rowColor2 = "#F0F0F0"; //�յ��ҧ 2 ����Ѻ�Ѻ �յ��ҧ 1



?>