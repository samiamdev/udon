// �ѧ���蹵�ҧ �

function check1()
{
	var temp;
	var digit2="!#$%&'()*+,./:;<=>?@[\]^_`{|}~������������������������";
	var digit3="!#$%&'()*+,./:;<=>?@[\]^_`{|}~����������������������������������������������������������������������� � � � � � � � � � � � � � � � � � � � ";
	var emailchars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@._0123456789";
	var agechars="0123456789";
	var errmsg="";

	if(document.forms.webForm.first_name.value == "")
	{
		alert("��س���� ���ͧ͢��ҹ");
		return false;
	}

	if (document.webForm.first_name.value.length!=0){
				for (var i=0;i<document.webForm.first_name.value.length;i++) {
 temp=document.webForm.first_name.value.substring(i,i+1)
 if (digit2.indexOf(temp)!=-1) {
			errmsg="�ô��� ���ͧ͢��ҹ �繵���ѡ�������ѧ��� ���� ��������� �����������ѭ�ѡɳ����ɵ�ҧ � ";
			alert(errmsg);
			return false;
 }
 }
	}
	
if(document.forms.webForm.last_name.value == "")
	{
		alert("��س���� ���ʡ�Ţͧ��ҹ");
		return false;
	}

	if (document.webForm.last_name.value.length!=0){
				for (var i=0;i<document.webForm.last_name.value.length;i++) {
 temp=document.webForm.last_name.value.substring(i,i+1)
 if (digit2.indexOf(temp)!=-1) {
			errmsg="�ô��� ���ʡ�Ţͧ��ҹ �繵���ѡ�������ѧ��� ���� ��������� �����������ѭ�ѡɳ����ɵ�ҧ � ";
			alert(errmsg);
			return false;
 }
 }
	}

if(document.forms.webForm.nic_name.value == "")
	{
		alert("��س���� ������蹢ͧ��ҹ");
		return false;
	}

	if (document.webForm.nic_name.value.length!=0){
				for (var i=0;i<document.webForm.nic_name.value.length;i++) {
 temp=document.webForm.nic_name.value.substring(i,i+1)
 if (digit2.indexOf(temp)!=-1) {
			errmsg="�ô��� ������蹢ͧ��ҹ �繵���ѡ�������ѧ��� ���� ��������� �����������ѭ�ѡɳ����ɵ�ҧ � ";
			alert(errmsg);
			return false;
 }
 }
	}
	
	if(document.forms.webForm.day.selectedIndex == 0)
	{
		alert("��س����͡�ѹ�Դ�ͧ��ҹ");
		return false;
	}
	
	if(document.forms.webForm.month.selectedIndex == 0)
	{
		alert("��س����͡��͹�Դ�ͧ��ҹ");
		return false;
	}
	
	if(document.forms.webForm.year.selectedIndex == 0)
	{
		alert("��س����͡���Դ�ͧ��ҹ");
		return false;
	}
	
	if(document.forms.webForm.age.value == "")
	{
		alert("��س��������");
		return false;
	}
	
	 if (document.webForm.age.value.length != 0) { 
	 for (var i=0;i<document.webForm.age.value.length;i++) {
		 temp=document.webForm.age.value.substring(i,i+1)
			if (agechars.indexOf(temp)==-1) {
			errmsg="�ô��� ���� �繵���Ţ ��ҹ��!";
			alert(errmsg);
			return false;
 }
 }
 }
	
	if(document.forms.webForm.email.value == "")
	{
		alert("��س�����������");
		return false;
	}

	 if (document.webForm.email.value.length != 0) {
	 for (var i=0;i<document.webForm.email.value.length;i++) {
		 temp=document.webForm.email.value.substring(i,i+1)
			if (emailchars.indexOf(temp)==-1) {
				errmsg="�ô��� ������� �������ѧ��� �����������ѭ�ѡɳ����ɵ�ҧ � ";
				alert(errmsg);
				return false;
 }
 }
 }

	if(webForm.email.value.indexOf('@')==-1)
	{
 		alert("��س��������������١��ͧ");
 	return false;
 		}
	if(webForm.email.value.indexOf('.')==-1)
	{
 		alert("��س��������������١��ͧ");
 	return false;
 		}

	if(document.forms.webForm.province.selectedIndex == 0)
	{
		alert("��س����͡�ѧ��Ѵ�ͧ��ҹ");
		return false;
	}
	
	if(document.forms.webForm.comment.value == "")
	{
		alert("��س����ӷѡ������͹");
		return false;
	}

}

function showimage()
{
	document.images.icons.src=""+document.webForm.icon.options[document.webForm.icon.selectedIndex].value;
}