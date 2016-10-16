<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申诉</title>
    <base href="<?php echo site_url() ;?>">
    <link rel="stylesheet" href="css/dialog.css">
    <link rel="stylesheet" href="css/tanceng.css">
    <link rel="stylesheet" href="css/complaint_details.css">
</head>
<body>

    <div class="title">申&nbsp;&nbsp;&nbsp;诉</div>
    <div id="complaint-content">
        <div class="complaint-content-items">
            <div class="complaint-content-info">
                <span class="order-number-title">订单编号:</span>
                <span class="order-number-content">123424324234234</span>
                <span class="house-name-title">房屋名称:</span>
                <span class="house-name-content">收费的防辐射服</span>
                <span class="house-owner-title">房东名字:</span>
                <span class="house-owner-content">JOYdfsf</span>
            </div>
            <div class="user-img">
                <img class="user-img-content" style="background: red" src="img/head.png" alt="">
            </div>
        </div>
        <div class="show-complaint-info">
            <div class="show-complaint-content">
                <span class="show-complaint-content-title">申诉内容：</span>
                <p class="show-complaint-content-words">的方式发生的方式发生的发生法规发生的麻烦你</p>
            </div>
            <div class="show-complaint-reply">
                <span class="show-complaint-reply-title">申诉回复：</span>
                <p class="show-complaint-reply-words">去年的时刻你放开那款女的你试试看的覅我金额分科目考试是咖啡就卡萨发了吗v卡及分解落实到了福克斯的两个咳嗽构建</p>
            </div>
        </div>
        <div id="submit-complaint">继&nbsp;续&nbsp;申&nbsp;诉</div>
    </div>

    <div class="again-title">再&nbsp;次&nbsp;申&nbsp;诉</div>
    <div class="complaint-again">
        <div class="complaint-content-input">
            <textarea name="" class="complaint-content-input-text" cols="30" rows="10" placeholder="请输入反馈内容（不得多于225个字..）"></textarea>
        </div>
        <div class="complaint-again-btn">提&nbsp;交</div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        $('#submit-complaint').on('click', function(){
            $('#complaint-content, .title').remove();
//
        })
    </script>
</body>
</html>