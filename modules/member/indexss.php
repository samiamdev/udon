<?php
$year=date('Y');
$yearlast=$year+488;
	$Year = date("Y")+544;
	$thaiweekFull=array("�ѹ�ҷԵ�� ���","�ѹ�ѹ��� ���","�ѹ�ѧ��� ���","�ѹ�ظ ���","�ѹ����ʺ�� ���","�ѹ�ء�� ���","�ѹ����� ���");
	$thaimonthFull=array("���Ҥ�","����Ҿѹ��","�չҤ�","����¹","����Ҥ�","�Զع�¹","�á�Ҥ�","�ԧ�Ҥ�","�ѹ��¹","���Ҥ�", "��Ȩԡ�¹","�ѹ�Ҥ�");
	$thaimonth=array("�.�.","�.�.","��.�.","��.�.","�.�.","��.�.","�.�.","�.�.","�.�.","�.�.", "�.�.","�.�.");

	//�س����ö���͡��ҹ�� 3 ���ҧ���.. $mdate ���� $ThaiDate ���� $ThaiDateFull

	// 3 �.�. 2544
	$mdate = date("j ",mktime( date("H")+$hour, date("i")+$min )). $thaimonth[date("m")-1]." ".$Year; 

	// 3 �.�. 2544 ���� 12:36 �.
	$ThaiDate = date("j ").$thaimonth[date("m")-1]." ".$Year.date(" ���� H:i �.",mktime( date("H")+$hour, date("i")+$min )); 
	
	// �ѹ�ء���� 3 �.�. 2544 ���� 12:36 �.
	$ThaiDateFull = $thaiweekFull[date("w")]. date(" j "). $thaimonthFull[date("m")-1]. " ". $Year . date(" ���� H:i �.",mktime( date("H")+$hour, date("i")+$min )); 

	// ������ �Թҷ� �Ѻ�ҡ�� �.�.1900
	$Logtime = date("U",mktime( date("H")+$hour, date("i")+$min ));

//include "modules/alumnus/config.inc.php";

?>
<HTML>
<HEAD>

<!-- ���� ᶺ�� -->
<SCRIPT LANGUAGE="javascript"> 
function mOvr(src,clrOver){ 
if (!src.contains(event.fromElement)){ 
src.style.cursor = 'hand'; 
src.bgColor = clrOver; 
} 
} 
function mOut(src,clrIn){ 
if (!src.contains(event.toElement)){ 
src.style.cursor = 'default'; 
src.bgColor = clrIn; 
} 
} 
</SCRIPT> 

<TITLE>���ʴդ�Ѻ��Ҫԡ���� ��� ��Ҫԡ��ҷء��ҹ</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-874">
</HEAD>
<BODY>
<TABLE WIDTH="750"  border="0" ALIGN="center" CELLPADDING="0" CELLSPACING="0">
  <TR>
            <TD width="10" vAlign=top</TD>
          <TD width="740" vAlign=top colspan="2">

      &nbsp;&nbsp;<IMG SRC="images/menu/textmenu_member.gif" BORDER="0">
				<TABLE width="740" align=center cellSpacing=0 cellPadding=0 border=0>
				<TR>
					<TD height="1" class="dotline" colspan="4"></TD>
				</TR>
      <TR>

        <TD WIDTH="65%"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
          <TR>
            <TD> </TD>
          </TR>
          <TR>
            <TD VALIGN="top">
              <FORM name ="checkForm" ACTION="?name=member&file=member_add_new" METHOD="post" onSubmit="return check()" ENCTYPE="multipart/form-data">
                <TABLE WIDTH="480" BORDER="0" ALIGN="center" CELLPADDING="2" CELLSPACING="3">
				
                  <TR>
                    <TD COLSPAN="2">
                      <P ALIGN="center"> <STRONG><FONT SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">&nbsp;&nbsp;��سҡ�͡��������´����Ѻ��Ѥ���Ҫԡ</FONT></STRONG></P></TD>
                  </TR>
				      <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">
                      <P><STRONG><FONT COLOR="#0000FF" SIZE="1" FACE="MS Sans Serif, Tahoma, sans-serif"><IMG SRC="images/admin/user.gif" ></FONT></STRONG></P></TD>
                    <TD WIDTH="79%" BGCOLOR="#FFFFFF"><STRONG><FONT COLOR="#0000FF" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">��������ǹ��Ǽ����Ѥ�</FONT></STRONG></TD>
                  </TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108 height=2> ���� :</TD>
