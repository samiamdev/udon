<?php
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
//�к���Ҫԡ����� maxsite 1.10 �Ѳ���� www.narongrit.net

// �������кػ�㹡�ä���
if(isset($check_year) and $check_year =="no") {
$year = "" ;
}
if(empty($year) and (isset($check_year) and $check_year=="yes")) {
$year = 0 ;
}

// ����������������§�ӴѺ��Ҫԡ�ҡ�ӴѺ����ش
if(empty($level)) {
$level = "id_desc" ;
}

// �Ҩӹǹ��Ҫԡ������
$check_m = mysql_query("select * from ".TB_MEMBER."") ;
$member_all = mysql_num_rows($check_m) ;

// ��˹����������鹵�ҧ� ������ྨ
if(empty($search)) {
$result2 = mysql_query("select * from ".TB_MEMBER."") ;
$rows2 = mysql_num_rows($result2) ;
}
if((empty($check_year) or $check_year=="no") and isset($search)) {
$result2 = mysql_query("select * from ".TB_MEMBER." where date='$date' and month='$month' ") ;
$rows2 = mysql_num_rows($result2) ;
}
if(isset($check_year) and ($check_year=="yes")) {
$result2 = mysql_query("select * from ".TB_MEMBER." where date='$date' and month='$month' and year='$year' ") ;
$rows2 = mysql_num_rows($result2) ;
}

// �ӹǹ pagesize ���ͨӹǹ���Ԫԡ ��١��˹�������Ƿ����� config.inc.php 㹵���� $member_num_show_last 
$totalpage = (int)($rows2/$member_num_last) ;
if(($rows2%$member_num_last) !=0) {
$totalpage+=1 ;
}
if(isset($page)) {
$start = $member_num_show_last * ($page-1) ;
}
else {
$start = 0 ;
$page = 1 ;
}


// ���������礤�ҵ�ҧ� Ẻ�觨ӹǹ��Ҫԡ��������������˹�
if(empty($search)) { // ����������ҵ�� �ѹ ��͹ ��
// ������͡����ʴ���Ҫԡ���á��͹
if($level=="normal") {
$result = mysql_query("select * from member limit $start ,$member_num_last") ;
}
if($level=="id_desc") {
$result = mysql_query("select * from member order by id desc limit $start , $member_num_last") ;
}
}
else { 

##// ����Դ�������ä��� //##

// ���������͡��㹡�ä���
if((empty($check_year) or $check_year=="no") and isset($search)) {
$result = mysql_query("select * from member where date='$date' and month='$month' ") ;
$rows = mysql_num_rows($result) ;
}
// ������͡��㹡�ä���
if(isset($check_year) and ($check_year=="yes")) {
$result = mysql_query("select * from member where date='$date' and month='$month' and year='$year' ") ;
$rows = mysql_num_rows($result) ;
}
} // �� else ����ա�ä���

// �������ա�ä��� ��ͤ��������� ���͡�ӹǹ��Ҫԡ������
//if(empty($search)) {
//echo "<center><font size='2'><b>5 ��Ҫԡ����ش�ҡ $member_all ��ҹ</b><font></center>" ;
//}
// ����ա�ä��� ����ʴ�����Ѿ��㹡�ä���᷹
//if(isset($search)) {
//echo "<center><font size='2' face='MS Sans Serif' color='red'><b>��Ҫԡ����Դ�ѹ��� $date/$month/$year �ըӹǹ������ $rows  ��</b></font></center>" ;
//echo "" ;
//}

while($dbarr = mysql_fetch_array($result)) {

?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><br><center>
		  <font size="2"><?=_MEMBER_MOD_FORM_LASTMEM_LAST;?> <strong><?php echo $dbarr['user'] ; ?></strong></font></td>
          </center></td>
        </tr>
      </table>
        <?php 
}

?>
</p>
