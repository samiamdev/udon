<?
/*===============================
���Ѳ���к���Ҫԡ����ѺMaxsite@V.3
����Ѫ�� �ص��
08-6639-6298(true), 08-3382-3296(ais)
���ʵٴ��� �ͷ ��
��ԡ�� ������ ��� �����������ʵ��
===============================*/
?>
<?
CheckAdmin($_SESSION['admin_user'], $_SESSION['admin_pwd']);
?>
<div align="left">
      <table cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody>
          <tr>
            <td width="20"><img id="b1_r1_c1" height="15" alt="" 
                  src="images/main/b1_r1_c1.gif" width="20" border="0" /></td>
            <td background="images/main/b1_top_bg.gif"><img id="b1_r1_c3" 
                  height="15" alt="" src="images/main/b1_top_bg.gif" width="10" 
                  border="0" /></td>
            <td width="19"><img id="b1_r1_c4" height="15" alt="" 
                  src="images/main/b1_r1_c4.gif" width="19" 
              border="0" /></td>
          </tr>
        </tbody>
      </table>
	  <table cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody>
          <tr>
            <td width="10" background="images/main/b1_r2_c1.gif" 
                  height="100%"><img id="b1_r2_c1" height="10" alt="" 
                  src="images/main/b1_r2_c1.gif" width="10" border="0" /></td>
            <td valign="top" width="100%" background="images/main/b1_ct_bg.gif" 
                height="100%"><div align="center">
                <table cellspacing="0" cellpadding="0" width="98%" border="0">
                  <tbody>
                    <tr>
                      <td><table width="100%">
                          <tr>
                            <td><img src="images/menu/textmenu_admin.gif" border="0" /><br />
                              <table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                  <td height="1" class="dotline"></td>
                                </tr>
                                <tr>
                                  <td><br />
                                      <b><img src="images/icon/plus.gif" border="0" align="absmiddle" /> <a href="?name=admin&amp;file=main">˹����ѡ�������к�</a> &nbsp;&nbsp;<img src="images/icon/arrow_wap.gif" border="0" align="absmiddle" />&nbsp;&nbsp; �Ѵ��ü������к�</b> <br />
                                    <br />
                                      <a href="?name=admin&amp;file=user_cp"><img src="images/admin/admins.gif"  border="0" align="absmiddle" /> �Ѵ��ü������к�</a> &nbsp;&nbsp;&nbsp;<a href="?name=admin&amp;file=user_cp&amp;op=user_add"><img src="images/admin/user.gif"  border="0" align="absmiddle" /> �����������к�</a> &nbsp;&nbsp;&nbsp;<a href="?name=admin&amp;file=groups"><img src="images/admin/keys.gif"  border="0" align="absmiddle" /> �дѺ�ͧ�������к�</a> &nbsp;&nbsp;&nbsp;<a href="?name=admin&amp;file=groups&amp;op=group_add"><img src="images/admin/share.gif"  border="0" align="absmiddle" /> �����дѺ�ͧ�������к�</a> <br />
                                      <br />
                                      <!-- �ʴ�����¡�ü������к� -->
                                      <?
