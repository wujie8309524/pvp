<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title><?php echo ($room["roomid"]); ?>号九人金花房间</title>
  <link rel="stylesheet" type="text/css" href="/app/css/jflower-9-2.0.3.css" />
  <link rel="stylesheet" type="text/css" href="/app/css/common/alert-1.1.css">
  <link rel="stylesheet" type="text/css" href="/app/css/zjh.css" /> 
<link rel="stylesheet" href="/app/css/app.css" /> 
  <style type="text/css">.load4 .loader {
    font-size: 20px;
    top: 40%;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    position: absolute;
    left: 50%;
    margin-left: -.5em;
    margin-top: -.5em;
    text-indent: -9999em;
    -webkit-animation: load4 1.3s infinite linear;
    animation: load4 1.3s infinite linear;
    transform:scale(.7);
}
@-webkit-keyframes load4 {
    0%,
    100% {
        box-shadow: 0em -3em 0em 0.2em #ffffff, 2em -2em 0 0em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 0em #ffffff;
    }
    12.5% {
        box-shadow: 0em -3em 0em 0em #ffffff, 2em -2em 0 0.2em #ffffff, 3em 0em 0 0em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    25% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 0em #ffffff, 3em 0em 0 0.2em #ffffff, 2em 2em 0 0em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    37.5% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 0em #ffffff, 2em 2em 0 0.2em #ffffff, 0em 3em 0 0em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    50% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 0em #ffffff, 0em 3em 0 0.2em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    62.5% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 0em #ffffff, -2em 2em 0 0.2em #ffffff, -3em 0em 0 0em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    75% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 0.2em #ffffff, -2em -2em 0 0em #ffffff;
    }
    87.5% {
        box-shadow: 0em -3em 0em 0em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 0em #ffffff, -2em -2em 0 0.2em #ffffff;
    }
}
@keyframes load4 {
    0%,
    100% {
        box-shadow: 0em -3em 0em 0.2em #ffffff, 2em -2em 0 0em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 0em #ffffff;
    }
    12.5% {
        box-shadow: 0em -3em 0em 0em #ffffff, 2em -2em 0 0.2em #ffffff, 3em 0em 0 0em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    25% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 0em #ffffff, 3em 0em 0 0.2em #ffffff, 2em 2em 0 0em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    37.5% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 0em #ffffff, 2em 2em 0 0.2em #ffffff, 0em 3em 0 0em #ffffff, -2em 2em 0 -0.5em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    50% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 0em #ffffff, 0em 3em 0 0.2em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 -0.5em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    62.5% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 0em #ffffff, -2em 2em 0 0.2em #ffffff, -3em 0em 0 0em #ffffff, -2em -2em 0 -0.5em #ffffff;
    }
    75% {
        box-shadow: 0em -3em 0em -0.5em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 0.2em #ffffff, -2em -2em 0 0em #ffffff;
    }
    87.5% {
        box-shadow: 0em -3em 0em 0em #ffffff, 2em -2em 0 -0.5em #ffffff, 3em 0em 0 -0.5em #ffffff, 2em 2em 0 -0.5em #ffffff, 0em 3em 0 -0.5em #ffffff, -2em 2em 0 0em #ffffff, -3em 0em 0 0em #ffffff, -2em -2em 0 0.2em #ffffff;
    }
}

