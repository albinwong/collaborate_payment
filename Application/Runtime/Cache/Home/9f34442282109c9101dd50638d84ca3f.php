<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>汇盟通宝</title>
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
            <div class="pull-left" onclick="window.history.back()">
            <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/Arrow.png"/>
            </div>
            <div class="shuaxin" onclick="window.history.go(0)">
                <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/new.png"/>
            </div>
            <div class="login-title">汇盟通宝</div>
        </header>
    
    <div class="weui_tab">
        
<link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/home/js/js/pay.js" language="javascript"></script>
<div class="weui_tab" style="background:#FFF;">
    <div class="weui_tab_bd">
        <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
            <div class="pay">
                <p>付款金额:<span><?php echo ($figure); ?></span>元</p>
            </div>
            <div class="weui_cells_title">支付方式</div>
                <div class="weui_cells weui_cells_radio">
                    <label class="weui_cell weui_check_label" for="alipay">
                        <div class="weui_cell_bd weui_cell_primary">
                            <img src="/work/pay_center/Public/home/img/pay/pay-1.png" />
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" class="weui_check" name="paysWay" id="alipay" value="alipay">
                            <span class="weui_icon_circle"></span>
                        </div>
                    </label>
                    <label style="display: none;" class="weui_cell weui_check_label" for="wechat">
                        <div class="weui_cell_bd weui_cell_primary">
                            <img src="/work/pay_center/Public/home/img/pay/pay-2.png" />
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" name="paysWay" class="weui_check" id="wechat" value="wechatpay">
                            <span class="weui_icon_circle"></span>
                        </div>
                    </label>
                    <label id='jiejifukuan' class="weui_cell weui_check_label" for="yinlian">
                        <div class="weui_cell_bd weui_cell_primary">
                            <img src="/work/pay_center/Public/home/img/pay/pay-8.png" />
                        </div>
                        <div class="weui_cell_ft" data-toggle="modal" data-target="#exampleModal">
                            <input type="radio" name="paysWay" class="weui_check" id="yinlian" value="yinlian">
                            <span class="weui_icon_circle"></span>
                        </div>
                    </label>
                </div>
            <form action="/work/pay_center/index.php/Home/Inte/addOrder" method="post">
                <div class="btn-login" style="bottom:0px; width: 100%;">
                    <input class="add weui_btn weui_btn_primary" type="submit" value="确 认 付 款">
                </div>
                <input type="hidden" name="pay_type" value="">
            </form>
        </div>
    </div>
</div>
<script>
$(function() {
    $(".weui_check_label").click(function(){
        var n=$(".weui_check_label").find("span").attr("class");
            i=$(this).index();
        if("n=weui_icon_circle"){
            $(this).find("span").attr("class","weui_icon_success");
            $(this).siblings().find("span").attr("class","weui_icon_circle");
        }else{
            $(this).find("span").attr("class","weui_icon_circle");
        }
        if(i==0){
            $('input[name=pay_type]').val("支付宝");
        }else if(i==1){
            $('input[name=pay_type]').val("微信");
        }else{
            $('input[name=pay_type]').val("银行转账");
        }
    });
});
</script>

        
    </div>
</body>
</html>