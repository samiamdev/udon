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
			?>
<html>
<head>
<script language="Javascript" type="text/javascript">
var counter=10
function countdown() {
  if (counter==0) {
    document.getElementById("download").value="Download Now"
    document.getElementById("download").disabled=""
  } else {
    document.getElementById("download").value="<? echo _RESEARCH_MOD_DOWN_WAIT;?>"+counter
    document.getElementById("download").disabled="disabled"
    counter--
    setTimeout("countdown()", 1000)
  }
}
countdown()
</script>
<script> 
var statusmsg=""

function hidestatus(){
window.status=statusmsg
return true
}

</script>
</head>
<body onLoad="countdown('10')">
	<TABLE cellSpacing=0 cellPadding=0 width=500 border=0>
      <TBODY>
        <TR>
          <TD width="10" vAlign=top></TD>
          <TD width="490" vAlign=top>
		  <!-- download -->
		  &nbsp;&nbsp;<IMG SRC="images/menu/research.gif" BORDER="0"><BR><BR>
				<TABLE width="490" align=center cellSpacing=0 cellPadding=0 border=0>
<?
$_GET['id'] = intval($_GET['id']);
//�ʴ��������/��Ъ�����ѹ�� 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res['research'] = $db->select_query("SELECT * FROM ".TB_RESEARCH." WHERE id='".$_GET['id']."' ");
$arr['research'] = $db->fetch($res['research']);
$db->closedb ();
$dirs=$arr['research']['posted'];
$stam=$arr['research']['post_date'];
$filess=$_GET['filess'];
if(!$filess){
	echo "<BR><BR><BR><BR><CENTER><IMG SRC=\"images/icon/notview.gif\" BORDER=\"0\" ><BR><BR><B>"._RESEARCH_MOD_DOWN_NOID." </B></CENTER><BR><BR><BR><BR>";
}
?>
				<TR>
					<TD height="1" class="dotline" ></TD>
				</TR>
				<TR>
					<TD align=center width="80%" ><br>
					<?
					 if($filess){ 	  
?>
<h5><img src="images/header.gif"><br><?=_RESEARCH_MOD_DOWN_BUTTON_LOAD;?></h5>
<? }

  
  //$file=$arr['research']['full_text'];
  $wb_picture="data/".$filess.""; //������ͧ��ô�ǹ���Ŵ
  //�� ��ҹ������ͧ��ô�ǹ���Ŵ
  

?>

<table id=maintable border=0 cellpadding=0 cellspacing=0 align=center width=100% height=100%><tr><td align=center>
<?
  echo ""._RESEARCH_MOD_DOWN_WAIT_LOAD." <a href=$wb_picture> "._RESEARCH_MOD_DOWN_WAIT_LOAD_CLICK."</a> ";
  echo "<br /> <br />"._RESEARCH_MOD_DOWN_THANK." ";
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$q['Pageview'] = "UPDATE ".TB_RESEARCH." SET rate = rate+1 WHERE id = '".$_GET['id']."' ";
	$sql['Pageview'] = mysql_query ( $q['Pageview'] ) or sql_error ( "db-query",mysql_error() );
		$db->closedb ();

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res['research'] = $db->select_query("SELECT * FROM ".TB_RESEARCH." WHERE id='".$_GET['id']."' ");
$arr['research'] = $db->fetch($res['research']);
$db->closedb ();
$rate=$arr['research']['rate'];
  //�ѹ�֡�ӹǹ��ô�ǹ���Ŵŧ���
  $count=$rate;
  $downloads=file("research.dat"); //��ҹ�����Ũҡ���ŧ�� array (�繺�÷Ѵ)
  $f=fopen ("research.dat", "w"); //�Դ���������¹
  for ($i=0; $i<count($downloads); $i++) {
    $data=explode("|", trim($downloads['$i']));
    if ($data[0]==$file) {
      $count=$data[1];
      $count++;
    } else fwrite($f, "$data[0]|$data[1] ");
  }
  fwrite($f, "$file|$count ");
  fclose($f);
  //�� �ѹ�֡�ӹǹ��ô�ǹ���Ŵŧ���

  
  //�ʴ��� �ӹǹ��ô�ǹ���Ŵ
  echo "<table border=0 cellspacing=2 cellpadding=2 align=center> ";
  echo "<tr> ";
  echo "<td align=center bgcolor=#5083F9><font color=white size=1>"._RESEARCH_MOD_DOWN_COUNT."</font></td> ";
  echo "<td align=center bgcolor=#D5D8F9><font size=1>".substr("0000$count", -4)."</font></td> ";
  echo "</tr> ";
  echo "</table> ";
  
//  echo "<br /><br /><br />[ <a href=javascript:window.close()>�Դ˹�ҹ��</a> ] ";
?>
<center><input type="button" onclick="window.open('<?=WEB_URL."/".$wb_picture;?>')" id="download" onMouseover="return hidestatus()"></center>
<!--��ǹ���Ŵ ���� 2 �Թҷ�-->
<!--<META HTTP-EQUIV=refresh CONTENT="2; URL=<?=$wb_picture?>">-->
<!--�Դ˹�ҹ�� ���� 10 �Թҷ�-->
<script language=JavaScript>
setTimeout('CloseThisWindow()', 10000)

function CloseThisWindow() {
  window.close()
}
</script>
</td></tr></table>


					</TD>
				</table>

				</td>
				</tr>
				</table>
</body>
</html>
<?

//			} else {
//include 'modules/user/danger.html';
//		  }
		  ?>