<?php

/**
 * File install_thai.php 
 * @version $Id: install_thai.php,v 1.2 03/12/2005  by ninekrit Exp $
 * @copyright 2005  http://www.ATOMYMAXSITEhub.com 
 **/
//encoding

//-- version to install
define ('ATOMYMAXSITEVersion','2.5'); // new!
//-- Common
define ('_INSTALL_ISO','tis-620');
define ('_INSTALL_YES', "��"); 
define ('_INSTALL_NO', "���");
define ('_INSTALL_AVAILABLE', "ʹѺʹع");
define ('_INSTALL_UNAVAILABLE', "���ʹѺʹع");
define ('_INSTALL_WRITABLE', "��¹ŧ�����"); 
define ('_INSTALL_ON', "�Դ"); 
define ('_INSTALL_OFF', "�Դ"); 
define ('_INSTALL_UNWRITABLE', "��¹ŧ��������"); 
define ('_INSTALL_NEXT', "��鹵��� >>");
define ('_INSTALL_BACK', '<< ��͹��Ѻ'); // ##### new
define ('_INSTALL_WARN', '��س�ź������� install ��������¹���������ҧ��蹡�͹��ҹ��Ѻ');
//--Language choice
define ('_INSTALL_LANGUAGE_SECTION', "���ҷ����㹡�õԴ���");
define ('_INSTALL_LANGUAGE_DESCRIPTION', "������зӡ�ä������� ���س���͡������纺������� �����������ѡ 㹡�õԴ��� atomymaxsite  ��س����͡���ҷ��س��ͧ���");
define ('_INSTALL_LANGUAGE_LABEL', "����");
define ('_INSTALL_LANGUAGE_CHECK','��Ǩ�ͺ���ҷ����');
define ('_INSTALL_LANGUAGE_CHOOSE','- ��س����͡���� -');
define ('_INSTALL_LANGUAGE_FRONT','�������ǹ�ͧ�����');
define ('_INSTALL_LANGUAGE_BACK','�������ǹ�ͧ������');
define ('_INSTALL_LANGUAGE_NOTE','[<strong>�����˵�</strong>: �����������Ѻ�������� :<br />f = �繷ҧ���/i = ����繷ҧ���, �� german<strong>f</strong>, german<strong>i</strong>]');

//-- Index.php
	//--Left menu
define ('_INSTALL_LICENSE_ALERT', "��س���ҹ��зӤ������㨡Ѻ�Ԣ�Է����͹��õԴ��駤�Ѻ");  
define ('_ATOMYMAXSITE_WEB_INSTALLER',"�к���õԴ���atomymaxsite ::");  //  Add Title  by Ak.
define ('_INSTALL_ATOMYMAXSITE', "��õԴ��� ATOMYMAXSITE"); 
define ('_INSTALL_STEP_PRECHECK', "��Ǩ�ͺ�к���͹��õԴ���");
define ('_INSTALL_STEP_LICENSE', "�Ԣ�Է���");
define ('_INSTALL_STEP_1', "��鹷�� �");
define ('_INSTALL_STEP_2', "��鹷�� �");
define ('_INSTALL_STEP_3', "��鹷�� �");
define ('_INSTALL_STEP_4', "��鹷�� �");
	//--Pre-check zone
