//var url = window.location.href;
//var url = String(window.location);
var url = './';
var pic_width=520; //�������ҧ
var pic_height=200; //�����٧
var button_pos=6; //�ӹǹ�Ҿ
var stop_time=5000; 
var show_text=0; 
var txtcolor="000000"; //�յ���ѡ��
var bgcolor="fffff"; //�վ����ѧ
var imag=new Array();
var link=new Array();
var text=new Array();


imag[1]=""+url+"/images/random/wat1.jpg";//�ٻ�����ɳҷ�� 1
link[1]=""+url+"/images/random/wat1.jpg";//Link ����ͧ������ ����� ��ԡ
text[1]="�ٻ�Ҿ��� 1";//��͸Ժ�����Ҿ

imag[2]=""+url+"/images/random/wat2.jpg";//�ٻ�����ɳҷ�� 2
link[2]=""+url+"/images/random/wat2.jpg";//Link ����ͧ������ ����� ��ԡ
text[2]="�ٻ�Ҿ��� 2";//��͸Ժ�����Ҿ

imag[3]=""+url+"/images/random/wat3.jpg";//�ٻ�����ɳҷ�� 3
link[3]=""+url+"/images/random/wat3.jpg";//Link ����ͧ������ ����� ��ԡ
text[3]="�ٻ�Ҿ��� 3";//��͸Ժ�����Ҿ

imag[4]=""+url+"/images/random/wat4.jpg";//�ٻ�����ɳҷ�� 4
link[4]=""+url+"/images/random/wat4.jpg";//Link ����ͧ������ ����� ��ԡ
text[4]="�ٻ�Ҿ��� 4";//��͸Ժ�����Ҿ

imag[5]=""+url+"/images/random/wat5.jpg";//�ٻ�����ɳҷ�� 5
link[5]=""+url+"/images/random/wat5.jpg";//Link ����ͧ������ ����� ��ԡ
text[5]="�ٻ�Ҿ��� 5";//��͸Ժ�����Ҿ

imag[6]=""+url+"/images/random/wat6.jpg";//�ٻ�����ɳҷ�� 6
link[6]=""+url+"/images/random/wat6.jpg";//Link ����ͧ������ ����� ��ԡ
text[6]="�ٻ�Ҿ��� 6";//��͸Ժ�����Ҿ


var swf_height=show_text==1?pic_height+20:pic_height;
var pics="", links="", texts="";
for(var i=1; i<imag.length; i++){
        pics=pics+("|"+imag[i]);
        links=links+("|"+link[i]);
        texts=texts+("|"+text[i]);
}
pics=pics.substring(1);
links=links.substring(1);
texts=texts.substring(1);
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="'+url+'/modules/randomimg/focus.swf">');//������� flash
document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
document.write('<embed src="'+url+'/modules/randomimg/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');