//////////////////////////////////////////// �ʴ���ª��ͼ������к�
if($_GET[op] == ""){
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$limit = 20 ;
$SUMPAGE = $db->num_rows(TB_user,"id","");
$page=$_GET[page];
if (empty($page)){
	$page=1;
}
$rt = $SUMPAGE%$limit ;
$totalpage = ($rt!=0) ? floor($SUMPAGE/$limit)+1 : floor($SUMPAGE/$limit); 
$goto = ($page-1)*$limit ;
?>
                                      <form action="?name=admin&amp;file=user_cp&amp;op=user_del&amp;action=multidel" method="post" name="myform" id="myform">
                                        <table width="100%" cellspacing="2" cellpadding="1" >
                                          <tr bgcolor="#990000" height="25">
                                            <td><font color="#FFFFFF"><b>
                                              <center>
                                                �ҧ���͡
                                              </center>
                                            </b></font></td>
                                            <td><div align="center"><font color="#FFFFFF"><b>���ͼ����</b></font></div></td>
                                            <td><div align="center"><font color="#FFFFFF"><b>���� - ���ʡ��</b></font></div></td>
                                            <td><div align="center"><font color="#FFFFFF"><b>������</b></font></div></td>
                                            <td><div align="center"><font color="#FFFFFF"><b>�����</b></font></div></td>
                                            <td><font color="#FFFFFF"><b>
                                              <center>
                                                ���͡
                                              </center>
                                            </b></font></td>
                                          </tr>
                                          <?
$res[user] = $db->select_query("SELECT * FROM ".TB_user." ORDER BY id DESC LIMIT $goto, $limit ");
while($arr[user] = $db->fetch($res[user])){
	$res[groups] = $db->select_query("SELECT * FROM ".TB_ADMIN_GROUP." WHERE id='".$arr[user][level]."' ");
	$arr[groups] = $db->fetch($res[groups]);
?>
                                          <tr>
                                            <td width="50"><a href="?name=admin&amp;file=user_cp&amp;op=minepass_edit&amp;id=<? echo $arr[user][id];?>"><img src="images/icon/edit.gif" border="0" alt="���" /></a> <a href="javascript:Confirm('?name=admin&amp;file=user_cp&amp;op=user_del&amp;id=<? echo $arr[user][id];?>','�س����㹡��ź���ͼ���� : <?echo $arr[user][username];?>');"><img src="images/icon/trash.gif"  border="0" alt="ź" /></a> </td>
                                            <td width="150"><?echo $arr[user][username];?></td>
                                            <td width="150" ><? echo $arr[user][name];?></td>
                                            <td ><? echo $arr[user][email];?></td>
                                            <td align="center" width="80" ><? echo $arr[groups][name];?>
                                                <div align="center"></div></td>
                                            <td  align="center" width="40"><input type="checkbox" name="list[]" value="<? echo $arr[user][id];?>" /></td>
                                          </tr>
                                          <tr>
                                            <td colspan="6" height="1" class="dotline"></td>
                                          </tr>
                                          <?
 } 
?>
                                        </table>
                                        <div align="right">
                                          <input type="button" name="CheckAll" value="���͡������" onclick="checkAll(document.myform)" />
                                          <input type="button" name="UnCheckAll" value="¡��ԡ������" onclick="uncheckAll(document.myform)" />
                                          <input type="submit" value="   ź   " onclick="return delConfirm(document.myform)" />
                                        </div>
                                      </form>
                                    <?
	SplitPage($page,$totalpage,"?name=admin&file=user_cp");
	echo $ShowSumPages ;
	echo "<BR>";
	echo $ShowPages ;
	echo "<BR><BR>";

$res[groupstext] = $db->select_query("SELECT * FROM ".TB_ADMIN_GROUP." ORDER BY id ");
while ($arr[groupstext] = $db->fetch($res[groupstext]))
   {
		echo "<LI><B>".$arr[groupstext][name]." : </B>".$arr[groupstext][description]."</LI>";
   }
$db->closedb ();

}
else if($_GET[op] == "user_add" AND $_GET[action] == "add"){
	//////////////////////////////////////////// �ó����� User Admin Database
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	//��Ǩ�ͺ�� user ��������ѧ
	$res[user] = $db->select_query("SELECT id FROM ".TB_user." WHERE username='".$_POST[USERNAME]."' ");
	$rows[user] = $db->rows($res[user]); 
	$db->closedb ();
		if($rows[user]){
			$ProcessOutput .= "<BR><BR>";
			$ProcessOutput .= "<CENTER><IMG SRC=\"images/icon/notview.gif\" BORDER=\"0\"><BR><BR>";
			$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>���ͼ������к� : ".$_POST[USERNAME]." ����к������������ö������</B></FONT><BR><BR>";
			$ProcessOutput .= "<A HREF=\"javascript:history.go(-1);\"><B>��Ѻ����</B></A>";
			$ProcessOutput .= "</CENTER>";
			$ProcessOutput .= "<BR><BR>";
		}else{
		
		require("includes/class.resizepic.php");
		$FILE = $_FILES['FILE'];
		if (($FILE['type']!="image/jpg") AND ($FILE['type']!="image/jpeg") AND ($FILE['type']!="image/pjpeg")){
			echo "<script language='javascript'>" ;
			echo "alert('��س��������ʡ�� jpg ��ҹ��')" ;
			echo "</script>" ;
			echo "<script language='javascript'>javascript:history.back()</script>";
			exit();
		}else{
			@copy ($FILE['tmp_name'] , "usericon/".TIMESTAMP.".jpg" );
			$original_image = "usericon/".TIMESTAMP.".jpg" ;
			$desired_width = _Iuser_W ;
			$desired_height = _Iuser_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '0');
			$image->output_resized("usericon/".TIMESTAMP.".jpg", "JPG");
		}		
		
			//�ӡ������������ŧ�ҵ����
			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
			$db->add_db(TB_user,array(
				"username"=>"$_POST[USERNAME]",
				"password"=>"".md5($_POST[PASSWORD])."",
				"name"=>"$_POST[NAME]",
				"email"=>"$_POST[EMAIL]",
				"level"=>"$_POST[LEVEL]",
				"address"=>"$_POST[ADDRESS]",
				"post_date"=>"".TIMESTAMP."",
			    "update_date"=>"".TIMESTAMP."",
				"tel"=>"$_POST[TEL]"
			));
			$db->closedb ();
			$ProcessOutput .= "<BR><BR>";
			$ProcessOutput .= "<CENTER><A HREF=\"?name=admin&file=main\"><IMG SRC=\"images/icon/login-welcome.gif\" BORDER=\"0\"></A><BR><BR>";
			$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��ӡ���������ͼ������к� : ".$_POST[USERNAME]." �������к����º��������</B></FONT><BR><BR>";
			$ProcessOutput .= "<A HREF=\"?name=admin&file=user\"><B>��Ѻ˹�� �Ѵ��ü������к�</B></A>";
			$ProcessOutput .= "</CENTER>";
			$ProcessOutput .= "<BR><BR>";
		}
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "user_add"){
	//////////////////////////////////////////// �ó����� User Admin Form
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
?>
                                      <form method="post" action="?name=admin&amp;file=user_cp&amp;op=user_add&amp;action=add" enctype="multipart/form-data">
                                        <table width="100%">
                                          <tr>
                                            <td width="150"><div align="right"><b>���ͼ���� :</b></div></td>
                                            <td><input type="text" name="USERNAME" size="40" id="USERNAME" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>���ʼ�ҹ :</b></div></td>
                                            <td><input type="password" name="PASSWORD" size="40" id="PASSWORD" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>���� - ���ʡ�� :</b></div></td>
                                            <td><input type="text" name="NAME" size="40" id="NAME" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>�Ҿ��ǹ��� :</b></div></td>
                                            <td><img src="images/user_blank.gif" name="view01" border="0" id="view01" <?echo " WIDTH=\""._Iuser_W."\" HEIGHT=\""._Iuser_H."\" ";?> /><br />
                                                <input type="file" name="FILE" onpropertychange="view01.src=FILE.value;" style="width=250;" />
                                                <br />
                                              �ٻ����� .jpg  .jpeg ��Ҵ <?echo _Iuser_W." x "._Iuser_H ;?> Pixels ��ҹ�� (�ҡ�ٻ�˭���������ѵ��ѵ�) <br /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>������ :</b></div></td>
                                            <td><input type="text" name="EMAIL" size="40" id="EMAIL" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>������� :</b></div></td>
                                            <td><textarea name="ADDRESS" cols="40" rows="4" id="ADDRESS"></textarea></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>�������Ѿ�� :</b></div></td>
                                            <td><input type="text" name="TEL" size="40" id="TEL" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>Level :</b></div></td>
                                            <td><select name="LEVEL" id="LEVEL">
                                                <?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[groups] = $db->select_query("SELECT * FROM ".TB_ADMIN_GROUP." ORDER BY id ");
   while ($arr[groups] = $db->fetch($res[groups]))
   {
		echo "<option value=\"".$arr[groups][id]."\">".$arr[groups][name]."</option>";
   }
$db->closedb ();
?>
                                            </select></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"></div></td>
                                            <td><input type="submit" value=" ������Ҫԡ" /></td>
                                          </tr>
                                        </table>
                                    </form>
                                    <?
	}else{
		//�ó�����ҹ
		echo  $PermissionFalse ;
	}
}
else if($_GET[op] == "user_edit" AND $_GET[action] == "edit"){
	//////////////////////////////////////////// �ó���� User Admin Database Edit
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	//��Ǩ�ͺ�� user ��������ѧ
	$res[user] = $db->select_query("SELECT id FROM ".TB_user." WHERE id='".$_GET[id]."' ");
	$rows[user] = $db->rows($res[user]); 
	$db->closedb ();
	
		require("includes/class.resizepic.php");
		$FILE = $_FILES['FILE'];
		if ((($FILE['type']!="image/jpg") AND ($FILE['type']!="image/jpeg") AND ($FILE['type']!="image/pjpeg")) AND $FILE['size']){
			echo "<script language='javascript'>" ;
			echo "alert('��س��������ʡ�� jpg ��ҹ��')" ;
			echo "</script>" ;
			echo "<script language='javascript'>javascript:history.back()</script>";
			exit();
		}else{
			@copy ($FILE['tmp_name'] , "usericon/".$arr[user][post_date].".jpg" );
			$original_image = "usericon/".$arr[user][post_date].".jpg" ;
			$desired_width = _Iuser_W ;
			$desired_height = _Iuser_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '0');
			$image->output_resized("usericon/".$arr[user][post_date].".jpg", "JPG");
		}
	
		if($rows[user] AND ($_POST[USERNAME] != $_POST[USERNAME_OLD])){
			$ProcessOutput .= "<BR><BR>";
			$ProcessOutput .= "<CENTER><IMG SRC=\"images/icon/notview.gif\" BORDER=\"0\"><BR><BR>";
			$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>���ͼ������к� : ".$_POST[USERNAME]." ����к������������ö������</B></FONT><BR><BR>";
			$ProcessOutput .= "<A HREF=\"javascript:history.go(-1);\"><B>��Ѻ����</B></A>";
			$ProcessOutput .= "</CENTER>";
			$ProcessOutput .= "<BR><BR>";
		}else{
			if($_POST[PASSWORD]){
				$NewPass = md5($_POST[PASSWORD]);
			}else{
				$NewPass = $_POST[oldpass];
			}
			
			//�ӡ������������ŧ�ҵ����
			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
			$db->update_db(TB_user,array(
				"username"=>"$_POST[USERNAME]",
				"password"=>"$NewPass",
				"name"=>"$_POST[NAME]",
				"email"=>"$_POST[EMAIL]",
				"level"=>"$_POST[LEVEL]",
				"address"=>"$_POST[ADDRESS]",
			    "update_date"=>"".TIMESTAMP."",				
				"tel"=>"$_POST[TEL]"
			)," id='$_GET[id]' ");
			$db->closedb ();
			$ProcessOutput .= "<BR><BR>";
			$ProcessOutput .= "<CENTER><A HREF=\"?name=admin&file=main\"><IMG SRC=\"images/icon/login-welcome.gif\" BORDER=\"0\"></A><BR><BR>";
			$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��ӡ����䢼���к����º��������</B></FONT><BR><BR>";
			$ProcessOutput .= "<A HREF=\"?name=admin&file=user\"><B>��Ѻ˹�� �Ѵ��ü������к�</B></A>";
			$ProcessOutput .= "</CENTER>";
			$ProcessOutput .= "<BR><BR>";
		}
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "user_edit"){
	//////////////////////////////////////////// �ó���� User Admin Edit Form
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
		//�֧��Ңͧ�������к��͡��
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$res[user] = $db->select_query("SELECT * FROM ".TB_user." WHERE id='".$_GET[id]."' ");
		$arr[user] = $db->fetch($res[user]);
		$db->closedb ();
		//�������Ѿഷ����ͧ
		if($_SESSION['admin_user'] == $_SESSION['admin_user']){                        //$arr[user][username]){
			$Readonly = " readonly ";
		}
?>
                                    <form method="post" action="?name=admin&amp;file=user_cp&amp;op=user_edit&amp;action=edit&amp;id=<?=$_GET[id];?>" enctype="multipart/form-data">
                                      <table width="100%">
                                        <tr>
                                          <td width="150"><div align="right"><b>���ͼ���� :</b></div></td>
                                          <td><input name="USERNAME" type="text" id="USERNAME" value="<?=$arr[user][username];?>" size="40" /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right">
                                            <input type="hidden" name="USERNAME_OLD" value="<?=$arr[user][username];?>" />
                                          <b>���ʼ�ҹ :</b></div></td>
                                          <td><input name="PASSWORD" type="password" id="PASSWORD" value="" size="40" <?=$Readonly;?> /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>���� - ���ʡ�� :</b></div></td>
                                          <td><input name="NAME" type="text" id="NAME" value="<?=$arr[user][name];?>" size="40" /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>�Ҿ��ǹ��� :</b></div></td>
                                          <td><img src="usericon/<?=$arr[user][post_date];?>.jpg" name="view01" border="0" id="view01" <?echo " WIDTH=\""._Iuser_W."\" HEIGHT=\""._Iuser_H."\" ";?> /><br />
                                              <input type="file" name="FILE" onpropertychange="view01.src=FILE.value;" style="width=250;" />
                                              <br />
                                          �ٻ����� .jpg  .jpeg ��Ҵ <?echo _Iuser_W." x "._Iuser_H ;?> Pixels ��ҹ�� (�ҡ�ٻ�˭���������ѵ��ѵ�) <br /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>������ :</b></div></td>
                                          <td><input name="EMAIL" type="text" id="EMAIL" value="<?=$arr[user][email];?>" size="40" /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>������� :</b></div></td>
                                          <td><textarea name="ADDRESS" cols="40" rows="4" id="ADDRESS"><?=$arr[user][address];?>
                                </textarea></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>�������Ѿ�� :</b></div></td>
                                          <td><input name="TEL" type="text" id="TEL" value="<?=$arr[user][tel];?>" size="13" /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"><b>Level :</b></div></td>
                                          <td><select name="LEVEL" id="LEVEL">
                                              <?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[groups] = $db->select_query("SELECT * FROM ".TB_ADMIN_GROUP." ORDER BY id ");
   while ($arr[groups] = $db->fetch($res[groups]))
   {
		echo "<option value=\"".$arr[groups][id]."\" ";
		if($arr[groups][id] == $arr[user][level]){echo " Selected";};
		echo ">".$arr[groups][name]."</option>";
   }
$db->closedb ();
?>
                                            </select></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right"></div></td>
                                          <td><input type="submit" value=" �����Ҫԡ " />
                                          <input name="oldpass" type="hidden" id="oldpass" value="<?=$arr[user][password];?>" /></td>
                                        </tr>
                                        </table>
                                    </form>
                                    <?
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "user_del" AND $_GET[action] == "multidel"){
	//////////////////////////////////////////// �ó�ź User Admin Multi
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
		while(list($key, $value) = each ($_POST['list'])){
			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
			$db->del(TB_user," id='".$value."' "); 
			$db->closedb ();
		}
		$ProcessOutput .= "<BR><BR>";
		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin&file=main\"><IMG SRC=\"images/icon/login-welcome.gif\" BORDER=\"0\"></A><BR><BR>";
		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��ӡ��ź��¡�ü���к����º��������</B></FONT><BR><BR>";
		$ProcessOutput .= "<A HREF=\"?name=admin&file=user\"><B>��Ѻ˹�� �Ѵ��ü������к�</B></A>";
		$ProcessOutput .= "</CENTER>";
		$ProcessOutput .= "<BR><BR>";
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "user_del"){
	//////////////////////////////////////////// �ó�ź User Admin Form
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$db->del(TB_user," id='".$_GET[id]."' "); 
		$db->closedb ();
		$ProcessOutput .= "<BR><BR>";
		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin&file=main\"><IMG SRC=\"images/icon/login-welcome.gif\" BORDER=\"0\"></A><BR><BR>";
		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��ӡ��ź����к����º��������</B></FONT><BR><BR>";
		$ProcessOutput .= "<A HREF=\"?name=admin&file=user\"><B>��Ѻ˹�� �Ѵ��ü������к�</B></A>";
		$ProcessOutput .= "</CENTER>";
		$ProcessOutput .= "<BR><BR>";
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "minepass_edit" AND $_GET[action] == "edit"){
	//////////////////////////////////////////// �ó���䢢�������ǹ���
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
//		$res[user] = $db->select_query("SELECT * FROM ".TB_user." WHERE username='".$_SESSION['user_user']."' ");
		$res[user] = $db->select_query("SELECT * FROM ".TB_user." WHERE id='".$_GET[id]."' ");
		$arr[user] = $db->fetch($res[user]);
		$db->closedb ();

			if(!$_POST[USERNAME] OR !$_POST[NAME] OR !$_POST[EMAIL]){
				$ProcessOutput .= "<BR><BR>";
				$ProcessOutput .= "<CENTER><IMG SRC=\"images/icon/notview.gif\" BORDER=\"0\"><BR><BR>";
				$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��سҡ�͡�����ŵ�ҧ����ú��ǹ</B></FONT><BR><BR>";
				$ProcessOutput .= "<A HREF=\"javascript:history.go(-1);\"><B>��Ѻ����</B></A>";
				$ProcessOutput .= "</CENTER>";
				$ProcessOutput .= "<BR><BR>";
			}else{
				$User_User = $_GET[id];                     //$_SESSION[admin_user];
				if($_POST[PASSWORD]){
					$NewPass = md5($_POST[PASSWORD]);
					$URLre = "?name=admin&file=user_cp";
					//session_unset();
					//session_destroy();
				}else{
					$NewPass = $_POST[oldpass];
					$URLre = "?name=admin&file=user_cp";
				}
				
		require("includes/class.resizepic.php");
		$FILE = $_FILES['FILE'];
		if ((($FILE['type']!="image/jpg") AND ($FILE['type']!="image/jpeg") AND ($FILE['type']!="image/pjpeg")) AND $FILE['size']){
			echo "<script language='javascript'>" ;
			echo "alert('��س��������ʡ�� jpg ��ҹ��')" ;
			echo "</script>" ;
			echo "<script language='javascript'>javascript:history.back()</script>";
			exit();
		}else{
			@copy ($FILE['tmp_name'] , "usericon/".$arr[user][post_date].".jpg" );
			$original_image = "usericon/".$arr[user][post_date].".jpg" ;
			$desired_width = _Iuser_W ;
			$desired_height = _Iuser_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '0');
			$image->output_resized("usericon/".$arr[user][post_date].".jpg", "JPG");
		}
				
				//�ӡ����䢢�����ŧ�ҵ����
				$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
				$db->update_db(TB_user,array(
					"username"=>"$_POST[USERNAME]",
					"password"=>"$NewPass",
					"name"=>"$_POST[NAME]",
					"email"=>"$_POST[EMAIL]",
				"level"=>"$_POST[LEVEL]",					
					"address"=>"$_POST[ADDRESS]",
			    "update_date"=>"".TIMESTAMP."",							
				"tel"=>"$_POST[TEL]"
//				)," username='$Admin_User' ");
			)," id='$_GET[id]' ");				
				$db->closedb ();
				$ProcessOutput .= "<BR><BR>";
				$ProcessOutput .= "<CENTER><A HREF=\"".$URLre."\"><IMG SRC=\"images/icon/login-welcome.gif\" BORDER=\"0\"></A><BR><BR>";
				$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>��ӡ����䢢��������º��������</B></FONT><BR><BR>";
				$ProcessOutput .= "<A HREF=\"".$URLre."\"><B>��Ѻ�˹�Ҵ����к�</B></A>";
				$ProcessOutput .= "</CENTER>";
				$ProcessOutput .= "<BR><BR>";
		}
	}else{
		//�ó�����ҹ
		$ProcessOutput = $PermissionFalse ;
	}
	echo $ProcessOutput ;
}
else if($_GET[op] == "minepass_edit"){
	//////////////////////////////////////////// �ó���䢢�������ǹ���
	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){
		//�֧��Ңͧ�������к��͡��
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
//		$res[user] = $db->select_query("SELECT * FROM ".TB_user." WHERE username='".$_SESSION['user_user']."' ");
		$res[user] = $db->select_query("SELECT * FROM ".TB_user." WHERE id='".$_GET[id]."' ");		
		$arr[user] = $db->fetch($res[user]);
		$db->closedb ();
?>
                                      <form method="post" action="?name=admin&file=user_cp&op=minepass_edit&action=edit&id=<? echo $arr[user][id];?>" enctype="multipart/form-data">
                                        <table width="100%">
                                          <tr>
                                            <td width="150"><div align="right"><b>���ͼ���� :</b></div></td>
                                            <td><input name="USERNAME" type="text" id="USERNAME" style="color=#FF0000;" value="<?=$arr[user][username];?>" size="40" readonly="readonly" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>���ʼ�ҹ :</b></div></td>
                                            <td><input type="password" name="PASSWORD" size="40" value="" id="PASSWORD" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>���� - ���ʡ�� :</b></div></td>
                                            <td><input name="NAME" type="text" id="NAME" value="<?=$arr[user][name];?>" size="40" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>�Ҿ��ǹ��� :</b></div></td>
                                            <td><img src="usericon/<?=$arr[user][post_date];?>.jpg" name="view01" border="0" id="view" <?echo " WIDTH=\""._Iuser_W."\" HEIGHT=\""._Iuser_H."\" ";?> /><br />
                                                <input type="file" name="FILE" onpropertychange="view01.src=FILE.value;" style="width=250;" id="FILE" />
                                                <br />
                                              �ٻ����� .jpg  .jpeg ��Ҵ <?echo _Iuser_W." x "._Iuser_H ;?> Pixels ��ҹ�� (�ҡ�ٻ�˭���������ѵ��ѵ�) <br /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>������ :</b></div></td>
                                            <td><input name="EMAIL" type="text" id="EMAIL" value="<?=$arr[user][email];?>" size="40" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>������� :</b></div></td>
                                            <td><textarea name="ADDRESS" cols="40" rows="4" id="ADDRESS"><?=$arr[user][address];?>
                                </textarea></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>�������Ѿ�� :</b></div></td>
                                            <td><input name="TEL" type="text" id="TEL" value="<?=$arr[user][tel];?>" size="13" /></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"><b>Level :</b></div></td>
                                            <td><select name="LEVEL" id="LEVEL">
                                                <?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[groups] = $db->select_query("SELECT * FROM ".TB_ADMIN_GROUP." ORDER BY id ");
   while ($arr[groups] = $db->fetch($res[groups]))
   {
		echo "<option value=\"".$arr[groups][id]."\" ";
		if($arr[groups][id] == $arr[user][level]){echo " Selected";};
		echo ">".$arr[groups][name]."</option>";
   }
$db->closedb ();
?>
                                                                                        </select></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right"></div></td>
                                            <td><input type="submit" value=" ��䢢�������ǹ��� " />
                                                <input type="hidden" name="oldpass" value="<?=$arr[user][password];?>" /></td>
                                          </tr>
                                        </table>
                                    </form>
                                    <?
	}else{
		//�ó�����ҹ
		echo $PermissionFalse ;
	}
}
?>
                                      <br />
                                    <br />
                                  </td>
                                </tr>
                              </table>
                            <br /></td>
                          </tr>
                      </table></td>
                    </tr>
                  </tbody>
                </table>
            </div></td>
            <td width="10" background="images/main/b1_r2_c5.gif" 
                  height="100%"><img id="b1_r2_c5" height="10" alt="" 
                  src="images/main/b1_r2_c5.gif" width="10" 
              border="0" /></td>
          </tr>
        </tbody>
      </table>
	  <table cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody>
          <tr>
            <td width="20"><img id="b1_r4_c1" height="15" alt="" 
                  src="images/main/b1_r4_c1.gif" width="20" border="0" /></td>
            <td background="images/main/b1_foot_bg.gif"><img id="b1_r4_c3" 
                  height="15" alt="" src="images/main/b1_foot_bg.gif" width="10" 
                  border="0" /></td>
            <td width="19"><img id="b1_r4_c4" height="15" alt="" 
                  src="images/main/b1_r4_c4.gif" width="19" 
              border="0" /></td>
          </tr>
        </tbody>
      </table>
</div>