define ('_INSTALL_PRECHECK_TITLE', "��Ǩ�ͺ��͹��õԴ���");
define ('_INSTALL_PRECHECK_SECTION', "��Ǩ�ͺ��͹��õԴ�������Ѻ ");
define ('_INSTALL_PRECHECK_DESCRIPTION', "�ҡ����Ǣ��㴶١���ŷ������ᴧ ��سҷӡ����䢢�ͼԴ��Ҵ ��͹�ӡ�õԴ��駤�Ѻ <br />
			�ҡ���ӡ������Ҩ����� ��õԴ��� ATOMYMAXSITE �ջѭ��������ѧ ���ͷӧҹ���١��ͧ.");
define ('_INSTALL_PHP_VERSION', "PHP �����ѹ >= 4.1.0");
define ('_INSTALL_PHP_ZLIB', "&nbsp; -  ʹѺʹع  zlib compression ");
define ('_INSTALL_PHP_XML', "&nbsp; -  ʹѺʹع XML ");
define ('_INSTALL_PHP_MYSQL', "&nbsp; -  ʹѺʹع MySQL ");
define ('_INSTALL_CONFIG_FILE','&nbsp;- ��� <strong>ATOMYMAXSITE</strong> Configuration');
define ('_INSTALL_PHP_CONF', "�س����ö���Թ��� �Դ��駵������Ѻ �����������鹡�кǹ��� �к����ʴ��Ť�ҵ���õ�ҧ � ����õ�駤�� ���س��§ copy ���ǹ���ҧ���� text editor  �ӡ�úѹ�֡ �ҡ��鹡��Ѿ��Ŵ������������");
define ('_INSTALL_SESSION', "Session save path");
define ('_INSTALL_SESSION_NOT_SET','����ա�˹����');

	//--recommanded
define ('_INSTALL_PHP_SETTINGS_TITLE', "����й�㹡�õԴ���:");
define ('_INSTALL_PHP_SETTINGS_DESCRIPTION', "��ҵ��仹���繤���й�����Ѻ PHP ������� ATOMYMAXSITE �ӧҹ��١��ͧ<br />
		���ҧ�á����֧�����Ҥ�ҷ���ҹ �ӡ�õԴ���������������� �ͧ��ҹ�Ҩ���ç������ء��С��  ATOMYMAXSITE  ���Ҩ���ѧ�ӧҹ���Ѻ");
define ('_INSTALL_PHP_FONCTION', "�ѧ��ѹ");
define ('_INSTALL_PHP_FONCTION_IDEAL', "����й�");
define ('_INSTALL_PHP_FONCTION_ACTUAL', "�Ѩ�غѹ");		
define ('_INSTALL_PHP_MODE', "Safe Mode:");
define ('_INSTALL_PHP_ERRORS', "Display Errors:");
define ('_INSTALL_PHP_UPLOAD', "File Uploads:");
define ('_INSTALL_PHP_QUOTES_GPC', "Magic Quotes GPC:");
define ('_INSTALL_PHP_QUOTES_RUNTIME', "Magic Quotes Runtime:");
define ('_INSTALL_PHP_GLOBALS', "Register Globals:");
define ('_INSTALL_PHP_OUTBUFFER', "Output Buffering:");
define ('_INSTALL_PHP_AUTOSTART_SESSION', "Session auto start:"); 
	//--file permission
define ('_INSTALL_DIRFILE_PERMS', "�Է�����͹حҵ (Permission) �ͧ��á����������:");
define ('_INSTALL_DIRFILE_PERMS_INFO', " ��ҹ��ͧ��駤�����硷��� ��������������ö��¹�Ѻ����� �����㴡��������繤���� \"��¹ŧ��������\" ����ҹ�ӡ�����Է��� �ͧ����������硷��մѧ�����");

	//-- additional settings (new by mic)
define ('_INSTALL_ADD_SETTINGS','Additional system informations');
define ('_INSTALL_ADD_SETTINGS_DESC','Following additional settings were checked und could be a problem if marked in red or lesser then standard. For exampleis the setting "short_open_tag" is "OFF", this can be the reason for errors in your scripts. In a case like that get in contact with the developer and force a correct scripting.');
define ('_INSTALL_MESS_OLDPHP1','Because of an outdated installed version of PHP [ %s ] the installer could not check the serversetting for possible languages. ATOMYMAXSITE will be installed in the languages definded above. Maybe your locale language setting in the backend is not set correct!'); // %s=phpversion #################
define ('_INSTALL_MESS_OLDPHP2','PLease check after installation process your language country code setting in the backend, maybe you have to ask your provider for the correct setting.<br /><br />Further tell your provider that the installed PHP version is an outdated one and does not fit with the security guidelines of PHP! [see more about here <a href="http://php.net">PHP.net</a> ]');#############

	//-- Copyright
define ('_MIRO_COPYRIGHT', "ʧǹ�Ԣ�Է���  c 2005  <a href='http://www.ATOMYMAXSITE-foundation.org'>ATOMYMAXSITE Foundation Inc.</a><br />");
define ('_MIRO_GNUGPL', " �繫Ϳ����������������Ԣ�Է��� GNU/GPL �Ѳ�������� <a href='http://www.ATOMYMAXSITEhub.com'>ATOMYMAXSITEHub.com</a>");	


//--Install.php
define ('_INSTALL_LICENSE_TITLE', "�Ԣ�Է���");
define ('_INSTALL_LICENSE_TYPE', "�Ԣ�Է��� GNU/GPL :");
define ('_INSTALL_LICENSE_CONDITION', "*** �礷����ͧ�����������ҡ��ͧ��õԴ��� ATOMYMAXSITE ������Ԣ�Է����� ***"); 
define ('_INSTALL_LICENSE_AGREE', "��Ҿ��ҵ�ŧ������͹���Ԣ�Է���  GPL ");
define ('_INSTALL_CHECK_LANG1','��ҹ�ѧ��������͡����');
define ('_INSTALL_CHECK_LANG2','��ҹ�е�ͧ���͡��������Ѻ����������������Ѻ�������к�');


//--Install1.php
define ('_INSTALL_DB_JS_HOSTNAME', "��س���������ʵ� (�� Localhost)");
define ('_INSTALL_DB_JS_USERNAME', "��س������ͼ����ҹ������ ( �� root  )");
define ('_INSTALL_DB_JS_BASENAME', "��س������Ͱҹ������ ( �� ATOMYMAXSITE )");
define ('_INSTALL_DB_JS_PASSWORD', '��س�������ʼ�ҹ����Ѻ��ҹ�ҹ������');
define ('_INSTALL_DB_JS_WARNING', "��سҵ�Ǩ�ͺ��������Ҥ�Ҵѧ����Ƕ١��ͧ \n ATOMYMAXSITE �зӡ�����ҧ�ҹ�����Ŵ��¤�ҷ���ҹ�к������");
define ('_INSTALL_DB_SECTION', "��õ�駤�Ұҹ������ MySQL :");
define ('_INSTALL_DB_STEPS_DESCRIPTION', "<p>��õԴ��� ATOMYMAXSITE ����ö������� � � 4 ��鹵͹...</p>
  	   <p>��س���������ʵ����ͧ��õԴ���  atomymaxsite ��������Ǥ�ҹ�����  'localhost'.</p>
   		<p>�����ͼ���� �ҹ������</p>
		<p>������ʼ�ҹ�ͧ�ҹ������ MySQL ���س��ͧ�����Ѻ atomymaxsite</p>
		<p>������ʼ�ҹ�ա����</p>
		<p>����кت��Ͱҹ�����ŷ�����Ѻ atomymaxsite </p>");
define ('_INSTALL_DB_NAME', "�����Ͱҹ�����Ŵ��¤�Ѻ");
define ('_INSTALL_DB_HOSTNAME', "������ʵ�");
define ('_INSTALL_DB_HOSTNAME_DESCRIPTION', "��ҷ���令�� 'localhost'");
define ('_INSTALL_DB_USERNAME', "���ͼ����ҹ������ MySQL ");
define ('_INSTALL_DB_USERNAME_DESC', "���ͼ����ҹ�ҵ���� �Ҩ������� 'root' ���ͪ��ͼ���������Ѻ �ҡ�������ԡ����ʢͧ��ҹ");
define ('_INSTALL_DB_PASSWORD', "���ʼ�ҹ�ҹ������ MySQL ");
define ('_INSTALL_DB_PASSWORD_DESCRIPTION', "<strong>���ͤ�����ʹ��� ��سҡ�˹����ʼ�ҹ</strong>");
define ('_INSTALL_DB_PASSWORD_VERRIFY',"�׹�ѹ���ʼ�ҹ MySQL �ա����");
define ('_INSTALL_DB_PASSWORD_VERRIFY_DESC', "������ʼ�ҹ�ա���������繡���׹�ѹ");
define ('_INSTALL_DB_BASENAME', "���Ͱҹ������ MySQL ");
define ('_INSTALL_DB_BASENAME_DESC','��ʺҧ�������§������������ҹ��ҹ �óչ���ҹ����ö����͹�˹�� (prefix) ���ҧ���͵Դ����ҡ����˹��䫵�');
define ('_INSTALL_DB_PREFIX', "���ػ��ä(Prefix)˹�Ҫ��͵��ҧ ");
define ('_INSTALL_DB_PREFIX_DESC', "��������͹�˹���� 'old_' ���ͧ�ҡ atomymaxsite  �����ҹ��㹡�����ҧ���ҧ���ͧ");
define ('_INSTALL_DB_DROPTABLES', "��ͧ���ź���ҧ���������������� ?");
define ('_INSTALL_DB_BACKUP', "��ͧ������ͧ�����ŵ��ҧ�������?");
define ('_INSTALL_DB_BACKUP_DESCRIPTION', "(���ҧ�ҹ��������Т��������㹰ҹ�����ŷ���кبж١ź���)");
define ('_INSTALL_DB_SAMPLE_DATA', "��ͧ��õԴ��駢����ŵ�����ҧ�������?");
define ('_INSTALL_DB_SAMPLE_DATA_DESC',"��سҤ�ԡ���͡����ҡ��ҹ �ѧ����դ����ӹҭ㹡����ҹ");
 
 
//--Install2.php
define ('_INSTALL_DB_ERROR1', "��������´�ͧ�ҹ�����ŷ���͡���١��ͧ������ҧ����Ѻ");
define ('_INSTALL_DB_ERROR2', "���ͼ����������ʼ�ҹ����͡���١��ͧ��Ѻ");
define ('_INSTALL_DB_ERROR3', "����������Ͱҹ�����Ť�Ѻ");
define ('_INSTALL_DB_ERROR4', "�ҹ�������բ�ͼԴ��Ҵ��Ѻ");
define ('_INSTALL_DB_ERROR5', "��س����������䫵���¤�Ѻ");
define ('_INSTALL_DB_ERROR6', "��ҹ������ʼ�ҹ�ͧ�������ç�ѹ ��س��������");
define ('_INSTALL_DB_SITENAME', "��س����������䫵�ͧ��ҹ:");
define ('_INSTALL_DB_DATAERROR', "�բ�ͼԴ��Ҵ㹡���á������ŧ㹰ҹ������!<br /> �������ö�ӡ�õԴ��駵����");
define ('_INSTALL_DB_INSTALLSUCCESS', "��������Ǥ�Ѻ!<br /><br />
  			�����������䫵�ͧ��ҹ�����  �к�������͹��㹡��������� ");		
define ('_INSTALL_DB_LOGERROR', "<br /><br />�ѹ�֡��ͼԴ��Ҵ:<br />\n");
define ('_INSTALL_DB_SITENAME_LABEL', "�������䫵�");
define ('_INSTALL_SITE_NAME_DESCRIPTION', "��  ���䫵������¹����͹�Ԫ�������");
define ('_INSTALL_DB_FOOTER1_LABEL', "Footer1");
define ('_INSTALL_DB_FOOTER2_LABEL', "Footer2");
define ('_INSTALL_DB_TEMPLATE_LABEL', "templates");
define ('_INSTALL_SITE_FOOTER1_DESCRIPTION', "��ͤ������������ǻ䫵� ��÷Ѵ���1");
define ('_INSTALL_SITE_FOOTER2_DESCRIPTION', "��ͤ������������ǻ䫵� ��÷Ѵ���2");
define ('_INSTALL_SITE_TEMPLATE_DESCRIPTION', "���͡ template");
//--Install3.php
define ('_INSTALL_SITE_NONAME', "��������������䫵�");
define ('_INSTALL_JS_SITENAME', "��س������� URL");
define ('_INSTALL_JS_PATH', "��س����  absolute path �ͧ���䫵�");
define ('_INSTALL_JS_EMAIL', "��س���������������㹡�õԴ��͡Ѻ�������к�");
define ('_INSTALL_JS_PASSWORD', "��س�������ʼ�ҹ����Ѻ�������к�");
define ('_INSTALL_SITE_SECTION', "�׹�ѹ�������  URL, absolute path �������Ţͧ�������к�");
define ('_INSTALL_SITE_DESCRIPTION', "<p>����ͧ����¹���� � ����ҡ������� URL ��� Path �١��ͧ���� ����ҡ������� ���Դ��ͼ������ԡ���Թ������ ���ͼ������к��ͧ��ҹ 
    	         �·�������Ǥ�ҷ���ʴ��������繤�ҷ��١��ͧ������й�Ҩзӧҹ�Ѻ���䫵�ͧ��ҹ��    	       <br />
    	          <br />
    	          �������ŷ���ͧ���������Ѻ���䫵�ͧ��ҹ ��������Ǥ������Ţͧ�������к�<br />");
define ('_INSTALL_SUPERADMIN_EMAIL', "�����");
define ('_INSTALL_SUPERADMIN_PASSWORD', "���ʼ�ҹ�ͧ�������к�");
define ('_INSTALL_SITE_PATH', "Path");
define ('_INSTALL_SITE_URL', "URL");
define ('_INSTALL_ADMIN_PW','[�й�����ҹ����¹���ʼ�ҹ �����ʼ�ҹ����ҹ��ͧ���]');

// neu 2.0 ++++++++++++++++++++++++++++++++++++++
define ('_INSTALL_FILE_PERMISSIONS','File Permissions');
define ('_INSTALL_DONT_CHM_FILES','Don\'t CHMOD files (use server defaults)');
define ('_INSTALL_CHMOD_FILES_TO','CHMOD files to:');
define ('_INSTALL_CHMOD_USER','User:');
define ('_INSTALL_CHMOD_GROUP','Group:');
define ('_INSTALL_CHMOD_WORLD','World:');
define ('_INSTALL_CHMOD_READ','Read');
define ('_INSTALL_CHMOD_WRITE','Write');
define ('_INSTALL_CHMODE_EXECUTE','Execute');

define ('_INSTALL_DIR_PERMISSIONS','Directory Permissions');
define ('_INSTALL_CHMOD_DIR_TO','CHMOD directories to:');
define ('_INSTALL_CHMOD_SEARCH','Search');
define ('_INSTALL_CHMOD_FILES_FAIL','<u>Information</u>: File permissions could <strong>not</strong> be set!<br />Please change manually with FTP and CHMOD 0644 to following files:<br />');
// ende neu 2.0 ++++++++++++++++++++++++++++++++++

//--Install4.php
define ('_INSTALL_JS_CHECKEMAIL', "��س��������ŷ��١��ͧ���¤�Ѻ");
define ('_INSTALL_JS_CHECKDB', "��������´�ͧ�ҹ���������١��ͧ������ҧ���");
define ('_INSTALL_JS_CHECKSITENAME', "��������������䫵�");
define ('_INSTALL_CONF_LANGUAGE', "'thai'");
define ('_INSTALL_CONF_SITE_MAINTAIN', "'���䫵���ѧ����㹪�ǧ�Ѿഷ��Ѻ<br /> ��سҡ�Ѻ�������Ѻ'");
define ('_INSTALL_CONF_SITE_UNAVAILABLE', "'�������ö�����纹�����Ѻ<br />��س��駼������к�'");
define ('_INSTALL_CONF_METADESC', "'ATOMYMAXSITE - �к���èѴ���������'");
define ('_INSTALL_CONF_METAKEYS', "'ATOMYMAXSITE, ATOMYMAXSITE'");
define ('_INSTALL_CONF_LANGUAGE_REF', "th_TH");
define ('_INSTALL_CONF_LANGUAGE_AREF', 'thai'); // admin language (new by mic)
define ('_INSTALL_CHMOD_DIR', "����¹�ŧ�Է���������á�������º��������");
define ('_INSTALL_CHMOD_DIR_FAIL', "�������ö����¹�Է�ԡ������á������  ��س�����¹�Է�Ԣͧ��á���յ��仹���� 777:<br />");
define ('_INSTALL_JS_CHECKURL', "��������������䫵�");
define ('_INSTALL_CONGRATULATION', "���ʴ������Թ�մ��¤�Ѻ !  ��õԴ���ͧ ATOMYMAXSITE ���������");
define ('_INSTALL_DESCRIPTION', "<p>��ԡ������ \"�����䫵�\" ���������ѧ��� ATOMYMAXSITE  �ͧ��ҹ ���ͤ�ԡ��� \"�������к�\" ���������ѧ˹����͡�Թ��ҨѴ����к�</p>");
define ('_INSTALL_POST_ACTION', "����ͷӡ�õԴ������º������������ҹź��� INSTALLATION �͡�ҡ�����������¤�Ѻ");
define ('_INSTALL_POST_ACTION1', 'SECURITY NOTE: ���硷���� Installation ��١����¹������ "###installtion"  .<br /><br />�ҡ��ҹ����ͧ���ա���� ��س�ź �͡�ҡ��������Ƿ���ش'); // ######################################## new
define ('_INSTALL_LOGIN', "��������´����������к��ͧ�������к�");
define ('_INSTALL_ADMIN_USERNAME', "���ͼ���� : admin");
define ('_INSTALL_ADMIN_PASSWORD', "���ʼ�ҹ : ");
define ('_INSTALL_ACTION', "��ԡ������\"�����䫵�\" ���������ѧ���䫵� ATOMYMAXSITE �ͧ��ҹ���ͻ��� \"�������к�\" ���������ѧ˹����͡�Թ��ҨѴ����к�");
define ('_INSTALL_VIEWSITE', "�����䫵�");
define ('_INSTALL_LOGINADMIN', "�������к�");
define ('_INSTALL_ALERT', "�������ö��¹��� configuration �� �����ջѭ��㹡�����ҧ���ѧ�����
        ����ҹ�ӡ�á�ͻ����鴢�ҧ��ҧ������� txt editor �ҡ������ѹ�֡����Ѿ��Ŵ������������ ��ԡ��� textarea ���ͷӡ�����ŷ��鴷�����");
// mail
define ('_INSTALL_MAIL_SUBJECT','Notification of Installation of ATOMYMAXSITE ' . ATOMYMAXSITEVersion);
define ('_INSTALL_MAIL_MSG1','Hello Admin');
define ('_INSTALL_MAIL_MSG2','below you will find the settings defined during the installation process of ATOMYMAXSITE ' . ATOMYMAXSITEVersion . ' from this site:');
define ('_INSTALL_MAIL_MSG3','Website name : ');
define ('_INSTALL_MAIL_MSG4','Website link : ');
define ('_INSTALL_MAIL_MSG5','Time of installation ........... : ');
define ('_INSTALL_MAIL_MSG6','Installation was performed by IP : ');
define ('_INSTALL_MAIL_SQL_GEN','SQL-Settings');
define ('_INSTALL_MAIL_SQL_HOST','Host ....... : ');
define ('_INSTALL_MAIL_SQL_USER','Username ... : ');
define ('_INSTALL_MAIL_SQL_PW','Password ... : ');
define ('_INSTALL_MAIL_SQL_DB','Database ... : ');
define ('_INSTALL_MAIL_SQL_PREFIX','DB-Prefix .. : ');
define ('_INSTALL_MAIL_PATH_GEN','Path');
define ('_INSTALL_MAIL_PATH_ABS','Absolut : ');
define ('_INSTALL_MAIL_PATH_REL','Relativ : ');
define ('_INSTALL_MAIL_LANG_GEN','��ҡ�˹�����');
define ('_INSTALL_MAIL_LANG_FRONT','�������ǹ�ͧ����� (Frontend) : ');
define ('_INSTALL_MAIL_LANG_BACK','�������ǹ�ͧ������ (Backend) : ');
define ('_INSTALL_MAIL_SAMPLEDB','�Դ��駵�����ҧ���������º����');
define ('_INSTALL_MAIL_NO_SAMPLEDB','����ա�õԴ��駵�����ҧ������');
define ('_INSTALL_MAIL_CHMOD_FAIL','Information: for following directories <CHMOD> could not be executed! Please change  the rights to <0755> for:
/attach
/backup
/data
/icon
/images/personnel
/images/random
/images/config
/images/icon
/images/gallery
/modules/aboutus
/modules/couter
/modules/editortalk
/modules/block/banner.xml
/modules/rss/news.xml
/modules/smiletag/data
/templates
/UserFiles
/install
/webboard_upload

Following files to 0644:
includes/config.in.php
download.dat
research.dat');
define ('_INSTALL_MAIL_DEL_INSTALLDIR','Attention: for your own security, please delete the installation directory, inclusive all files and directories within!!');
define ('_INSTALL_MAIL_DEL_INSTALLDIR_RENAME','Attantion: the directory "installation" was renamed to  " %s "! If you don\'t need at anymore, delete it as soon as possible!'); // +++++ new
define ('_INSTALL_MAIL_SENT','An email with the most important settings was sent to "<strong>%s</strong>".');

// new 2.0 ++++++++++++++++++++++++++++++++
define ('_INSTALL_MESS_DIRSAND_FILES_UNCHANGED','Directory and file permissions left unchanged.');
// end new 2.0 +++++++++++++++++++++++++++

// languages
	// general
define ('_INSTALL_LANGUAGE_SERVER','���ҷ������ԡ�ú������������');
define ('_INSTALL_LANGUAGE_DESC','Following settings will give you an overview of possible language settings, please write down you could use this later within ATOMYMAXSITE.<br />Correct display of date depends on your browser settings!');
define ('_INSTALL_LANGUAGE_SETTING','��ҡ�˹�');
define ('_INSTALL_LANGUAGE_DATE','����ʴ����ѹ���');
define ('_INSTALL_LANGUAGE_INSTALL','Following language code will be installed:');

	// local settings
	// please define in alphabetical order !
define ('_INSTALL_LNG_AR','Arabian');
define ('_INSTALL_LNG_BG','Bulgarian');
define ('_INSTALL_LNG_CN','Chinese');
define ('_INSTALL_LNG_CS','Czech');
define ('_INSTALL_LNG_DA','Danish');
define ('_INSTALL_LNG_DE','German');
define ('_INSTALL_LNG_EN','English');
define ('_INSTALL_LNG_ES','Spanish');
define ('_INSTALL_LNG_FI','Finnish');
define ('_INSTALL_LNG_FR','French');
define ('_INSTALL_LNG_HU','Hungarian');
define ('_INSTALL_LNG_IT','Italian');
define ('_INSTALL_LNG_LT','Lithuanian');
define ('_INSTALL_LNG_NL','Dutch');
define ('_INSTALL_LNG_PL','Polish');
define ('_INSTALL_LNG_PT','Portuguese');
define ('_INSTALL_LNG_SV','Swedish');
define ('_INSTALL_LNG_TH','��');
define ('_INSTALL_LNG_RU','Russian');


define ('_INSTALL_FOOTER_CREDIT',"�Ѳ���� ��ªѴʡ�  �ԡ�ŷͧ <a href='http://maxtom.sytes.net' target='_blank'>  atomy</a> �� 0899469997 ���� <a href='mailto:vt9vm@hotmail.com' target='_blank'>  vt9vm@hotmail.com  </a></br><a href='http://maxtom.sytes.net' target='_blank'>"._SCRIPT." "._VERSION."</a> �繫Ϳ��������Ѳ�ҵ�ͨҡ maxsite 1.10 �ͧ�س ��ɮ� �Թ��� �ҡ�ǻ <a href='http://www.mocyc.com'>http://www.mocyc.com</a>");

define ('_INSTALL_CAPCHA_TITLE','�����ҹ Capcha');
define ('_INSTALL_CAPCHA_ADD','���͡��ҹ Capcha :');
define ('_INSTALL_CAPCHA_TURE','��ҹ');
define ('_INSTALL_CAPCHA_FALSE','�����ҹ');
define ('_INSTALL_CAPCHA_TYPE','��Դ Capcha :');
define ('_INSTALL_CAPCHA_NOMAL','Ẻ����ѡ�û���');
define ('_INSTALL_CAPCHA_SPE','Ẻ��˹�����ѡ��');
define ('_INSTALL_CAPCHA_NUM','�ӹǹ����ѡ�� :');
?>