<?php
   class MemberAction extends CommonAction{
   	    /*public function _initialize(){
             parent::_initialize();
//必须写上这一句,否则子类将会复写父类的方法,这样父类的验证操作就失效了..
       }*/
	   public function member(){
		   	//parent::_initialize();
		   	$tzye=C('TZYE');
			if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('admin.php/Index/login',5,$tzye);
             if(!$_SESSION['admin']&&(isset($_COOKIE['username'])))
             $_SESSION['admin']=$_COOKIE['username'];
		   	import("ORG.Util.Page");
		    $member = new Model("Member");                        //用户成员
		     $count=$member->count();                             //总记录数
            $Page=new Page($count,25);                           //每页显示记录条数
            
           $show=$Page->show();
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            
            $list = $member->order('register_time')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);// 赋值数据集
           
	        // 赋值分页输出
			$this->assign('count',$count); 
			$this->assign('page',$show);
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
		   	$tzye=C('TZYE');
			if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('admin.php/Index/login',5,$tzye);
             if(!$_SESSION['admin']&&(isset($_COOKIE['username'])))
             $_SESSION['admin']=$_COOKIE['username'];
			$Zxcy = new Model("Zcxy");
			$zhuce_arr=$Zxcy->where('Id=1')->getField('content');
			
			$this->assign('zhuce_arr',$zhuce_arr); 
			$this->display();
	    }
		
		public function zhuce_xy_cl(){
			//echo $zhuce_xy;
			$Model= new Model();
			if($Model->query("UPDATE sw_zcxy SET content='".$_POST['zhuce_content']."' WHERE Id=1"))
			echo '1';
		}
		
		
		public function hylx()
		{
			$tzye=C('TZYE');
			if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('admin.php/Index/login',5,$tzye);
             if(!$_SESSION['admin']&&(isset($_COOKIE['username'])))
             $_SESSION['admin']=$_COOKIE['username'];
			$type=new Model("Type");
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