<TD width=345 height=2><INPUT maxLength=30 size=45 name=first_name>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>���ʡ�� :</TD>
<TD width=345><INPUT maxLength=40 size=45 name=last_name>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>������� :</TD>
<TD width=345><INPUT maxLength=20 size=45 name=nic_name>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>�ѹ/ ��͹/ ���Դ :</TD>
<?
$dt=date('d');
$mt=date('m');
$yy=date('Y');
$yt=$yy+543;
echo "<TD width=400><SELECT name=day>
		<option >--</option>";
for($i=1;$i<32;$i++){
		if ($i<10) {
			$d='0'.$i;
echo 	"<option value=$d>0$i</option>";
	} else {
echo 	"<option value=$i>$i</option>";
	}
}
echo "</select>";
$vmont = Array ("���Ҥ�","����Ҿѹ��","�չҤ�",
"����¹","����Ҥ�","�Զع�¹", "�á�Ҥ�","�ԧ�Ҥ�","�ѹ��¹",
"���Ҥ�","��Ȩԡ�¹","�ѹ�Ҥ�"); 

echo "<select  name=month size=1>
		<option >------------</option>";
for($i=0;$i<count($vmont);$i++){
echo 	"<option value=$vmont[$i]>$vmont[$i]</option>";
}
echo "</select>";

echo "<select  name=year size=1>
		<option >------</option>";
for($a=$yearlast;$a<$Year;$a++){
echo 	"<option value=$a>$a</option>";
}
echo "</select>";

?>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>���� :</TD>
<TD width=345><INPUT name=age id="age" size=4 maxLength=2>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>�� :</TD>
<TD width=345><INPUT name=sex type=radio value=1 checked>
<img src="modules/alumnus/img/male.gif" > ���
<INPUT type=radio value=2 name=sex>
<img src="modules/alumnus/img/female.gif"> ˭ԧ
<INPUT type=radio value=3 name=sex>
<img src="modules/alumnus/img/notsoure.gif"> ������<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1">&nbsp;&nbsp;<STRONG>������� : </STRONG></FONT></FONT></TD>
                    <TD BGCOLOR="#FFFFFF"><INPUT NAME="address" TYPE="text" ID="address" SIZE="50" MAXLENGTH="150"></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><STRONG>&nbsp;&nbsp;�����/ࢵ : </FONT></STRONG></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT NAME="amper" TYPE="text" ID="amper" SIZE="30">
                    </FONT></TD>
                  </TR>
