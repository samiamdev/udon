# phpMyAdmin SQL Dump
# version 2.5.3-rc2
# http://www.phpmyadmin.net
#
# ��ʵ�: localhost
# ����㹡�����ҧ: 23 �.�. 2011  11:03�.
# ��蹢ͧ���������: 5.0.86
# ��蹢ͧ PHP: 5.2.11
# 
# �ҹ������ : `banphue`
# 

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_activeuser`
#

CREATE TABLE `web_activeuser` (
  `ct_no` int(11) NOT NULL auto_increment,
  `ct_yyyy` int(4) NOT NULL default '0',
  `ct_mm` int(2) NOT NULL default '0',
  `ct_dd` int(2) NOT NULL default '0',
  `ct_ip` varchar(15) NOT NULL default '',
  `ct_count` int(2) NOT NULL default '0',
  `ct_time` int(20) NOT NULL default '0',
  PRIMARY KEY  (`ct_no`)
) ENGINE=MyISAM AUTO_INCREMENT=1   ;

#
# dump ���ҧ `web_activeuser`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_admin`
#

CREATE TABLE `web_admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(150) default NULL,
  `name` varchar(255) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `level` tinyint(4) NOT NULL default '0',
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `username` (`username`),
  KEY `password` (`password`),
  KEY `level` (`level`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

#
# dump ���ҧ `web_admin`
#

INSERT INTO `web_admin` VALUES (1, 'admin', 'f0cc68da195d9d620b6cfe05f6f07a62', '��ªѴʡ� �ԡ�ŷͧ', 'vt9vm@hotmail.com', 1, 'admin_1291354356_adm-04.jpg');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_alumnus`
#

