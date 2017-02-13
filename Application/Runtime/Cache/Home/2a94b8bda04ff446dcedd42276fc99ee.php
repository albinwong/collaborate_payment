<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>合作缴费</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
<link href="/work/pay_center/Public/home/css/layer.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/order.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/swiper-3.4.1.min.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/weui.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/common.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/throughsetting.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/index.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/swiper-3.4.1.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/layer.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/order.js" type="text/javascript"></script>
</head>
<body>
    
    <header>
        <div class="pull-left">
        <img class="icon-rotate fa fa-rotate-left" onclick="back();" src="/work/pay_center/Public/home/img/Arrow.png"/>
        </div>
        <div class="shuaxin" onclick="window.history.go(0)">
            <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/new.png"/>
        </div>
        <div class="login-title">合作缴费</div>
    </header>
    <script type="text/javascript">
        function back(){
            window.location.href = "http://www.huimengtongbao.com:8081/hmtb/html/index/index.html";
        }
    </script>

    <div class="weui_tab">
        
    <a href="/work/pay_center/index.php/Home/main/index" class="weui_btn weui_btn_default" style="margin-top:80px;"><img src="/work/pay_center/Public/home/img/hmtb.png"/></a>
    <a href="/work/pay_center/index.php/Home/direct/index" class="weui_btn weui_btn_default"><img src="/work/pay_center/Public/home/img/zxsc.png"/></a>
    <a href="/work/pay_center/index.php/Home/inte/index" class="weui_btn weui_btn_default"><img src="/work/pay_center/Public/home/img/jfsc.png"/></a>
    <a href="/work/pay_center/index.php/Home/insurance/index" class="weui_btn weui_btn_default"><img src="/work/pay_center/Public/home/img/bxcs.png"/></a>
    <a href="/work/pay_center/index.php/Home/index/info/" class="weui_btn weui_btn_default"><img src="/work/pay_center/Public/home/img/zszx.png"/></a>

        
    </div>
</body>
</html>