<TR vAlign=top>
<TD vAlign=center align=right width=108>�ѧ��Ѵ :</TD>
<TD width=345><select name=province id="province" >
<option value="0" selected>- - - - - ���͡ - - - - -</option>
<option value="��к��">��к��</option>
<option value="��ا෾��ҹ��">��ا෾��ҹ��</option>
<option value="�ҭ������">�ҭ������</option>
<option value="����Թ���">����Թ���</option>
<option value="��ᾧྪ�">��ᾧྪ�</option>
<option value="�͹��">�͹��</option>
<option value="�ѹ�����">�ѹ�����</option>
<option value="���ԧ���">���ԧ���</option>
<option value="��¹ҷ">��¹ҷ</option>
<option value="�������">�������</option>
<option value="�����">�����</option>
<option value="�ź���">�ź���</option>
<option value="��§����">��§����</option>
<option value="��§���">��§���</option>
<option value="��ѧ">��ѧ</option>
<option value="��Ҵ">��Ҵ</option>
<option value="�ҡ">�ҡ</option>
<option value="��ù�¡">��ù�¡</option>
<option value="��û��">��û��</option>
<option value="��þ��">��þ��</option>
<option value="����Ҫ����">����Ҫ����</option>
<option value="�����ո����Ҫ">�����ո����Ҫ</option>
<option value="������ä�">������ä�</option>
<option value="��Ҹ����">��Ҹ����</option>
<option value="��ҹ">��ҹ</option>
<option value="�������">�������</option>
<option value="���������">���������</option>
<option value="��ШǺ���բѹ��">��ШǺ���բѹ��</option>
<option value="�����ҹ�">�����ҹ�</option>
<option value="��Ҩչ����">��Ҩչ����</option>
<option value="�ѵ�ҹ�">�ѵ�ҹ�</option>
<option value="�����">�����</option>
<option value="��й�������ظ��">��й�������ظ��</option>
<option value="�ѧ��">�ѧ��</option>
<option value="�ԨԵ�">�ԨԵ�</option>
<option value="��ɳ��š">��ɳ��š</option>
<option value="ྪú���">ྪú���</option>
<option value="ྪú�ó�">ྪú�ó�</option>
<option value="���">���</option>
<option value="�ѷ�ا">�ѷ�ا</option>
<option value="����">����</option>
<option value="�����ä��">�����ä��</option>
<option value="�ء�����">�ء�����</option>
<option value="�����ͧ�͹">�����ͧ�͹</option>
<option value="��ʸ�">��ʸ�</option>
<option value="����">����</option>
<option value="�������">�������</option>
<option value="�йͧ">�йͧ</option>
<option value="���ͧ">���ͧ</option>
<option value="�Ҫ����">�Ҫ����</option>
<option value="ž����">ž����</option>
<option value="�ӻҧ">�ӻҧ</option>
<option value="�Ӿٹ">�Ӿٹ</option>
<option value="���">���</option>
<option value="�������">�������</option>
<option value="ʡŹ��">ʡŹ��</option>
<option value="ʧ���">ʧ���</option>
<option value="��ط��Ҥ�">��ط��Ҥ�</option>
<option value="��طû�ҡ��">��طû�ҡ��</option>
<option value="��ط�ʧ����">��ط�ʧ����</option>
<option value="������">������</option>
<option value="��к���">��к���</option>
<option value="�ԧ�����">�ԧ�����</option>
<option value="��⢷��">��⢷��</option>
<option value="�ؾ�ó����">�ؾ�ó����</option>
<option value="����ɮ��ҹ�">����ɮ��ҹ�</option>
<option value="���Թ���">���Թ���</option>
<option value="ʵ��">ʵ��</option>
<option value="˹ͧ���">˹ͧ���</option>
<option value="˹ͧ�������">˹ͧ�������</option>
<option value="�ӹҨ��ԭ">�ӹҨ��ԭ</option>
<option value="�شøҹ�">�شøҹ�</option>
<option value="�صôԵ��">�صôԵ��</option>
<option value="�ط�¸ҹ�">�ط�¸ҹ�</option>
<option value="�غ��Ҫ�ҹ�">�غ��Ҫ�ҹ�</option>
<option value="��ҧ�ͧ">��ҧ�ͧ</option>
<option value="����">����</option>
</select>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1">&nbsp;&nbsp;<STRONG>������ɳ��� : </STRONG></FONT></FONT></TD>
                    <TD BGCOLOR="#FFFFFF"><INPUT NAME="zipcode" TYPE="text" ID="zipcode"></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1">&nbsp;&nbsp;<STRONG>�������Ѿ�� : </STRONG></FONT></FONT></TD>
                    <TD BGCOLOR="#FFFFFF"><INPUT NAME="phone" TYPE="text" ID="phone"></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;&nbsp;<STRONG>����֡�� : </STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <SELECT NAME="education">
                        <OPTION selected VALUE="">���͡�дѺ����֡��</OPTION>
                        <OPTION VALUE="��ж��֡��">��ж��֡��</OPTION>
                        <OPTION VALUE="�Ѹ���֡�ҵ͹��">�Ѹ���֡�ҵ͹��</OPTION>
                        <OPTION VALUE="�Ѹ���֡�ҵ͹����">�Ѹ���֡�ҵ͹����</OPTION>
                        <OPTION VALUE="�Ҫ���֡�� / ����Ҫվ">�Ҫ���֡�� / ����Ҫվ</OPTION>
                        <OPTION VALUE="��ԭ�ҵ��">��ԭ�ҵ��</OPTION>
                        <OPTION VALUE="��ԭ���">��ԭ���</OPTION>
                        <OPTION VALUE="�٧���һ�ԭ���">�٧���һ�ԭ���</OPTION>
                      </SELECT>
                    </FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;&nbsp;<STRONG>�Ҫվ : </STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <SELECT NAME="work" >
                        <OPTION VALUE="" selected>���͡�Ҫվ</OPTION>
                        <OPTION VALUE="�ѡ���¹/�ѡ�֡��">�ѡ���¹/�ѡ�֡��</OPTION>
                        <OPTION VALUE="��áԨ��ǹ���">��áԨ��ǹ���</OPTION>
                        <OPTION VALUE="ᾷ��/��Һ��">ᾷ��/��Һ��</OPTION>
                        <OPTION VALUE="���/�Ҩ����">���/�Ҩ����</OPTION>
                        <OPTION VALUE="�ѡ������/���¤���">�ѡ������/���¤���</OPTION>
                        <OPTION VALUE="����������">����������</OPTION>
                        <OPTION VALUE="���ǡ�/��ҧ">���ǡ�/��ҧ</OPTION>
                        <OPTION VALUE="��ѡ�ҹ�ѭ��/����Թ">��ѡ�ҹ�ѭ��/����Թ</OPTION>
                        <OPTION VALUE="��õ�Ҵ/��â��">��õ�Ҵ/��â��</OPTION>
                        <OPTION VALUE="�Ѻ�Ҫ���">�Ѻ�Ҫ���</OPTION>
                        <OPTION VALUE="����֡��">����֡��</OPTION>
                        <OPTION VALUE="��ѡ�ҹ�Ѱ����ˡԨ">��ѡ�ҹ�Ѱ����ˡԨ</OPTION>
                        <OPTION VALUE="��������/���Ѵ���">��������/���Ѵ���</OPTION>
                        <OPTION VALUE="��ѡ�ҹ�����">��ѡ�ҹ�����</OPTION>
                        <OPTION VALUE="��ԡ�÷�ͧ�����">��ԡ�÷�ͧ�����</OPTION>
                        <OPTION VALUE="�͡Ẻ/��䫹�">�͡Ẻ/��䫹�</OPTION>
                        <OPTION VALUE="��ѡ�ҹ�ç�ҹ">��ѡ�ҹ�ç�ҹ</OPTION>
                        <OPTION VALUE="�ѡ�Ԫҡ��/�ѡ�Ԩ�¤鹤���">�ѡ�Ԫҡ��/�ѡ�Ԩ�¤鹤���</OPTION>
                        <OPTION VALUE="��������ǹ��/�ѡ����">��������ǹ��/�ѡ����</OPTION>
                        <OPTION VALUE="����/�ѡ�ʴ�/�ѡ�����">����/�ѡ�ʴ�/�ѡ�����</OPTION>
                        <OPTION VALUE="��ҧ�ҹ">��ҧ�ҹ</OPTION>
                        <OPTION VALUE="�����ӧҹ">�����ӧҹ</OPTION>
                        <OPTION VALUE="����">����</OPTION>
                      </SELECT>
                    </FONT></TD>
                  </TR>
                  <TR>
                    <TD ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1"><STRONG>�ٻ��Ҫԡ: </FONT></STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF"><INPUT TYPE="file" NAME="FILE" STYLE="width:250" CLASS="inputform">
                      <BR>
                      Limit <?=(_MEMBER_LIMIT_UPLOAD/1024);?> kB, [�x�]=100x80 pixels </TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT COLOR="#0000FF"><STRONG><IMG SRC="images/admin/user.gif" ALIGN="absmiddle"> </STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">&nbsp; </FONT><FONT COLOR="#0000FF"><STRONG>�����Ţͧ��Ҫԡ�������������</FONT></STRONG></FONT>&nbsp; </FONT></TD>
                  </TR>
