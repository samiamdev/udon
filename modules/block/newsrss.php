<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ISO;?>">
	<center>
										<table class='iconframe' cellpadding='0' cellspacing='0'>
										<tbody>
										<tr>
										<td class='imageframe'>
  													<TABLE width="<?=$widthSUMC;?>" align=center cellSpacing=0 cellPadding=0 border=0>
													<tr>
													<td>
  <?
  //header("content-type: application/x-javascript; charset=utf-8");
//  include ("http://maxtom.sytes.net/modules/rss/readnews.php");
 //   include iconv("UTF-8","TIS-620","http://maxtom.sytes.net/modules/rss/readnews.php");
ini_set('allow_url_fopen','On'); 
ini_set('allow_url_include','On'); 

$site="".WEB_URL."";


$xml5=file("".$site."/modules/rss/news.xml"); // ��˹� url �ͧ rss ������ͧ���
$xmlDATA=""; // ���ҧ���������Ѻ�纤�� xml ������
foreach($xml5 as $key=>$value){
	$xmlDATA.=$value;
}
$data1=explode("<item>",$xmlDATA);
$iTitle=array(); 			// ����� Array ����Ѻ����Ǣ�͢���
$iLink=array(); 			// ����� Array ����Ѻ����駤�
$iPic=array(); 	// ����� Array �ٻ�Ҿ
$iDesc=array(); 			// ����� Array ����Ѻ����������´Ẻ���
$ipubDate=array(); 	// ����� Array ����Ѻ���ѹ���
echo "<table width=100% border=0 cellpadding=0 cellspacing=0>";
$Color == 0;
foreach ($data1 as $key=>$value){ // ǹ�ٻ �����纤�ҵ�ҧ� ���㹵���ô�ҹ������˹�
//
	if($key>0){
echo "<TR>"; 
		if($Color == 0){
		$Color = 1 ;
		$ColorFill = "#F0F0F0";
	}else{
		$Color = 0 ;
		$ColorFill = "#FDEAFB";
	}
		$value=str_replace("</item>","",$value);
		$iTitle[$key]=strip_tags(substr($value,strpos($value,"<title>"),strpos($value,"</title>")));
		$iLink[$key]=strip_tags(substr($value,strpos($value,"<link>"),strpos($value,"</link>")-strpos($value,"<link>")));
		$iPic[$key]=strip_tags(substr($value,strpos($value,"<pic>"),strpos($value,"</pic>")-strpos($value,"<pic>")));
		$iDesc[$key]=strip_tags(substr($value,strpos($value,"<description>"),strpos($value,"</description>")-strpos($value,"<description>")));
		$ipubDate[$key]=strip_tags(substr($value,strpos($value,"<pubDate>"),strpos($value,"</pubDate>")-strpos($value,"<pubDate>")));
		//�ʴ�������
		$timesdate=ThaiTimeConvert($ipubDate[$key],"","");
//		echo "<tr><td><img src=images/go.gif><a href='".$iLink[$key]."' target='_blank' /><img src='".$iPic[$key]."' border=0 align=left><b>".$iTitle[$key]."</b></a><br>".$iDesc[$key]." ";
//		echo " ".NewsIcon(TIMESTAMP, $ipubDate[$key], "images/icon_new.gif")."";
//		echo "(".$timesdate.")</td></tr>";
		
		echo "<td bgcolor=$ColorFill><img src=images/17.png><a href='".$iLink[$key]."' target='_blank' /><b>  ".$iTitle[$key]."</b></a>";
		echo " ".NewsIcon(TIMESTAMP, $ipubDate[$key], "images/icon_new.gif")."";
		echo "(".$timesdate.")</td></tr>";
echo "</Tr><TR><TD colspan=2 height=\"1\" class=\"dotline\"></TD></TR>";
		}
}
echo "<TR><TD colspan=2 height=\"1\" class=\"dotline\"></TD></TR>";
echo "</table>";
?>
													<td>
													</tr>
													<tr>
													<td colspan="2" align="right"><A HREF="<?echo $site;?>index.php?name=news&category=2" ><img src="images/admin/2_15.gif"></a></td>
													</tr>
													</table>
											</td>
											</tr>
											</table>


