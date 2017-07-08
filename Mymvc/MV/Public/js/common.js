function dozoom(size) {
    var zoom = document.all ? document.all['zoomtext'] : document.getElementById('zoomtext');
    zoom.style.fontSize = size + 'px';
}

function is_mobile() {
    var ifmobile = 0
    var regex_match = /(nokia|iphone|android|motorola|^mot-|softbank|foma|docomo|kddi|up.browser|up.link|htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte-|longcos|pantech|gionee|^sie-|portalmmm|jigs browser|hiptop|^benq|haier|^lct|operas*mobi|opera*mini|320x320|240x320|176x220)/i;
    var u = navigator.userAgent;
    if (null == u) {
        ifmobile = 1;
    }
    var result = regex_match.exec(u);

    if (null == result) {
        ifmobile = 0;
    } else {
        ifmobile = 1;

    }
    if (ifmobile == 1) document.location.href = 'index.php?m=wap';
}

function showsubmenu(sid)
{
	if(document.getElementById("submenu" + sid).style.display=='none')
	{
		document.getElementById("submenu" + sid).style.display="";
	}else{
	document.getElementById("submenu" + sid).style.display="none";
	}

}

function add_favorite(title,url) {
		if(url=='')url = location.href;
		$.getJSON('/api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(url)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('�ղسɹ�');
			}if(data.status==2)	{
				alert('���Ѿ��ղع��ˣ�');
			}
			else {
				alert('���ȵ�¼');
			}
		});
	}
	
function addtocart(id,flag) {
		var tc=$(".taocan").find(".selected").attr("rel");
		if(typeof(tc)=="undefined")tc=0;
		$.getJSON('/api.php?op=addtocart&id='+id+'&tc='+tc+'&t='+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				if(flag==1)
				{
					location.href='index.php?m=member&c=order&a=cart';
				}else{alert('�Ѿ����빺�ﳵ');}
			}
			else if(data.status==2)	{
				 alert('�Բ��𣬿�治�㣡�������Ա��ϵ');
			}
			else if(data.status==3)	{
				 alert('�Բ����ײ������쳣����ˢ��ҳ������ѡ��');
			}
			else if(data.status==4)	{
				 alert('��ѡ��һ���ײ�����');
			}
			else {
				alert('���ȵ�¼');
				location.href='index.php?m=member&c=index&a=login&forward='+encodeURIComponent(window.location.href);
			}
		});
	}
	
function vote(catid,id) {
		$.getJSON('/api.php?op=vote&catid='+catid+'&id='+id+'&t='+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('ͶƱ�ɹ�');
				$('#vote'+id).html(data.data);
			} else if(data.status==-1){
				alert('���ȵ�¼');
			}
			 else if(data.status==-3){
				alert('���ڿ�ͶƱʱ�䷶Χ�ڣ�');
			}
			 else if(data.status==-4){
				alert('�����Ѿ�Ͷ��Ʊ��');
			}
		});
	}
	
function get_username(id) {
		$.getJSON('/api.php?op=get_username&uid='+id+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$('#toname').html('������ȷ');
				$('#touid').val(data.data);
				$('#submitbtn').attr("disabled",false); 
			} else {
				$('#toname').html('');
				alert('�˺��Ѳ����ڣ����������룡');
				$('#touid').val('');
				$('#submitbtn').attr("disabled",true); 
				
			}
		});
	}
	

function SwapTab(name,cls_show,cls_hide,cnt,cur){
    for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}

function showdiv(str)
{
	$('#'+str).toggle();	
}

function getsmscode() {
		$.getJSON('/api.php?op=getsmscode&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('���������ֻ��յ�����֤��');
			} else {
				alert('��֤���ȡʧ�ܣ������ֻ������Ƿ���ȷ��');
			}
		});
}

function SetHome(obj,vrl){
try{
obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
}
catch(e){
if(window.netscape) {
try {
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
}
catch (e) {
alert("�˲�����������ܾ��� �����������ַ�����롰about:config�����س� Ȼ�� [signed.applets.codebase_principal_support]��ֵ����Ϊ'true',˫�����ɡ�");
}
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
prefs.setCharPref('browser.startup.homepage',vrl);
}else{
alert("�����������֧�֣��밴�����沽�������1.����������á�2.���������ҳ��3.���룺"+vrl+"���ȷ����");
}
}
}
// �����ղ� ����360��IE6
function shoucang(sTitle,sURL)
{
try
{
window.external.addFavorite(sURL, sTitle);
}
catch (e)
{
try
{
window.sidebar.addPanel(sTitle, sURL, "");
}
catch (e)
{
alert("�����������֧�֣���ʹ��Ctrl+D�������");
}
}
} 

function ruselinkurl() {
        if($("#islink").attr("checked")=='checked') {
             $('#linkurl').attr('disabled',false); 
			 if($('#linkurl').val()=='')$('#linkurl').val('http://'); 
			 var oEditor = CKEDITOR.instances.content;
             oEditor.insertHtml('��');
			 return false;

        } else {
             $('#linkurl').attr('disabled','disabled');
			 $('#linkurl').val(''); 
        }
}

 function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone", "iPod"];  //ipad ����
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
 }