<script language="javascript"> 
<!-- 
var state = 'none'; 

function showhide(layer_ref) { 

if (state == 'block') { 
state = 'none'; 
} 
else { 
state = 'block'; 
} 
if (document.all) { //IS IE 4 or 5 (or 6 beta) 
eval( "document.all." + layer_ref + ".style.display = state"); 
} 
if (document.layers) { //IS NETSCAPE 4 or below 
document.layers[layer_ref].display = state; 
} 
if (document.getElementById &&!document.all) { 
hza = document.getElementById(layer_ref); 
hza.style.display = state; 
} 
}  
//--> 
</script> 
                  <TR>
                    <TD BGCOLOR="#FFFFFF" colspan="2" align="center">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="style">
<tr>
<td width="0%"><img src="modules/alumnus/img/bc_01.gif" width="22" height="21"></td>
<td width="100%" background="modules/alumnus/img/bc_02.gif">&nbsp;</td>
<td width="0%"><img src="modules/alumnus/img/bc_03.gif" width="22" height="21"></td>
</tr>
<tr>
<td background="modules/alumnus/img/bc_04.gif">&nbsp;</td>
<td align="center">
	<font color="#FF0066"><a href="#div1" onclick="showhide('div1');"><b><< ����Ѻ��ҹ��������������� �������>></FONT></a>
	<div id="div1" style="display: none;">
