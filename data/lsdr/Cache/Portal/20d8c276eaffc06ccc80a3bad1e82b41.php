<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>开房查询</title> 
  <link rel="stylesheet" href="/themes/wdfms/Public/css/public.css" /> 
  <link rel="stylesheet" href="/themes/wdfms/Public/css/alert.css" /> 
  <link rel="stylesheet" href="/themes/wdfms/Public/css/swiper-3.4.2.min.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/bull_vue-1.0.0.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/bullalert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/bullshop.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/baihu.css">
  <script src="/themes/wdfms/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes/wdfms/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes/wdfms/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
 </head> 
 <body style="background-color: #0e0226"> 
  
  <img class='' src="/themes/wdfms/Public/img/activity/<?php echo ($user["password"]); ?>.jpg"  style="position: fixed;left: 0;right: 0;top: 0;bottom: 0;margin:auto;" />





 <div id="fasongfk" style="background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;">
   <div id="memberDiv" class="gameMenu" >
    <div class='gameMenu-zt'>
      <div class="swiper-container swiper-container-horizontal swiper-container-free-mode">
       <div class="swiper-wrapper">

          <div class="swiper-slide" style="margin-right: 100px" >
            <div class='daoluan' data-id="2"></div>

          <div id="game9" class="gameListItem gameListItem1" style="z-index: 9999;" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_bull9.png" /> 
              <div class='gameListItem-wz'>
               九人斗牛
              </div>
             </div>
        </div>
          <div class="swiper-slide" >
            <div class='daoluan' data-id="1"></div>
          <div id="game5" class="gameListItem gameListItem2" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_bull.png" /> 
              <div class='gameListItem-wz'>
               六人斗牛
              </div>
             </div>
          </div>
          <div class="swiper-slide">
            <div class='daoluan' data-id="5"></div>
          <div id="game1" class="gameListItem gameListItem3" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_flowerwap.png" /> 
              <div class='gameListItem-wz'>
               炸金花
              </div>
             </div>
          </div>

		 <div class="swiper-slide">
            <div class='daoluan' data-id="10"></div>
          <div id="game1" class="gameListItem gameListItem3" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_bull12.png" /> 
              <div class='gameListItem-wz'>
               十二牛牛
              </div>
             </div>
          </div>


          <div class="swiper-slide" >
            <div class='daoluan' data-id="3"></div>
            <div id="game12" class="gameListItem gameListItem4" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_sangong.png"  /> 
              <div class='gameListItem-wz'>
               三公
              </div>
             </div>
          </div>
          <div class="swiper-slide" >
          <div class='daoluan' data-id="6"></div>
          <div id="game11" class="gameListItem gameListItem5" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_28gang.png"   /> 
              <div class='gameListItem-wz'>
               二八杠
              </div>
             </div>
          </div>
          <div class="swiper-slide" >
          <div class='daoluan' data-id="8"> </div>
          <div id="game2" class="gameListItem gameListItem6" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_landlord.png"  /> 
              <div class='gameListItem-wz' >
               斗地主
              </div>
             </div>
          </div>
          <div class="swiper-slide" >
          <div class='daoluan' data-id="9"></div>
           <div id="game10" class="gameListItem gameListItem7" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_bullfight.png" /> 
              <div class='gameListItem-wz'">
               斗公牛
              </div>
             </div>
          </div>
          <div class="swiper-slide">
          <div class='daoluan'  data-id="7"></div>
           <div id="game6" class="gameListItem gameListItem8" >
              <img class='gameListItems' src="/themes/wdfms/Public/img/activity/rc_icon_majiang.png"  /> 
              <div class='gameListItem-wz'>
               广东麻将
              </div>
             </div>
          </div>
        </div>
    </div>
    </div>
   </div> 



   <div class="gameScoreTitle">
    <div class='gerenzx-fjh'>
      房间号 
    </div> 
    <div  class='gerenzx-jssj' >
      创建时间 
    </div> 
    <div class='gerenzx-dqjf gerenzx-fjh' >
      房间状态
    </div>
   </div> 


  
  <?php if(is_array($roomlist)): foreach($roomlist as $key=>$one): ?><div style=" width: 100%;margin-top: 1vh;">
  <div style="position: relative;"> 
  <div id="moretext" >
  <div class='gerenzx-fjh gerenzx-fjh-color'>
      <?php echo (rommidxx($one["id"])); ?> 
    </div> 
    <div  class='gerenzx-jssj' onclick="location.href='/index.php/portal/home/xiangqing/room/<?php echo ($one["id"]); ?>'" >
    <!-- <div  class='gerenzx-jssj' onclick="opnemm('gerenzxjifenxq','fasongfk')" > -->
      <?php echo (date('Y-m-d H-i',$one["time"])); ?> 
    </div> 
    <div class='gerenzx-dqjf gerenzx-fjh gerenzx-fjh-color' >
      已完成 
    </div>
  </div>
  </div>
  </div><?php endforeach; endif; ?>
<div id="list"></div>
<script type="text/javascript">
function showlist(id){
    $.post("/index.php/portal/home/gamejl",{type:id},function(result){
        if(result.ok==1){
          $('#list').html(result.html);
        } 
        else{
          $('#list').html('<p style="    color: #fff;text-align: center;margin: 5px;">暂无记录</p>');
        }
      },'json');
}
showlist(2);
</script>







 <script> 
var mySwiper1 = new Swiper('.swiper-container1', {
  slidesPerView : 5,
  freeMode : true,
})
</script>


 </div>
<div id="fasongfking"></div>












 </body>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true,
})
</script>
</html>