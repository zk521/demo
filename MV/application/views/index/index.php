<STYLE type=text/css>

.lunhuan {

	POSITION: relative; WIDTH: 100%; HEIGHT: 360px

}

.lunhuan #lunhuanback {

	POSITION: absolute; WIDTH: 100%; HEIGHT: 360px; OVERFLOW: hidden; TOP: 0px; LEFT: 0px

}

.lunhuan #lunhuanback P {

	POSITION: absolute; FILTER: alpha(opacity=0); WIDTH: 100%; BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: 50% 0px; HEIGHT: 360px; TOP: 0px; LEFT: 0px; opacity: 0; padding:0; margin:0

}

.lunhuan .lunhuan_main {

	POSITION: relative; MARGIN: 0px auto; WIDTH: 1190px; HEIGHT: 360px

}

.suoyouliebiao {

	Z-INDEX: 200; BORDER-BOTTOM: #e6e6e6 1px solid; POSITION: absolute; BORDER-LEFT: #e6e6e6 1px solid; WIDTH: 239px; TOP: 0px; LEFT: 0px; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2)

}

.lunhuancenter {

	POSITION: absolute; WIDTH: 1190px; HEIGHT: 360px; TOP: 0px; LEFT: 0px

}

.centergif {

	Z-INDEX: 4; POSITION: absolute; WIDTH: 100%; DISPLAY: block; HEIGHT: 360px; TOP: 0px; LEFT: 0px

}

.lunhuancenter B {

	Z-INDEX: 3; POSITION: absolute; FILTER: alpha(opacity=0); WIDTH: 760px; DISPLAY: block; HEIGHT: 360px; TOP: 0px; LEFT: 0px; opacity: 0

}

#lunbonum {

	Z-INDEX: 5; POSITION: absolute; LINE-HEIGHT: 23px; HEIGHT: 14px; TOP: 300px; padding:0; left:50%; margin-left:-150px; width:300px;  text-align:center

}

#lunbonum LI {

	background-color: #fff; /*鎸夐挳鑳屾櫙鑹*/

	width: 16px;/*鎸夐挳瀹藉害*/

    height: 16px;  /*鎸夐挳楂樺害*/

	border: 1px solid #fff; /*鎸夐挳杈规*/

    margin-right: 6px;

    overflow: hidden;

	display:inline-block;

    cursor: pointer;

}

#lunbonum .lunboone {

	background-color:#FC0;  /*褰撳墠鎸夐挳鑳屾櫙鑹*/

	border: 1px solid #FC0; /*褰撳墠鎸夐挳杈规*/

}



</STYLE>

<SCRIPT type=text/javascript>

$(document).ready(function(){

    var ali=$('#lunbonum li');

    var aPage=$('#lunhuanback p');

    var aslide_img=$('.lunhuancenter b');

    var iNow=0;

	var timer = 3600; //鍥剧墖杞崲闂撮殧鏃堕棿



    ali.each(function(index){

        $(this).mouseover(function(){

            slide(index);

        })

    });



    function slide(index){

        iNow=index;

        ali.eq(index).addClass('lunboone').siblings().removeClass();

		aPage.eq(index).siblings().stop().animate({opacity:0},600);

		aPage.eq(index).stop().animate({opacity:1},600);

		$('#links').attr('href',aPage.eq(index).attr("href"));

		$('#links').attr('target',aPage.eq(index).attr("target"));

        aslide_img.eq(index).stop().animate({opacity:1,top:0},600).siblings('b').stop().animate({opacity:0,top:0},600);

    }



	function autoRun(){

        iNow++;

		if(iNow==ali.length){

			iNow=0;

		}

		slide(iNow);

	}



	var timer1=setInterval(autoRun,timer);







	 $('.lunhuancenter a').hover(function(){

		clearInterval(timer1);

	},function(){

		timer1=setInterval(autoRun,timer);

    });

})

</SCRIPT>

<DIV class=lunhuan>

  <DIV id=lunhuanback> <P href="javascript:void(0);" target="" style="BACKGROUND-IMAGE: url(<?php echo PUB_PATH?>images/2017-0420170411044020785.jpg);FILTER: alpha(opacity=100); opacity: 1"></P>

