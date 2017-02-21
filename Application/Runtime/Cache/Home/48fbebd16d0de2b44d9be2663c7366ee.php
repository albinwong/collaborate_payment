<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>银行转账</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
<link href="/work/pay_center/Public/home/css/order.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/swiper-3.4.1.min.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/weui.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/common.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/throughsetting.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/order.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/swiper-3.4.1.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/js/pay.js" language="javascript"></script>
</head>

<body style="background:#FFF;">
<header>
    <div class="pull-left" onclick="window.history.back()">
    	<img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/Arrow.png"/>
    </div>
    <div class="shuaxin" onclick="window.history.go(0)">
        <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/new.png"/>
    </div>
    <div class="login-title">银行转账</div>
</header>
<div class="weui_tab">
    <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
        <div class="pay">付款金额:<span><?php echo ($_SESSION['pay']['figure']); ?></span>元</div>
        <div class="weui_cell" style="font-size:0.8rem;">
            <div class="weui_cell_hd">
                <img src="/work/pay_center/Public/home/img/pay/pay-5.png" alt="icon" style="width:20px;margin-right:5px;display:block">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="float:left; font-weight:bold;">对公账号名：</p>
                <p>上海仝益资产管理有限公司</p>
            </div>
        </div>
        <div class="weui_cell" style="font-size:0.8rem;">
            <div class="weui_cell_hd">
                <img src="/work/pay_center/Public/home/img/pay/pay-6.png" alt="icon" style="width:20px;margin-right:5px;display:block">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="float:left; font-weight:bold;">账号：</p>
                <p>1219 1613 3710 701</p>
            </div>
        </div>
        <div class="weui_cell" style="font-size:0.8rem;">
            <div class="weui_cell_hd">
                <img src="/work/pay_center/Public/home/img/pay/pay-7.png" alt="icon" style="width:20px;margin-right:5px;display:block">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="float:left; font-weight:bold;">开户行：</p>
                <p>招商银行上海市金钟路支行</p>
            </div>
        </div>
        <div class="beizhu">
            <p style="color:red;">*注：转账成功后请及时联系我司财务！</p>
            <a href="tel:4009906128" style="color:red;">电话：4009906128</a>
        </div>
        <a href="/work/pay_center/index.php/Home/index/index" class="weui_btn weui_btn_primary" style="background:#c90909;">确认转账</a>
    </div>
</div>


</body>
</html>