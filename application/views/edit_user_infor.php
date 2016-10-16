<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo site_url()?>">
	<script src='js/jquery.js'></script>
	<script src='js/jquery.range.js'></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="css/ali_icon.css">
	<link rel="stylesheet" href="css/edit_user_infor.css">
	<script src='js/bootstrap.min.js'></script>
	<script src='js/bootstrap-datetimepicker.min.js'></script>
	<script src='js/bootstrap-select.js'></script>
	<meta name='viewport' content='width=device-width,initial-scale=1.0'/>
	<title>Edit information</title>
</head>
<body>
	<?php include 'header.php';?>
	<div class="container">
			<div class="row">
				<div class="col-md-8 " style='padding-left: 40px;min-height: 1000px'><br/><br/>
					 <span class='edit'>编辑个人资料</span>
					 <form action="">
					 	<div class='list'>您的真实姓名：<br/><br/>
					 	<input type="text" class='name1' name='name1' placeholder="名字"/>&nbsp&nbsp&nbsp
					 	<input type="text" class='name1' name='name2' placeholder="姓氏"/>
					 	</div>
					 	<div class='list'>
					 		性别：&nbsp&nbsp&nbsp<input type="radio" name='sex'/>女&nbsp&nbsp&nbsp
					 		<input type="radio" name='sex'/>男
					 	</div>
					 	<div class='list por'>
					 		上传头像：<span class='portrait'>+</span>
					 		<input type="file" accept="image/*"  class='pa'/>
					 		<div class='imgCrop'>
					 			<img class='hid' src="upload/4.jpg" alt="">
					 		</div>
					 	</div>
					 	<div class="list">
					 		出生日期：<br/><br/>
							<input style='display:inline-block;border-radius: 0' class=" year form_datetime1 form-control " type="text" placeholder="年-月-日..."/>
					 	</div>
					 	<div class="list">
					 		您的电话：<br /><br />
					 		<input type="text" class='tel' name='tel' placeholder="电话..."/>
					 	</div>
					 	<div class="list">
					 		您的邮箱：<br /><br />
					 		<input type="text" class='tel' name='tel' placeholder="邮箱..."/>
					 	</div>
					 	<div class="list"> 
					 		您的国家：<br /><br />
					 		 <select class="selectpicker" style='width: 378px;height: 45px'>
  				      	  	  		<option value="国家">国家</option>
  				      	  	  	    <option value="年租">中国</option>
									<option value="月租">法国</option>
									<option value="日租">印度</option>						
   							</select>
					 	</div>
					 	<div class="list">
					 		请输入您的地址：<br /><br />
					 		<input type="text" class='address' name='address' placeholder="地址..."/>
					 	</div>
					 	<div class="list">
					 		首选货币：<br /><br />
					 		 <select class="selectpicker">
  				      	  	  		<option value="CNY">CNY</option>
  				      	  	  	    <option value="年租">人民币</option>
									<option value="月租">美元</option>	
   							</select>
					 	</div>
					 	<div class="list ">
					 	请选择你的爱好：
						 <ul class="list clearfix block">
            				 <li><span class='span-icon'><i class="iconfont-hobby">&#xe60b;</i><span class='brank'>画画</span></span> </li>
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe600;</i>
			                <span class='brank'>摄影</span></span>    
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe601;</i>
			                <span class='brank'>花花</span></span>
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe602;</i>
			                <span class='brank'>舞蹈</span></span>
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe603;</i>
			                <span class='brank'>家政服务</span></span>
			                </li>           
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe604;</i>
			                <span class='brank'>游戏</span></span>           
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe605;</i>
			                <span class='brank'>运动</span></span>                 
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe606;</i>
			                 <span class='brank'>旅行</span></span>                 
			                </li>           
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe607;</i>
			                    <div class="name">音乐</div>                  
			                </li>            
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe608;</i>
			                 <span class='brank'>美食</span></span>                       
			                </li>           
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe609;</i>
			                 <span class='brank'>电影</span></span>                         
			                </li>          
			                <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe60a;</i>
			                 <span class='brank'>宠物</span></span>       
			                </li>
			                 <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe60c;</i>
			                 <span class='brank'>购物</span></span>       
			                </li>
			                 <li><span class='span-icon'>
			                <i class="iconfont-hobby">&#xe60d;</i>
			                 <span class='brank'>阅读</span></span>       
			                </li>
					 	</div>
					 	<div>
					 		请三两句介绍自己：<br/><br>
					 		<textarea class='introduce' name="introduce" placeholder="自我介绍..."></textarea> 
					 	</div>
					 	<br/>
					 	<div>
					 		<button  class='save' type='submit'>保存</button>
					 	</div>
					 </form>
					 <br/><br/>
				</div>
  				<div class="col-md-4"> 				     
  				   <div >
  				   	<img class='pic' src="img/window_bg.jpg" alt="">
  				   </div>
  				</div>
			</div>
	</div>
	<?php include 'footer.php';?>
	<script src="js/edit_user_infor.js"></script>
	
</body>
<script type="text/javascript">	
</script>
</html>