CREATE TABLE `web_alumnus` (
  `id` int(5) NOT NULL auto_increment,
  `alum_id` varchar(10) NOT NULL default '',
  `first_name` varchar(30) default NULL,
  `last_name` varchar(40) default NULL,
  `nic_name` varchar(20) default NULL,
  `birthday` varchar(20) default NULL,
  `age` char(2) default NULL,
  `sex` char(1) default NULL,
  `picture` varchar(30) default '0',
  `numid` varchar(13) default NULL,
  `schid` varchar(5) default NULL,
  `yearfin` varchar(4) default NULL,
  `email` varchar(40) default NULL,
  `website` varchar(50) default NULL,
  `address` varchar(100) NOT NULL,
  `amper` varchar(40) NOT NULL,
  `province` varchar(20) default NULL,
  `school` varchar(100) default NULL,
  `WORK` varchar(100) default NULL,
  `hobby` varchar(100) default NULL,
  `COMMENT` varchar(100) default NULL,
  `icon` varchar(20) default NULL,
  `icq` varchar(10) default '0',
  `msn` varchar(50) default '0',
  `yahoo` varchar(30) default '0',
  `qq` varchar(10) default '0',
  `cam` char(1) default '0',
  `mic` char(1) default '0',
  `emo` char(3) default NULL,
  `worksta` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `alum_id` (`alum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4  ;

#
# dump ���ҧ `web_alumnus`
#

INSERT INTO `web_alumnus` VALUES (1, '0001', '�Է����', '�ح�����', '��', '10/04/2527', '26', '1', '', '1440500003615', '', '2530', 'vituru_59@hotmail.com', 'http://', '6/202 �.5', '��ͧ�����', '��ا෾��ҹ��', '', '����ѷ ��⪤�ѭ�ҷ�Ѿ�� �ӡѴ', '�������', '���ʴ����͹��ء����Ѻ', '144.gif', '0', '0', '0', '0', '0', '0', 'e1', '����ѷ ��⪤�ѭ�ҷ�Ѿ�� �ӡѴ', '0873384517', '10510');
INSERT INTO `web_alumnus` VALUES (2, '0002', '⪤���', '���ᾧ����', '���', '31/03/2530', '24', '1', '', '1440500089471', '', '2541', 'tapache@HOTMAIL.COM', 'http://', '66/9', '��蹪�', '�����ä��', '�ӧҹ', '��ا෾', '��蹴����', '���ʴէѺ', 'member.png', '0', '0', '0', '0', '0', '0', 'e1', '��ا෾', '0831513034', '44160');
INSERT INTO `web_alumnus` VALUES (3, '0003', '��� ����è��', '��ķ���', '�è��', '10/11/2528', '26', '1', '', '1440500017918', '', '2540', 'www.rungrot@hotmait.com', 'http://', '35/27 �.���Թ���', '�֧����', '��ا෾��ҹ��', '', '��ا෾', '�͹', '���ʴդ�Ѻ', 'member.png', '0', '0', '0', '0', '0', '0', 'e1', '��ا෾', '0851505114', '10230');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_block`
#

CREATE TABLE `web_block` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `blockname` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `sfile` varchar(10) NOT NULL,
  `code` text,
  `pblock` char(10) default '0',
  `sort` int(5) NOT NULL default '1',
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33  ;

#
# dump ���ҧ `web_block`
#

INSERT INTO `web_block` VALUES (1, 'mainmenu', '������ѡ', 'mainmenu', 'php', '', 'left', 1, 1);
INSERT INTO `web_block` VALUES (2, 'member', '�к���Ҫԡ', 'member', 'php', '', 'left', 2, 1);
INSERT INTO `web_block` VALUES (3, 'shoutbox', '�ҡ��ͤ���', 'shoutbox', 'php', '', 'left', 3, 1);
INSERT INTO `web_block` VALUES (4, 'linkimg', 'link banner', 'linkimg', 'php', '', 'left', 4, 0);
INSERT INTO `web_block` VALUES (5, 'poll', 'poll', 'poll', 'php', '', 'left', 5, 1);
INSERT INTO `web_block` VALUES (6, 'blog', 'blog ��Ҫԡ', 'blog', 'php', '', 'left', 6, 0);
INSERT INTO `web_block` VALUES (7, 'googlesla', '�����Ҩҡ google', 'googlesla', 'php', '', 'left', 7, 0);
INSERT INTO `web_block` VALUES (8, 'weather', '��ҡó��ҡ��', 'weather', 'php', '', 'left', 8, 0);
INSERT INTO `web_block` VALUES (9, 'googlesearch', '���Ҩҡ google', 'googlesearch', 'php', '', 'left', 9, 0);
INSERT INTO `web_block` VALUES (10, 'catblog', '��Ǵ���� blog', 'catblog', 'php', '', 'left', 10, 0);
INSERT INTO `web_block` VALUES (11, 'alumnus', '��Ҥ���������', 'alumnus', 'php', '', 'center', 1, 1);
INSERT INTO `web_block` VALUES (12, 'workboard', '�ç���/�ҹ', 'workboard', 'php', '', 'center', 2, 1);
INSERT INTO `web_block` VALUES (13, 'news2', '�ŧҹ�ҧ�Ԫҡ��', 'shownews2', 'php', '', 'center', 3, 1);
INSERT INTO `web_block` VALUES (14, 'news3', '��ý֡ͺ�� / �֡�Ҵ٧ҹ', 'shownews3', 'php', '', 'center', 4, 0);
INSERT INTO `web_block` VALUES (15, 'news4', '������÷����', 'shownews4', 'php', '', 'center', 5, 1);
INSERT INTO `web_block` VALUES (16, 'knowledge', '���� / �������', 'knowledge', 'php', '', 'center', 6, 0);
INSERT INTO `web_block` VALUES (17, 'download', '����� download', 'download', 'php', '', 'center', 7, 1);
INSERT INTO `web_block` VALUES (18, 'newsrss', 'newsrss', 'newsrss', 'php', '', 'center', 8, 0);
INSERT INTO `web_block` VALUES (19, 'norsopor', '���ǻ�Ш��ѹ', 'norsopor', 'php', '', 'center', 9, 0);
INSERT INTO `web_block` VALUES (20, 'blogcenter', '�������ѹ�ѧ', 'blogcenter', 'php', '', 'center', 10, 0);
INSERT INTO `web_block` VALUES (21, 'personnel', '����º�ؤ�ҡ�', 'personnel', 'php', '', 'right', 1, 1);
INSERT INTO `web_block` VALUES (22, 'calendar', '��ԷԹ�Ԩ����', 'calendar', 'php', '', 'right', 2, 1);
INSERT INTO `web_block` VALUES (23, 'gallery', '��ѧ���ٻ�Ҿ', 'gallery', 'php', '', 'right', 3, 0);
INSERT INTO `web_block` VALUES (24, 'oil', '�Ҥҹ���ѹ', 'oil', 'php', '', 'right', 4, 0);
INSERT INTO `web_block` VALUES (25, 'scrollerstop', '��ѧ�ٻ�Ҿ', 'scrollerstop', 'php', '', 'right', 6, 1);
INSERT INTO `web_block` VALUES (26, 'weather_flash', '��ҡó��ҡ��', 'weather_flash', 'php', '', 'right', 7, 0);
INSERT INTO `web_block` VALUES (27, 'counter', 'ʶԵԼ����������', 'counter', 'php', '', 'right', 8, 1);
INSERT INTO `web_block` VALUES (28, 'webboard', '��дҹ����ͺ', 'webboard', 'php', '', 'user1', 1, 1);
INSERT INTO `web_block` VALUES (29, 'rotator', '�����Ҿ����', 'rotator', 'php', '', 'user2', 1, 0);
INSERT INTO `web_block` VALUES (30, 'randomimg', '�����ٻ�Ҿ', 'randomimg', 'php', '', 'user2', 2, 0);
INSERT INTO `web_block` VALUES (31, 'flashslide', 'flashslide', 'flashslide', 'php', '', 'user2', 3, 1);
INSERT INTO `web_block` VALUES (32, 'news1', '���ǻ�Ъ�����ѹ��', 'shownews1', 'php', '', 'user2', 4, 1);
# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_blog`
#

CREATE TABLE `web_blog` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `topic` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `posted` varchar(100) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `update_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `pageview` int(11) NOT NULL default '0',
  `attach` varchar(100) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=3   ;

#
# dump ���ҧ `web_blog`
#

INSERT INTO `web_blog` VALUES (1, '2', '������ �����-�ѵ�شԺ-����ª�������', '��û�ا��������� <strong><em><span style="color: #f00">������ </span></em></strong>�շ����������ҡ㹻� �.�.2451 ��ʵ�Ҩ���� ��.�Ԥع���� ��ऴ� �������Է�������������������� ����ȭ���� �鹾���Ҽ�֡��', '<p>\r\n	��û�ا��������� <strong><em><span style="color: #f00">������ </span></em></strong>�շ����������ҡ㹻� �.�.2451 ��ʵ�Ҩ���� ��.�Ԥع���� ��ऴ� �������Է�������������������� ����ȭ���� �鹾���Ҽ�֡�չ�ӵ�ŷ��ʡѴ�ҡ������·��ŷ�������Ҥ���� ��� �ô��ٵ��ԡ ���������ͧ�����������������§�Ѻ�ػ������·��� ���������û�Ш��ѹ�ͧ��ǭ���蹷��������ѹ���������»�</p>\r\n<p>\r\n	�֧��駪����ʪҵԢͧ�ô��ٵ��ԡ���ʡѴ����� &quot;������&quot; ��ѧ�ҡ����騴�Է�Ժѵá�ü�Ե�ô��ٵ��ԡ㹻���ҳ�ҡ� �ѹ�繷���Ңͧ�ص��ˡ���������㹻Ѩ�غѹ</p>\r\n<p>\r\n	<br />\r\n	�������ա�â����ԧ�ҳԪ������á �������͡�ä�������ҭ������� ������������ ���¶֧ ����ͧ�ʪҵ� ��Ե�����Ըա�����������մ��¡ô ���������ô��������Ǩ֧�¡��ٵ�����͡�������ѧ&nbsp;</p>\r\n<p>\r\n	��кǹ��ü�Ե㹻Ѩ�غѹ������ҡ�颺ǹ��������������ѹ�ӻ���ѧ�ҧ��� ����ô���жѹ���͡ô��ſ��ԡ����س����� 130 ͧ�������� �����������¹�ӵ�š���� �ҡ��鹼�ҹ��кǹ�����ѡ����������������ͨ��Թ����쨹���������¡�ٵ���� �觼�ҹ��кǹ��÷ҧ��յ������ô�������͡ô���ä���ԡ �����繡ô��ٵ��ԡ ��м�ҹ��кǹ�������¹�ŧ�ҧ�������������δ�͡䫴� �����������¼�������Һ ��仼�ҹ��ǹ��ÿ͡��������ÿ͡�� �����������¼������� ���Ǽ�ҹ��鹵͹�ش���´��¡�÷���鵡��֡�������繼�֡������</p>\r\n<p>\r\n	�ҡ���鼧���� ���ͷ�����ѡ�ѹ�������� &quot;䪹����ʷ���ͧ�Թ���&quot; (Chinese Restaurant Syndrome) ���� &quot;�ä�ѵ�Ҥ�èչ&quot; ������ҹ����èչ�ѡ�鼧���ʡѹ�ҡ����ͧ �����ҡ�ê������͹�ٺ�Һ���ҡ ��� �˹�� �˹���� �鹤� ˹��͡ �ҧ���ռ��ᴧ�Դ��鹵����� ��˹��͡ ��������дǡ</p>\r\n<p>\r\n	����ª�켧���ʤ���������������� ��������ѹ���ҡԹ㹻���ҳ�ҡ�Թ� ��˹��������ú������Թ 2 ��͹�ҵ���ѹ&nbsp;</p>\r\n<p>\r\n	�ҡ�������ҡ�Թ仼����ʨ�价������ͧ��ǹ�Ǻ��������ԭ�Ժ� ����к��׺�ѹ���ͧ��ҧ��� ����� �к�����ҷ�� ��µ����� �������Դ���������੾������÷����ѡ���������ǹ�任�� ��ҧ �͡�ҡ�����˭ԧ�����ѧ��駤�����Һ������ҡ�Թ仨м�ҹ����͡�������ҧá������ҧ��¢ͧ�������ôҡѺ��á㹤������ ������á㹤�������Ѻ�š�з��ҡ�����ʴ���</p>\r\n<p>\r\n	�Ըա�����͡����������鼧���ʻ��� �ѧࡵ�ҡ��һ�зѺ��. ������͡���ͼ����ʷ���è���Ҫ�лԴ��֡���º����</p>\r\n', 'admin', '1272093318', '1272093318', 1, 116, '', '1');
INSERT INTO `web_blog` VALUES (2, '2', 'Ἱ��âͧ NASA 㹡���觴�������ѧࡵ��ó�ǧ�ҷԵ��', '<strong><em><span style="color: #f00">�ǧ�ҷԵ��</span></em></strong> �繾�ѧ��ѡ�ѹ�Ӥѭ���ͧ��ѧ��Ҿ�����ҡ�Ȣͧ�š ���������¹�ŧ� 㹴ǧ�ҷԵ���ռš�з��ҡ�Թ���Ҵ�ҹ��Ҿ�ҡ�Ⱥ��š��� ������͢��� Voice of America, Suzanne Presto ����§ҹ�', '<strong><em><span style="color: #f00">�ǧ�ҷԵ��</span></em></strong> �繾�ѧ��ѡ�ѹ�Ӥѭ���ͧ��ѧ��Ҿ�����ҡ�Ȣͧ�š ���������¹�ŧ� 㹴ǧ�ҷԵ���ռš�з��ҡ�Թ���Ҵ�ҹ��Ҿ�ҡ�Ⱥ��š���</p>\r\n\r\n	������͢��� Voice of America, Suzanne Presto ����§ҹ����ǡѺἹ��âͧ NASA ����ͧ�����ǡ�� ���Ѱ� 㹡���觴�������ѧࡵ��ó�ǧ�ҷԵ��������ѹ����ʺ�� ��觤Ҵ�ѹ��� ��������ѧࡵ��ó�ѧ����Ǩ����Ҿ�ͧ�ǧ�ҷԵ�����ҧ�ҷ�����º������Ѻ�����ѡ�Է����ʵ�����֡�� &quot;��Ҿ�ǡ��&quot; ����Ҩ�ռš�з���͡��������÷ҧ������� �к���ù���ͧ �������з�����俿�Һ��š</p>\r\n<p>\r\n	��ҡ���ó��ҧ� ���ǧ�ҷԵ�� ��������¹�ŧ�ʹ��������硢ͧ�ǧ�ҷԵ���� �����˵آͧ��觷��ѡ�Է����ʵ�����¡��� &quot;large particle events&quot; ���� &quot;��ҡ���ó�͹��Ҥ��Ҵ�˭�&quot; ��ҡ���ó�ѧ������ռš�з�����š�� ���ҧ����ͤ��駷���Դ俿�ҴѺ��Ҥ��ͧ���ഹ����� 7 ��������</p>\r\n<p>\r\n	Dean Pesnell �ѡ�Է����ʵ���Ш��ç��ô�������ѧࡵ��ó�ǧ�ҷԵ��ͧͧ�����ǡ�� ���Ѱ� ���� NASA ͸Ժ����� ������Դ &quot;��ҡ���ó�͹��Ҥ��Ҵ�˭�&quot; ���ǧ�ҷԵ�� ͹��Ҥ����ҹ�鹨����Ш���͡����ǧ�ǡ����к������� ��м�ҹ����ҷӻ�ԡ���ҡѺʹ��������硢ͧ�š��� ����Ҩ��͡ǹ�����ѧ��������������к������俿�Һ��š��</p>\r\n<p>\r\n	Dean Pesnell ��觷ӧҹ�������ٹ��Ǻ�����úԹ�ǡ�� Goddard �ҹ��ا�ͪԧ�ѹ ͸Ժ����� �ǧ�ҷԵ���ջ�ԡ���� ����դ�������¹�ŧ�����ʹ���� ���ʹ��������硷���դ�������¹�ŧ����͹��Ҥ��Ш�俿���͡����к������� ��������¹�繡�ûз����Դ �觡�ҫ��¾���͡����鹺���ҡ�Ȣͧ�ǧ�ҷԵ���ͧ �����Դ��ûз����Դ�����������ѵ�شǧ�ҷԵ���͡�����ǧ�ǡ�� �繻���ҳ���¾ѹ��ҹ�ѹ</p>\r\n<p>\r\n	��ҡ���ó��ҧ� �ѧ����Ǣͧ�ǧ�ҷԵ�������¹���дѺ��ѧ�ҹ ��С�����ѧ����к������Тͧ��� ����Ҩ�ռš�з����෤����� ���ҧ�����������ä��Ҥ� ����к�����ͧ��ҧ� ���š�����</p>\r\n<p>\r\n	��������ѧࡵ��ó�ǧ�ҷԵ������������Ҿ���¤س�Ҿ�٧ ���Ѵ�֡�����Ҿ�÷�ȹ� HDTV 10 ��� ����Ǻ��������ŵ�ҧ� ����ǡѺ��ҡ���ó�ͧ�ǧ�ҷԵ�� ����ʹ��������硢ͧ�ǧ�ҷԵ���Ѻ���ѧ�š �Ҵ��Ң���������Ҿ��������ҹ��Ъ������ѡ�Է����ʵ���դ�����������������ǡѺ�ǧ�ҷԵ���ҡ��� �������ö�Ҵ�ӹ�¾�����������л�ҡ���ó����� �ͧ�ǧ�ҷԵ�� ����Ҩ�ռš�з��֧��÷ӧҹ�ͧ�ҹ�ǡ���ǧ⤨��ͺ�š ��ʹ���к�俿�� �к������������ä��Ҥ� ����к�����ͧ������º��š��</p>\r\n<p>\r\n	��������ѧࡵ��ó�ǧ�ҷԵ��������зӧҹ��������� 5 ��.</p>\r\n', 'admin', '1273713026', '1273713026', 1, 205, '', '1');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_blog_category`
#

CREATE TABLE `web_blog_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `sort` int(11) NOT NULL default '0',
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11   ;

#
# dump ���ҧ `web_blog_category`
#

INSERT INTO `web_blog_category` VALUES (1, '�Է����ʵ��', 1, 'blog_1273721510.jpg');
INSERT INTO `web_blog_category` VALUES (2, '������', 2, 'blog_1273721524.jpg');
INSERT INTO `web_blog_category` VALUES (3, '��Ե��ʵ��', 3, 'blog_1273721536.jpg');
INSERT INTO `web_blog_category` VALUES (4, '�آ�֡����о��֡��', 4, 'blog_1273721548.jpg');
INSERT INTO `web_blog_category` VALUES (5, '��Ż�֡��', 5, 'blog_1273721558.jpg');
INSERT INTO `web_blog_category` VALUES (6, '��çҹ�Ҫվ�', 6, 'blog_1273721569.jpg');
INSERT INTO `web_blog_category` VALUES (7, '�����ѧ���', 7, 'blog_1273721581.jpg');
INSERT INTO `web_blog_category` VALUES (8, '�ѧ���֡��', 8, 'blog_1273721591.jpg');
INSERT INTO `web_blog_category` VALUES (9, '������Ѳ�Ҽ�����¹', 9, 'blog_1273721770.jpg');
INSERT INTO `web_blog_category` VALUES (10, '������', 10, 'blog_1273723889.jpg');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_blog_comment`
#

CREATE TABLE `web_blog_comment` (
  `id` int(7) NOT NULL auto_increment,
  `blog_id` int(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2  ;

#
# dump ���ҧ `web_blog_comment`
#

INSERT INTO `web_blog_comment` VALUES (1, 1, 'netty', '�ͧ�ٹФ�Ѻ', '127.0.0.1', '1273713215');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_blog_level`
#

CREATE TABLE `web_blog_level` (
  `level_id` int(5) NOT NULL auto_increment,
  `level_name` varchar(50) NOT NULL,
  `level_count` varchar(50) default NULL,
  PRIMARY KEY  (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7  ;

#
# dump ���ҧ `web_blog_level`
#

INSERT INTO `web_blog_level` VALUES (1, '�������', '20');
INSERT INTO `web_blog_level` VALUES (2, '������', '40');
INSERT INTO `web_blog_level` VALUES (3, '������', '60');
INSERT INTO `web_blog_level` VALUES (4, '��¹', '80');
INSERT INTO `web_blog_level` VALUES (5, '⤵���¹', '100');
INSERT INTO `web_blog_level` VALUES (6, '˹���������', '101');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_calendar`
#

CREATE TABLE `web_calendar` (
  `id` int(11) NOT NULL auto_increment,
  `date_event` date NOT NULL default '0000-00-00',
  `timeout` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `post_date` int(20) NOT NULL default '0',
  `update_date` int(20) NOT NULL default '0',
  `pageview` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `date_event` (`date_event`)
) ENGINE=MyISAM AUTO_INCREMENT=15  ;

#
# dump ���ҧ `web_calendar`
#

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_config`
#

CREATE TABLE `web_config` (
  `id` int(2) NOT NULL auto_increment,
  `posit` varchar(100) default NULL,
  `name` varchar(150) default NULL,
  PRIMARY KEY  (`id`),
  KEY `posit` (`posit`)
) ENGINE=MyISAM AUTO_INCREMENT=9 ;

#
# dump ���ҧ `web_config`
#

INSERT INTO `web_config` VALUES (1, 'title', ':: �ç���¹��ҹ��� :: �Ԫҡ���� �鹨��¸��� �ӡ��� �Ѳ�Ҫ���� ::');
INSERT INTO `web_config` VALUES (2, 'url', 'http://banphue.sytes.net');
INSERT INTO `web_config` VALUES (3, 'path', '/home/banphue/public_html');
INSERT INTO `web_config` VALUES (4, 'footer1', '�ç���¹��ҹ��� �.7 ��ҹ��� �.˹ͧ�ا �.��蹪� �.�����ä�� 44160 �ӹѡ�ҹࢵ��鹷�����֡�һ�ж��֡�������ä�� ࢵ3');
INSERT INTO `web_config` VALUES (5, 'footer2', 'webmaster  ��ªѴʡ� �ԡ�ŷͧ ����ӹ�¡��ʶҹ�֡�� ����  vt9vm@hotmail.com  ��  0899469997');
INSERT INTO `web_config` VALUES (6, 'email', 'vt9vm@hotmail.com');
INSERT INTO `web_config` VALUES (7, 'templates', 'cli3');
INSERT INTO `web_config` VALUES (8, 'iso', 'tis-620');
# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_config_category`
#

CREATE TABLE `web_config_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 ;

#
# dump ���ҧ `web_config_category`
#

INSERT INTO `web_config_category` VALUES (1, '����ǻ�Ҿ���');
INSERT INTO `web_config_category` VALUES (2, '����ǻ�Ҿ�˭�');
INSERT INTO `web_config_category` VALUES (3, '�����ǻ');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_download`
#

CREATE TABLE `web_download` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `topic` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `posted` varchar(100) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `update_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `full_text` varchar(100) NOT NULL default '',
  `pageview` int(11) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `size` int(50) NOT NULL default '0',
  `rate` int(10) NOT NULL default '0',
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=1  ;

#
# dump ���ҧ `web_download`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_download_category`
#

CREATE TABLE `web_download_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL default '0',
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 ;

#
# dump ���ҧ `web_download_category`
#

INSERT INTO `web_download_category` VALUES (1, '���������֡��', 1, 'Doc.png');
INSERT INTO `web_download_category` VALUES (2, '���������������', 2, 'Network.png');
INSERT INTO `web_download_category` VALUES (3, '�͡��û�Сͺ������¹', 3, 'Picture.png');
INSERT INTO `web_download_category` VALUES (4, '�ҹ�Ԩ��/�������ҧ�Ԫҡ��', 4, '/Videos.png');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_download_comment`
#

CREATE TABLE `web_download_comment` (
  `id` int(7) NOT NULL auto_increment,
  `download_id` int(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `download_id` (`download_id`)
) ENGINE=MyISAM  AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_download_comment`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_gallery`
#

CREATE TABLE `web_gallery` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `posted` varchar(100) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `pageview` int(11) NOT NULL default '0',
  `sort` int(11) NOT NULL default '0',
  `pic` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=5  ;

#
# dump ���ҧ `web_gallery`
#
INSERT INTO `web_gallery` VALUES(1, '1', 'admin', '1310841751', 1, 1, 0, 'DSCN0923a.jpg');
INSERT INTO `web_gallery` VALUES(2, '1', 'admin', '1310841751', 1, 1, 0, 'DSCN0925a.jpg');
INSERT INTO `web_gallery` VALUES(3, '1', 'admin', '1310841751', 1, 2, 0, 'DSCN0928a.jpg');
INSERT INTO `web_gallery` VALUES(4, '1', 'admin', '1310841751', 1, 1, 0, 'DSCN0931a.jpg');
# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_gallery_category`
#

CREATE TABLE `web_gallery_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `category_detail` text NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

#
# dump ���ҧ `web_gallery_category`
#

INSERT INTO `web_gallery_category` VALUES (1, '�Ӻح��Ҿ����', '��� �ѡ���¹�������ѹ������¹����� �����ѧ��ҹ ���筻���ª���¡�÷Ӥ������Ҵ�Ѵ��ҹ��� ���ͧ��͡���ѹ�����˺٪�����ѹ��Ҿ���� ��ѹ��� 14 �á�Ҥ� 2554', '1310840961', 14);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_gallery_comment`
#

CREATE TABLE `web_gallery_comment` (
  `id` int(7) NOT NULL auto_increment,
  `gallery_id` int(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_gallery_comment`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_gbook`
#

CREATE TABLE `web_gbook` (
  `No` int(5) NOT NULL auto_increment,
  `Message` text NOT NULL,
  `Name` varchar(50) NOT NULL default '',
  `is_member` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL default '',
  `IP` varchar(20) NOT NULL default '',
  `URL` varchar(80) NOT NULL default '',
  `Date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=3  ;

#
# dump ���ҧ `web_gbook`
#

INSERT INTO `web_gbook` VALUES(1, '���ʴ������Թ�� ��д�������ҧ��觡Ѻ��ҹ ��.���¾������ǵ�������¹�� ��Һѳ�Ե �.���( ȡ.��� 5)������͡ѹ���  �ʹ��������ԧ � ��ҧ�� website �ç���¹�����¹��ç���¹�ѧ�������¤�Ѻ��ҹ ', 'sung', '1', 'sung15@hotmail.com', '125.26.68.254', 'http://', '����ʺ�� 16 �.�. 2553');
INSERT INTO `web_gbook` VALUES(2, '�ǻ����ҡ��Ѻ��  ��ҹ�Ѳ�Ҩҡ atomymaxsite2.0 ����ҡ��Ѻ�� <a href="http://maxtom.sytes.net">http://maxtom.sytes.net</a> ', 'noi', '0', '', '223.206.128.105', 'http://', '����� 8 �.�. 2554');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_groups`
#

CREATE TABLE `web_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` tinytext NOT NULL,
  `description` text NOT NULL,
  `news_add` tinyint(4) NOT NULL default '0',
  `news_edit` tinyint(4) NOT NULL default '0',
  `news_del` tinyint(4) NOT NULL default '0',
  `newscat_add` tinyint(4) NOT NULL default '0',
  `newscat_edit` tinyint(4) NOT NULL default '0',
  `newscat_del` tinyint(4) NOT NULL default '0',
  `admin_add` tinyint(4) NOT NULL default '0',
  `admin_edit` tinyint(4) NOT NULL default '0',
  `admin_del` tinyint(4) NOT NULL default '0',
  `group_add` tinyint(4) NOT NULL default '0',
  `group_edit` tinyint(4) NOT NULL default '0',
  `group_del` tinyint(4) NOT NULL default '0',
  `links_add` tinyint(4) NOT NULL default '0',
  `links_edit` tinyint(4) NOT NULL default '0',
  `links_del` tinyint(4) NOT NULL default '0',
  `article_add` tinyint(4) NOT NULL default '0',
  `article_edit` tinyint(4) NOT NULL default '0',
  `article_del` tinyint(4) NOT NULL default '0',
  `articlecat_add` tinyint(4) NOT NULL default '0',
  `articlecat_edit` tinyint(4) NOT NULL default '0',
  `articlecat_del` tinyint(4) NOT NULL default '0',
  `contact_add` tinyint(4) NOT NULL default '0',
  `contact_edit` tinyint(4) NOT NULL default '0',
  `contact_del` tinyint(4) NOT NULL default '0',
  `calendar_add` tinyint(4) NOT NULL default '0',
  `calendar_edit` tinyint(4) NOT NULL default '0',
  `calendar_del` tinyint(4) NOT NULL default '0',
  `webboard_add` tinyint(4) NOT NULL default '0',
  `webboard_edit` tinyint(4) NOT NULL default '0',
  `webboard_del` tinyint(4) NOT NULL default '0',
  `editortalk_edit` tinyint(4) NOT NULL default '0',
  `aboutus_edit` tinyint(4) NOT NULL default '0',
  `minepass_edit` tinyint(4) NOT NULL default '0',
  `page_add` tinyint(4) NOT NULL default '0',
  `page_edit` tinyint(4) NOT NULL default '0',
  `page_del` tinyint(4) NOT NULL default '0',
  `research_add` tinyint(4) NOT NULL default '0',
  `research_edit` tinyint(4) NOT NULL default '0',
  `research_del` tinyint(4) NOT NULL default '0',
  `researchcat_add` tinyint(4) NOT NULL default '0',
  `researchcat_edit` tinyint(4) NOT NULL default '0',
  `researchcat_del` tinyint(4) NOT NULL default '0',
  `download_add` tinyint(4) NOT NULL default '0',
  `download_edit` tinyint(4) NOT NULL default '0',
  `download_del` tinyint(4) NOT NULL default '0',
  `downloadcat_add` tinyint(4) NOT NULL default '0',
  `downloadcat_edit` tinyint(4) NOT NULL default '0',
  `downloadcat_del` tinyint(4) NOT NULL default '0',
  `member_add` tinyint(4) NOT NULL default '0',
  `member_edit` tinyint(4) NOT NULL default '0',
  `member_del` tinyint(4) NOT NULL default '0',
  `config_add` tinyint(4) NOT NULL default '0',
  `config_edit` tinyint(4) NOT NULL default '0',
  `config_del` tinyint(4) NOT NULL default '0',
  `block_add` tinyint(4) NOT NULL default '0',
  `block_edit` tinyint(4) NOT NULL default '0',
  `block_del` tinyint(4) NOT NULL default '0',
  `poll_add` tinyint(4) NOT NULL default '0',
  `poll_edit` tinyint(4) NOT NULL default '0',
  `poll_del` tinyint(4) NOT NULL default '0',
  `gbook_edit` tinyint(4) NOT NULL default '0',
  `gbook_del` tinyint(4) NOT NULL default '0',
  `gallery_add` tinyint(4) NOT NULL default '0',
  `gallery_edit` tinyint(4) NOT NULL default '0',
  `gallery_del` tinyint(4) NOT NULL default '0',
  `gallery_detail` int(4) NOT NULL default '0',
  `gallerycat_add` tinyint(4) NOT NULL default '0',
  `gallerycat_edit` tinyint(4) NOT NULL default '0',
  `gallerycat_del` tinyint(4) NOT NULL default '0',
  `ipblock_add` tinyint(4) NOT NULL default '0',
  `ipblock_edit` tinyint(4) NOT NULL default '0',
  `ipblock_del` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4  ;

#
# dump ���ҧ `web_groups`
#

INSERT INTO web_groups VALUES (1, 'Webmaster', 'webmaster', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,  1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO web_groups VALUES (2, 'Admin', 'admin', 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1,  1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO web_groups VALUES (3, 'staff', 'staff', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_ipblock`
#

CREATE TABLE `web_ipblock` (
  `id` int(11) NOT NULL auto_increment,
  `ip` varchar(30) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=1  ;

#
# dump ���ҧ `web_ipblock`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_knowledge`
#

CREATE TABLE `web_knowledge` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `topic` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `posted` varchar(100) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `update_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `pageview` int(11) NOT NULL default '0',
  `attach` varchar(100) NOT NULL,
  `pic` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=3 ;

#
# dump ���ҧ `web_knowledge`
#

INSERT INTO `web_knowledge` VALUES(1, '1', '��áԨ�ɳҺ����', '����Ժⵢͧ�ӹǹ���ྨ�ըӹǹ����������ҧ�Ǵ���� ���͡ѹ���㹻Ѩ�غѹ�ըӹǹ���ྨ�ҡ�Թ����˹����ҹ���ྨ ���ྨ����ҹ��������§�ѹ�����͢��¢����Ţ�����÷��������ѡ�ѹ㹹�� WWW-World Wide Web<br />\r\n', '<img alt="" height="339" src="UserFiles/Image/xxx.jpg" width="444" /><br />\r\n����Ժⵢͧ�ӹǹ���ྨ�ըӹǹ����������ҧ�Ǵ���� ���͡ѹ���㹻Ѩ�غѹ�ըӹǹ���ྨ�ҡ�Թ����˹����ҹ���ྨ ���ྨ����ҹ��������§�ѹ�����͢��¢����Ţ�����÷��������ѡ�ѹ㹹�� WWW-World Wide Web<br />\r\n<br />\r\n���ͧ͢���ྨ���ͷ�����¡��� ���䫷� ������觵�ͧ����ӡѹ �ա�â�鹷���¹���� �è�����¹�������͹������ ��騴����¹ �����ѧ�������ö����ͫ���� ���ҧ�ѭ�����Ѻͧ��úҧͧ��÷���ͧ�������ͷ�����ͤ������¡Ѻͧ����ҡ����ش ��仫�ӡѺ���ͷ���� �������� ��ѡ��õ�駪����ѧ����ա�ࡳ�������ҡ ���Ъ����繡�����¡�������� �٨ҡ����������ͧʶҹ��÷�ȹ��������� �����Ը� ��õ�駪���ᵡ��ҧ�ѹ <br />\r\n������������觷���駡ѹ������ըش������·ҧ��áԨ���ᵡ��ҧ�ѹ�ҧ���������͹���͡���ɳһ�Ъ�����ѹ��ͧ��� �ҧ���������������ǡѺ��Ե�ѳ�������Թ��� �ҧ���������������Ѻ�����ͺ�Ѻ�١��� �Ѩ�غѹ�ա�����������������ɳ� �Թ��� �ҧ����������ա����觫����Թ��Ҽ�ҹ�ҧ���͢����Թ���������µç ��áԨ����纨֧�٨��դ�����蹵�� ������Ѻ����ʹ� �ҡ ����ѷ����ͧ��÷ҧ��áԨ�ءͧ��è֧��ͧ�����红ͧ���ͧ �ա�����ҧ��Żк�˹�Ҩ��Ҿ������§���֧�ٴ�����ҡ������ҹ ���ͪ� �ҧ������Ըա����ʹ��¡�â�鹢�ͤ�������������������ԡ���仴� ෤�Ԥ����Ըա����¹��� �֧���Ѻ��þѲ�����ҧ�Ǵ���� �ա�����ҿ�ԡ ���ѹ ���§ ����Ҿ����͹��ǻ�Сͺ�ѹ ���ͺҧ������������ŷ���繻���ª���������¡��ͧ��餹������Դ�� <br />\r\n��红ͧ����ͧ��è֧����͹�Ѻ�͡��������ͧͧ��÷������ͧ���д�� ����蹢ͧ�͡�������ҹ�������͡��÷�� ��Ե���������� �Ǵ����㹡������¹�ŧ��� ���͡��÷������ö�觼�ҹ�ҧ���͢�����ѧ����ҧ � �����͢�������� ��з���Ӥѭ ����ٻẺ�ͧ�͡�������ö�ʴ��Ţ�����Ẻ��ŵ������ �֧������Դ�������ʹ� <br />\r\n���¤������������зӸ�áԨ�����͢�������¡�õ������ҧ��ҹ�����ɳҢ���Թ��Һҧ��觷���«Ϳ�������ա����� ������ҧ�Ϳ������������ö��ǹ���Ŵ�ҷ��ͧ��١�͹�� �ҡ��㨤�����觫��� ��õ����ҹ��Ң���Թ������ҡ��µ�����â��˹ѧ��� ��觾���� �մ� ෻ �ͧ��㹺�ҹ ����ͧ�������ͧ������Ѻ���������� ����ͧ���ӹѡ�ҹ ��� �����觫����Թ�����������èѴ���Թ��� �µç �� ��ҹ��¾ԫ���仨��֧������Թ��ҷҧ��ɳ�����ǹ��èѴ���Թ���Ըա�õѴ�͹�ҧ�ѵ��ôԵ <br />\r\n�ѡɳС�÷Ӹ�áԨ�����͢�����纨зӡѹ��ٻẺ�����ͺ���ͪ��ᨧ ���������������´����ǡѺ��Ե�ѳ�������� ��֡�� ��ú�ԡ����ѧ��â�� ����֧����Ѻ�ѧ�����Դ��繨ҡ������Թ������͹���Ң��������㹡�û�Ѻ��ا��Ե�ѳ���Թ���������觢�� <br />\r\n���ë��͢�¼�ҹ�ҧ���͢�������ѧ����繷��������� �������͢�������ѧ �ӡѴ����㹡������������Թ������ ��駹������ ���͢�����������͢����Ҹ�ó� ����觢���������ǡѺ�ѵ��ôԵ�����͢������ѡɳз������§ ������������ҹ���ҵ����������Ԩ�Ҫվ �Ҩ��������㹷ҧ�Ԫͺ�� �����觫����Թ��ҷҧ���͢�������ѧ�դ�������֡�����ҷ����������Ţ�ѵ��ôԵ ��ǹ��ҹ��ҡ��ѧ�ա�èӡѴ ����ҳ�Թ㹡����觫����Թ��� �� �ǧ�Թ����Թ˹����������­ �繵� <br />\r\n��ͨӡѴ�����ͧ������ʹ��¢ͧ����Ѻ�觢����ź����͢��¨֧��ͧ���Ѻ��û�Ѻ��ا������բ�� ����ѷ�����Թ��úѵ��ôԵ ���������繻ѭ������ҹ�� �֧������͡Ѻ����ѷ���Ѳ�ҫͿ�����캹���͢������;Ѳ������繴ԨԵ�� ���������Ѻ��Ǩ�ͺ����׹�ѹ��� �ؤ�� �ҡ�ç��ù���������й��͡������ ˹�ҧ�ͧ��÷Ӹ�áԨ����纨������������������ա�ҡ <br />\r\n�͡�ҡ����ͧ���������硷�͹ԡ������ �ѧ������ͧ����ѡ�Ҥ�����ʹ��¢ͧ������ ���������� ���ͷ�����¡��� &quot;��繤�Ծ���&quot; ��� ��öʹ���� ��û�ͧ�ѹ��úء�ء�����á��������ź����͢��� ����ͧ����ҹ����ѧ�繻ѭ�ҷ���ع�ç�ҡ��� ���������������Դ��� ���ҡ <br />\r\n��觷����ʹ������ͧ��þѲ��෤�Ԥ�ҧ����ա��С��˹�� ��� �ա�ù�����������㹸�áԨ�Թ��������ء�������ѹ�ҡ��� ���и�áԨ�������ԡ������ҧ�� �����������㴡�����ö���¡������� �ա������ԡ�áѺ��Ҫԡ�¡�����Թ��Һ�ԡ�� �ա������ԡ�� �Ѻ��Ҫԡ�¡�����Թ��Һ�ԡ�� �Ѻ����觷��������������Ÿ�����Т�����������ѹ�է�� <br />\r\n���������˹��ҵðҹ��ҧ�ͧ WWW �������Է����� MIT ������Ѱ����ԡҨ֧�鵡ŧ�ѹ ��С��ѧ�оѲ���ҵðҹ ��èѴ�дѺ������͡�˹��������ͧ�������ҧ � ����������������к���û�ͧ�ѹ��������ͧ�����������дѺ��ҧ � �ѹ�� ���ͨӡѴ����������੾����Ҫԡ <br />\r\n��÷Ӹ�áԨ����纨֧�繸�áԨ�����ҧ����������ᴹ �������ҹ��¢ͧ�����˹���������ö��ԡ���١���������š ������ �١��Ҩ�������㴺����͢��¡�����ö��Ҷ֧�� <br />\r\n��áԨ��ԡ�ú���纨֧��������������Ѻ��������������� ��觷���Ӥѭ��� ��ͧ���к��ѡ�Ҥ�����ʹ��������ͧ������ ������ҧ �������������ҡ�����Թ��ҹ�ѵ��ôԵ�����Ѻ����������ͧ���������硷�͹ԡ��֧��ͧ���Ѻ��þѲ�ҵ��� ', 'admin', '1295870012', '1295870012', 1, 51, '', '1');
INSERT INTO `web_knowledge` VALUES(2, '1', '����������١���¹����������', '�դӶ���ҡ�������ǡѺ������¹����͹����������ͧ�硾��觾�����������й�� ��觤��������㨢ͧ�����ҹ�ӹǹ�ҡ ��੾����ؤ෤��������ʹ�� �ؤ����֡��Ẻ�����ᴹ ����պ��ҷ���������Ǣ�ͧ�����ҡ ���Դ�����ѧ������ ��Ҩ�����١ ����������¹�������', '<img alt="" height="300" src="UserFiles/Image/kid.jpg" width="474" /><br />\r\n�դӶ���ҡ�������ǡѺ������¹����͹����������ͧ�硾��觾�����������й�� ��觤��������㨢ͧ�����ҹ�ӹǹ�ҡ ��੾����ؤ෤��������ʹ�� �ؤ����֡��Ẻ�����ᴹ ����պ��ҷ���������Ǣ�ͧ�����ҡ ���Դ�����ѧ������ ��Ҩ�����١ ����������¹���������������㴴� �ҡ��ѡ��Ѫ����觡���֡�ҷ���Ӥѭ��� ��èѴ����֡�������������Ѻ������¹ �����Ҿ����������������Ǵ���� �е�ͧ������ӹ�µ�͡�����¹��� ��èѴ����֡�ҷ�駷���ҹ��з���ç���¹ �֧��ͧ����¹�ŧ仵����Ҿ������� <br />\r\n�������������� ��ùӤ������ҧ��ҹ�������������Ѻ��������Ǫ��ͧ�ҵԵ�ͧ�ӹ֧�֧ ��Ҿ�������������͡�����¹��� ����͹�������������Ѻ�硨֧��з���ء�дѺ���� �������Ѻ��ù����������͹ ��觵�ͧ��������Ѻ��Ҿ����Ѻ��� <br />\r\n���»�ж� ���繼�����������ҡ���¹��� ����Ҿ������¹������͹��ҧ���Ǵ���� �ҡ�Ѵ����֡�ҷ��������� �硨����¹����������㹺ҧ��觺ҧ���ҧ���Ǵ���� �ç�ѹ���� �ҡ����觷������ҡ��ЫѺ��͹���͹�����µ鹹�� �硨л���ʸ����դ��� �ѧ������觹�����������ҡ ��Ш��������Ѻ�ա���� <br />\r\n�������������¹���������������硨֧����͹�Һ�ͧ�� ����Ҩ�觼���ԧ�ǡ����ź���� �ŷ���Դ��鹨֧�������èѴ��� �֡�����Ӥѭ ��Ҿ�ͧ����͹��������ز�������Ф�����ͧ��âͧ������觷���ͧ���ѧ ���㴷�����س���ҡ�����١��ͧ������ ��������蹡ѹ <br />\r\n������¹����������㹻�ж���¹�� ������ͧ�ͧ����ʹءʹҹ ������ҷ��㹡�ä��Ҥ�����ԧ ������Դ��Թ ���� ��������������������֡����͡�ʵ��� ����͹���¹�� �е�ͧ�����ҧ�����֧�������觧��� � ���ὧ������ѡ������ �Ըա�äԴ������������ҧʵԻѭ�� <br />\r\n��ټ���͹�������������»�ж����դ����Ӥѭ ��ͧ����㹵���������ҧ�� ���Ҩ��ʹءʹҹ�Ѻ�������� ʹءʹҹ �Ѻ����Ҵ�Ҿ ����ʴ��͡��觤����Դ���������ҧ � �ѧ��鹡�����ҧ����ҡ���������������������ͧ����з�����С�з���մ��� <br />\r\n����������Ъ������ҧ��ä��������ͧ�����Դ������� ������ö�Թ��ҡ�õ�ҧ � ����ʴ��͡�����Ҿ�� ����ö�� �ӴѺ�����Դ���ҧ���к� �����������������ʴ����觷�赹�ͧ��ͧ��� ����ѧ���ҧ�����Դ���ҧ���˵��ռ��դ����ͺ�ͺ ���觷�赹�ͧ�� ������¹����������֧������Դ������ҧ��ä�������С�е�������㹡�ä�������š���� <br />\r\n�ҡ���ʺ��ó�ҧ��ҹ����֡����Чҹ�Ԩ�¢ͧ�ѡ����֡�Ҫ��ʹѧ &quot;����� ������&quot; (Seymour Papert) ��ʵ�Ҩ������� ����Է����� MII ������������� �硨ӹǹ�ҡ㹻�ж���¹�� ���Ѻ����͹��੾�С���͹��Ե��ʵ����Դ �����������ҹ�� ���ä Mathophobia (�ä���Ǥ�Ե��ʵ��) ��Ш����ͺ��Ե��ʵ��仵�ʹ���Ե ��÷�������ͺ��Ե��ʵ�� ���Ф�ټ���͹ ���ҧ��������֡����ҡ�Ѻ��͹���Ѻ�� �֧�觼���������硽ѧ����觹��仵�ʹ <br />\r\n����� ������ ����¹˹ѧ�������ǡѺ����ͧ�������������� ����ѧ��Ѳ�ҡ��������������͹�� ��дѺ��ж���´��� ��觷�����������Ӥѭ��͡���͹Ẻ���ٻẺ ���ҧ��觷���繤�������ҡ�Ѻ��͹���ҧ��Ե��ʵ���������觧���ʹءʹҹ���� ����������������պ��ҷ ��������Ѳ��������⡫���繡������������������Թ���ٻ��ҧ��ҧ � �繡����¹�ٻ��� �Թ��ҡ������������� ������¹�âҤ�Ե������ͧʹءʹҹ�� <br />\r\n���»�ж� ��èѴ����֡�Ҥ������������������ ���ͧ�������Ҿ��������Ѻ��� �鹤����֧��� ����ʹءʹҹ ������Դ��Թ �����ç��е������Դ������¹��������������������Ѻ����֡��㹢���٧���� ��ټ���͹�е�ͧ�դ����������� �����ͧ�����������ͧ ��дѴ�ŧ�Ըա���͹�����������Ѻ�� <br />\r\n����Ѻ����Ѹ���֡�� ��èѴ����֡������ᵡ��ҧ�͡� ���¹��ѡ���¹�դ�������������ͧ�ͧ�ҹ��������������ҧ ��èѴ����֡�ҷҧ��ҹ����������֧����ǹ�������颺ǹ������ҧ��ä�ѭ������ٻẺ�� <br />\r\n��觷���Ӥѭ㹡���֡���ѹ����� �����������ͧ�ԪҪվ ��������鹤���������ͧ���Ǫ������ͧ������¹��� ����������� ����������������ͧ��ͷ������������кǹ������ҧ��ä��ҧ � ���ҡ��� ͧ���Сͺ��觡�����¹������¹�� �֧�鹷���ͧ��� ���ҧ�����Դ���ҧ���к� ���ҧ�����Դ��������������˵ؼ���觡���ͧẺ��á��ʵ�� ���¤�����������йӤ��������� 任���ء�������ª��Ѻ�ҹ��ҹ��ҧ � <br />\r\n����֡�Ҥ�������������Ѻ��������Ǫ��֧�Ӥѭ�������ټ���͹ ��ټ���͹��ͧ�Ѵ������ҧ��ǹ������¹���������������� ������觷���繤�������ҡ�Ѻ��͹ ��ǹ����͹������繹ѡ���������� ����ҵ�ͧ���������դ����������������������� ���ͻ�Сͺ������¹����Ҫվ��������Ҥ˹�� <br />\r\n෤����դ�����������ѧ�պ��ҷ����Ӥѭ ��੾������Ǵ��������ǹ���ç��е���ҡ ��硻�ж���¡����Դ���෻ ����������� �������Ѹ���֡���������Ǫ��������ͷ���ҷ�� �� �Թ�������繵�ǡ�е�� �����ǧ�ҹ��֧����·���ѹ�����ҡ �Ѵ��÷�ȷҧ�ͧ������¹������١��ͧ �֧��ͧ�������Ӥѭ�Ѻ��������Ǫ��ҡ��� �¨Ѵ����Ǵ���������������Ѻ������¹��� ���������� ����������������������ͧ������·���黡��ͧ�Ҩ�������� ', 'admin', '1295870146', '1295870146', 1, 50, '', '1');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_knowledge_category`
#

CREATE TABLE `web_knowledge_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `sort` int(11) NOT NULL default '0',
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2  ;

#
# dump ���ҧ `web_knowledge_category`
#

INSERT INTO `web_knowledge_category` VALUES (1, '�������ҧ�Ԫҡ��', 1, 'Configure.png');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_knowledge_comment`
#

CREATE TABLE `web_knowledge_comment` (
  `id` int(7) NOT NULL auto_increment,
  `knowledge_id` int(7) default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `knowledge_id` (`knowledge_id`)
) ENGINE=MyISAM  AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_knowledge_comment`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_mail`
#

CREATE TABLE `web_mail` (
  `id` int(7) NOT NULL auto_increment,
  `subject` varchar(120) NOT NULL default '',
  `detail` longtext NOT NULL,
  `form_mail` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2  ;

#
# dump ���ҧ `web_mail`
#

INSERT INTO `web_mail` VALUES (1, '�آ�ѹ���ѹ�Դ', '�آ�ѹ���ѹ�Դ ������դ����آ�ҡ� �Ф�Ѻ�� �ҡ maxtom.sytes.net', 'vt9vm@hotmail.com');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_member`
#

CREATE TABLE `web_member` (
  `id` int(6) NOT NULL auto_increment,
  `member_id` varchar(20) NOT NULL default '',
  `name` varchar(50) NOT NULL default '',
  `nic_name` varchar(20) NOT NULL,
  `date` int(2) NOT NULL default '0',
  `month` int(2) NOT NULL default '0',
  `year` varchar(4) NOT NULL default '',
  `age` varchar(10) NOT NULL default '',
  `sex` varchar(8) NOT NULL default '',
  `address` varchar(150) NOT NULL default '',
  `amper` varchar(40) NOT NULL default '',
  `province` varchar(40) NOT NULL default '',
  `zipcode` varchar(15) NOT NULL default '',
  `phone` varchar(10) NOT NULL default '',
  `education` varchar(30) NOT NULL default '',
  `work` varchar(30) NOT NULL default '',
  `office` varchar(200) NOT NULL,
  `user` varchar(30) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `member_pic` varchar(50) NOT NULL,
  `signup` varchar(40) NOT NULL default '',
  `lastlog` varchar(28) NOT NULL,
  `dtnow` varchar(28) NOT NULL,
  `blog` varchar(5) default NULL,
  `post` int(6) NOT NULL,
  `topic` int(6) NOT NULL,
  `signature` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2  ;

#
# dump ���ҧ `web_member`
#

INSERT INTO `web_member` VALUES (1, 'web1', '��ªѴʡ� �ԡ�ŷͧ', '', 23, 3, '2516', '36', '���', '152 ���� 2 �.˹ͧ�á', '���ͧ', '�������', '33000', '0899469997', '��ԭ���', '���/�Ҩ����', '�ç���¹�������֡��', 'admin', 'f0cc68da195d9d620b6cfe05f6f07a62', 'vt9vm@hotmail.com', 'admin_1291354356_adm-04.jpg', '30/11/2552', '14/06/10 - 20:41', '23/06/10 - 17:45', '1', 0, 1, '<img src="icon/sigtom.jpg">');
# --------------------------------------------------------

CREATE TABLE `web_menu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM   AUTO_INCREMENT=26 ;

-- 
-- dump ���ҧ `web_menu`
-- 

INSERT INTO `web_menu` VALUES (1, '��õ�駤�� config', '19.png', '?name=admin&file=config');
INSERT INTO `web_menu` VALUES (2, '�������к�', 'chart.png', '?name=admin&file=user');
INSERT INTO `web_menu` VALUES (3, '��Ҫԡ', '8.png', '?name=admin&file=member');
INSERT INTO `web_menu` VALUES (4, 'Filemanager', '20.png', '?name=admin&file=filemanager');
INSERT INTO `web_menu` VALUES (5, 'Block', '16.png', '?name=admin&file=block');
INSERT INTO `web_menu` VALUES (6, 'Editor Talk', '1.png', '?name=admin&file=editortalk');
INSERT INTO `web_menu` VALUES (7, 'Aboutus', '14.png', '?name=admin&file=aboutus');
INSERT INTO `web_menu` VALUES (8, '���ǻ�Ъ�����ѹ��', '2.png', '?name=admin&file=news');
INSERT INTO `web_menu` VALUES (9, '���Ф������', '5.png', '?name=admin&file=knowledge');
INSERT INTO `web_menu` VALUES (10, '��ǹ���Ŵ', '9.png', '?name=admin&file=download');
INSERT INTO `web_menu` VALUES (11, 'Blog', '14.png', '?name=admin&file=blog');
INSERT INTO `web_menu` VALUES (12, '����º�ؤ�ҡ�', '10.png', '?name=admin&file=personnel');
INSERT INTO `web_menu` VALUES (13, '�ŧҹ�ҧ�Ԫҡ��', '3.png', '?name=admin&file=research');
INSERT INTO `web_menu` VALUES (14, 'Gallery', '12.png', '?name=admin&file=gallery');
INSERT INTO `web_menu` VALUES (15, '��������', '11.png', '?name=admin&file=alumnus');
INSERT INTO `web_menu` VALUES (16, 'Webboard', 'history.png', '?name=admin&file=webboard');
INSERT INTO `web_menu` VALUES (17, '��ش������', 'users.png', '?name=admin&file=gbook');
INSERT INTO `web_menu` VALUES (18, '��ԷԹ�Ԩ����', '4.png', '?name=admin&file=calendar');
INSERT INTO `web_menu` VALUES (19, '�ҡ��ͤ���', '18.png', '?name=admin&file=smiletag');
INSERT INTO `web_menu` VALUES (20, '�����ٻ�Ҿ', '13.png', '?name=admin&file=uploads');
INSERT INTO `web_menu` VALUES (21, 'Poll', 'plugin.png', '?name=admin&file=poll');
INSERT INTO `web_menu` VALUES (22, '�ç���', '17.png', '?name=admin/workboard&file=index&op=WorkBoardIndex');
INSERT INTO `web_menu` VALUES (23, '��¡������', '7.png', '?name=admin&file=page');
INSERT INTO `web_menu` VALUES (24, 'Backup', 'history.png', '?name=admin&file=backupindex');
INSERT INTO `web_menu` VALUES (25, '�͡�ҡ�к�', '21.png', '?name=admin&file=logout');


#
# �ç���ҧ���ҧ `web_news`
#

CREATE TABLE `web_news` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `topic` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `posted` varchar(100) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `update_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `pageview` int(11) NOT NULL default '0',
  `attach` varchar(100) NOT NULL,
  `pic` int(1) default NULL,
  `ran` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=6  ;

#
# dump ���ҧ `web_news`
#

INSERT INTO `web_news` VALUES(1, '2', '�ѹ��͵�ҹ���ʾ�Դ 2554', '�������&nbsp; 㹡�û�Ъ��������ѹ��� 14 �Զع�¹ 2531 ��觷���Ъ������Ѱ����������������˹��ѹ��� 26 �Զع�¹ �ͧ�ء�� ���ѹ��͵�ҹ���ʾ�Դ������������� �.�. 2531�繵���', '<img align="left" alt="" height="150" src="UserFiles/Image/PIC_3836.jpg" width="200" />�������&nbsp; 㹡�û�Ъ��������ѹ��� 14 �Զع�¹ 2531 ��觷���Ъ������Ѱ����������������˹��ѹ��� 26 �Զع�¹ �ͧ�ء�� ���ѹ��͵�ҹ���ʾ�Դ������������� �.�. 2531�繵���<br />\r\n<br />\r\n�ٻ�Ҿ�������<br />\r\n<a href="http://banphue.sytes.net/?name=gallery&amp;op=gallery_detail&amp;id=12">http://banphue.sytes.net/&shy;name=gallery&amp;op=gallery_detail&amp;id=12</a>&nbsp;', 'admin', '1309600387', '1309600387', 1, 9, '', 1,0);
INSERT INTO `web_news` VALUES(2, '2', 'óç�����͡��� �.�. 3 �.�.2554', '������͡��� �.�.�����բ��&nbsp; ��ѹ��� 3 �á�Ҥ� 2554 �ӹǹ��Ҫԡ��Ҽ��᷹��ɮ� ��駻������� 500 �� ���� �.�. Ẻ��ࢵ���͡��駨ӹǹ 375 �� ��� �.�.Ẻ�ѭ����ª��ͨӹǹ 125 ��&nbsp;&nbsp;�ç���¹�Ѵ���óç������ѹ��� 26 �Զع�¹ 2554', '<img align="left" alt="" height="150" src="UserFiles/Image/P6230724.jpg" width="200" />������͡��� �.�.�����բ��&nbsp; ��ѹ��� 3 �á�Ҥ� 2554 �Ѻ�繡�����͡��� �.�.�����á�����ѧ�ҡ��û�С�����Ѱ�����٭����Ҫ�ҳҨѡ��� ���������� (��Ѻ��� 1)�ط��ѡ�Ҫ 2554 ����ա���������������ѭ�ѵ����ǹ&nbsp;&nbsp;&nbsp; �������Ǣ�ͧ�Ѻ�ӹǹ��Ҫԡ��Ҽ��᷹��ɮ� ��駻������� 500 �� ���� �.�. Ẻ��ࢵ���͡��駨ӹǹ 375 �� ��� �.�.Ẻ�ѭ����ª��ͨӹǹ 125 �� ����ਵ��������ӹ֧�֧�Է����Ф��������Ҥ㹡�����͡��� �����Ҩ��������������� ��鹷���&nbsp; &nbsp;&nbsp;ࢵ� ������Է�Է����������ѹ㹡������Է�����͡ �.�. �֧��˹���������Է�����͡��駷ء���ءࢵ���͡��� ���͡�.�.Ẻ��ࢵ���͡������Ẻ�ѭ����ª��������ҧ��˹�������Ţ���ҧ��������ѹ���ǻ����&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ç���¹�Ѵ���óç������ѹ��� 26 �Զع�¹ 2554&nbsp;&nbsp; <br />\r\n<br />\r\n�ٻ�Ҿ�������<br />\r\n<a href="http://banphue.sytes.net/?name=gallery&amp;op=gallery_detail&amp;id=13">http://banphue.sytes.net/&shy;name=gallery&amp;op=gallery_detail&amp;id=13</a>&nbsp;', 'admin', '1309601125', '1309601125', 1, 14, '', 1,0);
INSERT INTO `web_news` VALUES(3, '2', '�����Ԩ�����ѹ������ѹʶһ�Ҥ���١������觪ҵ�', '�ͧ�١�����ç���¹���ѭ �ç���¹��ҹ����������Ԩ�����ѹ������ѹʶһ�Ҥ���١������觪ҵ� �ѹ��� 1 �á�Ҥ� 2554 � �����١���ͪ��Ǥ����ç���¹��§�׹�Է�Ҥ� �.��蹪� �.�����ä��', '<img align="left" alt="" height="150" src="UserFiles/Image/P6270821.jpg" width="200" />�ͧ�١�����ç���¹���ѭ �ç���¹��ҹ����������Ԩ�����ѹ������ѹʶһ�Ҥ���١������觪ҵ� �ѹ��� 1 �á�Ҥ� 2554 � �����١���ͪ��Ǥ����ç���¹��§�׹�Է�Ҥ� �.��蹪� �.�����ä�� ��觡Ԩ���� �վԸ�ʴش��������Ѫ��ŷ�� 6 ��������Դ�١������ �ա���Թ�ǹʹ�� ��к��筻���ª��<br />\r\n�ٻ�Ҿ����������<br />\r\n<a href="http://banphue.sytes.net/index.php?name=gallery&amp;op=gallery_detail&amp;id=15">http://banphue.sytes.net/index.php&shy;name=gallery&amp;op=gallery_detail&amp;id=15</a>&nbsp;<br />\r\n', 'admin', '1310038120', '1310038120', 1, 15, '', 1,0);
INSERT INTO `web_news` VALUES(4, '2', '��Ҥ��������ѧ���', '�¤���������������ҧ�ç���¹��ҹ��� �ç���¹��ҹ�ҹ⹹�٧ �ç���¹��ҹ⤡��� ��Ф���������ʵ������ѧ����ʵ�� ����Է����������ä�� ��Ѵ���ç�����Ҥ��������ѧ��ɢ�� ��ѹ��� 9 �á�Ҥ� 2554 � �ͻ�Ъ���ç���¹��ҹ�ҹ⹹�٧<br />\r\n', '<img align="left" alt="" height="150" src="UserFiles/Image/S4204327a.jpg" width="200" />�¤���������������ҧ�ç���¹��ҹ��� �ç���¹��ҹ�ҹ⹹�٧ �ç���¹��ҹ⤡��� ��Ф���������ʵ������ѧ����ʵ�� ����Է����������ä�� ��Ѵ���ç�����Ҥ��������ѧ��ɢ�� ��ѹ��� 9 �á�Ҥ� 2554 � �ͻ�Ъ���ç���¹��ҹ�ҹ⹹�٧<br />\r\n', 'admin', '1310216972', '1310216972', 1, 15, '', 1,0);
INSERT INTO `web_news` VALUES(5, '2', '�Ӻح���ͧ��͡���ѹ�����˺٪������Ҿ����', '��� �ѡ���¹�������ѹ������¹����� �����ѧ��ҹ ���筻���ª���¡�÷Ӥ������Ҵ�Ѵ��ҹ��� ���ͧ��͡���ѹ�����˺٪�����ѹ��Ҿ���� ��ѹ��� 14 �á�Ҥ� 2554<br />\r\n', '��� �ѡ���¹�������ѹ������¹����� �����ѧ��ҹ ���筻���ª���¡�÷Ӥ������Ҵ�Ѵ��ҹ��� ���ͧ��͡���ѹ�����˺٪�����ѹ��Ҿ���� ��ѹ��� 14 �á�Ҥ� 2554<br />\r\n<br />\r\n���Ҿ�����������<br />\r\n<a href="http://banphue.sytes.net/index.php?name=gallery&amp;op=gallery_detail&amp;id=17">http://banphue.sytes.net/index.php&shy;name=gallery&amp;op=gallery_detail&amp;id=17</a>&nbsp;<br />\r\n', 'admin', '1310842320', '1310842320', 1, 16, '', 1,0);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_news_category`
#

CREATE TABLE `web_news_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `sort` int(11) NOT NULL default '0',
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4  ;

#
# dump ���ҧ `web_news_category`
#

INSERT INTO `web_news_category` VALUES (1, '���ǻ�Ъ�����ѹ��', 1, 'Doc.png');
INSERT INTO `web_news_category` VALUES (2, '������÷����', 2, 'Apps.png');
INSERT INTO `web_news_category` VALUES (3, '��ý֡ͺ��/�֡�Ҵ٧ҹ', 3, 'Picture.png');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_news_comment`
#

CREATE TABLE `web_news_comment` (
  `id` int(7) NOT NULL auto_increment,
  `news_id` int(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_news_comment`
#

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_page`
#

CREATE TABLE `web_page` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `menuname` varchar(50) NOT NULL,
  `detail` text,
  `menugr` varchar(50) default NULL,
  `status` int(1) default '1',
  `sort` int(5) default '1',
  `proto` varchar(50) NOT NULL,
  `links` varchar(150) default NULL,
  `target` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16  ;

#
# dump ���ҧ `web_page`
#

INSERT INTO `web_page` VALUES (1, 'personnel', '����º�ؤ�ҡ�', NULL, 'mainmenu', 1, 5, '', 'index.php?name=personnel&file=detail', '_top');
INSERT INTO `web_page` VALUES (2, 'gallery', '�������Ҿ�Ԩ����', NULL, 'mainmenu', 1, 6, '', 'index.php?name=gallery', '_top');
INSERT INTO `web_page` VALUES (3, 'gbook', '��ش������', NULL, 'mainmenu', 1, 7, '', 'index.php?name=gbook', '_top');
INSERT INTO `web_page` VALUES (4, 'calendar', '��ԷԹ�Ԩ����', NULL, 'mainmenu', 1, 8, '', 'index.php?name=calendar', '_top');
INSERT INTO `web_page` VALUES (5, 'news', '�������/��Ъ�����ѹ��', NULL, 'mainmenu', 1, 9, '', 'index.php?name=news', '_top');
INSERT INTO `web_page` VALUES (6, 'knowledge', '���Ф������', NULL, 'mainmenu', 1, 10, '', 'index.php?name=knowledge', '_top');
INSERT INTO `web_page` VALUES (7, 'workboard', '�ç���/�ҹ', NULL, 'mainmenu', 1, 11, '', 'index.php?name=workboard', '_top');
INSERT INTO `web_page` VALUES (8, 'webboard', '��дҹ����', NULL, 'mainmenu', 1, 12, '', 'index.php?name=webboard', '_top');
INSERT INTO `web_page` VALUES (9, 'Downloads', '��ǹ���Ŵ', NULL, 'mainmenu', 1, 13, '', 'index.php?name=download', '_top');
INSERT INTO `web_page` VALUES (10, 'research', '�ŧҹ�ҧ�Ԫҡ��', NULL, 'mainmenu', 1, 14, '', 'index.php?name=research', '_top');
INSERT INTO `web_page` VALUES (11, 'alumnus', '��Ҥ���������', NULL, 'mainmenu', 1, 15, '', 'index.php?name=alumnus', '_top');
INSERT INTO `web_page` VALUES (12, '�Դ������', 'contact', NULL, 'mainmenu', 1, 16, '', 'index.php?name=contact', '_top');
INSERT INTO `web_page` VALUES (13, 'Blog', 'blog', NULL, 'mainmenu', 1, 17, '', 'index.php?name=blog', '_top');
INSERT INTO `web_page` VALUES (14, '������ç���¹', '������ç���¹', '<p style="text-align: center">\r\n	<span style="font-size: 16px"><strong>������ç���¹<br />\r\n	</strong></span></p>\r\n<center>\r\n	<iframe frameborder="0" height="450" marginheight="0" marginwidth="0" scrolling="no" src="http://maps.google.co.th/maps/ms?hl=th&amp;ie=UTF8&amp;msa=0&amp;msid=112899538573060308323.000496a7e9ada6b8025a5&amp;t=h&amp;ll=16.499659,103.106024&amp;spn=0.004598,0.00589&amp;z=17&amp;output=embed" width="550"></iframe><br />\r\n	<small>�� <a href="http://maps.google.co.th/maps/ms?hl=th&amp;ie=UTF8&amp;msa=0&amp;msid=112899538573060308323.000496a7e9ada6b8025a5&amp;t=h&amp;ll=16.499659,103.106024&amp;spn=0.004598,0.00589&amp;z=17&amp;source=embed" style="text-align: left; color: #0000ff">�ç���¹��ҹ���</a> �Ἱ��袹Ҵ�˭����</small></center>\r\n', 'mainmenu', 1, 3, '', NULL, '');
INSERT INTO `web_page` VALUES (15, '����ѵ��ç���¹', '����ѵ��ç���¹', '<p>\r\n	&nbsp;</p>\r\n<center>\r\n	<span style="font-size: 16px"><strong>����ѵ��ç���¹</strong></span></center>\r\n<p>\r\n	<span style="font-size: 16px">�ç���¹��ҹ���&nbsp;&nbsp; �������������&nbsp; 7&nbsp; �Ӻ�˹ͧ�ا&nbsp; ����ͪ�蹪�&nbsp; �ѧ��Ѵ�����ä��&nbsp; ��駢�������&nbsp;&nbsp; �.�.&nbsp; 2496&nbsp;&nbsp; ��&nbsp; ���������繼��Ѵ���&nbsp; ���§�����ҳ�ͧ��з�ǧ�֡�Ҹԡ��&nbsp; ����չ�ºح����&nbsp; �ʧ��&nbsp; �繤���˭褹�á&nbsp; ���������Ѵ⾸����պ�ҹ�����ʶҹ�֡��&nbsp;&nbsp; �����������ѹ���&nbsp; 20&nbsp; �á�Ҥ�&nbsp;&nbsp;&nbsp; 2516&nbsp;&nbsp; ��ºح�ѹ&nbsp;&nbsp; ���ᾧ����&nbsp; ����˭��ҹ�������������¤�С�����������ҹ���ͺ���Թ��������ʶҹ����͵���ç���¹&nbsp; �ҧ�Ҫ������駺����ҳ���͡�����ҧ�Ҥ�����¹���������¹ѡ���¹�ҡ�����Ѵ⾸����պ�ҹ����ҷ���ç���¹��觹�騹�֧�Ѩ�غѹ&nbsp; <br />\r\n	<br />\r\n	&nbsp;�Ѩ�غѹ�ç���¹��ҹ���&nbsp;&nbsp; �Դ���¹������дѺ���͹غ�Ũ��֧��鹻�ж��֡�һշ��&nbsp; 6&nbsp; �բ���Ҫ��ä�ٷ�����&nbsp;&nbsp;8&nbsp; ��&nbsp; ����ѵ�Ҩ�ҧ&nbsp; 1&nbsp; ��&nbsp; ��ѡ�ҹ��ԡ��&nbsp;&nbsp; 1&nbsp; ��&nbsp;&nbsp; �ѡ���¹&nbsp; 139&nbsp; ��&nbsp; �չ�ªѴʡ� �ԡ�ŷͧ&nbsp; �繼���ӹ�¡���ç���¹<br />\r\n	<br />\r\n	</span></p>\r\n<p style="text-align: center">\r\n	<span style="font-size: 16px"><span style="color: #00f"><span style="font-size: 16px"><strong>�Ӣ�ѭ���ç���¹<br />\r\n	</strong></span></span></span></p>\r\n<p>\r\n	<span style="font-size: 16px">&nbsp;</span></p>\r\n<p style="text-align: center">\r\n	<span style="font-size: 16px"><span style="font-size: 16px">�Ԫҡ����<br />\r\n	�鹨��¸���&nbsp; �ӡ���<br />\r\n	�Ѳ�Ҫ����</span></span></p>\r\n<p style="text-align: center">\r\n	<span style="font-size: 16px"><span style="font-size: 16px"><br />\r\n	<strong><span style="color: #00f">��Ѫ�Ңͧ�ç���¹<br />\r\n	</span></strong></span><br />\r\n	&ldquo; ��������稢ͧ�����&nbsp; ���&nbsp; ��������㨢ͧ��� &ldquo;</span></p>\r\n<p style="text-align: center">\r\n	<span style="font-size: 16px"><span style="font-size: 16px">&nbsp;</span></span></p>\r\n<p style="text-align: center">\r\n	<span style="font-size: 16px"><span style="font-size: 16px"><span style="color: #00f"><strong>�ջ�Ш��ç���¹<br />\r\n	</strong></span><br />\r\n	&ldquo; ��� &ndash; ����Թ &rdquo;<br />\r\n	</span></span></p>\r\n', 'mainmenu', 1, 4, '', NULL, '');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_personnel`
#

CREATE TABLE  `web_personnel` (
  `id` int(5) NOT NULL auto_increment,
  `p_name` varchar(50) NOT NULL,
  `p_position` varchar(100) NOT NULL,
  `p_data` varchar(100) NOT NULL,
  `p_add` varchar(100) NOT NULL,
  `p_tel` varchar(10) NOT NULL,
  `p_mail` varchar(30) NOT NULL,
  `p_pic` varchar(50) NOT NULL,
  `sort` int(2) NOT NULL,
  `boss` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM   AUTO_INCREMENT=3 ;

--
-- dump ���ҧ `web_personnel`
--

INSERT INTO `web_personnel` VALUES(1, '��ªѴʡ� �ԡ�ŷͧ', '����ӹ�¡���ç���¹', '������ʶҹ�֡��', '152 ���� 2 �.˹ͧ�á �.���ͧ �.�������', '0899469997', 'vt9vm@hotmail.com', '1291602651_admin.jpg', 1, 1);
INSERT INTO `web_personnel` VALUES(2, '��ºح��  �Գ��ҧ', '��٪ӹҭ��þ����', '�����¼���ӹ�¡��', '', '', '', '1291900553_boontom.jpg', 4, 0);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_personnel_group`
#

CREATE TABLE `web_personnel_group` (
  `gp_id` tinyint(2) NOT NULL auto_increment,
  `gp_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `sort` int(2) NOT NULL,
  PRIMARY KEY  (`gp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6  ;

#
# dump ���ҧ `web_personnel_group`
#

INSERT INTO `web_personnel_group` VALUES (1, '���º�����', '���º�����', 1);
INSERT INTO `web_personnel_group` VALUES (2, '����������çҹ�Ԫҡ��', '����������çҹ�Ԫҡ��', 2);
INSERT INTO `web_personnel_group` VALUES (3, '����������çҹ�ؤ��', '����������çҹ�ؤ��', 3);
INSERT INTO `web_personnel_group` VALUES (4, '����������çҹ������ҳ', '����������çҹ������ҳ', 4);
INSERT INTO `web_personnel_group` VALUES (5, '����������çҹ�����', '����������çҹ�����', 5);

# --------------------------------------------------------
#
# �ç���ҧ���ҧ `web_personnel_group`
#
CREATE TABLE `web_personnel_list` (
  `id` int(5) NOT NULL auto_increment,
  `g_id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `p_order` int(5) NOT NULL,
  `p_detail` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `g_id` (`g_id`,`u_id`)
) ENGINE=MyISAM   AUTO_INCREMENT=3 ;

#
# dump ���ҧ `web_personnel_list`
#

INSERT INTO `web_personnel_list` VALUES(1, 1, 1, 1, '������ʶҹ�֡��');
INSERT INTO `web_personnel_list` VALUES(2, 1, 2, 2, '�����¼���ӹ�¡��');


#
# �ç���ҧ���ҧ `web_poll_votes`
#

CREATE TABLE `web_poll_votes` (
  `id` int(5) NOT NULL auto_increment,
  `poll_id` int(5) default NULL,
  `vote_id` int(5) default NULL,
  `ip` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1  ;

#
# dump ���ҧ `web_poll_votes`
#



# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_polls`
#

CREATE TABLE `web_polls` (
  `id` int(5) NOT NULL auto_increment,
  `poll_question` text,
  `poll_options` text,
  `page` varchar(200) default NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2  ;

#
# dump ���ҧ `web_polls`
#

INSERT INTO `web_polls` VALUES (1, '�س�Դ����ǻ��������ҧ��', '���ҡ|��|�ҹ��ҧ|���|����ҡ|', 'education', 1);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_random`
#

CREATE TABLE `web_random` (
  `id` int(5) NOT NULL auto_increment,
  `rm_news` int(5) NOT NULL,
  `rm_image` varchar(255) NOT NULL,
  `rm_topic` varchar(255) NOT NULL,
  `rm_detail` varchar(255) NOT NULL,
  `rm_link` varchar(255) NOT NULL,
  `width` int(50) NOT NULL,
  `height` int(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(50) NOT NULL,
  `status` int(5) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM   AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_random`
#

#
# �ç���ҧ���ҧ `web_research`
#

CREATE TABLE `web_research` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(10) NOT NULL default '',
  `topic` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `posted` varchar(100) NOT NULL default '',
  `auth` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL default '',
  `update_date` varchar(50) NOT NULL default '',
  `enable_comment` tinyint(1) NOT NULL default '0',
  `abstract` varchar(100) NOT NULL,
  `full_text` varchar(100) NOT NULL,
  `pageview` int(11) NOT NULL default '0',
  `rate` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=3 ;

#
# dump ���ҧ `web_research`
#

INSERT INTO `web_research` VALUES (1, '1', '��þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R  �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��  2', '<p>\r\n	��þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �¡�� ��Ẻ�֡�ѡ��&nbsp; ���·����ѡ���¹�Դ������¹��������ҧ��&nbsp; �觼����ѡ���¹�ռ����ķ���ҧ������¹��仵������������·���˹����&nbsp;&nbsp; �֧���ʹѺʹع��������', '<p>\r\n	<strong><span style="color: #f00">��������ͧ</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ��þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 2<br />\r\n	<span style="color: #f00">���ͼ���Ԩ��</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �ҧ�Ե���&nbsp; �ԡ�ŷͧ<br />\r\n	<span style="color: #f00">���˹�</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;���&nbsp; �Է°ҹ�&nbsp; ��٪ӹҭ���<br />\r\n	<span style="color: #f00">�ç���¹&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;�ú���Է�Ҥ��&nbsp;&nbsp; �ӹѡ�ҹࢵ��鹷�����֡���Ѹ���֡��&nbsp;&nbsp; ࢵ&nbsp; 26<br />\r\n	<span style="color: #f00">�ա���֡��</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;2553</strong></p>\r\n<p style="text-align: center">\r\n	<br />\r\n	<strong>���Ѵ���</strong></p>\r\n<p>\r\n	<br />\r\n	&nbsp;�����ҹ���ҧ���Ԩ�ó�ҳ�繷ѡ���Ӥѭ��Ш��繵�͹ѡ���¹�ҡ&nbsp; ��駹�����С����ҹ���������ҹ�դ�������������&nbsp; ����ö���������Ԩ�ó�&nbsp; ��Ш�������ͧ�����&nbsp; ��ʹ������ö��������ª��㹡�ô��Թ���Ե��Ш��ѹ&nbsp;&nbsp;&nbsp; ����Ԩ��㹤��駹���դ��������������&nbsp;&nbsp; 1)&nbsp;&nbsp; ���;Ѳ�ҷѡ�С����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp; ����ջ���Է���Ҿ���ࡳ��&nbsp; 80/80&nbsp;&nbsp; 2)&nbsp; �����ҴѪ�ջ���Է�ԼŢͧẺ�֡�ѡ�С����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը�&nbsp; SQ3R&nbsp;&nbsp; 3)&nbsp; �������º��º�����ķ���ҧ������¹�Ԫ�������&nbsp; �����ҧ��ṹ��͹���¹��Ф�ṹ��ѧ���¹&nbsp;&nbsp; �����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R�¡���� Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp;&nbsp;&nbsp; 4)&nbsp; �����֡�Ҥ����֧��㨵�͡�þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը�SQ3R&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡ɻշ��&nbsp; 2 �����������ҧ�����㹡���Ԩ�� ����&nbsp; �ѡ���¹����Ѹ���֡�һշ�� 2 /2 �ç���¹�ú���Է�Ҥ��&nbsp; �ѧ�Ѵ�ӹѡ�ҹࢵ��鹷�����֡���Ѹ���֡��&nbsp; ࢵ&nbsp;&nbsp; 26&nbsp;&nbsp; �Ҥ���¹���&nbsp; 1 �ա���֡��&nbsp; 2553&nbsp;&nbsp;&nbsp; �ӹǹ 45&nbsp; �� ��������¡�����͡Ẻ��Ш�&nbsp; (Purposive&nbsp; Sampling) ����ͧ��ͷ����㹡���Ԩ��&nbsp; ���&nbsp; 1)&nbsp; Ἱ��èѴ������¹���&nbsp; ����ͧ&nbsp; �����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R ����Ѹ���֡�� �շ��&nbsp; 2&nbsp; �ӹǹ 7&nbsp; Ἱ&nbsp;&nbsp; Ἱ�� 2 �������&nbsp; ���&nbsp; 14&nbsp; �������&nbsp;&nbsp;&nbsp; 2)&nbsp; Ẻ�֡�ѡ��&nbsp; �����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �ӹǹ&nbsp; 7&nbsp; ����&nbsp;&nbsp; 3)&nbsp; Ẻ���ͺ�Ѵ�����ķ���ҧ������¹�Ԫ�������&nbsp; ����Ѹ���֡�һշ��&nbsp; 2&nbsp; ��Ẻ�ù��&nbsp;&nbsp; ��Դ���͡�ͺ 4 ������͡&nbsp;&nbsp; �ӹǹ&nbsp; 40&nbsp; ���&nbsp;&nbsp;&nbsp; 4)&nbsp;&nbsp; Ẻ�ͺ��������֧��㨢ͧ�ѡ���¹ ����Ѹ���֡�һշ��&nbsp; 2&nbsp; ����յ�͡�þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R�¡����Ẻ�֡�ѡ��&nbsp;&nbsp; ��Ẻ�ҵ����ǹ����ҳ���&nbsp;&nbsp; 5&nbsp; �дѺ&nbsp;&nbsp; (Rating Scale)&nbsp;&nbsp;&nbsp; �ӹǹ&nbsp; 20&nbsp; ���<br />\r\n	&nbsp;�š���Ԩ��&nbsp; ��ҡ�&nbsp; �ѧ���<br />\r\n	&nbsp;&nbsp;1.&nbsp; ����Է���Ҿ�ͧ��þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp; �ջ���Է���Ҿ��ҡѺ&nbsp;&nbsp; 82.65/ 81.28&nbsp;&nbsp;&nbsp; <br />\r\n	&nbsp;&nbsp;2.&nbsp; �Ѫ�ջ���Է�ԼŢͧẺ�֡�ѡ�С����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը�&nbsp; SQ3R&nbsp;&nbsp; �դ����ҡѺ&nbsp;&nbsp; 0.5489&nbsp; �ʴ���ҹѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp; �դ�������˹�ҷҧ������¹ ������&nbsp; 54.89&nbsp; <br />\r\n	&nbsp;&nbsp;3.&nbsp; ������º��º�����ķ���ҧ������¹�����¢ͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp; ������¹�����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R�¡���� Ẻ�֡�ѡ���ռ����ķ���ҧ������¹��ѧ���¹�٧���Ҥ�ṹ��͹���¹���ҧ�չ���Ӥѭ�ҧʶԵԷ���дѺ&nbsp; .01&nbsp; <br />\r\n	&nbsp;&nbsp;4.&nbsp; �ѡ���¹����Ѹ���֡�һշ��&nbsp; 2&nbsp;&nbsp; �դ����֧��㨵�͡�þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը�&nbsp; SQ3R �¡����Ẻ�֡�ѡ��&nbsp; �դ������������ҡѺ&nbsp; 4.52 ������дѺ�ҡ����ش<br />\r\n	&nbsp;����ػ&nbsp;&nbsp; ��þѲ�ҡ����ҹ���ҧ���Ԩ�ó�ҳ�����ٻẺ�����ҹ�Ը� SQ3R&nbsp; �¡�� ��Ẻ�֡�ѡ��&nbsp; ���·����ѡ���¹�Դ������¹��������ҧ��&nbsp; �觼����ѡ���¹�ռ����ķ���ҧ������¹��仵������������·���˹����&nbsp;&nbsp; �֧���ʹѺʹع����������¹��Ըա���͹��ҹẺ SQ3R ���㹡�èѴ�Ԩ���������ҹ �Ъ������ѡ���¹�����͡�ʽ֡�ѡ�С����ҹ ������������кǹ��äԴ���ҧ���к�&nbsp; ������èѴ�Ԩ����������¹����͹������������ҧ�ջ���Է���Ҿ</p>\r\n', 'admin', '�ҧ�Ե���  �ԡ�ŷͧ', '1298518879', '1298518879', 1, 'research_1298518879_abstract.swf', '', 114, 15);
INSERT INTO `web_research` VALUES (2, '1', '��þѲ�ҷѡ�С����������������Ẻ�֡�ѡ�����������  ����Ԫ�  ���������  1  �  41201  �Ѹ���֡�һշ��  4  �ç���¹�ѧ��鹿���Է�Ҥ�', '��þѲ�ҷѡ�С����������������Ẻ�֡�ѡ����������� ����Ԫ���������� 1&nbsp; �&nbsp; 41201&nbsp;&nbsp; ����Ѹ���֡�һշ��&nbsp; 4&nbsp; �ç���¹�ѧ��鹿���Է�Ҥ�&nbsp;&nbsp; �դ���������¢ͧ����Ԩ��&nbsp;&nbsp; �ѧ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n', '��þѲ�ҷѡ�С����������������Ẻ�֡�ѡ����������� ����Ԫ���������� 1&nbsp; �&nbsp; 41201&nbsp;&nbsp; ����Ѹ���֡�һշ��&nbsp; 4&nbsp; �ç���¹�ѧ��鹿���Է�Ҥ�&nbsp;&nbsp; �դ���������¢ͧ����Ԩ��&nbsp;&nbsp; �ѧ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1)&nbsp; ���;Ѳ�ҷѡ�С����������������Ԫ�&nbsp; ��������� 1&nbsp; � 41201&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ�� 4&nbsp; ����ջ���Է���Ҿ���ࡳ��&nbsp; 80/80&nbsp; 2) �����ҴѪ�ջ���Է�ԼŢͧẺ�֡�ѡ�С������������&nbsp; ����Ԫ� ��������� 1 � 41201 �ͧ�ѡ���¹ ����Ѹ���֡�� �շ��&nbsp; 4&nbsp;&nbsp; 3) �������º��º�����ķ���ҧ������¹�����ҧ��ṹ��͹���¹��Ф�ṹ��ѧ���¹�ѡ�С������������&nbsp;&nbsp; ����Ԫ�&nbsp; ��������� 1&nbsp; � 41201&nbsp; �¡����Ẻ�֡�ѡ�Тͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp;&nbsp; 4) �����֡�Ҥ����֧��㨵�͡�þѲ�ҷѡ�С�������������¡����Ẻ�֡�ѡ������Ԫ�&nbsp; ��������� 1&nbsp; �&nbsp; 41201&nbsp; �ͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp; �����������ҧ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �����㹡���Ԩ��&nbsp; ����&nbsp; �ѡ���¹����Ѹ���֡�һշ�� 4 �ç���¹�ѧ��鹿���Է�Ҥ�&nbsp;&nbsp; �Ҥ���¹���&nbsp; 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �ա���֡��&nbsp;&nbsp; 2552&nbsp;&nbsp; �ӹǹ&nbsp; 30&nbsp;&nbsp; ��&nbsp; ��������¡�����͡Ẻ��Ш�&nbsp; (Purposive&nbsp; Sampling)����ͧ��ͷ����㹡���Ԩ��&nbsp;&nbsp; ���&nbsp;&nbsp; 1)&nbsp;&nbsp; Ἱ��èѴ������¹���&nbsp;&nbsp; 2)&nbsp;&nbsp; Ẻ�֡�ѡ�С������������&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3)&nbsp; Ẻ���ͺ�Ѵ�����ķ���ҧ������¹ ����Ѹ���֡�һշ�� 4&nbsp; ��Ẻ�ù��&nbsp; ��Դ���͡�ͺ&nbsp;&nbsp; 4&nbsp; ������͡&nbsp;&nbsp; �ӹǹ&nbsp; 40&nbsp; ���&nbsp;&nbsp; 4)&nbsp;&nbsp; Ẻ�ͺ��������֧��㨢ͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp;&nbsp; ����յ�͡�þѲ�ҷѡ�С�������������¡����Ẻ�֡�ѡ�� ��Ẻ�ҵ����ǹ ����ҳ���&nbsp;&nbsp;&nbsp; 5&nbsp; �дѺ&nbsp;&nbsp; (Rating Scale)&nbsp;&nbsp;&nbsp; �ӹǹ&nbsp; 20&nbsp; ���<br />\r\n�š���Ԩ��&nbsp; ��ҡ�&nbsp; �ѧ���<br />\r\n&nbsp;&nbsp;1.&nbsp;&nbsp; ����Է���Ҿ�ͧ��þѲ�ҷѡ�С������������&nbsp;&nbsp; �¡����Ẻ�֡�ѡ�� �ͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp; �ջ���Է���Ҿ��ҡѺ 82.06/ 81.08&nbsp;&nbsp;&nbsp; <br />\r\n&nbsp;&nbsp;2.&nbsp;&nbsp; �Ѫ�ջ���Է�ԼŢͧẺ�֡�ѡ�С������������&nbsp;&nbsp;&nbsp; �դ����ҡѺ&nbsp;&nbsp; 0.6159&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �ʴ���ҹѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp; �դ�������˹�ҷҧ������¹&nbsp; ������&nbsp; 61.59&nbsp; <br />\r\n&nbsp;3.&nbsp; ������º��º�����ķ���ҧ������¹�ͧ�ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp; ������¹ �ѡ�С������������ ����Ԫ� ��������� 1&nbsp; � 41201&nbsp; �¡����Ẻ�֡�ѡ�� �ռ����ķ���ҧ������¹��ѧ���¹�٧���Ҥ�ṹ��͹���¹���ҧ�չ���Ӥѭ�ҧʶԵԷ���дѺ&nbsp; .05&nbsp; <br />\r\n&nbsp;4.&nbsp; �ѡ���¹����Ѹ���֡�һշ��&nbsp; 4&nbsp;&nbsp; �դ����֧��㨵�͡�þѲ�ҷѡ�С������������ ����Ԫ� ��������� 1&nbsp; � 41201&nbsp; �¡����Ẻ�֡�ѡ��&nbsp; �դ������������ҡѺ&nbsp; 4.52&nbsp;&nbsp; ������дѺ�ҡ����ش<br />\r\n����ػ��Ҿ���Ẻ�֡�ѡ�����������&nbsp; ����Ԫ�&nbsp; ��������� 1&nbsp; �&nbsp; 41201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', 'guest', '����  ��и������', '1309345665', '1309345665', 0, '', '', 21, 0);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_research_category`
#

CREATE TABLE `web_research_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `sort` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 ;

#
# dump ���ҧ `web_research_category`
#

INSERT INTO `web_research_category` VALUES (1, '�ҹ�Ԩ�¡���֡��', 1);
INSERT INTO `web_research_category` VALUES (2, '�ҹ�Ԩ�·����', 2);
INSERT INTO `web_research_category` VALUES (3, '��ѵ�����ҧ����֡��', 3);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_research_comment`
#

CREATE TABLE `web_research_comment` (
  `id` int(7) NOT NULL auto_increment,
  `research_id` int(7) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `comment` text NOT NULL,
  `ip` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `research_id` (`research_id`)
) ENGINE=MyISAM  AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_research_comment`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_templates`
#

CREATE TABLE `web_templates` (
  `id` tinyint(5) NOT NULL auto_increment,
  `temname` varchar(200) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `width` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `sort` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `temname` (`temname`)
) ENGINE=MyISAM AUTO_INCREMENT=7  ;

#
# dump ���ҧ `web_templates`
#


INSERT INTO `web_templates` VALUES (1, 'cli3', 'topmini.png', 'image/x-png', '1000', '112', 1);

INSERT INTO `web_templates` VALUES (2, 'cli3', 'topbig.png', 'image/x-png', '1000', '288', 2);

INSERT INTO `web_templates` VALUES (3, 'cli3', 'footer.png', 'image/x-png', '1000', '79', 3);

INSERT INTO `web_templates` VALUES (4, 'atomy', 'banner1.png', 'image/x-png', '996', '36', 1);

INSERT INTO `web_templates` VALUES (5, 'atomy', 'banner.png', 'image/x-png', '996', '152', 2);

INSERT INTO `web_templates` VALUES (6, 'atomy', 'barfoot.png', 'image/x-png', '996', '94', 3);


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_useronline`
#

CREATE TABLE IF NOT EXISTS `web_useronline` (
  `post_date` int(50) NOT NULL,
  `useronline` varchar(50) NOT NULL,
  `timeout` int(50) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=MyISAM ;


#
# dump ���ҧ `web_useronline`
#

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_vote`
#

CREATE TABLE `web_vote` (
  `id` int(11) NOT NULL auto_increment,
  `num` int(3) NOT NULL,
  `ip` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `name_id` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

#
# dump ���ҧ `web_vote`
#
INSERT INTO `web_vote` VALUES (1, 5, '223.206.13', 'gallery', 1);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_webboard`
#

CREATE TABLE `web_webboard` (
  `id` int(11) NOT NULL auto_increment,
  `category` int(3) NOT NULL default '0',
  `topic` varchar(255) NOT NULL default '',
  `detail` text NOT NULL,
  `picture` varchar(50) NOT NULL default '',
  `post_name` varchar(50) NOT NULL default '',
  `is_member` int(7) NOT NULL default '0',
  `ip_address` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `post_update` varchar(50) NOT NULL default '',
  `pin_date` varchar(50) NOT NULL,
  `pageview` int(5) NOT NULL default '0',
  `enable_show` int(2) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_id` (`category`),
  KEY `id` (`id`),
  KEY `post_date` (`post_date`)
) ENGINE=MyISAM AUTO_INCREMENT=3 ;

#
# dump ���ҧ `web_webboard`
#

INSERT INTO `web_webboard` VALUES(1, 1, '��Ŵ�����ѹ 2.5', '�������ѹ 2.5 ��Ѻ&nbsp; ������ҧ������&nbsp; <a href="http://banphue.sytes.net">http://banphue.sytes.net</a><br /><br />\r\n<br /><br />\r\n���Դ�����Ŵ��͹�˹��Ѻ<br /><br />\r\n��˹��ѹ�˹���Ѻ', '', '�����硫�', 0, '182.52.184.117', '1300329304', '1309885042', '', 315, 0, '');
INSERT INTO `web_webboard` VALUES(2, 1, 'atomymaxsite2.5', '<p><br />\r\n	��ҹ ��. ���Դ����ѻഷ�����Ѻ&nbsp; ��������ѹ�˹��ͤ�Ѻ<br /><br />\r\n	<br /><br />\r\n	(��Ҫԡ���)</p><br />\r\n', '', 'kikkok_2531', 0, '223.207.174.147', '1309885338', '1309885338', '', 81, 0, '');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_webboard_category`
#

CREATE TABLE `web_webboard_category` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL default '',
  `category_des` varchar(200) NOT NULL,
  `sort` int(11) NOT NULL default '0',
  `status` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 ;

#
# dump ���ҧ `web_webboard_category`
#

INSERT INTO `web_webboard_category` VALUES (1, '��ͧ������', '', 1,0);
INSERT INTO `web_webboard_category` VALUES (2, '�ͺ��� �ٴ�������ǡѺ������¹����͹', '', 2,0);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_webboard_comment`
#

CREATE TABLE `web_webboard_comment` (
  `id` int(11) NOT NULL auto_increment,
  `topic_id` int(7) NOT NULL default '0',
  `detail` text NOT NULL,
  `picture` varchar(50) NOT NULL default '',
  `post_name` varchar(50) NOT NULL default '',
  `is_member` int(7) NOT NULL default '0',
  `ip_address` varchar(50) NOT NULL default '',
  `post_date` varchar(50) NOT NULL default '',
  `att` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1  ;

#
# dump ���ҧ `web_webboard_comment`
#

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_members`
#

CREATE TABLE `web_workboard_members` (
  `member_id` int(11) NOT NULL auto_increment,
  `member_name` varchar(255) NOT NULL default '',
  `member_email` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

#
# dump ���ҧ `web_workboard_members`
#

INSERT INTO `web_workboard_members` VALUES (1, '��ªѴʡ�  �ԡ�ŷͧ', 'vt9vm@hotmail.com');
INSERT INTO `web_workboard_members` VALUES (4, '��ºح��  �Թ��ҧ', '');


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_positions`
#

CREATE TABLE `web_workboard_positions` (
  `position_id` int(11) NOT NULL auto_increment,
  `position_name` varchar(255) NOT NULL default '',
  `position_description` text NOT NULL,
  PRIMARY KEY  (`position_id`),
  KEY `position_id` (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6  ;

#
# dump ���ҧ `web_workboard_positions`
#

INSERT INTO `web_workboard_positions` VALUES (1, '����������çҹ�ؤ��', '����������çҹ�ؤ��');
INSERT INTO `web_workboard_positions` VALUES (2, '����������çҹ�Ԫҡ��', '����������çҹ�Ԫҡ��');
INSERT INTO `web_workboard_positions` VALUES (4, '����������çҹ�����', '����������çҹ�����');
INSERT INTO `web_workboard_positions` VALUES (5, '����������çҹ������ҳ', '����������çҹ������ҳ');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_priorities`
#

CREATE TABLE `web_workboard_priorities` (
  `priority_id` int(11) NOT NULL auto_increment,
  `priority_name` varchar(30) NOT NULL default '',
  `priority_weight` int(11) NOT NULL default '1',
  PRIMARY KEY  (`priority_id`),
  KEY `priority_id` (`priority_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8  ;

#
# dump ���ҧ `web_workboard_priorities`
#

INSERT INTO `web_workboard_priorities` VALUES (1, '���', 2);
INSERT INTO `web_workboard_priorities` VALUES (2, '����ҡ', 1);
INSERT INTO `web_workboard_priorities` VALUES (4, '�����', 0);
INSERT INTO `web_workboard_priorities` VALUES (5, '�ҹ��ҧ', 3);
INSERT INTO `web_workboard_priorities` VALUES (6, '�٧', 4);
INSERT INTO `web_workboard_priorities` VALUES (7, '�٧�ҡ', 5);

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_projects`
#

CREATE TABLE `web_workboard_projects` (
  `project_id` int(11) NOT NULL auto_increment,
  `project_name` varchar(255) NOT NULL default '',
  `project_description` text NOT NULL,
  `priority_id` int(11) NOT NULL default '0',
  `status_id` int(11) NOT NULL default '0',
  `status_percent` float NOT NULL default '0',
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_started` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_finished` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`project_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

#
# dump ���ҧ `web_workboard_projects`
#

INSERT INTO `web_workboard_projects` VALUES(1, '��Ҥ����١����-��ǡҪҴ', '��Ҥ����١����-��ǡҪҴ', 6, 5, 100, '2011-03-18 20:26:11', '2011-01-04 00:00:00', '2011-01-15 00:00:00');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_projects_members`
#

CREATE TABLE `web_workboard_projects_members` (
  `project_id` int(11) NOT NULL default '0',
  `member_id` int(11) NOT NULL default '0',
  `position_id` int(11) NOT NULL default '0',
  KEY `project_id` (`project_id`),
  KEY `member_id` (`member_id`)
) ENGINE=MyISAM ;

#
# dump ���ҧ `web_workboard_projects_members`
#
# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_status`
#

CREATE TABLE `web_workboard_status` (
  `status_id` int(11) NOT NULL auto_increment,
  `status_name` varchar(255) NOT NULL default '',
  `status_description` text NOT NULL,
  PRIMARY KEY  (`status_id`),
  KEY `status_id` (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9   ;

#
# dump ���ҧ `web_workboard_status`
#

INSERT INTO `web_workboard_status` VALUES (1, '�ҧἹ', '�ҧἹ');
INSERT INTO `web_workboard_status` VALUES (2, '�����', '�����');
INSERT INTO `web_workboard_status` VALUES (3, '�Դ', '�Դ');
INSERT INTO `web_workboard_status` VALUES (4, '�Դ', '�Դ');
INSERT INTO `web_workboard_status` VALUES (5, '����', '����');
INSERT INTO `web_workboard_status` VALUES (6, '��', '��');
INSERT INTO `web_workboard_status` VALUES (7, '��ش', '��ش');
INSERT INTO `web_workboard_status` VALUES (8, '¡��ԡ', '¡��ԡ');

# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_tasks`
#

CREATE TABLE `web_workboard_tasks` (
  `task_id` int(11) NOT NULL auto_increment,
  `project_id` int(11) NOT NULL default '0',
  `task_name` varchar(255) NOT NULL default '',
  `task_description` text NOT NULL,
  `priority_id` int(11) NOT NULL default '0',
  `status_id` int(11) NOT NULL default '0',
  `status_percent` float NOT NULL default '0',
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_started` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_finished` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`task_id`),
  KEY `task_id` (`task_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

#
# dump ���ҧ `web_workboard_tasks`
#


# --------------------------------------------------------

#
# �ç���ҧ���ҧ `web_workboard_tasks_members`
#

CREATE TABLE `web_workboard_tasks_members` (
  `task_id` int(11) NOT NULL default '0',
  `member_id` int(11) NOT NULL default '0',
  KEY `task_id` (`task_id`),
  KEY `member_id` (`member_id`)
) ENGINE=MyISAM ;

#
# dump ���ҧ `web_workboard_tasks_members`
#

