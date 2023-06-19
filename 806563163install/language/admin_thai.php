<?php
/**
* @version $Id: admin_thai_tis-620.php,v 1.5 2005/12/14 03:27:52 Ninekrit Exp $
* @package MamLang 1.0
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Powered By: mamboHub.com & mambolaithai.org
*/


//defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// Language and Encode of admin language
DEFINE('_A_LANGUAGE','th');
DEFINE('_A_ISO','charset=tis-620');

// needed for $alt text in toolbar item
DEFINE('_A_CANCEL','¡��ԡ'); 
DEFINE('_A_SAVE','�ѹ�֡');
DEFINE('_A_APPLY','��ҹ'); 
DEFINE('_A_CLOSE','¡��ԡ');
DEFINE('_A_COPY','�Ѵ�͡');
DEFINE('_A_MOVE','����');
DEFINE('_A_DELETE','ź'); 
DEFINE('_A_NEXT','�Ѵ�'); 
DEFINE('_A_BACK','��͹˹��'); 
DEFINE('_A_DEFAULT','����������'); 
DEFINE('_A_RESTORE','�ӡ�Ѻ'); 

/**
* @location /../includes/mambo.php
* @desc Includes translations of several droplists and non-translated stuff
*/

//Droplist
DEFINE('_A_TOP','��');
DEFINE('_A_ALL','������');
DEFINE('_A_NONE','����˹�');
DEFINE('_A_SELECT_IMAGE','���͡�ٻ');
DEFINE('_A_NO_USER','�������Ҫԡ');
DEFINE('_A_CREATE_CAT','��ҹ�е�ͧ�ӡ�����ҧ��Ǵ���¡�͹');
DEFINE('_A_PARENT_BROWSER_NAV','�Դ�˹�ҵ�ҧ���');
DEFINE('_A_NEW_BROWSER_NAV','�Դ˹�ҵ�ҧ����');
DEFINE('_A_NEW_W_BROWSER_NAV','�Դ˹�ҵ�ҧ������������������������');

//Main Texts
DEFINE('_A_PUBLISHED_PEND','�͡�������');
DEFINE('_A_PUBLISHED_CURRENT','���������');
DEFINE('_A_PUBLISHED_EXPIRED','������������������');
DEFINE('_A_PUBLISHED_NOT','��������');
DEFINE('_A_TOGGLE_STATE','��ԡ����ͤ͹��������¹ʶҹ�');

//Alt Hover
DEFINE('_A_PENDING','��');
DEFINE('_A_VISIBLE','�ͧ�����');
DEFINE('_A_FINISHED','�������');
DEFINE('_A_MOVE_UP','����͹���');
DEFINE('_A_MOVE_DOWN','����͹ŧ');

