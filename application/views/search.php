<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo site_url()?>">
	<script src='js/jquery.js'></script>
	<link rel="stylesheet" href="css/jquery.range.css">
	<script src='js/jquery.range.js'></script>
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-select.min.css">
<!-- 	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<script src='js/bootstrap.min.js'></script>
	<script src='js/bootstrap-datetimepicker.min.js'></script>
	<script src='js/bootstrap-select.js'></script>
	<!-- <script src='js/bootstrap-datetimepicker.zh-CN.js'></script> -->
	<meta name='viewport' content='width=device-width,initial-scale=1.0'/>
	<title>Search house</title>
</head>
<body>
	<div id="myheader">	
	</div>
	<div class="container">
			<div class="row">
				<div class="col-md-8 " style='padding-left: 40px;min-height: 1000px'>
					 <div class="btn-group top bot">
						<button type="button" class="btn btn-default">价格</button>
						<button type="button" class="btn btn-default dropdown-toggle" 
								data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">切换下拉菜单</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">￥1000-￥3000</a></li>
							<li><a href="#">￥3000-￥5000</a></li>
							<li><a href="#">￥5000-￥7000</a></li>
							<li><a href="#">￥7000-￥10000</a></li>
							<li><a href="#">￥10000-￥15000</a></li>
							<li class="divider"></li>
							<li><a href="#">￥15000以上</a></li>
						</ul>
					</div>
					<div class="btn-group top bot">
						<button type="button" class="btn btn-default">评分</button>
						<button type="button" class="btn btn-default dropdown-toggle" 
								data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">切换下拉菜单</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">一星级</a></li>
							<li><a href="#">二星级</a></li>
							<li><a href="#">三星级</a></li>
							<li><a href="#">四星级</a></li>
							<li class="divider"></li>
							<li><a href="#">五星级</a></li>
						</ul>
					</div>
					<div class="btn-group top bot">
						<button type="button" class="btn btn-default">收藏数</button>
						<button type="button" class="btn btn-default dropdown-toggle" 
								data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">切换下拉菜单</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">10以下</a></li>
							<li><a href="#">50以下</a></li>
							<li><a href="#">100以下</a></li>
							<li class="divider"></li>
							<li><a href="#">100以上</a></li>
						</ul>
					</div> 
					<div><ul id="house" >
						<li class='detial'><a><img src='upload/9.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
						<li class='detial'><a><img src='upload/12.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
						<li class='detial'><a><img src='upload/13.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
						<li class='detial'><a><img src='upload/13.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
						<li class='detial'><a><img src='upload/14.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
						<li class='detial'><a><img src='upload/15.jpg'></img><span class='price'>￥23940</span></a><span class='top left'>English tudor suito,with parking</span><br/>
						<span class='left'>独立房间/</span>&nbsp&nbsp<span>收藏：23232/</span>&nbsp&nbsp<span>五颗星/</span></li>
					</ul></div>
					
						<nav>
						  <ul class="pagination" >
						  	<li><a href="#">&laquo;首页</a>
						    <li><a href="#">&laquo;</a>
						    <li><a href="#">1</a>
						    <li><a href="#">2</a>
						    <li><a href="#">3</a>
						    <li><a href="#">4</a>
						    <li><a href="#">5</a>
						    <li><a href="#">&raquo;</a>
						    <li><a href="#">尾页&raquo;</a>
						  </ul>
						</nav>
			</div>
  				<div class="col-md-4"> 				     
  				    <form action="#" >
  				      <div id="search">
  				      	      <button class='search-btn'>搜  索</button>
	  				      	  <div class='list' style='margin-top: 10px'>位置&nbsp&nbsp&nbsp
	  				      	  	<select style='width: 110px' class='sel ' name="province" id="" onchange='turn()'>
									<option value="0" selected="selected" >请选择省份</option>
								</select>-<select style='width: 110px' class='sel ' name="city" id="">
										<option value="0" selected="selected">请选择城市</option>
								</select>
	  				       	  </div>
			  				  <div class='list'>日期/人数 <input style='display:inline-block;border-radius: 0' class="form_datetime form-control" type="text" value="入住日期" size="16">-
			  				      	  <input style='display:inline-block;border-radius: 0'' class="form_datetime form-control" type="text" value="退房日期" size="16">
	  				      	  </div> 
  				      	      <div class='list'><input style='width:200px;margin-left: 90px' type='text' name='hold-num' placeholder="入住人数" />
  				      	      </div>
  				              <div class='list'>房屋类型
  				      	  	  <select class="selectpicker" >
  				      	  	  	    <option value="选择类型">选择类型</option>
									<option value="整套房屋">整套房屋</option>
									<option value="合住房间">合住房间</option>
									<option value="独立房间">独立房间</option>
   							   </select>
  							 </div>
  							 <div class='list'>出租类型
  				      	  	  <select class="selectpicker">
  				      	  	  		<option value="出租类型">选择类型</option>
  				      	  	  	    <option value="年租">年租</option>
									<option value="月租">月租</option>
									<option value="日租">日租</option>								
   							   </select>
  							 </div>
	  				      	<!--   <div class='list'>出租类型
		  				      	  <div class="btn-group top" >
									<button style='padding: 8px 50px;border-radius: 0' type="button" class="btn btn-default">选择类型</button>
									<button style='padding: 8px 20px;border-radius: 0' type="button" class="btn btn-default dropdown-toggle" 
											data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">切换下拉菜单</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">年租</a></li>
										<li><a href="#">月租</a></li>
										<li><a href="#">日租</a></li>
										<li class="divider"></li>
									</ul>
								  </div>
	  				      	  </div> -->
	  				      	  <div class='price-range'>价格区间</div>
	  				      	<div class="range">
								<input type="hidden" class="single-slider" value="23" />
							</div>
	  				      	  <hr/>
	  				      	  <button id='select-addit' type='button' class='sure-btn'>筛选条件</button>
  				      </div>
  				       <div class='demo'>
								<input type="hidden" class="slider-input" value="23" /> 
	  				      	  </div>
	  				  <div id="search-add">
	  				          <div class='list'>卧室个数&nbsp<input class='condition' type="text" name="room-num" placeholder="个数" /></div>
	  				          <div class='list'>床数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class='condition' type="text" name="bed-num" placeholder="个数" /></div>
	  				          <div class='list'>卫生间数&nbsp<input type="text" class='condition' name="toilet-num" placeholder="个数" /></div>
	  				          <ul class='list'>
	  				              <li>&nbsp&nbsp&nbsp&nbsp&nbsp便利设施</li><br />
	  				              <hr style='width: 95%'/>
	  				              <li><span class='span-icon'><i class="fa fa-taxi" aria-hidden="true"></i><span class='brank'>汽车</span></span>
	  				              </li>
	  				              <li><span class='span-icon'><i class="fa fa-bicycle" aria-hidden="true"></i><span class='brank'>自行车</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-desktop" aria-hidden="true"></i><span class='brank'>电视机</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-wifi" aria-hidden="true"></i><span class='brank'>无线</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-umbrella" aria-hidden="true"></i><span class='brank'>雨具</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-video-camera" aria-hidden="true"></i><span class='brank'>摄像机</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-camera" aria-hidden="true"></i><span class='brank'>相机</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-lock" aria-hidden="true"></i><span class='brank'>门锁</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-laptop" aria-hidden="true"></i><span class='brank'>电脑</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-briefcase" aria-hidden="true"></i><span class='brank'>便利箱</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-cutlery" aria-hidden="true"></i><span class='brank'>厨具</span></span></li>
	  				              <li><span class='span-icon'><i class="fa fa-book" aria-hidden="true"></i><span class='brank'>工作区</span></span></li>
	  				          </ul>
	  				      	  <button type='button' class='sure-btn'>确  认</button>
	  				      	  <button type='button' id='resite' class='resite-btn'>重  置</button>	  				      	 
	  				  </div>
	  				</form>
  				</div>
			</div>
	</div>
	<div id='myfooter'></div>
