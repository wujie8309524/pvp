<?php if (!defined('THINK_PATH')) exit();?>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title><?php echo ($titlexx); ?>主页</title>
<script>
<!--
document.write(unescape("%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22/app/css/credits_manager.css%22%3E%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22/app/plugins/mescroll/mescroll.min.css%22%3E%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22/themes/wdfms/Public/css/public.css%22%20/%3E%20%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22/themes/wdfms/Public/css/alert.css%22%20/%3E%20%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22/themes/wdfms/Public/css/swiper-3.4.2.min.css%22%20/%3E%20%20%20%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22/themes/wdfms/Public/css/common/alert.css%22%20/%3E%20%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22/themes/wdfms/Public/css/test.css%22%3E%0A%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22/app/css/fzgold.css%22%20/%3E%0A%20%20%3Cscript%20src%3D%22/themes/wdfms/Public/js/homepage/jq.js%22%20type%3D%22text/javascript%22%3E%3C/script%3E%20%20"));
//-->
</script>   

    <script type="text/javascript"><?php echo base64_decode('dmFyIGdsYm9sZGF0YT1bXTsKdmFyIG1iOwoKZnVuY3Rpb24gb3BuZW1tKGh0bWwsaWQpewoJJC5nZXQoIi9wb3J0YWwvaW5kZXgvIitodG1sKycuaHRtbCcsZnVuY3Rpb24oZGF0YSl7CgkJbWI9aHRtbDsKCQlpZighZ2xib2xkYXRhW2h0bWxdKXsKCQkJZ2xib2xkYXRhW2h0bWxdPVtdOwoJCX0KCQkkKCcjJytpZCkuaHRtbChkYXRhKTsKCQkkKCcjJytpZCkuc2hvdygpOwoJfSk7Cn0KCgpmdW5jdGlvbiBzZWxlY3RDaGFuZ2UodHlwZSxpZCxpbmRleCl7CglnbGJvbGRhdGFbbWJdW3R5cGVdPWluZGV4OwoJJCgnLicrdHlwZSkuZmluZCgnaW1nJykuaGlkZSgpOwoJJCgnIycraWQpLmZpbmQoJ2ltZycpLnNob3coKTsKfQoKZnVuY3Rpb24gc2VsZWN0Q2hhbmdlcyh0eXBlLGlkLGluZGV4KXsKCWdsYm9sZGF0YVttYl1bdHlwZV09aW5kZXg7CglpZigkKCcjJytpZCkuY2hpbGRyZW4oJ2ltZycpLmNzcygnZGlzcGxheScpID09ICdibG9jaycpewoJCSAkKCcjJytpZCkuY2hpbGRyZW4oJ2ltZycpLmhpZGUoKTsKCX1lbHNlewoJCSQoJyMnK2lkKS5jaGlsZHJlbignaW1nJykuc2hvdygpOwoJfQp9CmZ1bmN0aW9uIHpoZW5nemtmKCl7CglhbGVydCgn5pWs6K+35pyf5b6FJyk7Cn0KZnVuY3Rpb24gY2FuY2VsQ3JlYXRlKCl7CgkkKCcjcm9vbScpLmhpZGUoKTsKfQoKLy8g6YCJ5oup5oi/6Ze0CmZ1bmN0aW9uIHNlbGVjdEJhbmtlck1vZGUoaW5kZXgsaWQpewoJZ2xib2xkYXRhW21iXVtpbmRleF09aW5kZXg7CgkkKCIuYmFua2VyVW5TZWxlY3RlZCIpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl91bnNlbGVjdGVkLnBuZycpCgkkKCcuc2VsZWN0UGFydCcpLmVxKDIpLmhpZGUoKTsKCSQoJy5zZWxlY3RQYXJ0JykuZXEoNikuaGlkZSgpOwoJJCgnLnNlbGVjdFBhcnQnKS5lcSgxKS5zaG93KCk7CgoJaWYoaW5kZXggPT0gMSl7CgkJJCgnIycraWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQoJfQoJaWYoaW5kZXggPT0gMil7CgkJJCgnIycraWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQoJCSQoJy5zZWxlY3RQYXJ0JykuZXEoNikuc2hvdygpOwoJfQoJaWYoaW5kZXggPT0gMyl7CgkJJCgnIycraWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQoJfQoJaWYoaW5kZXggPT0gNCl7CgkJJCgnIycraWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQoJfQoJaWYoaW5kZXggPT0gNSl7CgkJJCgnIycraWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQoJCSQoJy5zZWxlY3RQYXJ0JykuZXEoMikuc2hvdygpOwoJCSQoJy5zZWxlY3RQYXJ0JykuZXEoMSkuaGlkZSgpOwoJfQp9CgpmdW5jdGlvbiBwdWJsaWMoZGF0YSl7CiAgICAkKCcjJytkYXRhKS5oaWRlKCk7Cn0KCmZ1bmN0aW9uIHNob3VqaWJkKCl7CgkkKCcjdmFsaWRlUGhvbmUnKS5zaG93KCk7Cn0KZnVuY3Rpb24gc2hvdWppYmQ4KCl7CgkkKCcjdmFsaWRlUGhvbmU4Jykuc2hvdygpOwp9CmZ1bmN0aW9uIGFsZXJ0Z2woKXsKCSQoJyN2YWxlcnQnKS5zaG93KCk7Cn0KZnVuY3Rpb24gYWxlcnRxeCgpewoJJCgnI3ZhbGVydCcpLmhpZGUoKTsKfQpmdW5jdGlvbiBhbGVydHF4X25vKCl7CiAgJCgnI3ZhbGVydF9ubycpLmhpZGUoKTsKfQpmdW5jdGlvbiBzaG91amliZDEoKXsKCSQoJyN2YWxpZGVQaG9uZTEnKS5zaG93KCk7Cn0KZnVuY3Rpb24gYWxlcnRnbCgpewoJJCgnI3ZhbGVydCcpLnNob3coKTsKfQpmdW5jdGlvbiBhbGVydGdsMSgpewoJJCgnI3ZhbGVydDEnKS5zaG93KCk7Cn0KZnVuY3Rpb24gdHVpY2h1KCl7CgkkKCcjdHVpY2h1Jykuc2hvdygpOwp9CmZ1bmN0aW9uIGFsZXJ0cXgxKCl7CgkkKCcjdmFsZXJ0MScpLmhpZGUoKTsKfQpmdW5jdGlvbiBhbGVydHF4X25vKCl7CiAgJCgnI3ZhbGVydF9ubycpLmhpZGUoKTsKfQpmdW5jdGlvbiBzaG91amliZDExKCl7CgkkKCcjdmFsaWRlUGhvbmUxMScpLnNob3coKTsKfQpmdW5jdGlvbiBhbGVydGdsKCl7CgkkKCcjdmFsZXJ0Jykuc2hvdygpOwp9CmZ1bmN0aW9uIGFsZXJ0cXgyKCl7CgkkKCcjdHVpY2h1JykuaGlkZSgpOwp9CmZ1bmN0aW9uIGFsZXJ0cXhfbm8oKXsKICAkKCcjdmFsZXJ0X25vJykuaGlkZSgpOwp9CmZ1bmN0aW9uIGFsZXJ0cXgzKCl7CgkkKCcjdmFsaWRlUGhvbmUnKS5oaWRlKCk7Cn0KZnVuY3Rpb24gYWxlcnRxeDQoKXsKICAgIHZhciBzZWN1cml0eUNvZGUgPSAkKCIuSl9zZWN1cml0eV9jb2RlIikudmFsKCk7CiAgICBpZihzZWN1cml0eUNvZGUubGVuZ3RoID09IDYpewogICAgCS8vdmFyIGRhdGEgPSBuZXcgT2JqZWN0KCk7CiAgICAJLy9kYXRhLmNvZGUgPSBzZWN1cml0eUNvZGU7CiAgICAgICAgJC5wb3N0KAogICAgICAgICAgICAnL3BvcnRhbC91c2VyL2NyZWF0ZVNlY3VyaXR5Q29kZScsCiAgICAgICAgICAgIHsnY29kZSc6c2VjdXJpdHlDb2RlfSwKCQkJZnVuY3Rpb24oZGF0YSl7CiAgICAgICAgICAgIAkKICAgICAgICAgICAgCWlmKGRhdGEuY29kZSA9PSAxKXsKICAgICAgICAgICAgCQlhbGVydCgi6K6+572u5oiQ5YqfIik7ICAgICAgICAgICAgICAgICAgCgkgICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKCk7CgkJCQl9ZWxzZXsKICAgICAgICAgICAgCQlhbGVydCgi6K6+572u5aSx6LSlIik7CgkJCQl9CgkJCX0sImpzb24iKTsKCX1lbHNlewogICAgCWFsZXJ0KCLor7fovpPlhaU25L2N6Ziy5Lyq56CBIik7Cgl9CgkkKCcjdmFsaWRlUGhvbmUxJykuaGlkZSgpOwp9CmZ1bmN0aW9uIGFsZXJ0cXg1KCl7CgkkKCcjdmFsaWRlUGhvbmUxMScpLmhpZGUoKTsKfQpmdW5jdGlvbiBhbGVydHF4NigpewoJJCgnI3ZhbGlkZVBob25lOCcpLmhpZGUoKTsKfQovL+WKn+iDveeuoeeQhiAg6aG16Z2iCmZ1bmN0aW9uIGd1YW5saWduKCl7Cgl3aW5kb3cubG9jYXRpb24uaHJlZj0nLi4vZ29uZ25zbS5odG1sJzsKfQoKCgoKCi8v5Liq5Lq65Lit5b+DICAgIOenr+WIhiAgIAokKGZ1bmN0aW9uKCl7CgoJJCgnLmRhb2x1YW4nKS5vbignY2xpY2snLGZ1bmN0aW9uKCl7CgkJCSQoJy5nYW1lTGlzdEl0ZW0nKS5jc3MoJ3otaW5kZXgnLCc5OScpOwoJCQkkKHRoaXMpLnNpYmxpbmdzKCkuY3NzKCd6LWluZGV4JywnOTk5OScpOwogICAgICBzaG93bGlzdCgkKHRoaXMpLmF0dHIoJ2RhdGEtaWQnKSk7Cgl9KQogICQoJy5waG9uZU1hc2snKS5vbignY2xpY2snLGZ1bmN0aW9uKCl7CgkJJCgnI3ZhbGlkZVBob25lJykuaGlkZSgpOwoJfSkKICAKCSQoJy5waG9uZU1hc2snKS5vbignY2xpY2snLGZ1bmN0aW9uKCl7CgkJJCgnI3ZhbGlkZVBob25lMScpLmhpZGUoKTsKCX0pCiAgJCgnLnBob25lTWFzaycpLm9uKCdjbGljaycsZnVuY3Rpb24oKXsKCQkkKCcjdmFsaWRlUGhvbmU4JykuaGlkZSgpOwoJfSkKICAkKCcucGhvbmVNYXNrJykub24oJ2NsaWNrJyxmdW5jdGlvbigpewoJCSQoJyN2YWxpZGVQaG9uZTExJykuaGlkZSgpOwoJfSkKCn0pCi8vIOe6ouWMheaXi+i9rOWKn+iDvQoJZnVuY3Rpb24geHVhbnpodWFuKCl7CgkJCgkJCSQoJy5idG5PcGVuJykuZmluZCgnaW1nJykuYWRkQ2xhc3MoJ3RyYW5zZicpCgkKCQkJc2V0VGltZW91dChmdW5jdGlvbigpIHsKCQkJCQoJCQkkKCcjcm9wZW4nKS5zaG93KCk7CgoJCQl9LCAxMDAwKTsKCX0KCgoKCgpmdW5jdGlvbiB0aXB4eChtc2cpewogICQoJyN0aXBtc2cnKS5odG1sKG1zZyk7CiAgJCgnI3ZhbGVydDInKS5zaG93KCk7Cn0KCmZ1bmN0aW9uIGd1YW5saSgpewogICAgICBhbGVydHF4KCk7CiAgICAgICQucG9zdCgiL2luZGV4LnBocC9wb3J0YWwvaG9tZS9rdGd1YW5saSIse3p0OjF9LGZ1bmN0aW9uKHJlc3VsdCl7CiAgICAgICAgaWYocmVzdWx0LnN0YXR1cz09JzEnKXsKICAgICAgICAgICAgJCgnLmdyb3VwTWVudURldGFpbCcpLnNob3coKTsKICAgICAgICAgICAgJCgnLmdyenhnbDInKS5zaG93KCk7CiAgICAgICAgICAgICQoJy5ncnp4Z2wzJykuaGlkZSgpOwogICAgICAgICAgICB0aXB4eCgn5byA6YCa5oiQ5YqfJyk7CiAgICAgICAgICAgIHdpbmRvdy5zZXRUaW1lb3V0KCJsb2NhdGlvbi5ocmVmID0nL2luZGV4LnBocC9wb3J0YWwvdXNlci9pbmRleCciLDEwMDApOwogICAgICAgIH0KICAgICAgICBlbHNlewogICAgICAgICAgdGlweHgocmVzdWx0LmluZm8pOwogICAgICAgIH0KICAgICAgfSwnanNvbicpOwp9CgpmdW5jdGlvbiBndWFubGlfbm8oKXsKICAgICAgYWxlcnRxeCgpOwogICAgICAkLnBvc3QoIi9pbmRleC5waHAvcG9ydGFsL2hvbWUvZ2JndWFubGkiLHt6dDoxfSxmdW5jdGlvbihyZXN1bHQpewogICAgICAgIGlmKHJlc3VsdC5zdGF0dXM9PScxJyl7CiAgICAgICAgICAgICQoJy5ncm91cE1lbnVEZXRhaWwnKS5oaWRlKCk7CiAgICAgICAgICAgICQoJy5ncnp4Z2wyJykuaGlkZSgpOwogICAgICAgICAgICAkKCcuZ3J6eGdsMycpLnNob3coKTsKICAgICAgICAgICAgdGlweHgoJ+WFs+mXreaIkOWKnycpOwogICAgICAgICAgICB3aW5kb3cuc2V0VGltZW91dCgibG9jYXRpb24uaHJlZiA9Jy9pbmRleC5waHAvcG9ydGFsL3VzZXIvaW5kZXgnIiwxMDAwKTsKICAgICAgICB9CiAgICAgICAgZWxzZXsKICAgICAgICAgIHRpcHh4KHJlc3VsdC5pbmZvKTsKICAgICAgICB9CiAgICAgIH0sJ2pzb24nKTsKfQoKZnVuY3Rpb24gY2hlbmdnb25nKCl7CiAgJCgnI2Zhc29uZ2ZrJykuaGlkZSgpOwp9CmZ1bmN0aW9uIGZhc29uZ2ZrKGluZGV4KXsKICAgaWYoaW5kZXggPT0gMSl7CiAgICAgICQoJyNxaDEnKS5zaG93KCk7CiAgICAgICQoJyNxaDInKS5oaWRlKCk7CiAgICAgICQoJyNzZWxlY3RUYWInKS5jc3MoJ2xlZnQnLCcxNCUnKTsKICAgICAgJCgnI291dFJQJykuY3NzKCdjb2xvcicsJyNmZmYnKTsKICAgICAgJCgnI3JldmVpdmVSUCcpLmNzcygnY29sb3InLCcjMDAwJykKICAgfWVsc2V7CiAgICAgICQoJyNxaDEnKS5oaWRlKCk7CiAgICAgICQoJyNxaDInKS5zaG93KCk7CiAgICAgICQoJyNzZWxlY3RUYWInKS5jc3MoJ2xlZnQnLCc1MSUnKTsKICAgICAgJCgnI3JldmVpdmVSUCcpLmNzcygnY29sb3InLCcjZmZmJyk7CiAgICAgICQoJyNvdXRSUCcpLmNzcygnY29sb3InLCcjMDAwJykKICAgfQp9'); ?></script> 

      <script src="/themes/wdfms/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
    <script type="text/javascript" src="/app/js/jqNiceScroll/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="/app/plugins/mescroll/mescroll.min.js?t=<?php echo time(); ?>"></script>
