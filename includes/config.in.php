<?
/*
���Ѳ�� maxsite 1.10: �����ɮ� �Թ���
���Ѿ�� : 081-595-3392
Email : mocyc@hotmail.com
http://maxsite.geniuscyber.com


�Ѳ�ҵ���� atomymaxsite 2.5 �� : ��ªѴʡ�  �ԡ�ŷͧ
���Ѿ�� : 0899469997
Email : vt9vm@hotmail.com
http://banphue.sytes.net

��Ǥ͹�ԡ㹡�äǺ����к����䫵� 
*/
$globals_test = @ini_get('register_globals');
if ( isset($globals_test) && empty($globals_test) ) {
$types_to_register = array('GET', 'POST', 'COOKIE', 'SESSION', 'SERVER');
foreach ($types_to_register as $type) {
$arr = @${'_' . $type};
if (@count($arr) > 0)
extract($arr, EXTR_SKIP);
}
}

//�ҡ�ա�����¡������µç
if (preg_match("/config.in.php/i",$_SERVER['PHP_SELF'])) {
    Header("Location: ../index.php");
    die();
}

//MAXSITE Version
define("_SCRIPT","ATOMYMAXSITE"); 
define("_VERSION","2.5"); 

//Web Config

define("TIMESTAMP",time()) ;
define("WEB_TIMESTART","1405652228") ;  
//define("WEB_TEMPLATES","atomy") ; 
//Capcha ���˹ѧ����׹�ѹ����ʢ�ͤ���
define("USE_CAPCHA", true); //���û�ͧ�ѹ��������   true , false
define("CAPCHA_TYPE","2"); //�ٻẺ�ͧ����ѡ�� 1 = Ẻ��§�� , 2 = Ẻ������
define("CAPCHA_NUM","4"); //�ӹǹ����ѡ��
define("CAPCHA_WIDTH","60"); //��Ҵ�������ҧ
define("CAPCHA_HEIGHT","25"); //��Ҵ�����٧

/*
CAPCHA_TYPE Ẻ��� 1 ��ͧ�緤�Ҵѧ���
 �óշ�����ѡ��������������������� capcha/CaptchaSecurityImages.php ��÷Ѵ��� 6 ������ path ���١��ͧ �ҡ��ͧ��÷�Һ path ����Դ��� phpinfo.php ���͵�Ǩ�ͺ path �ͧ���䫵� 
*/

//Calendar
define("USE_THAIYEAR", true); //�ʴ����� �.�. � calendar   true , false


//MySQL Connect
define("DB_HOST","localhost");
define("DB_NAME","udon_db");
define("DB_USERNAME","root");
define("DB_PASSWORD","admin123");
define("ISO","tis-620");

//MySQL table
define("TB_ADMIN","web_admin");
define("TB_ADMIN_GROUP","web_groups");
define("TB_NEWS","web_news");
define("TB_NEWS_COMMENT","web_news_comment");
define("TB_NEWS_CAT","web_news_category");
define("TB_KNOWLEDGE","web_knowledge");
define("TB_KNOWLEDGE_COMMENT","web_knowledge_comment");
define("TB_KNOWLEDGE_CAT","web_knowledge_category");
define("TB_CALENDAR","web_calendar");
define("TB_WEBBOARD","web_webboard");
define("TB_WEBBOARD_COMMENT","web_webboard_comment");
define("TB_WEBBOARD_CAT","web_webboard_category");
define("TB_MEMBER","web_member");
define("TB_MAIL","web_mail");
//Permission Name
define("_LINKS","Web Links");
define("_EDITORTALK","Editor Talk");

//Icon Size
define("_INEWS_W","200"); //�ͤ͹������á��ҧ
define("_INEWS_H","150"); //�ͤ͹��������٧
define("_IKNOW_W","200"); //�ͤ͹���������ҧ
define("_IKNOW_H","150"); //�ͤ͹��������٧ 
define("_Iuser_W","80");//�ͤ͹��������٧     // ��Ѻ�к���Ҫԡ ����Ѻ MAXSITE @V.3
define("_Iuser_H","80"); //�ͤ͹��������٧     // ��Ѻ�к���Ҫԡ ����Ѻ MAXSITE @V.3
define("_Iadmin_W","80"); //�ͤ͹������á��ҧ
define("_Iadmin_H","100"); //�ͤ͹��������٧
//Show Topic
define("_NEWS_COL","2"); //�ӹǹ�������㹡���ʴ��������
define("_KNOW_COL","2"); //�ӹǹ�������㹡���ʴ����Ф������ 

//Webboard control
define("_NUM_ID","5"); //����ʴ���Ǣ�����ʴ��ӹǹ�����ѡ �� ��駤���� 5 ����ʴ� 00001 , 00015 �繵�
define("_SHOW_BOARD_PIN","5"); //��èӹǹ��з��ѡ��ش
define("_PERPAGE_BOARD","20"); //�ӹǹ��з�����ʴ�˹�Һ���������Ǵ
define("_ENABLE_BOARD_UPLOAD",true); //����ա���Ѿ��Ŵ�ٻ��  true , false
define("_WEBBOARD_LIMIT_UPLOAD","102400"); //��Ҵ����ٻ����Ѿ��Ŵ�� 
define("_WEBBOARD_LIMIT_UPLOADS","1024000"); //��Ҵ�����Ṻ
define("_WEBBOARD_LIMIT_PICWIDTH","600"); //��Ҵ����ٻ����Ѿ��Ŵ�� 
define("_MEMBER_LIMIT_PICWIDTH","100");
define("_MEMBER_LIMIT_UPLOAD","102400"); //��Ҵ����ٻ member
define("_MEMBER_COL","2"); 

