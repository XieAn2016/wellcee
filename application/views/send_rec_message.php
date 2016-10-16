<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo site_url();?>">
	<title>收发回复</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sendMessage.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include "header.php" ;?>
<div id="message">
	<div class="container">
		<div class="row">
			<div id="mailContainer" class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
				<div class="nav">
					<div  class="row">
						<div class="rec col-xs-2 col-lg-2 col-md-2 col-sm-2" data-id="1">
							<a >收件箱</a>
							<span class="shadow"></span>
						</div>
						<div class="send col-xs-2 col-lg-2 col-md-2 col-sm-2" data-id="2">
							<a >发件箱</a>
							<span></span>
						</div>
					</div>
				</div>
				<hr style="width:100%;margin: 0">
				<div class="search">
					<div  class="row">
						<span class="search_left col-xs-3 col-lg-3 col-md-3 col-sm-3">消息总数：43个</span>
						<input type="text" name="" value="" placeholder="搜索" class="search_center col-xs-5 col-lg-5 col-md-5 col-sm-5">
						<button class="search_right col-xs-2 col-lg-2 col-md-2 col-sm-2">选中删除</button>
					</div>
				</div>
				<hr style="width:100%;margin: 0">
				<div class="title">
					<div  class="row">
						<input type="checkbox" name=""
							   class="title_from col-xs-1 col-lg-1 col-md-1 col-sm-1"><span class="title_from_title  col-xs-1 col-lg-1 col-md-1 col-sm-1">来自</span>
						<span class="title_cont col-xs-5 col-lg-5 col-md-5 col-sm-5">具体内容</span>
						<span class="title_date col-xs-3 col-lg-3 col-md-3 col-sm-3">接收日期</span>
						<span class="title_opt col-xs-2 col-lg-2 col-md-2 col-sm-2">操作</span>
					</div>
				</div>
				<hr style="width:100%;margin: 0">
				<ul id="contentList">
					<?php
					foreach ($datas as $data){
						?>
						<li>
							<div class="content">
								<div class="row">
									<input type="checkbox" name=""
										   class="content_from col-xs-1 col-lg-1 col-md-1 col-sm-1" data-num="<?php echo $data->mail_id;?>">
									<span class="content_from_title col-xs-1 col-lg-1 col-md-1 col-sm-1"><?php echo $data->last_name."".$data->first_name;?></span>
									<span class="content_cont col-xs-5 col-lg-5 col-md-5 col-sm-5"><?php echo $data->content;?></span>
									<span class="content_date col-xs-3 col-lg-3 col-md-3 col-sm-3"><?php echo $data->mail_date;?></span>
									<div class=" col-xs-2 col-lg-2 col-md-2 col-sm-2">
										<button class="content_opt del" data-num="<?php echo $data->mail_id;?>">删除</button>
									</div>
								</div>
							</div>
							<hr style="width:100%;margin: 0">
						</li>
						<?php
					}
					?>




					<li>
						<div class="content">
							<div class="row">
								<input type="checkbox" name=""
									   class="content_from col-xs-1 col-lg-1 col-md-1 col-sm-1"><span class="content_from_title col-xs-1 col-lg-1 col-md-1 col-sm-1">来自</span>
								<span class="content_cont col-xs-5 col-lg-5 col-md-5 col-sm-5">具体发生和沙发上会受到哈哈俗话说得好第三方士大夫内容</span>
								<span class="content_date col-xs-3 col-lg-3 col-md-3 col-sm-3">接收日期</span>
								<div class="opt-container col-xs-2 col-lg-2 col-md-2 col-sm-2">
									<button class="content_opt del">删除</button>
									<button class="content_opt rep">回复</button>
								</div>
							</div>
						</div>
						<hr style="width:100%;margin: 0">



						<div class="content">
							<div class="row contents">
								<input type="checkbox" name=""
									   class="content_from col-xs-1 col-lg-1 col-md-1 col-sm-1"><span class="content_from_title col-xs-1 col-lg-1 col-md-1 col-sm-1">来自</span>
								<span class="content_cont col-xs-5 col-lg-5 col-md-5 col-sm-5">具体发生和沙发上会受到哈哈俗话说得好第三方士大夫内容</span>
								<span class="content_date col-xs-3 col-lg-3 col-md-3 col-sm-3">接收日期</span>
								<div class=" col-xs-2 col-lg-2 col-md-2 col-sm-2">
									<button class="content_opt rep">回复</button>
								</div>
							</div>

							<div class=" col-xs-7 col-lg-7 col-md-7bcol-sm-7">
								<div class="row">
									<div  class="col-xs-7 col-lg-7 col-md-7 col-sm-7   col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
										<textarea cols="10" rows="5" name="" id=""></textarea>
									</div>
									<button class="repText col-xs-2 col-lg-2 col-md-2 col-sm-2">回复</button>
								</div>
							</div>

						</div>
						<hr style="width:100%;margin: 0">
					</li>
				</ul>


			</div>
			<div id="sidebar" class="col-xs-4 col-lg-4 col-md-4 col-sm-4">
				<img src="img/right_side.png">
			</div>
		</div>
	</div>
</div>
<?php include "footer.php" ;?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/send_rec_message.js"></script>

</body>
</html>