<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <meta name="description" content="">
        <meta name="author" content="">

<title>DZSW后台管理平台</title>
</head>
 <script type="text/javascript">
       var APP = "__APP__";
	   var IMG = "__IMG__";
</script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/login_admin.js"></script>
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
<script src="__JS__/jquery.scrollfollow.js" type="text/javascript"></script>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/supersized.3.2.7.min.js"></script>
<script src="__JS__/supersized-init.js"></script>
<script src="__JS__/jquery-1.8.2.min.js"></script>
<script src="__JS__/modernizr.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="__CSS__/reset.css">
<link rel="stylesheet" href="__CSS__/supersized.css">
<link rel='stylesheet' href='__CSS__/jquery-ui.css'>
<link rel='stylesheet prefetch' href='__CSS__/bootstrap.min.css'>
<link rel="stylesheet" href="__CSS__/style.css" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" href="__CSS__/admin_login.css"/>


<body class="login-page" >
 <div class="page-container">
     <div id="logo">DZSW</div>
    <div class="login-form">

		<div class="login-content">

			  <form action="__APP__/Login/do_login" method="post"  class="form-horizontal" name="user_login">

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>
                       
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-key"></i>
						</div>

						<input type="password" class="form-control" name="pwd" id="password" placeholder="Password" autocomplete="off" />
					</div>

				</div>
				<div class="form-group">

				<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-key"></i>
						</div>

						<input type="password" class="form-control" name="superpwd" id="superpwd" placeholder="SuperPassword" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">
					<!--<button type="submit" class="btn btn-primary btn-block btn-login" id="login-sub-btn">-->
					<button type="button" id="login-sub-btn" class="btn btn-primary btn-block btn-login">	
						<i class="fa fa-sign-in"></i>
						Login In
					</button>
				</div>
                <div class="form-group">
				      <p id="login_warning" style="color:#F00;"></p>
                </div>
                <div class="form-group">
				      <p>齐齐哈尔大学电子商务协会——技术部制作</p>
				      <p>©2014 DZSW CMS</p>
				     
                </div>
					
			</form>
          </div>	
			<div style="text-align:center;clear:both;"></div>

		</div>

	</div>           
    
</body>
</html>