<P href="javascript:void(0);" target="" style="BACKGROUND-IMAGE: url(<?php echo PUB_PATH?>images/2017-0320170330093322965.jpg)"></P>

<P href="javascript:void(0);" target="" style="BACKGROUND-IMAGE: url(<?php echo PUB_PATH?>images/2017-0420170411044527378.jpg)"></P>

 </DIV>

  <DIV class=lunhuan_main>

    <DIV class=lunhuancenter> <A id="links" class=centergif href="javascript:void(0);" target="_blank"></A> <B></B> <B></B> <B></B> <B></B> <B></B>

      <UL id=lunbonum>

        <LI class=lunboone></LI>

<LI></LI>

<LI></LI>



      </UL>

    </DIV>

  </DIV>

</DIV>



<table id=table506 cellSpacing=0 cellPadding=0 width="100%" border=0>

<tbody>

<tr>

<td height=20></td></tr></tbody></table>

<div align="center">

		<table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table928">

			<tr>

				<td width="326" valign="top">

	<style>

.zxx_body{line-height: 1.4; font-size: 12px; color: #333; font-family: Arial, sans-serif;}

.jd_body1 {

	height: 268px;

	overflow: hidden;

}

.jd_body img {

	vertical-align: bottom;

}

.jd_ad_slide1{

	width:326px; height: 268px;

	float: left;

	position: relative;

}

.jd_ad_img {

	position: absolute; left: 0; top: 0;

	width: 100%; height: 100%;

	display: none;

}

.jd_ad_btn {

	position: absolute; right: 3px; bottom: 8px;

}

.jd_ad_btn_a {

	width: 22px; height: 22px;

	line-height: 22px;

	margin-right: 5px;

	text-align: center;

	border-radius: 12px;

	background-color: #999;

	color: #fff;

	float: left;

}

.jd_ad_btn_a:hover {

	text-decoration: none;

}

.jd_ad_btn .active {

	background-color: #E4393C; color:#FFF

}

</style>

<div class="zxx_body">

	<div class="zxx_constr">

        <div class="jd_body1">

        	<div id="jdAdSlide1" class="jd_ad_slide1">

			<img src="<?php echo PUB_PATH?>images/2017-0420170403113915786.jpg" class="jd_ad_img">
                <img data-src="<?php echo PUB_PATH?>images/2017-0420170403113833542.jpg" class="jd_ad_img">
                <img data-src="<?php echo PUB_PATH?>images/2017-0420170403113958274.jpg" class="jd_ad_img">

                <div id="jdAdBtn1" class="jd_ad_btn"></div>

            </div>

        </div>

    </div>

</div>

<script src="<?php echo PUB_PATH?>js/jquery-powerSwitch-min.js"></script>

<script>

// 大的图片广告

// 根据图片创建id,按钮元素等，实际开发建议使用JSON数据类似

var timer = 4200;//图片切换时间间隔

var htmlAdBtn1 = '';

$("#jdAdSlide1 img").each(function(index, image) {

	var id = "adImage1" + index;

	htmlAdBtn1 = htmlAdBtn1 + '<a href="javascript:" class="jd_ad_btn_a" data-rel="'+ id +'">'+ (index + 1) +'</a>';

	image.id = id;

});

$("#jdAdBtn1").html(htmlAdBtn1).find("a").powerSwitch({

	eventType: "hover",

	classAdd: "active",

	animation: "fade",

	autoTime: timer,

	onSwitch: function(image) {

		if (!image.attr("src")) {

			image.attr("src", image.attr("data-src"));

		}

	}

}).eq(0).trigger("mouseover");

</script></td>

				<td width="10" valign="top">　</td>

				<td valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1035">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1036">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1037" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">培训信息</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=71">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table1038">

					<tr>

						<td>

						<p align="left">

<table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=296" target="_blank" class=""><span style="text-decoration: none">8月于举办“智能建筑弱电工程师”职业技术人员培训高级研修班的通知</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=295" target="_blank" ><span style="text-decoration: none">8月于举办“安防工程师”暨安全防范技术人员高级培训班的通知</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=294" target="_blank" class=""><span style="text-decoration: none">8月于举办“系统集成项目经理”职业技能培训班的通</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=293" target="_blank" class=""><span style="text-decoration: none">8月于举办“安防工程师”暨安全防范技术人员高级培训班的通知</span></a></td>



</tr>


  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=292" target="_blank" class=""><span style="text-decoration: none">2017年8月 关于举办“安全评价师”高级研修班</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=291" target="_blank" class=""><span style="text-decoration: none">7月于举办“智能建筑弱电工程师”职业技术人员培训高级研修班的通知</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=290" target="_blank" class=""><span style="text-decoration: none">7月于举办“系统集成项目经理”职业技能培训班的通知</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=289" target="_blank" class=""><span style="text-decoration: none">7月于举办“系统集成工程师”职业技术人员培训班的通知</span></a></td>



</tr>



</table>

</td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

			</tr>

		</table>

		<table id=table933 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

		<div align="center">

		<table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table1022">

			<tr>

				<td width="326" valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1023">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1024">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1025" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-family: 宋体; font-weight:700">

						企业简介</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=85">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table1026">

					<tr>

						<td>

						<span style="font-size: 10pt">

<table border="0" width="100%" cellspacing="0" cellpadding="0">

  <tr>

    <td align="left"><span style="font-size: 10pt"><p style="text-indent:2em;">

	<span style="font-size:14px;"></span><span style="font-size:14px;">北京学志伟业文化交流有限责任公司是一家以培训认证、会议承办为主的专业化服务机构。长期运作国家人社部、工信部等方面的培训认证。在长期的项目开展中，我公司与相关政府部门、科研机构、协会学会、专家学者结下了良好的友谊关系。我公司一直坚持&ldquo;没有最好，只有更好， 我们一直在努力的&rdquo;办司理念，以团结、进取、求实、创新的态度；以优</span></td>

  </tr>

</table>

</span></td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

				<td width="10" valign="top">　</td>

				<td valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1027">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1028">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1029" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">项目介绍</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=138">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="5" cellpadding="0" id="table1030" height="243">

					<tr>

						<td align="center">

						<span style="background-color: #E9E9E9">

<table border="0" width="100%" cellspacing="0" cellpadding="0">



  <tr>



		<td>

		<table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

  <tr>

    <td align="center" style="border:1px solid #E6E6E6"><a href="index.php?m=&c=index&a=show&catid=138&id=239" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170330101504685.jpg" width="120" height="120" border="0" alt="理财规划师" /></a></td>

  </tr>

  <tr>

    <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="index.php?m=&c=index&a=show&catid=138&id=239" target="_self">

	<font size="2">理财规划师</font></a></td>

  </tr>

</table>

</td>



		<td>

		<table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

  <tr>

    <td align="center" style="border:1px solid #E6E6E6"><a href="index.php?m=&c=index&a=show&catid=138&id=238" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170330101551353.jpg" width="120" height="120" border="0" alt="维修电工" /></a></td>

  </tr>

  <tr>

    <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="index.php?m=&c=index&a=show&catid=138&id=238" target="_self">

	<font size="2">维修电工</font></a></td>

  </tr>

</table>

</td>



		<td>

		<table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

  <tr>

    <td align="center" style="border:1px solid #E6E6E6"><a href="index.php?m=&c=index&a=show&catid=138&id=224" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170330101639429.jpg" width="120" height="120" border="0" alt="智能楼宇管理师" /></a></td>

  </tr>

  <tr>

    <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="index.php?m=&c=index&a=show&catid=138&id=224" target="_self">

	<font size="2">智能楼宇管理师</font></a></td>

  </tr>

</table>

</td>



		<td>

		<table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

  <tr>

    <td align="center" style="border:1px solid #E6E6E6"><a href="index.php?m=&c=index&a=show&catid=138&id=223" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170330101719672.jpg" width="120" height="120" border="0" alt="安全评价师" /></a></td>

  </tr>

  <tr>

    <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="index.php?m=&c=index&a=show&catid=138&id=223" target="_self">

	<font size="2">安全评价师</font></a></td>

  </tr>

</table>

</td>



		<td>

		<table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

  <tr>

    <td align="center" style="border:1px solid #E6E6E6"><a href="index.php?m=&c=index&a=show&catid=138&id=222" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170330100307329.png" width="120" height="120" border="0" alt="人力资源管理师" /></a></td>

  </tr>

  <tr>

    <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="index.php?m=&c=index&a=show&catid=138&id=222" target="_self">

	<font size="2">人力资源管理师</font></a></td>

  </tr>

</table>

</td>



</tr>



</table>

</span></td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

			</tr>

		</table>

		<div align="center">

		<div align="center">

		<div align="center">

		<div align="center">

		<table id=table1041 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

</div>

</div>

</div>

</div>

		<div align="center">

<table id=table1042 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

<tbody>

<tr>

<td height=10 bgcolor="#E9E9E9">

<p align="center"><img src="<?php echo PUB_PATH?>images/2017-0520170509084201862.gif" width="1100" height="90" alt="" /></td></tr></tbody></table>

</div>

</div>

		<div align="center">

		<div align="center">

		<div align="center">

		<table id=table934 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

		<div align="center">

		<div align="center">

<table id=table1073 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

<tbody>

<tr>

<td height=10 bgcolor="#E9E9E9">

<p align="center"><img src="<?php echo PUB_PATH?>images/2017-0420170403114455179.jpg" width="1100" height="90" alt="" /></td></tr></tbody></table>

</div>

</div>

		<div align="center">

		<div align="center">

		<div align="center">

		<table id=table1074 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

</div>

</div>

</div>

		<div align="center">

		<table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table935">

			<tr>

				<td width="326" valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table936">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table937">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table938" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">最新资讯</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=131">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table939">

					<tr>

						<td>

						<p align="left">

<table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=270" target="_self" class=""><span style="text-decoration: none">雄安规划意见已征询 智慧交通为何如此重要？</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=269" target="_self" class=""><span style="text-decoration: none">看国外门禁卡怎么玩出新花样</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=268" target="_self" class=""><span style="text-decoration: none">《大数据安全标准化白皮书》在武汉发布</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=267" target="_self" class=""><span style="text-decoration: none">把握发展十大战略 物联网或将改写无数行业格局</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=266" target="_self" class=""><span style="text-decoration: none">浙江理工大学图书馆引用人脸识别技术</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=263" target="_self" class=""><span style="text-decoration: none">工业和信息化部关于印发《促进中小企业国际化发展</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=262" target="_self" class=""><span style="text-decoration: none">习近平：加快发展职业教育 让每个人都有人生出彩</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=109&id=237" target="_self" class=""><span style="text-decoration: none">劳动关系协调师与职业指导师、人力资源管理师的区</span></a></td>



</tr>



</table>

</td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

				<td width="10" valign="top">　</td>

				<td valign="top" width="377">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table940">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table941">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table942" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">新闻动态</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=109">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table943">

					<tr>

						<td>

						<p align="left">

<table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=296" target="_self" class=""><span style="text-decoration: none">8月于举办&ldquo;智能建筑弱电工程师&rdquo;职业技术人员培</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=295" target="_self" class=""><span style="text-decoration: none">8月于举办&ldquo;安防工程师&rdquo;暨安全防范技术人员高级</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=294" target="_self" class=""><span style="text-decoration: none">8月于举办&ldquo;系统集成项目经理&rdquo;职业技能培训班的</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=292" target="_self" class=""><span style="text-decoration: none">2017年8月 关于举办“安全评价师”高级研修班</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=291" target="_self" class=""><span style="text-decoration: none">7月于举办&ldquo;智能建筑弱电工程师&rdquo;职业技术人员培</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=290" target="_self" class=""><span style="text-decoration: none">7月于举办&ldquo;系统集成项目经理&rdquo;职业技能培训班的</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=289" target="_self" class=""><span style="text-decoration: none">7月于举办&ldquo;系统集成工程师&rdquo;职业技术人员培训班</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=73&id=288" target="_self" class=""><span style="text-decoration: none">7月于举办&ldquo;数据中心（机房）规划设计工程师&rdquo;高</span></a></td>



</tr>



</table>

</td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

				<td width="10" valign="top">　</td>

				<td width="377" valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table944">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table945">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table946" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">培训信息</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=73">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table947">

					<tr>

						<td>

						<p align="left">

<table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=293" target="_self" class=""><span style="text-decoration: none">8月于举办&ldquo;安防工程师&rdquo;暨安全防范技术人员高级</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=281" target="_self" class=""><span style="text-decoration: none">2017年度专业技术人员资格考试计划和职业资格全国</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=260" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;智慧城市规划管理师&rdquo;高级研修班的通</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=259" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;数据中心（机房）规划设计工程师&rdquo;高</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=258" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;安防项目经理&rdquo;暨安防管理人员高级培</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=257" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;安防工程师&rdquo;暨安全防范技术人员高级</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=256" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;系统集成工程师&rdquo;职业技术人员培训班</span></a></td>



</tr>



  <tr>



		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

		<p style="text-align: center"><font size="6">·</font></td>

		<td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

		<a href="index.php?m=&c=index&a=show&catid=131&id=255" target="_self" class=""><span style="text-decoration: none">5月于举办&ldquo;系统集成项目经理&rdquo;职业技能培训班的</span></a></td>



</tr>



</table>

</td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

      			</td>

			</tr>

		</table>

		<table id=table948 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

</div>

</div>

</div>

</div>

		<div align="center">

<table id=table949 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

<tbody>

<tr>

<td height=10 bgcolor="#E9E9E9">

<p align="center"><span style="background-color: #E9E9E9"><a href="http://010bjxzpx.gotoip2.com/index.php?m=&c=index&a=show&catid=73&id=264" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0420170403120326495.jpg" width="1100" height="90" alt="" /></a></span></td></tr></tbody></table>

		<table id=table1054 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

		<div align="center">

		<table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table1055">

			<tr>

				<td width="326" valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1056">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1057">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1058" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-family: 宋体; font-weight:700">

						在线报名</span></font></td>

						<td width="60">

						<p align="center">

                            <a href="index.php-m=content&c=index&a=lists&catid=24.htm" tppabs="http://www.bjxzpx.com/index.php?m=content&c=index&a=lists&catid=24">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>



                  <table id="table1059" width="100%" cellspacing="10" cellpadding="0" border="0">
                      <tbody><tr>
                          <td>
                              <p align="center">
                                  <style>
                                      .soupuform1 textarea {border: 1px solid #bfbfbf;    border-radius: 0px;    color: #555;font-size: 14px;height: 20px;  line-height: 20px; padding: 5px 10px;}
                                      .soupuform1 textarea:focus {    border: 1px solid #de1d25;}
                                      .soupuform1 textarea {    border: 1px solid #bfbfbf;    padding: 15px 20px;}
                                      .soupuform .but,
                                      .soupuform .reset {    background-color: #de1d25;    border-radius: 0px;    color: #fff;    display: inline-block;    float: right;    font-size: 14px;    height: 20px;    line-height: 20px;    margin-right: 12px;    padding: 0 10px;    text-align: center;border:0;}
                                      .soupuform .reset {    background-color: #bfbfbf;}</style></p>
                              <div class="box">
                                  <div class="content soupuform">
                                      <table width="100%" cellspacing="12" cellpadding="0" border="0">
                                          <tbody>
                                          <tr>
                                              <td>
                                                  <form method="post" action="" name="myform" id="myform"><table class="table_form" width="100%" cellspacing="0">
                                                          <tbody>
                                                          <tr>
                                                              <th style="word-break: keep-all;" nowrap="nowrap"><font color="red">*</font> 姓名  </th>
                                                              <td class="soupuform1"><input name="info[title]" id="title" size="22" style="width:;" value="" class="input-text" placeholder="姓名" type="text">  </td>
                                                          </tr>
                                                          <tr>
                                                              <th style="word-break: keep-all;" nowrap="nowrap"><font color="red">*</font> 性别  </th>
                                                              <td class="soupuform1">
                                                                  <label class="ib" style="width:80px">
                                                                      <input name="info[xingbie]" id="xingbie_先生" checked="" value="先生" type="radio"> 先生</label>
                                                                  <label class="ib" style="width:80px">
                                                                      <input name="info[xingbie]" id="xingbie_女士" value="女士" type="radio"> 女士</label>  </td>    </tr>
                                                          <tr>
                                                              <th style="word-break: keep-all;" nowrap="nowrap"><font color="red">*</font> 电话  </th>
                                                              <td class="soupuform1"><input name="info[dianhua]" id="dianhua" size="22" style="width:;" value="" class="input-text" placeholder="电话" type="text">  </td>    </tr>
                                                          <tr>
                                                              <th style="word-break: keep-all;" nowrap="nowrap"> 备注  </th>
                                                              <td class="soupuform1"><textarea name="info[beizhu]" id="beizhu" style="width:;height:70px;" class="input-textarea" placeholder="备注"></textarea>  </td>    </tr>
                                                          <tr>
                                                              <td></td>
                                                              <td><div class="submit fr"><input class="reset" name="reset" id="reset" value=" 重置 " type="reset"> <input class="but" name="dosubmit" id="dosubmit" value=" 提交 " type="submit"></div> </td></tr></tbody></table></form></td></tr></tbody></table>    </div></div></td>
                      </tr>
                      </tbody></table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

				<td width="10" valign="top">　</td>

				<td valign="top">

	<table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1060">

          <tbody>

            <tr>

              <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

	<table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1061">

          <tbody>

            <tr>

              <td  >

				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1062" bgcolor="#C5001C">

					<tr>

						<td width="10">

						　</td>

						<td>

						<font color="#FFFFFF">

						<span style="font-size: 11pt; font-weight:700">专家团队</span></font></td>

						<td width="60">

						<p align="center">

						<a href="/index.php?m=content&c=index&a=lists&catid=7">

						<font color="#FFFFFF">更多&gt;&gt;</font></a></td>

					</tr>

				</table>

				<table border="0" width="100%" cellspacing="10" cellpadding="0" id="table1063">

					<tr>

						<td>

						<p align="center">

<script src="<?php echo PUB_PATH?>js/jQuery-jcMarquee.js"></script>

<style>

<!--

.Marquee_x { overflow:hidden; width: 746px; height:240px; } /* 浮动区域的宽度和高度 */

.Marquee_x ul li ,.Marquee_x ul li div{ float:left;} /* 横向滚动必须让所有li左浮动 */

.Marquee_x span{ display:block}

.Marquee_x .img{ width:150px; height:200px;}

.Marquee_x .title{ text-align:center}

-->

</style>

<script>

var speed=10 //图片滚动速度

if(navigator.userAgent.indexOf("MSIE")>0){speed=speed;} else{ speed=speed*2;}

$(function(){

    $('.Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':speed });

});

</script>  <div class="Marquee_x">

    <ul>

      <li>


        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=217" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083603433.jpg" width="150" height="200" border="0" alt="宫老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=217" target="_self"><font size="2">宫老师</font></a></span></div>


        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=216" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083538604.jpg" width="150" height="200" border="0" alt="牟老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=216" target="_self"><font size="2">牟老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=215" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083510684.jpg" width="150" height="200" border="0" alt="曾老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=215" target="_self"><font size="2">曾老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=214" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083445111.jpg" width="150" height="200" border="0" alt="刘老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=214" target="_self"><font size="2">刘老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=213" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083430638.jpg" width="150" height="200" border="0" alt="黄老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=213" target="_self"><font size="2">黄老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=212" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083344313.jpg" width="150" height="200" border="0" alt="张老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=212" target="_self"><font size="2">张老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=211" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083226961.jpg" width="150" height="200" border="0" alt="沈老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=211" target="_self"><font size="2">沈老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=210" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083158124.jpg" width="150" height="200" border="0" alt="祝老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=210" target="_self"><font size="2">祝老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=209" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083132674.jpg" width="150" height="200" border="0" alt="李小强" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=209" target="_self"><font size="2">李小强</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=208" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083114395.jpg" width="150" height="200" border="0" alt="吴登丰" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=208" target="_self"><font size="2">吴登丰</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=207" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328083022738.jpg" width="150" height="200" border="0" alt="张江涛" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=207" target="_self"><font size="2">张江涛</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=206" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328082939951.jpg" width="150" height="200" border="0" alt="夏冰" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=206" target="_self"><font size="2">夏冰</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=205" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328082900668.jpg" width="150" height="200" border="0" alt="李老师" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=205" target="_self"><font size="2">李老师</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=204" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328082823249.jpg" width="150" height="200" border="0" alt="张颖" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=204" target="_self"><font size="2">张颖</font></a></span></div>



        <div><span class="img"><a href="index.php?m=&c=index&a=show&catid=7&id=203" target="_self"><img src="<?php echo PUB_PATH?>images/2017-0320170328082755320.jpg" width="150" height="200" border="0" alt="王志成" /></a></span>

						<span class="title"><a href="index.php?m=&c=index&a=show&catid=7&id=203" target="_self"><font size="2">王志成</font></a></span></div>



      </li>

    </ul>

  </div>

</td>

					</tr>

				</table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

            </tr>

          </tbody>

      </table>

				</td>

			</tr>

		</table>

		<div align="center">

		<div align="center">

		<div align="center">

		<div align="center">

		<table id=table1064 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

		<div align="center">

<table id=table1069 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

<tbody>

<tr>

<td height=10 bgcolor="#E9E9E9" width="96">

<p align="center">

<img border="0" src="<?php echo PUB_PATH?>images/link123.jpg" width="60" height="60"></td>

<td height=10 bgcolor="#E9E9E9">

<p align="left">

<table border="0" width="100%" cellspacing="0" cellpadding="0" height="15">



  <tr>



		<td> <table width="100%" border="0">

  <tr>

    <td align="center"><a href="http://zscx.osta.org.cn/" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0320170331044543162.png" width="160" height="60" border="0" alt="国家职业资格证全国联网查询" /></a></td>

  </tr>

  </table>

</td>



		<td> <table width="100%" border="0">

  <tr>

    <td align="center"><a href="http://www.ntc.org.cn/" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0320170331045006184.png" width="160" height="60" border="0" alt="工业和信息化部全国网络与信息技术培训考试" /></a></td>

  </tr>

  </table>

</td>



		<td> <table width="100%" border="0">

  <tr>

    <td align="center"><a href="http://www.miit.gov.cn" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0320170331044702632.png" width="160" height="60" border="0" alt="工信部" /></a></td>

  </tr>

  </table>

</td>



		<td> <table width="100%" border="0">

  <tr>

    <td align="center"><a href="http://www.gcvaic.org/" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0320170331045121176.png" width="160" height="60" border="0" alt="通信行业职业技能鉴定网" /></a></td>

  </tr>

  </table>

</td>



		<td> <table width="100%" border="0">

  <tr>

    <td align="center"><a href="http://www.mohurd.gov.cn/" target="_blank"><img src="<?php echo PUB_PATH?>images/2017-0320170331045242631.png" width="160" height="60" border="0" alt="中华人民共和国住房与城乡建设部" /></a></td>

  </tr>

  </table>

</td>



</tr>



</table>

</td></tr></tbody></table>

		<table id=table1070 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

			<tbody>

				<tr>

					<td height=10 bgcolor="#FFFFFF"></td>

				</tr>

			</tbody>

		</table>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

		<div align="center">

		<p>	<table id=table14 height=1 cellSpacing=0 cellPadding=0 width="100%" border=0>

			<tbody>

				<tr>

					<td height=20></td>

				</tr>

			</tbody>

		</table>

</div>



</body>

</html></p></div>