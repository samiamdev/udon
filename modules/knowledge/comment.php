<?
//���¡ user online ������
			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
			$res['user2'] = $db->select_query("SELECT * FROM ".TB_useronline." ");			
			$rows['user2'] = $db->rows($res['user2']);
//�֧ user online ��� table TB_user
	//		while($arr['user2'] = $db->fetch($res['user2'])){	
			$arr['user2'] = $db->fetch($res['user2']);		
			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
			$res['user'] = $db->select_query("SELECT * FROM ".TB_MEMBER." WHERE user='".$arr['user2']['useronline']."' ");		
			$arr['user'] = $db->fetch($res['user'])	;
//			if ($admin_user<>"" || $login_true<>"" ){


if(!$_POST['NAME'] OR !$_POST['COMMENT']){
	echo "<script language='javascript'>" ;
	echo "alert('"._JAVA_DATA_NULL."')" ;
	echo "</script>" ;
	echo "<script language='javascript'>javascript:history.go(-1)</script>";
	exit() ;
}
 if($login_true || $admin_user){
} else {
if(USE_CAPCHA){
check_captcha($_POST['security_code']);
}
}
checkban($_POST['NAME']);
checkban($_POST['COMMENT']);

$_GET['id'] = intval($_GET['id']);
//�ӡ������������ŧ�ҵ����
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$db->add_db(TB_KNOWLEDGE_COMMENT,array(
	"knowledge_id"=>"".$_GET['id']."",
	"name"=>"".htmlspecialchars($_POST['NAME'])."",
	"comment"=>"".$_POST['COMMENT']."",
	"ip"=>"".$IPADDRESS."",
	"post_date"=>"".TIMESTAMP.""
));
$db->closedb ();
?>
	<TABLE cellSpacing=0 cellPadding=0 width=750 border=0>
      <TBODY>
        <TR>
          <TD width="10" vAlign=top></TD>
          <TD width="740" vAlign=top>
		  <!-- News -->
		  &nbsp;&nbsp;<IMG SRC="images/menu/textmenu_knowledge2.gif" BORDER="0"><BR><BR>
				<BR><BR><BR><BR>
				<CENTER><IMG SRC="images/icon/download.gif" BORDER="0"><BR><BR>
				<FONT SIZE="3" COLOR="#336600"><B><?=_FROM_COMMENT_ACC;?></B></FONT><BR><BR>
				<A HREF="?name=knowledge&file=readknowledge&id=<?=$_GET['id'];?>"><?=_FROM_COMMENT_INDEX;?></A>
				</CENTER>

				<BR><BR><BR><BR>
			<!-- End News -->
		  </TD>
        </TR>
      </TBODY>
    </TABLE>
		<?
//			} else {
//include 'modules/user/danger.html';
//		  }
		  ?>