/**
* @desc Includes the main adminLanguage class which refers to var's for translations
*/
class adminLanguage {

var $RTLsupport = false;

var $A_MAIL = '���ͧ��ͤ���';

//templates/mambo_admin_blue/login.php
var $A_USERNAME = '������Ҫԡ';
var $A_PASSWORD = '���ʼ�ҹ';
var $A_WELCOME_MAMBO = '<p>�к������èѴ������䫵�</p><p>��س������������´������͡�Թ</p><p>�ҡ�س�����˹�ҷ������Ǣ�ͧ<br>��سһԴ˹�ҵ�ҧ�����¤�Ѻ</p>';
var $A_WARNING_JAVASCRIPT = '!����͹!! �س��ͧ�Դ�����ҹ����ʤ�Ի��������㹡�èѴ������ǹ�ͧ��ô����к�';

//templates/mambo_admin_blue/index.php
var $A_LOGIN = '�������к�';    //NineKrit ADDED
var $A_GENERATE_TIME = '˹�ҹ��١���ҧ������� %f �Թҷ�';
var $A_LOGOUT = '�͡�ҡ�к�';

//popups/contentwindow.php
var $A_TITLE_CPRE = '�ʴ�������';
var $A_CLOSE = '�Դ';
var $A_PRINT = '�����';

//popups/modulewindow.php
var $A_TITLE_MPRE = '�ʴ������';

//popups/pollwindow.php
var $A_TITLE_PPRE = '�ʴ�Ẻ���Ǩ';
var $A_VOTE = '��ǵ';
var $A_RESULTS = '���Ѿ��';

//popups/uploadimage.php
var $A_TITLE_UPLOAD = '�Ѿ��Ŵ���';
var $A_FILE_UPLOAD = '�Ѿ��Ŵ���';
var $A_UPLOAD = '�Ѿ��Ŵ';
var $A_FILE_MAX_SIZE = '��Ҵ�٧�ش'; //Ken ADDED

//modules/mod_components.php
var $A_ERROR = '�Դ�����Դ��Ҵ!';

//modules/mod_fullmenu.php
var $A_MENU_HOME = '˹����ѡ';
var $A_MENU_HOME_PAGE = '���ྨ';
var $A_MENU_CTRL_PANEL = 'ἧ�Ǻ���'; //NineKrit ADDED
var $A_MENU_SITE = '���';
var $A_MENU_SITE_MENU ='��èѴ������䫵�';
var $A_MENU_SITE_MANAGEMENT = '��ú����èѴ������';  //NineKrit ADDED
var $A_MENU_CONFIGURATION = '��駤�Ҥ͹�Ԥ';
var $A_MENU_LANGUAGES = '����';
var $A_MENU_MANAGE_LANG = '����¹����';
var $A_MENU_LANG_MANAGE = '��Ѻ����¹����';
var $A_MENU_INSTALL = '�Դ���';
var $A_MENU_INSTALL_LANG = '�Դ�������';
var $A_MENU_MEDIA_MANAGE = '��èѴ�����������';
var $A_MENU_MANAGE_MEDIA = '��èѴ������';
var $A_MENU_PREVIEW = '�ʴ�������ҧ';
var $A_MENU_NEW_WINDOW = '�˹�ҵ�ҧ����';
var $A_MENU_INLINE = '�˹�ҵ�ҧ���';
var $A_MENU_INLINE_POS = '�˹�ҵ�ҧ�������ʴ����˹觢ͧ�����';
var $A_MENU_STATISTICS = 'ʶԵ�';
var $A_MENU_STATISTICS_SITE = 'ʶԵ����';
var $A_MENU_BROWSER = '��������, �����, ����';
var $A_MENU_PAGE_IMP = 'ʶԵԡ����Ҫ�˹��ྨ';
var $A_MENU_SEARCH_TEXT = 'ʶԵԤӤ�';
var $A_MENU_TEMP_MANAGE = '��èѴ������ŵ';
var $A_MENU_TEMP_CHANGE = '����¹���ŵ���䫵�';
var $A_MENU_INSTALL_TEMPLATES = '�Դ������ŵ���䫵�';  //NineKrit ADDED
var $A_MENU_SITE_TEMP = '���ŵ���䫵�';
var $A_MENU_ADMIN_TEMP = '���ŵ������';
var $A_MENU_ADMIN_CHANGE_TEMP = '����¹���ŵ������';
var $A_MENU_INSTALL_ADMIN_TEMPLATES = '�Դ��� ���ŵ������'; //NineKrit ADDED
var $A_MENU_MODUL_POS = '���˹������';
var $A_MENU_TEMP_POS = '���˹� ���ŵ';
var $A_MENU_TRASH_MANAGE = '��èѴ��öѧ������';
var $A_MENU_MANAGE_TRASH = '��èѴ��öѧ������';
var $A_MENU_USER_MANAGE = '��èѴ�����Ҫԡ';
var $A_MENU_MANAGE_USER = '��èѴ�����Ҫԡ';
var $A_MENU_ADD_EDIT = '����/��� ��Ҫԡ';
var $A_MENU_MASS_MAIL = '�觨�����';
var $A_MENU_MAIL_USERS = '�觨����¶֧�������Ҫԡ';
var $A_MENU_MANAGE_STR = '��èѴ����ç���ҧ���';
var $A_MENU_MANAGEMENT = '���� ��èѴ���'; //NineKrit ADDED
var $A_MENU_CONTENT = '������';
var $A_MENU_CONTENT_MANAGE = '��èѴ���������';
var $A_MENU_CONTENT_MANAGERS = '��èѴ���������';
var $A_MENU_CONTENT_BY_SECTION = '�����ҵ����Ǵ';  //NineKrit ADDED
var $A_MENU_MANAGE_CONTENT = '��èѴ��� ��¡��������';
var $A_MENU_MANAGE_CONTACTS = '��èѴ�����ǹ��õԴ���';
var $A_MENU_ITEMS = '��¡��';
var $A_MENU_ADDNEDIT = '����/���';
var $A_MENU_ARCHIVE = '��ѧ������';
var $A_MENU_OTHER_MANAGE = '�к��Ѵ������� ';
var $A_MENU_ITEMS_FRONT = '��èѴ�����¡��˹�����';
var $A_MENU_ITEMS_CONTENT = '��èѴ�����¡���������';
var $A_MENU_ITEMS_ARCHIVE = '��èѴ�����¡��㹤�ѧ������';
var $A_MENU_ARCHIVE_MANAGE = '��èѴ��ä�ѧ������';
var $A_MENU_CONTENT_SEC = '��èѴ�����ǹ��ѡ �ͧ������';
var $A_MENU_CONTENT_CAT = '��èѴ��û����� �ͧ������';
var $A_MENU_CATEGORIES = '������';
var $A_MENU_COMPONENTS = '�����鹷�';
var $A_MENU_COMPONENTS_MANAGEMENT = '��èѴ��ä����鹷�';  // NineKrit Add
var $A_MENU_INST_UNST = '�Դ���/ź';
var $A_MENU_INST_UNST_COMPONENTS = '�Դ���/ź�����鹷�';  // NineKrit Add
var $A_MENU_MORE_COMP = '�����鹷����� ';
var $A_MENU_MORE_COMP2 = '�����鹷���� � �������...';//NineKrit Add
var $A_MENU_MODULES = '�����';
var $A_MENU_INST_UNST_MODULES = '�Դ���/ź�����';//NineKrit Add
var $A_MENU_MODULES_MANAGEMENT = '��èѴ��������'; //NineKrit Add
var $A_MENU_INSTALL_CUST = '�Դ��������';
var $A_MENU_SITE_MOD = '��������';
var $A_MENU_SITE_MOD_MANAGE = '��èѴ�����������';
var $A_MENU_ADMIN_MOD = '����Ţͧ������';
var $A_MENU_ADMIN_MOD_MANAGE = '��èѴ�������Ţͧ������';
var $A_MENU_MAMBOTS = '����ͷ';
var $A_MENU_INST_UNST_MAMBOTS = '�Դ���/ź ����ͷ';//ninekrit Add
var $A_MENU_MAMBOTS_MANAGE = '��èѴ��� ����ͷ'; //ninekrit Add
var $A_MENU_CUSTOM_MAMBOT = '�Դ��� ����ͷ'; 
var $A_MENU_SITE_MAMBOT = '����ͷ���';
var $A_MENU_SITE_MAMBOTS = '����ͷ���';
var $A_MENU_MAMBOT_MANAGE = '��èѴ�������ͷ���';
var $A_MENU_INSTALLERS = '�Դ���';//KEN ADDED
var $A_MENU_INSTALLERS_LIST = '��¡�÷��еԴ���';//KEN ADDED
var $A_MENU_TEMPLATES_SITE = '���ŵ - ���䫵�';//KEN ADDED
var $A_MENU_TEMPLATES_SITE_INST = '�Դ������ŵ���䫵�';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN = '���ŵ - �������к�';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN_INST = '�Դ������ŵ�������к�';//KEN ADDED
var $A_MENU_MESSAGES = '��ͤ���';
var $A_MENU_MESSAGES_MANAGEMENT = '��èѴ����觢�ͤ���';//KEN ADDED
var $A_MENU_INBOX = '���ͧ��ͤ������';
var $A_MENU_PRIV_MSG = '��ͤ�����ǹ�ؤ��';
var $A_MENU_GLOBAL_CHECK = '��Ǩ�ͺ��������´������';
var $A_MENU_CHECK_INOUT = '���Թ��¡������ҷ������';
var $A_MENU_SYSTEM_INFO = '�������к�';
var $A_MENU_CLEAN_CACHE = 'źᤪ';
var $A_MENU_CLEAN_CACHE_ITEMS = '��ҧᤪ�ͧ�����ҷ�����';
var $A_MENU_BIG_THANKS = '�ͺ�س�繾��������Ѻ��������ѧ���Фӻ�֡�ҷء��ҹ';
var $A_MENU_SUPPORT = '��ê��������';
var $A_MENU_SYSTEM = '�к�';
var $A_MENU_SYSTEM_MNG = '��èѴ����к�';

//modules/mod_latest.php
var $A_LATEST_ADDED = '������/������ ����ش';

//modules/mod_logged.php
var $A_USER_LOGGED = '�����ҹ�����͡�Թ����';
var $A_USER_FORCE_LOGOUT = '����������ҹ�͡�ҡ�к�';

//modules/mod_online.php
var $A_ONLINE_USERS = '�����ҹ�͹�Ź�';

//modules/mod_popular.php
var $A_POPULAR_MOST = '�դ�������ʹ��ҡ����ش';
var $A_CREATED = '��¹';
var $A_HITS = '����';

//modules/mod_quickicon.php
var $A_MENU_MANAGER = '��èѴ�������';
var $A_FRONTPAGE_MANAGER = '��èѴ���������˹�����';
var $A_STATIC_MANAGER = '�������൵ԡ';
var $A_SECTION_MANAGER = '����/��� ��Ǵ�ͧ������';
var $A_CATEGORY_MANAGER = '����/��� �������ͧ������';
var $A_ALL_MANAGER = '�����ҷ�����';
var $A_TRASH_MANAGER = '��èѴ��öѧ������';
var $A_GLOBAL_CONF = '��駤�Ҥ͹�Ԥ��ѡ';
var $A_HELP = '���������';

//includes/menubar.html.php
var $A_NEW = '���ҧ����';
var $A_PUBLISH = '�����';
var $A_DEFAULT = '����������';
var $A_ASSIGN = '�к�';
var $A_UNPUBLISH = '��������';
var $A_UNARCHIVE = '¡��ԡ��ѧ������';
var $A_EDIT = '���';
var $A_DELETE = 'ź';
var $A_TRASH = '�ѧ������';
var $A_SAVE = '�Ѵ��';
var $A_BACK = '��Ѻ';
var $A_CANCEL = '¡��ԡ';

//Alerts
var $A_ALERT_SELECT_TO = '�ô���͡����������';
var $A_ALERT_SELECT_PUB = '�ô���͡��¡�����������';
var $A_ALERT_SELECT_PUB_LIST = '�ô���͡��¡�����͡�˹��繤���������';
var $A_ALERT_ITEM_ASSIGN = '�ô���͡����ͧ���͡�˹�';
var $A_ALERT_SELECT_UNPUBLISH = '�ô���͡��¡�������صԡ�������';
var $A_ALERT_SELECT_ARCHIVE = '�ô���͡��¡�����ͨѴ���繤�ѧ������';
var $A_ALERT_SELECT_UNARCHIVE = '�ô���͡��¡������¡��ԡ�繤�ѧ������';
var $A_ALERT_SELECT_EDIT = '�ô���͡��¡���������';
var $A_ALERT_SELECT_DELETE = '�ô���͡��¡������ź';
var $A_ALERT_CONFIRM_DELETE = '�س����������ź��¡�ù��?';

//Alerts
var $A_ALERT_ENTER_PASSWORD = '��س�������ʼ�ҹ'; 
var $A_ALERT_INCORRECT = '����, ���ʼ�ҹ, ���� �дѺ�ͧ�����ҹ������ͼԴ��Ҵ.  �ͧ�����ա����';
var $A_ALERT_INCORRECT_TRY = '����, ���ʼ�ҹ, ������ͼԴ��Ҵ.  �ͧ�����ա����';
var $A_ALERT_ALPHA = '�������ö����ѡ��о�������������ä��';
var $A_ALERT_IMAGE_UPLOAD = '��س����͡�ٻ����ͧ����Ѻ��Ŵ��͹';
var $A_ALERT_IMAGE_EXISTS = "�ٻ %s ����������";
var $A_ALERT_IMAGE_FILENAME = '����������� gif, png, jpg, bmp, swf, doc, xls ���� ppt';
var $A_ALERT_UPLOAD_FAILED = "�Ѻ��Ŵ %s ��������";
var $A_ALERT_UPLOAD_SUC = "�Ѻ��Ŵ %s ��ѧ %s ��������";
var $A_ALERT_UPLOAD_SUC2 = "�Ѻ��Ŵ %s ��ѧ %s ���º����";

//includes/pageNavigation.php
var $A_OF = '�ҡ'; 
var $A_NO_RECORD_FOUND = '�����㹺ѹ�֡';
var $A_FIRST_PAGE = '˹���á';
var $A_PREVIOUS_PAGE = '˹�ҡ�͹˹��';
var $A_NEXT_PAGE = '˹�ҵ���';
var $A_END_PAGE = '˹���ش����';
var $A_PREVIOUS = '��͹˹��';
var $A_NEXT = '����';
var $A_END = '�ش����';
var $A_DISPLAY = '�ʴ�';
var $A_MOVE_UP = '����͹���';
var $A_MOVE_DOWN = '����͹ŧ';

//DIRECTORY COMPONENTS ALL FILES
var $A_COMP_CHECKED_OUT = '���͡';
var $A_COMP_TITLE = '��������ͧ';
var $A_COMP_IMAGE = '�ٻ';
var $A_COMP_FRONT_PAGE = '˹���á���';
var $A_COMP_IMAGE_POSITION = '���˹��ٻ�Ҿ';
var $A_COMP_FILTER = '����';
var $A_COMP_ORDERING = '������§�ӴѺ';
var $A_COMP_ACCESS_LEVEL = '�дѺ�����Ҷ֧';
var $A_COMP_PUBLISHED = '�����';
var $A_COMP_PUBLISH = '�����';
var $A_COMP_UNPUBLISHED = '��������';
var $A_COMP_UNPUBLISH = '��������';
var $A_COMP_REORDER = '��èѴ�ӴѺ';
var $A_COMP_ORDER = '�ӴѺ';
var $A_COMP_SAVE_ORDER = '�ѹ�֡��èѴ�ӴѺ';
var $A_COMP_ACCESS = '�����Ҷ֧';
var $A_COMP_SECTION = '��Ǵ';
var $A_COMP_NB = '#';
var $A_COMP_ACTIVE = '# �ӹǹ������';
var $A_COMP_TRASH = '# �١���͡';
var $A_COMP_DESCRIPTION = '��͸Ժ��';
var $A_COMP_SELECT_MENU_TYPE = '��س����͡����';
var $A_COMP_ENTER_MENU_NAME = '��س�����������';
var $A_COMP_CREATE_MENU_LINK = '�س����������������ҧ���ٹ��? \n�ҡ����ա�úѹ�֡ �������¹�ŧ������ռ�';
var $A_COMP_LINK_TO_MENU = '�ԧ������';
var $A_COMP_CREATE_MENU = '�����ҧ������������ٷ��س���͡';
var $A_COMP_SELECT_MENU = '���͡����';
var $A_COMP_MENU_TYPE_SELECT = '���͡�ٻẺ����';
var $A_COMP_MENU_NAME_ITEM = '��������';
var $A_COMP_MENU_LINKS = '�͡�ҡ�����ԧ��';
var $A_COMP_MENU_LINKS_AVAIL = '�����ԧ�����������ͷӡ�úѹ�֡';
var $A_COMP_NONE = '�����';
var $A_COMP_MENU = '����';
var $A_COMP_TYPE = '�ٻẺ';
var $A_COMP_EDIT = '���';
var $A_COMP_NEW = '���ҧ���';
var $A_COMP_ADD = '����';
var $A_COMP_ITEM_NAME = '������¡��';
var $A_COMP_STATE = 'ʶҹ�';
var $A_COMP_TRASHED = 'ź';
var $A_COMP_NAME = '����';
var $A_COMP_DEFAULT = '����������';
var $A_COMP_CATEG = '������';
var $A_COMP_LINK_USER = '������§��ѧ�����ҹ';
var $A_COMP_CONTACT = '�Դ���';
var $A_COMP_EMAIL = '�����';
var $A_COMP_PREVIEW = '�ʴ�������ҧ';
var $A_COMP_ITEMS = '��¡��';
var $A_COMP_ITEM = '��¡��';
var $A_COMP_ID = '�Ţ����';
var $A_COMP_EXPIRED = '�������';
var $A_COMP_YES = '��';
var $A_COMP_NO = '���';
var $A_COMP_EDITING = '���';
var $A_COMP_ADDING = '����';
var $A_COMP_ARCHIVED = '����繤�ѧ������';
var $A_COMP_HITS = '����';
var $A_COMP_SOURCE = '�����';
var $A_COMP_SEL_ITEM = '���͡��¡������Ѻ';
var $A_COMP_DATE = '�ѹ���';
var $A_COMP_AUTHOR = '�����¹';
var $A_COMP_ANOTHER_ADMIN = '���ѧ����¼����ŷ�ҹ�������';
var $A_COMP_SAVE_UNWRT = '�����  �������ö��¹�Ѻ�� ��ѧ�ҡ�Ӻѹ�֡';
var $A_COMP_OVERRIDE_SAVE = '¡��ԡ��û�ͧ�ѹ�����¹�Ѻ��зӡ�úѹ�֡';
var $A_COMP_ORDER_SAVED = '�ѹ�֡��èѴ���§�ӴѺ';
var $A_COMP_NO_PARAMETERS = '����� ����觤�Ҿ���������';
var $A_COMP_POSITION = '���˹�';
var $A_COMP_SHOW_ADV_DETAILS = '�ʴ���������������´'; //SINN TRANS.
var $A_COMP_HIDE_ADV_DETAILS = '��͹��������������´'; //SINN TRANS.

//components/com_admin/admin.admin.html.php
var $A_COMP_ADMIN_HOME = 'ἧ�Ǻ���';
var $A_COMP_ADMIN_SIMP_MODE = 'Simple Mode';
var $A_COMP_ADMIN_SIMP_MODE_SELECTED = 'Simple Mode (selected)';
var $A_COMP_ADMIN_SIMP_MODE_UNSELECTED = 'Simple Mode (unselected)';
var $A_COMP_ADMIN_ADV_MODE = 'Advanced Mode';
var $A_COMP_ADMIN_ADV_MODE_SELECTED = 'Advanced Mode (selected)';
var $A_COMP_ADMIN_ADV_MODE_UNSELECTED = 'Advanced Mode (unselected)';
//var $A_COMP_ADMIN_TITLE = 'Control Panel';
var $A_COMP_ADMIN_INFO = '������';
var $A_COMP_ADMIN_SYSTEM = '�������к�';
var $A_COMP_ADMIN_PHP_BUILT_ON = 'PHP �ӧҹ��к�:';
var $A_COMP_ADMIN_DB = '�ҹ�������������:';
var $A_COMP_ADMIN_PHP_VERSION = 'PHP �������:';
var $A_COMP_ADMIN_SERVER = '������������:';
var $A_COMP_ADMIN_SERVER_TO_PHP = '�ҡ����������������ٻẺ���ͪ��:';
var $A_COMP_ADMIN_MAMBO_VERSION = '������������:'; //Mambo Version
var $A_COMP_ADMIN_AGENT = '���᷹�����:';
var $A_COMP_ADMIN_SETTINGS = '��õ�駤��� PHP :';
var $A_COMP_ADMIN_MODE = '૾����:';
var $A_COMP_ADMIN_BASEDIR = '�Դ�������������:';
var $A_COMP_ADMIN_ERRORS = '�ʴ���ͼԴ��Ҵ:';
var $A_COMP_ADMIN_OPEN_TAGS = '���ԴẺ���:';
var $A_COMP_ADMIN_FILE_UPLOADS = '�Ѿ��Ŵ���:';
var $A_COMP_ADMIN_QUOTES = 'Magic Quotes:';
var $A_COMP_ADMIN_REG_GLOBALS = 'Register Globals:';
var $A_COMP_ADMIN_OUTPUT_BUFF = 'Output Buffering:';
var $A_COMP_ADMIN_S_SAVE_PATH = 'Session save path:';
var $A_COMP_ADMIN_S_AUTO_START = 'Session auto start:';
var $A_COMP_ADMIN_XML = 'XML �ӧҹ��:';
var $A_COMP_ADMIN_ZLIB = 'Zlib �ӧҹ��:';
var $A_COMP_ADMIN_DISABLED = '�ѧ��ѹ������ӧҹ:';
var $A_COMP_ADMIN_WYSIWYG = 'WYSIWYG �ʹ�����:';
var $A_COMP_ADMIN_CONF_FILE = '����纤�Ҥ͹�Ԥ:';
var $A_COMP_ADMIN_PHP_INFO2 = '��������´ PHP';
var $A_COMP_ADMIN_PHP_INFO = '��������´ PHP';
var $A_COMP_ADMIN_PERMISSIONS='����Թ���';
var $A_COMP_ADMIN_DIR_PERM = '����Թ����ͧ��á������';
var $A_COMP_ADMIN_FOR_ALL = '���������ö�ӧҹ�����ҧ����ó��������ͷء��á������ "����ö��¹��:';
var $A_COMP_ADMIN_CREDITS = '�ӹ���';
var $A_COMP_ADMIN_APP = '�;���पѹ';
var $A_COMP_ADMIN_URL = 'URL';
var $A_COMP_ADMIN_VERSION = '�������';
var $A_COMP_ADMIN_LICENSE = '�Ԣ�Է���';
var $A_COMP_ADMIN_CALENDAR = '��ԷԹ';
var $A_COMP_ADMIN_PUB_DOMAIN = '���������';
var $A_COMP_ADMIN_ICONS = '�ͤ͹';
var $A_COMP_ADMIN_INDEX = '�Ѫ��';
var $A_COMP_ADMIN_SITE_PREVIEW = '�ٵ�����ҧ���';
var $A_COMP_ADMIN_OPEN_NEW_WIN = '�Դ˹�ҵ�ҧ����';

//components/com_admin/admin.admin.php
var $A_COMP_ALERT_NO_LINK = '������ԧ������Ѻ��¡�ù��';

//components/com_banners/admin.banners.html.php
var $A_COMP_BANNERS_MANAGER = '��èѴ��û����ɳ�';
var $A_COMP_BANNERS_NAME = '���ͻ����ɳ�';
var $A_COMP_BANNERS_IMPRESS_MADE = '�ʴ������';
var $A_COMP_BANNERS_IMPRESS_LEFT = '�ӹǹ���駷�������';
var $A_COMP_BANNERS_CLICKS = '��ԡ';
var $A_COMP_BANNERS_CLICKS2 = '% ��ԡ';
var $A_COMP_BANNERS_PUBLISHED = '�����';
var $A_COMP_BANNERS_LOCK = '���͡';
var $A_COMP_BANNERS_PROVIDE = '��سҵ�駪��ͻ����ɳ�';
var $A_COMP_BANNERS_SELECT_IMAGE = '��س����͡�ٻ.';
var $A_COMP_BANNERS_FILL_URL = '��س����  URL ����Ѻ�����ɳ�.';
var $A_COMP_BANNERS_BANNER = '�����ɳ�';
var $A_COMP_BANNERS_DETAILS = '��������´';
var $A_COMP_BANNERS_CLIENT = '�����١����ɳ�';
var $A_COMP_BANNERS_PURCHASED = '�ӹǹ���駷���ʴ�';
var $A_COMP_BANNERS_UNLIMITED = '���ӡѴ�ӹǹ����';
var $A_COMP_BANNERS_URL = '������� URL �ͧ�����ɳ�';
var $A_COMP_BANNERS_SHOW = '�ʴ������ɳ�';
var $A_COMP_BANNERS_CLICK_URL = '��ԡ URL';
var $A_COMP_BANNERS_CUSTOM = '��㹡�����¡�����ɳ�';
var $A_COMP_BANNERS_RESET_CLICKS = '������ӹǹ��ԡ����';
var $A_COMP_BANNERS_IMAGE = '����ٻ�����ɳ�';
var $A_COMP_BANNERS_CLIENT_MANAGER = '��èѴ����١��һ����ɳ�';
var $A_COMP_BANNERS_NO_ACTIVE = '�ӹǹẹ������ӡ���ʴ�';
var $A_COMP_BANNERS_FILL_CL_NAME = '��س��кت��͡����ẹ����';
var $A_COMP_BANNERS_FILL_CO_NAME = '��س������ͼ��Դ���';
var $A_COMP_BANNERS_FILL_CO_EMAIL = '��س��������Ţͧ���Դ���';
var $A_COMP_BANNERS_TITLE_CLIENT = '���ͼ����ͻ����ɳ�';
var $A_COMP_BANNERS_CONTACT_NAME = '���ͼ��Դ���';
var $A_COMP_BANNERS_CONTACT_EMAIL = '����ż��Դ���';
var $A_COMP_BANNERS_EXTRA = '�������������';

//components/com_banners/admin.banners.php
var $A_COMP_BANNERS_SELECT_CLIENT = '���͡�١���';
var $A_COMP_BANNERS_THE_CLIENT = '�١�����¹�� [ ';
var $A_COMP_BANNERS_EDITED = ' ] ���ѧ�ա������¼����ŷ�ҹ�������';
var $A_COMP_BANNERS_DEL_CLIENT = '�������öź�١��������ͧ�ҡ�ѧ��ᶺ�����ɳҢͧ�١�������';

//components/com_categories/admin.categories.html.php
var $A_COMP_CATEG_MANAGER = '��èѴ��û����� <small><small>[ ������: ������ ]</small></small>';
var $A_COMP_CATEG_CATEGS = '������ <small><small>[ %s ]</small></small>';
var $A_COMP_CATEG_NAME = '���ͻ�����';
var $A_COMP_CATEG_ID = '�����Ţ������';
var $A_COMP_CATEG_MUST_NAME = '��س������ͻ�����';
var $A_COMP_CATEG_DETAILS = '��������´������';
var $A_COMP_CATEG_TITLE = '��Ǣ��';
var $A_COMP_CATEG_TABLE = '���ҧ';
var $A_COMP_CATEG_BLOG = '���͡ ������';
var $A_COMP_CATEG_BLOG_ARCHIVE = '�������ͧ���͡��ѧ������';
var $A_COMP_CATEG_MESSAGE = '������';
var $A_COMP_CATEG_MESSAGE2 = '���ѧ�١����¼����ŷ�ҹ�������';
var $A_COMP_CATEG_MOVE = '���»�����';
var $A_COMP_CATEG_MOVE_TO_SECTION = '�������Ǵ';
var $A_COMP_CATEG_BEING_MOVED = '���ѧ���»�����';
var $A_COMP_CATEG_CONTENT = '�����ҷ��١����';
var $A_COMP_CATEG_MOVE_CATEG = '�����繡�����»�����';
var $A_COMP_CATEG_ALL_ITEMS = '��������ҷ�����㹻�����������';
var $A_COMP_CATEG_TO_SECTION = '��ѧ��Ǵ������͡���';
var $A_COMP_CATEG_COPY = '�Ѵ�͡������';
var $A_COMP_CATEG_COPY_TO_SECTION = '�Ѵ�͡���Ǵ';
var $A_COMP_CATEG_BEING_COPIED = '���ѧ�Ѵ�͡������';
var $A_COMP_CATEG_ITEMS_COPIED = '���ѧ�Ѵ�͡������';
var $A_COMP_CATEG_COPY_CATEGS = '�����繡�äѴ�͡������';

//components/com_categories/admin.categories.php
var $A_COMP_CATEG_DELETE = '���͡����������ź';
var $A_COMP_CATEG_CATEG_S = '������';
var $A_COMP_CATEG_CANNOT_REMOVE = '�������ö���������ͧ�ҡ����¡����������';
var $A_COMP_CATEG_SELECT = '���͡����������';
var $A_COMP_CATEG_ITEM_MOVE = '���͡��������������';
var $A_COMP_CATEG_MOVED_TO = '���»������';
var $A_COMP_CATEG_COPY_OF = '���Ңͧ';
var $A_COMP_CATEG_COPIED_TO = '�������١��������ѧ';
var $A_COMP_CATEG_SELECT_TYPE = '���͡��Դ';
var $A_COMP_CATEG_CONTACT_CATEG_TABLE = '���ҧ��������õԴ���';
var $A_COMP_CATEG_NEWSFEED_CATEG_TABLE = '���ҧ���������������';
var $A_COMP_CATEG_WEBLINK_CATEG_TABLE = '���ҧ����������ԧ��';
var $A_COMP_CATEG_CONTENT_CATEG_TABLE = '���ҧ������';
var $A_COMP_CATEG_CONTENT_CATEG_BLOG = '���͡������������';
var $A_COMP_CATEG_CONTENT_CATEG_ARCH_BLOG = '���͡��������ѧ������';

//components/com_checkin/admin.checkin.php
var $A_COMP_CHECK_TITLE = '���Թ������';
var $A_COMP_CHECK_DB_T = '���ҧ�ҹ������';
var $A_COMP_CHECK_NB_ITEMS = '# �ӹǹ��¡��';
var $A_COMP_CHECK_IN = '���Թ';
var $A_COMP_CHECK_TABLE = '���ҧ���Թ';
var $A_COMP_CHECK_DONE = '��¡�÷������ҷ���١���Թ����������';

//components/com_config/admin.config.html.php
var $A_COMP_CONF_GC = '��û�Ѻ���к�';
var $A_COMP_CONF_IS = '��';
var $A_COMP_CONF_WRT = '��¹��';
var $A_COMP_CONF_UNWRT = '��¹�����';
//var $A_COMP_CONF_SITE_PAGE = 'site-page';
var $A_COMP_CONF_OFFLINE = '����Ϳ�Ź�';
var $A_COMP_CONF_OFFMESSAGE = '��ͤ����Ϳ�Ź�';
var $A_COMP_CONF_OFFMESSAGE_TIP = '��ͤ��������ʴ�������纻Դ';
var $A_COMP_CONF_ERR_MESSAGE = '��ͤ����Դ��Ҵ�ͧ�к�';
var $A_COMP_CONF_ERR_MESSAGE_TIP = '��ͤ��������ʴ�����͵Դ��Ͱҹ�����������';
var $A_COMP_CONF_SITE_NAME = '�������';
var $A_COMP_CONF_UN_LINKS = '�ʴ��ԧ����������Է���';
var $A_COMP_CONF_UN_LINKS_TIP = '�����,���ʴ��ԧ��仢�ͤ������ŧ����¹��� �����Ҥس��������������к����� �����е�ͧ�������к����ʹ٢�ͤ������';
var $A_COMP_CONF_USER_REG = '͹حҵ�������ŧ����¹';
var $A_COMP_CONF_USER_REG_TIP = '����� ����������öŧ����¹���ͧ';
var $A_COMP_CONF_AC_ACT = '�����׹�ѹŧ����¹';
var $A_COMP_CONF_AC_ACT_TIP = '����� ���������Ѻ����ŷ�����ԧ�������׹�ѹ�����Ѥ�';
var $A_COMP_CONF_REQ_EMAIL = '����������ū�ӡѹ';
var $A_COMP_CONF_REQ_EMAIL_TIP = '����� ���������������ū�ӡѹ';
var $A_COMP_CONF_DEBUG = '��䢢�ͼԴ��Ҵ���';
var $A_COMP_CONF_DEBUG_TIP = '�����  ���ʴ���ͤ����ԹԨ�����Ф����Դ��Ҵ SQL ������Դ�����Դ��Ҵ';
var $A_COMP_CONF_EDITOR = '�����¹��ͤ���Ẻ����͹˹�Ҩͨ�ԧ';
var $A_COMP_CONF_LENGTH = '���������¡��';
var $A_COMP_CONF_LENGTH_TIP = '��駤�Ҥ�����Ǣͧ��¡�����ǹ�Ǻ����к�����Ѻ�����ء��';
var $A_COMP_CONF_SITE_ICON = '�ͤ͹�ͧ���䫴�';
var $A_COMP_CONF_SITE_ICON_TIP = '��һ������ҧ��������������辺���� favicon.ico';
//var $A_COMP_CONF_LOCAL_PG = 'Locale-page';
var $A_COMP_CONF_LOCALE = '����'; //Locale
var $A_COMP_CONF_LANG = '���Ҵ�ҹ˹�����';
var $A_COMP_CONF_ALANG = '���Ҽ������к�';
var $A_COMP_CONF_TIME_SET = '��������������';
var $A_COMP_CONF_DATE = '��駤�����һѨ�غѹ�����ʴ�';
var $A_COMP_CONF_LOCAL = '�����';
//var $A_COMP_CONF_CONT_PAGE = 'content-page';
var $A_COMP_CONF_CONTROL = '* ��������������ҹ��Ǻ�������ʴ��� *';
var $A_COMP_CONF_LINK_TITLES = '�������������ԧ��';
var $A_COMP_CONF_MORE_LINK = '��ҹ��ͤ�ԡ�����';
var $A_COMP_CONF_MORE_LINK_TIP = '��ҵ�駤�����ʴ� ���բ�ͤ��� ��ҹ��ͤ�ԡ�����';
var $A_COMP_CONF_RATE_VOTE = '��ǵ����ṹ';
var $A_COMP_CONF_RATE_VOTE_TIP = '��ҵ�駤�����ʴ� ���ա����ǵ����ṹ������';
var $A_COMP_CONF_AUTHOR = '���ͼ����¹';
var $A_COMP_CONF_AUTHOR_TIP = '��ҵ�駤�����ʴ� ���ա���ʴ����ͼ����¹ ����ö��Ѻ�觤��������������ա��';
var $A_COMP_CONF_CREATED = '�ѹ���ҷ�����ҧ';
var $A_COMP_CONF_CREATED_TIP = '��ҵ�駤�����ʴ� ���ա���ʴ��ѹ���ҷ�����ҧ ����ö��Ѻ�觤��������������ա��';
var $A_COMP_CONF_MOD_DATE = '�ѹ���ҷ�����';
var $A_COMP_CONF_MOD_DATE_TIP = '��ҵ�駤�����ʴ� ���ա���ʴ��ѹ���ҷ����� ����ö��Ѻ�觤��������������ա��';
var $A_COMP_CONF_HITS = '�ӹǹ���駷����Ң�';
var $A_COMP_CONF_HITS_TIP = '��ҵ�駤�����ʴ� ���ա���ʴ��ӹǹ���駷����Ң� ����ö��Ѻ�觤��������������ա��';
var $A_COMP_CONF_PDF = '�ͤ͹ PDF';
var $A_COMP_CONF_OPT_MEDIA = '������͡����������ö�������ͧ�ҡ������ media �������ö��¹��';
var $A_COMP_CONF_PRINT_ICON = '�ͤ͹�����';
var $A_COMP_CONF_EMAIL_ICON = '�ͤ͹�����';
var $A_COMP_CONF_ICONS = '�ͤ͹';
var $A_COMP_CONF_USE_OR_TEXT = '���͡������ͤ͹���͵��˹ѧ�������Ѻ PDF ��þ������������� ';
var $A_COMP_CONF_TBL_CONTENTS = '���ҧ��úѭ����Ѻ�����ҷ��������˹��';
var $A_COMP_CONF_BACK_BUTTON = '������͹��Ѻ';
var $A_COMP_CONF_CONTENT_NAV = 'ἧ�ӷҧ������';
var $A_COMP_CONF_HYPER = '���������Ҥ�ԡ��';
//var $A_COMP_CONF_DB_PAGE = 'db-page';
var $A_COMP_CONF_HOSTNAME = '������ʵ�';
var $A_COMP_CONF_DB_USERNAME = '���ͼ����';
var $A_COMP_CONF_DB_PW = '��������';
var $A_COMP_CONF_DB_NAME = '�ҵ����';
var $A_COMP_CONF_DB_PREFIX = '�ӹ�˹�Ҵҵ����';
var $A_COMP_CONF_NOT_CH = '!! ��������¹��Ҥس������!!';
//Svar $A_COMP_CONF_S_PAGE = 'server-page';
var $A_COMP_CONF_ABS_PATH = '�������ͧ�Ҹ';
var $A_COMP_CONF_LIVE = '��������ԧ';
var $A_COMP_CONF_SECRET = '���Ѻ';
var $A_COMP_CONF_GZIP = '�պ�Ѵ���� GZIP';
var $A_COMP_CONF_CP_BUFFER = '�պ�Ѵ�Ѻ���� �������ö����';
var $A_COMP_CONF_SESSION_TIME = '�����ʪ������Ѻ�����͡�Թ';
var $A_COMP_CONF_SEC = '�Թҷ�';
var $A_COMP_CONF_AUTO_LOGOUT = '��͡��ҷ��ѵ��ѵ���ѧ�ҡ����';
var $A_COMP_CONF_ERR_REPORT = '��§ҹ�����Դ��Ҵ';
var $A_COMP_CONF_REG_GLOBALS_EMU = '��èӤ�ҡ��ŧ����¹'; ///
var $A_COMP_CONF_REG_GLOBALS_EMU_DESC = '��èӤ�ҡ��ŧ����¹. �����鹷�ӹǹ˹���Ҩ��ش�ӧҹ����͵�駤�ҵ�����͡����� Off.';
var $A_COMP_CONF_HELP_SERVER = '��������������������������';
var $A_COMP_CONF_FILE_CREATION = '������ҧ���';
var $A_COMP_CONF_FILE_PERM = '�����Ҷ֧���';
var $A_COMP_CONF_FILE_DONT_CHMOD = '�������¹ CHMOD �������';
var $A_COMP_CONF_FILE_CHMOD = '����¹ CHMOD �������';
var $A_COMP_CONF_FILE_CHMOD_TIP = '���͡��õ�駤�ҹ�����͡�˹������Ҷ֧����Ѻ��������ҧ����';
var $A_COMP_CONF_APPLY_FILE = '�ӡѺ�����������';
var $A_COMP_CONF_APPLY_FILE_TIP = '���͡��͹�������¹�����Ҷ֧���������������� ����������͡������ҧ�����������Ҩ�����������ӧҹ';
var $A_COMP_CONF_DIR_CREATION = '������ҧ��á������';
var $A_COMP_CONF_DIR_PERM = '�����Ҷ֧��á������';
var $A_COMP_CONF_DIR_DONT_CHMOD = '�������¹(CHMOD)�����Ҷ֧��á���������� ';
var $A_COMP_CONF_DIR_CHMOD = '����¹(CHMOD)�����Ҷ֧��á����������';
var $A_COMP_CONF_DIR_CHMOD_TIP = '���͡��͹�����͵�駤�ҡ����Ҷ֧��á����������';
var $A_COMP_CONF_APPLY_DIR = '�ӡѺ��á��������������';
var $A_COMP_CONF_APPLY_DIR_TIP = '���͡��͹�������¹�����Ҷ֧��á������������������� ����������͡������ҧ�����������Ҩ�����������ӧҹ';
var $A_COMP_CONF_USER = '�����';
var $A_COMP_CONF_GROUP = '�����';
var $A_COMP_CONF_WORLD = '������';
var $A_COMP_CONF_READ = '��ҹ';
var $A_COMP_CONF_WRITE = '��¹';
var $A_COMP_CONF_EXECUTE = '�ӧҹ';
var $A_COMP_CONF_SEARCH = '����';
//var $A_COMP_CONF_META_PAGE = 'metadata-page';
var $A_COMP_CONF_META_DESC = '��������´���������Ңͧ���';
var $A_COMP_CONF_META_KEY = '���Ӥѭ�������Ңͧ���';
var $A_COMP_CONF_META_TITLE = '�ʴ���������������Ңͧ���';
var $A_COMP_CONF_META_ITEMS = '�ʴ���������������Ңͧ����������ҹ������';
var $A_COMP_CONF_META_AUTHOR = '�ʴ����ͼ����¹��������';
var $A_COMP_CONF_META_AUTHOR_TIP = '�ʴ����ͼ����¹�������Ңͧ����������ҹ������';
//var $A_COMP_CONF_MAIL_PAGE = 'mail-page';
var $A_COMP_CONF_MAIL = '��������';
var $A_COMP_CONF_MAIL_FROM = '����Ũҡ';
var $A_COMP_CONF_MAIL_FROM_NAME = '�ҡ����';
var $A_COMP_CONF_MAIL_SENDMAIL_PATH = '�Ҹ��������';
var $A_COMP_CONF_MAIL_SMTP_AUTH = 'SMTP Auth';
var $A_COMP_CONF_MAIL_SMTP_USER = 'SMTP User';
var $A_COMP_CONF_MAIL_SMTP_PASS = 'SMTP Pass';
var $A_COMP_CONF_MAIL_SMTP_HOST = 'SMTP Host';
//var $A_COMP_CONF_CACHE_PAGE = 'cache-page';
var $A_COMP_CONF_CACHE = '�ա����ᤪ';
var $A_COMP_CONF_CACHE_FOLDER = '������ᤪ';
var $A_COMP_CONF_CACHE_DIR = '��á����������ᤪ㹵͹�����';
var $A_COMP_CONF_CACHE_DIR_UNWRT = '��á����������ᤪ�������ö��¹�� ��سҵ�駤���� CHMOD755 ��͹������ᤪ';
var $A_COMP_CONF_CACHE_TIME = '��������ᤪ';
//var $A_COMP_CONF_STATS_PAGE = 'stats-page';
var $A_COMP_CONF_STATS = 'ʶԵ�';
var $A_COMP_CONF_STATS_ENABLE = '��駤�ҡ����ʶԵԢͧ���';
var $A_COMP_CONF_STATS_LOG_HITS = '�纨ӹǹ�����Ҫ������ѹ';
var $A_COMP_CONF_STATS_WARN_DATA = '����͹:���ա���红����Ũӹǹ�ҡ';
var $A_COMP_CONF_STATS_LOG_SEARCH = '�纤Ӥ���';
//var $A_COMP_CONF_SEO_PAGE = 'seo-page';
var $A_COMP_CONF_SEO_LBL = 'SEO';
var $A_COMP_CONF_SEO = '��Ѻ������Ѻ����ͧ��ͤ������';
var $A_COMP_CONF_SEO_SEFU = '���� URL Ẻ��������СѺ����ͧ��ͤ������';
var $A_COMP_CONF_SEO_APACHE = '����Ѻ�һ�����ҹ�� ! �������¹���� htaccess.txt �� .htaccess ��͹����ҹ';
var $A_COMP_CONF_SEO_DYN = '�����������¹����������';
var $A_COMP_CONF_SEO_DYN_TITLE = '�����������¹����������';
var $A_COMP_CONF_SERVER = '���������';
var $A_COMP_CONF_METADATA = '���Ҵҵ��';
var $A_COMP_CONF_EMAIL = '���';
var $A_COMP_CONF_CACHE_TAB = 'ᤪ';

//components/com_config/admin.config.php
var $A_COMP_CONF_HIDE = '��͹';
var $A_COMP_CONF_SHOW = '�ʴ�';
var $A_COMP_CONF_DEFAULT = '��һ��Ԣͧ�к�';
var $A_COMP_CONF_NONE = '���';
var $A_COMP_CONF_SIMPLE = '����';
var $A_COMP_CONF_MAX = '�ҡ�ش';
var $A_COMP_CONF_MAIL_FC = '��������Ţͧ PHP';
var $A_COMP_CONF_SEND = '�����';
var $A_COMP_CONF_SMTP = 'SMTP ���������';
var $A_COMP_CONF_UPDATED = 'The Configuration Details have been updated!'; //��������´��õ�駤����١��Ѻ��ا����
var $A_COMP_CONF_ERR_OCC = '�դ����Դ��Ҵ �������ö�Դ����к�������¹��';

//components/com_contact/admin.contact.html.php
var $A_COMP_CONT_MANAGER = '�Ѵ��á�õԴ���';
var $A_COMP_CONT_FILTER = '����';
var $A_COMP_CONT_YOUR_NAME = '�س��ͧ������';
var $A_COMP_CONT_CATEG = '���͡������';
var $A_COMP_CONT_DETAILS = '��������´��õԴ���';
var $A_COMP_CONT_POSITION = '���˹觢ͧ���Դ���';
var $A_COMP_CONT_ADDRESS = '������� ���';
var $A_COMP_CONT_TOWN = '�Ӻ� �����';
var $A_COMP_CONT_STATE = '�ѧ��Ѵ';
var $A_COMP_CONT_COUNTRY = '�����';
var $A_COMP_CONT_POSTAL_CODE = '������ɳ���';
var $A_COMP_CONT_TEL = '���Ѿ��';
var $A_COMP_CONT_FAX = 'ῡ��';
var $A_COMP_CONT_INFO = '��������´����';
//var $A_COMP_CONT_PUBLISH = 'publish-page';
var $A_COMP_CONT_PUBLISHING = '��������´��������';
var $A_COMP_CONT_SITE_DEFAULT = '���������鹢ͧ���';
//var $A_COMP_CONT_IMG_PAGE = 'images-page';
var $A_COMP_CONT_IMG_INFO = '��������´�ٻ';
var $A_COMP_CONT_PARAMS = '˹�ҡ�õ�駤�Ҿ���������';
var $A_COMP_CONT_PARAMETERS = '����������';
var $A_COMP_CONT_PARAM_MESS = '* ��������������ҹ��Ǻ�������ʴ�������ͤس�١�õԴ��� *';
var $A_COMP_CONT_PUB_TAB = '�����';
var $A_COMP_CONT_IMG_TAB = '�ٻ';

//components/com_contact/admin.contact.php
var $A_COMP_CONT_SELECT_REC = '���͡��¡������';

//components/com_content/admin.content.html.php
var $A_COMP_CONTENT_ITEMS_MNG = '��èѴ���������';
var $A_COMP_CONTENT_ALL_ITEMS = '�����ҷ�����';
var $A_COMP_CONTENT_START_ALWAYS = '�������:����';
var $A_COMP_CONTENT_START = '�����';
var $A_COMP_CONTENT_FIN_NOEXP = '��:����������';
var $A_COMP_CONTENT_FINISH = '��';
var $A_COMP_CONTENT_PUBLISH_INFO = '��������´��þ����';
var $A_COMP_CONTENT_TRASH = '�ô���͡��¡�÷���ͧ���ź';
var $A_COMP_CONTENT_TRASH_MESS = '�س���������� ��Ҩ��¹������͡�����? \n �ѹ���������źẺ����ٳ� ';//Are you sure you want to Trash the selected items? \nThis will not permanently delete the items.
var $A_COMP_CONTENT_ARCHIVE = '�Ѵ�纤�ѧ������';
var $A_COMP_CONTENT_ARCHIVE_MNG = '��èѴ��ä�ѧ������';
var $A_COMP_CONTENT_MANAGER = '��èѴ���';
var $A_COMP_CONTENT_ZERO = '�س���������� ���е�駤�Ҩӹǹ����������ٹ�� \n �������¹�ŧ����ѧ�����ѹ�֡�����仴���';
var $A_COMP_CONTENT_MUST_TITLE = '�����ҵ�ͧ���������ͧ';
var $A_COMP_CONTENT_MUST_NAME = '�����ҵ�ͧ�ժ�������ͧ';
var $A_COMP_CONTENT_MUST_SECTION = '�س��ͧ���͡��Ǵ';
var $A_COMP_CONTENT_MUST_CATEG = '�س��ͧ���͡������';
var $A_COMP_CONTENT_ITEMS = '��¡��������';
var $A_COMP_CONTENT_IN = '�������';
var $A_COMP_CONTENT_TITLE_ALIAS = '����᷹�������ͧ';
var $A_COMP_CONTENT_ITEM_DETAILS = '��������´��¡��';
var $A_COMP_CONTENT_INTRO = '��ͤ�����ǹ��';
var $A_COMP_CONTENT_MAIN = '��ͤ�����ѡ';
var $A_COMP_CONTENT_PUB_INFO = '��������´��������';
var $A_COMP_CONTENT_FRONTPAGE = '�ʴ��˹���á';
var $A_COMP_CONTENT_AUTHOR = '����᷹�����¹';
var $A_COMP_CONTENT_CREATOR = '����¹������ҧ';
var $A_COMP_CONTENT_OVERRIDE = '����ѹ������ҧ';
var $A_COMP_CONTENT_START_PUB = '����������';
var $A_COMP_CONTENT_FINISH_PUB = '����ش��������';
var $A_COMP_CONTENT_ID = '�����Ţ������';
var $A_COMP_CONTENT_DRAFT_UNPUB = '�鹩�Ѻ�ѧ��������';
var $A_COMP_CONTENT_RESET_HIT = '������鹹Ѻ����';
var $A_COMP_CONTENT_REVISED = '���ǹ';
var $A_COMP_CONTENT_TIMES = '����';
var $A_COMP_CONTENT_CREATED = '���ҧ';
var $A_COMP_CONTENT_BY = '��';
var $A_COMP_CONTENT_NEW_DOC = '����������';
var $A_COMP_CONTENT_LAST_MOD = '��䢤����ش����';
var $A_COMP_CONTENT_NOT_MOD = '������';
var $A_COMP_CONTENT_MOSIMAGE = '�Ǻ����ٻ����';
var $A_COMP_CONTENT_SUB_FOLDER = '����������';
var $A_COMP_CONTENT_GALLERY = '��������ٻ�Ҿ';
var $A_COMP_CONTENT_IMAGES = '�ٻ�������';
var $A_COMP_CONTENT_UP = '���';
var $A_COMP_CONTENT_DOWN = 'ŧ';
var $A_COMP_CONTENT_REMOVE = '����';
var $A_COMP_CONTENT_EDIT_IMAGE = '����ٻ������͡';
var $A_COMP_CONTENT_IMG_ALIGN = '�Ѵ�ҧ�ٻ';
var $A_COMP_CONTENT_ALIGN = '�Ѵ�ҧ';
var $A_COMP_CONTENT_ALT = '��ͤ����ͧ�ٻ';
var $A_COMP_CONTENT_BORDER = '�ͺ';
var $A_COMP_CONTENT_IMG_CAPTION = '��Ǣ��';
var $A_COMP_CONTENT_IMG_CAPTION_POS = '���˹���Ǣ��';
var $A_COMP_CONTENT_IMG_CAPTION_ALIGN = '��èѴ�ҧ��Ǣ��';
var $A_COMP_CONTENT_IMG_WIDTH = '���ҧ';
var $A_COMP_CONTENT_APPLY = '��з�';
var $A_COMP_CONTENT_PARAM = '�Ǻ�������������';
var $A_COMP_CONTENT_PARAM_MESS = '* ��������������ҹ��Ǻ�������ʴ�������ͤس�������� *';
var $A_COMP_CONTENT_META_DATA = '�����������';
var $A_COMP_CONTENT_KEYWORDS = '���Ӥѭ';
//var $A_COMP_CONTENT_LINK_PAGE = 'link-page';
var $A_COMP_CONTENT_LINK_CI = '�����繡�����ҧ�ԧ�� ��������������';
var $A_COMP_CONTENT_LINK_NAME = '�����ԧ��';
var $A_COMP_CONTENT_SOMETHING = '�ô���͡�ҧ���ҧ';
var $A_COMP_CONTENT_MOVE_ITEMS = '������¡��';
var $A_COMP_CONTENT_MOVE_SECCAT = '������ѧ ��Ǵ/������';
var $A_COMP_CONTENT_ITEMS_MOVED = '��¡�á��ѧ�١����';
var $A_COMP_CONTENT_SECCAT = '�ô���͡��Ǵ/���������з�������¡������';
var $A_COMP_CONTENT_COPY_ITEMS = '������������';
var $A_COMP_CONTENT_COPY_SECCAT = '���������Ǵ/������';
var $A_COMP_CONTENT_ITEMS_COPIED = '��¡�á��ѧ�١������';
var $A_COMP_CONTENT_PUBLISHING = '�����';
var $A_COMP_CONTENT_IMAGES2 = '�ٻ';
var $A_COMP_CONTENT_META_INFO = '��������´�����';
var $A_COMP_CONTENT_ADD_ETC = '������Ǵ/������/�������ͧ';
var $A_COMP_CONTENT_LINK_TO_MENU = '�ԧ�������';
var $A_COMP_CONTENT_EDIT_CONTENT = '���������';
var $A_COMP_CONTENT_EDIT_STATIC = '����������൵ԡ';
var $A_COMP_CONTENT_EDIT_SECTION = '�����Ǵ';
var $A_COMP_CONTENT_EDIT_CATEGORY = '��䢻�����';
var $A_COMP_CONTENT_EDIT_USER = '��䢼����';
//components/com_content/admin.content.php
var $A_COMP_CONTENT_CACHE = '��ҧᤪ';
var $A_COMP_CONTENT_CANNOT = '�������öź��ѧ������';
var $A_COMP_CONTENT_MODULE = '�����';
var $A_COMP_CONTENT_ANOTHER = '���ѧ�١����¼����ŷ�ҹ���';
var $A_COMP_CONTENT_ARCHIVED = '��¡�����繤�ѧ���������º��������';
var $A_COMP_CONTENT_PUBLISHED = '��¡����١���������';
var $A_COMP_CONTENT_UNPUBLISHED = '¡��ԡ������������';
var $A_COMP_CONTENT_SEL_TOG = '���͡��¡�÷�������¹';
var $A_COMP_CONTENT_SEL_DEL = '���͡��¡�÷�������';
var $A_COMP_CONTENT_SEL_MOVE = '��¡����١�������Ǵ����ͧ�������';
var $A_COMP_CONTENT_MOVED = '��¡����١�������Ǵ����ͧ�������';
var $A_COMP_CONTENT_ERR_OCCURRED = '�դ����Դ��Ҵ�Դ���';
var $A_COMP_CONTENT_COPIED = '��¡����١���������Ǵ����ͧ�������';
var $A_COMP_CONTENT_RESET_HIT_COUNT = '���駤�ҡ�ùѺ������������Ѻ';
var $A_COMP_CONTENT_IN_MENU = '(�ԧ�� �������൵ԡ) �����';
var $A_COMP_CONTENT_SUCCESS = '���ҧ���º����';
var $A_COMP_CONTENT_SELECT_CAT = '���͡������';
var $A_COMP_CONTENT_SELECT_SEC = '���͡��Ǵ';

//components/com_content/toolbar.content.html.php
var $A_COMP_CONTENT_BAR_TRASH = '�ѧ���';
var $A_COMP_CONTENT_BAR_MOVE = '����';
var $A_COMP_CONTENT_BAR_COPY = '������';
var $A_COMP_CONTENT_BAR_SAVE = '�ѹ�֡';

//components/com_frontpage/admin.frontpage.html.php
var $A_COMP_FRONT_PAGE_MNG = '�Ѵ���˹���á';
//var $A_COMP_FRONT_PAGE_ITEMS = 'Front Page Items';
var $A_COMP_FRONT_ORDER = '�ӴѺ';

//components/com_frontpage/admin.frontpage.php
var $A_COMP_FRONT_COUNT_NUM = '�ӹǹ��ͧ�繵���Ţ';
var $A_COMP_FRONT_INTRO_NUM = '�ӹǹ��ͧ�繵���Ţ';
var $A_COMP_FRONT_WELCOME = '�͵�͹�Ѻ���˹���á';
var $A_COMP_FRONT_IDONOT = '�ѹ��������è��ʴ�';

//components/com_frontpage/toolbar.frontpage.html.php
var $A_COMP_FRONT_REMOVE = '����͡';

//components/com_languages/admin.languages.html.php
var $A_COMP_LANG_INSTALL = '��èѴ������� <small><small>[ ���䫵� ]</small></small>';
var $A_COMP_LANG_LANG = '����';
var $A_COMP_LANG_EMAIL = '����ż����¹';
var $A_COMP_LANG_EDITOR = '��óҸԡ������';
var $A_COMP_LANG_FILE = '�������';

//components/com_languages/admin.languages.php
var $A_COMP_LANG_UPDATED = '��õ�駤����١��Ѻ��ا����';
var $A_COMP_LANG_M_SURE = '�Դ��Ҵ ! ������������ѧ��� configuration.php ����ö��¹��';
var $A_COMP_LANG_CANNOT = '�س�������öź���ҷ����ѧ����';
var $A_COMP_LANG_FAILED_OPEN = '��÷ӧҹ�������:�������ö�Դ';
var $A_COMP_LANG_FAILED_SPEC = '��÷ӧҹ�������:����к�����';
var $A_COMP_LANG_FAILED_EMPTY = '��÷ӧҹ�������:��ͤ�����ҧ';
var $A_COMP_LANG_FAILED_UNWRT = '��÷ӧҹ�������:�������ö��¹';
var $A_COMP_LANG_FAILED_FILE = '��÷ӧҹ�������:�������ö�Դ���������¹��';

//components/com_mambots/admin.mambots.html.php
var $A_COMP_MAMB_ADMIN = '������';
var $A_COMP_MAMB_SITE = '���䫵�';
var $A_COMP_MAMB_MANAGER = '��èѴ�������ͷ';
var $A_COMP_MAMB_NAME = '��������ͷ';
var $A_COMP_MAMB_FILE = '���';
var $A_COMP_MAMB_MUST_NAME = '����ͷ�е�ͧ�ժ���';
var $A_COMP_MAMB_MUST_FNAME = '����ͷ�е�ͧ�ժ������';
var $A_COMP_MAMB_DETAILS = '��������´����ͷ';
var $A_COMP_MAMB_FOLDER = '������';
var $A_COMP_MAMB_MFILE = '�������ͷ';
var $A_COMP_MAMB_ORDER = '�ӴѺ����ͷ';

//components/com_mambots/admin.mambots.php
var $A_COMP_MAMB_EDIT = '���ѧ�١����¼����ŷ�ҹ���';
var $A_COMP_MAMB_DEL = '���͡����ŷ���ź';
var $A_COMP_MAMB_TO = '���͡����ͷ����';
var $A_COMP_MAMB_PUB = '�����';
var $A_COMP_MAMB_UNPUB = '¡��ԡ��������';
var $A_COMP_MAMB_SAVED_CHANGES = '�ѹ�֡�������¹�ŧ�ͧ����ͷ���º����: '; //KEN ADDED
var $A_COMP_MAMB_SAVED = '��úѹ�֡����ͷ���º����: '; //KEN ADDED
var $A_COMP_MAMB_ORDERING = '���������鹢ͧ��¡�����������ӴѺ�ش���� �ӴѺ����ö����������ѧ�ҡ�ѹ�֡����'; //KEN ADDED
var $A_COMP_MAMB_ORDERING_SAVED = '�ѹ�֡�������ͷ���º���� '; //KEN ADDED

//components/com_massmail/admin.massmail.html.php
var $A_COMP_MASS_SUBJECT = '�ô�����Ǣ��';
var $A_COMP_MASS_SELECT_GROUP = '�ô���͡�����';
var $A_COMP_MASS_MESSAGE = '�ô����ͤ���';
var $A_COMP_MASS_MAIL = '��š����';
var $A_COMP_MASS_GROUP = '�����';
var $A_COMP_MASS_DETAILS = '��������´'; //KEN ADDED
var $A_COMP_MASS_CHILD = '�������ѧ��������´���';
var $A_COMP_MASS_HTML = '����ٻẺ HTML'; //KEN ADDED
var $A_COMP_MASS_SUB = '��Ǣ��';
var $A_COMP_MASS_MESS = '��ͤ���';

//components/com_massmail/toolbar.massmail.html.php
var $A_COMP_MASS_SEND = '�����';

//components/com_massmail/admin.massmail.php
var $A_COMP_MASS_ALL = '�����ء�����';
var $A_COMP_MASS_FILL = '�ô��͡��������١��ͧ';
var $A_COMP_MASS_SENT = '������';
var $A_COMP_MASS_USERS = '�����';

//components/com_media/admin.media.html.php
var $A_COMP_MEDIA_MG = '��èѴ�����������';
var $A_COMP_MEDIA_DIR = '��á������';
var $A_COMP_MEDIA_UP = '���';
var $A_COMP_MEDIA_UPLOAD = '�Ѿ��Ŵ';
var $A_COMP_MEDIA_UPLOAD_MAX = '��Ҵ�٧�ش';
var $A_COMP_MEDIA_CODE = '⤴';
var $A_COMP_MEDIA_CDIR = '���ҧ��á������';
var $A_COMP_MEDIA_PROBLEM = '�ѭ�ҡ�õ�駤��';
var $A_COMP_MEDIA_EXIST = '���������.';
var $A_COMP_MEDIA_DEL = 'ź';
var $A_COMP_MEDIA_INSERT = '����ͤ��������';
var $A_COMP_MEDIA_DEL_FILE = "ź��� \"+file+\"?";
var $A_COMP_MEDIA_DEL_ALL = "�� \"+numFiles+\" ���/������� \"+folder+\". �ôź�ء���/������� \"+folder+\" ��͹";
var $A_COMP_MEDIA_DEL_FOLD = "ź������ \"+folder+\"?";
var $A_COMP_MEDIA_NO_IMG = '��辺�ٻ';

//components/com_media/admin.media.php
var $A_COMP_MEDIA_NO_HACK = '��س������Ρ';
var $A_COMP_MEDIA_DIR_SAFEMODE = '������ҧ��á�������������ö���颳з�������૾���� ���ͧ�ҡ�С������Դ�ѭ����';
var $A_COMP_MEDIA_ALPHA = '������ä������ͧ�����ѡ�õ���Ţ�����ժ�ͧ��ҧ';
var $A_COMP_MEDIA_FAILED = '����Ѿ��Ŵ������� �������������';
var $A_COMP_MEDIA_ONLY = '੾����� gif, png, jpg, bmp, pdf, swf, doc, xls ���� ppt �֧���Ѿ��Ŵ��';
var $A_COMP_MEDIA_UP_FAILED = '����Ѿ��Ŵ�������';
var $A_COMP_MEDIA_UP_COMP = '�Ѿ������º����';
var $A_COMP_MEDIA_NOT_EMPTY = '<font color="red">�������öź: �����ҧ!</font>';//KEN ADDED
//components/com_media/toolbar.media.html.php
var $A_COMP_MEDIA_CREATE = '���ҧ';

//components/com_menumanager/admin.menumanager.html.php
var $A_COMP_MENU_NAME = '��������';
var $A_COMP_MENU_TYPE = '��Դ����';
var $A_COMP_MENU_TITLE = '���������';
var $A_COMP_MENU_ITEMS = '��¡�������';//KEN ADDED
var $A_COMP_MENU_PUB = '# �����';//KEN ADDED
var $A_COMP_MENU_UNPUB = '# ��������';//KEN ADDED
var $A_COMP_MENU_TRASH = '# �ѧ���';//KEN ADDED
var $A_COMP_MENU_MODULES = '# �����';//KEN ADDED
var $A_COMP_MENU_EDIT_NAME = '��䢪�������';//KEN ADDED
var $A_COMP_MENU_EDIT_ITEM = '�����¡������';//KEN ADDED
var $A_COMP_MENU_ID = '�����Ţ�����';
var $A_COMP_MENU_TIPS = '����繡�þ��٨����ͷ���������� �ѧ��鹪���������ժ�ͧ��ҧ�������ӡѺ�������';//KEN ADDED
var $A_COMP_MENU_TIPS2 = '���ͧ͢����� mod_mainmenu ��ͧ����ʴ������';//KEN ADDED
var $A_COMP_MENU_TIPS3 = '* ����� mod_mainmenu ����,�������㹪�������ŷ��س��͡���ж١�ѹ�֡���ѵ��ѵ�����ͤس�ѹ�֡���� *<br/><br/>��õ�駤�ҵ�ҧ�����ö������ǹ "��èѴ�������� [ ���䫵� ]":  ����� -> ��������';//KEN ADDED
var $A_COMP_MENU_ASSIGN = '���������ŷ���ͧ����ʴ������';
var $A_COMP_MENU_ENTER = '�ô���������ٷ���ͧ���';
var $A_COMP_MENU_ENTER_TYPE = '�ô�����ͻ��������ٷ���ͧ���';
var $A_COMP_MENU_ENTER_TITLE = '�ô����������ŷ���ͧ���';
var $A_COMP_MENU_DETAILS = '��������´�ͧ����';
var $A_COMP_MENU_MAINMENU = '����� mod_mainmenu ����ժ��ͫ�� �к��зӡ�����ҧ ����������ѵ��ѵ� ����ͤس�ѹ�֡���ٹ��.';
var $A_COMP_MENU_DEL = 'ź����';
var $A_COMP_MENU_MODULE_DEL = '����/����Ŷ١ź';
var $A_COMP_MENU_ITEMS_DEL = '��¡�����ٶ١ź';
var $A_COMP_MENU_WILL = '* ����';
var $A_COMP_MENU_WILL2 = '���ٹ��, <br />�ô���ѧ ���ٹ���Ҩ������§�Ѻ����������� *';
var $A_COMP_MENU_YOU_SURE = '�س��ͧ��÷���ź���ٹ���������? \n�к���ź��¡������ �������Ţͧ���ٹ�������';
var $A_COMP_MENU_NAME_MENU = '�ô���������Ңͧ����';
var $A_COMP_MENU_NAME_MOD = '�ô���������������';
var $A_COMP_MENU_COPY = '�Ѵ�͡����';
var $A_COMP_MENU_NEW = '������������';
var $A_COMP_MENU_NEW_MOD = '�������������';//KEN ADDED
var $A_COMP_MENU_COPIED = '���ѧ�Ѵ�͡����';
var $A_COMP_MENU_ITEMS_COPIED = '�Ѵ�͡��¡������';
var $A_COMP_MENU_MOD_MENU = '��������͹�ѹ<br />�к������ҧ��кѹ�֡����ѵ��ѵ�';

//components/com_menumanager/admin.menumanager.php
var $A_COMP_MENU_CREATED = '���ҧ��������';
var $A_COMP_MENU_UPDATED = '��¡�������������Ŷ١��Ѻ��ا';
var $A_COMP_MENU_DETECTED = 'ź����';
var $A_COMP_MENU_COPY_OF = '�Ѵ�͡����';
var $A_COMP_MENU_CONSIST = '���ҧ, ��Сͺ�Ѻ';
var $A_COMP_MENU_RENAME_WARNING = '�س�������ö����¹����������ѡ���ͧ�ҡ�з���� Mambo �ӧҹ�Դ��Ҵ';
var $A_COMP_MENU_EXISTS_WARNING = '������������������к����� - ��سҵ�駪��ͷ������ӡѺ�������ٷ��������';

//components/com_menumanager/toolbar.menumanager.html.php
var $A_COMP_MENU_BAR_DEL = 'ź';

//components/com_messages/admin.messages.html.php
var $A_COMP_MESS_PRIVATE = '��ͤ�����ǹ���';
var $A_COMP_MESS_SEARCH = '����';
var $A_COMP_MESS_FROM = '�ҡ';
var $A_COMP_MESS_READ = '��ҹ';
var $A_COMP_MESS_UNREAD = '���١��ҹ';
var $A_COMP_MESS_CONF = '��駤�� Configuration �ͧ��ͤ�����ǹ���';
var $A_COMP_MESS_GENERAL = '�����';
var $A_COMP_MESS_SURE = '�س��������?';
var $A_COMP_MESS_INBOX = '��ͤ Inbox';
var $A_COMP_MESS_MAILME = '����������ѹ����բ�ͤ������������';
var $A_COMP_MESS_VIEW = '���¡�٢�ͤ�����ǹ���';
var $A_COMP_MESS_POSTED = '��';
var $A_COMP_MESS_PROVIDE_SUB = '��س�����������ͧ';
var $A_COMP_MESS_PROVIDE_MESS = '��س�����ͤ���������';
var $A_COMP_MESS_PROVIDE_REC = '��س��кؼ���Ѻ���·ҧ';
var $A_COMP_MESS_NEW = '��ͤ�����ǹ�������';
var $A_COMP_MESS_TO = '�֧';

//components/com_messages/toolbar.messages.html.php
var $A_COMP_MESS_SEND = '��';
var $A_COMP_MESS_REPLY = '�ͺ��Ѻ';

//components/com_modules/admin.modules.html.php
var $A_COMP_MOD_MANAGER = '��èѴ��������';
var $A_COMP_MOD_NAME = '���������';
var $A_COMP_MOD_POSITION = '���˹�';
var $A_COMP_MOD_PAGES = '˹��';
var $A_COMP_MOD_VARIES = '�ҡ';
var $A_COMP_MOD_ALL = '������';
var $A_COMP_MOD_USER = '�����';
var $A_COMP_MOD_MUST_TITLE = '��س������Ǣ�ͧ͢�����';
var $A_COMP_MOD_MODULE = '�����';
var $A_COMP_MOD_DETAILS = '��������´�ͧ�����';
var $A_COMP_MOD_SHOW_TITLE = '�ʴ���Ǣ��';
var $A_COMP_MOD_ORDER = '�ӴѺ�����';
var $A_COMP_MOD_CONTENT = '���ͤ���';
var $A_COMP_MOD_PAGES_ITEMS = '˹�� / ��¡��';
var $A_COMP_MOD_CUSTOM_OUTPUT = '��ҵ�ص�����';
var $A_COMP_MOD_MOD_POSITION = '���˹������';
var $A_COMP_MOD_ITEM_LINK = '������¡���ԧ��';
var $A_COMP_MOD_TAB_LBL = '�����';

//components/com_modules/admin.modules.php
var $A_COMP_MOD_MODULES = '�����';
var $A_COMP_MOD_MOD_COPIED = '�Ѵ�͡�����';//KEN ADDED
var $A_COMP_MOD_SAVED_CHANGES = '�ѹ�֡�������¹�ŧ����������: ';//KEN ADDED
var $A_COMP_MOD_SAVED_MOD = '�ѹ�֡����������: ';//KEN ADDED
var $A_COMP_MOD_CANNOT = '�������öź������� ��ͧ�͹������͡��͹';
var $A_COMP_MOD_SELECT_TO = '���͡�������ѧ';

//components/com_modules/toolbar.modules.html.php
var $A_COMP_MOD_PREVIEW = '�ʴ�������ҧ';
var $A_COMP_MOD_PREVIEW_TIP = '�س����ö���¡������������ҧ����';

//components/com_newsfeeds/admin.newsfeeds.html.php
var $A_COMP_FEED_TITLE = '��èѴ��� Newsfeed';
var $A_COMP_FEED_NEWS = 'News Feed';
var $A_COMP_FEED_ARTICLES = '�ӹǹ������';
var $A_COMP_FEED_CACHE = '����ᤪ(�Թҷ�)';
var $A_COMP_FEED_EDIT_FEED = '��� Newsfeed';//KEN ADDED
var $A_COMP_FEED_FILL_NAME = '�ô������ newsfeed';
var $A_COMP_FEED_SEL_CATEG = '�ô���͡��Ǵ����';
var $A_COMP_FEED_FILL_LINK = '�ô����ԧ��ͧ newsfeed ';
var $A_COMP_FEED_FILL_NB = '�ô�кبӹǹ�����ҷ���ͧ����ʴ�.';
var $A_COMP_FEED_FILL_REFRESH = '�ô�к����ҡ����ҧ cache';
var $A_COMP_FEED_LINK = '�ԧ��';
var $A_COMP_FEED_NB_ARTICLE = '�ӹǹ�ͧ������';
var $A_COMP_FEED_IN_SEC = '���� cache (����Թҷ�)';

//components/com_poll/admin.poll.html.php
var $A_COMP_POLL_MANAGER = '��èѴ�������';
var $A_COMP_POLL_TITLE = '��������ͧ����';
var $A_COMP_POLL_OPTIONS = '������͡';
var $A_COMP_POLL_MUST_TITLE = '��س������Ǣ������';
var $A_COMP_POLL_NON_ZERO = '��õ�駤�������ͧ����Ţ�ҡ���� 0';
var $A_COMP_POLL_POLL = '����';
var $A_COMP_POLL_SHOW = '�ʴ���¡������';
var $A_COMP_POLL_LAG = '����';
var $A_COMP_POLL_EDIT = '�������';//KEN ADDED
var $A_COMP_POLL_BETWEEN = '(���������ҧ��ǵ)';

//components/com_poll/admin.poll.php
var $A_COMP_POLL_THE = '����';
var $A_COMP_POLL_BEING = '����¼������к�';

//components/com_poll/poll.class.php
var $A_COMP_POLL_TRY_AGAIN = '�������������к����� ��س��ͧ����';

//components/com_sections/admin.sections.html.php
var $A_COMP_SECT_MANAGER = '��èѴ�����Ǵ';
var $A_COMP_SECT_NAME = '������Ǵ';
var $A_COMP_SECT_ID = '��Ǵ�ӴѺ���';
var $A_COMP_SECT_NB_CATEG = '�ӹǹ������';
var $A_COMP_SECT_NEW = '��Ǵ����n';
var $A_COMP_SECT_SEL_MENU = '�ô���͡����';
var $A_COMP_SECT_MUST_NAME = '��س���������Ǵ';
var $A_COMP_SECT_MUST_TITLE = '��س�����������ͧ��Ǵ';
var $A_COMP_SECT_DETAILS = '��������´��Ǵ';
var $A_COMP_SECT_SCOPE = '�ͺࢵ';
var $A_COMP_SECT_SHORT_NAME = '���ͷ��������Թ�';
var $A_COMP_SECT_LONG_NAME = '���ͷ��������Թ�';
var $A_COMP_SECT_COPY = '�Ѵ�͡��Ǵ';
var $A_COMP_SECT_COPY_TO = '�Ѵ�͡���Ǵ';
var $A_COMP_SECT_NEW_NAME = '������Ǵ����';
var $A_COMP_SECT_WILL_COPY = '�Ѵ�͡���������<br />�����¡�÷�����㹻����� (�ء���ҧ)<br />����Ǵ����';
var $A_COMP_SECT_MENU_LINK = '�����ԧ����ҹ�� ����Ͷ١�ѹ�֡';//KEN ADDED

//components/com_sections/admin.sections.php
var $A_COMP_SECT_THE = '��Ǵ';
var $A_COMP_SECT_LIST = '��¡����Ǵ';
var $A_COMP_SECT_BLOG = '���͡��Ǵ';
var $A_COMP_SECT_ARCHIVE_BLOG = '���͡��Ǵ��ѧ������';
var $A_COMP_SECT_DELETE = '���͡��Ǵ����ͧ���ź';
var $A_COMP_SECT_SEC = '��Ǵ';
var $A_COMP_SECT_CANNOT = '�������öź�� ���ͧ�ҡ�ջ�����������§����';
var $A_COMP_SECT_SUCCESS_DEL = 'ź�������';
var $A_COMP_SECT_TO = '���͡��Ǵ��ѧ';
var $A_COMP_SECT_CANNOT_PUB = '�������ö������� ��������������Ǵ';
var $A_COMP_SECT_AND_ALL = '��� ������/��¡�÷������١�Ѵ�͡';
var $A_COMP_SECT_IN_MENU = '�����';
var $A_COMP_SECT_CHANGES_SAVED = '��Ǵ�����䢶١�ѹ�֡����';//KEN ADDED
var $A_COMP_SECT_SECTION_SAVED = '�ѹ�֡��Ǵ';//KEN ADDED

//components/com_statistics/admin.statistics.html.php
var $A_COMP_STAT_OS = '���������, �����, ʶԵ� ����';
var $A_COMP_STAT_BR_PAGE = '���������';
var $A_COMP_STAT_BROWSER = '���������';
var $A_COMP_STAT_OS_PAGE = '�к���Ժѵԡ��';
var $A_COMP_STAT_OP_SYST = '�к���Ժѵԡ��';
var $A_COMP_STAT_URL_PAGE = 'ʶԵ� ����';
var $A_COMP_STAT_URL = '����';
var $A_COMP_STAT_IMPR = 'ʶԵ�˹�ҷ��١ʹ�';
var $A_COMP_STAT_PG_IMPR = '˹�ҷ��١ʹ�';
var $A_COMP_STAT_SCH_ENG = 'ʶԵԢͧ�����͢�ͤ�����������';
var $A_COMP_STAT_LOG_IS = 'ʶԵԼ������к�';
var $A_COMP_STAT_ENABLED = '�Դ��ҹ';
var $A_COMP_STAT_DISABLED = '�Դ';
var $A_COMP_STAT_SCH_TEXT = '��ͤ�������';
var $A_COMP_STAT_T_REQ = '�ӹǹ���駷�����';
var $A_COMP_STAT_R_RETURN = '�鹾�������';

//components/com_syndicate/admin.syndicate.html.php
var $A_COMP_SYND_SET = '��駤�ҡ�á�Ш�¢������';

//components/com_syndicate/admin.syndicate.php
var $A_COMP_SYND_SAVED = '��õ�駤�Ҷ١�ѹ�֡���º����';

//components/com_templates/admin.templates.html.php
var $A_COMP_TEMP_NO_PREVIEW = '�������ö�ʴ���';
var $A_COMP_TEMP_INSTALL = '��õԴ���';
var $A_COMP_TEMP_TP = '���ŵ';
var $A_COMP_TEMP_PREVIEW = '�ʴ����ŵ';
var $A_COMP_TEMP_ASSIGN = '��˹����ŵ';
var $A_COMP_TEMP_AUTHOR_URL = '�ԧ��ͧ����͡Ẻ���ŵ';
var $A_COMP_TEMP_EDITOR = '������ŵ';
var $A_COMP_TEMP_PATH = '����� : ���ŵ';
var $A_COMP_TEMP_WRT = ' - ����ö��¹�Ѻ��';
var $A_COMP_TEMP_UNWRT = ' - �������ö��¹�Ѻ��';
var $A_COMP_TEMP_ST_EDITOR = '����ٻẺ���ŵ';
var $A_COMP_TEMP_NAME = '�����';
var $A_COMP_TEMP_ASSIGN_TP = '��˹����ŵ';
var $A_COMP_TEMP_TO_MENU = '���¡������';
var $A_COMP_TEMP_PAGES = '˹��';
var $A_COMP_TEMP_ = '���˹�';

//components/com_templates/admin.templates.php
var $A_COMP_TEMP_CANNOT = '�������öź�� ���ͧ�ҡ���ŵ�١��ҹ';
var $A_COMP_TEMP_NOT_OPEN = '�Դ��Ҵ: �������ö�Դ��';
var $A_COMP_TEMP_FLD_SPEC = '�Դ��Ҵ: �к����ŵ����';
var $A_COMP_TEMP_FLD_EMPTY = '�Դ��Ҵ: �����������';
var $A_COMP_TEMP_FLD_WRT = '�Դ��Ҵ: �Դ�������Ѻ��¹�Ѻ�����';
var $A_COMP_TEMP_FLD_NOT = '�Դ��Ҵ: ����������ö��¹��';
var $A_COMP_TEMP_SAVED = '�ѹ�֡�����';

//components/com_trash/admin.trash.html.php
var $A_COMP_TRASH_MANAGER = '��èѴ��öѧ������';
var $A_COMP_TRASH_ITEMS = '��¡��������';
var $A_COMP_TRASH_MENU_ITEMS = '��¡������';
var $A_COMP_TRASH_DEL_ITEMS = 'ź��¡��';
var $A_COMP_TRASH_NB_ITEMS = '�����Ţ';
var $A_COMP_TRASH_ITEM_DEL = '���ѧź';
var $A_COMP_TRASH_PERM_DEL = 'ź����';
var $A_COMP_TRASH_THESE = '�������¡��㹰ҹ������ *';
var $A_COMP_TRASH_YOU_SURE = '�س��㨷���ź���������? \nź�͡�ҡ�ҹ���������º��������';
var $A_COMP_TRASH_RESTORE = '�׹�����¡��';
var $A_COMP_TRASH_NUMBER = '�ӹǹ��¡��';
var $A_COMP_TRASH_ITEM_REST = '�׹��������';
var $A_COMP_TRASH_REST = '�׹���';
var $A_COMP_TRASH_RETURN = '������,<br />��Ѻ��繤�һ��� ����ա������� *';
var $A_COMP_TRASH_ARE_YOU = '�س��ͧ��ä׹�����¡�ù�����������?';

//components/com_trash/admin.trash.php
var $A_COMP_TRASH_SUCCESS_DEL = '��¡�ö١ź�����';
var $A_COMP_TRASH_SUCCESS_REST = '�׹�����¡�������';

//components/com_trash/toolbar.trash.html.php
var $A_COMP_TRASH_DEL = 'ź';

//components/com_typedcontent/admin.typedcontent.html.php
var $A_COMP_TYPED_STATIC = '��èѴ����������൵ԡ';
var $A_COMP_TYPED_LINKS = '�ԧ��';
var $A_COMP_TYPED_ARE_YOU = '��㨷������ҧ�ԧ���������൵ԡ? \n�������ö���� �������ջѭ��.';
var $A_COMP_TYPED_CONTENT = '������������';
var $A_COMP_TYPED_TEXT = '��ͤ�����ѡ: (��ͧ���)';
var $A_COMP_TYPED_EXPIRES = '�������';
var $A_COMP_TYPED_WILL = '���ҧ \'�ԧ�� - �������൵ԡ\' ����ٷ�����͡';
var $A_COMP_TYPED_ITEM = '��¡���������൵ԡ';

//components/com_typedcontent/admin.typedcontent.php
var $A_COMP_TYPED_SAVED = '�����������Һѹ�֡�����';
var $A_COMP_TYPED_CHG_SAVED = '�ѹ�֡�����䢻����������������';
var $A_COMP_TYPED_TRASHED = '��Ǣ�͹�� ����ѧ�ѧ������';

//components/com_users/admin.users.html.php
var $A_COMP_USERS_ID = '���ͼ����ҹ';
var $A_COMP_USERS_LOG_IN = '��͡�Թ';
var $A_COMP_USERS_LAST = '���������ش';
var $A_COMP_USERS_BLOCKED = '�ЧѺ�����ҹ';
var $A_COMP_USERS_YOU_MUST = '��س������ͼ����';
var $A_COMP_USERS_YOU_LOGIN = '���ͷ������͡�Թ ����Թ�';
var $A_COMP_USERS_MUST_EMAIL = '��س���������';
var $A_COMP_USERS_ASSIGN = '������������';
var $A_COMP_USERS_NO_MATCH = '���� ���ç';
var $A_COMP_USERS_NO_FRONTEND = '�س���͡��������١��ͧ ��س����͡�������蹷���� `Public Frontend`';
var $A_COMP_USERS_NO_BACKEND = '�س���͡��������١��ͧ ��س����͡�������蹷���� `Public Backend`';
var $A_COMP_USERS_DETAILS = '��������´�����ҹ';
var $A_COMP_USERS_EMAIL = '�����';
var $A_COMP_USERS_PASS = '���ʼ�ҹ����';
var $A_COMP_USERS_VERIFY = '�׹�ѹ���ʼ�ҹ';
var $A_COMP_USERS_BLOCK = '�ЧѺ�����ҹ';
var $A_COMP_USERS_SUBMI = '������ŵͺ�Ѻ';
var $A_COMP_USERS_REG_DATE = '�ѹ�����Ѥ�';
var $A_COMP_USERS_VISIT_DATE = '�ѹ������������ش';
var $A_COMP_USERS_CONTACT = '�����š�õԴ���';
var $A_COMP_USERS_NO_DETAIL = '�������������´��õԴ��ͧ͢�����ҹ<br />�ٷ�� \'�����鹷� -> ��õԴ��� -> �Ѵ��á�õԴ���\' ����Ѻ������������´';
var $A_COMP_USERS_CHANGE_CONTACT = '����¹�ŧ��������´�����ŵԴ���';
var $A_COMP_USERS_CONTACT_INFO = '�����鹷� -> ��õԴ��� -> �Ѵ��á�õԴ���';

//components/com_users/admin.users.php
var $A_COMP_USERS_SUPER_ADMIN = '�������к�';
var $A_COMP_USERS_CANNOT = '�س�������öź�������к���';
var $A_COMP_USERS_NOT_DEL_SELF = '�س�������öź����ͧ��!';
var $A_COMP_USERS_NOT_DEL_ADMIN = '�س�������öź�ٴ���к� �͡�ҡ�س�����дѺ `Super Administrators';

//components/com_users/toolbar.users.html.php
var $A_COMP_USERS_LOGOUT = '����͡�ҡ�к�';

//components/com_weblinks/admin.weblinks.html.php
var $A_COMP_WEBL_MANAGER = '��èѴ�������ԧ��';
var $A_COMP_WEBL_APPROVED = '͹��ѵ�';
var $A_COMP_WEBL_MUST_TITLE = '�س��������͡��Ǣ��';
var $A_COMP_WEBL_MUST_CATEG = '�س��������͡��Ǵ';
var $A_COMP_WEBL_MUST_URL = '�س�������� URL.';
var $A_COMP_WEBL_WL = '����ԧ��';

//components/com_installer/admin.installer.php
var $A_INSTALL_NOT_FOUND = "��辺�����еԴ��� ";
var $A_INSTALL_NOT_AVAIL = "��õԴ�����������";
var $A_INSTALL_ENABLE_MSG = "��õԴ��駷ӵ������� ��ͧ��駤�ҡ���Ѿ��Ŵ�����������͹ ������õԴ��駨ҡ��á������������.";
var $A_INSTALL_ERROR_MSG_TITLE = '�Դ��� - �Դ��Ҵ';
var $A_INSTALL_ZLIB_MSG = "��õԴ��駷ӵ������� ��ͧ��� zlib �١�Դ��駡�͹";
var $A_INSTALL_NOFILE_MSG = '����������١���͡';
var $A_INSTALL_NEWMODULE_ERROR_MSG_TITLE = '�Ѿ��Ŵ��������� - �Դ��Ҵ';
var $A_INSTALL_UPLOAD_PRE = '�Ѿ��Ŵ ';
var $A_INSTALL_UPLOAD_POST = ' - �Ѿ��Ŵ ��������';
var $A_INSTALL_UPLOAD_POST2 = ' -  �Ѿ��Ŵ �Դ��Ҵ';
var $A_INSTALL_SUCCESS = '�����';
var $A_INSTALL_ERROR = '�Դ��Ҵ';
var $A_INSTALL_FAILED = '��������';
var $A_INSTALL_SELECT_DIR = '�ô���͡��á������';
var $A_INSTALL_UPLOAD_NEW = '�Ѿ��Ŵ���� ';
var $A_INSTALL_FAIL_PERMISSION = '�Դ��ͼԴ��Ҵ㹡���Ѿ��Ŵ��� ���������Է��.';
var $A_INSTALL_FAIL_MOVE = '�������ö���������ѧ <code>/media</code> ��á�����.';
var $A_INSTALL_FAIL_WRITE = '�Ѿ��Ŵ�������� <code>/media</code> ��á������������ö��¹�Ѻ��.';
var $A_INSTALL_FAIL_EXIST = '�Ѿ��Ŵ�������� <code>/media</code> ��辺��á�����.';

//components/com_installer/admin.installer.html.php
var $A_INSTALL_WRITABLE = '����ö��¹�Ѻ��';
var $A_INSTALL_UNWRITABLE = '��¹�Ѻ�����';
var $A_INSTALL_CONTINUE = '�ӵ�� ...';
var $A_INSTALL_UPLOAD_PACK_FILE = '�Ѿ��Ŵᾤࡨ���';
var $A_INSTALL_PACK_FILE = 'ᾤࡨ���:';
var $A_INSTALL_UPL_INSTALL = "�Ѿ��Ŵ��� &amp; �Դ���";
var $A_INSTALL_FROM_DIR = '�Դ��駨ҡ��á�����';
var $A_INSTALL_DIR = '�Դ�����á������:';
var $A_INSTALL_DO_INSTALL = '�Դ���';

//components/com_installer/component/component.html.php
var $A_INSTALL_COMP_INSTALLED = '�Դ��駤����鹷�';
var $A_INSTALL_COMP_CURRENT = '���ѧ�Դ���';
var $A_INSTALL_COMP_MENU = '�����ԧ�� �����鹷�';
var $A_INSTALL_COMP_AUTHOR = '������ҧ';
var $A_INSTALL_COMP_VERSION = '�������';
var $A_INSTALL_COMP_DATE = '�ѹ���';
var $A_INSTALL_COMP_AUTH_MAIL = '����ż�����ҧ';
var $A_INSTALL_COMP_AUTH_URL = 'URL ������ҧ';
var $A_INSTALL_COMP_NONE = '����ա�õԴ��駤����鹷�';

//components/com_installer/component/component.php
var $A_INSTALL_COMP_UPL_NEW = '�Ѿ��Ŵ�����鹷�����';

//components/com_installer/language/language.php
var $A_INSTALL_LANG = '�Ѿ��Ŵ��������';
var $A_INSTALL_BACK_LANG_MGR = '��Ѻ价���èѴ�������';

//components/com_installer/language/language.class.php
var $A_INSTALL_LANG_NOREMOVE = 'ź����� , ��������ҵԴ���';
var $A_INSTALL_LANG_UN_ERR = '���ź - �բ�ͼԴ��Ҵ';
var $A_INSTALL_LANG_DELETING = '���ѧź';

//components/com_installer/mambot/mambot.html.php
var $A_INSTALL_MAMB_MAMBOTS = '����ͷ';
var $A_INSTALL_MAMB_CORE = '੾������ͷ����ҹ��������͡�� - �ҧ����ͷ��ѡ�������ö������';
var $A_INSTALL_MAMB_MAMBOT = '����ͷ';
var $A_INSTALL_MAMB_TYPE = '������';
var $A_INSTALL_MAMB_AUTHOR = '������ҧ';
var $A_INSTALL_MAMB_VERSION = '�������';
var $A_INSTALL_MAMB_DATE = '�ѹ���';
var $A_INSTALL_MAMB_AUTH_MAIL = '����ż�����ҧ';
var $A_INSTALL_MAMB_AUTH_URL = 'URL ������ҧ';
var $A_INSTALL_MOD_NO_MAMBOTS = '���������ͷ������͡��� �Դ�������';

//components/com_installer/mambot/mambot.php
var $A_INSTALL_MAMB_INSTALL_MAMBOT = '�Դ�������ͷ';


//components/com_installer/module/module.html.php
var $A_INSTALL_MOD_MODS = '�����';
var $A_INSTALL_MOD_FILTER = '�ʴ�';
var $A_INSTALL_MOD_CORE = '�ҧ�������ҹ�� �������öź�͡�ҡ����ʴ��� - ��кҧ�ѹ�������öź�͡��';//Modules that can be uninstalled are displayed - some Core Modules cannot be removed.
var $A_INSTALL_MOD_MOD = '��������';
var $A_INSTALL_MOD_CLIENT = '������١���';
var $A_INSTALL_MOD_AUTHOR = '������ҧ';
var $A_INSTALL_MOD_VERSION = '�������';
var $A_INSTALL_MOD_DATE = '�ѹ���';
var $A_INSTALL_MOD_AUTH_MAIL = '����ż�����ҧ';
var $A_INSTALL_MOD_AUTH_URL = 'URL ������ҧ';
var $A_INSTALL_MOD_NO_CUSTOM = '���������ŷ�����͡�Դ�����к�';

//components/com_installer/module/module.php
var $A_INSTALL_MOD_INSTALL_MOD = '�Դ��������';
var $A_INSTALL_MOD_ADMIN_MOD = '����ż������к�'; //Admin Modules

//components/com_install/template/template.php
var $A_INSTALL_TEMPL_INSTALL = '�Դ������ŵ';
var $A_INSTALL_TEMPL_SITE_TEMPL = '䫵�';
var $A_INSTALL_TEMPL_ADMIN_TEMPL = '�������к�';
var $A_INSTALL_TEMPL_BACKTTO_TEMPL = '��Ѻ价�����ŵ';

//components/com_menus/admin.menus.html.php
var $A_COMP_MENUS_MAX_LVLS = '�дѺ�٧�ش';
var $A_COMP_MENUS_MENU_ITEM = '��Ǵ����';
var $A_COMP_MENUS_MENU_ORDER = '�ӴѺ';//KEN ADDED
var $A_COMP_MENUS_MENU_SAVE_ORDER = '�ѹ�֡�ӴѺ';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEMID = '��¡��id';//KEN ADDED
var $A_COMP_MENUS_MENU_CID = 'CID';//KEN ADDED
var $A_COMP_MENUS_MENU_CONTENT = '������';//KEN ADDED
var $A_COMP_MENUS_MENU_MISC = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_NOTE = '* �����˵�:���ٺҧ��Դ�Ҩ���������¡���� ���ѧ�������٪�Դ���ǡѹ';//KEN ADDED
var $A_COMP_MENUS_MENU_COM = '�����鹷�';//KEN ADDED
var $A_COMP_MENUS_MENU_LINKS = '�ԧ��';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEM_TYPE = '��������Ǵ����';//KEN ADDED
var $A_COMP_MENUS_MENU_HELP = '���������';//KEN ADDED
var $A_COMP_MENUS_MENU_BLOGVIEW = '���ä�� "Blog" view';//KEN ADDED
var $A_COMP_MENUS_MENU_TABLEVIEW = '���ä�� "Table" view';//KEN ADDED
var $A_COMP_MENUS_MENU_LISTVIEW = '���ä�� "List" view';//KEN ADDED
var $A_COMP_MENUS_ADD_ITEM = '���͡��Ǵ����';
var $A_COMP_MENUS_SELECT_ADD = '���͡�����鹷��������';
var $A_COMP_MENUS_MOVE_ITEMS = '������Ǵ����';
var $A_COMP_MENUS_MOVE_MENU = '�������Ǵ����';
var $A_COMP_MENUS_BEING_MOVED = '���ѧ������Ǵ����';
var $A_COMP_MENUS_COPY_ITEMS = '�Ѵ�͡��Ǵ����';
var $A_COMP_MENUS_NEXT = '����';
var $A_COMP_MENUS_COPY_MENU = '�Ѵ�͡�����';
var $A_COMP_MENUS_BEING_COPIED = '���ѧ�Ѵ�͡����';
var $A_COMP_MENUS_SELECT_TO = '���͡����� ';

//components/com_menus/admin.menus.php
var $A_COMP_MENUS_ITEM_SAVED = '���ٺѹ�֡�����';//KEN ADDED
var $A_COMP_MENUS_MOVED_TO = ' ��������价�� ';
var $A_COMP_MENUS_COPIED_TO = ' �Ѵ�͡����价�� ';
var $A_COMP_MENUS_WRAPPER = '�������';
var $A_COMP_MENUS_SEPERATOR = '����Ǣ�� / ��鹤��';
var $A_COMP_MENUS_LINK = '�ԧ�� - ';
var $A_COMP_MENUS_STATIC = '�������൵ԡ';
var $A_COMP_MENUS_URL = 'Url';
var $A_COMP_MENUS_CONTENT_ITEM = '������';
var $A_COMP_MENUS_COMP_ITEM = '�����鹷�';
var $A_COMP_MENUS_CONT_ITEM = '��õԴ���';
var $A_COMP_MENUS_NEWSFEED = 'News Feeds';
var $A_COMP_MENUS_COMP = '�����鹷�';
var $A_COMP_MENUS_LIST = '��¡��';
var $A_COMP_MENUS_TABLE = '���ҧ';
var $A_COMP_MENUS_BLOG = '���͡';
var $A_COMP_MENUS_CONT_SEC = '��Ǵ ������';
var $A_COMP_MENUS_CONT_CAT = '������������';
var $A_COMP_MENUS_CONT_SEC_MULTI = '������Ǵ������';
var $A_COMP_MENUS_CONT_CAT_MULTI = '���»�����������';
var $A_COMP_MENUS_CONT_SEC_ARCH = '��Ǵ��ѧ������';
var $A_COMP_MENUS_CONT_CAT_ARCH = '��������ѧ������';
var $A_COMP_MENUS_CONTACT_CAT = '��������õԴ���';
var $A_COMP_MENUS_WEBLINK_CAT = '����������ԧ��';
var $A_COMP_MENUS_NEWS_CAT = '������ News Feeds';
var $A_COMP_MENUS_NEW_ORDER_SAVED = '�ѹ�֡��èѴ�ӴѺ��������';//KEN ADDED
var $A_COMP_MENUS_EDIT_NEWSFEED_TIP = '��� News Feeds ���';
var $A_COMP_MENUS_EDIT_CONTACT_TIP = '��䢡�õԴ��͹��';
var $A_COMP_MENUS_EDIT_CONTENT_TIP = '��䢢�ͤ������';
var $A_COMP_MENUS_EDIT_STATIC_TIP = '��䢢�ͤ����൵ԡ���';

//components/com_menus/component_item_link/component_item_link.menu.html.php
var $A_COMP_MENUS_CIL_LINK_NAME = '�ԧ���ͧ�ժ���';
var $A_COMP_MENUS_CIL_SELECT_COMP = '�س��ͧ���͡�����鹷������������';
var $A_COMP_MENUS_CIL_LINK_COMP = '�����鹷�����ԧ��';
var $A_COMP_MENUS_CIL_ON_CLICK = '����ͤ�ԡ�����Դ� ';
var $A_COMP_MENUS_CIL_PARENT = '˹�ҵ�ҧ���';
var $A_DETAILS = '��������´';

//components/com_menus/components/components.menu.html.php
var $A_COMP_MENUS_CMP_ITEM_NAME = '��¡�èе�ͧ�ժ���';
var $A_COMP_MENUS_CMP_SELECT_CMP = '�ô���͡�����鹷�';
var $A_COMP_MENUS_PARAMETERS_AVAILABLE = '����ö��駤�Ҿ�����������ѧ�ҡ�ѹ�֡���ٹ������';
var $A_COMP_MENUS_CMP_ITEM_COMP = '��¡������ :: �����鹷�';

//components/com_menus/contact_category_table/contact_category_table.menu.html.php
var $A_COMP_MENUS_CMP_CCT_CATEG = '�س��ͧ���͡������';
var $A_COMP_MENUS_CMP_CCT_TITLE = '���ٹ���ͧ�ժ���';
var $A_COMP_MENUS_CMP_CCT_BLANK = '��Ҥس�����ҧ�����ͻ������ж١��᷹���ѵ��ѵ�';
var $A_COMP_MENUS_CMP_CCT_THETITLE = '�������ͧ:';
var $A_COMP_MENUS_CMP_CCT_THECAT = '������:';

//components/com_menus/contact_item_link/contact_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_LINK_NAME = '�ԧ��е�ͧ�ժ���';
var $A_COMP_MENUS_CMP_CIL_SEL_CONT = '�س�е�ͧ���͡��õԴ��ͷ����ԧ��';
var $A_COMP_MENUS_CMP_CIL_CONTACT = '��õԴ��ͷ����ԧ��:';
var $A_COMP_MENUS_CMP_CIL_ONCLICK = '����ͤ�ԡ���Դ�:';
var $A_COMP_MENUS_CMP_CIL_HDR = '��¡������ :: �ԧ�� - ��õԴ���';

//components\com_menus\content_archive_section\content_archive_section.menu.html.php
var $A_COMP_MENUS_CMP_CAS_BLANK = '��Ҥس�����ҧ��������Ǵ�ж١��᷹���ѵ��ѵ';

//components\com_menus\content_blog_category\content_blog_category.menu.html.php
var $A_COMP_MENUS_CMP_CBC_CATEG = '�س����ö���͡���»�����';

//components\com_menus\content_blog_section\content_blog_section.menu.html.php
var $A_COMP_MENUS_CMP_CBS_SECTION = '�س����ö���͡������Ǵ';

//components\com_menus\content_item_link\content_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_SEL_LINK = '�س�е�ͧ���͡�����ҷ����ԧ��';

//components/com_menus/wrapper/wrapper.menu.html.php
var $A_COMP_MENUS_WRAPPER_LINK = '�ԧ���������';

//components/com_menus/separator/separator.menu.html.php
var $A_COMP_MENUS_SEPARATOR_PATTERN = '�ٻẺ/����';

//components/com_menus/content_typed/content_typed.menu.html.php
var $A_COMP_MENUS_TYPED_CONTENT_TO_LINK = '������ͤ��������ԧ��';

//components/com_menus/content_item_link/content_item_link.menu.html.php
var $A_COMP_MENUS_CONTENT_TO_LINK = '��ͤ��������ԧ��';

//components/com_menus/newsfeed_link/newsfeed_link.menu.html.php
var $A_COMP_MENUS_NEWSFEED_TO_LINK = 'News Feeds �����ԧ��';
var $A_COMP_MENUS_NEWSFEED_SELECT_LINK = '�س�е�ͧ���͡ News Feeds �����ԧ��';

//components\com_menus\url\url.menu.html.php
var $A_COMP_MENUS_URL_MUST = '�س��ͧ��� url.';
var $A_COMP_MENUS_URL_LINK = '�ԧ��';