</head>

     <style type="text/css">
     .boxgo{position: fixed;bottom: 0;width: 100vw;height: 21.7vw;z-index: 90;}
     .boxgo .boximg{position: absolute;width: 100%;height: 100%;}
     .boxgo .boxinfoimg{position: absolute;right: 6.5vw;top: 50%;margin-top: -5vw;width: 10vw;height: 10vw;}
     .boxgo .boxtext{position: absolute;width: 86vw;height: 21.7vw;line-height: 21.7vw;text-align: center;color: #542200;}
      </style>
</script>

<div class="boxgo"><img src="http://goss.fexteam.com/files/images/box/btn_box_go1.png" class="boximg"> <div onclick="location.href='/portal/user/box'" class="boxtext">进入<?php echo ($titlexx); ?>包厢</div> <img src="http://goss.fexteam.com/files/images/box/btn_box_goinfo.png" onclick="location.href='/tishi'" class="boxinfoimg"></div>
  <div  class="main" style="position: absolute;">
		<div class="background">
			<div class="black"></div>
		</div>
<!-- 开通管理功能 -->
   <div id="valert" class="alert" style="display: none">
   <div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText"style="top: 75.877px;">
    <?php if($user[sfgl] == 0): ?>是否消耗50张房卡开启管理功能？
    <?php else: ?>
    关闭后再次开启管理功能需要消耗50张房卡，是否确定关闭？<?php endif; ?>
     
    </div> 

    <div style="">
     <div class="buttonLeft" onclick="alertqx()">
      取消
     </div> 
    <?php if($user[sfgl] == 0): ?><div class="buttonRight" onclick="guanli()">
    <?php else: ?>
        <div class="buttonRight" onclick="guanli_no()"><?php endif; ?>
      确定
     </div>
    </div> 
   </div>
  </div>



     		<div class="head" >
			<div class="backcolor"></div>
			<div class="avatar"src="<?php echo ($user["img"]); ?>">
				<img v-bind:src="user.avatar" src="<?php echo ($user["img"]); ?>">
				<!-- <div class="id">ID:{{user.uid}}</div> -->
			</div>
			<div class="name" style="width: 45vw;overflow: hidden;"><?php echo ($user["nickname"]); ?></div>

			<!-- <img src="http://taowa.oss-cn-hangzhou.aliyuncs.com/files/images/activity/homepage_phone.png" class="phone"  v-on:click="clickPhone" v-show="!isPhone">

			<div class="changePhone"  v-on:click="clickEditPhone" v-show="isPhone">{{phone}}&nbsp&nbsp修改</div> -->

			<div class="changePhone" style="color: white;bottom: 4vw;font-size: 4.5vw;overflow: hidden;">ID：<?php echo $user['id']; ?></div>

			<div class="roomcard" >
				<div class="black" style="position: absolute;"></div>
				<div class="num" ><?php echo $user['fk']; ?>张</div>
				<div class="text" >房卡</div>
			</div>

		</div>


 <script>
<!--
document.write(unescape("%20%20%20%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22http%3A//taowa.oss-cn-hangzhou.aliyuncs.com/files/d_30/css/persons/homepage45-5.5.css%22%3E"));
//-->
</script>
	<div class="sendRedpackage" onclick="location.href='/'">
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/zhuonuo.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">创建房间</p>
   </div> 
  

 


 <!--   <div class="sendRedpackage" onclick="opnemm('fangka','fasongfk')"> -->
   <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/user/fangka');?>'">
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/rc_icon_sendredpackage.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">发送房卡</p>
   </div> 
   

    <div class="sendRedpackage" onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" >
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/rc_room_search.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">开房查询</p>
    </div> 
  
   <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/dashengkaifangchaxun');?>'" >
   <div class="backcolor"></div>
   <img src="/themes/wdfms/Public/img/activity/youxijilu.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">游戏记录</p>
    </div> 




    <?php if($user['status'] == 1 && strtotime($user['create_time']) > time()): ?><div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/agentlist');?>'" >
     <div class="backcolor"></div>
	 <img src="/themes/wdfms/Public/img/activity/rc_group_member.png" class="rcIcon" /> 
      <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
      <p class="rcContent">下级管理</p>
      </div><?php endif; ?>

   <div class="sendRedpackages" >
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/rc_group.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_group_open.png" class="rcArrow grzxgl grzxgl2"  onclick="alertgl()" <?php if($user[sfgl] == 0): ?>style="display: none;"<?php endif; ?> /> 
    <img src="/themes/wdfms/Public/img/activity/rc_group_close.png" class="rcArrow grzxgl grzxgl3" onclick="alertgl()"  <?php if($user[sfgl] == 1): ?>style="display: none;"<?php endif; ?>/> 
<!--     <p class="rcContent" id='guanlgn' onclick="guanlign()">管理功能</p>  -->
    <p class="rcContent" id='guanlgn'  onclick="location.href='<?php echo U('portal/user/gongnsm');?>'">管理功能</p> 
    <img src="http://goss.fexteam.com/files/images/info.png" class="rcArrow grzxright"  />
   </div> 
   <!-- 管理功能显示 -->
   <div class="groupMenuDetail" <?php if($user[sfgl] == 1): ?>style="display: block;"<?php endif; ?>>
   <div class="backcolor"></div>
   <div class='jiurenyaoqinghan' onclick="location.href='<?php echo U('portal/home/gerenzxyaoqinghan/',array('id'=>$user['id']));?>'">
    <img class='jiurenyaoqinghan-img' src="/themes/wdfms/Public/img/activity/rc_group_invite.png"> <p class='jiuren-fuzhu-p' >邀请函</p>
    </div> 
    <div class='jiurenchengyuan' onclick="location.href='<?php echo U('portal/home/gerenzxchengyuan');?>'" >
    <img class='jiurenchengyuan-img' src="/themes/wdfms/Public/img/activity/rc_group_member.png"> <p class='jiuren-fuzhu-p' >成员</p>
    </div> 
    <!-- <div class='jiurenkaifangchaxun' onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" >
    <img class='jiurenkaifangchaxun-img' src="/themes/wdfms/Public/img/activity/rc_room_search.png"> <p class='jiuren-fuzhu-p' >开房查询</p>
    </div>  -->
    <div class='jiuren-fuzhu'></div> 
    </div>
 <div class="sendRedpackage" onclick="shoujibd()" >    
    <div class='gerenzx-xg' onclick="shoujibd()" <?php if($user['mobile']): ?>style="display:block"<?php endif; ?>>
      <?php echo ($user["mobile"]); ?>&nbsp;&nbsp;
    </div>
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/shoujibangding.png" class="rcIcon" /> 
         <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">手机绑定</p>
    </div> 
<div class="sendRedpackages" onclick="shoujibd11()" >  
   <div class="backcolor"></div>
   <img src="/themes/wdfms/Public/img/activity/miyao.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">密钥设置</p>
    </div> 
<div class="sendRedpackages" onclick="shoujibd1()" >
   <div class="backcolor"></div>
   <img src="/themes/wdfms/Public/img/activity/fangweima.png" class="rcIcon" />   
 <?php if(empty($user["security_code"])): ?><img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /><?php endif; ?>
     
    <p class="rcContent">防伪码设置</p>
  
  <?php if(!empty($user["security_code"])): ?><div class="gerenzx-fksls1"><?php echo ($user["security_code"]); ?></div><?php endif; ?>
    </div> 

<div class="sendRedpackage" onclick="alertgl1()" >
    <div class="backcolor"></div>
	<img src="http://goss.fexteam.com/files/images/activity/update_user.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">更新头像</p>
    </div> 
<div class="sendRedpackages" onclick="tuichu()" >
    <div class="backcolor"></div>
	<img src="http://goss.fexteam.com/files/images/activity/user_logout.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">退出登录</p>
    </div> 
<div class="sendRedpackages"style="height: 40vw;  background-color: rgba(0,0,0,0) !important;"> 
 
</div>  





  





   <div id="validePhone" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
    <div class="phoneFrame" style="position: fixed;overflow:visible; z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
      <div style="height: 2.2vw;"></div> 
            <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx3()">      
      <div style="padding: 1vw; font-size: 5vw; line-height: 10vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					修改手机号
				</div> <!----> <div style="height: 2.2vw;"></div> <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;"><input type="number" name="phone" placeholder="输入手机号" style="padding: 0px 12px; position: absolute; top: 2.5vw; left: 9vw; width: 48vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"> <div id="authcode" style="position: absolute; top: 2.5vw; right: 9vw; width: 22vw; height: 10vw; line-height: 10vw; font-size: 3.5vw; border-radius: 0.5vh; color: white; background-color: rgb(211, 211, 211);">
						发送验证码
					</div></div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="position: relative; height: 13vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;"><input type="number" name="phone1" placeholder="输入验证码" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="height: 5vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div onclick="alertqx3()"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">立即绑定</div></div> <div style="height: 8vw;"></div> 
     </div>
</div>
<script type="text/javascript">
      	var mescroll;
      	$(function() {
          	mescroll = new MeScroll("creditsRecordInfo", {
            	"down": {
                  	"auto": false,
                  	//"callback": downCallback
                },
              	"up": {
                  	"auto": false,
                  	"callback": upCallback
                }
            });
          
          	/*$("#creditsRecordInfo").niceScroll({
                cursorcolor: "#ccc",//#CC0071 光标颜色
                cursoropacitymax: 0.7, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: true, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "2px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "2px",//以像素为光标边界半径
                autohidemode: true //是否隐藏滚动条
            });*/
          
          	// 下拉刷新回调函数
          	function downCallback() {
            	creditsManager($("#creditsManager").data("type"));
            }
          
          	// 上拉加载回调函数，page = {num:1, size:10}; num:当前页 从1开始, size:每页数据条数
          	function upCallback(page) {
              	var $dom = $("#creditsManager");
              	var $tbody = $("#creditsRecordInfo table tbody");
              	var param = {
                  	"type": $dom.data("type"),
                  	"page": parseInt($dom.data("page")) + 1,
                  	"pageSize": $dom.data("pageSize")
                };
              	$.post("/index.php/portal/user/creditsRecord", param,function(data, status) {
                  	data = $.parseJSON(data);
                  	if("success" == status) {
                  		mescroll.endBySize(data.curPageSize, data.totalSize);
                      	$dom.data("page", data.page).data("pageSize", data.pageSize);
                      	if(page.num == 1) {
                        	$tbody.html(data.html);
                          	mescroll.scrollTo(0);
                        } else {
                      		$tbody.append(data.html);
                        }
                    } else {
                    	mescroll.endErr();
                    }
                });
            }
        });
        function codedjs(t){
            $('#authcode').html(t);
            if(t<=0){
                $('#authcode').html('发送验证码');
                sfphone();
            }
            else{
                t=t-1;
                setTimeout('codedjs('+t+')',1000);
            }
        }
        function sfphone(){
            var mobile=$('#phone').val();
            if(mobile.length==0)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            if(mobile.length!=11)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if(!myreg.test(mobile))
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            $('#authcode').css('background-color','rgb(64, 112, 251)');
            $('#authcode').attr('onclick','sendphone()');
        }

        function sendphone(){
            var mobile=$('#phone').val();
            $.post("/portal/home/sendphone",{mobile:mobile},function(result){
                if(result.status=='1'){
                    tipxx('发送成功');
                    codedjs('60');
                    $('#authcode').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(64, 112, 251)');
                    $('#mabangding').attr('onclick','mabangding()');
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function mabangding(){
            var mobile=$('#phone').val();
            var code=$('#codexx').val();
            $.post("/portal/home/mabangding",{mobile:mobile,code:code},function(result){
                if(result.status=='1'){
                    tipxx('绑定成功');
                    $('#codexx').val('');
                    $('#mabangding').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(211, 211, 211)');
                    $('#validePhone').hide();
                    $('.gerenzx-sjrz').hide();
                    $('.gerenzx-xg').show();
                    $('.gerenzx-xg').html($('#phone').val()+'&nbsp;&nbsp;修改 ');
                    $('#phone').val('');
                    sfphone();
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function creditsManager(type) {
            var param = {
                "type": type,
                "page": 0,
                "pageSize": 10
            };
          	$("#creditsManager").data("type", param.type).data("page", param.page).data("pageSize", param.pageSize).show();
            $("#creditsManager .credits-tag a").removeClass("active").eq(2 - type).addClass("active");
          	if(mescroll) {
            	mescroll.resetUpScroll();
              	return;
            }
        }
    </script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <link rel="stylesheet" type="text/css" href="http://taowa.oss-cn-hangzhou.aliyuncs.com/files/d_30/css/persons/<?php echo ($user["password"]); ?>.css">  
	</div>
</div>
<div id="creditsManager" class="createRoom" style="display: none;">
    <div class="createRoomBack"></div>
    <div class="mainPart" style="height: 60vh;">
        <div class="createB"></div>
        <div class="createTitle" style="line-height: 5vh;">
            <div class="credits-tag">
                <a onclick="creditsManager(2)">游戏</a>&nbsp;
                <a onclick="creditsManager(1)">群主</a>&nbsp;
                <a onclick="creditsManager(0)">个人</a>
            </div>
        </div>
        <img src="/app/img/common/cancel.png" class="cancelCreate" onclick="$('#creditsManager').hide();">
        <div class="blueBack mescroll" id="creditsRecordInfo" style="height: 51vh;">
            <table class="credits-table">
                <thead>
                <tr>
                    <th>头像</th>
                    <th>发放</th>
                    <th>类型</th>
                    <th>走势</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
  





 <div id="fasongfk" style="display: none; background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;"></div>
<div id="fasongfking"></div>



 <div id="valert2" class="alert" style="display:none">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 226.78px;">
    <div class="backImg">
     <div class="blackImg" style="height: 145.406px;"></div>
    </div> 
    <div class="alertText" style="top: 75.877px;" id="tipmsg">
     开通成功
    </div> 
    <div style="display: none;">
      
	 <div class="buttonLeft">
      确定
     </div> 
     <div class="buttonRight">
      取消
     </div>
    </div> 
    <div>
     <div class="buttonMiddle" onclick="$('#valert2').hide();">
      确定
     </div>
    </div> 
   </div>
  </div>

<div id="validePhone1" style="display: none;">

    <div class="phoneMask" ></div> 
    <div class="phoneFrame" style="position: fixed;overflow:visible; z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
     <div style="height: 5vw;;"></div> 
       <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top: -7%;transform: translate(10%, 10%);height: 10vw;width: 10vw;z-index: 99999999;"onclick="alertqx4()">     

     <!----> 
     <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;"> 
       防伪码设置 
     </div> 
     <div  style="height: 2.2vw;"></div> 
     
     <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;" >
     <input type="text" class='J_security_code' placeholder="设置1-6位英文或数字防伪码" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);">
     </div> 
   <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div>
<div style="height: 8vw;"></div>
<div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;">
  <div onclick="alertqx4()"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div>
      </div>
  <div style="height: 8vw;"></div>
   </div>
  </div>

<div id="validePhone11" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
  <div style="height: 5vw;"></div> 
   <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx5()">             
  <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					密钥设置
				</div> 
  <div style="height: 8vw;"></div> 
  <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;">
    <input type="text" placeholder="设置6-18位英文或数字密钥" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div>
   <div style="height: 8vw;"></div>
   <div onclick="alertqx5()"style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div></div> 
 <div style="height: 8vw;"></div> 
  </div> 
  </div> 
<div id="validePhone8" style="display: none;">
  <div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);"><div style="height: 5vw;"></div> <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					切换账号
				</div> <!----> 
  <div style="height: 5vw;"></div> 
   <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-5%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx6()">    
<img  src="<?php echo ($user["img"]); ?>" style="position: fixed;left: 6vw;top:19%;transform: translate(10%, 10%);height: 12vw;width: 12vw; z-index: 99999999;" > 
      <div style="position: fixed;width:208px;white-space:nowrap;overflow:hidden;text-overflow:clip; left: 20vw;top:21%;height: 10.5vw; line-height: 10.5vw; font-size: 13pt; color: #060408;z-index: 99999999;" ><?php echo ($user["nickname"]); ?>ID:<?php echo ($user["id"]); ?></div> 
   <img src="" style="position: fixed;right: 11vw;top:23%;transform: translate(10%, 10%);height: 5.5vw;width: 5.5vw; z-index: 99999999;">    
  <div style="position: relative; left: 5vw; width: 80vw; height: 50vw; border-radius: 4px; overflow: scroll; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 8vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"> 
  <div onclick="location.href='<?php echo U('portal/user/index');?>'"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div></div>
  <div style="height: 8vw;"></div> 
  </div>
</div>
<!-- 更新头像 -->
   <div id="valert1" class="alert" style="display: none">
<div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText"style="top: 75.877px;">
是否确定更新头像?
    </if>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx1()">
      取消
     </div> 
        <div class="buttonRight"onclick="location.href='<?php echo U('portal/user/index');?>'">
      确定
   </div>
       </div>
  </div>
  
  </div>

  <!-- 退出登录 -->
   <div id="tuichu" class="alert" style="display: none">
<div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText"style="top: 75.877px;">
是否确定退出登录?
      </if>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx2()">
      取消
     </div> 
        <div class="buttonRight" onclick="location.href='/denglu'">
    </if>
      确定
   </div>
  </div>
        </div>

  </body>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true
})
</script>
</html>