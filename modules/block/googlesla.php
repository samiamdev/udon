<meta http-equiv="Content-Type" content="text/html; charset=tis-620">

 <table width="<?=$widthSUM;?>" cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="<?=$widthSUM;?>" align="center">

<?
$color = "green"; // �բͧ��ͤ��������

$contents ="<form name=\"trn\" id=\"trn\">��͹��ͤ��� :<br>
<input name=\"txt\" type=\"text\" id=\"txt\" size=\"25\"><br>
<SELECT NAME=\"t\" title=\"��������\">
	<OPTION VALUE=\"th\" SELECTED>�ѧ��� -> ��</option>
	<OPTION VALUE=\"en\">�� -> �ѧ���</option>
</SELECT>
<input type=\"button\" value=\"��\" onfocus=\"this.blur();\" class=\"button\" onclick=\"translate(); return false;\">
<div id=\"translation\" style=\"font-weight:bold;color:$color;\"></div>
</form>";

$contents .= "<script type=\"text/javascript\" src=\"http://www.google.com/jsapi\"></script>\n"; 
$contents .= "<script type=\"text/javascript\"> 
google.load(\"language\", \"1\");
function translate() {
var originaltext=document.forms[\"trn\"].txt.value; 
var t=document.forms[\"trn\"].t.value; 
google.language.translate(originaltext, \"\", t, function(result) { 
document.getElementById(\"translation\").innerHTML  = (result.error)?(\"Error: \"+result.error.message):result.translation; }); 
} 
</script>\n"; 
echo "$contents";

?>
</td>
</tr>
</table>

