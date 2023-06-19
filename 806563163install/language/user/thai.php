<?php
/**
* @version $Id: thai.php,v 1.2 2006/01/04 04:44:09 laithaidev Exp $
* @package Mambo LaiThai Project
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
//defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// Language and Encode of frontend language
DEFINE('_LANGUAGE','th');
DEFINE('_ISO','charset=tis-620');

/** common */
DEFINE('_NOT_AUTH','�����¢�������ǹ�������Ѻ��Ҫԡ��ҹ��');
DEFINE('_DO_LOGIN','�س��ͧ��� ��͡�Թ �����ҹ ?');
DEFINE('_VALID_AZ09',"��س��������� %s.  �������ͧ��ҧ (space), �ӹǹ����ӡ��� %d ����ѡ�� ������ѡ�� 0-9,a-z,A-Z");
DEFINE('_CMN_YES',' �� ');
DEFINE('_CMN_NO',' ��� ');
DEFINE('_CMN_SHOW',' �ʴ� ');
DEFINE('_CMN_HIDE',' ��͹ ');

DEFINE('_CMN_NAME','����');
DEFINE('_CMN_DESCRIPTION','��������´');
DEFINE('_CMN_SAVE','�ѹ�֡');
DEFINE('_CMN_CANCEL','¡��ԡ');
DEFINE('_CMN_PRINT','�����');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','�����');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','�Ҩҡ');
DEFINE('_CMN_ORDERING','�ӴѺ������§');
DEFINE('_CMN_ACCESS','�Է��㹡����Ҷ֧');
DEFINE('_CMN_SELECT','���͡');

DEFINE('_CMN_NEXT','����');
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV','��͹��Ѻ');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','��� ���§�ӴѺ');
DEFINE('_CMN_SORT_ASC','���§�ҡ������ҡ');
DEFINE('_CMN_SORT_DESC','���§�ҡ�ҡ�ҹ���');

DEFINE('_CMN_NEW','����');
DEFINE('_CMN_NONE','None');
DEFINE('_CMN_LEFT','Left');
DEFINE('_CMN_RIGHT','Right');
DEFINE('_CMN_CENTER','Center');
DEFINE('_CMN_ARCHIVE','�͡����Ӥѭ');
DEFINE('_CMN_UNARCHIVE','¡��ԡ�͡����Ӥѭ');
DEFINE('_CMN_TOP','��');
DEFINE('_CMN_BOTTOM','��ҧ');

DEFINE('_CMN_PUBLISHED','�����');
DEFINE('_CMN_UNPUBLISHED','�������');

DEFINE('_CMN_EDIT_HTML','��� HTML');
DEFINE('_CMN_EDIT_CSS','��� CSS');

DEFINE('_CMN_DELETE','ź');

DEFINE('_CMN_FOLDER','������');
DEFINE('_CMN_SUBFOLDER','����������');
DEFINE('_CMN_OPTIONAL','��͡�˹��������');
DEFINE('_CMN_REQUIRED','���繵�ͧ��͡');

DEFINE('_CMN_CONTINUE','����');

DEFINE('_CMN_NEW_ITEM_LAST','����������������ѧ');
DEFINE('_CMN_NEW_ITEM_FIRST','�����������ҡ�͹');
DEFINE('_LOGIN_INCOMPLETE','��س��������ż����������ʼ�ҹ���ú��ǹ');
DEFINE('_LOGIN_BLOCKED','��͡�Թ�ͧ�س �١�ЧѺ�����ҹ. ��سҵԴ��ͼ������к�');
DEFINE('_LOGIN_INCORRECT','���ͼ�����������ʼ�ҹ ���١��ͧ  ��س��ͧ����');
DEFINE('_LOGIN_NOADMINS','�س�������ö��͡�Թ ��  ���ͧ�ҡ�������к� �ѧ�����Ѵ��������������');
DEFINE('_CMN_JAVASCRIPT','!����͹! ����ʤ�Ի ������Դ��ҹ');

DEFINE('_NEW_MESSAGE','�բ�ͤ��������觶֧�س');
DEFINE('_MESSAGE_FAILED','��ͤ����������ö�������ͧ�ҡ User ������Դ��ҹ��ź�͡��');

DEFINE('_CMN_IFRAMES', '�������ͧ�س�������ö�ʴ������');

DEFINE('_INSTALL_WARN','���ͤ�����ʹ��¡�س�ź������ ������ ������� Installlation �͡��͹');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>������ŵ�ջѭ�ҡ�س��ͧ����:</b></font>');
DEFINE('_NO_PARAMS','������駤�� ���������� ����Ѻ����');
DEFINE('_HANDLER','������������˹�����Ѻ��Դ���');