//useronline
define("TB_useronline","web_useronline");
define("TB_gbook","web_gbook");
define("TB_personnel","web_personnel");
define("TB_personnel_group","web_personnel_group");
define("TB_personnel_list","web_personnel_list");
define("TB_ACTIVEUSER","web_activeuser");
define("_IPER_W","160"); //�ͤ͹������á��ҧ�ٻ�˭�
define("_IPER_H","200"); //�ͤ͹��������٧�ٻ�˭�
define("_IPERTHB_W","120"); //�ͤ͹������á��ҧ�ٻ���
define("_IPERTHB_H","150"); //�ͤ͹��������٧�ٻ���
//�������ҧ�ͧ
define("TB_PAGE","web_page");
define("_IPAGE_W","48"); //�ͤ͹������á��ҧ
define("_IPAGE_H","48"); //�ͤ͹��������٧


//�ŧҹ�ҧ�Ԫҡ��
define("TB_RESEARCH","web_research");
define("_Iresearch_W","100"); //�ͤ͹������á��ҧ
define("_Iresearch_H","120"); //�ͤ͹��������٧
define("TB_RESEARCH_COMMENT","web_research_comment");
define("TB_RESEARCH_CAT","web_research_category");
define("_RESEARCH_COL","2"); 

//GALLERY
define("TB_GALLERY","web_gallery");
define("TB_GALLERY_COMMENT","web_gallery_comment");
define("TB_GALLERY_CAT","web_gallery_category");
define("_IGALLERY_W","600"); //�ͤ͹������á��ҧ
define("_IGALLERY_H","500"); //�ͤ͹��������٧
define("_IGALLERYT_W","200"); //�ͤ͹������á��ҧ thb
define("_IGALLERYT_H","150"); //�ͤ͹��������٧ thb
define("_GALLERY_COL","3"); 
define("_GALLERYCAT_COL","2");
define("_GALLERY_ADMIN_COL","4"); 
define("_GALLERYCAT_ADMIN_COL","2");
define("_GALLERY_LIMIT_UPLOAD","512000"); //��Ҵ����ٻ member


//download
define("TB_DOWNLOAD","web_download");
define("_Idownload_W","100"); //�ͤ͹������á��ҧ
define("_Idownload_H","80"); //�ͤ͹��������٧
define("_DOWNLOAD","download");
define("TB_DOWNLOAD_COMMENT","web_download_comment");
define("TB_DOWNLOAD_CAT","web_download_category");
define("_DOWNLOAD_COL","2"); 

//webconfig
define("TB_CONFIG","web_config");
define("TB_CONFIG_CAT","web_config_category");
define("_CONFIG_LIMIT_UPLOAD","5120000"); //��Ҵ��� config
//block
define("TB_BLOCK","web_block");
//vote
define("TB_VOTE","web_vote");
//alumnus
define("TB_ALUMNUS","web_alumnus");
define("_ALUMNUS_LIMIT_PICWIDTH","100"); //�������ҧ����ٻ��������
define("_ALUMNUS_LIMIT_UPLOAD","51200"); //��Ҵ����ٻ��������
define("_ALUMNUS_COL","2"); 

// workboard
define("TB_WORKBOARD_MEMBERS","web_workboard_members");
define("TB_WORKBOARD_POSITIONS","web_workboard_positions");
define("TB_WORKBOARD_PRIORITIES","web_workboard_priorities");
define("TB_WORKBOARD_PROJECTS","web_workboard_projects");
define("TB_WORKBOARD_PROJECTS_MEMBERS","web_workboard_projects_members");
define("TB_WORKBOARD_STATUS","web_workboard_status");
define("TB_WORKBOARD_TASKS","web_workboard_tasks");
define("TB_WORKBOARD_TASKS_MEMBERS","web_workboard_tasks_members");

define("TB_BLOG","web_blog");
define("TB_BLOG_COMMENT","web_blog_comment");
define("TB_BLOG_CAT","web_blog_category");
define("TB_BLOG_LEVEL","web_blog_level");
define("_BLOG","blog");
define("_BLOG_COL","2");
define("_Iblog_W","200");//�������ҧ�ٻ�ѡ���¹     
define("_Iblog_H","150"); //�����٧�ٻ�ѡ���¹   

// poll
define("TB_POLL","web_polls");
define("TB_POLL_VOTES","web_poll_votes");
define("TB_IPBLOCK","web_ipblock");

// templates
define("TB_TEMPLATES","web_templates");
// images random
define("TB_RANDOM","web_random");
define("_IRAN_W","520");//�������ҧ�ٻ     
define("_IRAN_H","250"); //�����٧�ٻ 

// menu
define("TB_MENU","web_menu");

//	video
define("TB_VIDEO","web_video");
define('_VIDEOS_DIR_PATH', "video");
define('_THUMBS_DIR_PATH', "video/thumbs");
define("TB_VIDEO_COMMENT","web_video_comment");
define("TB_VIDEO_CAT","web_video_category");
define("_IVIDEOT_W","200"); //�ͤ͹������á��ҧ thb
define("_IVIDEOT_H","150"); //�ͤ͹��������٧ thb
define("_VIDEO_COL","2"); 
define("_VIDEOIN_COL","3");
define("_VIDEOCAT_COL","2");
define("_VIDEO_ADMIN_COL","4"); 
define("_VIDEOCAT_ADMIN_COL","2");
define("_VIDEO_LIMIT_UPLOAD","104857600");
//define("_VIDEO_FFMPEG","/usr/local/bin");
//define("_VIDEO_FLVTOOL2","/usr/local/bin"); 



?>
