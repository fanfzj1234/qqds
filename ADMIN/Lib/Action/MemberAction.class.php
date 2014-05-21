<?php
   class MemberAction extends CommonAction{
	   public function member(){
		   			$tzye='<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跳转请等待5s</title>
<style>
ul#loadbar {
    list-style: none;
    width: 160px;
    margin: 0 auto;
    padding-top: 50px;
    padding-bottom: 75px;
}
 
ul#loadbar li {
    float: left;
    position: relative;
    width: 11px;
    height: 26px;
    margin-left: 1px;
    border-left: 1px solid #111;
    border-top: 1px solid #111;
    border-right: 1px solid #333;
    border-bottom: 1px solid #333;
    background: #000;
}
 
ul#loadbar li:first-child {
    margin-left: 0;
}
.container {width: 1000px;margin-top:200px; margin-left:15%;overflow: hidden;}
.bar {
    background-color: #2187e7;
    background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    width: 11px;
    height: 26px;
    opacity: 0;
    -webkit-animation: fill .5s linear forwards;
    -moz-animation: fill .5s linear forwards;
}
 
#layerFill1 {
    -moz-animation-delay: 0.5s;
    -webkit-animation-delay: 0.5s;
}
 
#layerFill2 {
    -moz-animation-delay: 1s;
    -webkit-animation-delay: 1s;
}
 
#layerFill3 {
    -moz-animation-delay: 1.5s;
    -webkit-animation-delay: 1.5s;
}
 
#layerFill4 {
    -moz-animation-delay: 2s;
    -webkit-animation-delay: 2s;
}
 
#layerFill5 {
    -moz-animation-delay: 2.5s;
    -webkit-animation-delay: 2.5s;
}
 
#layerFill6 {
    -moz-animation-delay: 3s;
    -webkit-animation-delay: 3s;
}
 
#layerFill7 {
    -moz-animation-delay: 3.5s;
    -webkit-animation-delay: 3.5s;
}
 
#layerFill8 {
    -moz-animation-delay: 4s;
    -webkit-animation-delay: 4s;
}
 
#layerFill9 {
    -moz-animation-delay: 4.5s;
    -webkit-animation-delay: 4.5s;
}
 
#layerFill10 {
    -moz-animation-delay: 5s;
    -webkit-animation-delay: 5s;
}
 
@-moz-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}
 
@-webkit-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}


</style>
<body>
<div class="container">
	<ul id="loadbar">
    <li>
    <div id="layerFill1" class="bar"></div> <!-- 控制层和柱子  -->
    </li>
    <li>
    <div id="layerFill2" class="bar"></div>
    </li>
    <li>
    <div id="layerFill3" class="bar"></div>
    </li>
    <li>
    <div id="layerFill4" class="bar"></div>
    </li>
    <li>
    <div id="layerFill5" class="bar"></div>
    </li>
    <li>
    <div id="layerFill6" class="bar"></div>
    </li>
    <li>
    <div id="layerFill7" class="bar"></div>
    </li>
    <li>
    <div id="layerFill8" class="bar"></div>
    </li>
    <li>
    <div id="layerFill9" class="bar"></div>
    </li>
    <li>
    <div id="layerFill10" class="bar"></div>
    </li>
</ul>
<div id="rect" style="margin-left:25%;font-size:50px;"><strong>请先登录，页面跳转中...</strong></div>
</div>

