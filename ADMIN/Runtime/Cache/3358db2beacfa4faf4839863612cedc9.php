<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>齐大电商后台管理CMS</title>

<link rel="stylesheet" href="__CSS__/admin_main.css" media="screen" type="text/css" />

<script src='__JS__/jquery.js'></script>
<script src="__JS__/admin_index.js"></script>
  
<!--<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>-->
<script>
	   var APP = "__APP__";
	   var IMG = "__IMG__";
$(document).ready(function()
{
	$(".admin_index").load(APP+"/Index/main");
	$("#index").click(function(){
		$(".admin_index").load(APP+"/Index/main");
	});			
	$("#member").click(function(){
		$(".admin_index").load(APP+"/Member/index");
	});
	$("#news").click(function(){
		$(".admin_index").load(APP+"/News/index");
	});
	$("#activity").click(function(){
		$(".admin_index").load(APP+"/Ds/index");
	});
	$("#admin").click(function(){
		$(".admin_index").load(APP+"/Admin/index");
	});
	$("#other").click(function(){
		$(".admin_index").load(APP+"/Qt/index");
	});
	
});
</script>
</head>

<body>

<span class='bckg'></span>
<header>
  <h1>
    齐大电商CMS
  </h1>
  <nav>
    <ul>
     <li>
        <a data-title='首页' id="index">首页</a>
      </li>
      <li>
        <a data-title='会员管理' id="member">会员管理</a>
      </li>
      <li>
        <a data-title='社团活动' id="activity">社团活动</a>
      </li>
      <li>
        <a data-title='新闻咨询' id="news">新闻咨询</a>
      </li>
      <li>
        <a data-title='管理员' id="admin">管理员</a>
      </li>
      <li>
        <a data-title='其他' id="other">其他</a>
      </li>
    </ul>
  </nav>
</header>

<main  class="admin_index">
  <div class='title'>
    <h2>首页</h2>
    <a href='#' title='Profil'>
      Hello <strong style="color:#F00"><?php echo $_SESSION['admin'];?></strong>
    </a>
  </div>
<article class='larg'>
   
</article>
</main>

</body>

</html>