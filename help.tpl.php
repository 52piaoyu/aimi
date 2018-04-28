<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header');
?>
<title>帮助中心</title>
<div id="help" class="row">
	<div class="visible-lg-block"><img src="<?php echo SRC_TPL_DIR?>/img/help_banner.png" /></div>
</div>
<div id="help_main" class="row">
		<div class="col-md-6 col-xs-12">
			<div class="new_article_title">
				<h4>网站主</h4>
			</div>
			<ul>
					<?php 
					$article = dr ( 'index/article.get_type_article' ,"3",30);
					foreach((array)$article AS $a) {
					?>
		        <li>
		        	<i class="red_dotted"></i>
		        	<a href="<?php echo url("index.article?id=".$a["articleid"])?>"><?php echo $a["title"]?></a>
		        </li>
	       <?php }?>
			</ul>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="new_article_title">
				<h4>广告商</h4>
			</div>
			<ul>
					<?php 
					$article = dr ( 'index/article.get_type_article' ,"4",30);
					foreach((array)$article AS $a) {
					?>
			       <li>
			         <i class="red_dotted"></i>
			         <a href="<?php echo url("index.article?id=".$a["articleid"])?>"><?php echo $a["title"]?></a>
			       </li>
		      <?php }?>
			</ul>
		</div>
</div>
 <?php TPL::display('footer');?>
