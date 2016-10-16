<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        #header{
            position: relative;
            background: transparent;
        }
        #header-menu #header-nav li a{
            color: #f0f0f0;
        }
        #header-menu #header-nav .break{
            color: #fff;
        }
        #header .shadow {
            background: transparent;
        }
        #header-menu #header-nav li{
            float: right;
        }
    </style>
</head>
<body>
<?php //include 'header.php';?>
    <div id="background">
        <div id="header">
            <div class="container">
                <div id="header-menu">
                    <ul id="header-nav" class="header-nav">
                        <li><a href="javascript:;">注册</a></li>
                        <li class="break">|</li>
                        <li><a href="javascript:;">登陆</a></li>
                    </ul>
                </div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="container">
            <p class="logo"><img src="img/index_logo.png" alt=""></p>
            <div class="content">
                <div class="content-wrapper">
                    <div class="input">
                        <div id="position">
                            <div class="position-wrapper">
                                <span>法国</span>
                                <div class="text">巴黎</div>
                                <span class="caret"></span>
                            </div>
                        </div>
                        <div id="position-menu-wrapper">
                            <div class="Franch">法国</div>
                            <div class="menu-wrapper">
                                <ul class="menu" role="menu">
                                    <li>巴黎</li>
                                    <li>马赛</li>
                                    <li>里昂</li>
                                    <li>图卢兹</li>
                                    <li>南特</li>
                                    <li>波尔多</li>

                                </ul>
                            </div>
                        </div>
                        <input type="hidden" class="town">
                        <input type="text" placeholder="请输入你的学校或位置">
                        <buttom type="submit">前往定制&nbsp&nbsp&gt</buttom>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/require.js"></script>
<script src="js/index.js"></script>
<script src="js/footer.js"></script>
</body>
</html>