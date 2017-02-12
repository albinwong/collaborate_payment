<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>合作缴费</title>
<meta name="viewport" content="width=divice-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no"/>
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
            <div class="pull-left" onclick="window.history.back()">
            <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/Arrow.png"/>
            </div>
            <div class="shuaxin" onclick="window.history.go(0)">
                <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/new.png"/>
            </div>
            <div class="login-title">积分商城<span>（合伙人）</span></div>
        </header>
    
    <div class="weui_tab">
        
    <link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
    <script src="/work/pay_center/Public/home/js/js/pay.js" type="text/javascript"></script>
<div class="weui_tab" style="background:#FFF;">
    <div class="weui_tab_bd">
        <form action="/work/pay_center/index.php/Home/inte/rec" method="post">
        <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
            <div class="subordinate">
                <p>所属招商中心：</p>
                <select class="insubo" name="mc_id">
                    <?php if(is_array($mc)): foreach($mc as $key=>$mlist): ?><option value="<?php echo ($mlist["mid"]); ?>"><?php echo ($mlist["name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </div>
            <input class="weui_btn weui_btn_warn" style="width:80%;text-align:center;" value="确认" type="submit">
        </div>
    </form>
</div>
</div>

        
    </div>
</body>
</html>