/** mambots */
DEFINE('_TOC_JUMPTO','�Ѫ�� ������');

/**  content */
DEFINE('_READ_MORE','��ҹ�������������...');
DEFINE('_READ_MORE_REGISTER','ŧ����¹ ������ҹ���������ҡ���...');
DEFINE('_MORE','�������������...');
DEFINE('_ON_NEW_CONTENT', "�� �͹�鹷����� ���� �� [ %s ]  ��Ǣ�� [ %s ]  �ҡ section [ %s ]  ��� category  [ %s ]" );
DEFINE('_SEL_CATEGORY','- ���͡ ������ -');
DEFINE('_SEL_SECTION','- ���͡ ��Ǵ���� -');
DEFINE('_SEL_AUTHOR','- ���͡ ����� -');
DEFINE('_SEL_POSITION','- ���͡ ���˹� -');
DEFINE('_SEL_TYPE','- ���͡ ��Դ -');
DEFINE('_EMPTY_CATEGORY',' ����պ������ ��������� ');
DEFINE('_EMPTY_BLOG','����պ�����');
DEFINE('_NOT_EXIST','��辺˹�ҷ��س���������¡�� <br />��س����͡˹�Ң����Ũҡ������ѡ');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','ŧ��ṹ');
DEFINE('_BUTTON_RESULTS','���Ѿ��');
DEFINE('_USERNAME','���ͼ����');
DEFINE('_LOST_PASSWORD','������ʼ�ҹ?');
DEFINE('_PASSWORD','���ʼ�ҹ');
DEFINE('_BUTTON_LOGIN','�������к�');
DEFINE('_BUTTON_LOGOUT','�͡�ҡ�к�');
DEFINE('_NO_ACCOUNT','�ѧ�����ŧ����¹?');
DEFINE('_CREATE_ACCOUNT','ŧ����¹����');
DEFINE('_VOTE_POOR','���ѧ');
DEFINE('_VOTE_BEST','���ҡ');
DEFINE('_USER_RATING','�дѺ�����');
DEFINE('_RATE_BUTTON','����ṹ');
DEFINE('_REMEMBER_ME','�Ӣ����š����͡�Թ');

/** contact.php */
DEFINE('_ENQUIRY','�Դ���/�ͺ���');
DEFINE('_ENQUIRY_TEXT','���������Ţ�ͤ��� (�Դ���/�ͺ���) �ҡ');
DEFINE('_COPY_TEXT','��������Ң�ͤ����ͧ�س����觶֧������ %s');
DEFINE('_COPY_SUBJECT','�Ѵ�͡�ҡ: ');
DEFINE('_THANK_MESSAGE','�ͺ�س����Ѻ ��ͤ����ͧ�س');
DEFINE('_CLOAKING','����Ź��ж١��ͧ�ѹ�ҡ����ͷ ��س��ͧ�Դ�����ҹ����ʤ�Ի��͹');
DEFINE('_CONTACT_HEADER_NAME','����');
DEFINE('_CONTACT_HEADER_POS','���˹�');
DEFINE('_CONTACT_HEADER_EMAIL','�����');
DEFINE('_CONTACT_HEADER_PHONE','���Ѿ��');
DEFINE('_CONTACT_HEADER_FAX','�����');
DEFINE('_CONTACTS_DESC','��¡�õԴ�������Ѻ���䪵�.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','�Դ���/�ͺ���');
DEFINE('_EMAIL_DESCRIPTION','�觢ͤ��������������:');
DEFINE('_NAME_PROMPT',' ��س������ͤس:');
DEFINE('_EMAIL_PROMPT',' ��س��������Ţͧ�س:');
DEFINE('_MESSAGE_PROMPT',' ��ͤ�������ͧ��õԴ���:');
DEFINE('_SEND_BUTTON','�觢�ͤ���');
DEFINE('_CONTACT_FORM_NC','��سҵ�Ǩ�ͺ�����١��ͧ�ͧ�����ŷ�����.');
DEFINE('_CONTACT_TELEPHONE','�������Ѿ��: ');
DEFINE('_CONTACT_MOBILE','��Ͷ��: ');
DEFINE('_CONTACT_FAX','�����: ');
DEFINE('_CONTACT_EMAIL','�����: ');
DEFINE('_CONTACT_NAME','����: ');
DEFINE('_CONTACT_POSITION','���˹�: ');
DEFINE('_CONTACT_ADDRESS','��ҹ�Ţ���: ');
DEFINE('_CONTACT_MISC','�������������: ');
DEFINE('_CONTACT_SEL','��ͧ��õԴ��͡Ѻ:');
DEFINE('_CONTACT_NONE','�������������´��õԴ���.');
DEFINE('_EMAIL_A_COPY','���Ң�ͤ��������ѧ����Ťس');
DEFINE('_CONTACT_DOWNLOAD_AS','�����Ŵ��������');
DEFINE('_VCARD','�ա���');

