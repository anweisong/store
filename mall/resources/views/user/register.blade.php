


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="renderer" content="webkit" />
<title>注册_华为帐号</title> <link href="https://hwid1.vmallres.com/CAS/up/rss_15/../common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon" /> 
<link href="/css/dialog.css" rel="stylesheet" type="text/css"> 
<link href="/css/common_2.css" rel="stylesheet" type="text/css"> 
<link href="/css/zh-cn_css.css" rel="stylesheet" type="text/css"> 
<!-- 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
-->
<script src="/js/jsapi.js" namespace="ec"></script>
<script src="/js/jquery-1.8.2.min.js" id=jsid></script>
<script src="/js/ec.core.js"></script>
<script src="/js/casui.js"></script>
<script src="/js/ec.business.js"></script> 
<script src="/js/commonjs.js"></script>
<script src="/js/casajaxobj.js"></script>
<script src="/js/reg_base.js"></script>
 

</head>

<body class="reg themeName-red" id="loginform">
		<!-- 头部  -->
<div class="head-background">
	<div class="head_center">
		
		     
			  	<div class="main-logo adHeadPicContainer" style="width:143px">
					<img src="/picture/head-top.png" class="wihteBgPic">
				</div>
				<div class="website-name"  style="color:#fff;">
					<b style="font-size: 18px;margin-top: -3px;float: left;color:#cccccc;">|</b>
					<b style="font-size: 18px;margin-top: -1px;float: left; margin-left:18px;color:#ffffff">华为商城</b>
				</div>
			
		
	</div>
</div>
	

	<div class="wp1 relative">
		<div class="register-content" id="registerForm">
			<div class="reg-tab clearFix" style="visibility: hidden;">
				
					<a class="phone-wrap l sel" href="javascript:void(0)"
						onclick="gotoRegisterByPhoneLink()"> <i class="phone-icon"></i>
						<span id="tabPhone" class="tab-phone">手机号</span>
					</a>
					<a class="mail-wrap l" href="javascript:void(0)"
						onclick="gotoRegisterByEmailLink()"> <i class="mail-icon"></i>
						<span id="tabMail" class="tab-email">电子邮箱</span>
					</a>
				
				
			</div>
			<div class="login r">
				已有华为帐号
				<a href="https://hwid1.vmall.com/CAS/remoteLogin?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F&lang=zh-cn&themeName=red" class="login-a"
					title="登录">登录</a><span class="ar-eg-opposite">&gt;</span>
			</div>
			<div class="reg-detail">
				<!-- 选择国家开始 -->

				<div class="input-container" id="chooseCountry">
					<div class="l input-left">
						国家
					</div>
					<div class="  input-right">
						&nbsp;&nbsp;中&nbsp;国
					</div>


					<!--
					<div class="input-content">

					 	<div class="node-input" id="selectCountryImg"></div>
						<div id="selectedCountry" style="display: none;"></div>

						提示正在登陆的帐号
						<div id="regXCountry" class="node-intro" style="display: none;">
							不同地区的华为帐号服务可能会有差异。
						</div> 
					</div>
					-->
				</div>



				<!--手机号码 -->

				<div class="input-container" id="phoneInputDiv-box">
					<div class="l input-left">
						<!-- <input id="countryCode" type="hidden" name="" autocomplete="off" >
						<div id="input_languageCode"></div> -->
						手机 
					</div>

					<div class="r input-right"></div>
					<div class="input-content">
						<input placeholder='请输入手机号' id="username" class="text" type="text"
							name="formBean.username" maxlength="50" tabindex="1" class=""
							autocomplete="off">
					</div>
				</div>
				<div id="msg_phone"></div>


				<div class="input-container" id="randomCodeDiv">
					<div class="l input-left">
						图形验证码
					</div>

					<div class="r input-right">