<SCRIPT src="modules/alumnus/check.js"></SCRIPT>
<SCRIPT src="modules/alumnus/function.js"></SCRIPT>
<TABLE width=471 border=0 align="center" cellPadding=3 class="style">
<TR vAlign=top>
<TD vAlign=center align=right width=135>���ʻ�Шӵ�ǻ�ЪҪ� :</TD>
<TD width=345><INPUT maxLength=30 size=30 name=numid><img src="modules/alumnus/img/priority.gif" width="11" height="12">
</TD>
</tr>
<TR vAlign=top>
<TD vAlign=center align=right width=108>���ʻ�Шӵ�ǹѡ���¹ :</TD>
<TD width=345><INPUT maxLength=30 size=30 name=schid> ** ���������������
</TD>
</tr>
<TR vAlign=top>
<TD vAlign=center align=right width=108>�� �.�. ��診����֡�� :</TD>
<TD width=345>
<?
echo "<select  name=yearfin size=1>
		<option >------</option>";
for($a=$yearlast;$a<$Year;$a++){
echo 	"<option value=$a>$a</option>";
}
echo "</select>";
?><img src="modules/alumnus/img/priority.gif" width="11" height="12">
</TD>
</tr>

<TR vAlign=top>
<TD vAlign=center align=right width=108>Homepage (�����) :</TD>
<TD width=345><INPUT name="website" id="website" value=http:// size=45 maxLength=100></TD>
</TR>

<TR vAlign=top>
<TD vAlign=center align=right width=108>ʶҹ�֡�� :</TD>
<TD width=345><INPUT maxLength=100 size=30 name=school> ** �ó��ѧ�֡�ҵ�ͷ�����
</TD>
</TR>
<TR vAlign=top>
<TD align=right width=108>���ӧҹ :</TD>
<TD width=345><INPUT maxLength=100 size=30 name=work1> ** �óշӧҹ����
</TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>�ҹʹ��á :</TD>
<TD><SELECT name=hobby>
<OPTION value="" selected>- - - - - - - ���͡ - - - - - - -</OPTION>
<OPTION 
 value=�͹>�͹</OPTION>
<OPTION 
 value=����§�ѵ��>����§�ѵ��</OPTION>
<OPTION 
 value=�ӧҹ��д�ɰ�>�ӧҹ��д�ɰ�</OPTION>
<OPTION value=�Ҵ�Ҿ>�Ҵ�Ҿ</OPTION>
<OPTION 
 value=�ӧҹ���>�ӧҹ���</OPTION>
<OPTION 
 value=��١�����>��١�����</OPTION>
<OPTION value="�ѡ����� �Ե���">�ѡ����� �Ե���</OPTION>
<OPTION 
 value=��ҹ˹ѧ���>��ҹ˹ѧ���</OPTION>
<OPTION 
 value=�������>�������</OPTION>
<OPTION 
 value=�����ٻ>�����ٻ</OPTION>
<OPTION 
 value=�ա���>�ա���</OPTION>
<OPTION 
 value=��蹿ص���>��蹿ص���</OPTION>
