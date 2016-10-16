<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo site_url();?>">
	<title>用户评论房东</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/sendMessage.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/room_mgr.css">
	<link rel="stylesheet" type="text/css" href="css/user_comment_owner.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include "header.php" ;?>
<div id="user_comment_owner">
	<div class="container">
		<div class="row">
			<div id="commentContainer" class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
				<div class="comment_title">
					<hr style="width:100%;margin: 0">
					<div class="row">
						<span class="left col-xs-3 col-lg-3 col-md-3 col-sm-3">总体评分</span>
						<span class="center col-xs-6 col-lg-6 col-md-6 col-sm-6"><i class="fa fa-heart heart" aria-hidden="true"></i>4.5分</span>
						<a href="#" class="right col-xs-3 col-lg-3 col-md-3 col-sm-3">全部评价&raquo;</a>
					</div>
				</div>
				<hr style="width:100%;margin: 0">
				<ul>
					<li>
						<div class="comment_content row">
							<div class="content_user col-xs-3 col-lg-3 col-md-3 col-sm-3">
								<div><img src="img/user.png"></div>
								<div>Mr.Joy</div>
								<div><i class="fa fa-heart heart" aria-hidden="true"></i>4.5分</div>
							</div>
							<div class="content_info col-xs-9 col-lg-9 col-md-9 col-sm-9 ">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<ul>
									<div class="row">
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg1.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg2.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg3.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3 info_date">2016年09月28日</li>
									</div>
								</ul>
							</div>
						</div>
						<hr style="width:100%;margin: 0">
					</li>
					<li>
						<div class="comment_content row">
							<div class="content_user col-xs-3 col-lg-3 col-md-3 col-sm-3">
								<div><img src="img/user.png"></div>
								<div>Mr.Joy</div>
								<div><i class="fa fa-heart heart" aria-hidden="true"></i>4.5分</div>
							</div>
							<div class="content_info col-xs-9 col-lg-9 col-md-9 col-sm-9 ">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<ul>
									<div class="row">
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg1.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg2.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg3.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3 info_date">2016年09月28日</li>
									</div>
								</ul>
							</div>
						</div>
						<hr style="width:100%;margin: 0">
					</li>
					<li>
						<div class="comment_content row">
							<div class="content_user col-xs-3 col-lg-3 col-md-3 col-sm-3">
								<div><img src="img/user.png"></div>
								<div>Mr.Joy</div>
								<div><i class="fa fa-heart heart" aria-hidden="true"></i>4.5分</div>
							</div>
							<div class="content_info col-xs-9 col-lg-9 col-md-9 col-sm-9 ">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<ul>
									<div class="row">
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg1.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg2.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3"><img src="img/bg3.png"></li>
										<li class="col-lg-3 col-md-3 col-sm-3 info_date">2016年09月28日</li>
									</div>
								</ul>
							</div>
						</div>
						<hr style="width:100%;margin: 0">
					</li>
				</ul>
				<div class="page col-xs-12 col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
							<nav>
								<ul class="pagination">
									<li><a href="#">&laquo;首页</a></li>
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
									<li><a href="#">尾页&raquo;</a></li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-xs-4 col-lg-4 col-md-4 col-sm-4">
				<img src="img/right_side.png">
			</div>
		</div>
	</div>

</div>
<?php include "footer.php" ;?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>