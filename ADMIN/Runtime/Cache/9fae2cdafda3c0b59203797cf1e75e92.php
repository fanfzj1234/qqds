<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_member.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>

<script>
$(document).ready(function()
{
	$("#bc_information").click(function(){
		$("#main").load("__APP__/News/cyszx");
	});
	$("#club_activity").click(function(){
		$("#main").load("__APP__/Activity/sthd");
	});		
});
</script>
</head>
<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
 <div class="pagetit">
 <div class="ptit">个人用户管理</div>
  <div class="clear"></div>
</div> 
<div class="table">
  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan" style="font-size:14px">
    <tr>
     <td  align="center" width="5%" height="10px" class="admin_list_tit">UID</td>
     <td  align="center" width="10%" class="admin_list_tit">用户名</td>
     <td  align="center" width="15%" class="admin_list_tit">email</td>
     <td  align="center" width="15%" class="admin_list_tit">手机</td>
     <td  align="center" class="admin_list_tit">注册时间</td>
     <td  align="center" class="admin_list_tit">最后登录时间</td>
     <td  align="center" class="admin_list_tit">上次登录ip</td>
     <td  align="center" width="5%" class="admin_list_tit" >操作</td>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
           <td align="center" ><?php echo ($list["id"]); ?></td>
          <td align="center" ><?php echo ($list["username"]); ?></td>
          <td align="center" ><?php echo ($list["email"]); ?></td>
          <td align="center" ><?php echo ($list["phone"]); ?></td>
          <td align="center" ><?php echo ($list["register_time"]); ?></td>
          <td align="center" ><?php echo ($list["login_time"]); ?></td>
          <td align="center" ><?php echo ($list["loginip"]); ?></td>
          <td align="center" ><a href="main_user_look.php?Id=<?php echo $rs['Id'];?>"><strong style="color:#006">查看</strong></a></td>
      </tr><?php endforeach; endif; ?>
     </table>
    </div>  
      <div class="clear"></div>
      <div class="clear"></div>
	<table width="95%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
    
        <div class="page link_bk" style="margin-right:30px;" align="center">
   <span class="grayborder" style="background-color:#f6f6f6f6;"><?php echo ($page); ?></span>
    </div>
		</td>
        <td align="right">
        <div class="page link_bk" >
		<form id="formseh" name="formseh" method="post" action="__APP__/Member/member_cz">	
                <input type="text" name="ss" />
                <select name="xz">
                <option value="Id">UID</option>
                <option value="e_mail">E-mail</option>
                <option value="phone">手机</option>
                <option value="logn_ip">IP</option>
                </select>
				<input type="submit" name="sbt" class="sbt" id="sbt" value="搜索"/>
		  </form>
          </div>
	    </td>
      </tr></table>
  <div class="clear"></div>
   </div>