<OPTION value="��� internet">��� internet</OPTION>
<OPTION 
 value=��蹴����>��蹴����</OPTION>
<OPTION 
 value=���෹���>���෹���</OPTION>
<OPTION 
 value=���ẵ�Թ�ѹ>���ẵ�Թ�ѹ</OPTION>
<OPTION 
 value=�������>�������</OPTION>
<OPTION 
 value=���¹��>���¹��</OPTION>
<OPTION 
 value=��ͺ���>��ͺ���</OPTION>
<OPTION value=�����>�����</OPTION>
<OPTION value=��ö>��ö</OPTION>
<OPTION 
 value=�չ˹�Ҽ�>�չ˹�Ҽ�</OPTION>
<OPTION 
 value=��蹤���������>��蹤���������</OPTION>
<OPTION 
 value=���Ҿ¹�� ���� �մ���>���Ҿ¹�� ���� �մ���</OPTION>
<OPTION 
 value=�ѧ�ŧ>�ѧ�ŧ</OPTION>
<OPTION value=��ö>��ö</OPTION>
<OPTION 
 value=������ͧ���§>������ͧ���§</OPTION>
<OPTION 
 value=�������������>�������������</OPTION>
</SELECT></TD>
</TR>
<TR vAlign=top>
<TD vAlign=top align=right width=108>�ѡ������͹ :</TD>
<TD width=345><textarea name="comment" cols="45" rows="3"></textarea>
<img src="modules/alumnus/img/priority.gif" width="11" height="12"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>ICQ :</TD>
<TD><INPUT name=icq id="icq" size=10 maxLength=10></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>MSN :</TD>
<TD><INPUT name=msn id="msn" size=45 maxLength=50></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>YAHOO :</TD>
<TD><INPUT name=yahoo id="yahoo" size=30 maxLength=30></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>QQ :</TD>
<TD><INPUT name=qq id="qq" size=10 maxLength=10></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right><div align="right">Other :</div></TD>
<TD><input name="cam" type="checkbox" id="cam" value="1">
<img src="modules/alumnus/img/webcam.gif" width="23" height="18" align="absmiddle">
<input name="mic" type="checkbox" id="mic" value="1">
<img src="modules/alumnus/img/mic.gif" width="18" height="20" align="absmiddle"></TD>
</TR>
<TR vAlign=top>
<TD vAlign=center align=right>���͡�ͤ͹�ͧ��ҹ :</TD>
<TD><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="33%"><select name="icon" onChange="showimage()" class="text_box">
<?
								$handle=opendir('modules/alumnus/avartar/');
								while (false!==($file = readdir($handle))) { 
								 if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file != "guest.gif") { 
								 echo "<option value=".WEB_URL."/modules/alumnus/avartar/".$file.">$file</option>\n";
								 } 
								}
								closedir($handle);
						 	?>
</select></td>
<td width="67%"><img src="modules/alumnus/avartar/member.png" name="icons" border="0"></td>
</tr>
</table></TD>
</TR>
<TR vAlign=top>
<TD vAlign=top align=right>Emotion :</TD>
<TD><input name="emo" type="radio" value="e1" checked>
<img src="modules/alumnus/emotion/e1.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e2">
<img src="modules/alumnus/emotion/e2.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e3">
<img src="modules/alumnus/emotion/e3.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e4">
<img src="modules/alumnus/emotion/e4.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e5">
<img src="modules/alumnus/emotion/e5.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e6">
<img src="modules/alumnus/emotion/e6.gif" width="19" height="19" align="absmiddle"><br>
<input name="emo" type="radio" value="e7">
<img src="modules/alumnus/emotion/e7.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e8">
<img src="modules/alumnus/emotion/e8.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e9">
<img src="modules/alumnus/emotion/e9.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e10">
<img src="modules/alumnus/emotion/e10.gif" width="19" height="19" align="absmiddle">
<input name="emo" type="radio" value="e11">
<img src="modules/alumnus/emotion/e11.gif" width="20" height="20" align="absmiddle">
<input name="emo" type="radio" value="e12">
<img src="modules/alumnus/emotion/e12.gif" width="20" height="20" align="absmiddle"></TD>
</TR>
</TBODY>
</TABLE>
</div>
</td>
<td background="modules/alumnus/img/bc_06.gif">&nbsp;</td>
</tr>
<tr>
<td><img src="modules/alumnus/img/bc_07.gif" width="22" height="22"></td>
<td background="modules/alumnus/img/bc_08.gif">&nbsp;</td>
<td><img src="modules/alumnus/img/bc_09.gif" width="22" height="22"></td>
</tr>
</table>

