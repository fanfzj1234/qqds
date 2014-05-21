<?php
  

	class IndexAction extends CommonAction {
		
		// 显示主页面
		public function index(){
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
             redirect('admin.php/Index/login',5,$tzye);
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];
			 $this->display();
		}
		
		public function main(){
			$tzye='<div id="rect" style="margin:50px;margin-left:40%;margin-top:10%;font-size:50px;"><strong>请先登录，页面跳转中...</strong></div>';
	        if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('login',2,$tzye);
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];
		           
			$member = new Model("Member");                        //用户成员
			$bc_information= new Model("Bc_information");         //创业信息
			$club_activity=new Model("Club_activity");            //社团活动
			$consult_sort=new Model("Consult_sort");              //咨询分类
			$develop_experience=new Model("Develop_experience");  //开发信息
			$ds_consult=new Model("Ds_consult");                  //电商资讯
			$friendly_link=new Model("Friendly_link");            //友情链接
			$preferential_policy=new Model("Preferential_policy");//优惠政策
			$cy_project=new Model("Cy_project");                  //项目
			$train_information=new Model("Train_information");    //培训信息
			$ds_practice=new Model("Ds_practice");                //电商实践
			$origliterature=new Model("Origliterature");          //原创文学
			$qd_alliance=new Model("Qd_alliance");                //齐大联盟
			$qd_news=new Model("Qd_news");                        //齐大新闻
			$outstanding_bc=new Model("Outstanding_bc");          //优秀创业案例
			$taobao_marketing=new Model("Taobao_marketing");      //淘宝营销
			$admin=new Model("admin");                            //管理员
			
			//$user_array=$member->select();
			//$this->assign('user_array',$user_array); 	
			$conn=mysql_connect("localhost:3306","root","koala19920716");//建立与SQL Server数据库的连接
            mysql_query("set names 'utf8'"); 
            mysql_select_db("dzsw",$conn);   //选择数据库		
			$user_number=$member->count();                    //用户成员数
			$this->assign('user_number',$user_number); 
			$user_today=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 0 day)");//当天注册人数
			$user_today_number=mysql_num_rows($user_today);
			$this->assign('user_today_number',$user_today_number); 
			$user_three=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 3 day)");//三日注册人数
			$user_three_number=mysql_num_rows($user_three);
			$this->assign('user_three_number',$user_three_number); 
			$user_week=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 7 day)");//一周注册人数
			$user_week_number=mysql_num_rows($user_week);
			$this->assign('user_week_number',$user_week_number); 
			$user_month=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 30 day)");//一月注册人数
			$user_month_number=mysql_num_rows($user_month);
			$this->assign('user_month_number',$user_month_number); 
			
			         
            $bc_information_number=$bc_information->count();  //创业信息数
			$this->assign('bc_information_number',$bc_information_number); 
			
            $club_activity_number=$club_activity->count();    //社团活动数
			$this->assign('club_activity_number',$club_activity_number); 
			
            $consult_sort_number=$consult_sort->count();      //咨询分类数
			$this->assign('consult_sort_number',$consult_sort_number); 
			
            $develop_experience_number=$develop_experience->count();//开发信息数
			$this->assign('develop_experience_number',$develop_experience_number); 
			
            $ds_consult_number=$ds_consult->count();          //电商资讯数
			$this->assign('ds_consult_number',$ds_consult_number);
			$hlwjr=$ds_consult->where('sort=1')->select();    //互联网金融
			$hlwjr_number=count($hlwjr);
			$this->assign('hlwjr_number',$hlwjr_number);
			$wsgw=$ds_consult->where('sort=2')->select();      //网上购物
			$wsgw_number=count($wsgw);
			$this->assign('wsgw_number',$wsgw_number);
			$b2bsw=$ds_consult->where('sort=3')->select();     //B2B购物
			$b2bsw_number=count($b2bsw);
			$this->assign('b2bsw_number',$b2bsw_number);
			 
            $friendly_link_number=$friendly_link->count();    //友情链接数
			$this->assign('friendly_link_number',$friendly_link_number); 
			
			$preferential_policy_number=$preferential_policy->count();//优惠政策数
			$this->assign('preferential_policy_number',$preferential_policy_number); 
			
			$cy_project_number=$cy_project->count();              //项目数
			$this->assign('cy_project_number',$cy_project_number); 
			
			$train_information_number=$train_information->count();//培训信息数
			$this->assign('train_information_number',$train_information_number); 
			
			$ds_practice_number=$ds_practice->count();      //电商实践数
            $this->assign('ds_practice_number',$ds_practice_number); 

			$origliterature_number=$origliterature->count();//原创文学数
			$this->assign('origliterature_number',$origliterature_number);
			
			$qd_alliance_number=$qd_alliance->count();      //齐大联盟数
			$this->assign('qd_alliance_number',$qd_alliance_number);
		    
			$qd_news_number=$qd_news->count();                     //齐大新闻数
			$this->assign('qd_news_number',$qd_news_number);
			
			$outstanding_bc_number=$outstanding_bc->count();//优秀创业案例数
			$this->assign('outstanding_bc_number',$outstanding_bc_number);
			
			$taobao_marketing_number=$taobao_marketing->count();//淘宝营销数
		    $this->assign('taobao_marketing_number',$taobao_marketing_number);
			
			$admin_number=$admin->count();//管理员数
		    $this->assign('admin_number',$admin_number);
			
			$this->display();
		}
		
		
		public function login()
		{
			$this->display();

		}
		
	}
?>