</body>
<script type="text/javascript">

 		// $('.pagination li').on('click',function(event){
 		// 	event.preventDefault();
 		// 	callback($(this).text());
 		// });
 		// function callback(val){
 		// 	if(val==2){
   //             $.get('welcome/load_pic_ajax',{val:val},function(data){

   //             },'json');
 		// 	}
 		// }
 		
 		
    	var cityList = new Array();
		var pros =new Array();
		pros=['黑龙江','浙江'];
		cityList['黑龙江']=['请选择城市','哈尔滨','大庆'];
		cityList['浙江']=['请选择城市','杭州','宁波','绍兴'];
		var city=document.forms[0].city;
		var province = document.forms[0].province;
		for(var i in pros){
			newOption =new Option(pros[i],pros[i]);
			province.options.add(newOption);
		}
		 function turn(){
			var index = document.forms[0].province.value;
			city.options.length =0;
			for(var j in cityList[index]){
				newOption =new Option(cityList[index][j],cityList[index][j]);
				city.options.add(newOption);
			}
		}
    	 $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayBtn: true,
        todayHighlight: true,
        showMeridian: true,
        pickerPosition: "bottom-left",
        language: 'zh-CN',
        startView: 2,//月视图
        minView: 2//日期时间选择器所能够提供的最精确的时间选择视图
    });   
	  $('.single-slider').jRange({
		from: 1000,
		to: 100000,
		step: 100,
		scale: [1000,25750,50500,75250,100000],
		format: '%s',
		width: 300,
		showLabels: true,
		showScale: true
	});
		
	var spans = $('.span-icon');
	spans.each(function(){
		$(this).attr('flag','true');
	});
	spans.on('click',function(){
        if($(this).attr('flag')=='true'){
        	$(this).addClass('selected');
        	$(this).attr('flag','false');
        }else{
        	$(this).removeClass('selected');
        	$(this).attr('flag','true');
        }      
	});
    $('#select-addit').on('click',function(){
    	if($('#search-add').css('display')=='block'){
    		$('#search-add').css('display','none');
    	}else{
    		$('#search-add').css('display','block');
    	}
    });
    $('#resite').on('click',function(){
    	$('.span-icon').each(function(){
    		$(this).removeClass('selected');
    	});
    	$("input[type='text']").val('');
    });
</script>
</html>
 <!-- <span class='heart'><i class="fa fa-heart" aria-hidden="true"></i></span>
  				      	  <i class="fa fa-heart-o" aria-hidden="true"></i> -->
  				  <!--     	  var aa = $(".single-slider").val(); -->