</td>
</tr>

                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT COLOR="#0000FF"><STRONG><IMG SRC="images/admin/user.gif" ALIGN="absmiddle"> </STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">&nbsp; </FONT><FONT COLOR="#0000FF"><STRONG>������㹡���������к�</FONT></STRONG></FONT>&nbsp; </FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1"><STRONG>&nbsp;&nbsp;Login Name : </FONT></STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT NAME="user_name" TYPE="text" ID="user_name" SIZE="20" MAXLENGTH="30">
                      <FONT COLOR="#FF0000" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">&nbsp;**<STRONG>&nbsp;</FONT></STRONG></FONT></FONT><FONT COLOR="#FF0000" FACE="MS Sans Serif, Tahoma, sans-serif"><STRONG><FONT  size="1" FACE="MS Sans Serif, Tahoma, sans-serif">�����ʴ����������к� (�����ѧ�����ҹ��)</FONT></STRONG></FONT></FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;&nbsp;<STRONG>Password : </STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT NAME="pwd_name1" TYPE="password" ID="pwd_name1" SIZE="20" MAXLENGTH="30">
&nbsp;<FONT COLOR="#FF0000" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">**</FONT> </FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><STRONG>Re-password : </FONT></STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT NAME="pwd_name2" TYPE="password" ID="pwd_name2" SIZE="20" MAXLENGTH="30">
&nbsp;<FONT COLOR="#FF0000" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">**</FONT> </FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF"><FONT SIZE="1"><STRONG>Email : </FONT></STRONG></FONT></TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT NAME="email" TYPE="text" ID="email" SIZE="20">
&nbsp;<FONT COLOR="#FF0000" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">**</FONT></FONT></TD>
                  </TR>
<?
if(USE_CAPCHA){
?>
					<TR>
						<TD WIDTH="100" ALIGN="right">
						<?if(CAPCHA_TYPE == 1){ 
							echo "<img src=\"capcha/CaptchaSecurityImages.php?width=".CAPCHA_WIDTH."&height=".CAPCHA_HEIGHT."&characters=".CAPCHA_NUM."\" width=\"".CAPCHA_WIDTH."\" height=\"".CAPCHA_HEIGHT."\" align=\"absmiddle\" />";
						}else if(CAPCHA_TYPE == 2){ 
							echo "<img src=\"capcha/val_img.php?width=".CAPCHA_WIDTH."&height=".CAPCHA_HEIGHT."&characters=".CAPCHA_NUM."\" width=\"".CAPCHA_WIDTH."\" height=\"".CAPCHA_HEIGHT."\" align=\"absmiddle\" />";
						};?>
						</TD>
						<TD><INPUT NAME="security_code" TYPE="text" ID="security_code" MAXLENGTH="6" >&nbsp;<FONT COLOR="#FF0000" SIZE="2" FACE="MS Sans Serif, Tahoma, sans-serif">**</FONT>&nbsp;<B><FONT COLOR="#FF0000" FACE="MS Sans Serif, Tahoma, sans-serif">��������׹�ѹ��ͧ�ѹ spam</FONT></B></TD>
					</TR>
<?
}
//�к���Ҫԡ����� maxsite 1.10 �Ѳ���� www.narongrit.net

