<?php if(!defined('IN_ZYADS')) exit();
TPL::display('header'); ?>
<title><?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>

<div id="banner_first" class="carousel slide white_slide" data-ride="carousel">
	<ol class="carousel-indicators hidden-xs">
		<li data-target="#banner_first" data-slide-to="0" class="active"></li>
		<li data-target="#banner_first" data-slide-to="1" class=""></li>
		<li data-target="#banner_first" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <div class="item active">
	  	<img src="<?php echo SRC_TPL_DIR?>/img/demo001.png" mob-data="<?php echo SRC_TPL_DIR?>/img/mob_demo001.jpg" >
	    <div class="carousel-caption"></div>
	  </div>
	  <div class="item">
	  	<img src="<?php echo SRC_TPL_DIR?>/img/demo002.png" mob-data="<?php echo SRC_TPL_DIR?>/img/mob_demo002.jpg" >
	    <div class="carousel-caption"></div>
	  </div>
	  <div class="item">
	  	<img src="<?php echo SRC_TPL_DIR?>/img/demo003.png" mob-data="<?php echo SRC_TPL_DIR?>/img/mob_demo003.jpg" >
	    <div class="carousel-caption"></div>
	  </div>
	</div>
	<a class="left carousel-control" href="#banner_first" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#banner_first" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
	<form id="form1" name="form1" method="post" action="<?php echo url("index.postlogin")?>" onSubmit="return doLogin()">
		<div class="indexloginbar clearfix">
		  <div class="login_tab">
		    <div class="tab-content">
		      <div role="tabpanel" class="tab-pane fade active in" id="login_ing" aria-labelledby="home-tab">
		      	<h4>用户登录</h4>
		        <div class="input-group login_input_group">
		          <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
		          <input id="username" name="username" type="text" class="form-control" placeholder="邮箱或用户名" aria-describedby="basic-addon1">
		        </div>
		        </br>
		        <div class="input-group login_input_group">
		          <span class="input-group-addon glyphicon glyphicon-link" id="basic-addon2"></span>
		          <input id="password" name="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon2">
		        </div>
		        </br>
		        <?php if ($GLOBALS ['C_ZYIIS']['login_check_code']=='1'){?>
			        <div class="input-group login_input_group identifying_code">
			          <span class="input-group-addon glyphicon glyphicon-flash"></span>
			          <input name="checkcode" id="checkcode" maxlength="4" type="text" style="width:180px;" class="form-control" placeholder="验证码">
			          <img class="index_code" src="<?php echo url("index.codeimage")?>" align="absmiddle"  title= "看不清?请点击刷新验证码"  onclick="this.src='<?php echo url("index.codeimage?rand=")?>'+Math.random();"  style= "cursor:pointer;"/>
			        </div>
		        <?php }?>
		        </br>
		        <button name="image3" class="btn btn-lg btn-block" type="submit">登录</button>
		        <p class="forget_code"><a href="<?php echo url("index.register")?>">立即注册</a><a href="<?php echo url("index.find_passwd")?>">忘记密码？</a></p>
		      </div>
		    </div>
		  </div>
		</div>
	</form>
</div>