/** pageNavigation */
DEFINE('_PN_PAGE','˹��');
DEFINE('_PN_OF','�ҡ');
DEFINE('_PN_START','˹���á');
DEFINE('_PN_PREVIOUS','��͹��Ѻ');
DEFINE('_PN_NEXT','˹�ҶѴ�');
DEFINE('_PN_END','˹���ش����');
DEFINE('_PN_DISPLAY_NR','�ʴ�  #');
DEFINE('_PN_RESULTS','���Ѿ��');

/** emailfriend */
DEFINE('_EMAIL_TITLE','�����������͹');
DEFINE('_EMAIL_FRIEND','������Ţ����Ź��������͹.');
DEFINE('_EMAIL_FRIEND_ADDR',"����Ţͧ���͹�س:");
DEFINE('_EMAIL_YOUR_NAME','���ͧ͢�س:');
DEFINE('_EMAIL_YOUR_MAIL','����Ţͧ�س:');
DEFINE('_SUBJECT_PROMPT',' ��Ǣ��:');
DEFINE('_BUTTON_SUBMIT_MAIL','�������');
DEFINE('_BUTTON_CANCEL','¡��ԡ');
DEFINE('_EMAIL_ERR_NOINFO','��س��������ŷ��١��ͧ�ͧ�س����������Ţͧ���͹����ͧ�����');
DEFINE('_EMAIL_MSG',' �����ŷ��س���Ѻ�ҡ��� "%s" ��١�������س�� %s ( %s ).

You can access it at the following url: 
%s');
DEFINE('_EMAIL_INFO','�����Ź��Ѵ����');
DEFINE('_EMAIL_SENT','�����Ź����Ѵ����ѧ');
DEFINE('_PROMPT_CLOSE','�Դ˹�ҵ�ҧ���');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', '��¹��');
DEFINE('_WRITTEN_BY', '��¹��');
DEFINE('_LAST_UPDATED', '�������ش�����');
DEFINE('_BACK','[ ��͹��Ѻ ]');
DEFINE('_LEGEND','�Ӻ�����');
DEFINE('_DATE','�ѹ���');
DEFINE('_ORDER_DROPDOWN','������§�ӴѺ');
DEFINE('_HEADER_TITLE','��������ͧ');
DEFINE('_HEADER_AUTHOR','�����¹');
DEFINE('_HEADER_SUBMITTED','��¹�����');
DEFINE('_HEADER_HITS','����');
DEFINE('_E_EDIT','���');
DEFINE('_E_ADD','����');
DEFINE('_E_WARNUSER','��س����͡��Ҩ� ¡��ԡ ���� �ѹ�֡ ��觷����ѧ�������');
DEFINE('_E_WARNTITLE','��س���� ��������ͧ���¤�Ѻ');
DEFINE('_E_WARNTEXT','��س�����ͤ������蹹�����ͧ���¤�Ѻ');
DEFINE('_E_WARNCAT','��س����͡��������¡�� ');
DEFINE('_E_CONTENT','������');
DEFINE('_E_TITLE','��������ͧ:');
DEFINE('_E_CATEGORY','������:');
DEFINE('_E_INTRO','��ͤ������蹹�');
DEFINE('_E_MAIN','��������ѡ');
DEFINE('_E_MOSIMAGE','��� {mosimage}');
DEFINE('_E_IMAGES','�ٻ�Ҿ');
DEFINE('_E_GALLERY_IMAGES','����ٻ�Ҿ');
DEFINE('_E_CONTENT_IMAGES','�ٻ�Ҿ������');
DEFINE('_E_EDIT_IMAGE','����ٻ�Ҿ');
DEFINE('_E_INSERT','�á');
DEFINE('_E_UP','���');
DEFINE('_E_DOWN','ŧ');
DEFINE('_E_REMOVE','����͡');
DEFINE('_E_SOURCE','�����:');
DEFINE('_E_ALIGN','���˹觢�ͤ���:');
DEFINE('_E_ALT','��ͤ���͸Ժ���Ҿ:');
DEFINE('_E_BORDER','��ͺ:');
DEFINE('_E_CAPTION','�Ӻ������Ҿ');
DEFINE('_E_APPLY','��ҹ');
DEFINE('_E_PUBLISHING','����');
DEFINE('_E_STATE','ʶҹ�:');
DEFINE('_E_AUTHOR_ALIAS','���ͼ����¹:');
DEFINE('_E_ACCESS_LEVEL','�дѺ�����Ҷ֧:');
DEFINE('_E_ORDERING','��èѴ���§:');
DEFINE('_E_START_PUB','���������������ѹ���:');
DEFINE('_E_FINISH_PUB','����ش�ѹ���:');
DEFINE('_E_SHOW_FP','�ʴ����˹���á:');
DEFINE('_E_HIDE_TITLE','��͹��������ͧ:');
DEFINE('_E_METADATA','���Ҵҵ��');
DEFINE('_E_M_DESC','��͸Ժ��:');
DEFINE('_E_M_KEY','�ӷ����㹡�ä���:');
DEFINE('_E_SUBJECT','��Ǣ��:');
DEFINE('_E_EXPIRES','�ѹ�������:');
DEFINE('_E_VERSION','�������:');
DEFINE('_E_ABOUT','����ǡѺ');
DEFINE('_E_CREATED','��¹�����:');
DEFINE('_E_LAST_MOD','�������ش�����:');
DEFINE('_E_HITS','����:');
DEFINE('_E_SAVE','�ѹ�֡');
DEFINE('_E_CANCEL','¡��ԡ');
DEFINE('_E_REGISTERED','੾����Ҫԡ��ҹ��');
DEFINE('_E_ITEM_INFO','��������´����ǡѺ��¡��');
DEFINE('_E_ITEM_SAVED','�ѹ�֡��¡�����º��������.');
DEFINE('_ITEM_PREVIOUS','&lt; ��͹˹��');
DEFINE('_ITEM_NEXT','�Ѵ� &gt;');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','������͡����Ӥѭ���Ǵ�������س��ͧ�ա����');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','������͡����Ӥѭ㹻���������س��ͧ�ա����');
DEFINE('_HEADER_SECTION_ARCHIVE','��Ǵ���� �͡����Ӥѭ');
DEFINE('_HEADER_CATEGORY_ARCHIVE','������ �͡����Ӥѭ');
DEFINE('_ARCHIVE_SEARCH_FAILURE','������͡����Ӥѭ� %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','���͡����Ӥѭ� %s %s');	// values are month then year
DEFINE('_FILTER','�Ҥ�');
DEFINE('_ORDER_DROPDOWN_DA','�ѹ��� ��ҡ�͹');
DEFINE('_ORDER_DROPDOWN_DD','�ѹ��� �����͹');
DEFINE('_ORDER_DROPDOWN_TA','��Ǣ�� ��ҡ�͹');
DEFINE('_ORDER_DROPDOWN_TD','��Ǣ�� �����͹');
DEFINE('_ORDER_DROPDOWN_HA','���� ��ҡ�͹');
DEFINE('_ORDER_DROPDOWN_HD','���� �����͹');
DEFINE('_ORDER_DROPDOWN_AUA','�����¹ ��ҡ�͹');
DEFINE('_ORDER_DROPDOWN_AUD','�����¹ �����͹');
DEFINE('_ORDER_DROPDOWN_O','��èѴ���§');

