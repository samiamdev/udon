<?php
//require_once('mainfile.php');
//require_once("includes/html2pdf/setPDF.php");
require_once('mainfile.php');
ob_end_clean();
$_GET['id'] = intval($_GET['id']);
//�ʴ��������/��Ъ�����ѹ�� 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
if ($mo=='news'){
$res['pdf'] = $db->select_query("SELECT * FROM ".TB_NEWS." WHERE id='".$_GET['id']."' ");
$arr['pdf'] = $db->fetch($res['pdf']);
$res['category'] = $db->select_query("SELECT * FROM ".TB_NEWS_CAT." WHERE id='".$arr['pdf']['category']."' "); 
$arr['category'] = $db->fetch($res['category']);
} else if ($mo=='knowledge'){
$res['pdf'] = $db->select_query("SELECT * FROM ".TB_KNOWLEDGE." WHERE id='".$_GET['id']."' ");
$arr['pdf'] = $db->fetch($res['pdf']);
$res['category'] = $db->select_query("SELECT * FROM ".TB_KNOWLEDGE_CAT." WHERE id='".$arr['pdf']['category']."' "); 
$arr['category'] = $db->fetch($res['category']);
} else if ($mo=='blog'){
$res['pdf'] = $db->select_query("SELECT * FROM ".TB_BLOG." WHERE id='".$_GET['id']."' ");
$arr['pdf'] = $db->fetch($res['pdf']);
$res['category'] = $db->select_query("SELECT * FROM ".TB_BLOG_CAT." WHERE id='".$arr['pdf']['category']."' "); 
$arr['category'] = $db->fetch($res['category']);
}
$db->closedb ();
$cat=''._PDF_CAT.' : '.$arr['category']['category_name'].'<br>';
$titles=''._PDF_TOPIC.' : '.stripslashes(FixQuotes($arr['pdf']['topic'])).'<br>';
$authors=''._FORM_MOD_POSTED.' : '.$arr['pdf']['posted'].'<br>';
$da= ThaiTimeConvert($arr['pdf']['post_date'],"1","");
$dates=''._FORM_MOD_POSTDATE.' '.$da.'<br>';
$view=''._DETAIL_PRIVIEW.'  : '.$arr['pdf']['pageview'].'<br>';
if ($arr['pdf']['pic']==1){
	if($mo=='blog'){
	$imagex='<img  src=icon/'.$mo.'_'.$arr['pdf']['post_date'].'_'.$arr['pdf']['posted'].'.jpg><br>';
	}else {
	$imagex='<img  src=icon/'.$mo.'_'.$arr['pdf']['post_date'].'.jpg><br>';
	}

	} else {
	$imagex='<img src=images/icon/'.$arr['category']['icon'].'><br>';
	}
$sum=''.$imagex.''.$cat.''.$titles.''.$authors.''.$dates.''.$view.'';


require_once('includes/html2pdf/config/lang/eng.php');
require_once('includes/html2pdf/tcpdf.php');
require_once('includes/html2pdf/htmltoolkit.php');
// ���������鹵�ҧ� ����ö���仡�˹�������� tcpdf_config.php ������� config
// ���ҧ PDF document ����
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

// ��˹���������´�ͧ�͡��� pdf �ʴ�����ͤ�ԡ��ҷ����� PDF �������͡ Document Property
$pdf->SetCreator(PDF_CREATOR); // ����ͧ������ҧ PDF  �������� PDF_CREATOR = TCPDF
$pdf->SetAuthor(''._PDF_AUTH.' : '.$arr['pdf']['posted'].''); // ���ͼ�����ҧ��� PDF
$pdf->SetTitle(''._PDF_CAT.' : '.$arr['category']['category_name'].'');//  ��˹� Title
$pdf->SetSubject(''._PDF_TOPIC.' : '.$arr['pdf']['topic'].''); // ��˹� Subject
$pdf->SetKeywords('TCPDF, PDF, USING HTML 2 PDF'); // ��˹� Keyword

//   ��˹���������������Ѻ Header
//	PDF_HEADER_LOGO  �����ٻ�Ҿ��ǹ Header
//	PDF_HEADER_LOGO_WIDTH �������ҧ�ͧ���� �� ������� (mm)
//	PDF_HEADER_TITLE �������ͧ�ͧ Header
//	PDF_HEADER_STRING ��ͤ�������ͧ����ʴ����ǹ header ��鹺�÷Ѵ������ \n
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// ��˹����������� Font ����Ѻ��ͧ��ҧ
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//��駤��˹�ҡ�д��
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//��˹������˹���ѵ��ѵ�
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// ��˹��Ѵ����ǹ�ͧ�ٻ�Ҿ
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

// ��˹����������
$pdf->setLanguageArray($l); 

// ��˹� Font �ó����������� freeserif
$pdf->SetFont('freeserif', '', 10);


$pdf->AddPage();

// ��˹� HTML code �����Ѻ��Ҩҡ����÷������
//	�óա�˹��µç
//	������ҧ �ó��Ѻ�ҡ�����



$thepage = $arr['pdf']['detail'];
$Detail = stripslashes(FixQuotes($thepage));
$xxx=''.$sum.''.$Detail.'';
if(ISO =='utf-8'){
$Detailss=$xxx;
} else {
$Detailss=iconv("TIS-620","UTF-8",$xxx);
}
 $htmlcontent =$Detailss;
//$htmlcontent='<p>���ͺ</p>';
$htmlcontent=stripslashes($htmlcontent);
$htmlcontent=AdjustHTML($htmlcontent);

// ���ҧ�����Ҩҡ  HTML code
$pdf->writeHTML($htmlcontent, true, 0, true, 0);

// ����͹ pointer �˹���ش����
$pdf->lastPage();

// �Դ������ҧ�͡��� PDF
$pdf->Output('createpdf.pdf', 'I');

?>