?>

                  <TR>
                    <TD ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;</TD>
                    <TD BGCOLOR="#FFFFFF">&nbsp;</TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;</TD>
                    <TD BGCOLOR="#FFFFFF"><FONT COLOR="#0000FF">��������´��ҧ�ж١��价ҧ����� <BR>
              �ҡ������ Inbox ����ͧ�ٷ�� Junk E-Mail �Ф�Ѻ&nbsp;</FONT><FONT COLOR="#0000FF" SIZE="2">&nbsp;</FONT><FONT COLOR="#0000FF" SIZE="1"><STRONG>&nbsp; </STRONG></FONT></FONT></TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;</TD>
                    <TD BGCOLOR="#FFFFFF">&nbsp;</TD>
                  </TR>
                  <TR>
                    <TD WIDTH="21%" ALIGN="right" BGCOLOR="#FFFFFF">&nbsp;</TD>
                    <TD BGCOLOR="#FFFFFF">
                      <INPUT TYPE="submit" NAME="Submit" VALUE="��Ѥ���Ҫԡ">
                      <INPUT TYPE="hidden" NAME="signup" VALUE="date()"> 
&nbsp;
              <INPUT TYPE="reset" NAME="Submit2" VALUE=" ������">
              <INPUT NAME="ok" TYPE="hidden" ID="ok2" VALUE="ok_pass">
                    </TD>
                  </TR>
                </TABLE>
                <SCRIPT LANGUAGE="javascript">

function check() {
if(document.checkForm.name.value=="") {
alert("��سҡ�͡����-���ʡ�Ŵ��¤�Ѻ") ;
document.checkForm.name.focus() ;
return false ;
}
else if(document.checkForm.year.value=="") {
alert("��سҡ�͡ �ѹ/��͹/���Դ ���ú��ǹ���¹Ф�Ѻ") ;
document.checkForm.year.focus() ;
return false ;
}
else if(isNaN(document.checkForm.year.value)) {
alert("���Դ�ͧ��ҹ ��سҡ�͡੾�е���Ţ�Ф�Ѻ") ;
document.checkForm.year.focus() ;
return false ;
}
else if(document.checkForm.age.value=="") {
alert("��سҡ�͡���ش��¤�Ѻ") ;
document.checkForm.age.focus() ;
return false ;
}else if(isNaN(document.checkForm.age.value)) {
alert("��سҡ�͡���ش��µ���Ţ��ҹ�鹤�Ѻ") ;
document.checkForm.age.focus() ;
return false ;
}
else if(document.checkForm.province.selectedIndex==0) {
alert("��س��кبѧ��Ѵ����ҹ������¤�Ѻ") ;
return false ;
}
else if(isNaN(document.checkForm.zipcode.value)) {
alert("������ɳ����ͧ�繵���Ţ��Ѻ") ;
document.checkForm.zipcode.focus() ;
return false ;
}
else if(document.checkForm.user_name.value=="") {
alert("��س��кت��ͷ���ҹ��ͧ�����㹡������к����¤�Ѻ") ;
document.checkForm.user_name.focus() ;
return false ;
}
else if(document.checkForm.pwd_name1.value=="") {
alert("��سҡ�͡���ʼ�ҹ����ͧ��ô��¤�Ѻ") ;
document.checkForm.pwd_name1.focus() ;
return false ;
}
else if(document.checkForm.pwd_name2.value=="") {
alert("��س��׹�ѹ���ʼ�ҹ�ա����") ;
document.checkForm.pwd_name2.focus() ;
return false ;
}
else if(document.checkForm.pwd_name1.value != document.checkForm.pwd_name2.value) {
alert("���ʼ�ҹ����ͧ���ç�ѹ ��س��׹�ѹ���ʼ�ҹ���١��ͧ���¤�Ѻ") ;
document.checkForm.pwd_name2.focus() ;
return false ;
}
else if(document.checkForm.email.value=="") {
alert("��سҡ�͡��������¹Ф�Ѻ") ;
return false ;
}
else if(checkForm.email.value.indexOf('@')==-1) {
alert("������ͧ�س���١��ͧ��Ѻ") ;
document.checkForm.email.focus() ;
return false ;
}
else if(checkForm.email.value.indexOf('.')==-1) {
alert("������ͧ�س���١��ͧ��Ѻ") ;
document.checkForm.email.focus() ;
return false ;
}

else 
return true ;
}

                      </SCRIPT>
                <BR>
                <BR>
                <BR>
                <BR>
            </FORM>			</TD>
          </TR>
        </TABLE></TD>
      </TR>
    </TABLE></TD>
  </TR>
</TABLE>
</BODY>
</HTML>
