<?php 
  /****************************** 
  *      ����ͼ���ɺ��� 
  *      youd 
  *      090207-01 
  ******************************/ 
  function line_stats_pic($value_y,$width,$high,$strong=1,$fix=0){ 
  //yֵ������ 
  function line_point_y($num,$width,$high,$max_num_add,$min_num_add,$y_pxdensity){ 
	$return=$high-floor(($num-$min_num_add+$y_pxdensity)/(($max_num_add-$min_num_add)/$high)); 
	return $return; 
  } 
  
  //�������� 
  $allnum=sizeof($value_y); 
  $max_num=max($value_y);              //���ֵ 
  $min_num=min($value_y);              //��Сֵ 
  $limit_m=$max_num-$min_num;            //���� 
  $max_num_add=$max_num+$limit_m*0.1;        //�����ֵ 
  $min_num_add=$min_num-$limit_m*0.1;        //����Сֵ 
  $limit=$max_num_add-$min_num_add;         //����-������y 
  $y_pxdensity=($max_num_add-$min_num_add)/$high;  //y���ܶ� 
  $x_pxdensity=floor($width/$allnum);        //x���ܶ� 
  reset($value_y);                 //������ָ����� 
  $i=0; 
  foreach($value_y as $val){ 
	$point_y[$i]=line_point_y($val,$width,$high,$max_num_add,$min_num_add,$y_pxdensity); 
	++$i; 
  } 
  $zero_y=line_point_y(0,$width,$high,$max_num_add,$min_num_add,$y_pxdensity);  //����yֵ 
  $empty_size_x=(strlen($max_num) > strlen($min_num) ? strlen($max_num) : strlen($min_num))*5+3;  //��߿հ� 
  
  //ͼƬ����ʼ 
  header("Content-type:image/png"); 
  $pic=imagecreate($width+$empty_size_x+10,$high+13); 
  imagecolorallocate($pic,255,255,255);     //����ɫ 
  $color_1=imagecolorallocate($pic,30,144,255); //����ɫ 
  $color_2=imagecolorallocate($pic,0,0,0);   //��ɫ 
  $color_3=imagecolorallocate($pic,194,194,194);//��ɫ 
  //�������� 
  imagesetthickness($pic,1);          //�����߿� 
  $y_line_width=floor($width/100);       //����������Ŀ 
  $y_line_density=$y_line_width==0 ? 0 :floor($width/$y_line_width); //���������ܶ� 
  $point_zero_y=$zero_y > $high ? $high : $zero_y; 
  imagestring($pic,1,$empty_size_x-1,$high+4,"0",$color_2); //��������� 
  for($i=1;$i <= $y_line_width;++$i){      //������������ 
	imagesetthickness($pic,1);         //�����߿� 
	imageline($pic,$y_line_density*$i+$empty_size_x,0,$y_line_density*$i+$empty_size_x,$high,$color_3); 
	imagesetthickness($pic,2);         //����߿� 
	imageline($pic,$y_line_density*$i+$empty_size_x,$point_zero_y-4,$y_line_density*$i+$empty_size_x,$point_zero_y,$color_2); 
	imagestring($pic,1,100*$i+$empty_size_x-5,$high+4,$allnum/$y_line_width*$i,$color_2);  //������ 
  } 
  $x_line_width=floor($high/30);        //����������Ŀ 
  $x_line_density=$x_line_width==0 ? 0 :floor($high/$y_line_width);  //���������ܶ� 
  if($zero_y > $high){             //���ƺ������� 
	imagestring($pic,1,0,$high-3,round($min_num_add,$fix),$color_2); //��������� 
	for($i=1;$i <= $x_line_width;++$i){ 
	 imagesetthickness($pic,1);        //�����߿� 
	 imageline($pic,0+$empty_size_x,$high-$x_line_density*$i,$width+$empty_size_x,$high-$x_line_density*$i,$color_3); 
	 imagesetthickness($pic,2);        //����߿� 
	 imageline($pic,0+$empty_size_x,$high-$x_line_density*$i,3+$empty_size_x,$high-$x_line_density*$i,$color_2); 
	 imagestring($pic,1,0,$high-$x_line_density*$i-3,round($limit/$x_line_width*$i+$min_num_add,$fix),$color_2);  //������ 
	} 
  }else{ 
	imagestring($pic,1,$empty_size_x-8,$zero_y,"0",$color_2); //��������� 
	for($i=1;$i <= ceil($x_line_width/2);++$i){ 
	 imagesetthickness($pic,1);        //�����߿� 
	 imageline($pic,0+$empty_size_x,$zero_y-$x_line_density*$i,$width+$empty_size_x,$zero_y-$x_line_density*$i,$color_3); 
	 if($zero_y+$x_line_density*$i < $high){ 
	  imageline($pic,0+$empty_size_x,$zero_y+$x_line_density*$i,$width+$empty_size_x,$zero_y+$x_line_density*$i,$color_3); 
	 } 
	 imagesetthickness($pic,2);        //����߿� 
	 imageline($pic,0+$empty_size_x,$zero_y-$x_line_density*$i,3+$empty_size_x,$zero_y-$x_line_density*$i,$color_2); 
	 if($zero_y+$x_line_density*$i < $high){ 
	  imageline($pic,0+$empty_size_x,$zero_y+$x_line_density*$i,3+$empty_size_x,$zero_y+$x_line_density*$i,$color_2); 
	 } 
	 imagestring($pic,1,0,$zero_y-$x_line_density*$i-3,round($limit/$x_line_width*$i,$fix),$color_2);   //������ 
	 if($zero_y+$x_line_density*$i < $high){ 
	  imagestring($pic,1,0,$zero_y+$x_line_density*$i-3,round(-$limit/$x_line_width*$i,$fix),$color_2);  //������ 
	 } 
	} 
  } 
  //�������� 
  imagesetthickness($pic,2);          //���߿� 
  imageline($pic,1+$empty_size_x,0,1+$empty_size_x,$high,$color_2); 
  if($zero_y > $high){             //x��λ�� 
	imageline($pic,0+$empty_size_x,$high,$width+$empty_size_x,$high,$color_2); 
  }else{ 
	imageline($pic,0+$empty_size_x,$zero_y,$width+$empty_size_x,$zero_y,$color_2); 
  } 
  //�������� 
  $point_x=0; 
  $j=0; 
  imagesetthickness($pic,$strong);       //������ϸ 
  while($j+1 < $allnum){ 
	imageline($pic,$point_x+2+$empty_size_x,$point_y[$j],$point_x+$x_pxdensity+2+$empty_size_x,$point_y[$j+1],$color_1); 
	$point_x+=$x_pxdensity; 
	$j++; 
  } 
  imagepng($pic); 
  imagedestroy($pic); 
  } 
  $conn=mysql_connect("localhost:3306","root","koala19920716");//������SQL Server���ݿ������
  mysql_query("set names 'utf8'"); 
  mysql_select_db("dzsw",$conn);   //ѡ�����ݿ�
  for($i=0;$i<30;++$i){
	 $time="select * from sw_member where register_time=DATE_SUB(CURDATE(), INTERVAL '$i' DAY)";
     $value=mysql_num_rows(mysql_query($time));
	$value_y[]=$value;
  } 
 line_stats_pic($value_y,975,115,1,1);
?> 