/** poll.php */
DEFINE('_ALERT_ENABLED','�س��ͧ��˹���� Cookies �ӧҹ����!');
DEFINE('_ALREADY_VOTE','�س��ŧ��ṹ���������ѺẺ���Ǩ�ѹ���!');
DEFINE('_NO_SELECTION','����ѧ��������͡������͡�������� �ô���͡�ա����');
DEFINE('_THANKS','�ͺ�س����Ѻ���ŧ��ṹ!');
DEFINE('_SELECT_POLL','���͡��¡��Ẻ���Ǩ');

/** classes/html/poll.php */
DEFINE('_JAN','���Ҥ�');
DEFINE('_FEB','����Ҿѹ��');
DEFINE('_MAR','�չҤ�');
DEFINE('_APR','����¹');
DEFINE('_MAY','����Ҥ�');
DEFINE('_JUN','�Զع�¹');
DEFINE('_JUL','�á�Ҥ�');
DEFINE('_AUG','�ԧ�Ҥ�');
DEFINE('_SEP','�ѹ��¹');
DEFINE('_OCT','���Ҥ�');
DEFINE('_NOV','��ɨԡ�¹');
DEFINE('_DEC','�ѹ�Ҥ�');
DEFINE('_POLL_TITLE','�š��ŧ��ṹ');
DEFINE('_SURVEY_TITLE','��Ǣ��Ẻ���Ǩ:');
DEFINE('_NUM_VOTERS','�ӹǹ���ŧ��ṹ');
DEFINE('_FIRST_VOTE','ŧ��ṹ�����á');
DEFINE('_LAST_VOTE','ŧ��ṹ��������ش');
DEFINE('_SEL_POLL','���͡ ��:');
DEFINE('_NO_RESULTS','�ѧ����ռ��Ѿ������Ѻ�Ź��.');