<!-- 这是验证码部分				<img style="height: 40px" src="picture/24bf0ec9b4f94a448171625d78038c3d.gif"
							id="randomCodeImg"
							alt="验证码"
							onclick="chgRandomCodeForReset();" onload="if(this.src.indexOf('loading.gif')==-1){this.style.width='100px'}" onerror="this.style.width='40px';this.src='https://hwid1.vmallres.com/CAS/up/rss_15/css/mobile/standard_rss/images/loading.gif?UP_CAS_2.5.4.303';"> <b id="authCodeRight"
							class="r" datavalue="false"></b> -->
					</div>
					<div class="input-content">
						<input placeholder='请输入验证码' id="randomCode" tabindex="2" class="text" type="text"
							name="formBean.randomCode" autocomplete="off">
					</div>

				</div>

				<div id="randomCode_msg"></div>


				<div class="input-container" id="errRandomCode-box">
					<div class="l input-left">
						短信验证码
					</div>
					<div class="r input-right">
						<input type="button" class="get-code dbtn2" autocomplete="off"
							id="getValiCode" IntervalTime="60"
							onclick="getMobileCode(4,'p_reg_phone_session_ramdom_code_key',26,'zh')"
							value="获取验证码" /> <span
							id="msg_getPhoneRandomCode"
							style="position: relative; top: 34px;"></span>
					</div>
					<div class="input-content">
						<input placeholder='请输入短信验证码' type="text" autocomplete="off"
							class="verify vam ime-disabled text" id="authCode" tabindex="3"
							style="vertical-align: middle;" name="formBean.authCode"
							maxlength="8" tabindex="3" />
					</div>
				</div>
				<div id="msg_phoneRandomCode"></div>



				<!-- 设置密码 -->
				<div class="set-password">
					<div class="input-container" id="pwdDiv">
						<div class="l input-left">
							密码
						</div>
						<div class="input-content">
							<input placeholder='请输入密码' type="password" autocomplete="off" class="pwd-input text"
								id="password" name="formBean.password" maxlength="32"
								tabindex="4" onkeyup="onPwdKeyUp(this)">
						</div>
					</div>
					<div id="msg_password"></div>
					<div id="pwd_check_dialog"></div>

					<div class="input-container " id="confirmpwdDiv">
						<div class="l input-left">
							确认密码
						</div>
						<div class="input-content">
							<input placeholder='请确认密码' id="confirmPwd" type="password" autocomplete="off"
								class="text vam" name="checkPassword" maxlength="32"
								tabindex="5">
						</div>
					</div>
					<div id="msg_checkPassword"></div>



				<!-- 出生日期 -->
				
				<!-- <div class="birthday_line"></div> -->

				<!-- 协议 -->

				
				
				
				<!-- 按钮 -->
				<div class="reg-btn" align="center">
					<input type="button" class="btn btn-reg sel" id="btnSubmit"
						value="注册" tabindex="7" />
					<div id="register_msg" style="position: relative; left: 26%;"></div>
				</div>
			</div>
		</div>
		<div class="box-shadow"></div>
		<input type="hidden" id="countryRegion" value="" />
		<div id="selectCountryCodeDiv"></div>
		<div id="notCurrentSiteWarning"></div>

		
			<!-- 底部  -->

<style>

.selectCountryImg {
    display: block;
    width: 30px;
    height: 30px;
    background: url("images/down.png") no-repeat;
    background-position-y: 12px;
     
}

</style>
<div class="wp1 ft">
	<div class="reg-content">
		<p class="footer">
				
					<a id="foot_EULA" href="https://hwid1.vmall.com/CAS/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china" class="rule" target="_blank">用户协议</a>
					<em class="foot_em">|</em>
					<a id="foot_privacy" href="https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?version=europe" class="rule" target="_blank">隐私政策</a>
				
				
				
				
				
				
				
			<a href="#" target="_blank"><em style='font-style: normal'>|</em> <a style="padding:0 10px;" target="blank" href="https://hwid1.vmall.com/CAS/portal/faq/faq.html">常见问题</a></a>
		</p>
		
		
			
			
				<p class="footer">Copyright © 2011-2017  华为软件技术有限公司  版权所有  保留一切权利  苏B2-20070200号 | 苏ICP备09062682号-9</p>	
			
			
			
		
		
		
		
		


	</div>
</div>

		

		<script src="/js/registerbyphone.js"></script>
		<script src="/js/swfobject.js"></script>
		<script src="/js/acctguard-secure.min.js"></script>
</body>
</html>