*{padding: 0;margin:0;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-backface-visibility: hidden;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 寰蒋闆呴粦, Arial, sans-serif;cursor: default;}
img{border: none;}
.backImg1{background:url("http://goss.fexteam.com/files/d_10/images/game/pic1.png"); }

    
    

    
        
    
    
    
    
  
.roomCard{position: fixed;top:1.5vh;left: 3vh;;z-index:90;height: 6vh;}
.roomCard img{height: 6vh;position: absolute;left: 0;top:0;z-index: 9;}
.roomCard .num{height: 3.2vh;line-height: 3.2vh;text-align: right;color:#fff;font-size:2.1vh;margin-top: 1vh;position:relative;}
.round{position: absolute;top:4px;left: 50%;width: 80px;line-height: 24px;font-size:15px;margin-left: -40px;color:#fff;z-index: 91;text-align: center;opacity: 0.6;}

.addFriend{position: fixed;top:10px;right: 20px;width: 40px;z-index:90;}
.return{position: fixed;top:1.5vh;right: 10vh;width: 6vh;z-index:90;}
.bottom{position: fixed;bottom:0;left: 0;width: 100%;z-index:90;}
.bottomGameRule{position: fixed;bottom:5;left: 20px;width: 30px; height: 30px;z-index:90;}
.bottomGameHistory{position: fixed;bottom:5;left: 70px;width: 30px; height: 30px;z-index:90;}
.bottomGameMessage{position: fixed;bottom:5;right: 20px;width: 30px; height: 30px;z-index:90;}
.myCardType{position: fixed;bottom:0;left: 35%;width: 30%;z-index:91;text-align: center;color: #fff;height: 24px;line-height: 24px;}

/*.main{width: 100%;position: relative;background: #fff;margin:0 auto;}*/



    
    

/*.member1{top:73vh;left:50%;width: 74px;height: 110px;margin-left: -37px;}*/


.member2{top:46%;right:3%;}
.member2 .PKbox{right:-2;}
.member2 .isReady{top:10px;left: -50px;}
.member2 .isReady .ready{width:40px;margin-top: 30px;}

.member3{top:33%;right:3%;}
.member3 .PKbox{right:-2;}
.member3 .isReady{top:10px;left: -50px;}
.member3 .isReady .ready{width:40px;margin-top: 30px;}

.member4{top:20%;right:3%; }
.member4 .PKbox{right:-2;}
.member4 .isReady{top:10px;left: -50px;}
.member4 .isReady .ready{width:40px;margin-top: 30px;}

.member5{top:7%;right:16%;}
.member5 .PKbox{right:-2;}
.member5 .isReady{top:10px;left: -50px;}
.member5 .isReady .ready{width:40px;margin-top: 30px;}

.member6{top:7%;left:16%;}
.member6 .isReady{top:10px;left: 70px;}
.member6 .PKbox{left:-2;}
.member6 .isReady .ready{width:40px;margin-top: 30px;}

.member7{top:20%;left:3%;}
.member7 .isReady{top:10px;left: 70px;}
.member7 .PKbox{left:-2;}
.member7 .isReady .ready{width:40px;margin-top: 30px;}

.member8{top:33%;left:3%;}
.member8 .isReady{top:10px;left: 70px;}
.member8 .PKbox{left:-2;}
.member8 .isReady .ready{width:40px;margin-top: 30px;}

.member9{top:46%;left:3%;}
.member9 .isReady{top:10px;left: 70px;}
.member9 .PKbox{left:-2;}
.member9 .isReady .ready{width:40px;margin-top: 30px;}

.quitBack{position: absolute;width: 7.2vh;height: 10.8vh;border-radius:1vh;top:1.4vh;left:1vh;background:#000;opacity:0.45;}
.member1 .quitBack{position: absolute;width: 8.8vh;height: 12.8vh;border-radius:1vh;top:1.8vh;left:1vh;background:#000;opacity:0.45;}
.colorBorder{position: absolute;text-align: center;width: 45px;height: 69px;border:2px solid #df0000;border-radius:4px;top:9px;left:6px;}
.colorBorder .backColor{background:#df0000;opacity:0.45;height:100%;position: absolute;bottom:0;left:0;width:100%;}
.colorBorder1{width: 56px;height: 86px;border:3px solid #df0000;border-radius:6px;top:10px;left:6px; }
@keyframes mycolor1{0% {border-color: #04c120;}50% {border-color: #ffff3c;}100% {border-color: #df0000;}}
@-webkit-keyframes mycolor1 {0% {border-color: #04c120;}50% {border-color: #ffff3c;}100% {border-color: #df0000;}}
@keyframes mycolor2{0% {background:#04c120;height: 0;}50% {background:#ffff3c;}100% {background:#df0000;height: 100%;}}
@-webkit-keyframes mycolor2{0% {background:#04c120;height: 0;}50% {background:#ffff3c;}100% {background:#df0000;height: 100%;}}


    
    
    
    
    
    
.place{width:120px;height:120px;position: absolute;top:30%;left:165px;}
.place .scoresArea{position: relative;width: 100%;height:100%;}
.place .totalScore{position: absolute;top:-25px;left: 20px;width: 80px;}
.place .totalScore img{position: absolute;width: 20px;left: 0;top:0;}
.place .totalScore .scores{height: 20px;line-height: 20px;text-align: right;padding: 0 12px;border-radius:10px;background: #2c797f;color:#fff;font-size:14px;width:52%;}


.clock{width: 40px;height:42px;top:40%;left:50%;margin-top:-26px;margin-left: -20px;position: absolute;background:url("http://goss.fexteam.com/files/d_10/images/game/time.png");background-size:40px 53px;text-align: center;line-height: 42px;font-size: 18px;padding-top: 11px;}


.coin{width: 28px;height:28px;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:818px 97px;position: absolute;}
.coin1{left:40px;top:36vh;}
.coin2{left:150px;top:23vh;}
.coin3{left:150px;top:10vh;}
.coin4{left:150px;top:-4vh;}
.coin5{left:110px;top:-16vh;}
.coin6{left:-40px;top:-16vh;}
.coin7{left:-60px;top:-4vh;}
.coin8{left:-60px;top:10vh;}
.coin9{left:-60px;top:23vh;}

.coinType2{background-position:-194 -4;}
.coinType4{background-position:-2 -4;}
.coinType8{background-position:-31 -4;}
.coinType10{background-position:-223 -4;}
.coinType16{background-position:-59 -4;}
.coinType20{background-position:-87 -4;}
.coinType5{background-position:-290 -4;}
.coinType40{background-position:-323 -4;}

.myButton{position: absolute;top:61%;width:100%;}
.myButton .scoreList{width:40vh;margin:0 auto; }
.myButton .scoreList .scoreItem{width: 6.7vh;height:7.2vh;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:106.8vh 12.8vh;float: left;margin-left: 2.8vh;}
.myButton .scoreList .scoreItemText{color: white; text-align: center; line-height: 7.2vh;}
.myButton .scoreList .scoreItem11{background-position:-23.2vh -4.8vh;}
.myButton .scoreList .scoreItem10{background-position:-52.9vh -4.8vh;}
.myButton .scoreList .scoreItem21{background-position:-15.6vh -4.8vh;}
.myButton .scoreList .scoreItem20{background-position:-45.5vh -4.8vh;}
.myButton .scoreList .scoreItem31{background-position:-8.3vh -4.8vh;}
.myButton .scoreList .scoreItem30{background-position:-38.1vh -4.8vh;}
.myButton .scoreList .scoreItem41{background-position:-.4vh -4.8vh;}
.myButton .scoreList .scoreItem51{background-position:-83.6vh -4.8vh;}
.myButton .scoreList .scoreItem50{background-position:-98.8vh -4.8vh;}
.myButton .scoreList .scoreItem61{background-position:-91.3vh -4.8vh;}

.myButton .doubleButton{width:36vh;margin:0 auto;}
.myButton .doubleButton .isSee{margin-top: 160px;}
.myButton .doubleButton .isSee .leftButton{width: 70px;float: left;margin-left:4vh;}
.myButton .doubleButton .isSee .rightButton{width:70px;float: right;margin-right: 4vh;}
.myButton .doubleButton .isSee img{width: 100%;}
.myButton .doubleButton .isOver{margin-top: 21vh;}
.myButton .doubleButton .isOver .button{width: 6.7vh;height:7.2vh;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:106.8vh 12.8vh;}
.myButton .doubleButton .isOver .leftButton{float: left;background-position:-68.3vh -4.8vh;}
.myButton .doubleButton .isOver .rightButton1{float: right;background-position:-75.9vh -4.8vh;}
.myButton .doubleButton .isOver .rightButton{float: right;background-position:-60.5vh -4.8vh;}

.cardDeal{position: absolute;top:19.5%;left: 19%;width: 62%;height: 55.5%;}


    
    
    
    .cardDeal .cardall{background:url("http://goss.fexteam.com/files/d_10/images/game/cards.jpg");z-index: 91;background-size:519px 228px;box-shadow:1px 1px 5px #333;}
.cardDeal .cardA1{background-position: 1 -171;}
.cardDeal .cardA2{background-position: -39 -171;}
.cardDeal .cardA3{background-position: -79 -171;}
.cardDeal .cardA4{background-position: -119 -171;}
.cardDeal .cardA5{background-position: -159 -171;}
.cardDeal .cardA6{background-position: -199 -171;}
.cardDeal .cardA7{background-position: -239 -171;}
.cardDeal .cardA8{background-position: -279 -171;}
.cardDeal .cardA9{background-position: -319 -171;}
.cardDeal .cardA10{background-position: -359 -171;}
.cardDeal .cardA11{background-position: -399 -171;}
.cardDeal .cardA12{background-position: -439 -171;}
.cardDeal .cardA13{background-position: -479 -171;}
.cardDeal .cardB1{background-position: 1 -114;}
.cardDeal .cardB2{background-position: -39 -114;}
.cardDeal .cardB3{background-position: -79 -114;}
.cardDeal .cardB4{background-position: -119 -114;}
.cardDeal .cardB5{background-position: -159 -114;}
.cardDeal .cardB6{background-position: -199 -114;}
.cardDeal .cardB7{background-position: -239 -114;}
.cardDeal .cardB8{background-position: -279 -114;}
.cardDeal .cardB9{background-position: -319 -114;}
.cardDeal .cardB10{background-position: -359 -114;}
.cardDeal .cardB11{background-position: -399 -114;}
.cardDeal .cardB12{background-position: -439 -114;}
.cardDeal .cardB13{background-position: -479 -114;}
.cardDeal .cardC1{background-position: 1 0;}
.cardDeal .cardC2{background-position: -39 0;}
.cardDeal .cardC3{background-position: -79 0;}
.cardDeal .cardC4{background-position: -119 0;}
.cardDeal .cardC5{background-position: -159 0;}
.cardDeal .cardC6{background-position: -199 0;}
.cardDeal .cardC7{background-position: -239 0;}
.cardDeal .cardC8{background-position: -279 0;}
.cardDeal .cardC9{background-position: -319 0;}
.cardDeal .cardC10{background-position: -359 0;}
.cardDeal .cardC11{background-position: -399 0;}
.cardDeal .cardC12{background-position: -439 0;}
.cardDeal .cardC13{background-position: -479 0;}
.cardDeal .cardD1{background-position: 1 -57;}
.cardDeal .cardD2{background-position: -39 -57;}
.cardDeal .cardD3{background-position: -79 -57;}
.cardDeal .cardD4{background-position: -119 -57;}
.cardDeal .cardD5{background-position: -159 -57;}
.cardDeal .cardD6{background-position: -199 -57;}
.cardDeal .cardD7{background-position: -239 -57;}
.cardDeal .cardD8{background-position: -279 -57;}
.cardDeal .cardD9{background-position: -319 -57;}
.cardDeal .cardD10{background-position: -359 -57;}
.cardDeal .cardD11{background-position: -399 -57;}
.cardDeal .cardD12{background-position: -439 -57;}
.cardDeal .cardD13{background-position: -479 -57;}

.zhajinhua-index1{z-index: 91 !important;}
.zhajinhua-index2{z-index: 92 !important;}
.zhajinhua-index3{z-index: 93 !important;}

.messageSay{position: absolute;height: 18px;font-size: 12px;color: #fff;background: #060408;border-radius: 9px;padding: 0 9px;opacity: .75;line-height: 18px;z-index: 97}
.messageSay1{top:75%;left: 39%;}
.messageSay1 .triangle{position: absolute;top:18px;left:30px;width:0;height:0;border-top: 6px solid #060408;border-right: 12px solid transparent;}
.messageSay2{top:47%;right: 3%;}
.messageSay2 .triangle{position: absolute;top:18px;right:20px;width:0;height:0;border-top: 6px solid #060408;border-left: 12px solid transparent;}
.messageSay3{top:33%;right: 3%;}
.messageSay3 .triangle{position: absolute;top:18px;right:20px;width:0;height:0;border-top: 6px solid #060408;border-left: 12px solid transparent;}
.messageSay4{top:19%;right: 3%;}
.messageSay4 .triangle{position: absolute;top:18px;right:20px;width:0;height:0;border-top: 6px solid #060408;border-left: 12px solid transparent;}
.messageSay5{top:5%;right: 16%;}
.messageSay5 .triangle{position: absolute;top:18px;right:20px;width:0;height:0;border-top: 6px solid #060408;border-left: 12px solid transparent;}
.messageSay6{top:5%;left: 16%;}
.messageSay6 .triangle{position: absolute;top:18px;left:45px;width:0;height:0;border-top: 6px solid #060408;border-right: 12px solid transparent;}
.messageSay7{top:19%;left: 3%;}
.messageSay7 .triangle{position: absolute;top:18px;left:45px;width:0;height:0;border-top: 6px solid #060408;border-right: 12px solid transparent;}
.messageSay8{top:33%;left: 3%;}
.messageSay8 .triangle{position: absolute;top:18px;left:45px;width:0;height:0;border-top: 6px solid #060408;border-right: 12px solid transparent;}
.messageSay9{top:47%;left: 3%;}
.messageSay9 .triangle{position: absolute;top:18px;left:45px;width:0;height:0;border-top: 6px solid #060408;border-right: 12px solid transparent;}


.card{width: 26px;height:37px;background:url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:26px 37px;position: absolute;}
.isQuit{width: 32px;height:32px;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:818px 97px;background-position:-160 -1;position: absolute;}
.isLose{width: 32px;height:32px;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:818px 97px;background-position:-256 -1;position: absolute;}
.isSeen{width: 32px;height:32px;background:url("http://goss.fexteam.com/files/d_10/images/game/round.png");background-size:818px 97px;background-position:-123 -1;position: absolute;}

.isQuit1{left:50%;margin-left: -24px;top:5;width: 47px;height:47px;background-size:1282px 152px;background-position:-252 -4;z-index: 96;}
.isLose1{left:50%;margin-left: -24px;top:5;width: 47px;height:47px;background-size:1282px 152px;background-position:-402 -4;z-index: 96;}
.myQuitBack{left:0;top:0;width:100%;height:100%;border-radius:4px;background:#000;opacity: .4;position: absolute;z-index: 92;}
.isSeen1{display: none;}
.card11{animation:mymove11 .4s ;-webkit-animation:mymove11 .4s ;left:40%;top:88.4%;width: 40px;height:57px;background-size:40px 57px;margin-left: -20px;box-shadow:1px 1px 5px #333;}
@keyframes mymove11{from {left:50%;top:40%;}to {left:40%;top:88.4%}}
@-webkit-keyframes mymove11 {from {left:50%;top:40%;}to {left:40%;top:88.4%}}
.card12{animation:mymove12 .4s ;-webkit-animation:mymove12 .4s ;left:50%;top:88.4%;width: 40px;height:57px;background-size:40px 57px;margin-left: -20px;box-shadow:1px 1px 5px #333;}
@keyframes mymove12{from {left:50%;top:40%;}to {left:50%;top:88.4%}}
@-webkit-keyframes mymove12 {from {left:50%;top:40%;}to {left:50%;top:88.4%}}
.card13{animation:mymove13 .4s ;-webkit-animation:mymove13 .4s ;left:60%;top:88.4%;width: 40px;height:57px;background-size:40px 57px;margin-left: -20px;box-shadow:1px 1px 5px #333;}
@keyframes mymove13{from {left:50%;top:40%;}to {left:60%;top:88.4%}}
@-webkit-keyframes mymove13{from {left:50%;top:40%;}to {left:60%;top:88.4%}}


.isQuit2{right:3%;top:55.5%;}
.isLose2{right:3%;top:55.5%;}
.isSeen2{right:3%;top:55.5%;}
.card23{animation:mymove21 .4s ;-webkit-animation:mymove21 .4s ;right:0;top:55%;}
@keyframes mymove21{from {right:50%;top:40%;}to {right:0;top:55%}}
@-webkit-keyframes mymove21 {from {right:50%;top:40%;}to {right:0;top:55%}}
.card22{animation:mymove22 .4s ;-webkit-animation:mymove22 .4s ;right:6%;top:55%;}
@keyframes mymove22{from {right:50%;top:40%;}to {right:6%;top:55%}}
@-webkit-keyframes mymove22 {from {right:50%;top:40%;}to {right:6%;top:55%}}
.card21{animation:mymove23 .4s ;-webkit-animation:mymove23 .4s ;right:12%;top:55%;}
@keyframes mymove23{from {right:50%;top:40%;}to {right:12%;top:55%}}
@-webkit-keyframes mymove23{from {right:50%;top:40%;}to {right:12%;top:55%}}

.isQuit3{right:3%;top:32.5%;}
.isLose3{right:3%;top:32.5%;}
.isSeen3{right:3%;top:32.5%;}
.card33{animation:mymove31 .4s ;-webkit-animation:mymove31 .4s ;right:0;top:32%;}
@keyframes mymove31{from {right:50%;top:40%;}to {right:0;top:32%}}
@-webkit-keyframes mymove31 {from {right:50%;top:40%;}to {right:0;top:32%}}
.card32{animation:mymove32 .4s ;-webkit-animation:mymove32 .4s ;right:6%;top:32%;}
@keyframes mymove32{from {right:50%;top:40%;}to {right:6%;top:32%}}
@-webkit-keyframes mymove32 {from {right:50%;top:40%;}to {right:6%;top:32%}}
.card31{animation:mymove33 .4s ;-webkit-animation:mymove33 .4s ;right:12%;top:32%;}
@keyframes mymove33{from {right:50%;top:40%;}to {right:12%;top:32%}}
@-webkit-keyframes mymove33{from {right:50%;top:40%;}to {right:12%;top:32%}}

.isQuit4{right:3%;top:9.5%;}
.isLose4{right:3%;top:9.5%;}
.isSeen4{right:3%;top:9.5%;}
.card43{animation:mymove41 .4s ;-webkit-animation:mymove41 .4s ;right:0;top:9%;}
@keyframes mymove41{from {left:50%;top:41%;}to {right:0;top:9%;}}
@-webkit-keyframes mymove41 {from {left:50%;top:41%;}to {right:0;top:9%;}}
.card42{animation:mymove42 .4s ;-webkit-animation:mymove42 .4s ;right:6%;top:9%}
@keyframes mymove42{from {left:50%;top:41%;}to {right:6%;top:9%}}
@-webkit-keyframes mymove42 {from {left:50%;top:41%;}to {right:6%;top:9%}}
.card41{animation:mymove43 .4s ;-webkit-animation:mymove43 .4s ;right:12%;top:9%}
@keyframes mymove43{from {left:50%;top:41%;}to {right:12%;top:9%}}
@-webkit-keyframes mymove43{from {left:50%;top:40%;}to {right:12%;top:9%}}

.isQuit5{right:3%;top:-12.5%;margin-right: 50px;}
.isLose5{right:3%;top:-12.5%;margin-right: 50px;}
.isSeen5{right:3%;top:-12.5%;margin-right: 50px;}
.card53{animation:mymove51 .4s ;-webkit-animation:mymove51 .4s ;right:0;top:-13%;margin-right: 50px;}
@keyframes mymove51{from {left:50%;top:40%;}to {right:0;top:-13%;margin-right: 50px;}}
@-webkit-keyframes mymove51 {from {left:50%;top:40%;}to {right:0;top:-13%;margin-right: 50px;}}
.card52{animation:mymove52 .4s ;-webkit-animation:mymove52 .4s ;right:6%;top:-13%;margin-right: 50px;}
@keyframes mymove52{from {left:50%;top:40%;}to {right:6%;top:-13%;margin-right: 50px;}}
@-webkit-keyframes mymove52 {from {left:50%;top:40%;}to {right:6%;top:-13%;margin-right: 50px;}}
.card51{animation:mymove53 .4s ;-webkit-animation:mymove53 .4s ;right:12%;top:-13%;margin-right: 50px;}
@keyframes mymove53{from {left:50%;top:40%;}to {right:12%;top:-13%;margin-right: 50px;}}
@-webkit-keyframes mymove53{from {left:50%;top:40%;}to {right:12%;top:-13%;margin-right: 50px;}}

.isQuit6{left:3%;top:-12.5%;margin-left: 50px;}
.isLose6{left:3%;top:-12.5%;margin-left: 50px;}
.isSeen6{left:3%;top:-12.5%;margin-left: 50px;}
.card63{animation:mymove61 .4s ;-webkit-animation:mymove61 .4s ;left:0;top:-13%;margin-left: 50px;}
@keyframes mymove61{from {left:50%;top:40%;}to {left:0;top:-13%;margin-left: 50px;}}
@-webkit-keyframes mymove61 {from {left:50%;top:40%;}to {left:0;top:-13%;margin-left: 50px;}}
.card62{animation:mymove62 .4s ;-webkit-animation:mymove62 .4s ;left:6%;top:-13%;margin-left: 50px;}
@keyframes mymove62{from {left:50%;top:40%;}to {left:6%;top:-13%;margin-left: 50px;}}
@-webkit-keyframes mymove62 {from {left:50%;top:40%;}to {left:6%;top:-13%;margin-left: 50px;}}
.card61{animation:mymove63 .4s ;-webkit-animation:mymove63 .4s ;left:12%;top:-13%;margin-left: 50px;}
@keyframes mymove63{from {left:50%;top:40%;}to {left:12%;top:-13%;margin-left: 50px;}}
@-webkit-keyframes mymove63{from {left:50%;top:40%;}to {left:12%;top:-13%;margin-left: 50px;}}


.isQuit7{left:3%;top:9.5%;}
.isLose7{left:3%;top:9.5%;}
.isSeen7{left:3%;top:9.5%;}
.card73{animation:mymove71 .4s ;-webkit-animation:mymove71 .4s ;left:0;top:9%;}
@keyframes mymove71{from {left:50%;top:40%;}to {left:0;top:9%}}
@-webkit-keyframes mymove71 {from {left:50%;top:40%;}to {left:0;top:9%}}
.card72{animation:mymove72 .4s ;-webkit-animation:mymove72 .4s ;left:6%;top:9%;}
@keyframes mymove72{from {left:50%;top:40%;}to {left:6%;top:9%}}
@-webkit-keyframes mymove72 {from {left:50%;top:40%;}to {left:6%;top:9%}}
.card71{animation:mymove73 .4s ;-webkit-animation:mymove73 .4s ;left:12%;top:9%;}
@keyframes mymove73{from {left:50%;top:40%;}to {left:12%;top:9%}}
@-webkit-keyframes mymove73{from {left:50%;top:40%;}to {left:12%;top:9%}}


.isQuit8{left:3%;top:32.5%;}
.isLose8{left:3%;top:32.5%;}
.isSeen8{left:3%;top:32.5%;}
.card83{animation:mymove81 .4s ;-webkit-animation:mymove81 .4s ;left:0;top:32%;}
@keyframes mymove81{from {left:50%;top:40%;}to {left:0;top:32%}}
@-webkit-keyframes mymove81 {from {left:50%;top:40%;}to {left:0;top:32%}}
.card82{animation:mymove82 .4s ;-webkit-animation:mymove82 .4s ;left:6%;top:32%;}
@keyframes mymove82{from {left:50%;top:40%;}to {left:6%;top:32%}}
@-webkit-keyframes mymove82 {from {left:50%;top:40%;}to {left:6%;top:32%}}
.card81{animation:mymove83 .4s ;-webkit-animation:mymove83 .4s ;left:12%;top:32%;}
@keyframes mymove83{from {left:50%;top:40%;}to {left:12%;top:32%}}
@-webkit-keyframes mymove83{from {left:50%;top:40%;}to {left:12%;top:32%}}


.isQuit9{left:3%;top:55.5%;}
.isLose9{left:3%;top:55.5%;}
.isSeen9{left:3%;top:55.5%;}
.card93{animation:mymove91 .4s ;-webkit-animation:mymove91 .4s ;left:0;top:55%;}
@keyframes mymove91{from {left:50%;top:40%;}to {left:0;top:55%}}
@-webkit-keyframes mymove91 {from {left:50%;top:40%;}to {left:0;top:55%}}
.card92{animation:mymove92 .4s ;-webkit-animation:mymove92 .4s ;left:6%;top:55%;}
@keyframes mymove92{from {left:50%;top:40%;}to {left:6%;top:55%}}
@-webkit-keyframes mymove92 {from {left:50%;top:40%;}to {left:6%;top:55%}}
.card91{animation:mymove93 .4s ;-webkit-animation:mymove93 .4s ;left:12%;top:55%;}
@keyframes mymove93{from {left:50%;top:40%;}to {left:12%;top:55%}}
@-webkit-keyframes mymove93{from {left:50%;top:40%;}to {left:12%;top:55%}}
  
    
    
    
    
    
    
    

/********************************* 缈荤墝   ***********************************************/
.cardOver{position: absolute;height: 100%;top:0;}
.cardOver .cardResult{position: relative;height: 100%;}
.cardOver .name{color: #fff;font-size: 1.5vh;text-align: center;line-height: 2vh;position: absolute;top: 13%;width: 100%;left:0;}


.cardOver .openCard{position: absolute;width: 70%;top: 28%;left: 15%;}
.cardOver .cards{width: 31px;height: 43px;position: absolute;}
.cardOver .face{width: 30px;height: 43px;border-radius:3px;position: absolute;-webkit-backface-visibility: hidden;-webkit-transition:all .3s;}
.cardOver .front{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:30px 43px;z-index: 92;}
.cardOver .back{background:url("http://goss.fexteam.com/files/d_10/images/game/cards.jpg");-webkit-transform:rotateY(-180deg);z-index: 91;background-size:389px 171px;box-shadow:1px 1px 5px #333;}
/*鐗岄潰瀹氫綅鏍峰紡*/
.cardOver .card{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:30px 43px;}
.cardOver .card-1{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:30px 43px;}
.cardOver .cardundefined{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:30px 43px;}
.cardOver .cardA1{background-position: 1 -129;}
.cardOver .cardA2{background-position: -29 -129;}
.cardOver .cardA3{background-position: -59 -129;}
.cardOver .cardA4{background-position: -89 -129;}
.cardOver .cardA5{background-position: -119 -129;}
.cardOver .cardA6{background-position: -149 -129;}
.cardOver .cardA7{background-position: -179 -129;}
.cardOver .cardA8{background-position: -209 -129;}
.cardOver .cardA9{background-position: -239 -129;}
.cardOver .cardA10{background-position: -269 -129;}
.cardOver .cardA11{background-position: -299 -129;}
.cardOver .cardA12{background-position: -329 -129;}
.cardOver .cardA13{background-position: -359 -129;}
.cardOver .cardB1{background-position: 1 -86;}
.cardOver .cardB2{background-position: -29 -86;}
.cardOver .cardB3{background-position: -59 -86;}
.cardOver .cardB4{background-position: -89 -86;}
.cardOver .cardB5{background-position: -119 -86;}
.cardOver .cardB6{background-position: -149 -86;}
.cardOver .cardB7{background-position: -179 -86;}
.cardOver .cardB8{background-position: -209 -86;}
.cardOver .cardB9{background-position: -239 -86;}
.cardOver .cardB10{background-position: -269 -86;}
.cardOver .cardB11{background-position: -299 -86;}
.cardOver .cardB12{background-position: -329 -86;}
.cardOver .cardB13{background-position: -359 -86;}
.cardOver .cardC1{background-position: 1 0;}
.cardOver .cardC2{background-position: -29 0;}
.cardOver .cardC3{background-position: -59 0;}
.cardOver .cardC4{background-position: -89 0;}
.cardOver .cardC5{background-position: -119 0;}
.cardOver .cardC6{background-position: -149 0;}
.cardOver .cardC7{background-position: -179 0;}
.cardOver .cardC8{background-position: -209 0;}
.cardOver .cardC9{background-position: -239 0;}
.cardOver .cardC10{background-position: -269 0;}
.cardOver .cardC11{background-position: -299 0;}
.cardOver .cardC12{background-position: -329 0;}
.cardOver .cardC13{background-position: -359 0;}
.cardOver .cardD1{background-position: 1 -43;}
.cardOver .cardD2{background-position: -29 -43;}
.cardOver .cardD3{background-position: -59 -43;}
.cardOver .cardD4{background-position: -89 -43;}
.cardOver .cardD5{background-position: -119 -43;}
.cardOver .cardD6{background-position: -149 -43;}
.cardOver .cardD7{background-position: -179 -43;}
.cardOver .cardD8{background-position: -209 -43;}
.cardOver .cardD9{background-position: -239 -43;}
.cardOver .cardD10{background-position: -269 -43;}
.cardOver .cardD11{background-position: -299 -43;}
.cardOver .cardD12{background-position: -329 -43;}
.cardOver .cardD13{background-position: -359 -43;}


.cardOver .card-flipped .front{z-index: 91;-webkit-transform: rotateY(180deg);}
.cardOver .card-flipped .back{z-index: 92;-webkit-transform: rotateY(0deg);}


.myCards {position: absolute;width: 20%;top: 88.5%;left: 40%;}
.myCards .winText{position: absolute;width: 100%;top:-50px;}
.myCards .winText img{width: 240%;margin-left: -70%;}
.myCards .cards{width: 40;height: 57px;position: absolute; }
.myCards .face{width: 40px;height: 57px;border-radius:4px;position: absolute;-webkit-backface-visibility: hidden;-webkit-transition:all .3s; }
.myCards .front{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:40px 57px;z-index: 92;}
.myCards .back{background:url("http://goss.fexteam.com/files/d_10/images/game/cards.jpg");-webkit-transform:rotateY(-180deg);z-index: 91;background-size:519px 228px;box-shadow:1px 1px 5px #333;}
.myCards .card{background: #fff;}
/*鐗岄潰瀹氫綅鏍峰紡*/
.myCards .card{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:40px 57px;}
.myCards .card-1{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:40px 57px;}
.myCards .cardundefined{background: url("http://goss.fexteam.com/files/d_10/images/game/card.png");background-size:40px 57px;}
.myCards .cardA1{background-position: 1 -171;}
.myCards .cardA2{background-position: -39 -171;}
.myCards .cardA3{background-position: -79 -171;}
.myCards .cardA4{background-position: -119 -171;}
.myCards .cardA5{background-position: -159 -171;}
.myCards .cardA6{background-position: -199 -171;}
.myCards .cardA7{background-position: -239 -171;}
.myCards .cardA8{background-position: -279 -171;}
.myCards .cardA9{background-position: -319 -171;}
.myCards .cardA10{background-position: -359 -171;}
.myCards .cardA11{background-position: -399 -171;}
.myCards .cardA12{background-position: -439 -171;}
.myCards .cardA13{background-position: -479 -171;}
.myCards .cardB1{background-position: 1 -114;}
.myCards .cardB2{background-position: -39 -114;}
.myCards .cardB3{background-position: -79 -114;}
.myCards .cardB4{background-position: -119 -114;}
.myCards .cardB5{background-position: -159 -114;}
.myCards .cardB6{background-position: -199 -114;}
.myCards .cardB7{background-position: -239 -114;}
.myCards .cardB8{background-position: -279 -114;}
.myCards .cardB9{background-position: -319 -114;}
.myCards .cardB10{background-position: -359 -114;}
.myCards .cardB11{background-position: -399 -114;}
.myCards .cardB12{background-position: -439 -114;}
.myCards .cardB13{background-position: -479 -114;}
.myCards .cardC1{background-position: 1 0;}
.myCards .cardC2{background-position: -39 0;}
.myCards .cardC3{background-position: -79 0;}
.myCards .cardC4{background-position: -119 0;}
.myCards .cardC5{background-position: -159 0;}
.myCards .cardC6{background-position: -199 0;}
.myCards .cardC7{background-position: -239 0;}
.myCards .cardC8{background-position: -279 0;}
.myCards .cardC9{background-position: -319 0;}
.myCards .cardC10{background-position: -359 0;}
.myCards .cardC11{background-position: -399 0;}
.myCards .cardC12{background-position: -439 0;}
.myCards .cardC13{background-position: -479 0;}
.myCards .cardD1{background-position: 1 -57;}
.myCards .cardD2{background-position: -39 -57;}
.myCards .cardD3{background-position: -79 -57;}
.myCards .cardD4{background-position: -119 -57;}
.myCards .cardD5{background-position: -159 -57;}
.myCards .cardD6{background-position: -199 -57;}
.myCards .cardD7{background-position: -239 -57;}
.myCards .cardD8{background-position: -279 -57;}
.myCards .cardD9{background-position: -319 -57;}
.myCards .cardD10{background-position: -359 -57;}
.myCards .cardD11{background-position: -399 -57;}
.myCards .cardD12{background-position: -439 -57;}
.myCards .cardD13{background-position: -479 -57;}

.myCards .card-flipped .front{z-index: 91;-webkit-transform: rotateY(180deg);}
.myCards .card-flipped .back{z-index: 92;-webkit-transform: rotateY(0deg);}

.myCards .card0{top:0;left:0;margin-left: -20px;}
.myCards .card1{top:0;left:50%;margin-left: -20px;}
.myCards .card2{top:0;left:100%;margin-left: -20px;}
.openCard .card0{top:0;left:0;}
.openCard .card1{top:0;left:25%;}
.openCard .card2{top:0;left:50%;}

.cardOver1{display: none;}
.cardOver2{right: 0;}
.cardOver3{right: 0;}
.cardOver4{right: 0;}
.cardOver5{right:0;}
.cardOver6{left:0;}
.cardOver7{left:0;}
.cardOver8{left:0;}
.cardOver9{left:0;}

/********************************* 鐗屽瀷   ***********************************************/
.winText{position: absolute;width: 82px;z-index: 93;}
.winType{background:url("http://goss.fexteam.com/files/d_10/images/game/cardType.png");background-size:68px 120px;width: 50px;height:20px;}
.winScore{position: absolute;top:-100;color:#ffd840 ;font-size: 17px;animation:coinUp 2s ;-webkit-animation:coinUp 2s ;opacity: 0;}
@keyframes coinUp {from {top:-20;opacity: 1;} to{top:-100;opacity: 0;}}
@-webkit-keyframes coinUp {from {top:-20;opacity: 1;} to{top:-100;opacity: 0;}}
.winType4{background-position: 0 0;}
.winType2{background-position: 0 -18;}
.winType6{background-position: 0 -36;}
.winType1{background-position: 0 -56;}
.winType5{background-position: 0 -80;width: 66px;}
.winType3{background-position: 0 -100;}
.member2 .winText{left:-80px; top: 50%;}
.member2 .winText .winType{float: right;}
.member2 .winText .winScore{right: 0;}
.member3 .winText{left:-80px; top: 50%;}
.member3 .winText .winType{float: right;}
.member3 .winText .winScore{right: 0;}
.member4 .winText{left:-80px; top: 50%;}
.member4 .winText .winType{float: right;}
.member4 .winText .winScore{right: 0;}
.member5 .winText{left:-80px; top: 50%;}
.member5 .winText .winType{float: right;}
.member5 .winText .winScore{right: 0;}
.member6 .winText{right:-80px; top: 50%;}
.member7 .winText{right:-80px; top: 50%;}
.member8 .winText{right:-80px; top: 50%;}
.member9 .winText{right:-80px; top: 50%;}


.invite{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;}
.invite .inviteBack{width: 100%;height:100%;background: #000;opacity:0.8;position: absolute;}
.invite .invite1{width: 80px;position: absolute; top:20px;right: 10px;}
.invite .inviteText{margin: 0 auto;margin-top:140px;width:80%;line-height: 40px;font-size: 18px;color: #fff;font-family: simHei;position: relative;}
.invite .inviteText .num{float: left;line-height:24px;height:24px;width:24px;text-align: center;border-radius:12px;background:#b42020;position: relative;margin: 8px 5px 0 0}
.invite .inviteText img{vertical-align: middle;height: 28px;margin:0 3px;}
.invite .inviteText .invite2{font-size:17px;color:#cdbc48; }


.playerPK{position: fixed;top:0;left:0;width:100%;height:100%;z-index: 999}
.playerPK .pkBack{opacity: 0.5;background: #000;position: absolute;top:0;left:0;width:100%;height:100%;}
.playerPK .pk1{position: fixed;top:35%;left:-60%;width:60%;height:130px;opacity: 0.8;}
.playerPK .pk2{position: fixed;top:40%;right:-60%;width:60%;height:130px;opacity: 0.8;}

.playerPK .quitBack{width: 58px;height: 88px;border-radius:4px;top:12px;left:8px;background:#000;opacity:0.45;display: none;}
.playerPK .pkPlayer{position: absolute;text-align: center;width: 74px;height: 110px;top: 10px;}
.playerPK .pk1 .pkPlayer{left: 32%;}
.playerPK .pk2 .pkPlayer{right: 32%;}
.playerPK .pkPlayer .background{width: 100%;height:100%;position: absolute;top:0;left:0;}
.playerPK .pkPlayer .title{color: #fff;font-size: 14px;text-align: center;line-height: 20px;position: relative;margin: 0 auto;margin-top: 15%;height: 20px;width: 58px;}
.playerPK .pkPlayer .score{color: #fff;font-size: 12px;text-align: center;line-height: 14px;position: absolute;background: #1f1732;width:66%;border-radius:7px;margin:0 auto;bottom: 12%;left:18%;}
.playerPK .pkPlayer .avatar{width: 66%;position: relative;border-radius:3px;}
.playerPK .pkE{width: 140px;position: absolute;top:45%;left: 50%;margin-left: -70px;}
.playerPK .pkV{width: 48px;position: absolute;top:44%;left: 42%;animation:moveV .5s ;-webkit-animation:moveV .5s ;}
.playerPK .pkS{width: 34px;position: absolute;top:46%;right: 42%;animation:moveS .5s ;-webkit-animation:moveS .5s ;}

@keyframes moveV{0%{left:15%;top:60%;;width:120px;} 50%{left:15%;top:60%;;width:120px;} 100%{left:42%;top:44%;width:48px;}}
@-webkit-keyframes moveV{0%{left:15%;top:60%;;width:120px;} 50%{left:15%;top:60%;;width:120px;} 100%{left:42%;top:44%;width:48px;}}
@keyframes moveS{0%{right:15%;top:20%;;width:120px;}50%{right:15%;top:20%;;width:120px;}100%{right:42%;top:46%;width:34px;}}
@-webkit-keyframes moveS{0% {right:20%;top:20%;;width:120px;}50% {right:20%;top:20%;;width:120px;}100%{right:42%;top:46%;width:34px;}}

.playerPK .pkLoser{width: 48px;position: absolute;}
.playerPK .pk1 .pkLoser{left: 38%;top:32%;animation:moveL .6s ;-webkit-animation:moveL .6s ;}
.playerPK .pk2 .pkLoser{right: 38%;top:32%;animation:moveR .6s ;-webkit-animation:moveR .6s ;}
@keyframes moveL{0%{left:21%;top:2%;;width:120px;} 90%{left:21%;top:2%;;width:120px;} 100%{left:38%;top:32%;width:48px;}}
@-webkit-keyframes moveL{0%{left:21%;top:2%;;width:120px;} 90%{left:21%;top:2%;;width:120px;} 100%{left:38%;top:32%;width:48px;}}
@keyframes moveR{0%{right:21%;top:2%;;width:120px;} 90%{right:21%;top:2%;;width:120px;} 100%{right:38%;top:32%;width:48px;}}
@-webkit-keyframes moveR{0%{right:21%;top:2%;;width:120px;} 90%{right:21%;top:2%;;width:120px;} 100%{right:38%;top:32%;width:48px;}}

.pkBackground{position: absolute;height:100%;left:0;top:0;width:100%;z-index: 91;}
.pkBackground .pkBackText{top: 55%;color: #5affc8;position: absolute;width: 100%;left: 0;text-align: center;font-family: simHei;}

.ranking{position: absolute;width: 200%;height:200%;top:0;left:0;z-index: 110;display: none;}
.ranking .roundEndShow{display: none;}
.ranking .rankBack{width: 100%;height:100%;background: #000;opacity:1.0}
.ranking .rankBack .bg{position: absolute;width: 100%;height:100%;background: #000;opacity:1.0}
.ranking .rankText{width: 100%;position: absolute;top:10%;left: 0;}
.ranking .rankText .title{width: 100%;}
.ranking .rankText .time{text-align: center;margin-top: 24px;margin-bottom: 20px;}
.ranking .rankText .time a{border-radius: 5vw;border: 2px solid #ce6eff;color:#f7d92b;padding: 1vw 4vw;width: 400px;font-size: 6vw;}
.ranking .rankText .scoresItem{width:129vw;margin:0 auto; margin-top: 4px;height:19vw;line-height:19vw;font-size:8vw;position: relative;background-color: #160f2b; }
.ranking .rankText .scoresItemWhite{color:#fff; }
.ranking .rankText .scoresItemWhite a{color:#fff; }
.ranking .rankText .scoresItemYellow{color:#f7d92b;}
.ranking .rankText .scoresItemYellow a{color:#f7d92b;}
.ranking .rankText .scoresItem .name{left: 16%;width: 52%;overflow: hidden;word-break:break-all;position: absolute;top:0;}
.ranking .rankText .scoresItem .currentScores{width:25%;text-align: left;position: absolute;right: 0;top:0;}
.ranking  .button{width:100%;position: absolute;bottom:8%; }
.ranking  .button img{width:33%;}


/*.message{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 110;}
.message .messageBack{width: 100%;height:100%;}
.message .textPart{width: 100%;position: absolute;left: 0;bottom:0;height:0; }
.message .textPart .head{width: 100%;}
.message .textPart .head img{width: 100%;height: 30px;}
.message .textPart .textItem{width: 80%;height: 40px;line-height: 40px;font-size: 14px;background: #150e2d;border-bottom:1px solid #322b4c;color:#bbb;padding:0 10%; }  */

.message .messageBack{width: 100%;height:100%;position: absolute;top:0;left:0;}
.message .textPartOuter{position: absolute;width: 34vh;height:40vh;bottom:7vh;right:2vh;padding: 1vh 1vh 1vh 1vh;border: 0.2vh solid #a684f2;background: #634fa6;border-radius: 1vh;}
.message .textPart{position: absolute;width: 34vh;height:40vh;bottom:8.5vh;right:3.2vh;overflow: hidden;}
.message .textPart .outline{position: absolute;background: #634fa6;opacity: 1;width: 98%;height:100%;border:0.2vh solid #a684f2;border-radius:10px;top:-0.5vh;left: .5%;}
.message .textPart .textList {border:1px solid #a684f2;position: relative;}
.message .textPart .textList .textItem{width: 90%;height: 6vh;line-height: 6vh;font-size: 2.1vh;background: #150e2d;border-bottom:1px solid #666;color:#fff;padding:0 5%;position: relative;font-family: simHei;}

.shop{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 110;}
.shop .shopBack{width: 100%;height:100%;background: #000;opacity:0.6;}
.shop .shopBody{width: 100%;position: absolute;bottom: 0;left:0;height: 0; }
.shop .shopBody .shopReturn{width: 15%;float: left;margin-top:6.3%;margin-left:5%;position: relative;}
.shop .shopBody .shopBuy{width: 34%;float: right;margin-top:8.3%;margin-right:33%;position: relative;}
.shop .shopBody .shopGoods{width: 34%;position: relative;padding: 3px;}
.shop .shopBody .shopGoods img{width: 100%;border-radius: 10px;}
.shop .shopBody .shopGoods .title{position: absolute;top: 3;font-size: 14px;left: 0;width: 100%;text-align: center;color: #fff;}
.shop .shopBody .shopGoods .price{position: absolute;bottom: 3;font-size: 20px;left: 0;width: 100%;text-align: center;color: #f1c818;line-height: 36px;}
.shop .shopBody .goodsBack{border:3px solid #fada23;padding: 0;border-radius: 14px;}
.shop .shopBody .goodsBack .title{top: 0;}
.shop .shopBody .goodsBack .price{bottom: 0;}
.shop .shopBody .goodsBack .background{position: absolute;top:0;left: 0;width:100%;height:100%;background:#fada23;opacity:.15; }
.shop .shopBody .shopGoods1{margin-top:39%;margin-left: 11.2%;float: left;}
.shop .shopBody .shopGoods2{margin-top:39%;margin-right: 11.2%;float: right;}
.shop .shopBody .shopGoods3{margin-top:7.2%;margin-left: 11.2%;float: left;}
.shop .shopBody .shopGoods4{margin-top:7.2%;margin-right: 11.2%;float: right;}
.shop .shopLoading{width: 100%;position: absolute;left: 0;top:0;height: 100%;z-index: 9;}

.createRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;}
.createRoom .createRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
.createRoom .mainPart{width: 300px;height:410px;top:44%;left:50%;margin-top:-165px;margin-left: -150px;position: absolute;}
.createRoom .mainPart .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }
.createRoom .mainPart .createTitle{position:relative;height:36px;text-align: center;}
.createRoom .mainPart .createTitle img{position:relative;height:20px;margin-top: 8px;}
.createRoom .mainPart .cancelCreate{width: 36px;height:36px;top:-16px;right:-16px;position: absolute;}
.createRoom .mainPart .createCommit{position: absolute;line-height: 40px;height: 38px;font-size: 18px;width: 118px;left:50%;margin-left:-59px;bottom:-48px;text-align: center;background:url("http://goss.fexteam.com/files/d_10/images/game/button2.png");background-size:100%;color: #fff;}
.createRoom .mainPart .blueBack{width: 280px;height: 316px;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative; }
.createRoom .mainPart .blueBack .selectPart{width:100%;margin-top:4px;line-height:36px;font-size:14px;position: relative;color:#111431;background:#bbbff1;border-radius:0px;font-family:simHei; }
.createRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:55px;text-align: right; }
.createRoom .mainPart .blueBack .selectPart .selectList{float: left; width: 220px}
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:25px; }
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:14px;width:14px;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:9px;position: relative; }
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 20px;height:20px;left: 0;top:2px;}
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 5px;}


.audioRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;}
.audioRoom .audioRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
.audioRoom .mainPart{width: 38vh;height:27vh;top:44%;left:50%;margin-top:-16vh;margin-left: -19vh;position: absolute;}
.audioRoom .mainPart .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }
.audioRoom .mainPart .createTitle{position:relative;height:5vh;text-align: center;}
.audioRoom .mainPart .createTitle img{position:relative;height:2.6vh;margin-top: 1.2vh;}
.audioRoom .mainPart .cancelCreate{width: 5vh;height:5vh;top:-2.5vh;right:-2.5vh;position: absolute;}
.audioRoom .mainPart .createCommit{position: absolute;line-height: 5.5vh;height: 5.5vh;font-size: 2.5vh;width: 17vh;left:50%;margin-left:-8.5vh;bottom:-7vh;text-align: center;background:url("http://goss.fexteam.com/files/d_10/images/game/button2.png");background-size:100%;color: #fff;}
.audioRoom .mainPart .blueBack{width: 35vh;height: 14vh;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative; }
.audioRoom .mainPart .blueBack .selectPart{width:100%;margin-top:4px;line-height:36px;font-size:2.2vh;position: relative;color:#111431;background:#bbbff1;border-radius:0px;font-family:simHei; }
.audioRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:13vh;text-align: right; }
.audioRoom .mainPart .blueBack .selectPart .selectList{float: right; width: 20vh}
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:25px; }
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:2.2vh;width:2.2vh;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:0.7vh;position: relative; }
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 2.8vh;height:2.8vh;left: 0;top:0;}
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.8vh;}



body.modal-show {position: fixed;width: 100%;}
.record{position: fixed;top:0;left:0;height:100%;width:100%; z-index: 150;}
.record .recordBack{position: fixed;top:0;left:0;height:100%;width:100%;background: #0d0a12;opacity:.7;}
.record .leftLine{position: fixed;left: 0%;margin-left:20px;height:100%;width: 0;border-left:1px solid #ecb700;}
.record .mainPart{position: absolute;top:0;left:0;height:100%;width:100%;overflow: auto;}
.record .mainPart .recordList{position: relative;margin-left: 40px;margin-top: 20px;}
.record .mainPart .recordList .recordTime{color:#ecb700;font-size: 14px;}
.record .mainPart .recordList .yellowPoint{position: absolute;width:30px;height:30px;top:10px;left:-35px; }
.record .mainPart .recordList .yellowPoint .point{background:#ecb700;position: absolute;height:6px;width:6px;border-radius:3px;top:12px;left:12px; }

.record .mainPart .recordList .recordInfo{background:#cfced0;position: relative;width:80%;border-radius:6px;margin-top:5px;padding:5px 15px; }
.record .mainPart .recordList .recordInfo .recordItem{height:40px;font-family:simHei; border-top:1px solid #ababab;line-height: 40px;font-size: 16px;}
.record .mainPart .recordList .recordInfo .recordItem .name{float: left;height: 40px;width:120px;overflow: hidden;margin-left: 15px;}
.record .mainPart .recordList .recordInfo .recordItem .score{float: right;width:80px;overflow: hidden;right: 15px;}
.record .mainPart .recordList .recordInfo .borderNone{border: none;}</style>
  <style type="text/css">*{padding: 0;margin:0;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 微软雅黑, Arial, sans-serif;cursor: default;}img{border: none;}


.alert{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;color: #fff;font-family: simHei;}
.alert .alertBack{width: 100%;height:100%;background: #000;opacity:0.8;position: absolute;}
.alert .mainPart{position: relative;top: 45%;left: 50%;margin-top:-19vh ;margin-left:-22.5vh ;width: 45vh;height:38vh; }
.alert .mainPart .id{position: absolute;top:-1.3vh;left:0;width:45vh;text-align: center;}
.alert .mainPart .id img{width: 36vh}
.alert .mainPart .id .text{margin-top: -4.5vh;color: #000;font-size: 2.5vh;}


.alert .mainPart .alertText{position: absolute;width:100%;line-height: 3.5vh;font-size: 2.5vh;width: 36vh;left:50%;margin-left:-18vh;top:5.6vh;text-align: center;}
.alert .mainPart .alertText .rull{background: #4e3e7c;width: 37.4vh;margin-left: -2vh;color: #d6bba7;font-size:2.4vh;padding: 1.5vh;margin-bottom: 1.5vh;text-align: left;}
.alert .mainPart .alertText .rull a{color: #d6bba7;font-size:2.2vh; }

.alert .mainPart .buttonMiddle{position: absolute;width:100%;height: 5.93vh;width: 18vh;left:50%;margin-left:-9vh;bottom:1.93vh;}
.alert .mainPart .buttonLeft{position: absolute;width:100%;height: 5.93vh;width: 18vh;left:3vh;bottom:1.93vh;}
.alert .mainPart .buttonRight{position: absolute;width:100%;height: 5.93vh;width: 18vh;right:3vh;bottom:1.93vh;}
.alert .mainPart .button img{width: 100%;height: 100%;}

.alert .mainPart .backImg{position: absolute;width:100%;height:100%;border-radius: 1.5vh;border:0.1vh solid #de51f1;top:0;left:0;background: #6d4ba8;}
.alert .mainPart .backImg .blackImg{position: absolute;width:40.6vh;height:25vh;border-radius: 1.5vh;border:0.1vh solid #ae71cb;top:2.2vh;left:2.2vh;background: #281d45;}




.noty{position: fixed;background-color: rgba(0,0,0,0.8);width: 100%;height: 7vh;overflow: hidden;z-index: 9998;top:0;left:0;}
.noty img{position: absolute;top: 1.5vh;left: 3vw;width: 4vh;height: 4vh;}
#marquee{position: fixed;top: 0;left: 12vw;background-color: rgba(0,0,0,0);width: 88vw;height: 7vh;line-height: 7vh;color: white;font-size: 14px;overflow: hidden;z-index: 9999;}




#validePhone .phoneMask{position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);}
#validePhone .phoneFrame{position: fixed;z-index: 99;width: 80vw;max-width: 80vw; top: 50%; left: 50%;-webkit-transform:translate(-50%,-60%); background-color: #fff; text-align: center; border-radius: 8px; overflow: hidden;opacity: 1; color: white;}
#validePhone .notyText{padding: 0vh;font-size: 3.5vw; line-height: 8vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;}
#validePhone .box{position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;}
#validePhone .box input{padding:0 12px 0 12px;position: absolute;top:  2.5vw;left: 4vw;width: 48vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;}
#validePhone .box #authcode{position: absolute;top:  2.5vw;right: 4vw; width: 22vw;height: 10vw;line-height: 10vw;background-color: rgb(211,211,211);font-size: 3.5vw;border-radius: 0.5vh;color: white;}
#validePhone .smspwd{position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;}
#validePhone .smspwd input{padding:0 12px 0 12px;position: absolute;top: 1vw;left: 4vw;width: 72vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;}
#validePhone .rest{height: 2.2vw;}
#validePhone .commitButton{position: relative; left: 4vw;width: 72vw;line-height: 10vw; font-size: 4vw;display: flex;border-radius: 2vw;}
#validePhone .commitButton .inner{display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;}



.disconnect{position: fixed;top:45%;left: 0;width: 100%;text-align: center;z-index: 101;}
.disconnect .background{width: 250px;height:27px;position: absolute;top:-2;left: 50%;margin-left: -125px;background: #000;opacity: .5;border-radius:15px;}
.disconnect a{font-size: 16px;color: #fff;padding: 5px 14px;position:relative;}



.audioRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;} 
.audioRoom .audioRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}  
.audioRoom .mainPart{width: 38vh;height:27vh;top:44%;left:50%;margin-top:-16vh;margin-left: -19vh;position: absolute;} 
.audioRoom .mainPart .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }  
.audioRoom .mainPart .createTitle{position:relative;height:5vh;text-align: center;} 
.audioRoom .mainPart .createTitle img{position:relative;height:2.6vh;margin-top: 1.2vh;}  
.audioRoom .mainPart .cancelCreate{width: 5vh;height:5vh;top:-2.5vh;right:-2.5vh;position: absolute;}  
.audioRoom .mainPart .createCommit{position: absolute;height: 5.93vh;width: 18vh;left:50%;margin-left:-9vh;bottom:-7.5vh;}  
.audioRoom .mainPart .createCommit img{width: 100%;height: 100%;}  


.audioRoom .mainPart .blueBack{width: 35vh;height: 14vh;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative; }
.audioRoom .mainPart .blueBack .selectPart{width:100%;margin-top:4px;font-size:2.2vh;position: relative;color:#111431;background:#bbbff1;border-radius:0px;font-family:simHei; height:4vh;line-height:4vh;padding:0.8vh 0;}
.audioRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:13vh;text-align: right; }
.audioRoom .mainPart .blueBack .selectPart .selectList{float: right; width: 20vh}
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:10px; }
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:2.2vh;width:2.2vh;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:0.7vh;position: relative; }
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 2.8vh;height:2.8vh;left: 0;top:0;}
.audioRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.8vh;}

/*
.activeButton{width: 100%;transition:width .1s,height .1s,left .1s,top .1s;position: absolute;top:0;left:0;width:100%;height: 100%;}  
.activeButton:active{width:86%;height: 86%;left: 7%;top:7%}*/
.activeButton{}  
.activeButton:active{}
.activeButton img{width: 100%;}
.activeButton .activeInnerText{position: absolute;top:0;left:0;width: 100%;height:100%;text-align: center;}



.watch{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 111;color: #fff;font-family: simHei;}
.watch .watchBack{width: 100%;height:100%;background: #000;opacity:0.5;position: absolute;}

.watch .mainPart{position: absolute;top: 42%;left: 50%;margin-left:-22.5vh ;width: 45vh;background:url("http://goss.fexteam.com/files/images/h5watch/back.png");background-size:100% 100%;border-radius: 1.5vh; height: 59vh;margin-top: -29.5vh}
.watch .mainPart .watchCancel{width: 5vh;height:5vh;top:-1.4vh;right:-1.5vh;position: absolute;}        
.watch .mainPart .watchTitle{width: 22vh;height:6.8vh;top:-1.4vh;left:11.5vh;position: absolute;}       
.watch .mainPart .playerList{position: absolute;line-height: 3.5vh;font-size: 2.5vh;width: 39vh;left:50%;margin-left:-20vh;top:6.6vh;background: #311d40;padding: 1vh .5vh;border-radius:1.5vh;height: 42vh;overflow: scroll;}
.watch .mainPart .playerItem{background:#725399;height: 6.55vh;margin-bottom: .5vh;border-radius: .5vh;position: relative; }
.watch .mainPart .playerItem .playerAvatar{position: absolute;width: 5vh;height: 5vh;border-radius: 2.5vh;border: .1vh solid yellow;left: 1.5vh;top: .78vh; }
.watch .mainPart .playerItem .playerName{position: absolute;    font-size: 2.4vh;line-height: 6.6vh;height: 6.6vh;max-width: 43vw;top: 0;left: 8vh;overflow: hidden;}
.watch .mainPart .playerItem .playerIcon{position: absolute;right: 3vh;width: 3vh;height: 3vh;top:1.78vh}

.watch .mainPart .buttonMiddle{position: absolute;width:100%;height: 5.6vh;width: 17.38vh;left:50%;margin-left:-8.69vh;left:50%;bottom:1.4vh;}
.watch .mainPart .buttonMiddle img{position: absolute;width:100%;height: 100%;top:0;left:0;}



</style>
  <style type="text/css">.alert{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;color: #fff;font-family: simHei;}
.alert .alertBack{width: 100%;height:100%;background: #000;opacity:0.8;position: absolute;}
.alert .mainPart{position: relative;top: 45%;left: 50%;margin-top:-19vh ;margin-left:-22.5vh ;width: 45vh;height:38vh; }
/*.alert .mainPart .backImg{position: relative;width:100%;height:100%;border-radius: 10px;}*/
.alert .mainPart .id{position: absolute;top:-1.3vh;left:0;width:45vh;text-align: center;}
.alert .mainPart .id img{width: 36vh}
.alert .mainPart .id .text{margin-top: -4.5vh;color: #000;font-size: 2.5vh;}


.alert .mainPart .alertText{position: absolute;width:100%;line-height: 3.5vh;font-size: 2.5vh;width: 36vh;left:50%;margin-left:-18vh;top:5.6vh;text-align: center;}
.alert .mainPart .alertText .rull{background: #4e3e7c;width: 37.4vh;margin-left: -2vh;color: #d6bba7;font-size:2.4vh;padding: 1.5vh;margin-bottom: 1.5vh;text-align: left;}
.alert .mainPart .alertText .rull a{color: #d6bba7;font-size:2.2vh; }
.alert .mainPart .buttonMiddle{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:50%;margin-left:-9vh;bottom:2.2vh;text-align: center;background:url("http://goss.fexteam.com/files/d_1/images/game/button2.png");background-size:100%;}
.alert .mainPart .buttonLeft{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:3vh;bottom:2.2vh;text-align: center;background:url("http://goss.fexteam.com/files/d_1/images/game/button1.png");background-size:100%;}
.alert .mainPart .buttonRight{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;right:3vh;bottom:2.2vh;text-align: center;background:url("http://goss.fexteam.com/files/d_1/images/game/button2.png");background-size:100%;}
.alert .mainPart .backImg{position: absolute;width:100%;height:100%;border-radius: 1.5vh;border:0.1vh solid #de51f1;top:0;left:0;background: #6d4ba8;}
.alert .mainPart .backImg .blackImg{position: absolute;width:40.6vh;height:25vh;border-radius: 1.5vh;border:0.1vh solid #ae71cb;top:2.2vh;left:2.2vh;background: #281d45;}</style>
  <style type="text/css">.scoresArea{
    width: 99.0566px;
    height: 99.0566px;
    top: 191.038px;
    left: 0;
    right: 0;
    position: absolute;
    margin: auto;
}</style>
  <style type="text/css">.maik,.maiks{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}
.maik{
    z-index: 200;
}
.maiks{
    z-index: 200;
}
.load{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 201;
    background: rgba(255,255,255,0);
}
.load>img{
    width: 2.5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -0.35rem;
    margin-top: -0.35rem;
}
.prompt{
    position: fixed;
    top: 0;
    left: 0;
    background: #f2463a;
    font-size: 1rem;
    border-radius: 4px;
    overflow: hidden;
    z-index:9999999999;
}
.prompt>span{
    padding: .1rem .3rem;
    display: inline-block;
    color: #fff;
}

.niuniuselect{
    display: none;
}
.niuniuunselect{
    display: block;
}
.active .niuniuselect{
    display: block;
}
.active .niuniuunselect{
    display: none;
}

.selectItem img{
    display: none;
}
.selectItem.active img{
    display: block;
}
.selectPart:after{
    clear: both;
}
.cjfj-home-img11{display:none;}
</style>
  <style type="text/css">.createRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;}
.createRoom .createRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
.createRoom .mainPart{width: 90vw;height:65vh;top:44%;left:10vw;margin-top:-30vh;margin-left: -5vw;position: absolute;}
.createRoom .mainPart .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }
.createRoom .mainPart .createTitle{position:relative;height:5vh;text-align: center;}
.createRoom .mainPart .createTitle img{position:relative;height:2.6vh;margin-top: 1.2vh;}
.createRoom .mainPart .cancelCreate{width: 5vh;height:5vh;top:-2.5vh;right:-2.5vh;position: absolute;}
.createRoom .mainPart .createCommit{position: absolute;line-height: 5.5vh;height: 5.5vh;font-size: 2.5vh;width: 17vh;left:50%;margin-left:-8.5vh;bottom:-7vh;text-align: center;background:url("http://goss.fexteam.com/files/d_10/images/game/button2.png");background-size:100%;color: #fff;}
.createRoom .mainPart .blueBack{width: 85vw;height: 46vh;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative; }
.createRoom .mainPart .blueBack .selectPart{width:100%;margin-top:4px;line-height:36px;font-size:2vh;position: relative;color:#111431;background:#bbbff1;border-radius:0px;font-family:simHei; }
.createRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:8vh;text-align: right; }
.createRoom .mainPart .blueBack .selectPart .selectList{float: left; width: 34vh}
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:25px; }
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:2vh;width:2vh;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:0.7vh;position: relative; }
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 2vh;height:2vh;left: 0;top:0.7vh;}
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.8vh;}

.prompt{
    position: fixed;
    top: 0;
    left: 0;
    background: #f2463a;
    font-size: 1rem;
    border-radius: 4px;
    overflow: hidden;
    z-index:9999999999;
}
.prompt>span{
    padding: .1rem .3rem;
    display: inline-block;
    color: #fff;
}

.gold-tag a.active {
    color: #ecc200;
}

.gold-table {
    width: 100%;
}
.gold-table th,.gold-table td {
    color: #FFF;
    text-align: center;
    font-size: 12px;
    padding: 3px;
}
.gold-table th {
    color: #ecc200;
}

.gold-table td .btn1, .gold-table td .btn2 {
    display: inline-block;
    width: 30px;
    height: 20px;
    line-height: 20px;
    text-align: center;
}
.gold-table td .btn1 {
    background: url("/app/img/button1.png") no-repeat 0 0;
    background-size: 100% 100%;
}
.gold-table td .btn2 {
    background: url("/app/img/button2.png") no-repeat 0 0;
    background-size: 100% 100%;
}</style>
  <style>
  .mainPart{
    position: relative;
    height: auto;
  }
  .alert .mainPart .id{
    position: relative;
  }
.alert .mainPart .alertText{
  position: relative;
}

.alert .mainPart{
  height: auto;
}
.message .textPart{
   height: 40vh !important;
   overflow-y: auto !important;
  }
.member1 .avatar div{
      line-height: 52px !important;
}
 .lishijilu{
         position: relative;background:url(http://goss.fexteam.com/files/images/common/alert3.png) 0% 0% / 100% 100% no-repeat;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 15px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }
}
}
@media screen and (max-width: 320px) {
    .lishijilu{
         position: relative;background: #a2befc;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 12px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }

}

</style>

<script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
<script type="text/javascript">

var is_watch = false;
var glboldataxx=[];
// var mb;

function opnemm(html,id,clear){
    if(clear && glboldataxx[id+html]) {
        glboldataxx[id+html] = false;
    }
    if(!glboldataxx[id+html]){
        $.get('/portal/index/'+html+'/room/'+room,function(data){
            //mb=html;
            glboldataxx[id+html]=data;
            $('#'+id).html(data);
            $('#'+id).show();
        })
    }
    else{
        if(id!='message'){
            $('#'+id).html(glboldataxx[id+html]);
        }
        $('#'+id).show();
    }
}


function selectChange(type,id,index){
    glboldataxx[mb][type]=index;
    $('.'+type).find('img').hide();
    $('#'+id).find('img').show();
}

function selectChanges(type,id,index){
    glboldataxx[mb][type]=index;
    if($('#'+id).children('img').css('display') == 'block'){
         $('#'+id).children('img').hide();
    }else{
        $('#'+id).children('img').show();
    }
}
function zhengzkf(){
    alert('敬请期待');
}
function cancelCreate(){
    $('#room').hide();
}

// 选择房间
function selectBankerMode(index,id){
    glboldataxx[mb][index]=index;
    $(".bankerUnSelected").find('img').attr('src','./img/banker_unselected.png')
    $('.selectPart').eq(2).hide();
    $('.selectPart').eq(6).hide();
    $('.selectPart').eq(1).show();

    if(index == 1){
        $('#'+id).find('img').attr('src','./img/banker_selected.png')
    }
    if(index == 2){
        $('#'+id).find('img').attr('src','./img/banker_selected.png')
        $('.selectPart').eq(6).show();
    }
    if(index == 3){
        $('#'+id).find('img').attr('src','./img/banker_selected.png')
    }
    if(index == 4){
        $('#'+id).find('img').attr('src','./img/banker_selected.png')
    }
    if(index == 5){
        $('#'+id).find('img').attr('src','./img/banker_selected.png')
        $('.selectPart').eq(2).show();
        $('.selectPart').eq(1).hide();
    }
}


function shoujibd(){
    $('#validePhone').show();
}
function alertgl(){
    $('#valert').show();
}
function alertqx(){
    $('#valert').hide();
}
//功能管理  页面
function guanlign(){
    window.location.href='../gongnsm.html';
}


//个人中心    积分   
$(function(){

    $('.daoluan').on('click',function(){
            $('.gameListItem').css('z-index','99');
            $(this).siblings().css('z-index','9999');
    })

    $('.phoneMask').on('click',function(){
        $('#validePhone').hide();
    })

})
// 红包旋转功能
    function xuanzhuan(){
        
            $('.btnOpen').find('img').addClass('transf')
    
            setTimeout(function() {
                
            $('#ropen').show();

            }, 1000);
    }


// 公共弹框
function public(data){
    $('#'+data).hide();
}
// 快捷语音
function sendmsg(msg,id) {
   send('sendmsg',{msg:msg,id:id});
   $('#message').hide();
}
    


var ji;
function djs(sj){
   clearTimeout(ji);
     var now=sj-Math.ceil(new Date()/1000)-(0-timewc)-1;
     if(now>0){
    // if(now<=3){
    //   mp3play('mp3daojishi');
    // }
        ji=setTimeout('djs('+sj+')',1000);
        $('.clock').show();
        $('#divRobBankerText').show();
        $('#djs').text(now);
     }
     else{
        cleardjs();
     }
}
function cleardjs(){
    clearTimeout(ji);
    $('.clock').hide()
    $('#divRobBankerText').hide();
    $('.gongg').hide();

  $(".avatar").each(function () {
    $(this).find("img").eq(1).hide();
    $(this).find("div").eq(0).hide();
  });
      
}

</script>
  <script type="text/javascript">var base64EncodeChars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",base64DecodeChars=new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1);function base64encode(str){var out,i,len,c1,c2,c3;for(len=str.length,i=0,out="";i<len;){if(c1=255&str.charCodeAt(i++),i==len){out+=base64EncodeChars.charAt(c1>>2),out+=base64EncodeChars.charAt((3&c1)<<4),out+="==";break}if(c2=str.charCodeAt(i++),i==len){out+=base64EncodeChars.charAt(c1>>2),out+=base64EncodeChars.charAt((3&c1)<<4|(240&c2)>>4),out+=base64EncodeChars.charAt((15&c2)<<2),out+="=";break}c3=str.charCodeAt(i++),out+=base64EncodeChars.charAt(c1>>2),out+=base64EncodeChars.charAt((3&c1)<<4|(240&c2)>>4),out+=base64EncodeChars.charAt((15&c2)<<2|(192&c3)>>6),out+=base64EncodeChars.charAt(63&c3)}return out}function base64decode(str){var c1,c2,c3,c4,i,len,out;for(len=str.length,i=0,out="";i<len;){for(;c1=base64DecodeChars[255&str.charCodeAt(i++)],i<len&&-1==c1;);if(-1==c1)break;for(;c2=base64DecodeChars[255&str.charCodeAt(i++)],i<len&&-1==c2;);if(-1==c2)break;out+=String.fromCharCode(c1<<2|(48&c2)>>4);do{if(61==(c3=255&str.charCodeAt(i++)))return out;c3=base64DecodeChars[c3]}while(i<len&&-1==c3);if(-1==c3)break;out+=String.fromCharCode((15&c2)<<4|(60&c3)>>2);do{if(61==(c4=255&str.charCodeAt(i++)))return out;c4=base64DecodeChars[c4]}while(i<len&&-1==c4);if(-1==c4)break;out+=String.fromCharCode((3&c3)<<6|c4)}return out}function utf16to8(str){var out,i,len,c;for(out="",len=str.length,i=0;i<len;i++)1<=(c=str.charCodeAt(i))&&c<=127?out+=str.charAt(i):(2047<c?(out+=String.fromCharCode(224|c>>12&15),out+=String.fromCharCode(128|c>>6&63)):out+=String.fromCharCode(192|c>>6&31),out+=String.fromCharCode(128|c>>0&63));return out}function utf8to16(str){var out,i,len,c,char2,char3;for(out="",len=str.length,i=0;i<len;)switch((c=str.charCodeAt(i++))>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:out+=str.charAt(i-1);break;case 12:case 13:char2=str.charCodeAt(i++),out+=String.fromCharCode((31&c)<<6|63&char2);break;case 14:char2=str.charCodeAt(i++),char3=str.charCodeAt(i++),out+=String.fromCharCode((15&c)<<12|(63&char2)<<6|(63&char3)<<0)}return out}function CharToHex(str){var out,i,len,h;for(out="",len=str.length,i=0;i<len;)(h=str.charCodeAt(i++).toString(16)).length<2&&(h="0"+h),out+="\\x"+h+" ",0<i&&i%8==0&&(out+="\r\n");return out}function decode64(src){return utf8to16(base64decode(src))}</script>
  <script type="text/javascript">var cs=10,hosturl=window.location.hostname,websocket,token,room,index=0,allindex=[],timewc=0,bgmp3open,mp3open,overzt=1;bgmp3open=localStorage.bgmp3open?localStorage.bgmp3open:1,mp3open=localStorage.mp3open?localStorage.mp3open:1;var isinitok=0;function initok(){isinitok=1}function connect(n,iswatch){if(0==overzt)return load("hide"),!1;websocket&&websocket.close(),0<cs?(cs-=1,(websocket=new WebSocket("ws://"+hosturl+":"+n)).onmessage=function(event){cs=10,zdata=JSON.parse(event.data),console.log(zdata),window[zdata.act](zdata.msg)},websocket.onopen=function(e){load("hide"),token||(token=localStorage.token),send("init",{token:token,room:room})},websocket.onclose=function(e){if((isinitok=0)==overzt)return!1;load("show"),websocket.close(),cs-=1,connect(n)}):(load("hide"),setTimeout("$('body').hide()",3e3))}function gologin(){location.href="/"}function gxtoken(data){localStorage.token=data}function load(s){"show"==s&&$("body").append('<div class="load"><img src=data:image/gif;base64,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 /></div>'),"hide"==s&&$(".load").remove(),maik(s)}function maik(s){var html='<div class="maik" style=\'height:'+$(window).height()+"px;width:"+$(window).width()+"px;' onclick=\"Center($('.noticewi'), 'hide')\"></div>";"show"==s&&$(".maik").length<=0&&$("body").append(html),"hide"==s&&$(".maik").remove()}function Request(m){var sValue=location.search.match(new RegExp("[?&]"+m+"=([^&]*)(&?)","i"));return sValue?sValue[1]:sValue}function prompt(txt){var html='<div class="prompt"><span>'+txt+"</span></div>",Bw=$(window).width(),Bh=$(window).height();$("body").append(html);var Pw=$(".prompt").width(),Ph=$(".prompt").height();$(".prompt").css({top:Bh/2-Ph/2,left:Bw/2-Pw/2}),setTimeout(function(){$(".prompt").remove()},2e3)}function login(data){localStorage.userid=data.uid,localStorage.salt=data.salt}function loginout(msg){msg&&(prompt(msg),setTimeout("$('body').hide()",3e3)),localStorage.token="",websocket.close()}function send(act,data){if(1!=isinitok&&"init"!=act)return setTimeout(function(){send(act,data)},50);data||(data={});var fs=data;fs.act=act,fs.host=window.location.host;var jsonStr=JSON.stringify(fs);if(void 0===websocket)return prompt("与服务器端口链接，请刷新重试"),!1;websocket.send(jsonStr)}function Title(title){document.title=title}function attr(data){$("#"+data.id).attr(data.wz,data.nr)}function html(data){"nickname"==data.id&&(data.html=data.html),console.log(data),$("#"+data.id).html(data.html)}function addid(data){$("#"+data.id).addClass(data.html),console.log("addid:"+$("#"+data.id).attr("class"))}function removeid(data){$("#"+data.id).removeClass(data.html),console.log("removeid:"+$("#"+data.id).attr("class"))}function value(data){$("#"+data.id).val(data.html)}function value2(data){$(""+data.id).val(""+data.html)}function append(data){$("#"+data.id).append(data.html)}function jsdata(data){eval(data)}function active(data){$("#"+data.id).addClass(data.html).siblings().removeClass(data.html)}function showid(data){$("#"+data.id).show()}function hideid(data){$("#"+data.id).hide()}function goroom(data){location.href="/room/"+data.room}function gxindex(data){index=data}function watchindex(data){var indexTest=(allindex=data).length<=0?0:allindex[0]}function timewcgx(data){timewc=Math.ceil(new Date/1e3)-data,setTimeout('send("timegx",{})',5e3)}function timeyc(data){send("timeyc",{time:data})}function ycxx(data){$("#user"+data.id+" .zmmyctime").html(data.time)}function WeChat(url,title,img,desc){$.get("/index.php/portal/index/getconfig/",{url:window.location.href},function(data){wx.config(data),wx.ready(function(){wx.onMenuShareTimeline({title:title,link:url,imgUrl:img,success:function(){},cancel:function(){}}),wx.onMenuShareAppMessage({title:title,desc:desc,link:url,imgUrl:img,type:"",dataUrl:"",success:function(){},cancel:function(){}}),wx.error(function(res){})})},"json")}var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";function encode64(input){input=strUnicode2Ansi(input);for(var chr1,chr2,enc1,enc2,enc3,output="",chr3="",enc4="",i=0;enc1=(chr1=input.charCodeAt(i++))>>2,enc2=(3&chr1)<<4|(chr2=input.charCodeAt(i++))>>4,enc3=(15&chr2)<<2|(chr3=input.charCodeAt(i++))>>6,enc4=63&chr3,isNaN(chr2)?enc3=enc4=64:isNaN(chr3)&&(enc4=64),output=output+keyStr.charAt(enc1)+keyStr.charAt(enc2)+keyStr.charAt(enc3)+keyStr.charAt(enc4),chr1=chr2=chr3="",enc1=enc2=enc3=enc4="",i<input.length;);return output}</script>
  <script type="text/javascript">

    function adduser(data){
        if(1!=isinitok)return setTimeout(function(){adduser(data)},50);

        if(typeof(data.user.id) == undefined || data.user.id == null || data.user.id == "" || data.user.id == "null"){
            return;
        }

        if($("#user" + data.user.id).length>0){
            $("#user" + data.user.id).remove();
        }

        var indexuser=data.user.index-index- -1;
        if(indexuser<=0){
            indexuser=indexuser-(-9);
        }
        console.log(index + " -- " + indexuser);
        if($('#user'+data.user.id+' .quitBack').length>0){
            $('#user'+data.user.id+' .quitBack').hide();

            if(data.user.is_watch){
                $("#user" + data.user.id + " .watchingText").show();
            } else {
                $("#user" + data.user.id + " .watchingText").hide();
            }
        }
        else{
            if("-1"==data.user.online)var onlinezt="display:block";else onlinezt="display:none";if(1==indexuser || is_watch)var actxx="onclick=\"send('zhunbei',{})\"";else actxx='style="display:none"';console.log(data.user);var html='<div class="member member'+indexuser+'" id="user'+data.user.id+'">';html+='<img src="/app/img/player.png" class="background" /> ',html+='<img src="/app/img/playerWin.png" class="background" style="display: none;" /> ',html+='<div class="title">'+data.user.nickname+"</div> ",html+='<div class="avatar">',html+='<img src="'+data.user.img+'" style="position: absolute; left: 25%; width: 100%; border-radius: 3px;" /> ',html+='<img src="/app/img/avatar_timer.jpg" style="position: absolute; left: 25%; width: 100%; border-radius: 3px; display: none;" /> ',html+='<div style="position: absolute; top: 0px; left: 25%; width: 100%; line-height: 42px; text-align: center; color: rgb(96, 38, 3); font-size: 20px; display: none;"> 0</div>',html+='</div> <div class="score">'+data.user.dqjf+"</div>",html+='<div class="quitBack" style="'+onlinezt+'"></div>',html+='<div class="isReady">',html+='<div class="unready" '+actxx+' style="display: none;">',html+='<img src="http://33uuK.helphand.cn/img/jhzb.png" style="width: 90%;" />',html+='<div class="innerText" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;line-height: 9vw;font-size: 4.5vw;text-align: center;color:#fff;font-weight: bold;"></div>',html+="</div>",html+='<img src="/app/img/ready.png" class="ready" style="display: none;" />',html+="</div>",1!=indexuser&&(html+='<div class="cardOver cardOver'+indexuser+'" style="display: none;">',html+='<img src="/app/img/cardBox.png" class="cardResult" />',html+='<div class="name">'+data.user.nickname+"</div> ",html+='<div class="openCard">',html+='<div class="cards card0">',html+='<div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div>",html+=' <div class="cards card1">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+=' <div class="cards card2">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+="</div>",html+='<div class="winText" style="display: none;">',html+=' <div class="winType winType0"></div> ',html+=' <div class="winScore winType0">',html+="  +</div></div></div>"),html+='<div class="PKbox" style="display: none;">',html+='<div class="PKboxBack"></div>',html+="</div>",html+='<img class="watchingText" src="http://goss.fexteam.com/files/images/h5watch/watching.png" style="position: absolute; z-index: 999999999; left: 12%; width: 80%; margin-top: 20%; display: none;"></div>',$("#member").append(html);


            1==data.user.zt&&0==data.zt?$(".member"+indexuser+" .ready").show():0==data.user.zt&&0==data.zt&&1==indexuser&&$(".member"+indexuser+" .unready").show(),1==data.user.tpzt&&havelook(data.user),2==data.user.zt&&havelose(data.user),3==data.user.zt&&havequit(data.user);



            if(data.user.is_watch){
                $("#user" + data.user.id + " .watchingText").show();
            }
            
            if(indexuser == 1 && is_watch){
              $("#user" + data.user.id + " .unready").hide();


              $("#user" + data.user.id + " .winType").css("top", "-10px");
              $("#user" + data.user.id + " .winType").css("left", "30px");

              $("#user" + data.user.id + " .winScore").css("top", "-20px");
            }

            if(data.user.zt == 1){
              $("#user" + data.user.id + " .isReady").show();
              $("#user" + data.user.id + " .unready").hide();
              $("#user" + data.user.id + " .ready").show();
            }

        }
    }



    function zbuser(data){var indexuser=data-index- -1;indexuser<=0&&(indexuser-=-9),$(".member"+indexuser+" .unready").hide(),$(".member"+indexuser+" .isReady").show(),$(".member"+indexuser+" .ready").show()}function removeuser(data){$("#user"+data+" .quitBack").show(),$("#user"+data+" .ready").hide()}function removeuser2(data){$("#user"+data).remove()}function userdjs(data){clearTimeout(ji);var now=data.time-Math.ceil(new Date/1e3)-(0-timewc)-1;if(0<now){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9),$(".member"+indexuser+" .avatar img").eq(1).show(),$(".member"+indexuser+" .avatar div").html(now),$(".member"+indexuser+" .avatar div").show(),ji=setTimeout("userdjs("+JSON.stringify(data)+")",1e3)}else clearuserdjs()}function clearuserdjs(){clearTimeout(ji),$(".avatar").each(function(){$(this).find("img").eq(1).hide()}),$(".avatar div").hide()}

    function allfapai(data){$(".ready").hide(),$(".isReady").hide();for(var i=0;i<data.user.length;i++){var user=data.user[i],indexuser=user.index-index- -1,html="";for(indexuser<=0&&(indexuser-=-9),j=1;j<4;j++)html=data.card?6<=indexuser?html+'<div class="card cardall card'+indexuser+j+" card"+data.card[user.id][j-1].card+" zhajinhua-index"+(4-j)+'"  style="display:none" ></div>':html+'<div class="card cardall card'+indexuser+j+" card"+data.card[user.id][j-1].card+" zhajinhua-index"+j+'"  style="display:none" ></div>':html+'<div class="card card'+indexuser+j+"  zhajinhua-index"+j+'"  style="display:none" ></div>';$("#userfp").append(html)}setTimeout(function(){$("#userfp .zhajinhua-index1").show()},1e3),setTimeout(function(){$("#userfp .zhajinhua-index2").show()},800),setTimeout(function(){$("#userfp .zhajinhua-index3").show()},600),setTimeout(function(){$(".place").show(),$(".scoresArea").show(),$(".myCards").show()},1e3)}

    function havelook(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var html='<div class="isSeen isSeen'+indexuser+'" style="z-index: 100;"></div> ';$("#userfp").append(html)}function havelose(data){var indexuser=data.index-index- -1;if(indexuser<=0&&(indexuser-=-9),1==indexuser){hidebook(),$("#member .member1 .quitBack").show(),$(".myCards .isLose").show(),$(".myQuitBack").show();for(var i=0;i<3;i++)$(".cardDeal .card1"+(i- -1)).hide(),$(".myCards .card"+i).show()}else{var html='<div class="isLose isLose'+indexuser+'" style="z-index: 100;" ></div> ';$("#userfp").append(html)}}function havequit(data){var indexuser=data.index-index- -1;if(indexuser<=0&&(indexuser-=-9),1==indexuser){hidebook(),$("#member .member1 .quitBack").show(),$(".myCards .isQuit").show(),$(".myQuitBack").show();for(var i=0;i<3;i++)$(".cardDeal .card1"+(i- -1)).hide(),$(".myCards .card"+i).show()}else{var html='<div class="isQuit isQuit'+indexuser+'"  style="z-index: 100;"></div> ';$("#userfp").append(html)}}function bipai(data){$('#Buttons').hide();if(data.user.length>1){$('.pkBackground').show();for(var i=0;i<data.user.length;i++){var user=data.user[i];var indexuser=user.index-index-(-1);if(indexuser<=0){indexuser=indexuser-(-9);}$(' #member .member'+indexuser+' .PKbox').show();$(' #member .member'+indexuser+' .PKbox').attr('onclick',"send('bipai',{uid:"+user.id+",time:"+data.time+"})");}}else{send('bipai',{uid:data['user']['0']['id'],time:data.time});}}function qxbp(){$(" #member .PKbox").attr("onclick",""),$("#Buttons").show(),$(".pkBackground").hide(),$(".PKbox").hide(),$(".playerPK").hide()}function startPk(data){mp3play("shandian"),$(".playerPK .pkLoser").hide(),$(".playerPK .pk1 .title").html(data.user[0].nickname),$(".playerPK .pk1 .avatar").attr("src",data.user[0].img),$(".playerPK .pk1 .score").html(data.user[0].dqjf),$(".playerPK .pk2 .title").html(data.user[1].nickname),$(".playerPK .pk2 .avatar").attr("src",data.user[1].img),$(".playerPK .pk2 .score").html(data.user[1].dqjf),$(".playerPK").show(),setTimeout(function(){data.user[0].index==data.lose?$(".playerPK .pk1 .pkLoser").show():$(".playerPK .pk2 .pkLoser").show(),havelose({index:data.lose})},1e3)}function fapai(data){for(var i=0;i<data.card.length;i++){var card=data.card[i];$(".myCards .card"+i+"  .back").removeClass("cardundefined").addClass("card"+card.card),showmycard(i)}}function otherpai(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9),$(".cardOver"+indexuser).show(),$("#member .member"+indexuser+" .openCard").show(),console.log(data.card);for(var i=0;i<data.card.length;i++){var card=data.card[i];$("#member .member"+indexuser+" .card"+i+"  .back").removeClass("cardundefined").addClass("card"+card.card),$("#member .member"+indexuser+" .card"+i).addClass("card-flipped")}}function showmycard(id){$(".cardDeal .card1"+(id- -1)).hide(),$(".myCards .card"+id).show(),$(".myCards .card"+id).addClass("card-flipped")}function showbook(){$("#looking").show(),$("#looking").attr("onclick",'send("looking",{})')}function hidebook(){$("#looking").hide(),$("#looking").attr("onclick","")}

  function scoresArea(data){$(".scoresArea").attr("style", "");var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var total=$(".totalScore .scores").html(),jf=$("#member .member"+indexuser+" .score").html();$("#member .member"+indexuser+" .score").html(jf-data.jf),$(".totalScore .scores").html(total-(0-data.jf)),$(".scoresArea").append("<div class='coin  coin"+indexuser+" coinType"+data.jf+" style='top:"+112*Math.random()+"px;left:"+112*Math.random()+"px;' ></div>"),$(".coin"+indexuser).animate({top:82*Math.random(),left:82*Math.random()},300),$(".coin").removeClass("coin"+indexuser)}function recm(data){for(var total=0,i=0;i<data.cm.length;i++)total-=0-data.cm[i],$(".scoresArea").append("<div class='coin  coinType"+data.cm[i]+"' style='top:"+112*Math.random()+"px;left:"+112*Math.random()+"px;' ></div>");$(".totalScore .scores").html(total)}

// 收筹码
function shou(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
         indexuser=indexuser-(-9);
    }

    $('.totalScore .scores').html(data.total);
    
    var total=$('.totalScore .scores').html();
    var jf=$('#member .member'+indexuser+' .score').html();
    $('#userfp').html('');

    if(indexuser==1){
      if(is_watch){

        $('.winScore').html('+'+total);
        $('.winScore').show();
        $('#member .member'+indexuser+' .background').eq(1).show();

        $('.cardOver'+indexuser+' .cardResult').attr('src','/app/img/cardBoxWin.png');
        $('.cardOver'+indexuser+' .winText').html('<div class="winType winType'+data.type+'"></div> <div class="winScore winType'+data.type+'">+'+total+'</div>');
        $('.cardOver'+indexuser+' .winText').show();
      } else {
        $('.myCards .winText').show();
        $('.winScore').html('+'+total);
        $('.winScore').show();
        $('#member .member'+indexuser+' .background').eq(1).show();
      }
    }
    else{
      $('.cardOver'+indexuser+' .cardResult').attr('src','/app/img/cardBoxWin.png');
      $('.cardOver'+indexuser+' .winText').html('<div class="winType winType'+data.type+'"></div> <div class="winScore winType'+data.type+'">+'+total+'</div>');
      $('.cardOver'+indexuser+' .winText').show();
    }

    $('#member .member'+indexuser+' .score').html(jf-(0-total));
    $('.totalScore .scores').html(0);


    var top =   ['78','46' ,'33' ,'20','7','7','20','33','46'];
    var right = ['0' ,'-75','-75','-75' ,'-50','0','0','0','0'];
    var left =  ['0' ,'0'  ,'0'  ,'0' ,'0','-50','-75','-75','-75'];


    $('.scoresArea').children().animate({
        left:50+'%',
        top:50+'%'
    },500);

    $('.scoresArea').animate({
        top: top[indexuser-1]+'%',
        right:right[indexuser-1]+'%',
        left:left[indexuser-1]+'%',
    },1000);

    setTimeout(function (){
        $(".scoresArea").empty();
    },800);
  if(indexuser==1){
    mp3play('winmp3');
  }
  else{
    // mp3play('losemp3');
  }
}



  function operationButton(data){"8"==data&&($(".isReady").show(),$(".member1 .unready").show()),$("#operationButton").html(""),$("#operationButton").html("")}

  function initroom(){$(".scoresArea").empty(),$(".scoresArea").attr("style",""),$(".openCard").hide(),$(".cardOver").hide(),$("#CardType").html(""),$(".winText").hide(),$(".cardResult").attr("src","/app/img/cardBox.png"),$("#member .member").each(function(){$(this).find(".background").eq(1).hide()}),$("#member .member1 .quitBack").hide();var html='<div class="winText" style="display: none;">';html+='<img src="/app/img/winner.png" /> ',html+='<div class="winScore" style="width: 100%; left: 0px; text-align: center; font-size: 16px; display: none;">',html+="+</div></div> ",html+='<div class="cards card0" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div class="cards card1" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div class="cards card2" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div style="width: 70px; height: 20px; position: absolute; top: 17px; left: 50%; margin-left: -40px; z-index: 95; text-align: center; color: rgb(255, 255, 255); font-size: 15px; padding: 1px 5px; display: none;" id="looking">',html+='<img src="/app/img/lookcard.png" style="width: 70px; height: 20px;" />',html+="</div> ",html+='<div class="isQuit isQuit1" style="display: none;"></div> ',html+='<div class="isLose isLose1" style="display: none;"></div>',html+='<div class="isLose isLose1" style="display: none;"></div>',$(".myCards").html(html);html="";html+='<div class="cards card0">',html+='<div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div>",html+=' <div class="cards card1">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+=' <div class="cards card2">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",$("#member .openCard").html(html),$(".myCards").hide(),$(".place").hide(),$(".scoresArea").hide(),$("#totalScore").html(0),$(".member1 .unready").show();

      if(is_watch){
        $(".isReady").hide();
      } else {
        $(".isReady").show()
      }
}


  function overroom(data){overzt=0,$("#table").hide();var c=document.getElementById("myCanvas"),ctx=c.getContext("2d"),img=new Image,img1=new Image;new Image;img.src="/app/bgf9.png",img1.src="/app/dyj.png";var sj=data;img.onload=function(){console.log(sj),ctx.drawImage(img,0,0,800,1297),ctx.drawImage(img1,142,370,43,54);var time1=sj.time.substring(0,sj.time.length-3);ctx.font="22px bold songti",ctx.fillStyle="#ebd76e",ctx.fillText("房间号:"+sj.id,178,284),ctx.fillText(time1,361,284),ctx.fillText(sj.zjs+"局",575,284),ctx.font="31px bolder songti",ctx.fillStyle="black";var writeContent=fangzhu.skinname+"房主 ："+fangzhu.nickname,writeLeft=(c.width-ctx.measureText(writeContent).width)/2;ctx.fillText(writeContent,writeLeft,345);

    var i = 0;
    for(var tempIndex=0;tempIndex<sj.user.length;tempIndex++){

      if(sj.user[tempIndex] == null || typeof(sj.user[tempIndex].id) == undefined || sj.user[tempIndex].id == null){
        continue;
      }

      1<i&&(ctx.fillStyle="#140f2d",ctx.fillRect(142,505-(0-69*(i-2)),517,65));var user=sj.user[tempIndex];ctx.font="31px bolder songti",ctx.fillStyle="#d8cb66",ctx.fillText(user.nickname.substring(0,10),225,417+65*i),0<user.dqjf?user.dqjf="+"+user.dqjf:(ctx.fillStyle="#fff",ctx.fillText(user.nickname.substring(0,10),225,417+65*i),ctx.fillText(user.dqjf,530,417-(0-65*i))),ctx.fillText(user.dqjf,530,417-(0-65*i)); i++;}var dataURL=c.toDataURL();$("#overtime").html('<div onclick="location.href=\'/portal/user/index.html\'" style="z-index: 9999;position: absolute;width: 28%;height: 6%;bottom: 8%;right: 15%;" ></div><div style="background: #000;width: 100%;height: 100%;position: absolute;z-index: 200;""></div> <img src="'+dataURL+'" style="width: 100%;height:100%;position: absolute;z-index: 201;">'),$("#overtime").show()}}function msgshow(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var html='<div class="messageSay messageSay'+indexuser+'" ><div>'+data.msg+'</div> <div class="triangle"></div></div>';$("#messageSay").append(html),mp3play(data.mp3),setTimeout(function(){console.log(indexuser),$(".messageSay"+indexuser).remove()},1500)}function updatescore(data){$("#user"+data.id+" .score").html(data.score)}function joingame(){1!=isinitok&&joinroom(),removejoinalert(),send("joingame")}function joinwatch(){1!=isinitok&&joinroom(),removejoinalert(),send("joinwatch")}function watch(){$("#watch-game").show(); is_watch = true;}function tojoin(){$("#watch-list").hide(),$("#watch-game").hide()}function watchlist(data){var html="";for(var k in data.data)html+='<div class="playerItem">\n                    <img src="'+data.data[k].img+'" class="playerAvatar" />\n                    <div class="playerName">'+data.data[k].nickname+'</div>\n                    <img src="/app/bscore/icon.png" class="playerIcon" />\n                </div>';$("#watch-list .playerList").html(html),1==data.is_start?($("#watch-list .joimwatch").hide(),$("#watch-list .joingame").hide()):1==data.is_watch?($("#watch-list .joimwatch").hide(),$("#watch-list .joingame").show()):0==data.is_watch&&($("#watch-list .joimwatch").show(),$("#watch-list .joingame").hide())}


// 从游戏中，切换为“观战中”
function removeuserByWatch(data) {
  $("#user" + data + " .watchingText").show();
  $("#user" + data + " .quitBack").hide();
  $("#user" + data + " .isReady").hide();
}

// 更新用户的信息
function userUpdate(data) {
  console.log(data);
  if(data.is_start == 0){
      $("#watch-list .joinwatch").show();
  } else {
      $("#watch-list .joinwatch").hide();
  }

  is_watch = data.is_watch;

  if(data.is_watch){ 
      $("#watch-list .joingame").show();
      $(".isReady").hide();
  }else{
      $("#watch-list .joingame").hide();
  }

}


</script>
  


  <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>

  <script>

      function randomString(len) {
          len = len || 32;
          var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';    /****默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1****/
          var maxPos = $chars.length;
          var pwd = '';
          for (i = 0; i < len; i++) {
              pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
          }
          return pwd;
      }

  var url =window.location.href+'&skin=<?php echo ($user["password"]); ?>';//用户要分享的网址
  var title  = '<?php echo ($room["roomid"]); ?>号九人金花房间';//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/erba.png';//分享的图片
  //var desc = '<?php if($room['gz2']): ?>牌型： <?php if(is_array($room['gz2'])): foreach($room['gz2'] as $key=>$one): echo ($one); endforeach; endif; endif; ?> <?php if($room['cm']): ?>筹码:<?php echo ($room['cm']); endif; if($room['sx']): ?>上限:<?php echo ($room['sx']); endif; ?> ';//分享的描述信息
  var desc = 'http://wdzq.gskyr.com/jf/fl9/'+randomString(12);
  WeChat(url,title,shareimg,desc);
</script>

 </head> 
 <body> 
      <img id="watch-game" src="http://goss.fexteam.com/files/images/h5watch/watchText.png" style="display: none; position: fixed; z-index: 90; width: 40%; left: 30%; top: 55%;">
     <div id="watch-list" class="watch" style="display: none;">
         <div class="watchBack"></div>
         <div class="mainPart">
             <img src="http://goss.fexteam.com/files/images/h5watch/quit.png" class="watchCancel" onclick="public('watch-list')" />
             <img src="http://goss.fexteam.com/files/images/h5watch/title.png" class="watchTitle" />
             <div class="playerList">

             </div>
             <div class="buttonMiddle">
                 <img src="http://goss.fexteam.com/files/images/h5watch/watchTrue.png" class="watchTitle joimwatch" onclick="joinwatch()" style="display: none;" />
                 <img src="http://goss.fexteam.com/files/images/h5watch/joinWatchTrue.png" class="watchTitle joingame" onclick="joingame()" style="display: none;"/>
             </div>
         </div>
     </div>
 
     <img src="/app/bg1.png" style="display: none">
    <img src="/app/dyj.png" style="display: none">

     <div id="overtime" style="display: none">
    <canvas id="myCanvas" width="800" height="1297" style="display: none"></canvas>
    </div>

     <?php $fangzhu=M('user')->find($room['uid']); ?>
     <script type="text/javascript">
         window.fangzhu = {
             "nickname" : "<?php echo ($fangzhu["nickname"]); ?>",
             "skinname" : "<?php echo ($skin[$fangzhu['password']]); ?>"
         };
     </script>
<?php if($room['endtime'] > 0): $mapxx=array(); $mapxx['room']=$room['id']; if(M('user_room')->where($mapxx)->find()){ ?>
    <script type="text/javascript">
        var data={};
        data.id=<?php echo ($room['roomid']); ?>;
        data.zjs=<?php echo ($room['zjs']); ?>;
        data.time='<?php echo (date("Y-m-d H:i:s",$room['time'])); ?>';
        data.user=<?php echo ($room['overxx']); ?>;
        <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ if($value == null || $value[id] == null){ continue; } $nickname=base64_decode($value[nickname_base64]); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } ?>
        overroom(data);
    </script>

   <?php } else{ ?>
  <script type="text/javascript">
    document.title = '温馨提示';
  </script>
  <div id="valert2" class="alert">
   <div class="alertBack" style="opacity: 1;"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">房间已经关闭</div> 
     
     
   </div>
  </div>
  <?php } exit(); endif; ?>


<?php if($fzuser['sfgl'] && (!$mayuser[$user['id']])): ?><script type="text/javascript">
    document.title = '温馨提示';
  </script>
<div id="valert2" class="alert">
   <div class="alertBack" style="opacity: 1;"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">无法加入，请联系管理员。</div> 
     
     
   </div>
  </div>

  <?php exit(); endif; ?>

  <div class="roomCard">
   <img src="/app/img/roomCard.png" /> 
   <div class="num">
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: rgb(255, 255, 255); opacity: 0.2; border-radius: 10px;"></div> 
    <div style="position: relative; padding: 0px 10px 0px 35px;" id="fknum">
     <?php echo ($user['fk']); ?>张
    </div>
   </div>
  </div> 
  <div class="round" id="jsxx">
     <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?>局
  </div> 
  <img src="/app/img/home.png" class="return" style="right: 10px;" onclick="opnemm('fangjian_fanhuisy','tishi')" /> 
  <img src="/app/img/note4.png" class="return" style="right: 60px;" onclick="opnemm('fangjian_tishi','tishi')"/> 
  <img src="/app/img/footer_bull.png" usemap="#planetmap" class="bottom" style="pointer-events: none;"/> 
  <img src="/app/img/icon_game_rule.png" class="bottomGameRule" style="z-index: 110;" onclick="opnemm('fangjian_gz','vroomRule')"/> 
  <img src="/app/img/icon_sound61.png" class="bottomGameHistory" style="z-index: 110;"onclick="opnemm('fangjian_yinyue','vaudioRoom')" /> 
  <img src="/app/img/icon_game_message.png" class="bottomGameMessage" onclick="opnemm('fangjian_nobanker_kj','message')"/>
  <img src="/app/bscore/watchButton.png" class="bottomGameMessage" style="right: 70px;" onclick="showid({'id':'watch-list'})">

  <div id="messageSay">
</div>

<div class="playerPK" style="display: none;">
   <div class="pkBack"></div> 
   <div class="pk1" style="left: 0px;">
    <img src="/app/img/comLeft.png" style="position: absolute; top: 0px; left: 0px; width: 95%; height: 140px;" /> 
    <div class="pkPlayer">
     <img src="/app/img/player.png" class="background" style="display: none;" /> 
     <div class="title">
      --
     </div> 
     <img src="" class="avatar" /> 
     <div class="score">--
     </div> 
     <div class="quitBack" style="display: block;"></div>
    </div> 
    <img src="/app/img/comLoser.png" class="pkLoser" style="display: none;" />
   </div> 
   <div class="pk2" style="right: 0px;">
    <img src="/app/img/comRight.png" style="position: absolute; top: 0px; right: 0px; width: 95%; height: 140px;" /> 
    <div class="pkPlayer">
     <img src="/app/img/playerWin.png" class="background"  /> 
     <div class="title">
      　　　　　　
     </div> 
     <img src="" class="avatar" /> 
     <div class="score">
      --
     </div> 
     <div class="quitBack" style="display: none;"></div>
    </div> 
    <img src="/app/img/comLoser.png" class="pkLoser" style="display: none;" />
   </div> 
   <img src="/app/img/comE.gif" class="pkE" style="/* display: none; */" /> 
   <img src="/app/img/comV.png" class="pkV" style="/* display: none; */" /> 
   <img src="/app/img/comS.png" class="pkS" style="/* display: none; */" />
  </div>

  <div id="tishi" class="alert" style="display: none;"></div>   
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="display: none;"></div> 

  <div class="myCardType" id="CardType">
   <div style="display: none;">
    高牌
   </div> 
  <!--  <div style="display: none;">
    对子
   </div> 
   <div style="display: none;">
    顺子
   </div> 
   <div style="display: none;">
    同花
   </div> 
   <div style="display: none;">
    同花顺
   </div> 
   <div style="display: none;">
    三条
   </div> -->
  </div> 



  <div id="table" class="table" style="width: 100%; height: 100%;">
   <img src="/app/img/table91.jpg" class="tableBack" style="pointer-events: none;" />


   <div class="place" style="display: none; width: 99.0566px; height: 99.0566px; top: 191.038px;left: 0;
    right: 0;
    margin: auto;">
    <div class="totalScore">
     <div class="scores" id="totalScore">
      0
     </div> 
     <img src="/app/img/totalScore.png" />
    </div> 
   </div> 

   <div class="scoresArea"  style="display: none;"></div>
   <div class="cardDeal" >
    <div id='userfp'>
      <!--  <div class="card card11" ></div> 
       <div class="card card12" style="display: none;"></div> 
       <div class="card card13" style="display: none;"></div> 
       <div class="isSeen isSeen1" style="display: none;"></div> 
       <div class="isQuit isQuit1" style="display: none;"></div> 
       <div class="isLose isLose1" style="display: none;"></div> -->

    </div>
     
   
    <div class="myCards" style="display: none;"></div>
   </div> 

  <div id="member">
  </div>

   <div class="clock" style="display: none;" id='djs'>
     0
   </div>


    <div class="myButton"  id="Buttons">
  </div>



   <div class="pkBackground" style="display: none;"  onclick="qxbp();">
    <div class="pkBackText">
     选择比牌对象
    </div>
   </div>
  </div> 
 
  

 




 <script>
function replaceqs() {
location.href = location.href.split("#")[0].split("&r=")[0] + "&r=" + Math.random();
}
      function showjoinalert() {
         $("#valert").show();
     }
     function removejoinalert() {
         $("#valert").remove();
     }
    function joinroom(){
      //$("#valert").remove();
      token='<?php echo ($token); ?>';
      room='<?php echo ($room["id"]); ?>';
      var dkxx='<?php echo ($room["dk"]); ?>';
     load('show');
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    }
  </script>
<?php if(count($room['userlist']) >= 15 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 31%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style=" height: 59%;"></div>
    </div> 
    <div class="alertText" style="top: 35%;" id="tipmsg">房间人数已满</div> 
     <div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">
     返回首页
    </div>
     
   </div>
  </div>

  <?php exit(); endif; ?>

  <div id="valert" class="alert" style="display: none;">
   <div class="alertBack"></div> 

    <div style="position: absolute;right: 0.5vw;width: 20vw;height: 16.7vw;line-height: 8vw;color: white;text-align: center;font-size: 3.5vw;" v-if="alertType==4">
        <img src="/app/img/game/fw_icon.png" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;">
        <div style="position: absolute;width: 100%;height: 8vw;top: 1vw;font-size: 4.5vw;opacity: 0.5;" >
            未设置
        </div>
        <div style="position: absolute;width: 100%;height: 8vw;top: 6.5vw; font-size: 3.8vw;">
            防伪码
        </div>
    </div>

    <div class="mainPart" style="height: 344.73px; margin-top: -172.365px;">
        <div class="backImg">
            <div class="blackImg" style="height: 263.356px;"></div>
        </div> 

    <div class="id">
     <img src="/app/img/ID.png" /> 
     <div class="text">
       你的<?php echo ($skin[$fangzhu['password']]); ?>ID:<?php echo ($user["id"]); ?>
     </div>
    </div>
    <?php $count=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->count(); $count=$count+0; $max=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->order('jifen desc')->find(); ?> 
    <div class='lishijilu' style="">
    <div>历史最高分：<?php if($max): echo ($max["jifen"]); ?> (<?php echo (date("m-d H:i",$max["overtime"])); ?>)<?php else: ?>暂无游戏记录<?php endif; ?></div>  
    <div>游戏总局数：<?php echo ($count); ?></div> 
    </div>
    <div class="alertText" style="top: 1vh;">
     <div class="rull" style="font-size: 2.2vh;">
      
      <?php if($room['gz2']): ?>规则： 
      <a><?php if(is_array($room['gz2'])): foreach($room['gz2'] as $key=>$one): echo ($one); endforeach; endif; ?></a> 
      <br /><?php endif; ?> 
      

      <?php if($room['cm']): ?>筹码： 
      <a><?php echo ($room['cm']); ?></a> 
      <br /><?php endif; ?> 


      <?php if($room['sx']): ?>上限： 
      <a><?php echo ($room['sx']); ?></a> 
      <br /><?php endif; ?> 
            
       局数： 
      <a><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </a> 

     </div> 
     <div style="margin-bottom: 9.5vh;
    position: relative;">
      房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
     </div>
    </div> 
    
             <div class="button">
                 <div class="buttonLeft" onclick="joinwatch()">
                     <img src="http://goss.fexteam.com/files/images/h5watch/watchTrue.png">
                 </div>
                 <div class="buttonRight" onclick="joingame()">
                     <img src="http://goss.fexteam.com/files/images/h5watch/joinWatchTrue.png">
                 </div>
             </div>
  </div> 
</div>

<script>
  joinroom();
</script>

<audio onended="mp3playandpause('1miao');" id="1miao" src="/app/video/1miao.mp3"></audio>


<audio onended="mp3playandpause('message1');" id="message1" src="/app/message/message1.mp3"></audio>
<audio onended="mp3playandpause('message2');" id="message2" src="/app/message/message2.mp3"></audio>
<audio onended="mp3playandpause('message3');" id="message3" src="/app/message/message3.mp3"></audio>
<audio onended="mp3playandpause('message4');" id="message4" src="/app/message/message4.mp3"></audio>
<audio onended="mp3playandpause('message5');" id="message5" src="/app/message/message5.mp3"></audio>
<audio onended="mp3playandpause('message6');" id="message6" src="/app/message/message6.mp3"></audio>
<audio onended="mp3playandpause('message7');" id="message7" src="/app/message/message7.mp3"></audio>
<audio onended="mp3playandpause('message8');" id="message8" src="/app/message/message55.m4a"></audio>
<audio onended="mp3playandpause('message9');" id="message9" src="/app/message/message9.mp3"></audio>
<audio onended="mp3playandpause('message10');" id="message10" src="/app/message/message10.mp3"></audio>
<audio onended="mp3playandpause('message11');" id="message11" src="/app/message/message11.mp3"></audio>

<audio id="background" src="/app/video/back.mp3" ></audio>

<audio onended="mp3playandpause('2fen');" id="2fen" src="/app/video/2f.m4a"></audio>
<audio onended="mp3playandpause('4fen');" id="4fen" src="/app/video/4f.m4a"></audio>
<audio onended="mp3playandpause('5fen');" id="5fen" src="/app/video/5f.m4a"></audio>
<audio onended="mp3playandpause('8fen');" id="8fen" src="/app/video/8f.m4a"></audio>
<audio onended="mp3playandpause('10fen');" id="10fen" src="/app/video/10f.m4a"></audio>
<audio onended="mp3playandpause('16fen');" id="16fen" src="/app/video/16f.m4a"></audio>
<audio onended="mp3playandpause('20fen');" id="20fen" src="/app/video/20f.m4a"></audio>
<audio onended="mp3playandpause('40fen');" id="40fen" src="/app/video/40f.m4a"></audio>


<audio onended="mp3playandpause('kaipai');" id="kaipai" src="/app/video/audio2.m4a"></audio>

<audio onended="mp3playandpause('fapai');" id="fapai" src="/app/video/audio1.m4a"></audio>

<audio onended="mp3playandpause('shandian');" id="shandian" src="/app/video/com.m4a"></audio>

<audio onended="mp3playandpause('lookmp3');" id="lookmp3" src="/app/video/audio3.m4a"></audio>
<audio onended="mp3playandpause('menpai');" id="menpai" src="/app/video/audio4.m4a"></audio>

<audio onended="mp3playandpause('qipaimp3');" id="qipaimp3" src="/app/video/audio5.m4a "></audio>
<audio onended="mp3playandpause('losemp3');" id="losemp3" src=""></audio>
<audio onended="mp3playandpause('winmp3');" id="winmp3" src="/app/video/win.mp3"></audio>
<script>
function over(msg){
  var html='<div id="valert2" class="alert">';
  html=html+'<div class="alertBack"></div> '; 
  html=html+'<div class="mainPart" style="height: 31%;margin-top: -113.39px;">'; 
  html=html+'<div class="backImg">'; 
  html=html+'<div class="blackImg" style="height: 59%;"></div>'; 
  html=html+'</div> '; 
  html=html+'<div class="alertText" style="top: 35%;" id="tipmsg">'+msg+'</div>'; 
  html=html+'<div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">返回首页</div> </div></div>'; 
  $('body').html(html);
}
var overscroll = function(el) {
  el.addEventListener('touchstart', function() {
    var top = el.scrollTop
      , totalScroll = el.scrollHeight
      , currentScroll = top + el.offsetHeight;
    //If we're at the top or the bottom of the containers
    //scroll, push up or down one pixel.
    //
    //this prevents the scroll from "passing through" to
    //the body.
    if(top === 0) {
      el.scrollTop = 1;
    } else if(currentScroll === totalScroll) {
      el.scrollTop = top - 1;
    }
  });
  el.addEventListener('touchmove', function(evt) {
    //if the content is actually scrollable, i.e. the content is long enough
    //that scrolling can occur
    if(el.offsetHeight < el.scrollHeight)
      evt._isScroller = true;
  });
}
document.body.addEventListener('touchmove', function(evt) {
  //In this case, the default behavior is scrolling the body, which
  //would result in an overflow.  Since we don't want that, we preventDefault.
  if(!evt._isScroller) {
    evt.preventDefault();
  }
});


var context = new (window.AudioContext || window.webkitAudioContext)();
var source = [];
var audioBuffer = [];

    function mp3play(id){
      if(id == ""){
        return false;
      }
      if(id != "" && id!='background' &&　mp3open==2){
        return false;
      }
        //document.getElementById(id).play();
        if(!audioBuffer[id]){
           loadAudioFile(id);
        }
        if(source[id]){
          source[id].stop()
        }
        source[id] = context.createBufferSource();
        source[id].buffer = audioBuffer[id];
        if(id=='background'){
            source[id].loop = true;
        }
        else{
          source[id].loop = false;
        }
        source[id].connect(context.destination);
        source[id].start(0); //立即播放
    }
    function mp3pause(id){
        //document.getElementById(id).pause();
        if (source[id]) {
          source[id].stop(); //立即停止
        }
    }

    function mp3playandpause(id){
        mp3play(id);
        mp3pause(id);
    }


function initSound(arrayBuffer,id) {
    context.decodeAudioData(arrayBuffer, function(buffer) { //解码成功时的回调函数
        audioBuffer[id] = buffer;
    }, function(e) { //解码出错时的回调函数
        console.log('Error decoding file', e);
    });
}


function loadAudioFile(id) {
    var url=$('#'+id).attr('src');
    var xhr = new XMLHttpRequest(); //通过XHR下载音频文件
    xhr.open('GET', url, true);
    xhr.responseType = 'arraybuffer';
    xhr.onload = function(e) { //下载完成
        initSound(this.response,id);
    };
    xhr.send();
}


    function audioAutoPlay(id){
        loadAudioFile(id);
    }
    function muiscready(){
          audioAutoPlay('message1');
          audioAutoPlay('message2');
          audioAutoPlay('message3');
          audioAutoPlay('message4');
          audioAutoPlay('message5');
          audioAutoPlay('message6');
          audioAutoPlay('message7');
          audioAutoPlay('message8');
          audioAutoPlay('message9');
          audioAutoPlay('message10');
          audioAutoPlay('message11');
          audioAutoPlay('background');


          audioAutoPlay('2fen');
          audioAutoPlay('4fen');
          audioAutoPlay('5fen');
          audioAutoPlay('8fen');
          audioAutoPlay('10fen');
          audioAutoPlay('16fen');
          audioAutoPlay('20fen');
          audioAutoPlay('40fen');
          audioAutoPlay('kaipai');
          audioAutoPlay('fapai');
          audioAutoPlay('shandian');
          audioAutoPlay('lookmp3');
          audioAutoPlay('menpai');
          audioAutoPlay('qipaimp3');
          // audioAutoPlay('losemp3');
          audioAutoPlay('winmp3');

           if(bgmp3open==1){
          setTimeout(function(){
              mp3pause('background');
              mp3play('background');
          },2000)
          }
           if(bgmp3open==2){
               mp3pause('background');
            }

    }
function onBridgeReady(){
 WeixinJSBridge.invoke('getNetworkType',{},
    function(e){
        //WeixinJSBridge.log(e.err_msg);
         mp3play('1miao');  
      });
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}


muiscready();
</script>
 </body>
</html>