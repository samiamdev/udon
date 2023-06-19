<?
/*
	�������					class.mysql.php
	�����ҹ				��㹡���������Ͱҹ������ MySQL
	�����¹					��ɮ� �Թ���
	�Դ���					webmaster@mocyc.com
*/
if (preg_match("/class.mysql.php/i",$_SERVER['PHP_SELF'])) {
    Header("Location: ../index.php");
    die();
}

class DB{
	//��ǹ�ͧ�����������
	var $host = DB_HOST ;
	var $database ;
	var $connect_db ;
	var $selectdb ;
	var $db ;
	var $sql ;
	var $table ;
	var $where; 
	////////////////////// �ѧ���蹵�ҧ� //////////////////////
	//�������ʹҵ����
	function connectdb($db_name="database",$user="username",$pwd="password"){
		if(ISO=='tis-620'){
		$isox='TIS620';
		$resultsx='tis620';
		$langset=='tis620_thai_ci';
		} else if(ISO=='utf-8'){
		$isox='UTF8';
		$resultsx='utf8';
		$langset='utf8_general_ci';
		} else {
		$iso='';
		$resultsx='';
		$langset='';
		}
		$this->database = $db_name;
		$this->username = $user;
		$this->password = $pwd;
		$this->connect_db = mysql_pconnect ( $this->host, $this->username, $this->password ) or $this->_error();
		//$this->connect_db = mysql_pconnect ( $this->host, $this->username, $this->password ) or $this->_error();
		$this->db = mysql_select_db ( $this->database, $this->connect_db) or $this->_error();
//		mysql_query("SET NAMES ".$resultsx." collation_connection=".$langset." collation_database=".$langset." collation_server=".$langset.""); 
		mysql_query("SET character_set_results=".$resultsx.""); 
		mysql_query("SET character_set_client=".$resultsx."");
		mysql_query("SET character_set_connection=".$resultsx."");
		return true; 
	}

	//�Դ����������ʹҵ����
	function closedb( ){
		mysql_close ( $this->connect_db ) or $this->_error();
	}

	//����������
	//$db->add_db("table",array("field"=>"value")); 
	function add_db($table="table", $data="data"){
		$key = array_keys($data); 
        $value = array_values($data); 
		$sumdata = count($key); 
		for ($i=0;$i<$sumdata;$i++) 
        { 
            if (empty($add)){ 
                $add="("; 
            }else{ 
                $add=$add.","; 
            } 
            if (empty($val)){ 
                $val="("; 
            }else{ 
                $val=$val.","; 
            } 
            $add=$add.$key[$i]; 
            $val=$val."'".$value[$i]."'"; 
        } 
        $add=$add.")"; 
        $val=$val.")"; 
        $sql="INSERT IGNORE INTO ".$table." ".$add." VALUES ".$val; 
        if (mysql_query($sql)){ 
            return true; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
	}

	//��䢢�����Ẻ���¿���� 
	//$db->update_db("tabel",array("field"=>"value"),"where"); 
    function update_db($table="table",$data="data",$where="where"){ 
        $key = array_keys($data); 
        $value = array_values($data); 
        $sumdata = count($key); 
        $set=""; 
        for ($i=0;$i<$sumdata;$i++) 
        { 
            if (!empty($set)){ 
                $set=$set.","; 
            } 
            $set=$set.$key[$i]."='".$value[$i]."'"; 
        } 
        $sql="UPDATE ".$table." SET ".$set." WHERE ".$where; 
        if (mysql_query($sql)){ 
            return true; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//��䢢�����Ẻ���������
	//$db->update("table","set","where");
	function update($table="table",$set="set",$where="where"){ 
        $sql="UPDATE ".$table." SET ".$set." WHERE ".$where; 
        if (mysql_query($sql)){ 
            return true; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//ź������
	//$db->del("table","where"); 
    function del($table="table",$where="where"){ 
        $sql="DELETE FROM ".$table." WHERE ".$where; 
        if (mysql_query($sql)){ 
            return true; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//�Ѻ�ӹǹ�Ǣ�����
	//$db->num_rows("table","field","where"); 
    function num_rows($table="table",$field="field",$where="where") { 
        if ($where=="") { 
            $where = ""; 
        } else { 
            $where = " WHERE ".$where; 
        } 
        $sql = "SELECT ".$field." FROM ".$table.$where; 
        if($res = mysql_query($sql)){ 
            return mysql_num_rows($res); 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//Query ������
	//$res = $db->select_query('SELECT field FROM table WHERE where'); 
    function select_query($sql="sql"){ 
        if ($res = mysql_query($sql)){ 
            return $res; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//�Ѻ�ӹǹ�Ǣ�����
	//$res = $db->select_query('SELECT field FROM table WHERE where'); 
	//$rows = $db->rows($res); 
    function rows($sql="sql"){ 
      if ($res = mysql_num_rows($sql)){ 
            return $res; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	//�֧��� array
	//$res = $db->select_query('SELECT field FROM table WHERE where'); 
	//while ($arr = $db->fetch($res)) { 
	//		echo $arr['a']." - ".$arr['c']."<br>\n"; 
	//}
    function fetch($sql="sql"){ 
      if ($res = mysql_fetch_assoc($sql)){ 
            return $res; 
        }else{ 
            $this->_error(); 
            return false; 
        } 
    } 

	function sql_fetchrow($sql="sql")
	{
		if(!$sql)
		{
			$sql = $db->sql_query;
		}
		if($sql)
		{
			$db->rows[$sql] = @mysql_fetch_array($sql);
			return $db->rows[$sql];
		}
		else
		{
			return false;
		}
	}

	//�ʴ���ͤ����Դ��Ҵ
    function _error(){ 
        $this->error[]=mysql_errno(); 
    } 

	function getErrorMsg() {
		return str_replace( array( "\n", "'" ), array( '\n', "\'" ), $this->_errorMsg );
	}

}
?>