</body>
</html>
';
	        if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',5,$tzye);
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];

		    $member = new Model("Member");                        //用户成员
            $col=25;#每页显示记录条数
            
            $page=0;
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $member->order('register_time')->limit($page*$col,$col)->select();
            $this->assign('list',$list);// 赋值数据集
            $count=$member->count();   
	        // 赋值分页输出
			$this->assign("count",$count); 
		    $this->display();  
		   }
		   
	   //翻页
		public function next_page(){
		    $page_id=$_POST["page_id"];
		   
		    $member = new Model("Member");     
            $col=25;#每页显示记录条数
            $page=$page_id;
			$ms=$member->order('register_time')->limit($page*$col,$col)->select();
			
			$result=$ms;
			
			$this->ajaxReturn($result,"查询成功！",1);
			}
			
		   
	   public function zhuce_xy(){
		   			$tzye='<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跳转请等待5s</title>
<style>
ul#loadbar {
    list-style: none;
    width: 160px;
    margin: 0 auto;
    padding-top: 50px;
    padding-bottom: 75px;
}
 
ul#loadbar li {
    float: left;
    position: relative;
    width: 11px;
    height: 26px;
    margin-left: 1px;
    border-left: 1px solid #111;
    border-top: 1px solid #111;
    border-right: 1px solid #333;
    border-bottom: 1px solid #333;
    background: #000;
}
 
ul#loadbar li:first-child {
    margin-left: 0;
}
.container {width: 1000px;margin-top:200px; margin-left:15%;overflow: hidden;}
.bar {
    background-color: #2187e7;
    background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    width: 11px;
    height: 26px;
    opacity: 0;
    -webkit-animation: fill .5s linear forwards;
    -moz-animation: fill .5s linear forwards;
}
 
#layerFill1 {
    -moz-animation-delay: 0.5s;
    -webkit-animation-delay: 0.5s;
}
 
#layerFill2 {
    -moz-animation-delay: 1s;
    -webkit-animation-delay: 1s;
}
 
#layerFill3 {
    -moz-animation-delay: 1.5s;
    -webkit-animation-delay: 1.5s;
}
 
#layerFill4 {
    -moz-animation-delay: 2s;
    -webkit-animation-delay: 2s;
}
 
#layerFill5 {
    -moz-animation-delay: 2.5s;
    -webkit-animation-delay: 2.5s;
}
 
#layerFill6 {
    -moz-animation-delay: 3s;
    -webkit-animation-delay: 3s;
}
 
#layerFill7 {
    -moz-animation-delay: 3.5s;
    -webkit-animation-delay: 3.5s;
}
 
#layerFill8 {
    -moz-animation-delay: 4s;
    -webkit-animation-delay: 4s;
}
 
#layerFill9 {
    -moz-animation-delay: 4.5s;
    -webkit-animation-delay: 4.5s;
}
 
#layerFill10 {
    -moz-animation-delay: 5s;
    -webkit-animation-delay: 5s;
}
 
@-moz-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}
 
@-webkit-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}


</style>
<body>
<div class="container">
	<ul id="loadbar">
    <li>
    <div id="layerFill1" class="bar"></div> <!-- 控制层和柱子  -->
    </li>
    <li>
    <div id="layerFill2" class="bar"></div>
    </li>
    <li>
    <div id="layerFill3" class="bar"></div>
    </li>
    <li>
    <div id="layerFill4" class="bar"></div>
    </li>
    <li>
    <div id="layerFill5" class="bar"></div>
    </li>
    <li>
    <div id="layerFill6" class="bar"></div>
    </li>
    <li>
    <div id="layerFill7" class="bar"></div>
    </li>
    <li>
    <div id="layerFill8" class="bar"></div>
    </li>
    <li>
    <div id="layerFill9" class="bar"></div>
    </li>
    <li>
    <div id="layerFill10" class="bar"></div>
    </li>
</ul>
<div id="rect" style="margin-left:25%;font-size:50px;"><strong>请先登录，页面跳转中...</strong></div>
</div>

