<!DOCTYPE html>
<html>
<head>
    <title>房屋预定信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/booklist.css">
    <link rel="stylesheet" href="css/ali_icon.css">
    <style>
        #bb{
            height: 100px;
            width: 100px;
            background-color: red;
        }
    </style>
</head>
<body>
<?php include "header.php";?>
<div class="container">
    <div id="book"></div>
</div>
<?php include "footer.php";?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/react.js"></script>
<script src="js/react-dom.js"></script>
<script src="js/browser.js"></script>
<script type="text/babel" src="js/booklist.js" ></script>
</body>
</html>