/** registration.php */
DEFINE('_ERROR_PASS','������, ��辺�������㹷���¹');
DEFINE('_NEWPASS_MSG','��Ҫԡ�������� $checkusername 㹡����Ѥ�����Ҫԡ\n'
.'�ͧ��� $mosConfig_live_site ���������㹡����͡�Թ���������Ѵ�����ʼ�ҹ����\n\n'
.' ��������ͧ�س���: $newpass\n\n�ҡ�س����������к��Ѵ������Ź�������\����ͧ�繡ѧ��.'
.' �������ʼ�ҹ�ж١���ҷҧ����Ţͧ�س��ҹ�� ������դ���蹷�Һ'
.' �س����ö�� ���ʼ�ҹ�����͡�Թ �������¹�����ʷ��س��ͧ������ͧ.');
DEFINE('_NEWPASS_SUB','$_sitename :: ���ʻ�Шӵ������Ѻ - $checkusername');
DEFINE('_NEWPASS_SENT','����������ѹ�֡��ж١�������!');
DEFINE('_REGWARN_NAME','��س�������  �ͧ�س');
DEFINE('_REGWARN_UNAME','��س�����������Ѻ��͡�Թ');
DEFINE('_REGWARN_MAIL','��س��������Ţͧ�س');
DEFINE('_REGWARN_PASS','������ʼ�ҹ����ͧ�����ä, ����ѡ�õ�ͧ�ҡ���� 6 ��� ������ѡ�� 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','�׹�ѹ���ʼ�ҹ�ա����');
DEFINE('_REGWARN_VPASS2','�س������� 2 �����������͹�ѹ, ��س�����ա����');
DEFINE('_REGWARN_INUSE','���͹����١��ҹ����. �ô��������');
DEFINE('_REGWARN_EMAIL_INUSE', '����Ź����ŧ����¹���� ��Ҥس������ʼ�ҹ���� "������ʼ�ҹ" ��Ҩ������ʼ�ҹ�������س');
DEFINE('_SEND_SUB','��������´��Ҫԡ���� %s � %s');
DEFINE('_USEND_MSG_ACTIVATE', '���ʴդس %s,

�ͺ�س�����Ѥ���Ҫԡ %s. �س����ö�����ҹ��ѹ�շ��س�׹�ѹ
�ҡ��ͧ����׹�ѹ ���� link ���� copy �����ҧ 㹪�ͧ address ���ҫ�����ͧ�س:
%s

��ѧ�ҡ�׹�ѹ���ǡ�س���͡�Թ������ %s ���� ���ͼ���� ������ʼ�ҹ������:

���ͼ���� - %s
���ʼ�ҹ - %s');
DEFINE('_USEND_MSG', "���ʴդس %s,

�ͺ�س�����Ѥ���Ҫԡ %s.

�س����ö��͡�Թ�����ҹ %s ���� ���ͼ���� ��� ���ʼ�ҹ ���س��ŧ����¹��� ");
DEFINE('_USEND_MSG_NOPASS','���ʴդس $name,\n\n �س��������Ҫԡ���� $mosConfig_live_site.\n'
.'�س����ö��͡�Թ���������  $mosConfig_live_site ���� ���ͼ���� ��� ���ʼ�ҹ ���س��ŧ����¹���\n\n'
.'��ͤ�������繢�ͤ����ѵ��ѵԨҡ�к�  �س�����繵�ͧ�ͺ��Ѻ\n');
DEFINE('_ASEND_MSG','���ʴ� %s,

����Ҫԡ����ŧ����¹���ѧ %s.
��ҹ��ҧ����� ��������´�ͧ��Ҫԡ:

���� - %s
e-mail - %s
���ͼ���� - %s

��ͤ�������繢�ͤ����ѵ��ѵԨҡ�к�  �س�����繵�ͧ�ͺ��Ѻ');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">ŧ����¹�������Ǥ�Ѻ!</div><br />&nbsp;&nbsp;'
.'�س����ö�������ѹ�<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">ŧ����¹�������Ǥ�Ѻ!</div><br />�س����ö�������ѹ��');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">���ŧ����¹��������ó�!</div><br />�س��ͧ�׹�ѹ��Ǥس��͹�������Դ����ŷ��ŧ����¹������Ǥ�����駤������չ�ѹ�ҡ�ѹ����ö�����ҹ��.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">���ŧ����¹��������ó�!</div><br />����׹�ѹ��������ó�س����ö��͡�Թ�����ҹ���� ���ͼ���� ��� ���ʼ�ҹ ���س��ŧ����¹���');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">����׹�ѹ����ҹ</div><br />����ժ��ͼ����������㹰ҹ������.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','������ʼ�ҹ?');
DEFINE('_NEW_PASS_DESC','��س����  ��������Ѻ��͡�Թ �������� �ͧ�س ���Ǥ�ԡ������ �����ʼ�ҹ<br />'
.'�س�����Ѻ���ʼ�ҹ�ҧ�����  ���������������������Ѻ��� 㹡����͡�Թ�����ҹ');
DEFINE('_PROMPT_UNAME','��������Ѻ��͡�Թ:');
DEFINE('_PROMPT_EMAIL','�����:');
DEFINE('_BUTTON_SEND_PASS','�����ʼ�ҹ');
DEFINE('_REGISTER_TITLE','ŧ����¹');
DEFINE('_REGISTER_NAME','����:');
DEFINE('_REGISTER_UNAME','����㹡����͡�Թ:');
DEFINE('_REGISTER_EMAIL','�����:');
DEFINE('_REGISTER_PASS','���ʼ�ҹ:');
DEFINE('_REGISTER_VPASS','�׹�ѹ���ʼ�ҹ:');
DEFINE('_REGISTER_REQUIRED','��س���������� (*) ���ú��ǹ');
DEFINE('_BUTTON_SEND_REG','�� ���ŧ����¹');
DEFINE('_SENDING_PASSWORD','���ʼ�ҹ�ͧ�س�ж١����ѧ����ŷ��������<br />����ͤس���Ѻ���ʼ�ҹ'
.' �س����ö������͡�Թ���������¹�����������ͧ�����ͧ���');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','����');
DEFINE('_PROMPT_KEYWORD','�ӷ�������');
DEFINE('_SEARCH_MATCHES','�� %d ��ͤ���');
DEFINE('_CONCLUSION','��� $totalRows �����ŷ�辺 ���Ң�����  <b>$searchword</b> ����');
DEFINE('_NOKEYWORD','��辺������');
DEFINE('_IGNOREKEYWORD','˹���������¤�㹹���������ö������');
DEFINE('_SEARCH_ANYWORDS','�ҧ��');
DEFINE('_SEARCH_ALLWORDS','�ء��');
DEFINE('_SEARCH_PHRASE','�ء����ѡ��');
DEFINE('_SEARCH_NEWEST','�����͹');
DEFINE('_SEARCH_OLDEST','��ҡ�͹');
DEFINE('_SEARCH_POPULAR','�ش�͵');
DEFINE('_SEARCH_ALPHABETICAL','����ӴѺ�ѡ��');
DEFINE('_SEARCH_CATEGORY','��Ǵ���� /������');

/** templates/*.php */
DEFINE('_DATE_FORMAT','l, F d Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
/** DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y"); //Uses PHP's strftime Command Format */
/** DEFINE("_DATE_FORMAT_LC2","%A, %d %B %Y %H:%M"); */
DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%A, %d %B %Y %H:%M");
DEFINE('_SEARCH_BOX','����...');
DEFINE('_NEWSFLASH_BOX','���Ǵ�ǹ!');
DEFINE('_MAINMENU_BOX','������ѡ');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','������Ҫԡ');
DEFINE('_HI','���ʴ�, ');

/** user.php */
DEFINE('_SAVE_ERR','��س������������ú�ء��ͧ');
DEFINE('_THANK_SUB','�͢ͺ�س����Ѻ�����ŷ��س�������. ���˹�ҷ��зӡ�õ�Ǩ�ͺ��͹���йӢ���ʴ�������觹��');
DEFINE('_UP_SIZE','��س�����Ҿ��Ҵ����Թ 15kb ');
DEFINE('_UP_EXISTS','�ٻ $userfile_name �������������. ��س�����¹���������觢���������ա����');
DEFINE('_UP_COPY_FAIL','����觢�������������');
DEFINE('_UP_TYPE_WARN','�ٻ�Ҿ��è����Ҿ����չ��ʡ�� gif, ���� jpg ');
DEFINE('_MAIL_SUB','��Ҫԡ�觢��������ѧ���');
DEFINE('_MAIL_MSG','���ʴ� $adminName,\n\n����Ҫԡ���� $type, $title, �� $author'
.' ��������� $mosConfig_live_site website.\n'
.'��س������ѧ $mosConfig_live_site/administrator ���͵�Ǩ�ͺ���͹��ѵ� $type.\n\n'
.'��ͤ������١������Ҵ����к��ѵ��ѵ� ���������س��Һ��ҹ�� �����繵�ͧ�ͺ��Ѻ\n');
DEFINE('_PASS_VERR1','��ҵ�ͧ�������¹���ʼ�ҹ ��س�������ʼ�ҹ�ա���������׹�ѹ');
DEFINE('_PASS_VERR2','��ҵ�ͧ�������¹���ʼ�ҹ ��Ǩ�ͺ��������� ���ʼ�ҹ ����ͧ��������͹�ѹ');
DEFINE('_UNAME_INUSE','������Ҫԡ����ռ�����������');
DEFINE('_UPDATE','���');
DEFINE('_USER_DETAILS_SAVE','��ѹ�֡�����Ţͧ�س����');
DEFINE('_USER_LOGIN','��͡�Թ �����ҹ');

/** components/com_user */
DEFINE('_EDIT_TITLE','��䢢����Ţͧ�س');
DEFINE('_YOUR_NAME','���ͧ͢�س:');
DEFINE('_EMAIL','�����');
DEFINE('_UNAME','����㹡����͡�Թ:');
DEFINE('_PASS','���ʼ�ҹ:');
DEFINE('_VPASS','�׹�ѹ���ʼ�ҹ:');
DEFINE('_SUBMIT_SUCCESS','����觢������������º����!');
DEFINE('_SUBMIT_SUCCESS_DESC','�����Ţͧ�س�١�Ѵ�����Ѻ����������繷�����º����  ��Ҩе�Ǩ�ͺ ��йӢ���ʴ������䫵���觹��������.');
DEFINE('_WELCOME','�Թ�յ�͹�Ѻ!');
DEFINE('_WELCOME_DESC','�͵�͹�Ѻ������ ��ǹ�ͧ��Ҫԡ');
DEFINE('_CONF_CHECKED_IN','��Ǩ�ͺ ��� ������������');
DEFINE('_CHECK_TABLE','��Ǩ�ͺ���ҧ');
DEFINE('_CHECKED_IN','��Ǩ�ͺ ');
DEFINE('_CHECKED_IN_ITEMS',' ��������¡��');
DEFINE('_PASS_MATCH','���ʼ�ҹ�������͹�ѹ��سҵ�Ǩ�ͺ');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','��س������ʹ��¤�Ѻ');
DEFINE('_BNR_CONTACT','�س����������������´��õԴ���');
DEFINE('_BNR_VALID_EMAIL','��س���������');
DEFINE('_BNR_CLIENT','�س��������͡��Ǵ����');
DEFINE('_BNR_NAME','��س��������������ɳ�');
DEFINE('_BNR_IMAGE','��س�����ٻ�������ɳ�');
DEFINE('_BNR_URL','��س������������§(URL)');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','�س��ӡ����͡�Թ����к�����!');
DEFINE('_LOGOUT','��ԡ����� �����͡�ҡ�к�');
DEFINE('_LOGIN_TEXT','�������Ҫԡ������ʼ�ҹ ���͡����������ҧ����ó�');
DEFINE('_LOGIN_SUCCESS','�س��ӡ����͡�Թ����к�����!');
DEFINE('_LOGOUT_SUCCESS','�س��ӡ���͡�ҡ�к�����!');
DEFINE('_LOGIN_DESCRIPTION','��ǹ�������Ѻ��Ҫԡ��ҹ��');
DEFINE('_LOGOUT_DESCRIPTION','�س��ͧ��÷����͡�ҡ�к�����!');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','�����纹��ʹ�');
DEFINE('_WEBLINKS_DESC','�ҧ��Ҩо������Ǻ�����纷���ջ���ª�� �������ء��ҹ <br/>'
.'����Ң����ŵ�ҧ � �ҡ���觢����Ź��  �·�ҹ����ö���͡��������� ������͡ URL ������Ҫ����.');
DEFINE('_HEADER_TITLE_WEBLINKS','�����纹��ʹ�');
DEFINE('_SECTION','��Ǵ���� :');
DEFINE('_SUBMIT_LINK','�觢������й����');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','��͸Ժ�����:');
DEFINE('_NAME','�������:');
DEFINE('_WEBLINK_EXIST','���� ��� ��������������, ��س��ͧ����.');
DEFINE('_WEBLINK_TITLE','��� �ͧ�س��ͧ����Ǫ�������ͧ.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','����');
DEFINE('_FEED_ARTICLES','# ������');
DEFINE('_FEED_LINK','��駤�');

/** whos_online.php */
DEFINE('_WE_HAVE', '��й���� ');
DEFINE('_AND', ' ��� ');
DEFINE('_GUEST_COUNT','$guest_array �ؤ�ŷ����');
DEFINE('_GUESTS_COUNT','$guest_array �ؤ�ŷ����');
DEFINE('_MEMBER_COUNT','$user_array ��Ҫԡ');
DEFINE('_MEMBERS_COUNT','$user_array ��Ҫԡ');
DEFINE('_ONLINE',' �͹�Ź�');
DEFINE('_NONE','�������Ҫԡ�͹�Ź�');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','���� ');
DEFINE('_MEMBERS_STAT','�ӹǹ��Ҫԡ ');
DEFINE('_HITS_STAT','����');
DEFINE('_NEWS_STAT','�ӹǹ������� ');
DEFINE('_LINKS_STAT','����ԧ��');
DEFINE('_VISITORS','�����������');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','*  [mainmenu] �������á����ͧ��  *');
DEFINE('_MAINMENU_DEL','*  �س�������ö `ź` ���ٹ�������Ш��繵�ͧ�� *');
DEFINE('_MENU_GROUP','* Some `���ٺҧ��Դ����ö��˹��������Ҫԡ�дѺ�����ö���� *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', '��������´��Ҫԡ����' );
DEFINE('_NEW_USER_MESSAGE', '���ʴդس %s,


�س��������Ҫԡ���� %s �¼�����

�����ũ�Ѻ���س�����Ѻ���ͼ���� ���ʼ�ҹ ����Ѻ log ��͡�Թ�����ҹ %s:

���ͼ���� - %s
����ʼ�ҹ - %s


��ͤ�������繢�ͤ����ѵ��ѵԨҡ�к� �س����ͧ�ͺ��Ѻ');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "���Ѻ��ͤ����ҡ '%s'

Message:
" );

/** includes/mamboxml.php */
DEFINE('_DONT_USE_IMAGE','- ����ͧ������ٻ�Ҿ -');
DEFINE('_USE_DEFAULT_IMAGE','- ���ٻ�Ҿ��鹰ҹ -');

/** global frontend translation string */
global $TR_STRS;
$TR_STRS[strtolower('Banners')] = '�����ɳ�';
$TR_STRS[strtolower('Search')] = '����';
$TR_STRS[strtolower('Main Menu')] = '������ѡ';
$TR_STRS[strtolower('User Menu')] = '���ټ����';
$TR_STRS[strtolower('Other Menu')] = '�������� ';
$TR_STRS[strtolower('Login Form')] = 'Login Form';
$TR_STRS[strtolower('Syndicate')] = '��Ш�¢���';
$TR_STRS[strtolower('Statistics')] = 'ʶԵԡ����ҹ';
$TR_STRS[strtolower('Template Chooser')] = '���͡�����ŵ';
$TR_STRS[strtolower('Archive')] = '�͡����Ӥѭ';
$TR_STRS[strtolower('Sections')] = '��Ǵ����';
$TR_STRS[strtolower('Related Items')] = '��¡�÷������Ǣ�ͧ';
$TR_STRS[strtolower('Wrapper')] = 'Wrapper';
$TR_STRS[strtolower('Newsflash')] = 'Newsflash';
$TR_STRS[strtolower('Polls')] = '����';
$TR_STRS[strtolower("Who's Online")] = "Who's Online";
$TR_STRS[strtolower('Random Image')] = '�����Ҿ';
$TR_STRS[strtolower('Top Menu')] = '���ٴ�ҹ��';
$TR_STRS[strtolower('Latest News')] = '�����������ش';
$TR_STRS[strtolower('Popular')] = '���Ѻ���������٧';

?>