	function adminLanguage()
	{
		global $TR_STRS;
		//Menu Caption Translation for initial mambo menutype
		$TR_STRS[strtolower('mainmenu')] = '������ѡ';
		$TR_STRS[strtolower('othermenu')] = '�������';
		$TR_STRS[strtolower('topmenu')] = '���ٴ�ҹ��';
		$TR_STRS[strtolower('usermenu')] = '���ټ����';
		
		//Components menu caption
		//Banners
		$TR_STRS[strtolower('Banners')] = '�����ɳ�';
		$TR_STRS[strtolower('Manage Banners')] = '��èѴ��û����ɳ�';
		$TR_STRS[strtolower('Manage Clients')] = '��èѴ�����Ңͧ�����ɳ�';

		//Web Links
		$TR_STRS[strtolower('Web Links')] = '����ԧ��'; //Web Links
		$TR_STRS[strtolower('Weblink Items')] = '��¡������ԧ��'; //Weblink Items
		$TR_STRS[strtolower('Weblink Categories')] = '���ҧ����������ԧ��'; //Weblink Categories'

		//Contacts
		$TR_STRS[strtolower('Contacts')] = '��õԴ���'; //Contacts
		$TR_STRS[strtolower('Manage Contacts')] = '�Ѵ��á�õԴ���'; //Manage Contacts
		$TR_STRS[strtolower('Contact Categories')] = '��������õԴ���'; //Contact Categories

		//Polls
		$TR_STRS[strtolower('Polls')] = '����';

		//News Feeds
		$TR_STRS[strtolower('News Feeds')] = 'News Feeds';
		$TR_STRS[strtolower('Manage News Feeds')] = '�Ѵ��� News Feeds';
		$TR_STRS[strtolower('Manage Categories')] = '�Ѵ�����¡��'; //Manage Categories

		//Syndicate
		$TR_STRS[strtolower('Syndicate')] = '��Ш�¢���';

		//Mass Mail
		$TR_STRS[strtolower('Mass Mail')] = '��š����';
		//modules XML file
		$TR_STRS[strtolower('Archived Content')] = '�ѹ�֡������'; 
		$TR_STRS[strtolower('Count')] = '�Ѻ'; 
		$TR_STRS[strtolower('The number of items to display (default is 5)')] = '�ӹǹ��¡�÷���ͧ����ʴ����˹��ྨ ���ԡ�˹���� = 5';  
		$TR_STRS[strtolower('The number of items to display (default is 10)')] = '�ӹǹ��¡�÷���ͧ����ʴ����˹��ྨ ���ԡ�˹���� = 10';
		$TR_STRS[strtolower('Enable Cache')] = '�Դ��÷ӧҹ�ͧᤪ';
		$TR_STRS[strtolower('Select whether to cache the content of this module')] = '���͡���ᤪ�ͧ�������ӧҹ�ҡ�����';
		$TR_STRS[strtolower('No')] = '���';
		$TR_STRS[strtolower('Yes')] = '��';
		$TR_STRS[strtolower('Module Class Suffix')] = '����������¤��ʢͧ�����';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the module (table.moduletable), this allows individual module styling')] = '����������¤��� css �ͧ����� (table.moduletable), �¨����ʴ���������Ź���';
		$TR_STRS[strtolower('Banner')] = '�����ɳ�';
		$TR_STRS[strtolower('Banner client')] = '��Ңͧ�����ɳ�';
		$TR_STRS[strtolower("Reference to banner client id. Enter separated by ','!")] = "��˹������Ţ ID �ͧ ��Ңͧ�����ɳ�������� ���¡��������ͧ���� ','!";
		$TR_STRS[strtolower('Latest News')] = '����������ش';
		$TR_STRS[strtolower('Most Read Content')] = '�����ҷ���ա����ҹ�ҡ����ش';
		$TR_STRS[strtolower('Module Mode')] = '���������';
		$TR_STRS[strtolower('Allows you to control which type of Content to display in the module')] = '��˹���Դ�ͧ�����ҷ���ͧ����ʴ�������';
		$TR_STRS[strtolower('Content Items only')] = '��Ǣ�ͧ͢��������ҹ��';
		$TR_STRS[strtolower('Static Content only')] = '੾���������൵ԡ';
		$TR_STRS[strtolower('Both')] = '��駤��';
		$TR_STRS[strtolower('Show')] = '�ʴ�';
		$TR_STRS[strtolower('Hide')] = '��͹';
		$TR_STRS[strtolower('Frontpage Items')] = '��¡�������ҷ�����ྨ˹���á';
		$TR_STRS[strtolower('Show/Hide items designated for the Frontpage - only works when in Content Items only mode')] = '�ʴ�/��͹ ��¡�÷���������Ţ����Ѻ��ҹ˹����� - �з�������������������������ҹ��';
		$TR_STRS[strtolower('Category ID')] = '�����Ţ��Шӻ�����';
		$TR_STRS[strtolower('Selects items from a specific Category or set of Categories (to specify more than one Category, seperate with a comma , ).')] = '���͡��¡�èҡ����������ͧ��� (�ҡ��ͧ����ҡ����˹�觻����� ��������Ҥ��� , ).';
		$TR_STRS[strtolower('Section ID')] = '�����Ţ��Ш���Ǵ';
		$TR_STRS[strtolower('Selects items from a specific Secion or set of Sections (to specify more than one Section, seperate with a comma , ).')] = '���͡��¡�èҡ��Ǵ����ͧ��� (�ҡ��ͧ����ҡ����˹����Ǵ ��������Ҥ��� , ).';
		$TR_STRS[strtolower('Login Form')] = 'Ẻ���������������к��������к�';
		$TR_STRS[strtolower('Pre-text')] = '��ͤ�����͹�������к�';
		$TR_STRS[strtolower('This is the Text or HTML that is displayed above the login form')] = '��ͤ������л�ҡ������ҹ���ͧẺ���������������к��������к�';
		$TR_STRS[strtolower('Post-text')] = '��ͤ�����ѧ�͡�ҡ�к�';
		$TR_STRS[strtolower('This is the Text or HTML that is displayed below the login form')] = '��ͤ������л�ҡ������ҹ��ҧ�ͧẺ���������������к��������к�';
		$TR_STRS[strtolower('Login Redirection URL')] = 'URL�ͧྨ����ͧ�������ͼ�ҹ����������к��������к�';
		$TR_STRS[strtolower('What page will the login redirect to after login, if let blank will load front page')] = '��˹�˹��ྨ����ͧ�����ѧ�ҡ�������к��������к� �ҡ����к ��к����������Ѻ��ѧ���ྨ˹���á';
		$TR_STRS[strtolower('Logout Redirection URL')] = 'URL�ͧྨ����ͧ�������ͼ�ҹ����͡�ҡ�к�';
		$TR_STRS[strtolower('What page will the logout redirect to after logout, if let blank will load front page')] = '��˹�˹��ྨ����ͧ�����ѧ�ҡ�͡�ҡ�к� �ҡ����к ��к����������Ѻ��ѧ���ྨ˹���á';
		$TR_STRS[strtolower('Login Message')] = '��ͤ����ʴ�����������к�';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Login Success')] = '�ʴ�/��͹ ��;�Ѿjavascript ����ʴ�����������к������';
		$TR_STRS[strtolower('Logout Message')] = '��ͤ����ʴ�����͡�ҡ�к�';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Logout Success')] = '�ʴ�/��͹ ��;�Ѿjavascript ����ʴ�����͡�ҡк������';
		$TR_STRS[strtolower('Greeting')] = '�ʴ������Թ��';
		$TR_STRS[strtolower('Show/Hide the simple greeting text')] = '�ʴ�/��͹ ��ͤ����ʴ������Թ��';
		$TR_STRS[strtolower('Name/Username')] = '����/���ͼ����ҹ';
		$TR_STRS[strtolower('Username')] = '���ͼ����ҹ';
		$TR_STRS[strtolower('Name')] = '����';
		$TR_STRS[strtolower('Main Menu')] = '������ѡ';
		$TR_STRS[strtolower('Menu Class Suffix')] = '����������¤��ʢͧ����';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the menu items')] = '�������������Ѻ���ʢͧ��¡������';
		$TR_STRS[strtolower('Menu Name')] = '��������';
		$TR_STRS[strtolower("The name of the menu (default is 'mainmenu')")] = '���ͧ͢���� - (��һ��Ԥ��"������ѡ")';
		$TR_STRS[strtolower('Menu Style')] = '�ٻẺ����';
		$TR_STRS[strtolower('The menu style')] = '�ٻẺ����';
		$TR_STRS[strtolower('Vertical')] = '�ǵ��';
		$TR_STRS[strtolower('Horizontal')] = '�ǹ͹';
		$TR_STRS[strtolower('Flat List')] = '������§��¡��';
		$TR_STRS[strtolower('Show Menu Icons')] = '�ʴ��ͤ͹����';
		$TR_STRS[strtolower('Show the Menu Icons you have selected for your menu items')] = '�ʴ��ͤ͹���ٷ�����͡�������¡�âͧ����';
		$TR_STRS[strtolower('Menu Icon Alignment')] = '������§�ͤ͹����';
		$TR_STRS[strtolower('Alignment of the Menu Icons')] = '������§�ͤ͹����';
		$TR_STRS[strtolower('Left')] = '����';
		$TR_STRS[strtolower('Right')] = '���';
		$TR_STRS[strtolower('Expand Menu')] = '��������';
		$TR_STRS[strtolower('Expand the menu and make its sub-menus items always visible')] = '������ǹ�ͧ������ШѴ������������������ö�ͧ������ʹ����';
		$TR_STRS[strtolower('Indent Image')] = '�ٻ�Ҿ���˹������';
		$TR_STRS[strtolower('Choose which indent image system to utilise')] = '���͡��������¹�ٻ�Ҿ���˹�����ٷ���ͧ�����';
		$TR_STRS[strtolower('Template')] = '���ŷ';
		$TR_STRS[strtolower('Mambo default images')] = '�ٻ�Ҿ��駵鹷���˹�������������';
		$TR_STRS[strtolower('Use params below')] = '���Ңͧ����ô�ҹ��ҧ';
		$TR_STRS[strtolower('None')] = '�����';
		$TR_STRS[strtolower('Indent Image 1')] = '�ٻ�Ҿ���˹������ 1';
		$TR_STRS[strtolower('Image for the first sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 1';
		$TR_STRS[strtolower('Indent Image 2')] = '�ٻ�Ҿ���˹������ 2';
		$TR_STRS[strtolower('Image for the second sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 2';
		$TR_STRS[strtolower('Indent Image 3')] = '�ٻ�Ҿ���˹������ 3';
		$TR_STRS[strtolower('Image for the third sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 3';
		$TR_STRS[strtolower('Indent Image 4')] = '�ٻ�Ҿ���˹������ 4';
		$TR_STRS[strtolower('Image for the fourth sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 4';
		$TR_STRS[strtolower('Indent Image 5')] = '�ٻ�Ҿ���˹������ 5';
		$TR_STRS[strtolower('Image for the fifth sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 5';
		$TR_STRS[strtolower('Indent Image 6')] = '�ٻ�Ҿ���˹������ 6';
		$TR_STRS[strtolower('Image for the sixth sub-level')] = '�ٻ�Ҿ����Ѻ���������дѺ��� 6';
		$TR_STRS[strtolower('Spacer')] = 'Spacer';
		$TR_STRS[strtolower('Spacer for Horizontal menu')] = 'Spacer for Horizontal menu';
		$TR_STRS[strtolower('End Spacer')] = 'End Spacer';
		$TR_STRS[strtolower('End Spacer for Horizontal menu')] = 'End Spacer for Horizontal menu';
		$TR_STRS[strtolower('Newsflash')] = 'Newsflash';
		$TR_STRS[strtolower('Category')] = '��Ǵ';
		$TR_STRS[strtolower('A content cateogry')] = '��Ǵ������';
		$TR_STRS[strtolower('Style')] = '�ٻẺ';
		$TR_STRS[strtolower('The style to display the category')] = '��Ẻ㹡���ʴ���Ǵ�ͧ������';
		$TR_STRS[strtolower('Randomly choose one at a time')] = '������͡Ẻ���������͡��§�ٻ��������Ф���';
		$TR_STRS[strtolower('Show images')] = '�ʴ��ٻ�Ҿ';
		$TR_STRS[strtolower('Display content item images')] = '�ʴ��ٻ�Ҿ��Ш�������';
		$TR_STRS[strtolower('Linked Titles')] = '��˹������Ǣ�����ԧ��';
		$TR_STRS[strtolower('Make the Item titles linkable')] = '��˹������Ǣ�����ԧ��';
		$TR_STRS[strtolower('Use Global')] = '�������ǡѺ�ź��';
		$TR_STRS[strtolower('Read More')] = '��ҹ���';
		$TR_STRS[strtolower('Show/Hide the Read More button')] = '�ʴ�/��͹����"��ҹ���" ';
		$TR_STRS[strtolower('Item Title')] = '��Ǣ��������';
		$TR_STRS[strtolower('Show item title')] = '�ʴ���Ǣ����������ͧ';
		$TR_STRS[strtolower('No. of Items')] = '�ӹǹ�ͧ��������ͧ';
		$TR_STRS[strtolower('No of items to display')] = '�ӹǹ��������ͧ����ͧ����ʴ���ͤ���';
		$TR_STRS[strtolower('Poll')] = 'Ẻ���Ǩ�����Դ���';
		$TR_STRS[strtolower('Random Image')] = '�к��������͡�ٻ�Ҿ';
		$TR_STRS[strtolower('Image Type')] = '�������ͧ�ٻ�Ҿ';
		$TR_STRS[strtolower('Type of image PNG/GIF/JPG etc. (default is JPG)')] = '�������ͧ�ٻ�Ҿ PNG/GIF/JPG etc. (��һ��Ԥ�� JPG)';
		$TR_STRS[strtolower('Image Folder')] = '�������ٻ�Ҿ';
		$TR_STRS[strtolower('Path to the image folder relative to the site url, eg: images/stories')] = '�ҷ�ͧ�������ٻ�Ҿ, ��: images/stories';
		$TR_STRS[strtolower('Link')] = '�ԧ��';
		$TR_STRS[strtolower('A URL to redirect to if image is clicked on, eg: http://www.mamboserver.com')] = 'URL����ͧ�������к������������ͷӡ�ä�ԡ����ٻ�Ҿ �� http://www.mamboserver.com';
		$TR_STRS[strtolower('Width (px)')] = '���ҧ (px)';
		$TR_STRS[strtolower('Image width (forces all images to be displayed with this width)')] = '�������ҧ�ͧ�ٻ (�觼����ء�ٻ�Ҿ�١�ʴ����¤������ҧ���)';
		$TR_STRS[strtolower('Height (px)')] = '�٧(px)';
		$TR_STRS[strtolower('Image height (forces all images to be displayed with the height)')] = '�����٧�ͧ�ٻ (�觼����ء�ٻ�Ҿ�١�ʴ����¤����٧���)';
		$TR_STRS[strtolower('Related Items')] = '��Ǣ�ͷ������Ǣ�ͧ';
		$TR_STRS[strtolower('Text')] = '��ͤ���';
		$TR_STRS[strtolower('Enter the text to be displayed along with the RSS links')] = '��س�����ͤ�������ͧ�������ʴ��Ѻ�ԧ�� RSS';
		$TR_STRS[strtolower('Show/Hide RSS 0.91 Link')] = '�ʴ�/��͹�ԧ�� RSS 0.91';
		$TR_STRS[strtolower('Show/Hide RSS 1.0 Link')] = '�ʴ�/��͹�ԧ��  RSS 1.0';
		$TR_STRS[strtolower('Show/Hide RSS 2.0 Link')] = '�ʴ�/��͹�ԧ��  RSS 2.0';
		$TR_STRS[strtolower('Show/Hide Atom 0.3 Link')] = '�ʴ�/��͹�ԧ��  Atom 0.3';
		$TR_STRS[strtolower('Show/Hide OPML Link')] = '�ʴ�/��͹�ԧ��  OPML';
		$TR_STRS[strtolower('RSS 0.91 Image')] = '�ٻ RSS 0.91';
		$TR_STRS[strtolower('Choose the image to be used')] = '���͡�ٻ�Ҿ����ͧ���';
		$TR_STRS[strtolower('RSS 1.0 Image')] = '�ٻ RSS 1.0';
		$TR_STRS[strtolower('RSS 2.0 Image')] = '�ٻ RSS 2.0';
		$TR_STRS[strtolower('Atom Image')] = '�ٻ Atom';
		$TR_STRS[strtolower('OPML Image')] = '�ٻ OPML';
		$TR_STRS[strtolower('Search Module')] = '����Ť���';
		$TR_STRS[strtolower('Box Width')] = '�������ҧ';
		$TR_STRS[strtolower('Size of the search text box')] = '��Ҵ�ͧ�硫���͡����';
		$TR_STRS[strtolower('The text that appears in the search text box, if left blank it will load _SEARCH_BOX from your language file')] = '��ͤ�����鹨л�ҡ���硫���͡���� - �ҡ����к� �к�����Ŵ�������Ҩҡ����������ѵ��ѵ�';
		$TR_STRS[strtolower('Search Button')] = '��������';
		$TR_STRS[strtolower('Display a Search Button')] = '�ʴ���������';
		$TR_STRS[strtolower('Button Position')] = '���˹觻���';
		$TR_STRS[strtolower('Position of the button relative to the search box')] = '���˹觢ͧ�����ж١��Ѻ����¹����硫���͡����';
		$TR_STRS[strtolower('Top')] = '��';
		$TR_STRS[strtolower('Bottom')] = '��ҧ';
		$TR_STRS[strtolower('Button Text')] = '��ͤ�����ҹ��ҧ';
		$TR_STRS[strtolower('The text that appears in the search button, if left blank it will load _SEARCH_TITLE from your language file')] = '��ͤ�����鹨л�ҡ�㹻������� - �ҡ����к� �к�����Ŵ�������Ҩҡ����������ѵ��ѵ�';
		$TR_STRS[strtolower('Sections')] = '��ǹ';
		$TR_STRS[strtolower('Statistics')] = 'ʶԵ�';
		$TR_STRS[strtolower('Server Info')] = '����������ͧ��Կ�����';
		$TR_STRS[strtolower('Display server information')] = '�ʴ�����������ͧ���������';
		$TR_STRS[strtolower('Site Info')] = '���������䫵�';
		$TR_STRS[strtolower('Display site information')] = '�ʴ����������䫵�';
		$TR_STRS[strtolower('Hit Counter')] = '��ǹѺ�ӹǹ����';
		$TR_STRS[strtolower('Display hit counter')] = '�ʴ���ǹѺ�ӹǹ����';
		$TR_STRS[strtolower('Increase counter')] = '������ҵ�ǹѺ';
		$TR_STRS[strtolower('Enter the amount of hits to increase counter by')] = '������ҵ�ǹѺ��';
		$TR_STRS[strtolower('Template Chooser')] = '������͡���ŷ';
		$TR_STRS[strtolower('Max. Name Length')] = '������Ǣͧ�����٧�ش';
		$TR_STRS[strtolower('This is the maximum length of the template name to display (default 20)')] = '������Ǣͧ�������ŷ�٧�ش���ж١�ʴ� (��һ��� = 20)';
		$TR_STRS[strtolower('Show Preview')] = '�ʴ�������';
		$TR_STRS[strtolower('Template preview is to be shown')] = '�ʴ����������ŷ';
		$TR_STRS[strtolower('This is the width of the preview image (default 140)')] = '�������ҧ�ٻ�����Ǣͧ���ŷ (��һ��� =140)';
		$TR_STRS[strtolower('This is the height of the preview image (default 90)')] = '�����٧�ٻ�����Ǣͧ���ŷ (��һ��� = 90)';
		$TR_STRS[strtolower("Who's Online")] = "�����Ҫ�㹢�й��";
		$TR_STRS[strtolower('Display')] = '�ʴ�';
		$TR_STRS[strtolower('Select what shall be shown')] = '���͡��¡�÷���ͧ����ʴ�';
		$TR_STRS[strtolower('# of Guests/Members<br>')] = '�ӹǹ�ͧ����/��Ҫԡ<br>';
		$TR_STRS[strtolower('Member Names<br>')] = '������Ҫԡ<br>';
		$TR_STRS[strtolower('Wrapper Module')] = '������������';
		$TR_STRS[strtolower('Url')] = 'Url';
		$TR_STRS[strtolower('Url to site/file you wish to display within the Iframe')] = 'Url �ͧ���䫵�����������ͧ����ʴ�� Iframe';
		$TR_STRS[strtolower('Scroll Bars')] = 'ʡ��ź���';
		$TR_STRS[strtolower('Show/Hide Horizontal & Vertical scroll bars.')] = '�ʴ�/��͹ ʡ��ź�����ǹ͹����ǵ��';
		$TR_STRS[strtolower('Auto')] = '�ѵ��ѵ�';
		$TR_STRS[strtolower('Width of the IFrame Window, you can enter an absolute figure in pixels, or a relative figure by adding a %')] = '�������ҧ�ͧ˹�ҵ�ҧ IFrame, �س����ö��˹�˹����� Pixel(px) ����������(%)';
		$TR_STRS[strtolower('Height of the IFrame Window')] = '�����٧�ͧ˹�ҵ�ҧ IFrame';
		$TR_STRS[strtolower('Auto Height')] = '��˹������٧�ѵ��ѵ�';
		$TR_STRS[strtolower('The height will automatically be set to the size of the external page. This will only work for pages on your own domain.')] = '��Ҥ����٧�ж١��˹����ѵ��ѵ� - �س���ѵԹ����ռŵ��˹��ྨ���������ͧ�س��ҹ��';
		$TR_STRS[strtolower('Auto Add')] = '�����ѵ��ѵ�';
		$TR_STRS[strtolower('By default http:// will be added unless it detects http:// or https:// in the url link you provide, this allow you to switch this ability off')] = '�ҡ�к���辺 http:// ���� https:// �»����к��зӡ������ http:// ������ѵ��ѵ� - �س����ö¡��ԡ�س���ѵԹ��ͧ�к���';

		$TR_STRS[strtolower('Search')] = '����';
		$TR_STRS[strtolower('User Menu')] = '���ټ����';
		$TR_STRS[strtolower('Top Menu')] = '���ٴ�ҹ��';
		$TR_STRS[strtolower('Other Menu')] = '��������';
		$TR_STRS[strtolower('Archive')] = '��ѧ������';
		$TR_STRS[strtolower('Wrapper')] = '�������';
		$TR_STRS[strtolower('Popular')] = '��������';

		$TR_STRS[strtolower('RSS URL')] = 'RSS URL';
		$TR_STRS[strtolower('Enter the URL of the RSS/RDF feed')] = '��� URL ����Ѻ RSS/RDF feed';
		$TR_STRS[strtolower('Feed Description')] = '��͸Ժ�� Feed';
		$TR_STRS[strtolower('Show the description text for the whole Feed')] = '�ʴ���ͤ�����͸Ժ������Ѻ��� Feed ������';
		$TR_STRS[strtolower('Feed Image')] = '�ٻ�Ҿ Feed';
		$TR_STRS[strtolower('Show the image associated with the whole Feed')] = '�ʴ��ٻ�Ҿ�������Ǣ�ͧ�Ѻ Feed ������';
		$TR_STRS[strtolower('Items')] = '��¡��';
		$TR_STRS[strtolower('Enter number of RSS items to display')] = '���ӹǹ�ͧ��¡�� RSS ����ͧ����ʴ�';
		$TR_STRS[strtolower('Item Description')] = '��������´';
		$TR_STRS[strtolower('Show the description or intro text of individual news items')] = '�ʴ���͸Ժ�� ���� ��ͤ�����ǹ�鹢ͧ��¡�â�����ǹ���';
		$TR_STRS[strtolower('Word Count')] = '�Ѻ�ӹǹ��';
		$TR_STRS[strtolower('Allows you to limit the amount of visible item description text. 0 will show all the text')] = '��������ͧ��ͤ�������ͧ����ʴ�. ������ 0 ���ʴ�������';

		//administrator/modules XML file
		$TR_STRS[strtolower('Logged')] = '������к�';
		$TR_STRS[strtolower('Logged in Users')] = '�����ҹ�����͡�Թ����';
		$TR_STRS[strtolower('Components')] = '�����鹷�';
		$TR_STRS[strtolower('Popular Items')] = '�������ʹ����';
		$TR_STRS[strtolower('Latest Items')] = '����������ش';
		$TR_STRS[strtolower('Menu Stats')] = '����ʶԵ�';
		$TR_STRS[strtolower('Unread Messages')] = '��ͤ�������ѧ������Դ��ҹ';
		$TR_STRS[strtolower('Online Users')] = '�����ҹ����͹�Ź�';
		$TR_STRS[strtolower('Quick Icons')] = '�ͤ͹�ҧ�Ѵ';
		$TR_STRS[strtolower('System Message')] = '��ͤ����ҡ�к�';
		$TR_STRS[strtolower('Pathway')] = '�ҷ����';
		$TR_STRS[strtolower('Toolbar')] = '��ź���';
		$TR_STRS[strtolower('Full Menu')] = '�������';

		//mambots XML file
		$TR_STRS[strtolower('MOS Image')] = 'MOS Image';
		$TR_STRS[strtolower('Legacy Mambot Includer')] = 'Legacy Mambot Includer';
		$TR_STRS[strtolower('Code support')] = 'Code support';
		$TR_STRS[strtolower('SEF')] = 'SEF';
		$TR_STRS[strtolower('MOS Rating')] = 'MOS Rating';
		$TR_STRS[strtolower('Email Cloaking')] = 'Email Cloaking';
		$TR_STRS[strtolower('GeSHi')] = 'GeSHi';
		$TR_STRS[strtolower('Load Module Positions')] = 'Load Module Positions';
		$TR_STRS[strtolower('MOS Pagination')] = 'MOS Pagination';
		$TR_STRS[strtolower('No WYSIWYG Editor')] = 'No WYSIWYG �ʹ�����';
		$TR_STRS[strtolower('TinyMCE WYSIWYG Editor')] = 'TinyMCE WYSIWYG �ʹ�����';
		$TR_STRS[strtolower('MOS Image Editor Button')] = 'MOS Image Editor Button';
		$TR_STRS[strtolower('MOS Pagebreak Editor Button')] = 'MOS Pagebreak Editor Button';
		$TR_STRS[strtolower('Search Content')] = '����������';
		$TR_STRS[strtolower('Search Weblinks')] = '��������ԧ��';
		$TR_STRS[strtolower('Search Contacts')] = '���Ң����š�õԴ���';
		$TR_STRS[strtolower('Search Categories')] = '������Ǵ';
		$TR_STRS[strtolower('Search Sections')] = '������ǹ';
		$TR_STRS[strtolower('Search Newsfeeds')] = '���� Newsfeeds';

		$TR_STRS[strtolower('Mode')] = '����';
		$TR_STRS[strtolower('Select how the emails will be displayed')] = '���͡�ٻẺ㹡���ʴ������';
		$TR_STRS[strtolower('Nonlinkable Text')] = '��ͤ����������ö�ԧ����';
		$TR_STRS[strtolower('As linkable mailto address')] = '��˹�������ԧ��������������ѧ��������';
		$TR_STRS[strtolower('Margin')] = '��鹢ͺ';
		$TR_STRS[strtolower('Margin in px, of Div surrounding Image & Caption - only applies if using a Caption')] = '��鹢ͺ�� (�ԡ��) px, ����Ѻ�ͺ� Div �ٻ�Ҿ & ��͸Ժ���Ҿ - ������ա�����͸Ժ���Ҿ';
		$TR_STRS[strtolower('Padding')] = '������ҧ';
		$TR_STRS[strtolower('Padding in px, of Div surrounding Image & Caption - only applies if using a Caption')] = '������ҧ�� (�ԡ��) px, ����Ѻ�ͺ� Div �ٻ�Ҿ & ��͸Ժ���Ҿ - ������ա�����͸Ժ���Ҿ';
		$TR_STRS[strtolower('Wrapped by Table - Column')] = '�������Ẻ���ҧ - �������';
		$TR_STRS[strtolower('Wrapped by Table - Horizontal')] = '�������Ẻ���ҧ - �ǹ͹';
		$TR_STRS[strtolower('Wrapped by Divs')] = '�������Ẻ Divs';
		$TR_STRS[strtolower('No wrapping - raw output')] = '������������ - ���Ѿ��Ժ';
		$TR_STRS[strtolower('Site Title')] = '��Ǣ�����䫵�';
		$TR_STRS[strtolower('title and heading attibutes from mambot added to Site Title tag')] = '�������ͧ �����Ǣ�ͷ���Ҩҡ����ͷ���������͸Ժ���������ͧ���';

		$TR_STRS[strtolower('Functionality')] = '˹�ҷ��';
		$TR_STRS[strtolower('Select functionality')] = '���͡˹�ҷ��';
		$TR_STRS[strtolower('Basic')] = '��鹰ҹ';
		$TR_STRS[strtolower('Advanced')] = '����٧';
		$TR_STRS[strtolower('Text Direction')] = '�Ǣ�ͤ���';
		$TR_STRS[strtolower('Ability to change text direction')] = '��������ö㹡������¹�Ǣ�ͤ���';
		$TR_STRS[strtolower('Left to Right')] = '�ҡ����仢��';
		$TR_STRS[strtolower('Right to Left')] = '�ҡ���仫���';
		$TR_STRS[strtolower('Prohibited Elements')] = '�����ʴ���ǹ��Сͺ';
		$TR_STRS[strtolower('Elements that will be cleaned from the text')] = '��ǹ��Сͺ����ҹ�鹨зӤ������Ҵ��ͤ���';
		$TR_STRS[strtolower('Template CSS classes')] = '���ŵ CSS ����';
		$TR_STRS[strtolower('Load CSS classes from template_css.css')] = '��Ŵ���� CSS �ҡ��� template_css.css';
		$TR_STRS[strtolower('Custom CSS Classes')] = '����� CSS ����';
		$TR_STRS[strtolower('You can specify the loading of a custom CSS file - simply enter the FULL path to the css file you want loaded')] = '�س����ö��Ш������Ŵ CSS ��컡�� - �����Ҹ���� ������ css ���س��ͧ�����Ŵ';
		$TR_STRS[strtolower('Newlines')] = '��÷Ѵ����';
		$TR_STRS[strtolower('Newlines will be made into the selected option')] = '��÷Ѵ����ж١��˹����Ѻ������͡������͡���';
		$TR_STRS[strtolower('BR Elements')] = '�á�� BR';
		$TR_STRS[strtolower('P Elements')] = '�á�� P';
		$TR_STRS[strtolower('Position of the toolbar')] = '���˹觢ͧ��ź���';
		$TR_STRS[strtolower('Popup Height')] = '�����٧�ͧ ��;�Ѿ';
		$TR_STRS[strtolower('Height of HTML mode pop-up window - only in Advanced Mode')] = '�����٧�ͧ˹�ҵ�ҧ HTML ������;�Ѿ - ੾�� Advanced Mode';
		$TR_STRS[strtolower('Popup Width')] = '�������ҧ�ͧ Popup';
		$TR_STRS[strtolower('Width of HTML mode pop-up window - only in Advanced Mode')] = '�������ҧ�ͧ˹�ҵ�ҧ HTML ������;�Ѿ - ੾�� Advanced Mode';

		//administrator/components/com_contact/contact.xml
		$TR_STRS[strtolower('Contact')] = '�����š�õԴ���';
		$TR_STRS[strtolower('This component shows a listing of Contact Information')] = '�����鹷����˹�ҷ���ʴ������š�õԴ���';
		$TR_STRS[strtolower('Page Title')] = '��Ǣ��˹��ྨ';
		$TR_STRS[strtolower('Show/Hide the pages Title')] = '�ʴ�/��͹��Ǣ��˹��ྨ';
		$TR_STRS[strtolower('Text to display at the top of the page. If left blank, the Menu name will be used instead')] = '��ͤ��������ʴ��ѧ��ǹ���ͧ˹��ྨ - �ҡ����к� �к��С�˹�����繪��ͧ͢�������ѵ��ѵ�';
		$TR_STRS[strtolower('Category List - Section')] = '��¡����Ǵ - ��ǹ';
		$TR_STRS[strtolower('Show/Hide the List of Categories in List view page')] = '�ʴ�/��͹ ��¡����Ǵ�ͧ�������˹������ͧẺ�����¡��  ';
		$TR_STRS[strtolower('Category List - Category')] = '��¡����Ǵ - ��Ǵ';
		$TR_STRS[strtolower('Show/Hide the List of Categories in Table view page')] = '�ʴ�/��͹ ��¡����Ǵ�ͧ�������˹������ͧẺ���ҧ��¡��';
		$TR_STRS[strtolower('Category Description')] = '��������´��Ǵ�ͧ������';
		$TR_STRS[strtolower('Show/Hide the Description for the list of other catgeories')] = '�ʴ�/��͹';
		$TR_STRS[strtolower('# Category Items')] = '�ӹǹ��¡����Ǵ�ͧ������';
		$TR_STRS[strtolower('Show/Hide the number of items in each category')] = '�ʴ�/��͹ �ӹǹ��¡���������Ǵ�ͧ������';
		$TR_STRS[strtolower('Show/Hide the Description below')] = '�ʴ�/��͹ ��������´��ҹ��ҧ���';
		$TR_STRS[strtolower('Description for page, if left blank it will load _WEBLINKS_DESC from your language file')] = '��������´�ͧ���ྨ - �ҡ����к� �к�����Ŵ�������Ҩҡ����������ѵ��ѵ�';
		$TR_STRS[strtolower('Image for page, must be located in the /images/stories folder. Default will load web_links.jpg, No image will mean an image is not loaded')] = '�ٻ�Ҿ����ͧ����ʴ���˹��ྨ�е�ͧ�١������������� /images/stories - �»����к�����Ŵ�ٻ web_links.jpg - �ҡ������ٻ�Ҿ������� ���������Ŵ�ٻ��';
		$TR_STRS[strtolower('Image Align')] = '���˹��ٻ�Ҿ';
		$TR_STRS[strtolower('Alignment of the image')] = '��èѴ���§�ٻ�Ҿ';
		$TR_STRS[strtolower('Table Headings')] = '��Ǣ�͵��ҧ';
		$TR_STRS[strtolower('Show/Hide the Table Headings')] = '�ʴ�/��͹ ��Ǣ�͵��ҧ';
		$TR_STRS[strtolower('Position Column')] = '���˹�';
		$TR_STRS[strtolower('Show/Hide the Position column')] = '�ʴ�/��͹ ���˹�';
		$TR_STRS[strtolower('Email Column')] = '�����';
		$TR_STRS[strtolower('Show/Hide the Email column')] = '�ʴ�/��͹ �����';
		$TR_STRS[strtolower('Telephone Column')] = '���Ѿ��';
		$TR_STRS[strtolower('Show/Hide the Telephone column')] = '�ʴ�/��͹ ���Ѿ��';
		$TR_STRS[strtolower('Fax Column')] = '�����';
		$TR_STRS[strtolower('Show/Hide the Fax column')] = '�ʴ�/��͹ �����';

		//administrator/components/com_contact/contact_items.xml
		$TR_STRS[strtolower('Contact Items')] = '��¡�â����š�õԴ���';
		$TR_STRS[strtolower('Parameters for individual Contact Items')] = '��������������Ѻ��¡�á�õԴ���';
		$TR_STRS[strtolower('Menu Image')] = '�ٻ�Ҿ�ͧ����';
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in images/stories/')] = '�ٻ�Ҿ��Ҵ��硨��ҧ����㹵��˹觫������͢�Ңͧ��¡������ ���ٻ�Ҿ��鹨е�ͧ������������� images/stories/';
		$TR_STRS[strtolower('Page Class Suffix')] = '����������¤��ʢͧ˹��';
		$TR_STRS[strtolower('A suffix to be applied to the css classes of the page, this allows individual page styling')] = '����������¤��� css �ͧ����˹��, ��觹��зӧҹ�˹�ҷ���ͧ���';
		$TR_STRS[strtolower('Print Icon')] = '�ͤ͹�����';
		$TR_STRS[strtolower('Show/Hide the item print button - only affects this page')] = '�ʴ�/��͹ ��������� - ����ռ�����Ѻ˹�ҹ��';
		$TR_STRS[strtolower('Back Button')] = '������͹��Ѻ';
		$TR_STRS[strtolower('Show/Hide a Back Button, that returns you to the previously view page')] = '�ʴ�/��͹ ������͹��Ѻ ������͹��Ѻ��ѧྨ��͹˹�ҹ��';
		$TR_STRS[strtolower('Name')] = '����';
		$TR_STRS[strtolower('Show/Hide the name info')] = '�ʴ�/��͹ ����';
		$TR_STRS[strtolower('Position')] = '���˹�';
		$TR_STRS[strtolower('Show/Hide the position info')] = '�ʴ�/��͹ ���˹�';
		$TR_STRS[strtolower('Email')] = '�����';
		$TR_STRS[strtolower('Show/Hide the email info, if you set to show the address will be protected from spambots by javascript cloaking')] = '�ʴ�/��͹ ��������´�ͧ�����, �ҡ��˹�����ʴ� �������ж١��ͧ�ѹ�ҡ�к�����ͷ����javascript cloaking';
		$TR_STRS[strtolower('Street Address')] = '�������,���';
		$TR_STRS[strtolower('Show/Hide the street address info')] = '�ʴ�/��͹ �������,���';
		$TR_STRS[strtolower('Town/Suburb')] = '�Ӻ�,�����';
		$TR_STRS[strtolower('Show/Hide the suburb info')] = '�ʴ�/��͹ �Ӻ�,�����';
		$TR_STRS[strtolower('State')] = '�ѧ��Ѵ';
		$TR_STRS[strtolower('Show/Hide the state info')] = '�ʴ�/��͹ �ѧ��Ѵ';
		$TR_STRS[strtolower('Country')] = '�����';
		$TR_STRS[strtolower('Show/Hide the country info')] = '�ʴ�/��͹ �����';
		$TR_STRS[strtolower('Post/Zip Code')] = '������ɳ���';
		$TR_STRS[strtolower('Show/Hide the post code info')] = '�ʴ�/��͹ ������ɳ���';
		$TR_STRS[strtolower('Telephone')] = '���Ѿ��';
		$TR_STRS[strtolower('Show/Hide the telephone info')] = '�ʴ�/��͹ ���Ѿ��';
		$TR_STRS[strtolower('Fax')] = '�����';
		$TR_STRS[strtolower('Show/Hide the fax info')] = '�ʴ�/��͹ �����';
		$TR_STRS[strtolower('Misc Info')] = '�������������';
		$TR_STRS[strtolower('Show/Hide the misc info')] = '�ʴ�/��͹ �������������';
		$TR_STRS[strtolower('Vcard')] = '�ա���';
		$TR_STRS[strtolower('Show/Hide the Vcard')] = '��͹/�ʴ� �ա���';
		$TR_STRS[strtolower('Image')] = '�ٻ�Ҿ';
		$TR_STRS[strtolower('Show/Hide the image')] = '�ʴ�/��͹ �ٻ�Ҿ';
		$TR_STRS[strtolower('Email description')] = '��������´�����';
		$TR_STRS[strtolower('Show/Hide the Description Text below')] = '�ʴ�/��͹ ��ͤ����ʴ���������´��ҹ��ҧ';
		$TR_STRS[strtolower('Description text')] = '��ͤ����ʴ���������´';
		$TR_STRS[strtolower('The Description text for the Email form, if left blank it will use the _EMAIL_DESCRIPTION language definition')] = '��ͤ�������ҹ������ѺẺ����������, �ҡ����к��к��д֧�Ҩҡ  _EMAIL_DESCRIPTION language definition';
		$TR_STRS[strtolower('Email Form')] = 'Ẻ����������';
		$TR_STRS[strtolower('Show/Hide the email to form')] = '�ʴ�/��͹ Ẻ����������';
		$TR_STRS[strtolower('Email Copy')] = '�����������';
		$TR_STRS[strtolower('Show/Hide the checkbox to email a copy to the senders address')] = '�ʴ�/��͹ �示��͡����Ѻ��������š�Ѻ��ѧ�����';
		$TR_STRS[strtolower('Drop Down')] = '���ͺ��ǹ�';
		$TR_STRS[strtolower('Show/Hide the Drop Down select list in Contact view')] = '�ʴ�/��͹ ���ͺ��ǹ�����Ѻ���͡��¡��㹢����š�õԴ���';
		$TR_STRS[strtolower('Icons/text')] = '�ͤ͹/��ͤ���';
		$TR_STRS[strtolower('Use Icons, text or nothing next to the contact information displayed')] = '�к���Ҩ����ͤ͹ ��ͤ��� ���ͻ������ҧ ����Ѻ����ʴ������š�õԴ���';
		$TR_STRS[strtolower('Icons')] = '�ͤ͹';
		$TR_STRS[strtolower('Address Icon')] = '�ͤ͹�������';
		$TR_STRS[strtolower('Icon for the Address info')] = '�ͤ͹�ͧ�������';
		$TR_STRS[strtolower('Email Icon')] = '�ͤ͹�����';
		$TR_STRS[strtolower('Icon for the Email info')] = '�ͤ͹�ͧ�����';
		$TR_STRS[strtolower('Telephone Icon')] = '�ͤ͹���Ѿ��';
		$TR_STRS[strtolower('Icon for the Telephone info')] = '�ͤ͹�ͧ���Ѿ��';
		$TR_STRS[strtolower('Fax Icon')] = '�ͤ͹�����';
		$TR_STRS[strtolower('Icon for the Fax info')] = '�ͤ͹�ͧ�����';
		$TR_STRS[strtolower('Misc Icon')] = '�ͤ͹����������';
		$TR_STRS[strtolower('Icon for the Misc info')] = '�ͤ͹�ͧ����������';

		//administrator/components/com_content XML files
		$TR_STRS[strtolower('Content Page')] = '˹��������';
		$TR_STRS[strtolower('This shows a single content page')] = '�ʴ���§˹�����Ǣͧ������';
		$TR_STRS[strtolower('Item Title')] = '��Ǣ��������';
		$TR_STRS[strtolower('Show/Hide the items title')] = '�ʴ�/��͹ ��Ǣ��������';
		$TR_STRS[strtolower('Make your Item titles linkable')] = '��˹������Ǣ�����������ԧ��';
		$TR_STRS[strtolower('Intro Text')] = '����';
		$TR_STRS[strtolower('Show/Hide the intro text')] = '�ʴ�/��͹ ����';
		$TR_STRS[strtolower('Section Name')] = '��ǹ';
		$TR_STRS[strtolower('Show/Hide the Section the item belongs to')] = '����ʴ�/��͹ ��ǹ�ͧ���������������Ѻ..';
		$TR_STRS[strtolower('Section Name Linkable')] = '��˹������ǹ�ͧ���������ԧ��';
		$TR_STRS[strtolower('Make the Section text a link to the actual section page')] = '��˹������ǹ�ͧ���������ԧ����ѧ˹�Ңͧ��ǹ�ͧ������';
		$TR_STRS[strtolower('Category Name')] = '��Ǵ';
		$TR_STRS[strtolower('Show/Hide the Category the item belongs to')] = '����ʴ�/��͹ ��Ǵ�ͧ���������������Ѻ..';
		$TR_STRS[strtolower('Category Name Linkable')] = '��˹������Ǵ�ͧ���������ԧ��';
		$TR_STRS[strtolower('Make the Category text a link to the actual Category page')] = '��˹�����Ǵ�ͧ���������ԧ����ѧ˹�Ңͧ��Ǵ�ͧ������';
		$TR_STRS[strtolower('Item Rating')] = '�ѵ�ҡ����Ҫ�������';
		$TR_STRS[strtolower('Show/Hide the item rating - only affects this page')] = '�ʴ�/��͹ �ѵ�ҡ����Ҫ� - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Author Names')] = '���ͼ����';
		$TR_STRS[strtolower('Show/Hide the item author - only affects this page')] = '�ʴ�/��͹ ���ͼ���� - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Created Date and Time')] = '�ѹ���������ҷ�����ҧ������';
		$TR_STRS[strtolower('Show/Hide the item creation date - only affects this page')] = '�ʴ�/��͹ �ѹ���������ҷ�����ҧ������ - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Modified Date and Time')] = '�ѹ���������ҷ�����������';
		$TR_STRS[strtolower('Show/Hide the item modification date - only affects this page')] = '�ʴ�/��͹ �ѹ���������ҷ����������� - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Show/Hide the item pdf button - only affects this page')] = '�ʴ�/��͹ ��������Ѻ�ŧ������������͡���PDF - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Show/Hide the item email button - only affects this page')] = '�ʴ�/��͹ ��������Ѻ�������Ҽ�ҹ�ҧ����� - �ռ�੾�������ҹ����ҹ��';
		$TR_STRS[strtolower('Key Reference')] = '����������ҧ�ԧ';
		$TR_STRS[strtolower('A text key that an item may be referenced by (like a help reference)')] = '��ͤ������ͤӷ������ö����ҧ�ԧ���ѧ�����ҹ��';

		//administrator/components/com_frontpage/frontpage.xml
		$TR_STRS[strtolower('Frontpage')] = '���ྨ˹���á';
		$TR_STRS[strtolower('This component shows all the published content items from your site marked Show on Frontpage.')] = '�����鹷����˹�ҷ���ʴ������ҷ�������ء��������ѧ���ྨ˹���á';
		$TR_STRS[strtolower('Text to display at the top of the page')] = '��ͤ�������ͧ����ʴ����ǹ���ͧ˹�����ྨ';
		$TR_STRS[strtolower('Show/Hide the Page title')] = '�ʴ�/��͹ ��Ǣ�ͧ͢˹�����ྨ';
		$TR_STRS[strtolower('# Leading')] = '�ӹǹ��¡�����ǹ�ͧ�����ҹ�';
		$TR_STRS[strtolower('Number of Items to display as a leading (full width) item. 0 will mean that no items will be displayed as leading.')] = '�ӹǹ�ͧ��¡�÷���ͧ����ʴ����ǹ�ͧ�����ҹ� (���ҧ��� 100%). �ҡ����ͧ����������¡���ʴ����ǹ�������˹���ҹ����ҡѺ�ٹ�� 0 ';
		$TR_STRS[strtolower('# Intro')] = '�ӹǹ��¡�����ǹ�ͧ�������й�';
		$TR_STRS[strtolower('Number of Items to display with the introduction text shown.')] = '�ӹǹ��¡�����ǹ�ͧ�������й� �������ǹ�������Ѵŧ�Ҩҡ�����ҹ�';
		$TR_STRS[strtolower('Columns')] = '�ӹǹ����������ǹ�ͧ�������й�';
		$TR_STRS[strtolower('When displaying the intro text, how many columns to use per row')] = '��˹��ӹǹ��������������ǹ�ͧ�������й�';
		$TR_STRS[strtolower('# Links')] = '�ӹǹ��¡���ԧ��';
		$TR_STRS[strtolower('Number of Items to display as Links.')] = '�ӹǹ��Ǣ�������ҷ���ͧ�������ʴ���¡��Ẻ�ԧ��';
		$TR_STRS[strtolower('Category Order')] = '���§�ӴѺ�����Ǵ�ͧ������';
		$TR_STRS[strtolower('Order items by catgeory')] = '������§�ӴѺ�����Ǵ�ͧ������';
		$TR_STRS[strtolower('No, order by Primary Order only')] = '���§�ӴѺ���������§�ӴѺ��ѡ��ҹ��';
		$TR_STRS[strtolower('Ordering')] = '������§�ӴѺ';
		$TR_STRS[strtolower('Primary Order')] = '������§�ӴѺ��ѡ';
		$TR_STRS[strtolower('Order that the items will be displayed in.')] = '�Ѵ���§��¡�÷���ʴ�����.';
		$TR_STRS[strtolower('Pagination')] = '�������Ţ˹��';
		$TR_STRS[strtolower('Show/Hide Pagination support')] = '�ʴ�/��͹ �к�ʹѺʹع�������Ţ˹��';
		$TR_STRS[strtolower('Pagination Results')] = '���Ѿ��������Ţ˹��';
		$TR_STRS[strtolower('Show/Hide Pagination Results info ( e.g 1-4 of 4 )')] = '�ʴ�/��͹ ���Ѿ��������Ţ˹�� ( ������ҧ�� 1-4 �ҡ 4 )';
		$TR_STRS[strtolower('MOSImages')] = 'MOSImages';
		$TR_STRS[strtolower('Display {mosimages}.')] = '�ʴ� {mosimages}.';
		$TR_STRS[strtolower('Item Titles')] = '��Ǣ��������';
		$TR_STRS[strtolower('Show/Hide the Read More link')] = '�ʴ�/��͹ �ԧ�� "��ҹ���" ';
		$TR_STRS[strtolower('PDF Icon')] = '�ͤ͹ PDF';

		//administrator/components/com_login/login.xml
		$TR_STRS[strtolower('Login Page Title')] = '��Ǣ��˹���������к�';
		$TR_STRS[strtolower('Login JS Message')] = '��ͤ��� JS �������к�';
		$TR_STRS[strtolower('Login Description')] = '��������´˹���������к�';
		$TR_STRS[strtolower('Show/Hide the Login Description below')] = '�ʴ�/��͹ ��������´˹���������к���ҹ��ҧ���';
		$TR_STRS[strtolower('Login Description Text')] = '��ͤ����ʴ���������´˹���������к�';
		$TR_STRS[strtolower('Text to display on the login Page, if left blank _LOGIN_DESCRIPTION will be used')] = '��ͤ�������ͧ����ʴ��˹���������к� �ҡ����к��к�����Ŵ�������Ҩҡ _LOGIN_DESCRIPTION';
		$TR_STRS[strtolower('Login Image')] = '�ٻ�Ҿ˹���������к�';
		$TR_STRS[strtolower('Image for the Login Page')] = '�ٻ�Ҿ˹���������к�';
		$TR_STRS[strtolower('Login Image Align')] = '���˹��ٻ�Ҿ˹���������к�';
		$TR_STRS[strtolower('Alignment for Login Image')] = '��èѴ���§���˹��ٻ�Ҿ˹���������к�';
		$TR_STRS[strtolower('Logout Page Title')] = '��Ǣ��˹���͡�ҡ�к�';
		$TR_STRS[strtolower('What page will be redirected to after logout, if let blank will load front page')] = '��˹�˹��ྨ����ͧ�����ѧ�ҡ�͡�ҡ�к� �ҡ����к ��к����������Ѻ��ѧ���ྨ˹���á';
		$TR_STRS[strtolower('Logout JS Message')] = '��ͤ��� JS �͡�ҡ�к�';
		$TR_STRS[strtolower('Logout Description')] = '��������´����͡�ҡ�к�';
		$TR_STRS[strtolower('Show/Hide the Logout Description below')] = '�ʴ�/��͹ ��������´����͡�ҡ�к���ҹ��ҧ���';
		$TR_STRS[strtolower('Logout Description Text')] = '��ͤ����ʴ���������´����͡�ҡ�к�';
		$TR_STRS[strtolower('Text to display on the logout Page, if left blank _LOGOUT_DESCRIPTION will be used')] = '��ͤ�������ͧ����ʴ��˹���͡�ҡ�к� �ҡ����к��к�����Ŵ�������Ҩҡ _LOGOUT_DESCRIPTION';
		$TR_STRS[strtolower('Logout Image')] = '�ٻ�Ҿ˹���͡�ҡ�к�';
		$TR_STRS[strtolower('Image for the Logout Page')] = '�ٻ�Ҿ˹���͡�ҡ�к�';
		$TR_STRS[strtolower('Logout Image Align')] = '���˹��ٻ�Ҿ˹���͡�ҡ�к�';
		$TR_STRS[strtolower('Alignment for Logout Image')] = '��èѴ���§���˹��ٻ�Ҿ˹���͡�ҡ�к�';

//--- ��� Mambothailand.com ��
		//administrator/components/com_newsfeeds/newsfeeds.xml
		$TR_STRS[strtolower('Newsfeeds')] = 'Newsfeeds';
		$TR_STRS[strtolower('This component manages RSS/RDF newsfeeds')] = '����ͤ����鹷�Ѵ��� RSS/RDF newsfeeds';
		$TR_STRS[strtolower('Name Column')] = '���ͤ������';
		$TR_STRS[strtolower('Show/Hide the Feed Name column')] = '�ʴ�/��͹ Feed Name �������';
		$TR_STRS[strtolower('# Articles Column')] = '�ӹǹ�������';
		$TR_STRS[strtolower('Show/Hide the # of articles in the feed')] = '�ʴ�/��͹ ������� feed';
		$TR_STRS[strtolower('Link Column')] = '�ԧ��������';
		$TR_STRS[strtolower('Show/Hide the Feed Link column')] = '�ʴ�/��͹ Feed �ԧ��������';
		$TR_STRS[strtolower('Show/Hide the image of the feed')] = '�ʴ�/��͹ �ٻ�Ҿ����Ѻ feed';
		$TR_STRS[strtolower('Show/Hide the description text of the feed')] = '�ʴ�/��͹ ��ͤ�����͸Ժ�¢ͧ feed';
		$TR_STRS[strtolower('Show/Hide the description or intro text of an item')] = '�ʴ�/��͹ ��͸Ժ�� ���͢�ͤ�����ǹ�鹢ͧ��¡��';

		//administrator/components/com_syndicate XML files
		$TR_STRS[strtolower('Syndicate')] = '��Ш�¢���';
		$TR_STRS[strtolower('This component controls the Syndication settings')] = '�����鹷�����Ǻ�����÷ӧҹ�ͧ��á�Ш�¢���';
		$TR_STRS[strtolower('Cache')] = 'ᤪ';
		$TR_STRS[strtolower('Cache the feed files')] = 'ᤪ�ͧ feed ���';
		$TR_STRS[strtolower('Cache Time')] = '����ᤪ';
		$TR_STRS[strtolower('Cache file will refresh every x seconds')] = '��˹����ӡ�������ᤷ�ء� ����Թҷ�';
		$TR_STRS[strtolower('# Items')] = '�ӹǹ��¡��';
		$TR_STRS[strtolower('Number of Items to syndicate')] = '�ӹǹ��¡�÷���ͧ��÷ӡ�á�Ш�¢���';
		$TR_STRS[strtolower('Title')] = '��Ǣ��';
		$TR_STRS[strtolower('Syndication Title')] = '��Ǣ�͡�Ш�¢���';
		$TR_STRS[strtolower('Description')] = '��������´';
		$TR_STRS[strtolower('Syndication Description')] = '��������´��Ш�¢���';
		$TR_STRS[strtolower('Image to be included in feed')] = '�ٻ�Ҿ���١�ʴ������ feed';
		$TR_STRS[strtolower('Image Alt')] = '��ͤ���͸Ժ�¢ͧ�ٻ�Ҿ';
		$TR_STRS[strtolower('Alt text for image')] = '��ͤ�������˹����������͸Ժ�¢ͧ�ٻ�Ҿ';
		$TR_STRS[strtolower('Limit Text')] = '�ӡѴ��ͤ���';
		$TR_STRS[strtolower('Limit the article text to the value indicated below')] = '�ӡѴ�ӹǹ��ͤ���㹺���������ʴ���ҹ��ҧ';
		$TR_STRS[strtolower('Text Length')] = '������Ǣͧ��ͤ���';
		$TR_STRS[strtolower('The word length of the article text - 0 will show no text')] = '������Ǣͧ��ͤ��� - �ҡ����ͧ�������ʴ�����˹���ҹ���� 0 ';
		$TR_STRS[strtolower('Order')] = '�ӴѺ';
		$TR_STRS[strtolower('Order that the items will be displayed')] = '���§�ӴѺ��¡�÷���ʴ�����';
		$TR_STRS[strtolower('Default')] = '��һ���';
		$TR_STRS[strtolower('Frontpage Ordering')] = '��èѴ���§�ӴѺ�ͧ�������˹���á';
		$TR_STRS[strtolower('Oldest first')] = '�������Ӥѭ������������ش���ѹ�Ѻ�á';
		$TR_STRS[strtolower('Most recent first')] = '�������Ӥѭ������������ش���ѹ�Ѻ�á';
		$TR_STRS[strtolower('Title Alphabetical')] = '�������ͧ���§����ѡ��';
		$TR_STRS[strtolower('Title Reverse-Alphabetical')] = '�������ͧ���§����ѡ����͹��Ѻ';
		$TR_STRS[strtolower('Author Alphabetical')] = '�����¹���§����ѡ��';
		$TR_STRS[strtolower('Author Reverse-Alphabetical')] = '�����¹���§����ѡ����͹��Ѻ';
		$TR_STRS[strtolower('Most Hits')] = '�ռ����Ҫ��ҡ����ش';
		$TR_STRS[strtolower('Least Hits')] = '�ռ����Ҫ����·���ش';
		$TR_STRS[strtolower('Live Bookmarks')] = 'Live Bookmarks';
		$TR_STRS[strtolower('Activate support for Firefox Live Bookmarks functionality')] = '��е�鹡��ʹѺʹع����Ѻ Firefox Live Bookmarks �ѧ��ѹ';
		$TR_STRS[strtolower('Off')] = '�Դ';
		$TR_STRS[strtolower('RSS 0.91')] = 'RSS 0.91';
		$TR_STRS[strtolower('RSS 1.0')] = 'RSS 1.0';
		$TR_STRS[strtolower('RSS 2.0')] = 'RSS 2.0';
		$TR_STRS[strtolower('ATOM 0.3')] = 'ATOM 0.3';
		$TR_STRS[strtolower('Bookmark file')] = '��� Bookmark';
		$TR_STRS[strtolower('Special file name, if empty the default will be used.')] = '���;���� ,�ҡ����������ҧ����к��е��������ѵ��ѵ�';
		//administrator/components/com_newsfeeds/newsfeeds.xml
		$TR_STRS[strtolower('Newsfeeds')] = '�������';
		$TR_STRS[strtolower('This component manages RSS/RDF newsfeeds')] = '�����鹷�����Ѻ�Ѵ��� RSS/RDF ';
		$TR_STRS[strtolower('Name Column')] = '���ͤ������';
		$TR_STRS[strtolower('Show/Hide the Feed Name column')] = '�ʴ�/��͹ ���ͧ͢�������';
		$TR_STRS[strtolower('# Articles Column')] = '# �������������';
		$TR_STRS[strtolower('Show/Hide the # of articles in the feed')] = '�ʴ�/��͹ ��� # �ͧ������㹡�û�͹';
		$TR_STRS[strtolower('Link Column')] = '���������������§';
		$TR_STRS[strtolower('Show/Hide the Feed Link column')] = '�ʴ�/��͹ ���������������§';
		$TR_STRS[strtolower('Show/Hide the image of the feed')] = '�ʴ�/��͹ �ٻ�Ҿ�ͧ��û�͹';
		$TR_STRS[strtolower('Show/Hide the description text of the feed')] = '�ʴ�/��͹ ��͸Ժ�¢�ͤ����ͧ��û�͹';
		$TR_STRS[strtolower('Show/Hide the description or intro text of an item')] = '�ʴ�/��͹ ��͸Ժ�����ͤӢ�鹵鹢�ͤ����ͧ�����ѹ';

		//administrator/components/com_syndicate XML files
		$TR_STRS[strtolower('Syndicate')] = '��Ш�¢������';
		$TR_STRS[strtolower('This component controls the Syndication settings')] = '�����鹷�����Ѻ�Ǻ�����еԴ��駢ͧ��Ҥ�';
		$TR_STRS[strtolower('Cache')] = '˹��¤����Ӫ��Ǥ���';
		$TR_STRS[strtolower('Cache the feed files')] = '˹��¤����Ӫ��Ǥ��Ǣͧ�����١��͹';
		$TR_STRS[strtolower('Cache Time')] = '���Ңͧ˹��¤����Ӫ��Ǥ���';
		$TR_STRS[strtolower('Cache file will refresh every x seconds')] = '���˹��¤����Ӫ��Ǥ��Ǩз�����ء � x �Թҷ�';
		$TR_STRS[strtolower('# Items')] = '# ��¡��㹺ѭ��';
		$TR_STRS[strtolower('Number of Items to syndicate')] = '����Ţ�ͧ��¡�úѭ�����Ҥ�';
		$TR_STRS[strtolower('Title')] = '��������ͧ';
		$TR_STRS[strtolower('Syndication Title')] = '��������ͧ��Ҥ�';
		$TR_STRS[strtolower('Description')] = '��͸Ժ��';
		$TR_STRS[strtolower('Syndication Description')] = '��͸Ժ����Ҥ�';
		$TR_STRS[strtolower('Image to be included in feed')] = '�ٻ�Ҿ�١������㹡�û�͹';
		$TR_STRS[strtolower('Image Alt')] = '��ͤ����Ҿ';
		$TR_STRS[strtolower('Alt text for image')] = '��ͤ������ٻ�Ҿ';
		$TR_STRS[strtolower('Limit Text')] = '�ӡѴ��ͤ���';
		$TR_STRS[strtolower('Limit the article text to the value indicated below')] = '�ӡѴ��ͤ�����������ʴ��֧��Ң�ҧ��ҧ';
		$TR_STRS[strtolower('Text Length')] = '������Ǣͧ��ͤ���';
		$TR_STRS[strtolower('The word length of the article text - 0 will show no text')] = '������Ǣͧ��������� - 0 ������ʴ���ͤ����ա';
		$TR_STRS[strtolower('Order')] = '�ӴѺ';
		$TR_STRS[strtolower('Order that the items will be displayed')] = '��¡��㹺ѭ�ն١���§����ӴѺ㹡���ʴ���';
		$TR_STRS[strtolower('Default')] = '����������';
		$TR_STRS[strtolower('Frontpage Ordering')] = '��èѴ���§��ҹ˹�����';
		$TR_STRS[strtolower('Oldest first')] = '������躹�ش';
		$TR_STRS[strtolower('Most recent first')] = '����ش����ռ����ҡ';
		$TR_STRS[strtolower('Title Alphabetical')] = '��������ͧ����ӴѺ�ѡ��';
		$TR_STRS[strtolower('Title Reverse-Alphabetical')] = '��������ͧ �����ѧ-����ӴѺ����ѡ��';
		$TR_STRS[strtolower('Author Alphabetical')] = '����觵���ӴѺ����ѡ��';
		$TR_STRS[strtolower('Author Reverse-Alphabetical')] = '����� �����ѧ-����ӴѺ����ѡ��';
		$TR_STRS[strtolower('Most Hits')] = '�١���ҡ����ش';
		$TR_STRS[strtolower('Least Hits')] = '�١������ҡ�ѡ';
		$TR_STRS[strtolower('Live Bookmarks')] = '��ش��������';
		$TR_STRS[strtolower('Activate support for Firefox Live Bookmarks functionality')] = '��е������ͧ�Ѻ����Ѻ Firefox ���ѵ��ѵ�';
		$TR_STRS[strtolower('Off')] = '�Դ';
		$TR_STRS[strtolower('RSS 0.91')] = 'RSS 0.91';
		$TR_STRS[strtolower('RSS 1.0')] = 'RSS 1.0';
		$TR_STRS[strtolower('RSS 2.0')] = 'RSS 2.0';
		$TR_STRS[strtolower('ATOM 0.3')] = 'ATOM 0.3';
		$TR_STRS[strtolower('Bookmark file')] = '�����ش��������';
		$TR_STRS[strtolower('Special file name, if empty the default will be used.')] = '�������Ẻ�����, �����ҧ���� ���������鹨ж١��.';

		//administrator/components/com_weblinks/weblinks.xml
		$TR_STRS[strtolower('Hits')] = '��';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '�ʴ�/��͹ �ӹǹ���駷�衴�ͧ�������';
		$TR_STRS[strtolower('Link Descriptions')] = '��͸Ժ�¢ͧ���������§';
		$TR_STRS[strtolower('Show/Hide the Description text of the Links')] = '�ʴ�/��͹ ��͸Ժ�¢�ͤ����ͧ���������§';
		$TR_STRS[strtolower('Icon')] = '�ͤ͹';
		$TR_STRS[strtolower('Icon to be used to the left of the url links in Table view')] = '�ͤ͹�ж١������ҧ��ҹ���¢ͧ�������ͧ����������������˹�Ңͧ����ʴ���';

		//administrator/components/com_weblinks/weblinks_item.xml
		$TR_STRS[strtolower('This component shows a listing of Weblinks')] = '�����鹷� ����Ѻ�ʴ���¡�âͧ���������§���';
		$TR_STRS[strtolower('Target')] = '�������';
		$TR_STRS[strtolower('Target window when the link is clicked')] = '������¢ͧ˹�ҵ�ҧ�Թ�������ͤ�ԡ�������������';
		$TR_STRS[strtolower('Parent Window With Browser Navigation')] = '˹�ҵ�ҧ���ǡѹ�Ѻ��������������';
		$TR_STRS[strtolower('New Window With Browser Navigation')] = '˹�ҵ�ҧ����Ѻ��������������';
		$TR_STRS[strtolower('New Window Without Browser Navigation')] = '˹�ҵ�ҧ�����¡�͡�ҡ��������������';

		//administrator/components/com_menus/contact_category_table/contact_category_table.xml
		$TR_STRS[strtolower('Other Categories')] = '��������� �';
		$TR_STRS[strtolower('When viewing a Category, Show/Hide the list of other Categories')] = '����ʹٻ�����, �ʴ�/��͹ ��¡����� �';

		//administrator/components/com_menus/content_archive_category/content_archive_category.xml
		$TR_STRS[strtolower('Order by')] = '���§�ӴѺ��';
		$TR_STRS[strtolower('This overrides the ordering of the items.')] = '��ҹ����������§�ӴѺ�ͧ��¡��㹺ѭ��.';

		//administrator/components/com_menus/content_blog_category/content_blog_category.xml
		$TR_STRS[strtolower('Show/Hide the Category Description')] = '�ʴ�/��͹ ��͸��¢ͧ���л�����';
		$TR_STRS[strtolower('Description Image')] = '��͸Ժ���ٻ�Ҿ';
		$TR_STRS[strtolower('Show/Hide image of the Category Description')] = '�ʴ�/��͹ ��͸�����ٻ�Ҿ���л�����';

		//administrator/components/com_menus/content_blog_section/content_blog_section.xml
		$TR_STRS[strtolower('Show/Hide the Section Description')] = '�ʴ�/��͹ ��Ǵ��͸Ժ��';
		$TR_STRS[strtolower('Show/Hide image of the Section Description')] = '�ʴ�/��͹ ��͸Ժ���ٻ�Ҿ�������Ǵ';

		//administrator/components/com_menus/content_category/content_category.xml
		$TR_STRS[strtolower('Table - Content Category')] = '���ҧ - �������ͧ������';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = '�ʴ�����ͧ���ҧ�ͧ����������Ѻ�������ͧ���������ҧ�����´';
		$TR_STRS[strtolower('Date Format')] = '�ٻẺ�ѹ���';
		$TR_STRS[strtolower('The format of the date displayed, using PHPs strftime Command Format - if left blank it will load the format from your language file')] = '�ٻẺ�ѹ������ʴ�, �� PHP �� PHPs ʵ�ԧ��ͧ���ҷ�����ٻẺ������Ͷ�� - ��Ҵ�ҹ���¢ͧ�ѹ��ҧ����Ŵ�ٻẺ�ҡ�������';
		$TR_STRS[strtolower('Date Column')] = '�ѹ���������';
		$TR_STRS[strtolower('Show/Hide the Date column')] = '�ʴ�/��͹ �ѹ���������';
		$TR_STRS[strtolower('Author Column')] = '�����������';
		$TR_STRS[strtolower('Show/Hide the Author column')] = '�ʴ�/��͹ �����������';
		$TR_STRS[strtolower('Hits Column')] = '����������';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '�ʴ�/��͹ �����������';
		$TR_STRS[strtolower('Navigation Bar')] = 'ᶺ�ӷҧ��ѧ����ҧ �';
		$TR_STRS[strtolower('Show/Hide the Navigation bar')] = '�ʴ�/��͹ ᶺ�ӷҧ��ѧ����ҧ �';
		$TR_STRS[strtolower('Order Select')] = '�ӴѺ������͡';
		$TR_STRS[strtolower('Show/Hide the Order Select dropdown')] = '�ʴ�/��͹ �ӴѺ������͡��ͺ��ǹ�';
		$TR_STRS[strtolower('Display Select')] = '����ʴ�������͡';
		$TR_STRS[strtolower('Show/Hide the Display Select dropdown')] = '�ʴ�/��͹ ����ʴ�������͡��ҹ��ҧ';
		$TR_STRS[strtolower('Display Number')] = '����ʴ�����Ţ';
		$TR_STRS[strtolower('Number of items to be displayed by default')] = '����Ţ���¡�è��ʴ��繤���������';
		$TR_STRS[strtolower('Filter')] = '����';
		$TR_STRS[strtolower('Show/Hide the Filter ability')] = '�ʴ�/��͹ ��������ö�ͧ��ä���';
		$TR_STRS[strtolower('Filter Field')] = '�ͺࢵ��ä���';
		$TR_STRS[strtolower('Which field shall the filter apply to')] = '����繢ͺࢵ�ͧ��ä�����������ª��';
		$TR_STRS[strtolower('Author')] = '�����';
		$TR_STRS[strtolower('Show/Hide the listing of other Categories')] = '�ʴ�/��͹ ��¡�âͧ�����һ��������';
		$TR_STRS[strtolower('Empty Categories')] = '��������������ҧ����';
		$TR_STRS[strtolower('Show/Hide empty(no items) categories')] = '�ʴ�/��͹ ��ҧ����(�������¡��) �������ͧ������';
		$TR_STRS[strtolower('Show/Hide the Category Description, it will appear below the Category Name')] = '�ʴ�/��͹ ��͸Ժ�»������ͧ������, �ѹ�л�ҡ����ʹ�ҹ��ҧ�������ͧ������';
		
		//administrator/components/com_menus/content_section/content_section.xml
		$TR_STRS[strtolower('Table - Content Section')] = '���ҧ - ��Ǵ������';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = '���ҧ��¡�û������ͧ����������Ѻ��Ǵ���ҧ�����´';
		$TR_STRS[strtolower('Section Title')] = '��Ǵ�ͧ��������ͧ';
		$TR_STRS[strtolower('Show/hide the section title')] = '�ʴ�/��͹ ��Ǵ�ͧ��������ͧ';
		
		//administrator/components/com_menus/newsfeed_category_table/newsfeed_category_table.xml
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in /images')] = '�ٻ��Ҵ��硨ж١�ҧ��ҹ�������͢�Ңͧ���������ѹ, �ٻ�Ҿ�ѡ������� /images';
		$TR_STRS[strtolower('Articles Column')] = '�������������';
		$TR_STRS[strtolower('Show/Hide the Articles column')] = '�ʴ�/��͹ �������������';

		//administrator/components/com_menus/wrapper/wrapper.xml
		$TR_STRS[strtolower('Width')] = '���ҧ';
		$TR_STRS[strtolower('Height')] = '���';

		//administrator/components/com_menus all XML files' name and description
		$TR_STRS[strtolower('Link - Component Item')] = '���������§ - ��ǹ��Сͺ��¡��㹺ѭ��';
		$TR_STRS[strtolower('Creates a link to an existing Mambo Component')] = '���ҧ���������§�͡�ҡ��ǹ��Сͺ�ͧ����';
		$TR_STRS[strtolower('Component')] = '��ǹ��Сͺ';
		$TR_STRS[strtolower('Displays the frontend interface for a Component')] = '˹���á�ʴ��繵�ǻ���ҹ����Ѻ��ǹ��Сͺ';
		$TR_STRS[strtolower('Table - Contact Category')] = '���ҧ - �������ͧ���Դ���';
		$TR_STRS[strtolower('Shows a Table view of Contact items for a particular Category')] = '�ʴ�����ͧ���ҧ�ͧ���Դ������ҧ�����´����л������ͧ������';
		$TR_STRS[strtolower('Link - Contact Item')] = '���������§ - ��¡��㹺ѭ�ռ��Դ���';
		$TR_STRS[strtolower('Creates a link to a Published Contact Item')] = '���ҧ���������§˹�� ��С����¡��㹺ѭ�ռ��Դ���';
		$TR_STRS[strtolower('Blog - Content Category Archive')] = '���͡ - �������������͡����Ӥѭ';
		$TR_STRS[strtolower('Shows a listing of Content items archived for a particular category')] = '�ʴ���¡�âͧ�������͡����Ӥѭ����Ѻ���¡�͡�繻��������ҧ�����´';
		$TR_STRS[strtolower('Blog - Content Section Archive')] = '���͡ - ��Ǵ�������Ӥѭ';
		$TR_STRS[strtolower('Shows a listing of Content items archived for a particular section')] = '�ʴ���¡�âͧ������ �������Ӥѭ����Ѻ�������ͧ���������ҧ�����´';
		$TR_STRS[strtolower('Blog - Content Category')] = '���͡ - ������������';
		$TR_STRS[strtolower('Displays a page of content items from multiple categories in a blog format')] = '�ʴ�˹�Ңͧ�����Ҩҡ���� � ��������ٻẺ���͡';
		$TR_STRS[strtolower('Blog - Content Section')] = '���͡ - ��Ǵ������';
		$TR_STRS[strtolower('Displays a page of content items from multiple sections in a blog format')] = '�ʴ�˹�Ңͧ�����Ҩҡ���� � ��Ǵ��ٻẺ���͡';
		$TR_STRS[strtolower('Table - Content Category')] = '���ҧ - ������������';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = '�ʴ�����ͧ���ҧ�ͧ����������Ѻ���¡�͡�繻��������ҧ�����´';
		$TR_STRS[strtolower('Link - Content Item')] = '���������§ - ���������¡��';
		$TR_STRS[strtolower('Creates a link to a published Content Item in full view')] = '���ҧ���������§ ��С�����������¡�������ͧ���';
		$TR_STRS[strtolower('Table - Content Section')] = '���ҧ - ��Ǵ������';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = '���ҧ��¡�âͧ�������¡�͡�繻���������Ѻ��Ǵ���ҧ�����´';
		$TR_STRS[strtolower('Link - Static Content')] = '���������§ -  �������൵ԡ';
		$TR_STRS[strtolower('Creates a link to Static Content Item')] = '���ҧ��¡��������§�֧����������ѹ�ͧ��¡��㹺ѭ��';
		$TR_STRS[strtolower('Table - Newsfeed Category')] = '���ҧ - �������ͧ�������';
		$TR_STRS[strtolower('Shows a Table view of Newsfeed items for a particular Category')] = '�ʴ�����ͧ���ҧ�ͧ���������¡��㹺ѭ������Ѻ���������ҧ�����´';
		$TR_STRS[strtolower('Link - Newsfeed')] = '���������§ - �������Ẻ��͹';
		$TR_STRS[strtolower('Creates a link to an individual Published Newsfeed')] = '���ҧ���������§�֧�����ѹ ��С�Ȣ������Ẻ��͹';
		$TR_STRS[strtolower('Separator / Placeholder')] = '����¡ / ���˹觷��';
		$TR_STRS[strtolower('Creates a menu placeholder or separator')] = '���ҧ���ٵ��˹觷�� ���� ����¡';
		$TR_STRS[strtolower('Link - Url')] = '���������§ - Url';
		$TR_STRS[strtolower('Creates url link')] = '���ҧ url ���������§';
		$TR_STRS[strtolower('Table - Weblink Category')] = '���ҧ - ���������§���������';
		$TR_STRS[strtolower('Shows a Table view of Weblink items for a particular Weblink Category')] = '�ʴ�����ͧ���ҧ�ͧ���������§������������¡������Ѻ���������������§������ҧ�����´';
		$TR_STRS[strtolower('Wrapper')] = 'Wrapper';
		$TR_STRS[strtolower('Creates an IFrame that will wrap an external page/site into Mambo')] = '���ҧẺ  IFrame ���ʴ�˹����纨ҡ��¹͡�������䫵������';


	}


}

?>