<div id="index_main">
	<div id="main_1">
		<div><h2>合作流程</h2></div>
		<ul class="clearfix">
			<li><img src="<?php echo SRC_TPL_DIR?>/img/process1.png" /><div class="row"><p class="col-md-6 col-sm-6 col-xs-12">STEP1</p><p class="col-md-6 col-sm-6 col-xs-12">注册会员</p></div></li>
			<li><img src="<?php echo SRC_TPL_DIR?>/img/process2.png" /><div class="row"><p class="col-md-6 col-sm-6 col-xs-12">STEP2</p><p class="col-md-6 col-sm-6 col-xs-12">获取代码</p></div></li>
			<li><img src="<?php echo SRC_TPL_DIR?>/img/process3.png" /><div class="row"><p class="col-md-6 col-sm-6 col-xs-12">STEP3</p><p class="col-md-6 col-sm-6 col-xs-12">投放广告</p></div></li>
			<li><img src="<?php echo SRC_TPL_DIR?>/img/process4.png" /><div class="row"><p class="col-md-6 col-sm-6 col-xs-12">STEP4</p><p class="col-md-6 col-sm-6 col-xs-12">结算佣金</p></div></li>
		</ul>
	</div>
	<div id="main_2">
		<ul class="nav nav-tabs row" role="tablist">
		    <li role="presentation" class="col-md-6 col-sm-6 col-xs-6 active"><a href="#our_Ad" aria-controls="our_Ad" role="tab" data-toggle="tab">我们的广告</a></li>
		    <li role="presentation" class="col-md-6 col-sm-6 col-xs-6"><a href="#our_ad" aria-controls="our_ad" role="tab" data-toggle="tab">我们的优势</a></li>
	  	</ul>
	  	<div class="tab-content">
		    <div role="tabpanel" class="row tab-pane fade in active" id="our_Ad">
		    	<div class="our_Ad_lg visible-lg-block clearfix">
		    		
		    		<div class="col-md-6">
		    			<div id="main_ad_lg_slide" class="carousel slide" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						    	<img src="<?php echo SRC_TPL_DIR?>/img/ad_slide2.jpg">
						    </div>
						    <div class="item">
						    	<img src="<?php echo SRC_TPL_DIR?>/img/ad_slide1.jpg">
						    </div>
						    <div class="item">
						    	<img src="<?php echo SRC_TPL_DIR?>/img/ad_slide3.jpg">
						    </div>
						    <div class="item">
						    	<img src="<?php echo SRC_TPL_DIR?>/img/ad_slide4.jpg">
						    </div>
						  </div>
						  
						    <ul id="our_Ad_lg_caozuo" class="carousel-indicators">
							    <li data-target="#main_ad_lg_slide" data-slide-to="0" class="active">
							    	<i></i>
							    	<a>插屏广告</a>
							    	<div class="ppp" style="width:315px;top:45px;right:-208px;">
							    		<i class="ppp_arrow" style="left:20%;"></i>
							    		<div class="ppp_content">插屏广告是一种新兴的广告形式，一般在网页中间或全屏形式插入广告，插屏广告采用了自动广告适配和缓存优化技术，用户可自己定义“全屏展示”“半屏展示”，点击率较高。</div>
							    	</div>
							    </li>
							    <li data-target="#main_ad_lg_slide" data-slide-to="1">
							    	<i></i>
							    	<a>通栏广告</a>
							    	<div class="ppp" style="width:250px;top:45px;right:-157px;">
							    		<i class="ppp_arrow" style="left:20%;"></i>
							    		<div class="ppp_content">即横幅广告条，是在一个手机网站的顶部或是底部区域内固定展示广告，点击广告之后会有 跳转到手机网页、下载手机应用。</div>
							    	</div>
							    </li>
							    <li data-target="#main_ad_lg_slide" data-slide-to="2">
							    	<i></i>
							    	<a>弹窗广告</a>
							    	<div class="ppp" style="width:250px;top:45px;right:-157px;">
							    		<i class="ppp_arrow" style="left:20%;"></i>
							    		<div class="ppp_content">弹窗广告是指打开网站后自动弹出的广告， 弹窗广告是互联网上最古老也最常用的网络推广形式之一，广泛的应用于网站 、企业的产品快速推广和宣传。</div>
							    	</div>
							    </li>
							    <li data-target="#main_ad_lg_slide" data-slide-to="3">
							    	<i></i>
							    	<a>图文广告</a>
							    	<div class="ppp" style="width:255px;top:45px;right:-160px;">
							    		<i class="ppp_arrow" style="left:20%;"></i>
							    		<div class="ppp_content">图文混排是一种按文字和图片混排的广告形式，达到更好的展示效果。</div>
							    	</div>
							    </li>
						  	</ul>
						</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="our_Ad_lg_circle"></div>
		    		</div>
		    		
		    		
		    	</div>
		    	<div class="our_Ad_mob hidden-lg">
		    		<div class="clearfix">
		    			<div class="col-md-4 col-sm-4 col-xs-12"><img src="<?php echo SRC_TPL_DIR?>/img/ad_mob_slide.png" /></div>
		    			<div class="col-md-8 col-sm-8 col-xs-12">
		    				<ul>
		    					<li>
		    						<h3>插屏广告</h3>
		    						<p>插屏广告是一种新兴的广告形式，一般在网页中间或全屏形式插入广告，插屏广告采用了自动广告适配和缓存优化技术，用户可自己定义“全屏展示”“半屏展示”，点击率较高。</p>
		    					</li>
		    					<li>
		    						<h3>通栏广告</h3>
		    						<p>即横幅广告条，是在一个手机网站的顶部或是底部区域内固定展示广告，点击广告之后会有 跳转到手机网页、下载手机应用。</p>
		    					</li>
		    					<li>
		    						<h3>弹窗广告</h3>
		    						<p>弹窗广告是指打开网站后自动弹出的广告， 弹窗广告是互联网上最古老也最常用的网络推广形式之一，广泛的应用于网站 、企业的产品快速推广和宣传。</p>
		    					</li>
		    					<li>
		    						<h3>图文广告</h3>
		    						<p>图文混排是一种按文字和图片混排的广告形式，达到更好的展示效果。</p>
		    					</li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		    <div role="tabpanel" class="row tab-pane fade" id="our_ad">
		    	<div class="col-md-12 hidden-xs"><img src="<?php echo SRC_TPL_DIR?>/img/our_ad_lbanner.jpg" /></div>
		    	<div class="col-md-6 col-sm-12 col-xs-12">
		    		<ul>
		    			<li>
		    				<h3>丰富的资源</h3>
		    				<p>与众多渠道建立紧密合作关系拥有全覆盖的互联网广告流量资源！</p>
		    			</li>
		    			<li>
		    				<h3>强大的技术优势</h3>
		    				<p>业内资深专家及知名工程师组成的核心研发团队打造技术领先的互联网广告平台！</p>
		    			</li>
		    			<li>
		    				<h3>智能的数据分析</h3>
		    				<p>智能优化的广告效果数据分析洞悉实时投放效果及行业发展动向！</p>
		    			</li>
		    		</ul>
		    		<p class="visible-lg-inline-block visible-md-inline-block"><img src="<?php echo SRC_TPL_DIR?>/img/our_ad_2.jpg" /></p>
		    	</div>
		    	<div class="col-md-6 col-sm-12 col-xs-12">
		    		<p><img src="<?php echo SRC_TPL_DIR?>/img/our_ad_1.jpg" /></p>
		    		<ul>
		    			<li>
		    				<h3>超高的收益回报</h3>
		    				<p>覆盖各行业众多广告主精确定位精准投放高点击高单价超高收益回报</p>
		    			</li>
		    			<li>
		    				<h3>及时的付款周期</h3>
		    				<p>每周都会提取佣金向开发人员付款保证开发人员的收入能及时到账</p>
		    			</li>
		    			<li>
		    				<h3>贴心周到的服务</h3>
		    				<p>广告联盟为开发者提供贴心周到的服务保证客服人员的专业服务和响应及时！</p>
		    			</li>
		    		</ul>
		    	</div>
		    </div>
		</div>
	</div>
	<div id="main_3">
		<div class="main_3_title"><h2>艾米合作伙伴</h2></div>
		<div class="fs_Link">
		  <ul class="clearfix">
		  	<li><a target="_blank" href="http://auto.163.com"><img src="/templates/index/def/images/link_wyqc.png"></a></li>
		  	<li><a target="_blank" href="http://www.51bi.com"><img src="/templates/index/def/images/link_bg.png"></a></li>
		  	<li><a target="_blank" href="http://www.duomai.cn"><img src="/templates/index/def/images/link_dm.png"></a></li>
		    <li><a target="_blank" href="http://www.baidu.com"><img src="/templates/index/def/images/link_bd.png"></a></li>
		    <li><a target="_blank" href="http://www.infoo.com.cn"><img src="/templates/index/def/images/link_infoo.png"></a></li>
		  </ul>
		</div>
	</div>
</div>

<div>

<?php TPL::display('footer');?>