</body>
</html>
';
	        if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',5,$tzye);
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];
			$Zxcy = new Model("Zxcy");
			$zhuce_arr=$Zxcy->where('Id=1')->select();
			$this->assign('zhuce_arr',$zhuce_arr['content']); 
			$this->display();
	    }
		
		public function zhuce_xy_cl(){
		    $zhuce_xy=$_POST['zhuce_content'];
			//echo $zhuce_xy;
			$date['content']=$zhuce_xy;
			$Zcxy = new Model("Zxcy");
			$Zcxy->where('id=1')->setField($data);
		}
		
		public function hylx()
		{
						$tzye='<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跳转请等待5s</title>
<style>
ul#loadbar {
    list-style: none;
    width: 160px;
    margin: 0 auto;
    padding-top: 50px;
    padding-bottom: 75px;
}
 
ul#loadbar li {
    float: left;
    position: relative;
    width: 11px;
    height: 26px;
    margin-left: 1px;
    border-left: 1px solid #111;
    border-top: 1px solid #111;
    border-right: 1px solid #333;
    border-bottom: 1px solid #333;
    background: #000;
}
 
ul#loadbar li:first-child {
    margin-left: 0;
}
.container {width: 1000px;margin-top:200px; margin-left:15%;overflow: hidden;}
.bar {
    background-color: #2187e7;
    background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
    width: 11px;
    height: 26px;
    opacity: 0;
    -webkit-animation: fill .5s linear forwards;
    -moz-animation: fill .5s linear forwards;
}
 
#layerFill1 {
    -moz-animation-delay: 0.5s;
    -webkit-animation-delay: 0.5s;
}
 
#layerFill2 {
    -moz-animation-delay: 1s;
    -webkit-animation-delay: 1s;
}
 
#layerFill3 {
    -moz-animation-delay: 1.5s;
    -webkit-animation-delay: 1.5s;
}
 
#layerFill4 {
    -moz-animation-delay: 2s;
    -webkit-animation-delay: 2s;
}
 
#layerFill5 {
    -moz-animation-delay: 2.5s;
    -webkit-animation-delay: 2.5s;
}
 
#layerFill6 {
    -moz-animation-delay: 3s;
    -webkit-animation-delay: 3s;
}
 
#layerFill7 {
    -moz-animation-delay: 3.5s;
    -webkit-animation-delay: 3.5s;
}
 
#layerFill8 {
    -moz-animation-delay: 4s;
    -webkit-animation-delay: 4s;
}
 
#layerFill9 {
    -moz-animation-delay: 4.5s;
    -webkit-animation-delay: 4.5s;
}
 
#layerFill10 {
    -moz-animation-delay: 5s;
    -webkit-animation-delay: 5s;
}
 
@-moz-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}
 
@-webkit-keyframes fill {
    0% {
        opacity: 0;
    }
 
    100% {
        opacity: 1;
    };
}


</style>
<body>
<div class="container">
	<ul id="loadbar">
    <li>
    <div id="layerFill1" class="bar"></div> <!-- 控制层和柱子  -->
    </li>
    <li>
    <div id="layerFill2" class="bar"></div>
    </li>
    <li>
    <div id="layerFill3" class="bar"></div>
    </li>
    <li>
    <div id="layerFill4" class="bar"></div>
    </li>
    <li>
    <div id="layerFill5" class="bar"></div>
    </li>
    <li>
    <div id="layerFill6" class="bar"></div>
    </li>
    <li>
    <div id="layerFill7" class="bar"></div>
    </li>
    <li>
    <div id="layerFill8" class="bar"></div>
    </li>
    <li>
    <div id="layerFill9" class="bar"></div>
    </li>
    <li>
    <div id="layerFill10" class="bar"></div>
    </li>
</ul>
<div id="rect" style="margin-left:25%;font-size:50px;"><strong>请先登录，页面跳转中...</strong></div>
</div>

</body>
</html>
';
	        if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',5,$tzye);
			 $this->display();
			
		}
		public function member_ck(){
			$Id=$_GET['Id'];
			$data['id']=$Id;
			$Member =new Model("Member");
			$member_xx=$Member->where($data)->select();
		    $this->assign('list',$member_xx);
			$this->display();
		}
	   }	   
?>