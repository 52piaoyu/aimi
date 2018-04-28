<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header');
?>
<title><?php echo $article["title"]?></title>
<div id="help" class="row">
	<div class="visible-lg-block"><img src="<?php echo SRC_TPL_DIR?>/img/help_banner.png" /></div>
</div>
<div id="article_content" class="row">
		
		<div class="ac_title col-md-12 col-xs-12">
			<div class="new_article_title">
					<h4><?php echo $article["title"]?></h4>
			</div>
			<p>类型：<?php  foreach ($GLOBALS['article_type'] AS $key=>$val){ if($article['type'] == $key  ){echo $val;} }?> 时间：<?php echo $article["addtime"]?></p>
		</div>
		<div class="col-md-12 col-xs-12">
			<p><?php echo $article["content"]?></p>
		</div>
		<p class="back-history"><a href="javascript:history.go(-1);">>>返回上一层</a></p>
</div>

<!--公告循环开始-->


			<!--<?php 
				
			//如只要公告"1",多个用“,”分开 效果"1,2,3",后面为要显示条数
			$article = dr ( 'index/article.get_type_article' ,"1,3",12);
			foreach((array)$article AS $a) {
			?>
	      <tr>
	        <td width="15" height="30" class="red_dotted"></td>
	        <td><a href="<?php echo url("index.article?id=".$a["articleid"])?>"><?php echo $a["title"]?></a></td>
	        <td><?php echo date("m-d",strtotime($a['addtime']));?></td>
	      </tr>
      <?php }?>
      	
      	
      	<a href="<?php echo url("index.article_list")?>">更多...</a>
      	-->
<!--公告循环结束-->
 <?php TPL::display('footer');?>