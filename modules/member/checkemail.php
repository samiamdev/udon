<?php
include_once ("../../mainfile.php");

	$strEmailname = trim($_POST["email"]);

	if(trim($strEmailname) == "")
	{
		echo "empty";
		exit();
	}
	
	if(preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $strEmailname) ) {
//		return "����������������ԧ";
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); // �������Ͱҹ������ 
$db_query = $db->select_query("SELECT * FROM ".TB_MEMBER." WHERE email='".$strEmailname."' "); // �֧���������ç�ѹ㹵��ҧ��Ҫԡ 
$objResult = $db->fetch($db_query); 

	if($objResult)
	{
	echo '<font color="red">The email <strong><font color=#00CC00>'.$strEmailname.'</font></strong> is already in use.</font>';
		exit();
	}
	else
	{
		echo "<img src='modules/member/img/tick.gif' align='absmiddle'>";
	}
$db->closedb (); 
	}else{
		echo "<font color='red'><strong>invalid</strong></font>";
		exit();
	}
?>