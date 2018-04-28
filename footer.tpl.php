<?php if(!defined('IN_ZYADS')) exit(); ?>
<footer>
	<div id="footer_main_shild">
		<div id="footer" class="row">
			<div class="col-lg-3 clearfix visible-lg-block">
				<img src="<?php echo SRC_TPL_DIR?>/images/logo.png">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 clearfix"><!--col-md-offset-1 col-sm-offset-1-->
				<p>媒介合作</p>
				<ul>
					<li><a href="tencent://message/?uin=2881615004&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615004&version=1&src_type=web">悟空：<i></i>2881615004</a></li>
					<li><a href="tencent://message/?uin=2881615001&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615001&version=1&src_type=web">八戒：<i></i>2881615001</a></li>
					<li><a href="tencent://message/?uin=2881615013&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615013&version=1&src_type=web">悟净：<i></i>2881615013</a></li><!--
					<li><a href="tencent://message/?uin=3409155061&Site=POPO&Menu=yes">凯凯：<i></i>3409155061</a></li>
					<li><a href="tencent://message/?uin=1906780702&Site=POPO&Menu=yes">指尖：<i></i>1906780702</a></li>
					<li><a href="tencent://message/?uin=3454244726&Site=POPO&Menu=yes">提莫：<i></i>3454244726</a></li>
					<li><a href="tencent://message/?uin=3492914467&Site=POPO&Menu=yes">小钟：<i></i>3492914467</a></li>
					<li><a href="tencent://message/?uin=2725431255&Site=POPO&Menu=yes">小哲：<i></i>2725431255</a></li>
					<li><a href="tencent://message/?uin=3072386917&Site=POPO&Menu=yes">小刚：<i></i>3072386917</a></li>-->
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 clearfix"><!--col-md-offset-1 col-sm-offset-1-->
				<p>商务合作</p>
				<ul>
					<li><a href="tencent://message/?uin=2355657055&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615015&version=1&src_type=web">哪吒：<i></i>2881615015</a></li>
					<li><a href="tencent://message/?uin=2355657047&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615016&version=1&src_type=web">杨戬：<i></i>2881615016</a></li>
					<li><a href="tencent://message/?uin=2355657057&Site=POPO&Menu=yes" mob-data="mqq://im/chat?chat_type=wpa&uin=2881615017&version=1&src_type=web">雷震子：<i></i>2881615017</a></li>
					<!--<li><a href="tencent://message/?uin=2355657053&Site=POPO&Menu=yes">小胜：<i></i>2355657053</a></li>-->
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 clearfix">
				<p>投诉建议：service@aimilm.com</p>
				<img width="180" src="<?php echo SRC_TPL_DIR?>/img/qrcode.png">
			</div>
		</div>
	</div>
	<div id="copyright_shild">
		<div id="copyright">
			<p>Copyright ©<?php echo date("Y",TIMES)?> All Rights Reserved </p>
			<p>信息产业部备案号：赣ICP备16082908号-1</p>
			<p><a href=" "><img border="0" src="http://img.webscan.360.cn/status/pai/hash/594585ac31524a46595d60453b636e20"/></a></p>
		</div>
	</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo SRC_TPL_DIR?>/js/jquery.1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo SRC_TPL_DIR?>/js/bootstrap.min.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/js/main.js"></script>
<?php
	if(RUN_ACTION=='register') {
        echo '<script type="text/javascript" src="'.WEB_URL.'js/jquery/lib/jquery-validation/jquery.validate.js"></script><script type="text/javascript" src="'.WEB_URL.'js/jquery/lib/jquery-validation/additional-methods.js"></script><script src="'.SRC_TPL_DIR.'/js/register.js"></script>';    
    }	
?>


<script>
$("#header_nav > li").ScrollNav({
        scrollObj:"#header_nav > .scrollObj", //滑动的对象
        speed:"fast" //速度
      });
function $i(obj){
	return document.all ? document.all[obj] : document.getElementById(obj);
}
function doLogin(){
	var username = $i("username").value;
	var password = $i("password").value;
	if(username.length=='0'){
         alert('请输入你用户名');
         $i("username").focus()
         return false;
    }
    if(password.length=='0'){
         alert('请输入你的密码!');
         $i("password").focus()
         return false;
    }
	try{
		var checkcode = $i("checkcode").value;
		if(checkcode ==''){
			 alert('验证码不能为空');
			 $i("checkcode").focus()
			 return false;
		}
	}catch(e){}
}
</script>
