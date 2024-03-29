<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no" />
<meta name="msapplication-tap-highlight" content="no" />
<title>温馨提示</title>

	  <script src="/themes/game/Public/js/homepage/jq.js" type="text/javascript"></script>  
<script>
function tongyi(){
    $.post("/index.php/portal/index/tongyi",{},function(result){
         window.location.reload();
      },'json');
}
</script> 

<link rel="stylesheet" type="text/css" href="http://goss.fexteam.com/files/css/bullalert.css">
<link rel="stylesheet" type="text/css" href="http://goss.fexteam.com/files/d_30/css/common/alert.css">
<link rel="stylesheet" type="text/css" href="http://goss.fexteam.com/files/d_30/css/person/person1-1.0.0.css">
<script type="text/javascript">

	window.addEventListener('load', function() {
		FastClick.attach(document.body);
	}, false);

	var newNum = "";
	var per = window.innerWidth / 530;
	var globalData = {
		"baseUrl": 'http://wdql.dabingg.com/',
		"openId": '',
        "dealerNum": '',
	};

	
</script>

<style type="text/css">
	*{padding: 0;margin:0;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-backface-visibility: hidden;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 微软雅黑, Arial, sans-serif;cursor: default;}

</style>

</head>

<body >
	<div id="loading" style="position: fixed;width:100%;height:100%;top:0;left:0;background: #000" >
		<img src="http://goss.fexteam.com/files/images/loading.gif" style="top: 40%;position: absolute;left: 50%;margin-left: -45px;margin-top: -45px;" />
	</div>

	<div class="main" id="app-main"  v-cloak>
		<div class="background" style="background: url('http://goss.fexteam.com/files/images/prelogin/prelogin_bg.jpg')">
			<div class="black"></div>
		</div>
		<div class="alert" id="valert" v-show="isShowAlert">
			<div class="alertBack"></div>
			<div class="mainPart">
				<div class="backImg">
					<div class="blackImg"></div>
				</div>
				<div class="alertText">{{alertText}}</div>				
				<div v-show="alertType==3">
					<div class="buttonLeft" v-on:click="closeAlert">确定</div>
					<div class="buttonRight" v-on:click="closeAlert">取消</div>
				</div>			
				<div v-show="alertType==7">
					<div class="buttonMiddle" v-on:click="closeAlert">确定</div>
				</div>	
				<div v-show="alertType==8">
				</div>
				<div v-show="alertType==23">
					<div class="buttonMiddle" v-on:click="finishBindPhone()">确定</div>
				</div>
				<div v-show="alertType==24">
					<div class="buttonLeft" v-on:click="closeAlert">取消</div>
					<div class="buttonRight" v-on:click="confirmOpenGroup">确定</div>
				</div>
				<div v-show="alertType==25">
					<div class="buttonLeft" v-on:click="closeAlert">取消</div>
					<div class="buttonRight" v-on:click="confirmCloseGroup">确定</div>
				</div>
				<div v-show="alertType==30">
					<div class="buttonLeft" v-on:click="closeAlert">取消</div>
					<div class="buttonRight" v-on:click="confirmLogout">确定</div>
				</div>
				<div v-show="alertType==31">
					<div class="buttonLeft" v-on:click="closeAlert">取消</div>
					<div class="buttonRight" v-on:click="confirmChangeUser">确定</div>
				</div>
				<div v-show="alertType==32">
					<div class="buttonMiddle" v-on:click="finishLogout()">确定</div>
				</div>							
			</div>
		</div>

		<div class="alertB" v-show="isShowAlertB">
			<div class="alertBackgroundB"></div>
			<img src="http://goss.fexteam.com/files/images/center/alert1.png" v-show="alertTypeB==2">
			<img src="http://goss.fexteam.com/files/images/center/alert2.png" v-show="alertTypeB==1">
			<div class="alertTextB" >{{alertTextB}}</div>
		</div>


		<div id="validePhone"  v-show="loginView.show">
			<div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" ></div>
			<div class="phoneFrame" style="position: fixed;z-index: 99;width: 90vw;max-width: 90vw; top: 50%; left: 50%;-webkit-transform:translate(-50%,-60%); background-color: #fff; text-align: center; border-radius: 8px; opacity: 1; color: white;">
				<div style="height: 2.2vw;"></div>
				<div style="padding: 1vw;font-size: 5vw; height: 10vw;line-height: 10vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" >
					<div style="position: absolute;height: 10vw;width: 45vw;text-align: center;" v-if="loginView.type!=1" v-on:click="changeLoginType(1)">
						直接进入游戏
					</div>
					<div style="position: absolute;height: 10vw;width: 45vw;text-align: center;color: rgb(64, 112, 251);" v-if="loginView.type==1">
						直接进入游戏
					</div>
					<div style="position: absolute;left: 45vw;height: 10vw;width: 45vw;text-align: center;" v-if="loginView.type!=2&&loginView.type!=3" v-on:click="changeLoginType(2)">
						防伪登录
					</div>
					<div style="position: absolute;left: 45vw;height: 10vw;width: 45vw;text-align: center;color: rgb(64, 112, 251);" v-if="loginView.type==2||loginView.type==3">
						防伪登录
					</div>
					<div style="position: absolute;left: 45vw;background-color: lightgray;top: 0vw;height: 14vw;width: 1px;"></div>
				</div>
				<div style="width: 90vw;height: 3px;">
					<div style="position: absolute;height: 3px;width: 45vw;background-color: lightgray" v-if="loginView.type!=1"></div>
					<div style="position: absolute;height: 3px;width: 45vw;background-color: rgb(64, 112, 251)" v-if="loginView.type==1"></div>
					<div style="position: absolute;height: 3px;width: 45vw;left: 45vw;background-color: lightgray" v-if="loginView.type!=2&&loginView.type!=3"></div>
					<div style="position: absolute;height: 3px;width: 45vw;left: 45vw;background-color: rgb(64, 112, 251)" v-if="loginView.type==2||loginView.type==3"></div>
				</div>

				<div v-if="loginView.type==1">
					<div style="height: 8vw;"></div>
					<div style="height: 20vw;line-height: 25vw;color: black;">
						为了您的账号信息安全
					</div>
					<div style="height: 20vw;line-height: 2vw;color: black;">
						建议使用防伪登录
					</div>
					<div  style="position: relative; left: 9vw;width: 72vw;line-height: 11vw; font-size: 4vw;display: flex;border-radius: 2vw;" v-on:click="wechatLogin()"onclick="tongyi()">
						<div style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(99,172,71);border-radius: 1vw;">直接进入游戏</div>
					</div>
					<div  style="height:8vw;"></div>
				</div>

				<div v-if="loginView.type==2">
					<div  style="height: 2.2vw;" ></div>
					<div  style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
						<div style="position: absolute;height: 15vw;line-height: 15vw;width: 30vw;">
							账号：
						</div>
						<input   v-model="loginView.account" type="number" pattern="\d*" placeholder="输入用户ID/手机号" style="padding:0 12px 0 12px;position: absolute;top:  2.5vw;left: 20vw;width: 60vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: rgb(240,240,240);background-color: rgb(240,240,240);font-size: 4vw;-webkit-appearance: none;">
					</div>
					<div style="height: 4vw;line-height: 4vw;color: red;font-size: 3.5vw;text-align: left;margin-left: 20vw;" >
						{{loginView.accountError}}
					</div>

					<div style="position: relative;height: 13vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
						<div style="position: absolute;height: 15vw;line-height: 13vw;width: 30vw;">
							密钥：
						</div>
						<input  v-model="loginView.pwd" v-on:input="loginPwdChangeValue()" type="password"  placeholder="输入6-18位英文或数字密钥" style="padding:0 12px 0 12px;position: absolute;top: 1vw;left: 20vw;width: 60vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: rgb(240,240,240);background-color: rgb(240,240,240);font-size: 4vw;-webkit-appearance: none;">

					</div>
					<div style="height: 4vw;line-height: 4vw;color: red;font-size: 3.5vw;text-align: left;margin-left: 20vw;width: 62vw;" >
						{{appData.loginView.pwdError}}
					</div>

					<div  style="height: 10vw;">
						<div style="position: absolute;text-align: right;font-size: 3.5vw;right: 10vw;color: rgb(64,112,251);text-decoration:underline;" v-on:click="changeLoginType(3)">手机验证码登录</div>
					</div>
					<div  style="position: relative; left: 9vw;width: 72vw;line-height: 11vw; font-size: 4vw;display: flex;border-radius: 2vw;" v-on:click="accountLogin()">
						<div style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">确定</div>
					</div>
					<div  style="height:8vw;"></div>
				</div>

				<div v-if="loginView.type==3">
					<div  style="height: 2.2vw;" ></div>
					<div  style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
						<input  v-on:input="loginPhoneChangeValue()" v-model="loginView.phone" type="number" pattern="\d*" placeholder="输入11位手机号" style="padding:0 12px 0 12px;position: absolute;top:  2.5vw;left: 9vw;width: 48vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: rgb(240,240,240);background-color: rgb(240,240,240);font-size: 4vw;-webkit-appearance: none;">
						<div id="loginauthcode" v-on:click="getLoginAuthcode()" style="position: absolute;top:  2.5vw;right: 9vw; width: 22vw;height: 10vw;line-height: 10vw;background-color: rgb(211,211,211);font-size: 3.5vw;border-radius: 0.5vh;color: white;">
							{{loginView.authcodeText}}
						</div>
					</div>
					<div style="height: 4vw;line-height: 4vw;color: red;font-size: 3.5vw;text-align: left;margin-left: 10vw;" >
						{{loginView.phoneError}}
					</div>

					<div style="position: relative;height: 13vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
						<input  v-model="loginView.authcode" type="number" pattern="\d*" placeholder="输入4位验证码" style="padding:0 12px 0 12px;position: absolute;top: 1vw;left: 9vw;width: 72vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: rgb(240,240,240);background-color: rgb(240,240,240);font-size: 4vw;-webkit-appearance: none;">
					</div>
					<div style="height: 4vw;line-height: 4vw;color: red;font-size: 3.5vw;text-align: left;margin-left: 10vw;width: 62vw;" >
						{{loginView.authcodeError}}
					</div>

					<div  style="height: 10vw;">
						<div style="position: absolute;text-align: right;font-size: 3.5vw;right: 10vw;color: rgb(64,112,251);text-decoration:underline;" v-on:click="changeLoginType(2)">账密登录</div>
					</div>
					<div  style="position: relative; left: 9vw;width: 72vw;line-height: 11vw; font-size: 4vw;display: flex;border-radius: 2vw;" v-on:click="phoneLogin()">
						<div style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">确定</div>
					</div>
					<div  style="height:8vw;"></div>
				</div>
				
			</div>
		</div>

		<div id="validePhone" style="display: none;" v-show="isShowChangeUser">
			<div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" v-on:click="hideChangeUser"></div>
			<div class="phoneFrame" style="position: fixed;z-index: 99;width: 90vw;max-width: 90vw; top: 50%; left: 50%;-webkit-transform:translate(-50%,-60%); background-color: #fff; text-align: center; border-radius: 8px; opacity: 1; color: white;">
				<div style="height: 5vw;"></div>
				<div style="padding: 1vw;font-size: 5vw; line-height: 5vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" v-if="!loginView.show">
					切换账号
				</div>
				<div style="padding: 1vw;font-size: 5vw; line-height: 5vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" v-if="loginView.show">
					选择账号
				</div>
				<div style="height: 5vw;"></div>

				<div style="position: relative;left: 5vw;width: 80vw;height: 50vw;background-color: rgb(240,240,240);border-radius: 4px;overflow: scroll;">
					<div v-for="user in changeUsers" style="position: relative;width: 100%;height: 18vw;line-height: 18vw;font-size: 4vw;text-align: left;color: black;" v-on:click="selectChangeUser(user)">
						<img v-bind:src="user.headimgurl" style="position: absolute;left: 4vw;top: 3vw;width: 12vw;height: 12vw;border-radius: 2px;">
						<div style="position: absolute;left: 18vw;width: 50vw;height: 100%;color: black;overflow: hidden;">{{user.nickname}}(ID:{{user.account_code}})</div>
						<div style="position: absolute;bottom: 1px;background-color: lightgray;left: 4vw;width: 72vw;height: 1px;"></div>
						<img src="http://goss.fexteam.com/files/images/activity/common_checked.png" style="position: absolute;top: 50%;right: 5vw;width: 5vw;height: 5vw;margin-top: -2.5vw;" v-show="selectedUser&&selectedUser.account_code==user.account_code">
					</div>
				</div>

				<div style="height: 8vw;"></div>
				<div style="position: relative; left: 9vw;width: 72vw;line-height: 11vw; font-size: 4vw;display: flex;border-radius: 2vw;" v-on:click="clickChangeUser">
					<div style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">确认</div>
				</div>
				<div style="height:8vw;"></div>

				<div style="position: absolute;z-index: 99;width: 10vw;height: 10vw;top: -4%; left: 88%;" v-on:click="hideChangeUser">
					<img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: absolute;height: 100%;width: 100%;">
				</div>

			</div>
		</div>

	</div>

</body>


<script type="text/javascript" src="http://goss.fexteam.com/files/d_30/js/prelogin/prelogin-1.0.9.min.js"></script>

</html>